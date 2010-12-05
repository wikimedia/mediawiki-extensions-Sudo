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

$messages = array();

/** English
 * @author Daniel Friesen
 */
$messages['en'] = array(
	'sudo'                        => 'Sudo',
	'unsudo'                      => 'Unsudo',
	'sudo-personal-unsudo'        => 'unsudo',
	'sudo-form'                   => 'Sudo into:',
	'sudo-user'                   => 'Username: ',
	'sudo-reason'                 => 'Reason: ',
	'sudo-submit'                 => 'sudo',
	'sudo-unsudo'                 => 'Welcome $1, you are currently sudoed into the wiki as $2, just submit the form to return to your normal login.',
	'sudo-unsudo-submit'          => 'unsudo',
	'sudo-success'                => 'Welcome $1, you are now sudoed into the wiki as $2.',
	'sudo-error'                  => 'Could not Sudo: $1',
	'sudo-error-sudo-invaliduser' => 'Invalid Username',
	'sudo-error-sudo-ip'          => 'Cannot login to an IP',
	'sudo-error-sudo-nonexistant' => 'That user does not exist',
	'sudo-error-sudo-self'        => 'Cannot sudo into yourself',
	'sudo-error-nosudo'           => 'You do not appear to be inside of a sudo login',
	'sudo-logpagename'            => 'Sudo log',
	'sudo-logpagetext'            => 'This is a log of all uses of sudo.',
	'sudo-logentry'               => 'sudoed into $2',
);
