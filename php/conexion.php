
<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=libros', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
