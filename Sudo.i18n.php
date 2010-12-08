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
	'sudo-unsudo'                 => 'Welcome $1, you are currently logged into the wiki as $2. Click on "{{int:sudo-unsudo-submit}}" to return to your own login.',
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

/** Message documentation (Message documentation)
 * @author The Evil IP address
 */
$messages['qqq'] = array(
	'sudo-desc' => '{{desc}}',
);

/** German (Deutsch)
 * @author Kghbln
 * @author The Evil IP address
 */
$messages['de'] = array(
	'sudo' => 'Mit anderem Benutzerkonto anmelden',
	'unsudo' => 'Zu deinem eigenen Benutzerkonto zurückkehren',
	'sudo-desc' => 'Ermöglicht die Anmeldung mit einem anderen Benutzerkonto als dem Eigenen („sudo“)',
	'sudo-personal-unsudo' => 'Zu deinem eigenen Benutzerkonto zurückkehren',
	'sudo-form' => 'Anmelden als:',
	'sudo-user' => 'Benutzername:',
	'sudo-reason' => 'Grund:',
	'sudo-submit' => 'Anmelden',
	'sudo-unsudo' => 'Willkommen $1, du bist momentan als Benutzer „$2“ im Wiki angemeldet. Sende einfach das Formular, um zu deinem normalen Benutzerkonto zurückzukehren.',
	'sudo-unsudo-submit' => 'Zurückkehren',
	'sudo-success' => 'Willkommen $1, du bist jetzt im Wiki als Benutzer „$2“ angemeldet.',
	'sudo-error' => 'Sudo-Fehler: $1',
	'sudo-error-sudo-invaliduser' => 'Ungültiger Benutzername',
	'sudo-error-sudo-ip' => 'Man kann sich nicht mit einer IP-Adresse anmelden',
	'sudo-error-sudo-nonexistent' => 'Dieser Benutzer ist nicht vorhanden',
	'sudo-error-sudo-self' => 'Man kann sich nicht noch einmal selbst anmelden',
	'sudo-error-nosudo' => 'Du scheinst nicht mit einem anderen Benutzerkonto angemeldet zu sein',
	'sudo-logpagename' => 'Sudo-Logbuch',
	'sudo-logpagetext' => 'Dies ist das Logbuch aller Verwendungen von „sudo“.',
	'sudo-logentry' => 'hat sich mit dem Benutzerkonto von $2 angemeldet',
	'right-sudo' => 'Mit anderem Benutzerkonto anmelden',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'sudo' => 'Најава со туѓа сметка',
	'unsudo' => 'Назад на својата сметка',
	'sudo-desc' => 'Им овозможува на корисниците на Sudo да се најавуваат со туѓи сметки',
	'sudo-personal-unsudo' => 'Назад на својата сметка',
	'sudo-form' => 'Најава на:',
	'sudo-user' => 'Корисничко име:',
	'sudo-reason' => 'Причина:',
	'sudo-submit' => 'Најава',
	'sudo-unsudo' => 'Добредојдовте, $1. Моментално сте најавени на викито како $2. За да се вратите на вашата редовна сметка, едноставно поднесете го образецот.',
	'sudo-unsudo-submit' => 'Назад',
	'sudo-success' => 'Добредојдовте, $1. Сега сте најавени на викито како $2.',
	'sudo-error' => 'Грешка во Sudo: $1',
	'sudo-error-sudo-invaliduser' => 'Неважечко корисничко име',
	'sudo-error-sudo-ip' => 'Не можете да се најавите на IP-адреса',
	'sudo-error-sudo-nonexistent' => 'Нема таков корисник.',
	'sudo-error-sudo-self' => 'Не можете да се најавите на својата сметка како на туѓа',
	'sudo-error-nosudo' => 'Се чини дека не сте во Sudo-сметка',
	'sudo-logpagename' => 'Дневник на Sudo',
	'sudo-logpagetext' => 'Ова е дневник на сите употреби на Sudo',
	'sudo-logentry' => 'најава на сметката на $2',
	'right-sudo' => 'Најавување на туѓа сметка',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sudo-user' => 'వాడుకరిపేరు',
	'sudo-reason' => 'కారణం:',
);

