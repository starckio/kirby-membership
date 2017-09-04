<?php snippet('header') ?>

<main class="main" role="main">

	<?php if(isset($success)): ?>
	<h1 class="title center"><?= $success ?></h1>
	<div class="text" style="text-align:center;">
		<p>Vous pouvez des à présent éditer vos informations <a href="<?= url('account') ?>">ici</a>.</p>
	</div>
	<?php else: ?>

	<?php if($error): ?>
	<div class="alert error">
		<?php foreach($error as $message): ?>
		<p><?= html($message) ?></p>
		<?php endforeach ?>
	</div>
	<?php endif ?>

	<h1 class="title center"><?php echo l::get('membership.password.title') ?></h1>

	<form method="post" class="burger">
		<div class="field">
			<label for="password"><?php echo l::get('membership.password.label') ?></label>
			<input type="password" id="password" name="password">
		</div>
		<div class="field">
			<input class="btn" type="submit" name="update" value="<?php echo l::get('membership.update') ?>">
		</div>
	</form>

	<?php endif ?>

</main>

<?php snippet('footer') ?>