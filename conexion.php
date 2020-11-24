<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $bd = 'formacion';

    $conn = new mysqli($host, $user, $pw, $bd);

    if($conn->connect_error) die("error de conexion");
