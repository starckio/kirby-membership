<?php

return function($site, $pages, $page) {

	// Seuls les utilisateurs connectés sont autorisés!
	$user = $site->user();
	if(!$user) go('login');

	$error = null;

	if(r::is('post') && get('update')) {
		$data = array(
			'firstname' => esc(get('firstname')),
			'lastname'  => esc(get('lastname')),
			'email'     => esc(get('email'))
		);
		$rules = array(
			'firstname' => array('required'),
			'lastname'  => array('required'),
			'email'     => array('required', 'email'),
		);
		$messages = array(
			'firstname' => l::get('membership.firstname.error'),
			'lastname'  => l::get('membership.lastname.error'),
			'email'     => l::get('membership.email.error'),
		);

		// Si certaines données sont invalides
		if($invalid = invalid($data, $rules, $messages)) {
			$error = $invalid;
		} else {

			// Si tout va bien, essayons de mettre à jour les informations
			try {

				$user = $site->user()->update(array(
					'firstname' => $data['firstname'],
					'lastname'  => $data['lastname'],
					'email'     => $data['email']
				));

				$success = l::get('membership.account.update.success');
				$data = array();

			} catch(Exception $e) {
				$error = l::get('membership.account.update.error');
			}
		}
	}

	return compact('user', 'error', 'data', 'success');
};