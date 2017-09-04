<?php l::set([
	// All pages
	'membership.firstname' => 'First name',
	'membership.lastname'  => 'Last name',
	'membership.email'     => 'E-mail',
	'membership.password'  => 'Password',
	'membership.update'    => 'Update',
	'membership.login'     => 'Login',
	'membership.register'  => 'Register',
	'membership.cancel'    => 'Cancel',
	'membership.delete'    => 'Delete my account',

	// Account
	'membership.account.title'          => 'Edit my account',
	'membership.password.link'          => 'Change my password',
	'membership.firstname.error'        => 'Please enter a valid first name.',
	'membership.lastname.error'         => 'Please enter a valid last name.',
	'membership.email.error'            => 'Please enter a valid email address.',
	'membership.account.update.success' => 'Your information has been updated.',
	'membership.account.update.error'   => 'Your registration has failed.',

	// Delete
	'membership.delete.title' => 'Delete my account',
	'membership.delete.label' => 'Delete my account forever',
	'membership.delete.help'  => 'I understand that the deletion of my account is permanent and will be deleted forever.',

	// Login
	'membership.login.title'     => 'Log in',
	'membership.forgot.password' => 'Forgot your password ?',
	'membership.login.error'     => 'Username or password invalid.',

	// Password
	'membership.password.title'          => 'Change my password',
	'membership.password.label'          => 'New password',
	'membership.password.error'          => 'Please enter a valid password.',
	'membership.password.update.success' => 'Your password has been changed.',
	'membership.password.update.error'   => 'Registering your password failed.',

	// Register
	'membership.register.title'        => 'Subscribe',
	'membership.login.link'            => 'Log in',
	'membership.register.send.success' => 'Your account has been created! You will receive an email to activate it.',
	'membership.register.send.error'   => 'We were unable to send your account verification email. Contact the store owner directly to activate your account.',
	'membership.register.input.error'  => 'Make sure you have entered all the information correctly, including your email.',
	'membership.register.email.exist'  => 'An account has already been created with this email address.',

	// Reset
	'membership.reset.title'        => 'Reset my password',
	'membership.reset'              => 'Reset',
	'membership.reset.send.success' => 'You will receive an email with instructions to reset your password.',
	'membership.reset.send.error'   => 'We were unable to send your account verification email. Please try again later.',
	'membership.reset.error'        => 'No account corresponding to the email.',

	// Send email
	'membership.send.hello'          => 'Hello',
	'membership.send.active.subject' => 'Activate your account - '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'',
	'membership.send.active.body'    => 'Thank you for registering on '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. Go to the link below to activate your account and choose your password.',
	'membership.send.active.link'    => 'Activate my account',

	'membership.send.reset.subject'  => 'Reset your password - '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'',
	'membership.send.reset.body'     => 'Someone (hopefully it was you) asked us to reset the password for your '.str_replace('www.', '', $_SERVER['HTTP_HOST']).' account.
	Click on the button below to get there. If you have not asked to reset your password, skip this message!',
	'membership.send.reset.link'     => 'Reset my password',
]);