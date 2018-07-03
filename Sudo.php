<?php
/**
 * Sudo
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://danf.ca/mw/)
 * @license GPL-2.0-or-later
 * @link https://www.mediawiki.org/wiki/Extension:Sudo Documentation
 */

// Ensure that the script cannot be executed outside of MediaWiki.
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
}

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Sudo' );
	wfWarn(
		'Deprecated PHP entry point used for Sudo extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Sudo extension requires MediaWiki 1.29+' );
}
