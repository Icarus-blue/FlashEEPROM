			<article>
				<h2>Recuperación de contraseña</h2>
				<?php if ($done): ?>
				<p class="alert alert-success">La solicitud se ha procesado. Si el correo ingresado es válido, recibirá un enlace para recuperar la contraseña</p>
				<?php endif; ?>
				<?php if ($error): ?>
				<p class="alert alert-danger">No se pudo procesar la solicitud. Asegúrese de marcar la casilla "No soy un robot"</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/recovery'); ?>" method="post">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="recovery_email">
							Correo electrónico
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="email" name="email" id="recovery_email" required>
						</div>
					</div>
					<p><?= $captcha ?></p>
					<p class="submission"><button type="submit">Solicitar</button></p>
				</form>
			</article>
