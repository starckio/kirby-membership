<?php snippet('header') ?>

<main class="main" role="main">

	<h1 class="title center"><?php echo l::get('membership.delete.title') ?></h1>

	<form method="post" class="burger">
		<div class="field checkbox">
			<input id="deleteConfirm" type="checkbox" name="deleteConfirm" required>
			<label for="deleteConfirm"><?php echo l::get('membership.delete.label') ?></label>
			<small class="help"><?php echo l::get('membership.delete.help') ?></small>
		</div>
		<div class="field">
			<input class="btn" type="submit" name="delete" value="<?php echo l::get('membership.delete') ?>">
			<a class="link" href="<?= url('account') ?>"><?php echo l::get('membership.cancel') ?></a>
		</div>
	</form>

</main>

<?php snippet('footer') ?>