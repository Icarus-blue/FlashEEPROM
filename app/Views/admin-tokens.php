		<article>
			<div>
				<h2>Tokens</h2>
				<div class="graphic-container">
					<canvas></canvas>
				</div>
			</div>
			<div>
				<h2>Historial</h2>
				<div class="graphic-container">
					<canvas></canvas>
				</div>
			<div>
		</article>

		<script>
			var tokenStats = <?= json_encode($current) ?>;
			var soldStats = <?= json_encode($soldStats) ?>;
		</script>
		<script src="<?= base_url() ?>/assets/admin-tokens.js"></script>
		<script src="<?= base_url() ?>/assets/admin-tokens-sold.js"></script>
