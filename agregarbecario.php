<?php
  session_start();
  require_once '../control/conexion.php';

  if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
  }

  $query = "SELECT * FROM nacionalidad";
  $nacionalidades = $conn->query($query);
  $query = "SELECT * FROM tipo_formacion";
  $cursos = $conn->query($query);
  $query = "SELECT s.id_sala, s.etiqueta, f.id_formador, f.nombre, f.apellido, tf.id_tipo_formacion, tf.etiqueta, tf.id_tipo_formacion FROM
   sala s, formador f, tipo_formacion tf, tipo_formacion_formador tff 
   WHERE s.id_sala= f.id_sala AND f.id_formador=tff.id_formador AND
    tff.id_tipo_formacion =tf.id_tipo_formacion";
  $formadoresXsalaXfecha = $conn->query($query);
  
  
  if(isset($_POST['idBecario']) && isset($_POST['nomBecario']) && isset($_POST['apeBecario']) &&
  isset($_POST['fInicio']) && isset($_POST['fFin']) && isset($_POST['formador']) && isset($_POST['curso'])){
      $idBecario = $_POST['idBecario'];
      $nomBecario = $_POST['nomBecario'];
      $ApeBecario = $_POST['apeBecario'];
      $fInicio = $_POST['fInicio'];
      $fFin = $_POST['fFin'];
      $formador = $_POST['formador'];
      $curso  = $_POST['curso'];
      $nacionalidad = $_POST['nacionalidad'];

      $query ="INSERT INTO becario(id_becario,nombre,apellido,id_nacionalidad,id_tipo_formacion) VALUES ($idBecario,'$nomBecario','$ApeBecario',$nacionalidad,$curso);";
      $insertBecario = $conn->query($query);
      $query = "INSERT INTO becarios_formador (id_becario, id_formador, fecha_inicio, fecha_fin) VALUES ($idBecario, $formador, '$fInicio', '$fFin');";
      $insertBecarioFormador = $conn->query($query);
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
      if(isset($insertBecario) && isset($insertBecarioFormador)){
        if(!$insertBecario || !$insertBecarioFormador){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Algo salio mal!</strong> Verifique los datos e intente nuevamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            
        }else{
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Becario guardado!</strong> Los datos fueron guardados con exito.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';  
        }
      }
    ?>

      <h2>Agregar nuevo becario</h2>
      <div class="container">
      <form method="POST" action="<?php echo basename($_SERVER['PHP_SELF'])?>">
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputid">ID becario</label>
      <input type="number" class="form-control" id="inputid" placeholder="ID becario" name="idBecario" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombres</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nombres" name="nomBecario" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Apellidos</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Apellidos" name="apeBecario" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Nacionalidad</label>
      <select id="inputState" class="form-control" name="nacionalidad" required>
        <option selected name="nacionalidad">Elegir...</option>
        <?php 
          $nfilas = $nacionalidades->num_rows;
          for ($i=0; $i < $nfilas ; $i++) { 
              $fila = $nacionalidades->fetch_array(MYSQLI_NUM);
              echo "<option value='".$fila[0]."'>".$fila[1].'</option>';
          }
        ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCurso">Curso</label>
      <select id="inputCurso" class="form-control" name="curso" onchange="ocultarFormadores()" required>
        <option selected>Elegir...</option>
        <?php 
          $nfilas = $cursos->num_rows;
          for ($i=0; $i < $nfilas ; $i++) { 
              $fila = $cursos->fetch_array(MYSQLI_NUM);
              echo "<option value='".$fila[0]."'>".$fila[1].'</option>';
          }
        ?>
      </select>  
    </div>
    <div class="form-group col-md-4 ">
        <label for="inputCurso">Incio y Fin</label>
        <div class="row justify-content-center  align-items-center">
          <input type="date" class="form-control col-5" name="fInicio" required>
          <input type="date" class="form-control col-5" name="fFin" required> 
        </div>
         
      </div>
  </div>
  <div class="form-group">
  <hr>
  <h4 for="inputCurso">Formadores </h4>
  <?php
      $nfilas = $formadoresXsalaXfecha->num_rows;
      for ($i=0; $i < $nfilas; $i++) { 
          $fila = $formadoresXsalaXfecha->fetch_array(MYSQLI_NUM);
          
           echo "<div class='form-check f$fila[7]  m-2' style='display:none;' id='d$fila[4]' >";
                echo "<input class='form-check-input ' type='radio' name='formador' id='gridRadios$i' value='$fila[2]' checked>";
                 echo "<label class='form-check-label' for='gridRadios$i'>";
                     echo $fila[6].', en la sala '.$fila[1].' por '.$fila[3].' '.$fila[4];
                 echo" </label> </div>";
      }
  ?>
  
  </div>
  <button type="submit" class="btn btn-primary">Agregar nuevo becario</button>
</form>
      </div>
    </main>
  </div>
</div>

<?php
$nacionalidades->close();
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
