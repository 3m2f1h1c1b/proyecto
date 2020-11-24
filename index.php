<?php
session_start();

  require_once 'control/conexion.php';
  if(isset($_POST['user']) && isset($_POST['pass'])){
    $us_temp = $_POST['user'];
    $pw_temp = $_POST['pass'];
    
    $query = "SELECT * FROM administrador WHERE admin=$us_temp and password='$pw_temp'";
    $result = $conn->query($query);

    $login = $result->num_rows;
    
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pagina Principal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/estilosform.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Sistema de becarios</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-5 col-lg-4 d-md-block bg-light sidebar collapse">
        <form class="form-signin text-center" method="POST" action="<?php echo basename($_SERVER['PHP_SELF'])?>">
            <img class="mb-4" src="https://i.pinimg.com/280x280_RS/8c/70/64/8c706467626f2c37489fea4f93ad1306.jpg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
            <label for="inputUser" class="sr-only">Usuario</label>
            <input type="number" id="inputUser" class="form-control" name="user" placeholder="Usuario" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
        </form>
    </nav>

    <main role="main" class="col-md-7 ml-sm-auto col-lg-8 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pagina Principal</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a type="button" href="https://cecar.edu.co/" class="btn btn-sm btn-outline-secondary">Universidad</a>
            <a type="button" href="https://agenciadenoticias.cecar.edu.co/" class="btn btn-sm btn-outline-secondary">Noticas</a>
            <a type="button" href="https://aldea.cecar.edu.co/Login" class="btn btn-sm btn-outline-secondary">Aldea</a>
            
          </div>
        </div>
      </div>
     <?php
      if(isset($result)){
        if($login==0){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Usuario o contraseña no validos!</strong> Verifique los datos e intente nuevamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            
        }else{
          if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = $us_temp;
            header("Location: pages/dashboard.php");
          } else {
            $_SESSION['login'] == '';
          }
        }
      }
    ?>
      <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ut? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate porro quaerat saepe fuga, quidem modi quia consectetur maiores optio animi doloremque asperiores perspiciatis voluptas quas mollitia! Voluptas quo et est doloremque pariatur fugiat delectus, ratione voluptatem dolor minima nihil consequatur magnam ad id quasi libero nam distinctio reprehenderit, animi quidem!
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto eaque labore, quaerat reiciendis quae dolor molestias, itaque corrupti consectetur neque blanditiis et inventore eum ratione expedita veniam excepturi voluptatum id hic iure provident? Nemo, laborum vitae delectus esse corporis a nostrum ipsam tempore eligendi consectetur labore obcaecati facilis quisquam consequatur natus laboriosam sint asperiores fugiat dignissimos. Libero numquam eos ex, nostrum impedit maiores expedita? Enim et rem similique. Voluptas, vero alias unde, hic voluptate quaerat vel officiis magni blanditiis labore corrupti quae maxime. Animi consequuntur saepe eaque, eveniet nesciunt ea labore incidunt sint esse perferendis mollitia cupiditate deleniti magnam quas quis deserunt dolor iste ab, illo asperiores! Similique, quos repellendus! Eveniet rem necessitatibus hic qui, natus iure explicabo amet dolores.
      </p>

      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
      </body>
</html>
