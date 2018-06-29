<?php

class SudoHooks {

	// Do the extension's action.
	public static function onUserLogoutComplete( &$user, &$inject_html ) {
		// Unset wsSudoId when we logout.
		// We don't want to be in a sudo login while logged out.
		unset( $_SESSION['wsSudoId'] );
		return true;
	}

	public static function onPersonalUrls( &$personal_urls, &$title ) {
		// Replace logout link with a unsudo link while in a sudo login.
		if ( isset( $_SESSION['wsSudoId'] ) && $_SESSION['wsSudoId'] > 0 ) {
			$personal_urls['logout'] = [
				'text' => wfMessage( 'sudo-personal-unsudo' )->text(),
				'href' => Skin::makeSpecialUrl( 'Sudo', 'mode=unsudo' ),
				'active' => false
			];
		}
		return true;
	}

}