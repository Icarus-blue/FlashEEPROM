			<article class="dashboard">
				<?php if ($current_user->userid != $user->userid): ?>
				<div>
					<dl>
						<dt>Usuario: </dt>
						<dd><?= esc($current_user->login) ?></dd>
						<dt>Email: </dt>
						<dd><?= esc($current_user->email) ?></dd>
					</dl>
				</div>
				<?php endif; ?>

				<div class="stats-incoming">
					<div>
						<h2>Ingresos estimados</h2>
						<div class="incoming-parts">
							<div>
								<p class="figure-heading">Hoy</p>
								<p class="figure"><?= number_format($today['credit'], 2) ?> US$</p>
							</div>
							<div>
								<p class="figure-heading">Ayer</p>
								<p class="figure"><?= number_format($yesterday['credit'], 2) ?> US$</p>
								<p class="small-item small-figure"><?= number_signed($yesterday['credit'] - $week_ago['credit']) ?> US$</p>
								<p class="small-item">vs. mismo día de la semana pasada</p>
							</div>
							<div>
								<p class="figure-heading">Últimos 7 días</p>
								<p class="figure"><?= number_format($current_week['credit'], 2) ?> US$</p>
								<p class="small-item small-figure"><?= number_signed($current_week['credit'] - $week_before['credit']) ?> US$</p>
								<p class="small-item">vs. los 7 días anteriores</p>
							</div>
							<div>
								<p class="figure-heading">Este mes</p>
								<p class="figure"><?= number_format($month['credit'], 2) ?> US$</p>
								<p class="small-item small-figure"><?= number_signed($month['credit'] - $month_last_year['credit']) ?> US$</p>
								<p class="small-item">vs. mismo período del año anterior</p>
							</div>
						</div>
					</div>
					<div>
						<h2>
							Saldo
							<?php if ($current_user->userid == $user->userid): ?>
							<a class="withdraw-link" href="<?= base_url() ?>/developer/withdraw" data-amount="<?= $current_user->balance ?>">
								<i class="bi bi-three-dots-vertical"></i>
							</a>
							<?php endif; ?>
						</h2>
						<div class="balance-container">
							<p class="figure-heading">&nbsp;</p>
							<p class="figure">$<?= number_format($current_user->balance, 2) ?></p>
							<p class="small-item">Último pago</p>
							<p class="small-item">$<?= number_format($last_withdraw, 2) ?></p>
						</div>
					</div>
				</div>
				<div class="stats-downloads">
					<div>
						<p>Histórico</p>
						<p><?= $all_time['total'] ?></p>
					</div>
					<div>
						<p>Este mes</p>
						<p><?= $month['total'] ?></p>
					</div>
					<div>
						<p>Hoy</p>
						<p><?= $today['total'] ?></p>
					</div>
					<div>
						<p>Tokens</p>
						<p><?= $all_time['tokens'] ?></p>
					</div>
				</div>
				<div class="stats-report">
					<div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Mes</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i = 11; $i >= 0; $i--): ?>
								<tr>
									<td><?= month_name(strtotime("-$i months")) ?></td>
									<?php if ($current_user->userid == $user->userid): ?>
									<td><a href="<?= base_url() ?>/developer/stats?month=<?= date('n', strtotime("-$i months")) ?>&amp;year=<?= date('Y', strtotime("-$i months")) ?>">Reporte</a></td>
									<?php else: ?>
									<td><a href="<?= base_url() ?>/developer/stats/<?= $current_user->userid ?>?month=<?= date('n', strtotime("-$i months")) ?>&amp;year=<?= date('Y', strtotime("-$i months")) ?>">Reporte</a></td>
									<?php endif; ?>
								</tr>
								<?php endfor; ?>
							</tbody>
						</table>
					</div>
					<div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Script</th>
									<th>Token</th>
									<th>Descargas</th>
									<th>Fecha</th>
									<th>Usuario</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (count($items) > 0):
								foreach ($items as $item):
								?>
								<tr>
									<td><?= esc(basename($item->path, '.lua')) ?></td>
									<td><?= $item->tokens ?></td>
									<td>1</td>
									<td><?= $item->registered_at ?></td>
									<td><?= esc($item->login) ?></td>
								</tr>
								<?php
								endforeach;
								else:
								?>
								<tr><td colspan="5">No hay datos para mostrar</td></tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</article>
