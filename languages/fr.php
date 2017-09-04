<?php l::set([
	// All pages
	'membership.firstname' => 'Prénom',
	'membership.lastname'  => 'Nom',
	'membership.email'     => 'Adresse email',
	'membership.password'  => 'Mot de passe',
	'membership.update'    => 'Enregistrer',
	'membership.login'     => 'Connexion',
	'membership.register'  => 'S\'inscrire',
	'membership.cancel'    => 'Annuler',
	'membership.delete'    => 'Supprimer mon compte',

	// Account
	'membership.account.title'          => 'Éditer mon compte',
	'membership.password.link'          => 'Modifier mon mot de passe',
	'membership.firstname.error'        => 'Veuillez entrer un prénom valide.',
	'membership.lastname.error'         => 'Veuillez entrer un nom valide.',
	'membership.email.error'            => 'S\'il vous plaît, mettez une adresse email valide.',
	'membership.account.update.success' => 'Vos informations ont été mises à jour.',
	'membership.account.update.error'   => 'Votre enregistrement a échoué.',

	// Delete
	'membership.delete.title' => 'Supprimer mon compte',
	'membership.delete.label' => 'Supprimer mon compte pour toujours',
	'membership.delete.help'  => 'Je comprends que la suppression de mon compte est permanente et sera supprimé à jamais.',

	// Login
	'membership.login.title'     => 'Se connecter',
	'membership.forgot.password' => 'Mot de passe oublié ?',
	'membership.login.error'     => 'Nom d\'utilisateur ou mot de passe invalide.',

	// Password
	'membership.password.title'          => 'Modifier mon mot de passe',
	'membership.password.label'          => 'Nouveau mot de passe',
	'membership.password.error'          => 'Veuillez entrer un mot de passe valide.',
	'membership.password.update.success' => 'Votre mot de passe a bien été modifié.',
	'membership.password.update.error'   => 'L\'enregistrement de votre mot de passe a échoué.',

	// Register
	'membership.register.title'        => 'Inscrivez vous',
	'membership.login.link'            => 'Se connecter',
	'membership.register.send.success' => 'Votre compte vient d\'être créé! Vous allez recevoir un courriel afin de l\'activer.',
	'membership.register.send.error'   => 'Nous n\'avons pas réussi à envoyer votre courriel de vérification de compte. Contactez directement le propriétaire du magasin afin d\'activer votre compte.',
	'membership.register.input.error'  => 'Assurez-vous d\'avoir inscrit toute les infos correctement, y compris votre courriel.',
	'membership.register.email.exist'  => 'Un compte a déjà été créé avec cette adresse email.',

	// Reset
	'membership.reset.title'        => 'Réinitialiser mon mot de passe',
	'membership.reset'              => 'Réinitialiser',
	'membership.reset.send.success' => 'Vous recevrez un courriel avec les instructions pour réinitialiser votre mot de passe.',
	'membership.reset.send.error'   => 'Nous n\'avons pas réussi à envoyer votre courriel de vérification de compte. Veuillez réessayer plus tard.',
	'membership.reset.error'        => 'Aucun compte correspondant a l\'email.',

	// Send email
	'membership.send.hello'          => 'Bonjour',
	'membership.send.active.subject' => 'Activez votre compte',
	'membership.send.active.body'    => 'Merci de vous êtes inscrit sur le site '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. Accédez au lien ci-dessous afin d\'activer votre compte et choisir votre mot de passe.',
	'membership.send.active.link'    => 'Activer mon compte',

	'membership.send.reset.subject'  => 'Réinitialisez votre mot de passe',
	'membership.send.reset.body'     => 'Quelqu\'un (espérons que ça soit vous) nous a demandé de réinitialiser le mot de passe de votre compte du site '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. Cliquez sur le bouton ci-dessous pour vous y rendre. Si vous n\'avez pas demandé à réinitialiser votre mot de passe, ignorez ce message !',
	'membership.send.reset.link'     => 'Réinitialiser mon mot de passe',
]);