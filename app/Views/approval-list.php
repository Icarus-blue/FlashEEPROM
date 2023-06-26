			<article class="dashboard">
				<h2>Scripts pendientes de aprobación</h2>
				<div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Ruta</th>
								<th>Tamaño</th>
								<th>Creado el</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pending as $item): ?>
							<tr>
								<td><?= esc($item->login) ?></td>
								<td><?= esc($item->path) ?></td>
								<td><?= $item->size ?></td>
								<td><?= $item->created_at ?></td>
								<td>
									<a class="btn btn-primary" href="<?= base_url() ?>/admin/approve/<?= $item->luascriptid ?>">
										<i class="bi-eye"></i>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</article>
