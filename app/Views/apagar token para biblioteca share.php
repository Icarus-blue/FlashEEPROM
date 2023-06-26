			<article>
				<h2>Compartir</h2>
				<?php if (!empty($error)): ?>
				<p class="error"><?= $error ?></p>
				<?php endif; ?>
				<form action="<?php echo base_url('library/share'); ?>" method="post" enctype="multipart/form-data">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_file">
							Archivo
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="file" name="file" id="share_file" accept=".bin, .hex" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_brand">
							Marca
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="brand" id="share_brand" maxlength="50" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_model">
							Modelo
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="model" id="share_model" maxlength="50" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_year">
							Año
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="number" name="year" id="share_year" maxlength="4" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_memory">
							Memoria
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="memory" id="share_memory" maxlength="50" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_kilometers">
							Kilómetros
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="number" name="kilometers" id="share_kilometers" required>
						</div>
					</div>
					<input type="hidden" name="tokens" id="share_tokens" value="0">
					<div class="row">
						<label class="col-md-5 col-sm-12" for="share_image">
							Imagen
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="file" name="image" id="share_image" accept="image/*" required>
						</div>
					</div>
					<p><button type="submit">Compartir</button></p>
				</form>
			</article>
