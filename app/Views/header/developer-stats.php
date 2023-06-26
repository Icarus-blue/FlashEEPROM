		<link href="<?= base_url() ?>/assets/developer-stats.css?v=2" rel="stylesheet" type="text/css">
		<script>
			window.addEventListener("DOMContentLoaded", function() {
				let link = document.querySelector(".withdraw-link");
				link.onclick = function(evt) {
					if (parseFloat(link.getAttribute("data-amount")) < 5) {
						displayMessage("Error", "Debes tener como mínimo USD 5 de saldo para solicitar un pago");
						evt.preventDefault();
					}
				};
			});
		</script>