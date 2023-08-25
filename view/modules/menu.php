
<!-- Menu de todos los usuarios en general -->
<div class="sb-sidenav-menu-heading">Inicio</div>
<a class="nav-link" href="home">
  <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
  Inicio
</a>
  
<!-- Costos  -->
<div class="sb-sidenav-menu-heading">Costos</div>
  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#listaCostos" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fa fa-line-chart"></i></div>
    Costos
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
  </a>
  <div class="collapse" id="listaCostos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="allCostos">Planilla de Costos</a>
      <a class="nav-link" href="buscarCostos">Filtrar Costos</a>
      <a class="nav-link" href="reporteCostos">Reporte de Costos</a>
    </nav>
  </div>

<!-- Catálogo -->
<div class="sb-sidenav-menu-heading">Catálogo</div>

  <?php
    if($_SESSION["perfilUsuario"] == 1 || $_SESSION["perfilUsuario"] == 2 )
    {
  ?>
  <!-- Catálogo  de Costos -->
  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#listaCatalogoCostos" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
    Catálogo Costos
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
  </a>
  <div class="collapse" id="listaCatalogoCostos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="centroCostos">Centros de Costos</a>  
      <a class="nav-link" href="socios">Catálogo de Socios</a>
      <a class="nav-link" href="gastos">Catálogo de Costos</a>
    </nav>
  </div>
  <?php
  }
  ?>

  <?php
    if($_SESSION["perfilUsuario"] == 1)
    {
  ?>
  <!-- Catálogo de Usuarios -->
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#listaCatalogoUsuarios" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
    Catálogo de Usuarios
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
  </a>
  <div class="collapse" id="listaCatalogoUsuarios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="usuario">Usuarios</a>
    </nav>
  </div>
  <?php
  }
  ?>