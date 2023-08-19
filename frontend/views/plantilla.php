<?php
$frontend = Ruta::frontend();
$backend = Ruta::backend();
$plantilla = ControladorPlantilla::ctrEstiloPlantilla();
$comercio = ControladorPlantilla::ctrMostrarDivisa();
$divisa = $comercio['divisa'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />

  <?php

  /* -------------------------- MARCADO DE CABECERAS -------------------------- */

  $rutas = [];

  if (isset($_GET['ruta'])) {
    $rutas = explode('/', $_GET['ruta']);
    $ruta = $rutas[0];
  } else {
    $ruta = 'inicio';
  }

  $cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

  if (!is_array($cabeceras)) {
    $ruta = 'inicio';
    $cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);
  }

  /* -------------------------- /MARCADO DE CABECERAS ------------------------- */

  ?>

  <!-- MARCADO HTML5 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="title" content="<?= $cabeceras['titulo'] ?>">
  <meta name="description" content="<?= $cabeceras['descripcion'] ?>">
  <meta name="keyword" content="<?= $cabeceras['palabrasClaves'] ?>">

  <title><?= $cabeceras['titulo'] ?></title>
  <!-- /MARCADO HTML5 -->

  <!-- Marcado de Open Graph FACEBOOK -->

  <meta property="og:title" content="<?= $cabeceras['titulo'] ?>">
  <meta property="og:url" content="<?= $frontend . $cabeceras['ruta'] ?>">
  <meta property="og:description" content="<?= $cabeceras['descripcion'] ?>">
  <meta property="og:image" content="<?= $cabeceras['portada'] ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Tu logo">
  <meta property="og:locale" content="es_MX">

  <!-- Marcado de Open Graph FACEBOOK -->

  <!-- Marcado de TWITTER -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?= $cabeceras['titulo'] ?>">
  <meta name="twitter:url" content="<?= $frontend . $cabeceras['ruta'] ?>">
  <meta name="twitter:description" content="<?= $cabeceras['descripcion'] ?>">
  <meta name="twitter:image" content="<?= $cabeceras['portada'] ?>">
  <meta name="twitter:site" content="@tu-usuario">
  <!-- Marcado de TWITTER -->

  <!-- Favicon  -->
  <link rel="icon" href="<?= $backend . $plantilla['icono'] ?>" />

  <!-- Core Style CSS -->
  <link rel="stylesheet" href="<?= $frontend ?>views/css/core-style.css" />
  <link rel="stylesheet" href="<?= $frontend ?>views/css/style.css" />
</head>

<body>
  <?php include_once 'modules/header.php';
  include_once 'modules/cart.php';

  /* --------------------------- CONTENIDO DINAMICOS -------------------------- */

  $rutas = [];
  $ruta = null;
  $infoProductos = null;

  if (isset($_GET['ruta'])) {

    $rutas = explode('/', $_GET['ruta']);
    $item = 'ruta';
    $valor = $rutas[0];

    /* ---------------------- URLS AMIGABLES DE CATEGORIAS ---------------------- */

    $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

    if (is_array($rutaCategorias) && $valor == $rutaCategorias['ruta'] && $rutaCategorias['estado'] == 1) {
      $ruta = $valor;
    }

    /* ---------------------- /URLS AMIGABLES DE CATEGORIAS --------------------- */

    /* ---------------------- URLS AMIGABLES SUBCATEGORIAS ---------------------- */

    $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

    foreach ($rutaSubCategorias as $key => $value) {
      if (is_array($value) && $valor == $value['ruta'] && $value['estado'] == 1) {
        $ruta = $valor;
      }
    }

    /* ---------------------- /URLS AMIGABELS SUBCATEGORIAS --------------------- */

    /* ----------------------- URLS AMIGBLES DE PRODUCTOS ----------------------- */

    $rutaProductos = ControladorProductos::ctrMostrarInfoProductos($item, $valor);

    if (is_array($rutaProductos) && $rutas[0] == $rutaProductos['ruta'] && $rutaProductos['estado'] == 1) {
      $infoProductos = $valor;
    }

    /* ----------------------- /URLS AMIGBLES DE PRODUCTOS ---------------------- */

    /* ----------------------------- URLS AMIGABLES ----------------------------- */

    if (
      $ruta != null ||
      $rutas[0] == 'articulos-recientes' ||
      $rutas[0] == 'lo-mas-vendido' ||
      $rutas[0] == 'lo-mas-visto'
    ) {

      include 'modules/products.php';
    } else if ($infoProductos != null) {

      include 'modules/infoproduct.php';
    } else if (
      $rutas[0] == 'seeker' || #buscador
      $rutas[0] == 'verify' ||
      $rutas[0] == 'log-out' ||
      $rutas[0] == 'profile' ||
      //$rutas[0] == 'carrito-de-compras' ||
      $rutas[0] == 'error' ||
      $rutas[0] == 'finalize-purchase' || # finalizar compra
      $rutas[0] == 'off' ||
      $rutas[0] == 'cancelado'
    ) {

      include 'modules/' . $rutas[0] . '.php';
    } else if ($rutas[0] == 'inicio') {

      include 'modules/slide.php';
      include_once 'modules/top-category.php';
      include_once 'modules/call-to-action.php';
      include_once 'modules/featured-productos.php';
      include_once 'modules/brands.php';
    } else {

      include 'modules/error404.php';
    }

    /* ----------------------------- /URLS AMIGABLES ---------------------------- */
  } else {
    include_once 'modules/slide.php';
    include_once 'modules/top-category.php';
    include_once 'modules/call-to-action.php';
    include_once 'modules/featured-productos.php';
    include_once 'modules/brands.php';
  }

  /* --------------------------- CONTENIDO DINAMICOS -------------------------- */

  include_once 'modules/footer.php'; ?>

  <!-- jQuery (Necessary for All JavaScript Plugins) -->
  <script src="<?= $frontend ?>views/js/jquery/jquery-2.2.4.min.js"></script>
  <!-- Popper js -->
  <script src="<?= $frontend ?>views/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?= $frontend ?>views/js/bootstrap.min.js"></script>
  <!-- Plugins js -->
  <script src="<?= $frontend ?>views/js/plugins.js"></script>
  <!-- Classy Nav js -->
  <script src="<?= $frontend ?>views/js/classy-nav.min.js"></script>
  <!-- Active js -->
  <script src="<?= $frontend ?>views/js/active.js"></script>
</body>

</html>