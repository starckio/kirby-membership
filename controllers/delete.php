<?php

return function($site, $pages, $page) {

	// Seuls les utilisateurs connectés sont autorisés!
	$user = $site->user();
	if(!$user) go('login');

	// Gérer la soumission du formulaire
	if(r::is('post') && get('delete')) {

		// Chercher l'utilisateur par nom d'utilisateur et exécuter
		// la méthode de suppression
		$user = $site->user();
		$user->logout();
		if($user = $site->user($user->username())->delete()) {
			// Redirection vers la page d'inscription
			// si la connexion a été réussie
			go('account/register');
		} else {
			$error = true;
		}

	} else {
		$error = false;  
	}

	return compact('error');

};