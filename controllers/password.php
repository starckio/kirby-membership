<?php

return function($site, $pages, $page) {

	// Seuls les utilisateurs connectés sont autorisés!
	$user = $site->user();
	if(!$user) go('login');

	$error = null;

	if(r::is('post') && get('update')) {
		$data = array(
			'password' => esc(get('password')),
		);
		$rules = array(
			'password' => array('required'),
		);
		$messages = array(
			'password' => l::get('membership.password.error'),
		);

		// Si certaines données sont invalides
		if($invalid = invalid($data, $rules, $messages)) {
			$error = $invalid;
		} else {

			// Si tout va bien, essayons de mettre à jour les informations
			try {
				$user = $site->user()->update(array(
					'password' => $data['password']
				));

				$success = l::get('membership.password.update.success');
				$data = array();

			} catch(Exception $e) {
				$error = l::get('membership.password.update.error');
			}
		}
	}

	return compact('user', 'error', 'data', 'success');
};