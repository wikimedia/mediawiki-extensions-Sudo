<?php
/**
 * Sudo
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (https://mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
 * @license GPL-2.0-or-later
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

class SpecialSudo extends SpecialPage {
	protected $mode, $target, $reason, $errors;

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'Sudo', 'sudo' );
	}

	public function doesWrites() {
		return true;
	}

	/**
	 * Show the special page
	 *
	 * @param string|null $par Name of the user to sudo into
	 */
	public function execute( $par ) {
		$request = $this->getRequest();
		$user = $this->getUser();

		$this->mode = $request->getText( 'mode' );
		if ( $this->mode == 'success' ) {
			$this->showSuccessPage();
			return;
		}
		if ( $this->mode == 'unsudo' ) {
			$this->showUnsudoPage();
			return;
		}

		// Check that the user is allowed to access this special page...
		if ( !$user->isAllowed( 'sudo' ) ) {
			throw new PermissionsError( 'sudo' );
		}

		// ...and that the user isn't blocked
		if ( $user->isBlocked() ) {
			throw new UserBlockedError( $user->getBlock() );
		}

		// ...and that the database is not in read-only mode.
		if ( wfReadOnly() ) {
			throw new ReadOnlyError;
		}

		// Set page title and other stuff
		$this->setHeaders();

		$this->target = $request->getText( 'target', $par );
		$this->reason = $request->getText( 'reason', '' );
		$this->errors = [];

		$this->showSudoForm();
		if ( $this->target != '' && $request->wasPosted() ) {
			$this->doSudo();
		}
		$this->showErrors();
	}

	function showSuccessPage() {
		if ( !isset( $_SESSION['wsSudoId'] ) || $_SESSION['wsSudoId'] < 0 ) {
			$this->showError( 'sudo-error-nosudo' );
		} else {
			$this->setHeaders();
			$suUser = User::newFromId( $_SESSION['wsSudoId'] );
			$originalUser = $this->getUser();
			$linkRenderer = $this->getLinkRenderer();
			$this->getOutput()->addHTML( $this->msg( 'sudo-success' )
					->rawParams( $linkRenderer->makeLink( $suUser->getUserPage(), $suUser->getName() ) )
					->rawParams( $linkRenderer->makeLink( $originalUser->getUserPage(), $originalUser->getName() ) )
					->params( $originalUser->getName() )
					->parse()
			);
		}
	}

	function showUnsudoPage() {
		if ( !isset( $_SESSION['wsSudoId'] ) || $_SESSION['wsSudoId'] < 0 ) {
			$this->showError( 'sudo-error-nosudo' );
		} else {
			$out = $this->getOutput();
			$originalUser = $this->getUser();
			$suUser = User::newFromId( $_SESSION['wsSudoId'] );

			if ( $this->getRequest()->wasPosted() ) {
				unset( $_SESSION['wsSudoId'] );
				$suUser->setCookies();
				$out->redirect( $this->getPageTitle()->getFullURL() );
				return;
			}

			$this->setHeaders();
			$out->setPageTitle( $this->msg( 'unsudo' ) );

			$linkRenderer = $this->getLinkRenderer();

			$out->addHTML(
				Xml::openElement( 'form', [ 'method' => 'post',
					'action' => $this->getPageTitle()->getFullURL( 'mode=unsudo' ) ] ) .
				Html::hidden( 'title', $this->getPageTitle()->getPrefixedText() )
			);
			$out->addHTML(
				$this->msg( 'sudo-unsudo' )
					->rawParams( $linkRenderer->makeLink( $suUser->getUserPage(), $suUser->getName() ) )
					->rawParams( $linkRenderer->makeLink( $originalUser->getUserPage(), $originalUser->getName() ) )
					->params( $originalUser->getName() )
					->parse() .
				Xml::submitButton( $this->msg( 'sudo-unsudo-submit' )->text() ) .
				Xml::closeElement( 'form' )
			);
		}
	}

	function showSudoForm() {
		$this->getOutput()->addModules( 'mediawiki.userSuggest' );
		$this->getOutput()->addHTML(
			Xml::openElement( 'form', [ 'method' => 'post',
				'action' => $this->getPageTitle()->getLocalURL() ] ) .
			Html::hidden( 'title', $this->getPageTitle()->getPrefixedText() ) .
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', [], $this->msg( 'sudo-form' )->text() ) .
			Xml::inputLabel( $this->msg( 'sudo-user' )->text(), 'target', 'sudo-user', 20, $this->target, [ 'class' => 'mw-autocomplete-user' ] ) . ' ' .
			Xml::inputLabel( $this->msg( 'sudo-reason' )->text(), 'reason', 'sudo-reason', 45, $this->reason ) . ' ' .
			Xml::submitButton( $this->msg( 'sudo-submit' )->text() ) .
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'form' ) . "\n"
		);
	}

	function addError( $error = '' ) {
		$this->errors[] = $error;
	}

	function showError( $error ) {
		$out = $this->getOutput();
		$out->addHTML( Xml::openElement( 'div', [ 'class' => 'sudo-error' ] ) );
		$out->addWikiMsg( 'sudo-error', $this->msg( $error )->text() );
		$out->addHTML( Xml::closeElement( 'div' ) );
	}

	function showErrors() {
		foreach ( $this->errors as $error ) {
			$this->showError( $error );
		}
	}

	function doSudo() {
		$originalUser = $this->getUser();
		$u = User::newFromName( $this->target );
		if ( $u === null ) {
			$this->addError( 'sudo-error-sudo-invaliduser' );
			return;
		}
		if ( User::isIP( $u->getName() ) ) {
			$this->addError( 'sudo-error-sudo-ip' );
			return;
		}
		if ( $u->isAnon() ) {
			$this->addError( 'sudo-error-sudo-nonexistent' );
			return;
		}
		if ( $u->getName() === $originalUser->getName() ) {
			$this->addError( 'sudo-error-sudo-self' );
			return;
		}

		$linkRenderer = $this->getLinkRenderer();
		$log = new LogPage( 'sudo' );
		$log->addEntry( 'sudo', $originalUser->getUserPage(), $this->reason,
			[ $linkRenderer->makeLink( $u->getUserPage(), $u->getName() ) ]
		);

		if ( !isset( $_SESSION['wsSudoId'] ) || $_SESSION['wsSudoId'] < 0 ) {
			$_SESSION['wsSudoId'] = $originalUser->getId();
		}
		$u->setCookies();

		$this->getOutput()->redirect( $this->getPageTitle()->getFullURL( 'mode=success' ) );
	}

	protected function getGroupName() {
		return 'users';
	}
}
