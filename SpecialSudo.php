<?php
/**
 * Sudo
 * @package Sudo
 * @author Daniel Friesen (http://www.wikia.com/wiki/User:Dantman) <wiki@danielfriesen.name>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

class SpecialSudo extends SpecialPage {
	protected $mMode, $mSkin, $mTarget, $mReason, $mErrors;
	
	function __construct() {
		SpecialPage::SpecialPage( 'Sudo', 'sudo' );
		wfLoadExtensionMessages('Sudo');
	}
	 
	/**
	 * Execute
	 */
	function execute( $par = '' ) {
		global $wgOut, $wgRequest, $wgUser;
		
		$this->mMode = $wgRequest->getText('mode');
		if( $this->mMode == 'success' ) return $this->showSuccessPage();
		if( $this->mMode == 'unsudo' ) return $this->showUnsudoPage();
		
		if( !$wgUser->isAllowed( 'sudo' ) ) {
			$wgOut->permissionRequired( 'sudo' );
			return;
		}
		if( $wgUser->isBlocked() ) {
			$wgOut->blockedPage();
			return;
		}
		if( wfReadOnly() ) {
			$wgOut->readOnlyPage();
			return;
		}
		
		$this->setHeaders();
		
		$this->mSkin   = $wgUser->getSkin();
		$this->mTarget = $wgRequest->getText('target', $par);
		$this->mReason = $wgRequest->getText('reason', '');
		$this->mErrors = array();
		
		$this->showSudoForm();
		if( $this->mTarget != '' && $wgRequest->wasPosted() ) $this->doSudo();
		$this->showErrors();
	}
	
	function showSuccessPage() {
		global $wgOut, $wgUser;
		if( !isset($_SESSION['wsSudoId']) || $_SESSION['wsSudoId'] < 0 ) {
			$this->showError('sudo-error-nosudo');
		} else {
			$this->setHeaders();
			$s = $wgUser->getSkin();
			$suUser = User::newFromId($_SESSION['wsSudoId']);
			$wgOut->addWikiMsgArray( 'sudo-success', array(
				$s->makeLinkObj( $suUser->getUserPage(), $suUser->getName() ),
				$s->makeLinkObj( $wgUser->getUserPage(), $wgUser->getName() ) ),
				array('replaceafter') );
		}
	}
	
	function showUnsudoPage() {
		global $wgOut, $wgUser, $wgRequest;
		if( !isset($_SESSION['wsSudoId']) || $_SESSION['wsSudoId'] < 0 ) {
			$this->showError('sudo-error-nosudo');
		} else {
			$suUser = User::newFromId($_SESSION['wsSudoId']);
			if( $wgRequest->wasPosted() ) {
				unset($_SESSION['wsSudoId']);
				$suUser->setCookies();
				$wgOut->redirect($this->getTitle()->getFullURL());
				return;
			}
			$this->setHeaders();
			$wgOut->setPageTitle(wfMsg('unsudo'));
			$s = $wgUser->getSkin();
			
			$wgOut->addHTML(
				Xml::openElement('form', array( 'method' => 'post',
					'action' => $this->getTitle()->getFullURL('mode=unsudo') )).
				Xml::hidden('title', $this->getTitle()->getPrefixedText()) );
			$wgOut->addWikiMsgArray( 'sudo-unsudo', array(
				$s->makeLinkObj( $suUser->getUserPage(), $suUser->getName() ),
				$s->makeLinkObj( $wgUser->getUserPage(), $wgUser->getName() ) ),
				array('replaceafter') );
			$wgOut->addHTML(
				Xml::submitButton(wfMsg('sudo-unsudo-submit')).
				Xml::closeElement('form'));
		}
	}
	
	function showSudoForm() {
		global $wgOut;
		$wgOut->addHTML(
			Xml::openElement( 'form', array( 'method' => 'post',
				'action' => $this->getTitle()->getLocalURL() ) ) .
			Xml::hidden( 'title', $this->getTitle()->getPrefixedText() ) .
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', array(), wfMsg( 'sudo-form' ) ) .
			Xml::inputLabel( wfMsg( 'sudo-user' ), 'target', 'sudo-user', 20, $this->mTarget ) . ' ' .
			Xml::inputLabel( wfMsg( 'sudo-reason' ), 'reason', 'sudo-reason', 45, $this->mReason ) . ' ' .
			Xml::submitButton( wfMsg( 'sudo-submit' ) ) .
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'form' ) . "\n"
		);
	}
	
	function addError( $error = '' ) {
		$this->mErrors[] = $error;
		return;
	}
	
	function showError( $error ) {
		$wgOut->addHTML(
			Xml::openElement('div', array( 'class' => 'sudo-error' )).
			wfMsgHtml('sudo-error',wfMsg($error)).
			Xml::closeElement('div')
		);
	}
	
	function showErrors() {
		global $wgOut;
		foreach( $this->mErrors as $error ) {
			$this->showError( $error );
		}
	}
	
	function doSudo() {
		global $wgOut, $wgUser;
		$u = User::newFromName( $this->mTarget );
		if( is_null($u) ) return $this->addError('sudo-error-sudo-invaliduser');
		if( User::isIP($u->getName()) || User::isIPv6($u->getName()) ) return $this->addError('sudo-error-ip');
		if( $u->isAnon() ) return $this->addError('sudo-error-sudo-nonexistant');
		if( $u->getName() === $wgUser->getName() ) return $this->addError('sudo-error-sudo-self');
		
		$s = $wgUser->getSkin();
		$log = new LogPage( 'sudo' );
		$log->addEntry( 'sudo', $wgUser->getUserPage(), $this->mReason,
			array( $s->makeLinkObj( $u->getUserPage(), $u->getName() ) ) );
		
		if( !isset($_SESSION['wsSudoId']) || $_SESSION['wsSudoId'] < 0 ) $_SESSION['wsSudoId'] = $wgUser->getId();
		$u->setCookies();
		
		$wgOut->redirect( $this->getTitle()->getFullURL( 'mode=success' ) );
	}
}
