<?php
    include("conexion.php");

    $username = $_REQUEST['user'];
    $password = $_REQUEST['password'];


    $hash = password_hash($password, PASSWORD_BCRYPT);

    $query = 'INSERT INTO usuarios(Username, Password)
    VALUES("' . $username . '", "' . $hash . '")';

    mysqli_query($conexion, $query);

    if($query){
        echo "<script>alert('Registro Exitoso!')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else{
        echo "<script>alert('Registro Fallido! Intente de nuevo')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }

 ?>
