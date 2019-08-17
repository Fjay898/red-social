<?php
    session_start();

    include("conexion.php");

    $username = $_REQUEST['loginuser'];
    $password = $_REQUEST['loginpassword'];

    $query = 'SELECT * FROM usuarios WHERE Username LIKE "' . $username . '"';

    $resultado = mysqli_query($conexion, $query);

    $fila = mysqli_fetch_array($resultado); 

    if(password_verify($password, $fila["Password"])) {
        $_SESSION['u_id'] = $fila['UsuarioId'];
        header('Location: home.php');
    } else {
        echo "<script>alert('Nombre de Usuario o Contraseña Incorrecta!')</script>";
        echo "<script>window.open('login.php', '_self')</script>";
    }
    
?>
