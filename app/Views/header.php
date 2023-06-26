<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?= @$viewport ?>
    <!--Facebook-->
    <?php $__title  = (isset($og_title))?$og_title:"Flasheeprom";?>
    <meta content="<?= @$og_title ?>" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="<?= @$og_description ?>" property="og:description" />
    <meta content="<?= @$og_image ?>" property="og:image" />
    <meta content="Inadem" property="og:site_name" />
    <meta content="<?= @$og_url ?>" property="og:url">
    <link rel="preload" as="image"
        href="//s.alicdn.com/@img/imgextra/i3/O1CN01ABFjUU1iZcBgJkJ1S_!!6000000004427-2-tps-720-405.png" />
    <link rel="preload" as="image" href="<?= @$og_image ?>" />
    <meta name="keywords" content="<?= @$og_description ?>" />
    <meta name="description" content="<?= @$og_description ?>" />
    <!--Facebook-->
    <title><?=$__title?></title>
    <!--titulo de pagina-->
    <?php include('analytics.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo+One">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="<?= base_url() ?>/estilos/style.css?v=4" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/editor.css?v=11" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/dialog-polyfill.css?v=2" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/custom_edx.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/toastr/toastr.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url() ?>/assets/dialog-polyfill.js"></script>
    <script src="<?= base_url() ?>/assets/confirm-dialog.js"></script>
    <script>
    var base_url = "<?= base_url()?>";
    var login_url = "<?= base_url('/user/login')?>";
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
<link rel="icon" href="<?= base_url() ?>/assets/logo-pequeño-flash.ico" type="image/x-icon">

<body class="<?= isset($class) ? $class : 'default' ?>">
    <!----------------IMAGEN SUPERIOR  ----------------->
    <div class="padre">
        <div id="logo">
            <div class="left">
                <a href="<?= base_url('') ?>"><img src="<?= base_url() ?>/estilos/logo.png" width="312" height="69"
                        alt="Calcula archivos Hex" title="Calculador libre para uso automotriz"></a>
            </div>
        </div>
        <!-------------------------------------------------->
        <!-------- MENU ------->
        <nav>
            <ul>
                <?php if ($isLoggedIn) : ?>
                <?php if ($isAdmin) : ?>
                <li><a href="<?= base_url() ?>/admin/smtgenerator_admin">SMT Generador</a></li>
                <?php else : ?>
                <li><a href="<?= base_url() ?>/developer/smtgenerator_general">SMT Generador</a></li>
                <?php endif; ?>
                <?php endif; ?>
                <li><a href="<?= base_url() ?>/blog/Comousar">Como usar Flasheeprom?</a></li>
                <li><a href="<?= base_url() ?>/blog/grupos">Grupo de Whatsapp</a></li>
                <li><a href="<?= base_url() ?>/calculador">Cálculador</a></li>
                <li><a href="<?= base_url() ?>/blog/contacto">Contacto</a></li>
                <li><a href="<?= base_url() ?>/library">Comprar Archivos</a></li>
                <?php if ($isLoggedIn): ?>
                <li>
                    <a href="#" class="logged-box">
                        <div class="row" style="width: 60px;">
                            <?= user_image(@$user->email, @$user->photo) ?>
                        </div>
                        <span class="username"><?= esc($user->login) ?></span>
                        <span class="tokens">Días: <?= $user->getDaysLeft() ?>. Tokens: <?= $user->tokens ?></span>
                    </a>
                    <ul>
                        <?php if ($user->canManageAllUsers()): ?>
                        <li><a href="<?= base_url() ?>/admin/dashboard">Administración</a></li>
                        <li><a href="<?= base_url() ?>/admin/users">Registros</a></li>
                        <li><a href="<?= base_url() ?>/admin/sellers">Usuarios</a></li>
                        <li><a href="<?= base_url() ?>/admin/tokens">Tokens</a></li>
                        <li><a href="<?= base_url() ?>/admin/approval">Aprobar scripts</a></li>
                        <li><a href="<?= base_url() ?>/admin/promo">Promoción</a></li>
                        <li><a href="<?= base_url() ?>/admin/smtgenerator_admin">SMT
                                Generador</a></li>
                        <?php else: ?>
                        <li><a href="<?= base_url() ?>/subscription">Suscripción</a></li>
                        <?php endif; ?>
                        <?php if ($user->isModerator()): ?>
                        <li><a href="<?= base_url() ?>/admin/dashboard">Administración</a></li>
                        <?php endif; ?>
                        <?php if ($user->isDeveloper()): ?>
                        <li><a href="<?= base_url() ?>/developer">Desarrollo</a></li>
                        <?php endif; ?>
                        <li><a href="<?= base_url() ?>/developer/stats">Estadísticas</a></li>
                        <li><a href="<?= base_url() ?>/download">Trabajos</a></li>
                        <li><a href="<?= base_url() ?>/library/share">Vender Archivos</a></li>
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
    <div class="ajax-loading" style="display: none;"></div>