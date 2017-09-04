<?php
// Multi-Langues
membershipTranslation();


// Multi-Langues
function membershipTranslation() {

	if (defined('KIRBY')) {
		$site = kirby()->site();
		$code = $site->multilang() ? $site->language()->code() : c::get('membership.language', 'en');

		try {
			include_once __DIR__ . DS . 'languages' . DS . $code . '.php';
		} catch (ErrorException $e) {
			try {
				include_once __DIR__ . DS . 'languages' . DS . 'en' . '.php';
			} catch (ErrorException $e) {
				throw new Exception("Membership plugin does not have a translation for the language '$code'.");
			}
		}
	}
}

// Roles
$kirby->set('role', 'admin', [
	'name'    => 'Admin',
	'panel'   => true
]);
$kirby->set('role', 'client', [
	'name'    => 'Client',
	'default' => true,
	'panel'   => false
]);


// Templates
$kirby->set('template', 'account',  __DIR__ . '/templates/account.php');
$kirby->set('template', 'delete',   __DIR__ . '/templates/delete.php');
$kirby->set('template', 'login',    __DIR__ . '/templates/login.php');
$kirby->set('template', 'password', __DIR__ . '/templates/password.php');
$kirby->set('template', 'register', __DIR__ . '/templates/register.php');
$kirby->set('template', 'reset',    __DIR__ . '/templates/reset.php');


// Blueprint
$kirby->set('blueprint', 'account',  __DIR__ . '/blueprints/account.yml');
$kirby->set('blueprint', 'delete',   __DIR__ . '/blueprints/delete.yml');
$kirby->set('blueprint', 'login',    __DIR__ . '/blueprints/login.yml');
$kirby->set('blueprint', 'password', __DIR__ . '/blueprints/password.yml');
$kirby->set('blueprint', 'register', __DIR__ . '/blueprints/register.yml');
$kirby->set('blueprint', 'reset',    __DIR__ . '/blueprints/reset.yml');


// Controllers
$kirby->set('controller', 'account',  __DIR__ . '/controllers/account.php');
$kirby->set('controller', 'delete',   __DIR__ . '/controllers/delete.php');
$kirby->set('controller', 'login',    __DIR__ . '/controllers/login.php');
$kirby->set('controller', 'password', __DIR__ . '/controllers/password.php');
$kirby->set('controller', 'register', __DIR__ . '/controllers/register.php');
$kirby->set('controller', 'reset',    __DIR__ . '/controllers/reset.php');


// Snippets
$kirby->set('snippet', 'activeaccount', __DIR__ . '/snippets/activeaccount.php');
$kirby->set('snippet', 'resetpassword', __DIR__ . '/snippets/resetpassword.php');


// Routes
$kirby->set('route', array(
	'pattern' => 'logout',
	'action'  => function() {
		if($user = site()->user()) $user->logout();
		go('login');
	}
));
$kirby->set('route',[
	// Mot de passe remis à zéro et compte vérifié par l'adresse de courriel
	'pattern' => 'token/([a-f0-9]{32})',
	'action'  => function($token) {
		$site = site();

		// Déconnecter tous les utilisateurs actifs
		if($u = $site->user()) $u->logout();

		// Trouver l'utilisateur grace au jeton/token
		if ($user = $site->users()->findBy('token',$token)) {

			// Détruire le jeton/token et mettre à jour le mot de passe temporaire
			$user->update([
				'token'    => '',
				'password' => $token,
			]);

			// Redirection puis identification pour modifier le mot de passe
			if ($user->login($token)) {
				return go('/account/password');
			} else {
				return go('/');
			} 
		} else {
			return go('/');
		}
	}
]);


// HTML Mail template
email::$services['html-mail'] = function($email) {
  $headers = header::create([
    'From'                      => $email->from,
    'Reply-To'                  => $email->replyTo,
    'Cc'                        => $email->cc,
    'Bcc'                       => $email->bcc,
    'Return-Path'               => $email->replyTo,
    'Message-ID'                => '<' . time() . '-' . $email->from . '>',
    'X-Mailer'                  => 'PHP v' . phpversion(),
    'Content-Type'              => 'text/html; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
  ]);
  ini_set('sendmail_from', $email->from);
  $send = mail(
    $email->to,
    str::utf8($email->subject),
    str::utf8($email->body),
   $headers
  );
  ini_restore('sendmail_from');
  if(!$send) {
    throw new Error('The email could not be sent');
  }
};