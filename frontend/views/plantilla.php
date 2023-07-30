<?php
$frontend = Ruta::frontend();
$backend = Ruta::backend();
$comercio = ControladorPlantilla::ctrMostrarDivisa();
$divisa = $comercio['divisa'];
?>
<!DOCTYPE html>
<html lang="ex">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title  -->
  <title>Essence - Fashion Ecommerce Template</title>

  <!-- Favicon  -->
  <link rel="icon" href="<?= $frontend ?>views/img/core-img/favicon.ico" />

  <!-- Core Style CSS -->
  <link rel="stylesheet" href="<?= $frontend ?>views/css/core-style.css" />
  <link rel="stylesheet" href="<?= $frontend ?>views/css/style.css" />
</head>

<body>
  <?php include_once 'modules/header.php'; ?>
  <?php include_once 'modules/cart.php'; ?>
  <?php include_once 'modules/slide.php'; ?>
  <?php include_once 'modules/top-category.php'; ?>
  <?php include_once 'modules/call-to-action.php'; ?>
  <?php include_once 'modules/featured-productos.php'; ?>
  <?php include_once 'modules/brands.php'; ?>
  <?php include_once 'modules/footer.php'; ?>

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