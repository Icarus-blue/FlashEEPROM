<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Solicitud de retiro de fondos</title>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
	<h1>Solicitud de retiro de fondos</h1>
	<p>Usuario: <?= esc($user->login) ?></p>
	<p>Teléfono: <?= esc($withdraw->phone) ?></p>
	<p>Paypal: <?= esc($withdraw->paypal) ?></p>
	<p>Cédula o DNI: <?= esc($withdraw->document) ?></p>
	<p>Monto: $<?= esc($withdraw->amount) ?></p>
</body>
</html>