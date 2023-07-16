<?php

class Conexion
{
  static public function contactar()
  {
    $link = new PDO(
      "mysql:host=localhost;dbname=essence-master",
      "root",
      "",
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      ]
    );
    return $link;
  }
}