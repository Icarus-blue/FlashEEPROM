<div class="container">
	<div class="row">
		<div class="col-2">
			<div class="search-box">
				<input type="search" id="search" placeholder="Buscar Script..." />
				<i class="bi-search"></i>
			</div>
			<div id="lista" class="filelist-container">
				<p class="hidden" id="no-results">No hay resultados para mostrar</p>
				<ul class="filelist developer" id="results">
				</ul>
				<ul class="filelist developer treeview" id="mainlist">
					<?= $filetree ?>
				</ul>
			</div>
		</div>
		
		<div class="col-7 developer-editor">
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="dev-navigation-tab" data-bs-toggle="tab" data-bs-target="#dev-navigation" type="button" role="tab" aria-controls="dev-navigation" aria-selected="true">Navegación</button>
				</li>
				<li class="nav-item hidden closeable-tab" id="dev-tab-title-_ID_" role="presentation">
					<button class="nav-link" id="dev-editor-tab-_ID_" data-bs-toggle="tab" data-bs-target="#dev-editor-_ID_" type="button" role="tab" aria-controls="dev-editor" aria-selected="true">{TITLE}</button>
					<button class="btn-close" id="btn-editor-close-_ID_" type="button" aria-label="Cerrar"></button>
				</li>
				<li class="nav-item hidden closeable-tab" id="dev-tab-title-image-_ID_" role="presentation">
					<button class="nav-link" id="dev-image-tab-_ID_" data-bs-toggle="tab" data-bs-target="#dev-image-_ID_" type="button" role="tab" aria-controls="dev-image" aria-selected="true">{TITLE}</button>
					<button class="btn-close" type="button" aria-label="Cerrar"></button>
				</li>
				<li class="nav-item hidden closeable-tab" id="dev-preview-tab" role="presentation">
					<button class="nav-link" id="dev-preview-tab-nav" data-bs-toggle="tab" data-bs-target="#dev-preview" type="button" role="tab" aria-controls="dev-preview" aria-selected="true">Vista Previa</button>
					<button class="btn-close hide-button" type="button" aria-label="Cerrar"></button>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active developer-file-table" id="dev-navigation" role="tabpanel" aria-labelledby="dev-navigation-tab">
					<div class="file-modal-container file-modal-delete">
						<div class="file-modal-message">
							<form method="post" action="<?= base_url() ?>/developer/deleteFile">
								<?= csrf_field(); ?>
								<input type="hidden" class="opened-folders" name="opened">
								<input type="hidden" class="file-id-field" name="fileid">
								<h2>Eliminar</h2>
								<p>¿Está seguro que desea eliminar?</p>
								<p class="file-modal-buttons">
									<button type="button" class="btn btn-secondary">Cancelar</button>
									<button type="submit" class="btn btn-danger">Eliminar</button>
								</p>
							</form>
						</div>
					</div>
					<div class="file-modal-container file-modal-rename">
						<div class="file-modal-message">
							<form method="post" action="<?= base_url() ?>/developer/renameFile">
								<?= csrf_field(); ?>
								<input type="hidden" class="opened-folders" name="opened">
								<input type="hidden" class="file-id-field" name="fileid">
								<h2>Cambiar nombre</h2>
								<p><input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ -]+" name="name" class="file-name-field" required></p>
								<p class="file-modal-buttons">
									<button type="button" class="btn btn-secondary">Cancelar</button>
									<button type="submit" class="btn btn-primary">Cambiar</button>
								</p>
							</form>
						</div>
					</div>
					<div class="filelist-table" id="navigation-filelist">
						<?= $filetable ?>
					</div>
				</div>
				<div class="tab-pane fade show editor-panel" id="dev-editor-_ID_" role="tabpanel" aria-labelledby="dev-editor-tab-_ID_">
					<div>
						<h2>Script de lectura</h2>
						<div id="dev-editor-read-_ID_"></div>
					</div>
					<div>
						<h2>Script de escritura</h2>
						<h2 class="editor-panel-readonly">Script de lectura</h2>
						<div id="dev-editor-write-_ID_"></div>
					</div>
					<div class="editor-buttons">
						<button type="button" class="btn btn-primary save-script" data-id="_ID_"><i class="bi-save"></i></button>
						<button type="button" id="preview-button-_ID_" class="btn btn-primary preview-script" data-id="_ID_"><i class="bi-eye"></i></button>
					</div>
				</div>
				<div class="tab-pane fade show image-panel" id="dev-image-_ID_" role="tabpanel" aria-labelledby="dev-image-tab-_ID_">
					<img id="dev-image-display-_ID_" src="">
				</div>
				<div class="tab-pane fade show" id="dev-preview" role="tabpanel" aria-labelledby="dev-preview-tab">
					<div>
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
										<span class="result-additional-images"><i class="bi bi-search"></i></span>
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
									<p>Su subscripción ha expirado.</p>
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
				</div>
			</div>
		</div>
		
		<div class="col-3 activity">
			<h2>Acciones</h2>
			<div class="action-container">
				<div id="dev-navigation-sidebar" class="action-sidebar" style="display: block">
					<div class="action-type" id="folder-type-initial">
						<fieldset>
							<legend>Script</legend>
							<p><a href="javascript:void(0)" class="link-to-dev-folder">Ir a la carpeta de Desarrollos</a></p>
						</fieldset>
						<fieldset>
							<legend>Imagen</legend>
							<p><a href="javascript:void(0)" class="link-to-img-folder">Ir a la carpeta de Imágenes</a></p>
						</fieldset>
					</div>
					<div class="action-type" id="folder-type-1">
						<form method="post" action="<?= base_url() ?>/developer/newFile">
							<?= csrf_field(); ?>
							<input type="hidden" class="current-folder" name="folderid">
							<input type="hidden" class="opened-folders" name="opened">
							<fieldset>
								<legend>Script</legend>
								<p>
									<label>
										Crear nuevo script:
										<input type="text" name="name" class="new-script-name form-control" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ -]+" required>
									</label>
								</p>
								<p>
									<label>
										Tipo de script:
										<select name="script_type" class="form-select" required>
											<option value="0">Kilometraje
											<option value="1">Inmobilizador
										</select>
									</label>
									<button type="submit" class="new-script-submit">Crear</button>
								</p>
							</fieldset>
						</form>
						<fieldset>
							<legend>Imagen</legend>
							<p><a href="javascript:void(0)" class="link-to-img-folder">Ir a la carpeta de Imágenes</a></p>
						</fieldset>
						<form method="post" action="<?= base_url() ?>/developer/newFolder">
							<?= csrf_field(); ?>
							<input type="hidden" class="current-folder" name="folderid">
							<input type="hidden" class="opened-folders" name="opened">
							<fieldset>
								<legend>Carpeta</legend>
								<p>
									<label>
										Crear nueva carpeta:
										<input type="text" name="name" class="new-folder-name form-control" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ -]+" required>
									</label>
									<button type="submit" class="new-folder-submit">Crear</button>
								</p>
							</fieldset>
						</form>
					</div>
					<div class="action-type" id="folder-type-2">
						<fieldset>
							<legend>Script</legend>
							<p><a href="javascript:void(0)" class="link-to-dev-folder">Ir a la carpeta de Desarrollos</a></p>
						</fieldset>
						<form enctype="multipart/form-data" method="post" action="<?= base_url() ?>/developer/newImage">
							<?= csrf_field(); ?>
							<input type="hidden" class="current-folder" name="folderid">
							<input type="hidden" class="opened-folders" name="opened">
							<fieldset>
								<legend>Imagen</legend>
								<p>
									<label>
										Subir imagen:
										<input type="file" name="image" class="new-image-name form-control" accept="image/*" required>
									</label>
									<button type="submit" class="new-image-submit">Subir</button>
								</p>
							</fieldset>
						</form>
						<form method="post" action="<?= base_url() ?>/developer/newFolder">
							<?= csrf_field(); ?>
							<input type="hidden" class="current-folder" name="folderid">
							<input type="hidden" class="opened-folders" name="opened">
							<fieldset>
								<legend>Carpeta</legend>
								<p>
									<label>
										Crear nueva carpeta:
										<input type="text" name="name" class="new-folder-name form-control" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ -]+" required>
									</label>
									<button type="submit" class="new-folder-submit">Crear</button>
								</p>
							</fieldset>
						</form>
					</div>
					<div class="action-type" id="folder-type-3">
						<fieldset>
							<legend>Script</legend>
							<p><a href="javascript:void(0)" class="link-to-dev-folder">Ir a la carpeta de Desarrollos</a></p>
						</fieldset>
						<fieldset>
							<legend>Imagen</legend>
							<p><a href="javascript:void(0)" class="link-to-img-folder">Ir a la carpeta de Imágenes</a></p>
						</fieldset>
					</div>
					<div class="action-type" id="folder-type-5">
						<fieldset>
							<legend>Scripts Aprobados</legend>
							<p>Estos scripts están aprobados y están disponibles en la página principal.</p>
						</fieldset>
					</div>
					<div class="action-type" id="folder-type-6">
						<fieldset>
							<legend>Scripts Desaprobados</legend>
							<p>Estos scripts no fueron aprobados para su publicación en la página principal.</p>
						</fieldset>
					</div>
				</div>
				<div class="action-sidebar" id="dev-image-_ID_-sidebar">
					<fieldset>
						<legend>Información</legend>
						<dl>
							<dt>Nombre:</dt><dd>{NAME}</dd>
							<dt>Tamaño:</dt><dd>{SIZE}</dd>
							<dt>Creado el:</dt><dd>{CREATED_AT}</dd>
						</dl>
					</fieldset>
				</div>
				<div class="action-sidebar" id="dev-editor-_ID_-sidebar">
					<fieldset id="dev-editor-template-_ID_">
						<legend>Script</legend>
						<p>Este script es una plantilla de solo lectura. Su contenido se puede usar como base para desarrollar nuevos scripts.</p>
					</fieldset>
					<fieldset id="dev-editor-image-_ID_">
						<legend>Imagen</legend>
						<label>
							<select id="dev-image-selector-_ID_" class="image-selector form-select">
							</select>
						</label>
					</fieldset>
					<fieldset id="dev-editor-images-_ID_">
						<legend>Imágenes adicionales</legend>
						<label>
							<select id="dev-images-selector-_ID_" class="image-selector form-select" multiple>
							</select>
						</label>
					</fieldset>
					<form id="dev-editor-form-_ID_" method="post" action="<?= base_url() ?>/developer/publish">
						<?= csrf_field(); ?>
						<input type="hidden" name="fileid" value="_ID_">
						<fieldset>
							<legend>Publicar</legend>
							<p>
								<label>
									Prefijo de archivo de descarga:
									<input type="text" name="prefix" class="form-control" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ -]+" required>
								</label>
							</p>
							<div class="row g-0" style="margin-bottom:1rem">
								<label class="col-md-10">
									Ruta de publicación:
									<input id="publish-folder-_ID_" type="text" name="path" class="form-control" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ._ /-]+" readonly required>
								</label>
								<div class="col-md-2" style="align-self:end"><button type="button" id="folder-search-_ID_" style="min-width: 100%;margin:0;padding:0">...</button></div>
							</div>
							<?php foreach ($groups as $groupid => $group): ?>
							<div>
								<p style="margin-bottom: 0">
									<?= esc($group['name']) ?>
								</p>
								<?php foreach ($group['questions'] as $question): ?>
								<p style="margin-bottom: 0">
									<label>
										<input class="publish-question" type="radio" name="question[<?= $groupid ?>]" value="<?= $question->questionid ?>" data-tokens="<?= $question->tokens ?>">
										<?= esc($question->question) ?>
									</label>
								</p>
								<?php endforeach; ?>
							</div>
							<?php endforeach; ?>
							<p>
								Valor aproximado: <span class="publish-tokens">0</span> tokens.
							</p>
							<p>
								<button type="submit" id="dev-publish-_ID_">Publicar</button>
							</p>
						</fieldset>
					</form>
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

<div id="folder-selector-list" style="display:none">
	<div style="height:20em;width:15em;overflow:auto" class="filelist-table" id="folder-modal-_ID_">
		<?= $folders ?>
	</div>
</div>
