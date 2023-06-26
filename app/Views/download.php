			<article class="download-list">
				<h2>Trabajos</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Script</th>
							<th>Archivo</th>
							<th>Fecha</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($items as $download): ?>
						<tr>
							<td><?= esc(script_path($download->path)) ?></td>
							<td><?= esc($download->filename) ?></td>
							<td><?= $download->downloaded_at ?></td>
							<td><a class="btn btn-primary" href="<?= base_url() ?>/download/file/<?= $download->downloadid ?>"><i class="bi-cloud-download"></i></a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?= ($pager->getPageCount() > 1) ? $pager->links() : '' ?>
			</article>
