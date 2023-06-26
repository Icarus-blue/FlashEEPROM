<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Flasheeprom</title>
		<!--titulo de pagina-->
		<?php include('analytics.php'); ?>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		<link href="<?= base_url() ?>/estilos/style.css?v=4" rel="stylesheet" type="text/css">
		<link href="<?= base_url() ?>/assets/editor.css?v=11" rel="stylesheet" type="text/css">
		<link href="<?= base_url() ?>/assets/dialog-polyfill.css?v=2" rel="stylesheet" type="text/css">
		<script src="<?= base_url() ?>/assets/dialog-polyfill.js"></script>
		<script src="<?= base_url() ?>/assets/confirm-dialog.js"></script>
		<script>
			var appData = {
				base_url: "<?= base_url() ?>",
				token_name: "<?= csrf_token() ?>",
				token: "<?= csrf_hash() ?>",
				loggedIn: <?= $isLoggedIn ? 'true' : 'false' ?>,
				noExpire: <?= $isLoggedIn ? ($user->canBypassExpiration() ? 'true' : 'false') : 'false' ?>,
				initialScript: '<?= isset($initial_script) ? esc($initial_script) : 'scripts/Inicio/Bienvenida' ?>',
				launchEditor: <?= !empty($launch_editor) ? 'true' : 'false' ?>
			};
		</script>
		<?= $headercontent ?>
	</head>
	<body class="<?= isset($class) ? $class : 'default' ?>">
		<!----------------IMAGEN SUPERIOR  ----------------->
		<div class="padre">
			<div id="logo">
				<div class="left">
					<a href="<?= base_url() ?>"><img src="<?= base_url() ?>/estilos/logo.png" width="312" height="69" alt="Calcula archivos Hex" title="Calculador libre para uso automotriz"></a>
				</div>
			</div>
			<!-------------------------------------------------->
			<!-------- MENU ------->
			<nav>
				<ul>
					<li><a href="<?= base_url() ?>/blog/Comousar">Como usar Flasheeprom?</a></li>
					<li><a href="<?= base_url() ?>/blog/grupos">Grupo de Whatsapp</a></li>
					<li><a href="<?= base_url() ?>/blog/contacto">Contacto</a></li>
					<li><a href="<?= base_url() ?>/library">Comprar Archivos</a></li>
					<?php if ($isLoggedIn): ?>
					<li>
						<a href="#" class="logged-box">
							<?= gravatar($user->email) ?>
							<span class="username"><?= esc($user->login) ?></span>
							<span class="tokens">Días: <?= $user->getDaysLeft() ?>. Tokens: <?= $user->tokens ?></span>
						</a>
						<ul>
							<?php if ($user->canManageAllUsers()): ?>
							<li><a href="<?= base_url() ?>/admin/dashboard">Administración</a></li>
							<li><a href="<?= base_url() ?>/admin/users">Registros</a></li>
							<li><a href="<?= base_url() ?>/admin/sellers">Usuarios</a></li>
							<li><a href="<?= base_url() ?>/admin/tokens">Tokens</a></li>
							<li><a href="<?= base_url() ?>/question">Preguntas</a></li>
							<li><a href="<?= base_url() ?>/admin/approval">Aprobar scripts</a></li>
							<li><a href="<?= base_url() ?>/admin/promo">Promoción</a></li>
							<?php else: ?>
							<li><a href="<?= base_url() ?>/subscription">Suscripción</a></li>
							<?php endif; ?>
							<?php if ($user->isDeveloper()): ?>
							<li><a href="<?= base_url() ?>/developer">Desarrollo</a></li>
							<?php endif; ?>
							<li><a href="<?= base_url() ?>/developer/stats">Estadísticas</a></li>
							<li><a href="<?= base_url() ?>/download">Trabajos</a></li>
							<li><a href="<?= base_url() ?>/library/share">Vender archivos</a></li>
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
