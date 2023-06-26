			<article>
				<h2>Promoción</h2>
				<?php if ($saved): ?>
				<p class="alert alert-success">Se han guardado los cambios</p>
				<?php endif; ?>
				<form action="<?php echo base_url('admin/promo'); ?>" method="post">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="image-url">
							Imagen de fondo
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="url" id="image-url" name="image-url" value="<?= esc($ad['ad_image']) ?>" placeholder="https://flasheeprom.com/assets/fondo.png">
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="button-url">
							URL del botón
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="url" id="button-url" name="button-url" value="<?= esc($ad['ad_url']) ?>" placeholder="https://www.google.com/">
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="button-text">
							Texto del botón
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" id="button-text" name="button-text" value="<?= esc($ad['ad_button']) ?>" placeholder="Ir">
						</div>
					</div>
					<div class="row">
						<label class="col-md-12 col-sm-12" for="promo-content">
							Contenido
						</label>
						<div class="col-md-12 col-sm-12">
							<textarea id="promo-content" name="content"><?= esc($ad['ad_html']) ?></textarea>
						</div>
					</div>
					<div class="row">
						<label><input type="checkbox" name="active" value="1"<?= $ad['ad_active'] ? ' checked' : '' ?>> La promoción está activa</label>
					</div>
					<p class="submit-container"><button type="submit" class="btn btn-primary">Guardar</button></p>
				</form>
			</article>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js" integrity="sha512-t4CFex/T+ioTF5y0QZnCY9r5fkE8bMf9uoNH2HNSwsiTaMQMO0C9KbKPMvwWNdVaEO51nDL3pAzg4ydjWXaqbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/langs/es.min.js" integrity="sha512-Oi0sjeDjVXYTffbcwYrU3wJa5rRW1uAq1APoysJ+aM3LQOUcDCg1WnIHVEOyGFTPkrwjjYtYTIL46M1PLkFaqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
			<script>
				$(function() {
					$('#promo-content').trumbowyg({
						resetCss: true,
						lang: 'es'
					});
				})
			</script>