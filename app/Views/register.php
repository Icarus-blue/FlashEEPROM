			<article>
				<h2>Registrarse</h2>
				<?php if ($error): ?>
				<p class="alert alert-danger">No se pudo crear el usuario. Por favor, verifique la información ingresada</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/register'); ?>" method="post">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="register_login">
							Usuario
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="login" id="register_login" required pattern="[A-ZÑÁÉÍÓÚa-zñáéíóú0-9]+">
						</div>
					</div>
					<?php if ($user_exists): ?><p class="alert alert-danger">El usuario ya existe</p><?php endif; ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="register_email">
							Correo electrónico
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="email" name="email" id="register_email" required>
						</div>
					</div>
					<?php if ($email_exists): ?><p class="alert alert-danger">El correo ya está registrado</p><?php endif; ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="register_password">
							Contraseña
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" name="password" id="register_password" required minlength="6">
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="register_confirm">
							Confirmar contraseña
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" id="register_confirm" name="confirm" required minlength="6">
						</div>
					</div>
					<p><?= $captcha ?></p>
					<p><button type="submit">Registrar</button></p>
				</form>
				<div class="row">
					<label class="col-md-5 col-sm-12" for="googleButton">
							<h2>Gengistrase con</h2>
					</label>
				<div class="row" style="height: unset;">
					<div class="col"> 
					<?= $googleButton ?>
					</div>
					<div class="col"> 
					<?= $metaButton ?>
					</div>
				</div>	
				</div>		
			</article>
