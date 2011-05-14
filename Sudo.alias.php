<?php
/**
 * Aliases for Special:Sudo
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = array();

/** English (English) */
$specialPageAliases['en'] = array(
	'Sudo' => array( 'Sudo' ),
);

/** Arabic (العربية) */
$specialPageAliases['ar'] = array(
	'Sudo' => array( 'سودو' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;