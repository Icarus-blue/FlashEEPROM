			<article>
				<h2>Usuario</h2>
				<p>
					Esta acción eliminará al usuario <?= esc($userToDelete->login) ?>.
					¿Está seguro que desea continuar?
				</p>
				<form action="<?php echo base_url('user/delete/' . $userToDelete->userid); ?>" method="post">
					<input type="hidden" name="userid" value="<?= $userToDelete->userid ?>">
					<p class="submission"><?= csrf_field(); ?><button type="submit">Eliminar</button></p>
				</form>
			</article>
