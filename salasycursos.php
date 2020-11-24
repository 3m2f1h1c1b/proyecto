<?php
     session_start();
     require_once '../control/conexion.php';
   
     if (!isset($_SESSION['login'])) {
       header("Location: ../index.php");
     }

    $query = "SELECT * FROM tipo_formacion";
    $cursos  = $conn->query($query);
    $query = "SELECT * FROM sala";
    $salas  = $conn->query($query);

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
  <?php include '../estructura/navegacion.php';  ?>

      <h2>Becarios en formacion</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
              <th>Cursos</th>
              <th>Salas</th>
            </tr>
          </thead>  
          <tbody> 
              <tr>
                <td>
                <table class="table table-striped table-sm">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Etiqueta</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $nfilas = $cursos->num_rows;
                            for ($i=0; $i < $nfilas ; $i++) { 
                                $fila = $cursos->fetch_array(MYSQLI_NUM);
                                echo "<tr>";
                                echo "<td>$fila[0]</td><td>$fila[1]</td>";
                                echo "</tr>";
                            }
                        ?>
                     </tbody></table>
                </td>
                <td>
                <table class="table table-striped table-sm">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Etiqueta</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $nfilas = $salas->num_rows;
                            for ($i=0; $i < $nfilas ; $i++) { 
                                $fila = $salas->fetch_array(MYSQLI_NUM);
                                echo "<tr>";
                                echo "<td>$fila[0]</td><td>$fila[1]</td>";
                                echo "</tr>";
                            }
                        ?>
                     </tbody></table>
                </td>
                </tr> 
               
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="../js/app.js"></script>
      </body>
</html>
