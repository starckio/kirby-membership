<?php snippet('header') ?>

<main class="main" role="main">
	<?php if($error): ?>
	<div class="alert error">
		<p><?= $error ?></p>
	</div>
	<?php endif ?>

	<h1 class="title center"><?php echo l::get('membership.login.title') ?></h1>

	<form method="post" class="burger">
		<div class="field">
			<label for="email"><?php echo l::get('membership.email') ?></label>
			<input type="email" id="email" name="email">
		</div>
		<div class="field">
			<label for="password"><?php echo l::get('membership.password') ?></label>
			<input type="password" id="password" name="password">
		</div>
		<div class="field">
			<input class="btn" type="submit" name="login" value="<?php echo l::get('membership.login') ?>">
			<a class="link" href="<?= url('account/register') ?>"><?php echo l::get('membership.register') ?></a><br />
		</div>
		<div class="field center cf"><a href="<?= url('account/reset') ?>"><?php echo l::get('membership.forgot.password') ?></a></div>
	</form>

</main>

<?php snippet('footer') ?>