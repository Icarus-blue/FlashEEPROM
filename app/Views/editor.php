<div class="container calculador">

	<div class="row">

		<div class="col-2">

			<div class="search-box">

				<input type="search" id="search" placeholder="Buscar Script..." />

				<i class="bi-search"></i>

			</div>

			<div id="lista" class="filelist-container">

				<p class="hidden" id="no-results">No hay resultados para mostrar</p>

				<ul class="filelist" id="results">

				</ul>

				<ul class="filelist treeview" id="mainlist">

					<?= array_as_treeview($scripts, [], true, $token_values) ?>

				</ul>

			</div>

		</div>

		

		<div class="col-7 filecontainer">

			<?php if ($isLoggedIn && $user->canManageAllUsers()): ?>

			<div class="file-modal-container file-modal-tokens">

				<div class="file-modal-message">

					<form method="post" action="<?= base_url() ?>/script/editTokens" enctype="multipart/form-data">

						<?= csrf_field(); ?>

						<input type="hidden" class="script-id-field" name="scriptid">

						<h2>Cambiar tokens</h2>

						<p><input type="number" name="tokens" class="script-tokens-field" required></p>

						<div class="file-modal-image-regular" style="max-height:10em;overflow-y:auto"></div>

						<p><label>Imagen normal: <input type="file" name="image" accept="image/*"></label></p>

						<div class="file-modal-image-expired" style="max-height:10em;overflow-y:auto"></div>

						<p><label>Imagen sin tokens: <input type="file" name="image_expired" accept="image/*"></label></p>

						<div class="alert alert-success file-modal-saved" style="display:none">¡Guardado!</div>

						<p class="file-modal-buttons">

							<button type="button" class="btn btn-secondary">Cancelar</button>

							<button type="submit" class="btn btn-primary">Cambiar</button>

						</p>

					</form>

				</div>

			</div>

			<?php endif; ?>

			<div id="loading-progress" class="loading-progress"><div class="loading-inner"></div></div>

			

			<div class="scriptpanel">

				

				<div class="result">

					<label for="inp" class="button small-button">Cargar Dump</label>

					<input type="file" id="inp">

					<button type="button" class="button small-button" id="compile">Descargar</button>

					<button type="button" class="button small-button" id="show-data">Mostrar Datos</button>

					

					<fieldset class="script-container script-carousel-container">

						<legend id="script-name">Bienvenida</legend>

						<div class="script-normal">

							<div><span id="result-display" class="flat-button medium-button">0</span></div>

							<div>Nuevo KM<input type="text" id="result-value"></div>

							<div class="hidden"><select id="result-value-list"></select></div>

							<button type="button" class="button medium-button" id="result-calculate">Escribir</button>

						</div>

						

						<div class="script-table">

							<p>Este script es de lectura de datos. Haga click en mostrar datos para realizar la lectura.</p>

						</div>

						

						<div class="script-table-result">

							<div>

								<table>

									<thead>

										<tr>

											<th></th><th></th><th></th><th></th><th></th>

										</tr>

									</thead>

									<tbody>

										<tr>

											<td colspan="5"></td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

									</tbody>

								</table>

								<table>

									<thead>

										<tr>

											<th></th><th></th><th></th><th></th><th></th>

										</tr>

									</thead>

									<tbody>

										<tr>

											<td colspan="5"></td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

										<tr>

											<td></td><td>00</td><td>00</td><td>00</td><td>00</td>

										</tr>

									</tbody>

								</table>

							</div>

							<div>

								<p><span id="result-key-1"></span>: <span id="result-value-1"></span></p>

								<p><span id="result-key-2"></span>: <span id="result-value-2"></span></p>

								<p><span id="result-key-3"></span>: <span id="result-value-3"></span></p>

							</div>

						</div>

						

						<div class="script-carousel">

							<div id="script-carousel" class="carousel slide" data-bs-ride="carousel">

								<div class="carousel-inner">

									<div class="carousel-item active">

										<img src="<?= base_url() ?>/assets/bently.png" class="d-block w-100" alt="">

									</div>

									<div class="carousel-item">

										<img src="<?= base_url() ?>/assets/bmw.png" class="d-block w-100" alt="">

									</div>

									<div class="carousel-item">

										<img src="<?= base_url() ?>/assets/bogdan.png" class="d-block w-100" alt="">

									</div>

								</div>

								<button class="carousel-control-prev" type="button" data-bs-target="#script-carousel" data-bs-slide="prev">

									<span class="carousel-control-prev-icon" aria-hidden="true"></span>

									<span class="visually-hidden">Anterior</span>

								</button>

								<button class="carousel-control-next" type="button" data-bs-target="#script-carousel" data-bs-slide="next">

									<span class="carousel-control-next-icon" aria-hidden="true"></span>

									<span class="visually-hidden">Siguiente</span>

								</button>

							</div>

						</div>

						

						<img id="result-image">

						<div class="script-buttons">

							<span class="result-share copy-link"><i class="bi bi-share"></i></span>

							<span class="result-additional-images"><i class="bi bi-search"></i></span>

							<span class="result-image-display"><i class="bi bi-camera"></i></span>

							<?php if ($isLoggedIn && $user->canManageAllUsers()): ?>

							<span class="result-edit-tokens"><i class="bi bi-pencil"></i></span>

							<?php endif; ?>

						</div>

					</fieldset>

					

					<div id="result-names">

					</div>

					

					<p class="terms">

						<label><input type="checkbox" id="terms"> Confirmo que mi uso de este sitio está de acuerdo con los <a href="<?= base_url() ?>/home/terms">términos del servicio</a> y las leyes aplicables.</label>

					</p>

					

					<ul class="nav nav-tabs" role="tablist">

						<li class="nav-item" role="presentation">

							<button id="filename" class="nav-link active" type="button" role="tab" aria-controls="all-activity" aria-selected="true">Archivo</button>

						</li>

					</ul>

				</div>

				

				<div id="comments" class="comments-container vertical-layout">

				</div>

			</div>

			

			<div class="hextable-container">

				<div class="expired-container">

					<div class="expired-message">

						<?php if ($isLoggedIn): ?>

						<h2>Registro expirado</h2>

						<p>Su subscripción ha expirado o no cuenta con saldo suficiente para esta acción.</p>

						<p><button type="button">Aceptar</button></p>

						<?php else: ?>

						<h2>Iniciar sesión</h2>

						<p>Debe <a href="<?= base_url() ?>/user/login">iniciar sesión</a> o <a href="<?= base_url() ?>/user/register">registrarse</a>.</p>

						<?php endif; ?>

					</div>

				</div>

				<table id="hextable" class="hextable">

					<thead>

						<tr>

							<th class="table">&nbsp;</th>

							<th>00</th>

							<th>01</th>

							<th>02</th>

							<th>03</th>

							<th>04</th>

							<th>05</th>

							<th>06</th>

							<th>07</th>

							<th>08</th>

							<th>09</th>

							<th>0A</th>

							<th>0B</th>

							<th>0C</th>

							<th>0D</th>

							<th>0E</th>

							<th>0F</th>

							<th></th>

						</tr>

					</thead>

					<tbody>

					</tbody>

				</table>

			</div>

		</div>

		

		<div class="col-3 activity">

			<h2>Actividad</h2>

			<ul class="nav nav-tabs" role="tablist">

				<li class="nav-item" role="presentation">

					<button class="nav-link active" id="all-activity-tab" data-bs-toggle="tab" data-bs-target="#all-activity" type="button" role="tab" aria-controls="all-activity" aria-selected="true">Todo</button>

				</li>

				<li class="nav-item" role="presentation">

					<button class="nav-link" id="comments-activity-tab" data-bs-toggle="tab" data-bs-target="#comments-activity" type="button" role="tab" aria-controls="comments-activity" aria-selected="false">Solo comentarios</button>

				</li>

			</ul>

			<div id="activity" class="tab-content activity-container">

				<div class="tab-pane fade show active" id="all-activity" role="tabpanel" aria-labelledby="all-activity-tab">

					<?= $activity ?>

				</div>

				<div class="tab-pane fade" id="comments-activity" role="tabpanel" aria-labelledby="comments-activity-tab">

					<?= $commentlist ?>

				</div>

			</div>

		</div>

	</div>

</div>



<form method="post" action="<?= base_url() ?>/script/compile" target="downloadframe" id="compileform">

	<?= csrf_field(); ?>

	<input type="hidden" name="name" id="fieldname">

	<input type="hidden" name="hex" id="fieldhex">

	<input type="hidden" name="is_intel_hex" id="fieldintelhex">

	<input type="hidden" name="scriptid" id="fieldscriptid">

</form>

<iframe name="downloadframe" class="downloadframe"></iframe>



<?php if ($isLoggedIn && $user->canManageAllUsers()): ?>

<div id="file-modal-image-template" style="display:none">

	<div style="display:flex;margin-bottom:.5em">

		<img src="_IMAGE_" width="50" height="50" alt="" style="object-fit:cover;flex:1">

		<div style="flex:1;align-self:center">

			<a href="<?= base_url() ?>/script/deleteImage/_TARGET_" class="btn btn-danger"><i class="bi-trash"></i></a>

		</div>

	</div>

</div>

<?php endif; ?>



<div id="carousel-template" style="display:none">

	<div id="carousel-_ID_" class="carousel-dark" style="position:relative">

		<div style="overflow:hidden">

			<img src="" alt="">

		</div>

		<button class="carousel-control-prev" type="button">

			<span class="carousel-control-prev-icon" aria-hidden="true"></span>

			<span class="visually-hidden">Anterior</span>

		</button>

		<button class="carousel-control-next" type="button">

			<span class="carousel-control-next-icon" aria-hidden="true"></span>

			<span class="visually-hidden">Siguiente</span>

		</button>

	</div>

</div>



<?php if ($ad['ad_active']): ?>

<div class="modal fade" id="initialModal" tabindex="-1" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered">

		<div class="modal-content modal-initial"<?= !empty($ad['ad_image']) ? ' style="background-image:url(\'' . esc($ad['ad_image']) . '\')"' : '' ?>>

			<div class="modal-body">

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>

				<div>

					<?= $ad['ad_html'] ?>

				</div>

			</div>

			<?php if (!empty($ad['ad_button'])): ?>

			<div class="modal-footer">

				<a href="<?= $ad['ad_url'] ?>" class="btn btn-primary"><?= esc($ad['ad_button']) ?></a>

			</div>

			<?php endif; ?>

		</div>

	</div>

</div>



<script>

	window.addEventListener('DOMContentLoaded', function() {

		(new bootstrap.Modal(document.getElementById('initialModal'), {})).show();

	});

</script>

<?php endif; ?>