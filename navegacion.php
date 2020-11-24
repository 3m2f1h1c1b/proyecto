<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Sistema de becarios</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../control/cerrarsesion.php">Cerrar Sesion</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Becarios</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="user"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'agregarbecario.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/agregarbecario.php">
              <span data-feather="user-plus"></span>
              Agregar
            </a>
          </li>
          <li class="nav-item <?php
                 if(basename($_SERVER['PHP_SELF']) == 'modificarbecario.php'){ echo 'active';}else{echo '';}
                ?>">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'modificarbecario.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/modificarbecario.php">
              <span data-feather="user-check"></span>
              Modificar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'eliminarbecario.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/eliminarbecario.php">
              <span data-feather="user-x"></span>
              Eliminar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'becariosformacion.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/becariosformacion.php">
              <span data-feather="users"></span>
              Becarios en formacion
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>FORMADORES</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="users"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'agregarformador.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/agregarformador.php">
              <span data-feather="user-plus"></span>
              Agregar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php
                 if(basename($_SERVER['PHP_SELF']) == 'modificarformador.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/modificarformador.php">
              <span data-feather="user-check"></span>
              Modificar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'eliminarformador.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/eliminarformador.php">
              <span data-feather="user-x"></span>
              Eliminar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'listarformadores.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/listarformadores.php">
              <span data-feather="users"></span>
              formadores
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>SALAS Y CURSOS</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="layers"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link  <?php
                 if(basename($_SERVER['PHP_SELF']) == 'salasycursos.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/salasycursos.php">
              <span data-feather="trello"></span>
              Salas y cursos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'agregarsala.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/agregarsala.php">
              <span data-feather="plus-square"></span>
              Agregar sala
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'modificarsala.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/modificarsala.php">
              <span data-feather="edit"></span>
              Modificar Sala
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'eliminarsala.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/eliminarsala.php">
              <span data-feather="minus-circle"></span>
              Eliminar sala
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'agregarcurso.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/agregarcurso.php">
              <span data-feather="file-plus"></span>
              Agregar curso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'modificarcurso.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/modificarcurso.php">
              <span data-feather="file-text"></span>
              Modificar curso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php
                 if(basename($_SERVER['PHP_SELF']) == 'eliminarcurso.php'){ echo 'active';}else{echo '';}
                ?>" href="../pages/eliminarcurso.php">
              <span data-feather="file-minus"></span>
              Eliminar curso
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>