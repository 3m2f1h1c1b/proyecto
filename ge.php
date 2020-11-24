<?php
   require_once '../control/conexion.php';
   $user = '12345';
   $pass = 'admin';
   
   $stmt = $conn->prepare('INSERT INTO administrador VALUES (?,?)');
   $stmt->bind_param('is', $user, $pass);
   $stmt->execute();
   $stmt->close();
?>