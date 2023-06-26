<?php if (count($activitylist)): ?>
<ul>
	<?php foreach ($activitylist as $activity): ?>
	<li>
		<?= gravatar($activity->email) ?>
		<?php if ($activity->type == \App\Entities\Activity::COMMENT_TYPE): ?>
		<span class="username"><?= esc($activity->user) ?></span> comentó en <?= esc(preg_replace('/\.(?:php|lua)$/', '', basename($activity->reference))) ?>: <q><?= esc($activity->text) ?></q>.
		<?php elseif ($activity->type == \App\Entities\Activity::REGISTER_TYPE): ?>
		<span class="username"><?= esc($activity->user) ?></span> se unió a la comunidad.
		<?php elseif ($activity->type == \App\Entities\Activity::SHARE_TYPE): ?>
		<span class="username"><?= esc($activity->user) ?></span> Puso a la venta un archivo para <?= esc($activity->text) ?>.
		<?php elseif ($activity->type == \App\Entities\Activity::DOWNLOAD_TYPE): ?>
			<?php if ($activity->download_type == 'script'): ?>
			<span class="username"><?= esc($activity->user) ?></span> Descargo un archivo.
			<?php else: ?>
			<span class="username"><?= esc($activity->user) ?></span> Compro un archivo.
			<?php endif;?>
		<?php endif;?>
	</li>
	<?php endforeach; ?>
</ul>
<?php else: ?>
<p>No hay actividad</p>
<?php endif; ?>