<?php snippet('header') ?>

<main class="main" role="main">
	<?php if(isset($success)): ?>
	<div class="alert success">
		<p><?= $success ?></p>
	</div>
	<?php endif ?>

	<?php if($error): ?>
	<div class="alert error">
		<p><?= $error ?></p>
	</div>
	<?php endif ?>

	<h1 class="title center"><?php echo l::get('membership.register.title') ?></h1>

	<?php if(!isset($success)): ?>
	<form method="post" class="burger">
		<div class="field">
			<label for="firstname"><?php echo l::get('membership.firstname') ?></label>
			<input type="text" id="firstname" name="firstname" value="<?= get('firstname') ?>">
		</div>
		<div class="field">
			<label for="lastname"><?php echo l::get('membership.lastname') ?></label>
			<input type="text" id="lastname" name="lastname" value="<?= get('lastname') ?>">
		</div>
		<div class="field">
			<label for="email"><?php echo l::get('membership.email') ?></label>
			<input type="text" id="email" name="email" value="<?= get('email') ?>">
		</div>
		<div class="field honeypot">
			<label for="subject">Honeypot</label>
			<input type="text" id="subject" name="subject">
			<small class="help">For Robots.</small>
		</div>
		<div class="field">
			<input class="btn" type="submit" name="register" value="<?php echo l::get('membership.register') ?>">
			<a class="link" href="<?= url('login') ?>"><?php echo l::get('membership.login.link') ?></a>
		</div>
	</form>
	<?php endif ?>

</main>

<?php snippet('footer') ?>