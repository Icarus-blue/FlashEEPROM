			<article>
				<h2>Pregunta</h2>
				<p>
					Esta acción eliminará la pregunta "<?= esc($questionToDelete->question) ?>".
					¿Está seguro que desea continuar?
				</p>
				<form action="<?php echo base_url('question/delete/' . $questionToDelete->questionid); ?>" method="post">
					<input type="hidden" name="questionid" value="<?= $questionToDelete->questionid ?>">
					<p class="submission"><?= csrf_field(); ?><button type="submit">Eliminar</button></p>
				</form>
			</article>
