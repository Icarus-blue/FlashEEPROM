			<article>
				<h2>Cambiar contraseña</h2>
				<?php if ($error): ?>
				<p class="error">No se pudo cambiar la contraseña. Por favor, verifique la información ingresada</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/reset/' . $recovery->requestid . '/' . $recovery->token); ?>" method="post">
					<?= csrf_field(); ?>
					<p><label>Nueva contraseña
					<input type="password" name="newone" required minlength="6">
					</label></p>
					<p><label>Confirmar contraseña
					<input type="password" name="newagain" required minlength="6">
					</label></p>
					<p class="submission"><button type="submit">Cambiar</button></p>
				</form>
			</article>
