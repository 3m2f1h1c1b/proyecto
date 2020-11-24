<?php
   session_start();
   require_once '../control/conexion.php';
 
   if (!isset($_SESSION['login'])) {
     header("Location: ../index.php");
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
    <?php include '../estructura/navegacion.php'; ?>

      <h2>Gestion de becarios</h2>
      <div class="table-responsive">
        <p>Empieze a gestionar los becarios Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veniam aut quia exercitationem ullam odio impedit ab recusandae a perspiciatis veritatis omnis libero magnam perferendis reprehenderit non dicta, quod sint!</p>
        <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam deleniti corrupti beatae velit. Vero saepe mollitia error! A non ducimus, asperiores sit exercitationem deserunt, ex alias placeat eius, sapiente aliquid.
        Deleniti alias et facere placeat iusto voluptates adipisci! Officiis repellendus, autem asperiores dolorem excepturi, natus eaque, quae nobis quas esse quibusdam. Voluptates nihil architecto rem repellat alias asperiores molestiae ipsam!
        Molestiae eos sit nihil ducimus voluptate laudantium rerum commodi repellat vel molestias necessitatibus consequuntur adipisci quo, minus, amet libero voluptatum nobis reiciendis architecto doloremque soluta sequi ea? Perspiciatis, delectus ab!
        Nam itaque exercitationem culpa quo ab voluptatibus ut ipsam, necessitatibus debitis libero animi praesentium ea odio quos omnis illo labore minima? Quis, optio! Accusantium itaque dolorem, quam ea voluptatum quidem?
        Doloremque culpa reprehenderit quia praesentium, quam consectetur maiores accusamus natus in impedit necessitatibus vitae distinctio dolorem nobis unde blanditiis minima inventore. Tempore quae eum placeat inventore minus sint, tempora vel?
        Non, labore molestiae, quaerat totam, repellendus quod quia perspiciatis sed ad aliquid reprehenderit ex necessitatibus quos velit doloribus nostrum dolor. Molestias veniam, nostrum aspernatur repudiandae recusandae ipsum suscipit ab. Earum.
        Vel hic, quis laudantium ipsum repellendus laboriosam quia est dolor fugit aspernatur aliquid praesentium facere id quaerat sunt. Deserunt veritatis ab fuga rerum earum labore animi temporibus voluptates odit fugit.
        Atque dicta eligendi officiis quae deserunt. Earum quibusdam, fugit cupiditate reprehenderit amet incidunt deleniti exercitationem quidem iste eligendi, deserunt architecto explicabo veritatis provident. Dolorum cupiditate explicabo tempore optio porro in?
        Dolore aspernatur praesentium est quod iste. Voluptatibus autem illum inventore necessitatibus quia. Laboriosam ratione deleniti, voluptatem molestias nesciunt alias accusantium architecto officiis vel quae officia dicta. Minima laboriosam cum ab?
        Saepe cumque asperiores temporibus? Illo nam eum natus similique deserunt. Numquam voluptatibus voluptatem officia et excepturi ipsa amet dolore quam mollitia veritatis, commodi magni molestiae culpa cum eum dolorem maxime! </p>
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
