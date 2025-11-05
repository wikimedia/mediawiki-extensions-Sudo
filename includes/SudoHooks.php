<?php

use MediaWiki\Skin\SkinComponentUtils;

// phpcs:disable MediaWiki.NamingConventions.LowerCamelFunctionsName.FunctionName
class SudoHooks {

	/**
	 * Do the extension's action.
	 *
	 * @param User &$user
	 * @param string &$inject_html
	 */
	public static function onUserLogoutComplete( &$user, &$inject_html ) {
		// Unset wsSudoId when we logout.
		// We don't want to be in a sudo login while logged out.
		if ( isset( $_SESSION['wsSudoId'] ) && $_SESSION['wsSudoId'] > 0 ) {
			unset( $_SESSION['wsSudoId'] );
		}
	}

	/**
	 * @param SkinTemplate $sktemplate
	 * @param array &$links
	 */
	public static function onSkinTemplateNavigation__Universal( $sktemplate, &$links ) {
		// Replace logout link with a unsudo link while in a sudo login.
		if ( isset( $_SESSION['wsSudoId'] ) && $_SESSION['wsSudoId'] > 0 ) {
			$links['user-menu']['logout'] = [
				'text' => $sktemplate->msg( 'sudo-personal-unsudo' )->text(),
				'href' => SkinComponentUtils::makeSpecialUrl( 'Sudo', 'mode=unsudo' ),
				'active' => false
			];
		}
	}

}
