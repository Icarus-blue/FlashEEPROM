			<article>
				<h2>Solicitar pago</h2>
				<?php if ($error): ?>
				<p class="alert alert-danger">No se pudo procesar la solicitud</p>
				<?php endif; ?>
				<form action="<?php echo base_url('developer/withdraw'); ?>" method="post">
					<?= csrf_field(); ?>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="withdraw_phone">
							Teléfono
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="phone" id="withdraw_phone" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="withdraw_paypal">
							Cuenta de Paypal
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="paypal" id="withdraw_paypal" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="withdraw_document">
							Cédula o DNI
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="text" name="document" id="withdraw_document" required>
						</div>
					</div>
					<div class="row">
						<label class="col-md-5 col-sm-12" for="withdraw_amount">
							Monto
						</label>
						<div class="col-md-7 col-sm-12">
							<input type="number" name="amount" step="0.01" min="5" id="withdraw_amount" value="5" required>
						</div>
					</div>
					<p><button type="submit">Solicitar</button></p>
				</form>
			</article>
