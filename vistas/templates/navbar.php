<nav class="navbar fixed-top navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/02JUN2024_CRUD/src/images/logo.avif" alt="Logo" width="30" height="30">TIENDA CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill me-2"></i>Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-boxes me-2"></i>Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/ventas/index.php"><i class="bi bi-plus-circle me-2"></i>Ingreso de ventas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-boxes me-2"></i>Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/producto/index.php"><i class="bi bi-plus-circle me-2"></i>Crear</a></li>
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/producto/buscar.php"><i class="bi bi-search me-2"></i>Buscar</a></li>
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/producto/modificar.php"><i class="bi bi-pencil-square me-2"></i>Modificar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-people me-2"></i>Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/cliente/index.php"><i class="bi bi-plus-circle me-2"></i>Crear</a></li>
            <li><a class="dropdown-item" href="/02JUN2024_CRUD/vistas/cliente/buscar.php"><i class="bi bi-search me-2"></i>Buscar</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>