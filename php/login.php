<?php

    session_start();

    include_once 'conexion.php';

    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql = "SELECT * FROM `usuarios` WHERE correo = '$email' AND contraseña = '$pass';";

    $row = $con->query($sql);

    $validar = $row->rowCount();

    if($validar > 0){
        
        $_SESSION['logueado']= true;
        $_SESSION['usuario']=  $email;

        header('Location: ../html/central.php');
        

    } else print 'Usuario o contraseña incorrectos';

?>