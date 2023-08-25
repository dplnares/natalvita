<?php

class Conexion
{
  static public function conn()
  {
    $link = new PDO("mysql:host=localhost;dbname=db_natalVita","root","");
		$link->exec("set names utf8");
		return $link;
  }
}