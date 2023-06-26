			<article>
				<h2>Imagen</h2>
				<p>
					Esta acción eliminará la imagen seleccionada del script.
					¿Está seguro que desea continuar?
				</p>
				<form action="<?php echo base_url('script/deleteImage/' . $image->scriptimageid); ?>" method="post">
					<input type="hidden" name="scriptimageid" value="<?= $image->scriptimageid ?>">
					<p class="submission"><?= csrf_field(); ?><button type="submit">Eliminar</button></p>
				</form>
			</article>
