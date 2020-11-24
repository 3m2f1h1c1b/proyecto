<?php
   session_start();
   require_once '../control/conexion.php';
 
   if (!isset($_SESSION['login'])) {
     header("Location: ../index.php");
   }

  if(isset($_POST['curso'])) {
    $etiqueta = $_POST['curso'];
    $query = "INSERT INTO tipo_formacion(id_tipo_formacion, etiqueta) VALUES (NULL, '$etiqueta');";
    $result = $conn->query($query);
    
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
    <title>Dashboard becarios</title>

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

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/estilos.css" rel="stylesheet">
  </head>
  <body>
    <?php include '../estructura/navegacion.php'; 
      if(isset($result)){
        if(!$result){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Algo salio mal!</strong> Verifique los datos e intente nuevamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            
        }else{
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Curso guardado!</strong> Los datos fueron guardados con exito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  
        }
      }
    ?>

      <h2>Agregar nuevo curso</h2>
      <div class="container">
      <form method="POST" action="<?php echo basename($_SERVER['PHP_SELF'])?>">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombres</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre del curso" name="curso" required>
    </div>
  </div> 
  <button type="submit" class="btn btn-primary">Agregar nuevo curso</button>
</form>
      </div>
    </main>
  </div>
</div>

<?php
$conn->close();
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/app.js"></script>
      </body>
</html>
