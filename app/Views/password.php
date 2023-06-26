			<article>
				<h2>Cambiar contraseña</h2>
				<?php if ($error): ?>
				<p class="alert alert-danger">No se pudo cambiar la contraseña. Por favor, verifique la información ingresada</p>
				<?php endif; ?>
				<?php if ($changed): ?>
				<p class="alert alert-success">La contraseña se ha cambiado con éxito</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/password/' . $userToChange->userid); ?>" method="post">
					<?= csrf_field(); ?>
					<input type="hidden" name="userid" value="<?= $userToChange->userid ?>">
					<div class="row">
						<label class="col-md-5 col-sm-12" for="password_password">
							Contraseña actual
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" name="password" id="password_password" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="password_newone">
							Nueva contraseña
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" name="newone" id="password_newone" required minlength="6">
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="password_newagain">
							Nueva contraseña
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="password" name="newagain" id="password_newagain" required minlength="6">
						</div>
					</div>
					<p class="submission"><button type="submit">Cambiar</button></p>
				</form>
			</article>
