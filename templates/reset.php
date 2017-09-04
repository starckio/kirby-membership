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

	<h1 class="title center"><?php echo l::get('membership.reset.title') ?></h1>

	<form method="post" class="burger">
		<div class="field">
			<label for="email"><?php echo l::get('membership.email') ?></label>
			<input type="email" id="email" name="email" required>
		</div>
		<div class="field honeypot">
			<label for="subject">Honeypot</label>
			<input type="text" id="subject" name="subject">
			<small class="help">For Robots.</small>
		</div>
		<div class="field">
			<input class="btn" type="submit" name="reset" value="<?php echo l::get('membership.reset') ?>">
			<a class="link" href="<?= url('login') ?>"><?php echo l::get('membership.login.link') ?></a>
		</div>
	</form>

</main>

<?php snippet('footer') ?>