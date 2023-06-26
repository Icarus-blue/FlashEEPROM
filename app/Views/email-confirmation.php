			<article>
				<h2>Confirmación de correo electrónico</h2>
				<p>Su cuenta está pendiente de activación. Puede activarla usando el enlace proporcionado en el correo electrónico de registro. Si el correo no aparece revise la bandeja de SPAM</p>
				<p>Si no lo ha recibido, puede <a href="<?= base_url() ?>/user/requestConfirm/<?= $userToConfirm->userid ?>">solicitar que se vuelva a enviar</a>.</p>
				<?php if ($sent_again): ?>
				<p>Se ha vuelto a enviar el correo.</p>
				<?php endif; ?>
				<?php if ($not_sent): ?>
				<p>Debe esperar un tiempo antes de hacer la solicitud.</p>
				<?php endif; ?>
			</article>
