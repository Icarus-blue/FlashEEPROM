<!DOCTYPE html>
<html>
	<head>
	    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9KKJGQM7XV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9KKJGQM7XV');
</script>

		<meta charset="utf-8">	<title>Flasheeprom</title>
		<!--titulo de pagina-->
		<link href="<?= base_url() ?>/estilos/style.css?v=3" rel="stylesheet" type="text/css">
		<link href="<?= base_url() ?>/assets/editor.css?v=3" rel="stylesheet" type="text/css">
		<link href="<?= base_url() ?>/assets/dialog-polyfill.css" rel="stylesheet" type="text/css">
		<script src="<?= base_url() ?>/assets/dialog-polyfill.js"></script>
		<script src="<?= base_url() ?>/assets/confirm-dialog.js"></script>
		<script>
			var appData = {
				base_url: "<?= base_url() ?>",
				token_name: "<?= csrf_token() ?>",
				token: "<?= csrf_hash() ?>",
				loggedIn: <?= $isLoggedIn ? 'true' : 'false' ?>,
			};
		</script>
		<?= $headercontent ?>
	</head>
	<body>
		<!----------------IMAGEN SUPERIOR  ----------------->
		<div class="padre">
			<div id="logo">
				<div class="left">
				<a href="/"><img src="<?= base_url() ?>/estilos/logo.png" width="312" height="69" alt="Calcula archivos Hex" title="Calculador libre para uso automotriz">
				</div>
			</div>
			<!-------------------------------------------------->
			<!-------- MENU ------->
			<nav>
				<ul>
					<li><a href="<?= base_url() ?>/blog/Comousar">Como usar Flasheeprom?</a></li>
					<li><a href="<?= base_url() ?>/blog/grupos">Grupo de Whatsapp</a></li>
					<li><a href="<?= base_url() ?>/blog/contacto">Contacto</a></li>
					<?php if ($isLoggedIn): ?>
					<li>
						<a href="#"><?= esc($user->login) ?></a>
						<ul>
							<?php if ($user->canManageAllUsers()): ?>
							<li><a href="<?= base_url() ?>/admin/dashboard">Administración</a></li>
							<?php endif; ?>
							<li><a href="<?= base_url() ?>/user/password/<?= $user->userid ?>">Contraseña</a></li>
							<li><a href="<?= base_url() ?>/user/logout">Cerrar sesión</a></li>
						</ul>
					</li>
					<?php else: ?>
					<li><a href="<?= base_url() ?>/user/register">Registrarse</a></li>
					<li><a href="<?= base_url() ?>/user/login">Iniciar sesión</a></li>
					<?php endif; ?>
				</ul>
			</nav>
		
		</div>
		
		
		<!-------- FIN DE MENU ------->  
