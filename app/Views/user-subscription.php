			<script src="https://www.paypal.com/sdk/js?client-id=<?= urlencode($client_id) ?>&currency=USD"></script>
			<article>
				<?php if (count($payments) > 0): ?>
				<h2>Historial de Pagos</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Monto</th>
							<th>Factura</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($payments as $payment): ?>
						<tr>
							<td><?= $payment->created_at ?></td>
							<td>$<?= number_format($payment->amount, 2) ?></td>
							<td><a href="<?= base_url('subscription/pdf/' . $payment->paymentid) ?>"><i class="bi bi-file-earmark-pdf"></i></a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php endif; ?>
				<h2>Comprar tokens</h2>
				<div id="success-message" class="alert alert-success" style="display:none">
				</div>
				<p>300 tokens, duración 30 diás </p>
				<div id="paypal-pay"></div>
			</article>
			<script>
				paypal.Buttons({
					createOrder: function(data, actions) {
						return fetch("<?= base_url('subscription/order') ?>", {
							method: "post",
						})
						.then((response) => response.json())
						.then((order) => order.id);
					},
					onApprove: function(data, actions) {
						return fetch("<?= base_url('subscription/capture') ?>/" + data.orderID, {
							method: "post",
						})
						.then((response) => response.json())
						.then((orderData) => {
							let message = document.getElementById("success-message");
							message.innerHTML = '¡Te has suscrito a Flasheeprom! En pocos minutos recibirá su acreditación';
							message.style.display = "block";
						});
					}
				}).render('#paypal-pay');
			</script>
