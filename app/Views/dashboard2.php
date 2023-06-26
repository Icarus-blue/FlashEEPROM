<?php if (!$tableOnly): ?>
			<article class="dashboard">
				<h2>Administración</h2>
				<p>Total de descargas: <?= $downloads ?></p>
				<p><input type="search" id="dashboard-search" class="search-field" placeholder="Buscar"></p>
				<div id="dashboard-container">
<?php endif; ?>
					<table id="users" class="table table-striped">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Correo electrónico</th>
								<th>Fecha de registro</th>
								<th>Días</th>
								<th>Tokens</th>
								<th>Estado</th>
								<th>Administrar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $current_user): ?>
							<tr>
								<td><?= esc($current_user->login) ?></td>
								<td><?= esc($current_user->email) ?></td>
								<td><?= $current_user->created_at ?></td>
								<td><?= $current_user->getDaysLeft() ?></td>
								<td><?= $current_user->tokens ?></td>
								<td><?= $current_user->hasExpired() ? 'Inactivo' : 'Activo' ?></td>
								<td>
									<?php if ($user->canManageUser($current_user)): ?>
									<a class="btn btn-primary" href="<?= base_url() ?>/user/subscription/<?= $current_user->userid ?>">
										<i class="bi-calendar-check"></i>
									</a>
									<a class="btn btn-danger" href="<?= base_url() ?>/user/delete/<?= $current_user->userid ?>" data-userid="<?= $current_user->userid ?>">
										<i class="bi-trash"></i>
									</a>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?= ($pager->getPageCount() > 1) ? $pager->links() : '' ?>
<?php if (!$tableOnly): ?>
				</div>
				<div class="subscription-form">
					<h4>Subscripción inicial para nuevos usuarios</h4>
					<form action="<?= base_url('admin/subscription/'); ?>" method="post">
						<?= csrf_field(); ?>
						<div class="row">
							<label class="col-md-5 col-sm-12" for="subscription_days">
								Días
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="number" name="days" id="subscription_days" value="<?= $config['initial_days'] ?>" required>
							</div>
						</div>
						<div class="row">
							<label class="col-md-5 col-sm-12" for="subscription_tokens">
								Tokens
							</label>
							<div class="col-md-7 col-sm-12">
								<input type="number" name="tokens" id="subscription_tokens" value="<?= $config['initial_tokens'] ?>" required>
							</div>
						</div>
						<p class="submission"><button type="submit">Actualizar</button></p>
					</form>
				</div>
			</article>
<?php endif; ?>
