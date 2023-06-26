<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Tu script está aprobado</title>
</head>
<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
	<h1>Proceso de aprobación de script</h1>
	<p>¡Enhorabuena! Tu script ha sido aprobado y ya está disponible en la página de Flasheeprom.</p>
	<?php if (!empty($notes)): ?><p>Notas: <?= esc($notes) ?>.</p><?php endif; ?>
</body>
</html>