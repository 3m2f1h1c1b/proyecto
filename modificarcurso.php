<?php
   session_start();
   require_once '../control/conexion.php';
 
   if (!isset($_SESSION['login'])) {
     header("Location: ../index.php");
   }

 
  
  if(isset($_POST['id'])){
    $cursoID =$_POST['id'];
      $editando = true;
      $query = "SELECT * FROM tipo_formacion WHERE id_tipo_formacion = $cursoID";
      $cursoEdit = $conn->query($query);
      $cursoEdit =$cursoEdit->fetch_array(MYSQLI_NUM);
  }

  
  
  if(isset($_POST['curso'])){
      $etiqueta = $_POST['curso'];
      $id = $_POST['idM'];
      $query ="UPDATE tipo_formacion SET etiqueta ='$etiqueta' WHERE id_tipo_formacion =$id;";
        $updateSala = $conn->query($query);
  }
  $query = "SELECT * FROM tipo_formacion";
  $cursos = $conn->query($query);
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
      if(isset($updateSala)){
        if(!$updateSala){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Algo salio mal!</strong> Verifique los datos e intente nuevamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            
        }else{
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sala modificada!</strong> Los datos fueron modificados con exito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  
        }
      }
    ?>

      <h2>Modificar sala</h2>
      <div class="container">
      <form method="POST" action="<?php echo basename($_SERVER['PHP_SELF'])?>" style="<?php 
  if(isset($editando)){ echo "display:none;";}else{echo '';}?>">
  <div class="form-row">
    <div class="form-group col-md-10">
      <label for="inputCurso">cursos</label>
      <select id="inputCurso" class="form-control" name="id" required>
        <?php 
          $nfilas = $cursos->num_rows;
          for ($i=0; $i < $nfilas ; $i++) { 
              $fila = $cursos->fetch_array(MYSQLI_NUM);
              echo "<option value='$fila[0]'>"."$fila[0], $fila[1]</option>";
          }
        ?>
      </select>  
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Modificar curso</button>
</form>
<form method="POST" action="<?php echo basename($_SERVER['PHP_SELF'])?>" style="<?php 
  if(!isset($editando)) echo 'display:none';?>">
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputid">ID Sala</label>
      <input type="number" class="form-control" id="inputid" placeholder="ID curso" 
      value="<?php if(isset($cursoEdit)) echo $cursoEdit[0] ?>" name="idM" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">etiqueta para la sala</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Etiqueta"
      value="<?php if(isset($salaEdit)) echo $salaEdit[1] ?>" name="curso" required >
    </div>  
  <button type="submit" class="btn btn-primary">Modificar datos</button>
</form>
      </div>
    </main>
  </div>
</div>

<?php

$cursos->close();
$conn->close();
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/app.js"></script>
      </body>
</html>
