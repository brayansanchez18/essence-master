<?php
$item = null;
$valor = null;
$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
?>
<!-- ##### Header Area Start ##### -->
<header class="header_area">
  <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
    <!-- Classy Menu -->
    <nav class="classy-navbar" id="essenceNav">
      <!-- Logo -->
      <a class="nav-brand" href="index.html"><img src="views/img/core-img/logo.png" alt="" /></a>
      <!-- Navbar Toggler -->
      <div class="classy-navbar-toggler">
        <span class="navbarToggler"><span></span><span></span><span></span></span>
      </div>
      <!-- Menu -->
      <div class="classy-menu">
        <!-- close btn -->
        <div class="classycloseIcon">
          <div class="cross-wrap">
            <span class="top"></span><span class="bottom"></span>
          </div>
        </div>
        <!-- Nav Start -->
        <div class="classynav">
          <ul>
            <li>
              <a href="#">Tienda</a>
              <div class="megamenu">

                <?php foreach ($categorias as $key => $value) : ?>
                  <ul class="single-mega cn-col-3">
                    <li class="title"><?= $value['categoria'] ?></li>
                    <?php
                    $item = 'id_categoria';
                    $valor = $value['id'];
                    $subCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
                    ?>

                    <?php foreach ($subCategorias as $key => $value) : ?>
                      <li><a href="<?= $frontend . $value['ruta'] ?>"><?= $value['subcategoria'] ?></a></li>
                    <?php endforeach ?>
                  </ul>
                <?php endforeach ?>
              </div>
            </li>
            <li>
              <a href="#">Ofertas</a>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contacto</a></li>
          </ul>
        </div>
        <!-- Nav End -->
      </div>
    </nav>

    <!-- Header Meta Data -->
    <div class="header-meta d-flex clearfix justify-content-end">
      <!-- Search Area -->
      <div class="search-area">
        <form action="#" method="post">
          <input type="search" name="search" id="headerSearch" placeholder="Que estas buscando?" />
          <button type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </div>
      <!-- Favourite Area -->
      <div class="favourite-area">
        <a href="#"><img src="views/img/core-img/heart.svg" alt="" /></a>
      </div>
      <!-- User Login Info -->
      <div class="user-login-info">
        <a href="#"><img src="views/img/core-img/user.svg" alt="" /></a>
      </div>
      <!-- Cart Area -->
      <div class="cart-area">
        <a href="#" id="essenceCartBtn"><img src="views/img/core-img/bag.svg" alt="" /> <span>3</span></a>
      </div>
    </div>
  </div>
</header>
<!-- ##### Header Area End ##### -->