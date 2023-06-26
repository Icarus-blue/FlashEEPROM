<?=$menu_movil ?>
<div class="login container">
		<div class="row">
			<div class="col-lg-9 offset-lg-2 mx-auto">
			<article>
				<h2>Iniciar sesión</h2>
				<?php if ($error): ?>
				<p class="alert alert-danger">El usuario o la contraseña no son correctos</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/login'); ?>" method="post">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="login_login">
							Usuario
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="login" id="login_login" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="login_password">
							Contraseña
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" name="password" id="login_password" required>
						</div>
					</div>
					<p><a href="<?= base_url('user/recovery') ?>">¿Olvidó la contraseña?</a></p>
					<p><button class="btn btn-primary" type="submit">Entrar</button></p>
				</form>
			<div class="row" style="height: unset;">
				<label>
				<h2>Iniciar sesión con :</h2>
				</label>
				<div class="col"> 
				<?= $googleButton ?>
				</div>
				<div class="col"> 
				<?= $metaButton ?>
				</div>
			</div>
			</article>
		</div>
	</div>
</div>