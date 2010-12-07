<?php
/**
 * Sudo
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://mediawiki.org/wiki/User:Dantman) <mediawiki@danielfriesen.name>
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

$messages = array();

/** English
 * @author Daniel Friesen
 */
$messages['en'] = array(
	'sudo'                        => "Log into another user's account",
	'unsudo'                      => 'Return to your account',
	'sudo-desc'                   => 'Allows sudoers to login as other users',
	'sudo-personal-unsudo'        => 'Return to your account',
	'sudo-form'                   => 'Login to:',
	'sudo-user'                   => 'Username:',
	'sudo-reason'                 => 'Reason:',
	'sudo-submit'                 => 'Login',
	'sudo-unsudo'                 => 'Welcome $1, you are currently logged into the wiki as $2, just submit the form to return to your normal login.',
	'sudo-unsudo-submit'          => 'Return',
	'sudo-success'                => 'Welcome $1, you are now logged into the wiki as $2.',
	'sudo-error'                  => 'Sudo error: $1',
	'sudo-error-sudo-invaliduser' => 'Invalid username',
	'sudo-error-sudo-ip'          => 'Cannot login to an IP address',
	'sudo-error-sudo-nonexistent' => 'That user does not exist',
	'sudo-error-sudo-self'        => 'Cannot sudo into yourself',
	'sudo-error-nosudo'           => 'You do not appear to be inside of a sudo login',
	'sudo-logpagename'            => 'Sudo log',
	'sudo-logpagetext'            => 'This is a log of all uses of sudo.',
	'sudo-logentry'               => "logged into $2's account",
	'right-sudo'                  => "Login to another user's account",
);

