<?php 
date_default_timezone_set('America/Lima');

//  Controllers
require_once "controller/plantilla.controller.php";
require_once "controller/reportesExcel.controller.php";
require_once "controller/funciones.controller.php";
require_once "controller/usuarios.controller.php";
require_once "controller/gastos.controller.php";
require_once "controller/socios.controller.php";
require_once "controller/costos.controller.php";

//  Models
require_once "model/usuarios.model.php";
require_once "model/gastos.model.php";
require_once "model/socios.model.php";
require_once "model/costos.model.php";

$plantilla = new ControllerPlantilla();
$plantilla -> ctrPlantilla();