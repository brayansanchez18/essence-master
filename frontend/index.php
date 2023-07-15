<?php

/* ------------------------------- CONTROLLERS ------------------------------ */
require_once 'controllers/carrito.controller.php';
require_once 'controllers/plantilla.controller.php';
require_once 'controllers/productos.controller.php';
require_once 'controllers/slide.controller.php';
require_once 'controllers/usuarios.controller.php';
require_once 'controllers/vistas.controller.php';

/* --------------------------------- models --------------------------------- */
require_once 'models/carrito.model.php';
require_once 'models/plantilla.model.php';
require_once 'models/productos.model.php';
require_once 'models/slide.model.php';
require_once 'models/usuarios.model.php';
require_once 'models/vistas.model.php';

/* ---------------------------------- rutas --------------------------------- */
require_once 'models/rutas.model.php';

$plantilla = new ControladorPlantilla();
$plantilla->Plantilla();
