			<article>
				<h2>Editar suscripción</h2>
				<?php if ($error): ?>
				<p class="alert alert-danger">No se pudo editar la suscripción. Por favor, verifique la información ingresada</p>
				<?php endif; ?>
				<?php if ($changed): ?>
				<p class="alert alert-success">La suscripción se ha actualizado</p>
				<?php endif; ?>
				<form action="<?php echo base_url('user/subscription/' . $userToChange->userid); ?>" method="post">
					<?= csrf_field(); ?>
					<input type="hidden" name="userid" value="<?= $userToChange->userid ?>">
					<div class="row">
						<label class="col-md-5 col-sm-12" for="subscription_days">
							Días
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="number" name="days" id="subscription_days" value="<?= $userToChange->getDaysLeft() ?>" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="subscription_tokens">
							Tokens
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="number" name="tokens" id="subscription_tokens" value="<?= $userToChange->getValidTokens() ?>" required>
						</div>
					</div>
					<div class="row">
						<!--<label>
							<input type="checkbox" style="all:revert" value="1" name="developer"<?= $userToChange->isDeveloper() ? ' checked' : '' ?>>
							Cuenta de desarrollador
						</label> -->
						<div class="col-md-5 offset-sm-1 col-sm-12">
							<label>
							<input type="checkbox" style="all:revert" value="1" name="developer"<?= $userToChange->isDeveloper() ? ' checked' : '' ?>>
							Cuenta de desarrollador
							</label>
						</div>
						<div class="col-md-5 col-sm-12">
							<label>
							<input type="checkbox" style="all:revert" value="1" name="moderator"<?= $userToChange->isModerator() ? ' checked' : '' ?>>
							Cuenta de Moderador
							</label>
						</div>
					</div>
					<p class="submission"><button type="submit">Actualizar</button></p>
				</form>
			</article>
