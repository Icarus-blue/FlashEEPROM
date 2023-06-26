			<article>
				<h2>Comentario</h2>
				<p>
					Esta acción eliminará el comentario seleccionado.
					¿Está seguro que desea continuar?
				</p>
				<form action="<?php echo base_url('comment/delete/' . $comment->commentid); ?>" method="post">
					<input type="hidden" name="commentid" value="<?= $comment->commentid ?>">
					<p class="submission"><?= csrf_field(); ?><button type="submit">Eliminar</button></p>
				</form>
			</article>
