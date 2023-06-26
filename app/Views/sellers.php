<?php if (!$tableOnly): ?>
			<article class="dashboard">
				<h2>Usuarios</h2>
				<p><input type="search" id="sellers-search" class="search-field" placeholder="Buscar"></p>
				<div id="sellers-container">
<?php endif; ?>
					<table id="users" class="table table-striped">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Tipo de Usuario</th>
								<th>Historial de Tokens</th>
								<th>Tokens Generados</th>
								<th>USD</th>
								<th>Detalle</th>
								<th>Último Pago</th>
								<th>Monto</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $current_user): ?>
							<tr>
								<td><?= esc($current_user->login) ?></td>
								<td><?= $current_user->canManageUsers() ? 'Administrador' : ($current_user->isDeveloper() ? 'Desarrollador' : 'Básico') ?></td>
								<td><?= $current_user->developer_tokens ?></td>
								<td><?= round($current_user->balance * 100) ?></td>
								<td><?= $current_user->balance ?></td>
								<td>
									<a class="btn btn-primary" href="<?= base_url() ?>/developer/stats/<?= $current_user->userid ?>">
										<i class="bi-eye"></i>
									</a>
								</td>
								<td><?= $current_user->withdraw_date ?></td>
								<td><?= $current_user->withdraw_amount ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?= ($pager->getPageCount() > 1) ? $pager->links() : '' ?>
<?php if (!$tableOnly): ?>
				</div>
			</article>
<?php endif; ?>
