<?php snippet('header') ?>

<main class="main" role="main">
	<?php if(isset($success)): ?>
	<div class="alert success">
		<p><?= $success ?></p>
	</div>
	<?php endif ?>

	<?php if($error): ?>
	<div class="alert error">
		<?php foreach($error as $message): ?>
		<p><?= html($message) ?></p>
		<?php endforeach ?>
	</div>
	<?php endif ?>

	<h1 class="title center"><?php echo l::get('membership.account.title') ?></h1>

	<form method="post" class="burger">
		<div class="field">
			<label for="firstname"><?php echo l::get('membership.firstname') ?></label>
			<input type="text" id="firstname" name="firstname" value="<?= $user->firstname() ?>">
		</div>
		<div class="field">
			<label for="lastname"><?php echo l::get('membership.lastname') ?></label>
			<input type="text" id="lastname" name="lastname" value="<?= $user->lastname() ?>">
		</div>
		<div class="field">
			<label for="email"><?php echo l::get('membership.email') ?></label>
			<input type="email" id="email" name="email" value="<?= $user->email() ?>">
		</div>
		<div class="field">
			<input class="btn" type="submit" name="update" value="<?php echo l::get('membership.update') ?>">
			<?php if(!$user->hasPanelAccess()): ?>
			<a class="link" href="<?= url('account/delete') ?>"><?php echo l::get('membership.delete') ?></a>
			<?php endif ?>
		</div>
		<div class="field center cf"><a href="<?= url('account/password') ?>"><?php echo l::get('membership.password.link') ?></a></div>
	</form>

</main>

<?php snippet('footer') ?>