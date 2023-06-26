		<article>
			<div class="stats-header">
				<div>
					<i class="bi bi-person-circle"></i>
					<span class="stats-value"><?= $users ?></span>
					<span>Usuarios registrados</span>
				</div>
				<div>
					<i class="bi bi-graph-up"></i>
					<span class="stats-value"><?= $stats[date('Y-m-t')]['registered'] ?></span>
					<span>Registros del mes</span>
				</div>
				<div>
					<i class="bi bi-bar-chart-line-fill"></i>
					<span class="stats-value"><?= $usersWhoPaid ?></span>
					<span>Membresías vendidas</span>
				</div>
				<div>
					<i class="bi bi-bar-chart-line-fill"></i>
					<span class="stats-value"><?= $stats[date('Y-m-t')]['payTotal'] ?></span>
					<span>Membresías del mes</span>
				</div>
				<div>
					<i class="bi bi-credit-card"></i>
					<span class="stats-value"><?= $returning ?></span>
					<span>Recompra</span>
				</div>
			</div>
			<div class="graphic-container">
				<canvas></canvas>
			</div>
		</article>

		<script>
			var userStats = <?= json_encode($stats) ?>;
		</script>
		<script src="<?= base_url() ?>/assets/user-stats.js"></script>
