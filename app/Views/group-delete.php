			<article>
				<h2>Pregunta</h2>
				<p>
					Esta acción eliminará la pregunta "<?= esc($groupToDelete->name) ?>".
					¿Está seguro que desea continuar?
				</p>
				<form action="<?php echo base_url('question/deleteGroup/' . $groupToDelete->groupid); ?>" method="post">
					<input type="hidden" name="groupid" value="<?= $groupToDelete->groupid ?>">
					<p class="submission"><?= csrf_field(); ?><button type="submit">Eliminar</button></p>
				</form>
			</article>
