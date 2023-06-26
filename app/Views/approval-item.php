			<article class="dashboard">
				<h2>Script pendiente de aprobación</h2>
				<div class="approval-container">
					<div>
						<h3 style="all:revert">Script de lectura</h3>
						<div id="readscript" class="ace-editor-placeholder"><?= esc($readcode) ?></div>
					</div>
					<div>
						<h3 style="all:revert">Script de escritura</h3>
						<div id="writescript" class="ace-editor-placeholder"><?= esc($writecode) ?></div>
					</div>
				</div>
				<div class="subscription-form">
					<form action="<?= base_url('admin/approve/' . $script->luascriptid); ?>" method="post">
						<?= csrf_field(); ?>
						<div class="row">
							<label class="col-md-5 col-sm-12" for="approve_tokens">
								Tokens
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="number" name="tokens" id="approve_tokens" value="0" required>
							</div>
						</div>
						<p>
							<label>
								<input type="checkbox" name="approve" checked style="all:revert" value="1">
								Aprobar
							</label>
						</p>
						<p class="submission"><button type="submit">Guardar</button></p>
					</form>
				</div>
			</article>
