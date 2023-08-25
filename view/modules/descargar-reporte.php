<?php

require_once "../../controller/costos.controller.php";
require_once "../../controller/gastos.controller.php";
require_once "../../controller/reportesExcel.controller.php";
require_once "../../controller/socios.controller.php";
require_once "../../controller/usuarios.controller.php";

require_once "../../model/costos.model.php";
require_once "../../model/gastos.model.php";
require_once "../../model/socios.model.php";
require_once "../../model/usuarios.model.php";

require_once "../../vendor/autoload.php";

/*-------------------------
  DESCARGAR REPORTES EXCEL
-------------------------*/
//  Exportar reporte por fechas de la vista FiltrarCostos
if(isset($_GET["fechaInicial"]) && isset($_GET["fechaFinal"]))
{
	$reporteStockTienda = new ControllerReportesExcel();
	$reporteStockTienda -> ctrDescargarReportePorFechas();
}