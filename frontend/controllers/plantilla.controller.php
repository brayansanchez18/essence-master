<?php

class ControladorPlantilla
{
  /* ------------------------- LLAMAMOS A LA PLANTILLA ------------------------ */
  static public function plantilla()
  {
    include_once 'views/plantilla.php';
  }
  /* ------------------------ /LLAMAMOS A LA PLANTILLA ------------------------ */

  /* -------------- TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA ------------- */

  static public function ctrEstiloPlantilla()
  {
    $tabla = 'plantilla';
    $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);
    return $respuesta;
  }

  /* ------------- /TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA ------------- */

  /* --------------------------- TRAEMOS LA CEBERAS --------------------------- */

  static public function ctrTraerCabeceras($ruta)
  {
    $tabla = 'cabeceras';
    $respuesta = ModeloPlantilla::mdlTraerCabeceras($tabla, $ruta);
    return $respuesta;
  }

  /* ------------------------- /TRAEMOS LAS CABECERAS ------------------------- */

  /* --------------------- TRAER DIVISA DE MANERA DINAMICA -------------------- */

  static public function ctrMostrarDivisa()
  {
    $tabla = 'comercio';
    $respuesta = ModeloPlantilla::mdlMostrarDivisa($tabla);
    return $respuesta;
  }

  /* -------------------- /TRAER DIVISA DE MANERA DINAMICA -------------------- */

  /* --------------------------- MOSTRAR INGO FOOTER -------------------------- */

  static public function ctrMostrarFooter()
  {
    $tabla = 'footer';
    $respuesta = ModeloPlantilla::mdlMostrarFooter($tabla);
    return $respuesta;
  }

  /* ----------------------------- /MOSTRAR FOOTER ---------------------------- */
}
