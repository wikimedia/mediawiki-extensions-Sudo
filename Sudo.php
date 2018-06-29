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
$wgExtensionCredits['other'][] = [
	'path' => __FILE__,
	'name' => 'Sudo',
	'version' => '0.5.0',
	'author' => [
		'[https://www.mediawiki.org/wiki/User:Dantman Daniel Friesen]',
		'...'
	],
	'descriptionmsg' => 'sudo-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Sudo',
	'license-name' => 'GPL-2.0-or-later',
];

// Register extension messages and other localisation.
$wgMessagesDirs['Sudo'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SudoAlias'] = __DIR__ . '/Sudo.alias.php';

// Provide new special page
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
$wgAutoloadClasses['SudoHooks'] = __DIR__ . '/SudoHooks.php';
$wgHooks['UserLogoutComplete'][] = 'SudoHooks::onUserLogoutComplete';
$wgHooks['PersonalUrls'][] = 'SudoHooks::onPersonalUrls';
