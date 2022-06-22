<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <!--instruccion de importacion><!escript.php es como el login.js asi uno con mi pag principal
            include si sale error te muestra el error pero sigue el proceso y require mestra el error y termina el proceso-->
        <?php 
            include"script.php"
        ?> 

        <?php  $saludo = "ejemplo php" 
            echo "<h1>.$saludo.</h1>"

        ?>
    </header>
</body>
</html>
