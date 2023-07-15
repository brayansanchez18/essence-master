<?php

/* ------------------------------ CONTROLADORES ----------------------------- */
require_once 'controllers/administradores.controller.php';
require_once 'controllers/banner.controller.php';
require_once 'controllers/cabeceras.controller.php';
require_once 'controllers/categorias.controller.php';
require_once 'controllers/comercio.controller.php';
require_once 'controllers/footer.controller.php';
require_once 'controllers/mensaje.controller.php';
require_once 'controllers/notificaciones.controller.php';
require_once 'controllers/perfiles.controller.php';
require_once 'controllers/plantilla.controller.php';
require_once 'controllers/productos.controller.php';
require_once 'controllers/slide.controller.php';
require_once 'controllers/subcategorias.controller.php';
require_once 'controllers/usuarios.controller.php';
require_once 'controllers/ventas.controller.php';
require_once 'controllers/vistas.controller.php';

/* --------------------------------- MODELOS -------------------------------- */
require_once 'models/administradores.model.php';
require_once 'models/banner.model.php';
require_once 'models/cabeceras.model.php';
require_once 'models/categorias.model.php';
require_once 'models/comercio.model.php';
require_once 'models/footer.model.php';
require_once 'models/mensaje.model.php';
require_once 'models/notificaciones.model.php';
require_once 'models/perfiles.model.php';
require_once 'models/plantilla.model.php';
require_once 'models/productos.model.php';
require_once 'models/slide.model.php';
require_once 'models/subcategorias.model.php';
require_once 'models/usuarios.model.php';
require_once 'models/ventas.model.php';
require_once 'models/vistas.model.php';

require_once 'models/rutas.model.php';

$plantilla = new ControladorPlantilla();
$plantilla->plantilla();
