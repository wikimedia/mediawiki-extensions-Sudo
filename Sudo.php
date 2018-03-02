<?php
/**
 * Sudo
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://danf.ca/mw/)
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:Sudo Documentation
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}

// Display extension properties on MediaWiki.
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Sudo',
	'version' => '0.5.0',
	'author' => array(
		'[https://www.mediawiki.org/wiki/User:Dantman Daniel Friesen]',
		'...'
	),
	'descriptionmsg' => 'sudo-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Sudo',
	'license-name' => 'GPL-2.0-or-later',
);

// Register extension messages and other localisation.
$wgMessagesDirs['Sudo'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SudoAlias'] = __DIR__ . '/Sudo.alias.php';

// Provide new sepecial page
$wgAutoloadClasses['SpecialSudo'] = __DIR__ . '/SpecialSudo.php';
$wgSpecialPages['Sudo'] = 'SpecialSudo';

// New user right, required to use Special:Sudo
$wgAvailableRights[] = 'sudo';

// New log type, all sudo actions are logged to this log (Special:Log/sudo)
$wgLogTypes[] = 'sudo';
$wgLogNames['sudo'] = 'sudo-logpagename';
$wgLogHeaders['sudo'] = 'sudo-logpagetext';
$wgLogActions['sudo/sudo'] = 'sudo-logentry';

// Register extension hooks.
$wgHooks['UserLogoutComplete'][] = 'wfSudoLogout';
$wgHooks['PersonalUrls'][] = 'wfSudoPersonalUrls';

// Do the extension's action.
function wfSudoLogout( &$user, &$inject_html ) {
	// Unset wsSudoId when we logout.
	// We don't want to be in a sudo login while logged out.
	unset( $_SESSION['wsSudoId'] );
	return true;
}

function wfSudoPersonalUrls( &$personal_urls, &$title ) {
	// Replace logout link with a unsudo link while in a sudo login.
	if( isset( $_SESSION['wsSudoId'] ) && $_SESSION['wsSudoId'] > 0 ) {
		$personal_urls['logout'] = array(
			'text' => wfMessage( 'sudo-personal-unsudo' )->text(),
			'href' => Skin::makeSpecialUrl( 'Sudo', 'mode=unsudo' ),
			'active' => false
		);
	}
	return true;
}
