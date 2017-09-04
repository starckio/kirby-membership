<?php

return function ($site, $pages, $page) {

	// Ne pas afficher l'écran de connexion aux utilisateurs déjà connectés
	if($site->user()) go('/');

	$error = null;

	if(r::is('post') && get('reset')) {
		// Disons au robot que tout va bien
		if(!empty(get('subject'))) {
			go($page->url());
			exit;
		}

		if($user = site()->users()->findBy('email',get('email'))) {

			// Generate a secure random 32-character hex token
			do {
				$bytes = openssl_random_pseudo_bytes(16, $crypto_strong);
				$token = bin2hex($bytes);
			} while(!$crypto_strong);
		
			// Add the token to the user's profile
			$user->update([
				'token' => $token,
			]);
		
			// Build the email text
			$to      = $user->email();
			$from    = 'noreply@'.str_replace('www.', '', server::get('server_name'));
			$subject = l::get('membership.send.reset.subject');
			$body    = snippet('resetpassword', $user->data(), true);
		
			// Send the confirmation email
			$email = new Email(array(
				'to'      => $to,
				'from'    => $from,
				'subject' => $subject,
				'body'    => $body,
				'service' => 'html-mail'
			));

			if(v::email($from) and v::email($to) and $email->send()) {
				$success = l::get('membership.reset.send.success');
			} else {
				$error = l::get('membership.reset.send.error');
			}

		} else {
			$error = l::get('membership.reset.error');
		}
	}

	// Passer les variables au modèle
	return compact('error', 'success');
};