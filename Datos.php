<?php
$nombre = $_GET["busqueda"];
echo "el nombre es ". $nombre; 

$clave = $_POST["clave"];
echo "La contraseña es : ". $clave;

 if (empty($_GET['busqueda'])) {
        echo "<h2>ERROR: El campo está vacío</h2>";
    } else {
        echo "<h2>Buscaste: " . $_GET['busqueda'] . "</h2>";
    }
    ?>
    
?>
