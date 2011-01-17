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
 * @author EugeneZelenko
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'sudo-desc' => '{{desc}}',
	'sudo-user' => '{{Identical|Username}}',
	'sudo-reason' => '{{Identical|Reason}}',
	'sudo-submit' => '{{Identical|Login}}',
	'right-sudo' => '{{doc-right|sudo}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'unsudo' => 'Keer terug na u eie gebruiker',
	'sudo-personal-unsudo' => 'Keer terug na u eie gebruiker',
	'sudo-form' => 'Meld aan as:',
	'sudo-user' => 'Gebruikersnaam:',
	'sudo-reason' => 'Rede:',
	'sudo-submit' => 'Aanmeld',
	'sudo-unsudo-submit' => 'Terug',
	'sudo-error' => 'Sudo-fout: $1',
	'sudo-error-sudo-invaliduser' => 'Ongeldige gebruikersnaam',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'sudo' => 'Увайсьці ў рахунак іншага удзельніка',
	'unsudo' => 'Вярнуцца ў Ваш рахунак',
	'sudo-desc' => 'Дазваляе выбраным удзельнікам уваходзіць ў сыстэму як іншыя ўдзельнікі',
	'sudo-personal-unsudo' => 'Вярнуцца ў Ваш рахунак',
	'sudo-form' => 'Увайсьці ў:',
	'sudo-user' => 'Імя ўдзельніка:',
	'sudo-reason' => 'Прычына:',
	'sudo-submit' => 'Увайсьці',
	'sudo-unsudo' => 'Вітаем, $1! Цяпер Вы ўвайшлі ў {{GRAMMAR:вінавальны|{{SITENAME}}}} як $2. Націсьніце «{{int:sudo-unsudo-submit}}» каб вярнуцца ў свой рахунак.',
	'sudo-unsudo-submit' => 'Вярнуцца',
	'sudo-success' => 'Вітаем, $1! Цяпер Вы ўвайшлі ў {{GRAMMAR:вінавальны|{{SITENAME}}}} як $2.',
	'sudo-error' => 'Памылка уваходу ў сыстэму як іншага ўдзельніка: $1',
	'sudo-error-sudo-invaliduser' => 'Няслушнае імя ўдзельніка',
	'sudo-error-sudo-ip' => 'Немагчыма ўвайсьці ў IP-адрас',
	'sudo-error-sudo-nonexistent' => 'Гэты рахунак не існуе',
	'sudo-error-sudo-self' => 'Немагчыма пераўвайсьці ва ўласны рахунак',
	'sudo-error-nosudo' => 'Выглядае, што Вы не ўвайшлі ў рахунак, які дазваляе уваход ў сыстэму як іншага ўдзельніка',
	'sudo-logpagename' => 'Журнал уваходаў у рахункі іншых удзельнікаў',
	'sudo-logpagetext' => 'Гэта журнал усіх уваходаў у рахункі іншых удзельнікаў.',
	'sudo-logentry' => 'увайшоў у рахунак $2',
	'right-sudo' => 'уваход ў рахункі іншых удзельнікаў',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'sudo-personal-unsudo' => "Distreiñ d'ho kont",
	'sudo-form' => 'Kevreañ da :',
	'sudo-user' => 'Anv implijer :',
	'sudo-reason' => 'Abeg :',
	'sudo-submit' => 'Kevreañ',
	'sudo-unsudo-submit' => 'Distreiñ',
	'sudo-error-sudo-invaliduser' => 'Anv implijer direizh',
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'sudo-user' => 'Korisničko ime:',
	'sudo-reason' => 'Razlog:',
	'sudo-submit' => 'Prijava',
	'sudo-unsudo-submit' => 'Nazad',
);

/** German (Deutsch)
 * @author Kghbln
 * @author The Evil IP address
 */
$messages['de'] = array(
	'sudo' => 'Mit anderem Benutzerkonto anmelden',
	'unsudo' => 'Zum eigenen Benutzerkonto zurückkehren',
	'sudo-desc' => 'Ermöglicht die Anmeldung mit einem anderen Benutzerkonto als dem Eigenen („sudo“)',
	'sudo-personal-unsudo' => 'Zum eigenen Benutzerkonto zurückkehren',
	'sudo-form' => 'Anmelden als:',
	'sudo-user' => 'Benutzername:',
	'sudo-reason' => 'Grund:',
	'sudo-submit' => 'Anmelden',
	'sudo-unsudo' => 'Willkommen $1, du bist momentan als Benutzer „$2“ im Wiki angemeldet. Klicke auf „{{int:sudo-unsudo-submit}}“, um zu deinem eigenen Benutzerkonto zurückzukehren.',
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

/** French (Français)
 * @author Otourly
 * @author Sherbrooke
 */
$messages['fr'] = array(
	'sudo' => "Connectez-vous au compte d'un autre utilisateur",
	'unsudo' => 'Retour à votre compte',
	'sudo-desc' => "Permet au ''sudoers'' de se connecter en tant qu'un autre utilisateur",
	'sudo-personal-unsudo' => 'Retour à votre compte',
	'sudo-form' => 'Connexion à:',
	'sudo-user' => 'Nom d’utilisateur :',
	'sudo-reason' => 'Raison :',
	'sudo-submit' => 'Connexion',
	'sudo-unsudo' => 'Bienvenue $1, vous êtes actuellement connecté au wiki en tant que $2. Cliquez sur {{int:sudo-unsudo-submit}} pour revenir à votre connexion précédente.',
	'sudo-unsudo-submit' => 'Retour',
	'sudo-success' => 'Bienvenue $1, vous êtes maintenant connecté au wiki en tant que $2.',
	'sudo-error' => "Erreur de ''sudo'': $1",
	'sudo-error-sudo-invaliduser' => 'Nom d’utilisateur invalide',
	'sudo-error-sudo-ip' => 'Ne peut se connecter à une adresse IP',
	'sudo-error-sudo-nonexistent' => "Cet utilisateur n'existe pas",
	'sudo-error-sudo-self' => "Impossible de s'identifier ''via sudo'' sur son propre compte",
	'sudo-error-nosudo' => 'Vous ne semblez pas être dans une connexion sudo',
	'sudo-logpagename' => "Historique de ''sudo''",
	'sudo-logpagetext' => "Ceci est un historique de toutes les utilisations de ''sudo''.",
	'sudo-logentry' => 'connecté au compte $2',
	'right-sudo' => "Connexion au compte d'un autre utilisateur",
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'sudo' => 'Mit eme andere Benutzerkonto aamälde',
	'unsudo' => 'Zum eigene Benutzerkonto zruckchehre',
	'sudo-desc' => 'Macht d Aamäldig megli mit eme anderen Benutzerkonto („sudo“)',
	'sudo-personal-unsudo' => 'Zum eigene Benutzerkonto zruckchehre',
	'sudo-form' => 'Aamälden as:',
	'sudo-user' => 'Benutzername:',
	'sudo-reason' => 'Grund:',
	'sudo-submit' => 'Aamälde',
	'sudo-unsudo' => 'Willchuu $1, Du bisch zurzyt as Benutzer „$2“ im Wiki aagmäldet. Klick uf „{{int:sudo-unsudo-submit}}“ go zue Dyym eigen Benutzerkonto zruckchehre.',
	'sudo-unsudo-submit' => 'Zruckchehre',
	'sudo-success' => 'Willchuu $1, Du bisch jetz im Wiki as Benutzer „$2“ aagmäldet.',
	'sudo-error' => 'Sudo-Fäler: $1',
	'sudo-error-sudo-invaliduser' => 'Nit giltige Benutzername',
	'sudo-error-sudo-ip' => 'Mer cha sich nit mit ere IP-Adräss aamälde',
	'sudo-error-sudo-nonexistent' => 'Dää Benutzer git s nit.',
	'sudo-error-sudo-self' => 'Mer cha sich nit nomol sälber aamälde',
	'sudo-error-nosudo' => 'Du bisch schyns nit mit eme andere Benutzerkonto aagmäldet',
	'sudo-logpagename' => 'Sudo-Logbuech',
	'sudo-logpagetext' => 'Des isch s Logbuech vu allne Verwändige vu „sudo“.',
	'sudo-logentry' => 'het sich mit em Benutzerkonto vu $2 aagmäldet',
	'right-sudo' => 'Mit eme andere Benutzerkonto aamälde',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sudo' => 'Ke kontu druheho wužiwarja so přizjewić',
	'unsudo' => 'Wróćo k twojemu kontu',
	'sudo-desc' => 'Zmóžnja přizjewjenje wužiwarjow jako druzy wužiwarjo z pomuc přikaza "sudo"',
	'sudo-personal-unsudo' => 'Wróćo k twojemu kontu',
	'sudo-form' => 'Přizjewić so jako:',
	'sudo-user' => 'Wužiwarske mjeno:',
	'sudo-reason' => 'Přičina:',
	'sudo-submit' => 'Přizjewjenje',
	'sudo-unsudo' => 'Witaj $1, sy tuchwilu we wikiju jako $2 přizjewjeny. Klikń na "{{int:sudo-unsudo-submit}}", zo by so k swójskemu přizjewjenju wróćił.',
	'sudo-unsudo-submit' => 'Wróćić so',
	'sudo-success' => 'Witaj $1, sy nětko pola wikija $2 přizjewjeny.',
	'sudo-error' => 'Sudo-zmylk: $1',
	'sudo-error-sudo-invaliduser' => 'Njepłaćiwe wužiwarske mjeno',
	'sudo-error-sudo-ip' => 'Přizjewjenje z IP-adresu njeje móžno',
	'sudo-error-sudo-nonexistent' => 'Tón wužiwar njeeksistuje',
	'sudo-error-sudo-self' => 'Njemóžeš so samoho přez "sudo" přizjewić',
	'sudo-error-nosudo' => 'Zda so, zo njesy přez "sudo" přizjewjeny',
	'sudo-logpagename' => 'Sudo-protokol',
	'sudo-logpagetext' => 'To je protokol wšěch wužićow sudo.',
	'sudo-logentry' => 'je so pola konta $2 přizjewił',
	'right-sudo' => 'Pola konta druheho wužiwarja so přizjewić',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'sudo' => 'Aperir session in le conto de un altere usator',
	'unsudo' => 'Retornar al proprie conto',
	'sudo-desc' => 'Permitte a "transauthenticatores" de aperir session in le conto de altere usatores',
	'sudo-personal-unsudo' => 'Retornar al proprie conto',
	'sudo-form' => 'Aperir session como:',
	'sudo-user' => 'Nomine de usator:',
	'sudo-reason' => 'Motivo:',
	'sudo-submit' => 'Aperir session',
	'sudo-unsudo' => 'Benvenite $1, tu es ora authenticate in le wiki como $2. Clicca super "{{int:sudo-unsudo-submit}}" pro retornar a tu proprie conto de usator.',
	'sudo-unsudo-submit' => 'Retornar',
	'sudo-success' => 'Benvenite $1, tu es ora authenticate in le wiki como $2.',
	'sudo-error' => 'Error de transauthentication: $1',
	'sudo-error-sudo-invaliduser' => 'Nomine de usator invalide',
	'sudo-error-sudo-ip' => 'Non es possibile aperir session como un adresse IP',
	'sudo-error-sudo-nonexistent' => 'Iste usator non existe',
	'sudo-error-sudo-self' => 'Non es possibile transauthenticar se al proprie conto',
	'sudo-error-nosudo' => 'Tu non pare esser in un session transauthenticate',
	'sudo-logpagename' => 'Registro de transauthentication',
	'sudo-logpagetext' => 'Isto es un registro de tote le usos del facilitate de transauthentication.',
	'sudo-logentry' => 'aperiva session in le conto de $2',
	'right-sudo' => 'Aperir session in le conto de un altere usator',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'sudo' => 'Masuk ke akun pengguna lain',
	'unsudo' => 'Kembali ke akun Anda',
	'sudo-desc' => 'Mengizinkan seorang pengguna untuk masuk sebagai pengguna lain (sudo)',
	'sudo-personal-unsudo' => 'Kembali ke akun Anda',
	'sudo-form' => 'Masuk ke:',
	'sudo-user' => 'Nama pengguna:',
	'sudo-reason' => 'Alasan:',
	'sudo-submit' => 'Masuk',
	'sudo-unsudo' => 'Selamat datang $1, Anda saat ini masuk ke wiki sebagai $2. Klik "{{int:sudo-unsudo-submit}}" untuk kembali masuk dengan akun Anda sendiri.',
	'sudo-unsudo-submit' => 'Kembali',
	'sudo-success' => 'Selamat datang $1, sekarang Anda masuk ke wiki sebagai $2.',
	'sudo-error' => 'Galat sudo: $1',
	'sudo-error-sudo-invaliduser' => 'Nama pengguna tidak sah',
	'sudo-error-sudo-ip' => 'Tidak dapat masuk dengan menggunakan alamat IP',
	'sudo-error-sudo-nonexistent' => 'Pengguna tidak ada',
	'sudo-error-sudo-self' => 'Tidak dapat sudo ke akun Anda sendiri',
	'sudo-error-nosudo' => 'Anda tampaknya tidak sedang menggunakan sudo',
	'sudo-logpagename' => 'Log sudo',
	'sudo-logpagetext' => 'Berikut adalah log semua penggunaan sudo.',
	'sudo-logentry' => 'masuk ke dalam akun $2',
	'right-sudo' => 'Masuk ke akun pengguna lain',
);

/** Japanese (日本語)
 * @author Ohgi
 */
$messages['ja'] = array(
	'sudo-user' => '利用者名：',
	'sudo-reason' => '理由：',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'sudo' => 'Mat engem anere Benotzerkont aloggen',
	'unsudo' => 'Zréck op Äre Benotzerkont',
	'sudo-personal-unsudo' => 'Zréck op Äre Benotzerkont',
	'sudo-form' => 'Aloggen als:',
	'sudo-user' => 'Benotzernumm:',
	'sudo-reason' => 'Grond:',
	'sudo-submit' => 'Umellen',
	'sudo-unsudo-submit' => 'Zréck',
	'sudo-error' => 'Sudo-Feeler: $1',
	'sudo-error-sudo-invaliduser' => 'Ongëltege Benotzernumm',
	'sudo-error-sudo-nonexistent' => 'Dee Benotzer gëtt et net.',
	'sudo-logpagename' => 'Sudo-Logbuch',
	'right-sudo' => 'Alogge mat engem anere sengem Benotzerkont',
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
	'sudo-unsudo' => 'Добредојдовте, $1. Моментално сте најавени на викито како $2. За да се вратите на вашата редовна сметка, кликнете на „{{int:sudo-unsudo-submit}}“.',
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

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'sudo' => 'Aanmelden als een andere gebruiker',
	'unsudo' => 'Terugkeren naar uw eigen gebruiker',
	'sudo-desc' => 'Staat gebruikers met het recht "sudo" toe als andere gebruikers aan te melden',
	'sudo-personal-unsudo' => 'Terugkeren naar uw eigen gebruiker',
	'sudo-form' => 'Aanmelden als:',
	'sudo-user' => 'Gebruikersnaam:',
	'sudo-reason' => 'Reden:',
	'sudo-submit' => 'Aanmelden',
	'sudo-unsudo' => 'Welkom, $1. U bent nu aangemeld bij de wiki als $2. Klik op "{{int:sudo-unsudo-submit}}" om terug te keren naar uw eigen gebruiker.',
	'sudo-unsudo-submit' => 'Terug',
	'sudo-success' => 'Welkom $1. U bent u bij de wiki aangemeld als $2.',
	'sudo-error' => 'Sudo-fout: $1',
	'sudo-error-sudo-invaliduser' => 'Ongeldige gebruikersnaam',
	'sudo-error-sudo-ip' => 'Het is niet mogelijk aan te melden als een anonieme gebruiker',
	'sudo-error-sudo-nonexistent' => 'Die gebruiker bestaat niet',
	'sudo-error-sudo-self' => 'Het is niet mogelijk een sudo naar uzelf uit te voeren',
	'sudo-error-nosudo' => 'U bevindt zich niet in een sudosessie',
	'sudo-logpagename' => 'Sudologboek',
	'sudo-logpagetext' => 'Dit logboek bevat alle keren dat sudo gebruikt is.',
	'sudo-logentry' => 'heeft aangemeld als $2',
	'right-sudo' => 'Aanmelden als een andere gebruiker',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Nghtwlkr
 */
$messages['no'] = array(
	'sudo' => 'Logg inn på en annen brukers konto',
	'unsudo' => 'Gå tilbake til din konto',
	'sudo-desc' => 'Tillat sudoere å logge inn som andre brukere',
	'sudo-personal-unsudo' => 'Gå tilbake til din konto',
	'sudo-form' => 'Logg inn på:',
	'sudo-user' => 'Brukernavn:',
	'sudo-reason' => 'Årsak:',
	'sudo-submit' => 'Logg inn',
	'sudo-unsudo' => 'Velkommen $1, du er nå logget inn på wikien som $2. Klikk på «{{int:sudo-unsudo-submit}}» for å gå tilbake til din egen pålogging.',
	'sudo-unsudo-submit' => 'Tilbake',
	'sudo-success' => 'Velkommen $1, du er nå logget inn på wikien som $2.',
	'sudo-error' => 'Sudo-feil: $1',
	'sudo-error-sudo-invaliduser' => 'Ugyldig brukernavn',
	'sudo-error-sudo-ip' => 'Kan ikke logge inn på en IP-adresse',
	'sudo-error-sudo-nonexistent' => 'Den brukeren finnes ikke',
	'sudo-error-sudo-self' => 'Kan ikke sudoe inn i deg selv',
	'sudo-error-nosudo' => 'Du ser ikke ut til å være inne i en sudo-pålogging',
	'sudo-logpagename' => 'Sudo-logg',
	'sudo-logpagetext' => 'Dette er en logg over all bruk av sudo.',
	'sudo-logentry' => 'logget på $2 sin konto',
	'right-sudo' => 'Logget inn på en annen brukers konto',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'sudo' => 'Zaloguj się jako inny użytkownik',
	'unsudo' => 'Powrócić do własnego konta',
	'sudo-desc' => 'Pozwala wybranym użytkownikom logować się na konta innych',
	'sudo-personal-unsudo' => 'Powrócić do własnego konta',
	'sudo-form' => 'Zaloguj się jako',
	'sudo-user' => 'Nazwa użytkownika',
	'sudo-reason' => 'Powód',
	'sudo-submit' => 'Zaloguj',
	'sudo-unsudo' => 'Witaj $1. Jesteś obecnie zalogowany do wiki jako $2. Kliknij „{{int:sudo-unsudo-submit}}”, a wrócisz do swojego własnego konta.',
	'sudo-unsudo-submit' => 'Wróć',
	'sudo-success' => 'Witaj $1. Jesteś teraz zalogowany do wiki jako $2.',
	'sudo-error' => 'Błąd zmiany zalogowania $1',
	'sudo-error-sudo-invaliduser' => 'Nieprawidłowa nazwa użytkownika',
	'sudo-error-sudo-ip' => 'Nie można zalogować się jako adres IP',
	'sudo-error-sudo-nonexistent' => 'Taki użytkownik nie istnieje',
	'sudo-error-sudo-self' => 'Nie można przelogować się na własne konto',
	'sudo-error-nosudo' => 'Nie wygląda na to abyś był zalogowany na inne konto',
	'sudo-logpagename' => 'Rejestr zmian zalogowania się',
	'sudo-logpagetext' => 'Jest to rejestr wszystkich zdarzeń zmian zalogowania się.',
	'sudo-logentry' => 'zalogowany jako $2',
	'right-sudo' => 'Zaloguj się jako inny użytkownik',
);

/** Portuguese (Português)
 * @author Waldir
 */
$messages['pt'] = array(
	'sudo' => 'Iniciar sessão na conta de outro utilizador',
	'unsudo' => 'Retornar para a sua conta',
	'sudo-desc' => 'Permite iniciar sessão como outros utilizadores',
	'sudo-personal-unsudo' => 'Retornar para a sua conta',
	'sudo-form' => 'Iniciar sessão em:',
	'sudo-user' => 'Nome de utilizador:',
	'sudo-reason' => 'Motivo:',
	'sudo-submit' => 'Iniciar sessão',
	'sudo-unsudo' => 'Bem-vindo, $1, você atualmete tem sessão iniciada na wiki como $2. Clique em "{{int:sudo-unsudo-submit}}" para retornar à sua própria conta.',
	'sudo-unsudo-submit' => 'Voltar',
	'sudo-success' => 'Bem-vindo, $1, você está agora autenticado na wiki como $2.',
	'sudo-error' => 'Erro do Sudo: $1',
	'sudo-error-sudo-invaliduser' => 'Nome de utilizador inválido',
	'sudo-error-sudo-ip' => 'Não é possível iniciar sessão como um endereço IP',
	'sudo-error-sudo-nonexistent' => 'Esse utilizador não existe',
	'sudo-error-sudo-self' => 'Não é possível fazer sudo em si mesmo',
	'sudo-error-nosudo' => 'Você não parece estar dentro de uma conta sudo',
	'sudo-logpagename' => 'Registo do Sudo',
	'sudo-logpagetext' => 'Este é um registo de todas as utilizações do sudo.',
	'sudo-logentry' => 'Autenticado na conta de $2',
	'right-sudo' => 'Iniciar sessão na conta de outro utilizador',
);

/** Russian (Русский)
 * @author DCamer
 */
$messages['ru'] = array(
	'sudo' => 'Войти в учетную запись другого пользователя',
	'unsudo' => 'Вернуться к вашей учетной записи',
	'sudo-desc' => 'Позволяет судоерам войти в качестве другого пользователей',
	'sudo-personal-unsudo' => 'Вернуться к вашей учетной записи',
	'sudo-form' => 'Войти:',
	'sudo-user' => 'Имя участника:',
	'sudo-reason' => 'Причина:',
	'sudo-submit' => 'Представиться',
	'sudo-unsudo' => 'Приветствуем $1, вы вошли как $2. Нажмите "{{int:sudo-unsudo-submit}}" чтобы вернуться в свою учётную запись.',
	'sudo-unsudo-submit' => 'Вернуться',
	'sudo-success' => 'Приветствуем $1, вы вошли как $2.',
	'sudo-error' => 'Судо-ошибка: $1',
	'sudo-error-sudo-invaliduser' => 'Неправильное имя участника',
	'sudo-error-sudo-ip' => 'Не удалось войти в IP-адрес',
	'sudo-error-sudo-nonexistent' => 'Целевой участник не существует.',
	'sudo-error-sudo-self' => 'Нельзя войти в себя',
	'sudo-error-nosudo' => 'Вы не представились в Sudo',
	'sudo-logpagename' => 'Журнал Sudo',
	'sudo-logpagetext' => 'Это журнал всех использований Sudo.',
	'sudo-logentry' => 'вошел в учетную запись $2',
	'right-sudo' => 'Войти в учетную запись другого пользователя',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sudo-user' => 'వాడుకరిపేరు',
	'sudo-reason' => 'కారణం:',
);

/** Ukrainian (Українська)
 * @author Тест
 */
$messages['uk'] = array(
	'sudo-reason' => 'Причина:',
);

