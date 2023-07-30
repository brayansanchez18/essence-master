<?php

class ControladorProductos
{
  /* --------------------------- MOSTRAR CATEGORIAS --------------------------- */

  static public function ctrMostrarCategorias($item, $valor)
  {
    $tabla = 'categorias';
    $respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
    return $respuesta;
  }

  /* --------------------------- /MOSTRAR CATEGORIAS -------------------------- */

  /* ------------------------- MOSTRAR SUB-CATEGORIAS ------------------------- */

  static public function ctrMostrarSubCategorias($item, $valor)
  {
    $tabla = 'subcategorias';
    $respuesta = ModeloProductos::mdlMostrraSubCategorias($tabla, $item, $valor);
    return $respuesta;
  }
  /* ------------------------- /MOSTRAR SUB-CATEGORIAS ------------------------ */

  /* ---------------------------- MOSTRAR PRODUCTOS --------------------------- */

  static public function ctrMostrarProductos($ordenar, $item, $valor, $base, $tope, $modo)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlMostrarProductos($tabla, $ordenar, $item, $valor, $base, $tope, $modo);
    return $respuesta;
  }

  /* --------------------------- /MOSTRAR PRODUCTOS --------------------------- */

  /* -------------------------- MOSTRAR INFOPRODUCTOS ------------------------- */

  static public function ctrMostrarInfoProductos($item, $valor)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlMostrarInfoProductos($tabla, $item, $valor);
    return $respuesta;
  }

  /* ------------------------- /MOSTRAR INFOPRODUCTOS ------------------------- */

  /* ---------------------------- LISTAR PRODUCTOS ---------------------------- */

  static public function ctrListarProductos($ordenar, $item, $valor)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlListarProductos($tabla, $ordenar, $item, $valor);
    return $respuesta;
  }

  /* ---------------------------- /LISTAR PRODUCTOS --------------------------- */

  /* ----------------------------- MOSTRAR BANNER ----------------------------- */

  /* ----------------------------- /MOSTRAR BANNER ---------------------------- */

  /* -------------------------------- BUSCADOR -------------------------------- */

  static public function ctrBucarProductos($busqueda, $ordenar, $modo, $base, $tope)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlBucarProductos($tabla, $busqueda, $ordenar, $modo, $base, $tope);
    return $respuesta;
  }

  /* -------------------------------- /BUSCADOR ------------------------------- */

  /* ------------------------ LISTAR PRODUCTOS BUSCADOR ----------------------- */

  static public function ctrListarProductosBuscador($busqueda)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlListarProductosBuscador($tabla, $busqueda);
    return $respuesta;
  }

  /* ----------------------- /LISTAR PRODUCTOS BUSCADOR ----------------------- */

  /* ----------------------- ACTUALIZAR VISTA PRODUCTOS ----------------------- */

  static public function ctrActualizarProducto($item1, $valor1, $item2, $valor2)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlActualizarProducto($tabla, $item1, $valor1, $item2, $valor2);
    return $respuesta;
  }

  /* ----------------------- /ACTUALIZAR VISTA PRODUCTOS ---------------------- */

  /* ---------------------- ACTUALIZAR STOCK DE PRODUCTOS --------------------- */

  //TODO: limpiar el codigo y eliminar las valirables que no se usan en todas las bases (vista, modelo y controlador)
  static public function ctrActualizarStock($item3, $valor3, $item4, $valor4, $item5, $valor5)
  {
    $tabla = 'productos';
    $respuesta = ModeloProductos::mdlActualizarStock($tabla, $item3, $valor3, $item4, $valor4, $item5, $valor5);
    return $respuesta;
  }

  /* --------------------- /ACTUALIZAR STOCK DE PRODUCTOS --------------------- */
}
