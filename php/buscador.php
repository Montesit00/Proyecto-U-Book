<?php
    include_once 'conexion.php';

    $consulta = "SELECT * FROM libros";


    if(isset($_POST['buscar']) AND $_POST['buscar'] != ''){
        $texto = $_POST['buscar'];
        $consulta .= " WHERE nombre_libro LIKE '%$texto%'";
        }

    
    $sentencia = $con->prepare($consulta);

?>