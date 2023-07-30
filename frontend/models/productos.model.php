<?php

require_once 'conexion.php';

class ModeloProductos
{
  /* --------------------------- MOSTRAR CATEGORIAS --------------------------- */

  static public function mdlMostrarCategorias($tabla, $item, $valor)
  {
    if ($item != null) {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
      $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetch();
      $stmt = null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    }
  }

  /* --------------------------- /MOSTRAR CATEGORIAS -------------------------- */

  /* -------------------------- MOSTRAR SUBCATEGORIAS ------------------------- */

  static public function mdlMostrraSubCategorias($tabla, $item, $valor)
  {
    if ($item != null) {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
      $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
      $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    }
  }

  /* ------------------------- /MOSTRAR SUBCATEGORIAS ------------------------- */

  /* ---------------------------- MOSTRAR PRODUCTOS --------------------------- */

  static public function mdlMostrarProductos($tabla, $ordenar, $item, $valor, $base, $tope, $modo)
  {
    if ($item != null) {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND estado = 1 ORDER BY $ordenar $modo LIMIT $base, $tope");
      $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 1 ORDER BY $ordenar $modo LIMIT $base, $tope");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    }
  }

  /* --------------------------- /MOSTRAR PRODUCTOS --------------------------- */

  /* -------------------------- MOSTRAR INFO PRODCTOS ------------------------- */

  static public function mdlMostrarInfoProductos($tabla, $item, $valor)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
    $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }

  /* ------------------------- /MOSTRAR INFO PRODCTOS ------------------------- */

  /* ---------------------------- LISTAR PRODUCTOS ---------------------------- */

  static public function mdlListarProductos($tabla, $ordenar, $item, $valor)
  {
    if ($item != null) {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $ordenar DESC");
      $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar DESC");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt = null;
    }
  }

  /* ---------------------------- /LISTAR PRODUCTOS --------------------------- */

  /* ----------------------------- MOSTRAR BANNER ----------------------------- */

  /* ----------------------------- /MOSTRAR BANNER ---------------------------- */

  /* -------------------------------- BUSCADOR -------------------------------- */

  static public function mdlBucarProductos($tabla, $busqueda, $ordenar, $modo, $base, $tope)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta LIKE '%$busqueda%' OR titulo LIKE '%$busqueda%' OR titular LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' ORDER BY $ordenar $modo LIMIT $base, $tope");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt = null;
  }

  /* -------------------------------- /BUSCADOR ------------------------------- */

  /* ------------------------ LISTAR PRODUCTOS BUSCADOR ----------------------- */

  static public function mdlListarProductosBuscador($tabla, $busqueda)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta LIKE '%$busqueda%' OR titulo LIKE '%$busqueda%' OR titular LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%'");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt = null;
  }

  /* ----------------------- /LISTAR PRODUCTOS BUSCADOR ----------------------- */

  /* ----------------------- ACTUALIZAR VISTA PRODUCTOS ----------------------- */

  static public function mdlActualizarProducto($tabla, $item1, $valor1, $item2, $valor2)
  {
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");
    $stmt->bindParam(':' . $item1, $valor1, PDO::PARAM_STR);
    $stmt->bindParam(':' . $item2, $valor2, PDO::PARAM_STR);
    $resultado = $stmt->execute() ? 'ok' : 'error';
    return $resultado;

    // if ($stmt->execute()) {
    //   return 'ok';
    // } else {
    //   return 'error';
    // }

    $stmt = null;
  }

  /* ----------------------- /ACTUALIZAR VISTA PRODUCTOS ---------------------- */

  /* ----------------------- ACTUALIZAR STOCK PRODUCTOS ----------------------- */

  static public function mdlActualizarStock($tabla, $item3, $valor3, $item4, $valor4, $item5, $valor5)
  {
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item3 = $item3 - :$valor3 WHERE $item4 = :$item4");

    //$stmt -> bindParam(":".$item3, $valor3, PDO::PARAM_STR);
    $stmt->bindParam(":" . $valor3, $valor3, PDO::PARAM_STR);
    $stmt->bindParam(":" . $item4, $valor4, PDO::PARAM_STR);
    // $stmt -> bindParam(":".$item5, $valor5, PDO::PARAM_STR);

    $resultado = $stmt->execute() ? 'ok' : 'error';
    return $resultado;
    $stmt = null;
  }

  /* ----------------------- /ACTUALIZAR STOCK PRODUCTOS ---------------------- */
}
