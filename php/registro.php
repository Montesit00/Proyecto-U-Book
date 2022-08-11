<?php
    include_once 'conexion.php';

    
    $usuario = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = "SELECT * from `usuarios` WHERE usuario ='$usuario' or correo='$email' ";
    $respuesta= $con ->query($consulta);
    $respuesta->rowCount();

    if($respuesta->rowCount()> 0){
        echo "Ya existe usuario y correo";
        exit;
    }

    $vista = "INSERT INTO `usuarios`(`usuario`, `correo`, `contraseña`) VALUES ('$usuario','$email','$password')";

    $sentencia = $con->query($vista);


        if($sentencia){
            header('Location: ../index.php');
        } else echo 'no se pudo cargar';
?>