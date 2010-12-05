<?php
/**
 * Sudo
 * @package Sudo
 * @author Daniel Friesen (http://mediawiki.org/wiki/User:Dantman) <wiki@danielfriesen.name>
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

$wgExtensionCredits['otjher'][] = array (
	'name' => 'Sudo',
	'url' => 'http://wiki-tools.com/wiki/Sudo',
	'version' => '0.1a',
	'author' => "[http://mediawiki.org/wiki/User:Dantman Daniel Friesen] [mailto:Daniel%20Friesen%20%3Cwiki@danielfriesen.name%3E <dan_the_man@telus.net>]",
	'description' => "Allows sudoers to login as other users."
);

$wgAvailableRights[] = 'sudo';
$wgExtensionMessagesFiles['Sudo'] = dirname(__FILE__).'/Sudo.i18n.php';
$wgAutoloadClasses['SpecialSudo'] = dirname(__FILE__).'/SpecialSudo.php';
$wgSpecialPages['Sudo']           = 'SpecialSudo';
$wgSpecialPageGroups['Sudo']      = 'users';

$wgLogTypes[] = 'sudo';
$wgLogNames['sudo'] = 'sudo-logpagename';
$wgLogHeaders['sudo'] = 'sudo-logpagetext';
$wgLogActions['sudo/sudo'] = 'sudo-logentry';

$wgHooks['UserLogoutComplete'][] = 'efSudoLogout';
$wgHooks['PersonalUrls'][]  = 'efSudoPersonalUrls';

function efSudoLogout( &$user, &$inject_html ) {
	## Unset wsSudoId when we logout. We don't want to be in a sudo login while logged out.
	unset($_SESSION['wsSudoId']);
	return true;
}

function efSudoPersonalUrls( &$personal_urls, &$wgTitle ) {
	## Replace logout link with a unsudo link while in a sudo login.
	if( isset($_SESSION['wsSudoId']) && $_SESSION['wsSudoId'] > 0 ) {
		$personal_urls['logout'] = array(
				'text' => wfMsg( 'sudo-personal-unsudo' ),
				'href' => Skin::makeSpecialUrl( 'Sudo', 'mode=unsudo' ),
				'active' => false
		);
	}
	return true;
}
