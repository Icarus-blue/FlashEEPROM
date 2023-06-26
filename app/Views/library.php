<?php if (!$tableOnly): ?>
			<article class="library">
				<h2>Biblioteca</h2>
				<p><input type="search" id="library-search" class="search-field" placeholder="Buscar"></p>
				<div id="share-container">
<?php endif; ?>
					<table id="share">
						<thead>
							<tr>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Año</th>
								<th></th>
								<th>Memoria</th>
								<th>Kilómetros</th>
								<th>Subido por</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($items as $item): ?>
							<tr>
								<td><?= esc($item->brand) ?></td>
								<td><?= esc($item->model) ?></td>
								<td><?= $item->year ?></td>
								<td><a class="imagelink" href="<?= base_url() ?>/library/image/<?= $item->shareid ?>"><img src="<?= base_url() ?>/assets/image.png"></a></td>
								<td><?= esc($item->memory) ?></td>
								<td><?= $item->kilometers ?></td>
								<td><?= esc($item->login) ?></td>
								<td>
									<a class="copy-link btn btn-primary" href="<?= base_url() ?>/library/view/<?= $item->shareid ?>"><i class="bi bi-share"></i></a>
									<a class="downloadlink btn btn-primary" href="<?= base_url() ?>/library/download/<?= $item->shareid ?>" data-tokens="<?= $item->tokens ?>"><i class="bi bi-cloud-download"></i></a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?= ($pager->getPageCount() > 1) ? $pager->links() : '' ?>
<?php if (!$tableOnly): ?>
				</div>
			</article>
<?php endif; ?>
