 <?php
 if (empty($_GET['busqueda'])) {
        echo "<h2>ERROR: El campo está vacío</h2>";
    } else {
        echo "<h2>Buscaste: " . $_GET['busqueda'] . "</h2>";
    }
    ?>
    