<?php

require_once 'conexion.php';

class ModeloPlantilla
{
  /* -------------- TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA ------------- */

  static public function mdlEstiloPlantilla($tabla)
  {
    $stmt = Conexion::conectar()->prepare("SELEC * FROM $tabla");
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }

  /* ------------- /TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA ------------- */


  /* -------------------------- TRAEMOS LAS CABECEAS -------------------------- */

  static public function mdlTraerCabeceras($tabla, $ruta)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta = :ruta");
    $stmt->bindParam(":ruta", $ruta, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }

  /* ------------------------- /TRAEMOS LAS CABECERAS ------------------------- */

  /* -------------------- TRRAEMOS DIVISA DE MANEA DINAMICA ------------------- */

  static public function mdlMostrarDivisa($tabla)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }

  /* ------------------- /TRAEMOS IDVISA DE MANERA DINAMICA ------------------- */

  /* ---------------------- MOSTRAR INFORMACION DE FOOTER --------------------- */

  static public function mdlMostrarFooter($tabla)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetch();
    $stmt = null;
  }

  /* --------------------- /MOSTRAR INFORMACION DE FOOTER --------------------- */
}
