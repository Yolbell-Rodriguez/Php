<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'nav.php';
    include 'PagFutbol.php';
    include 'jugador.php';
    ?>
    <h1>Lista de jugadores</h1>
    <form action="index.php" method="GET">
        <input name="buscar" type="text" placeholder="Buscar jugador">
        <button type="submit">Buscar</button>
    </form>
    <ul>
        <?php
        $query = 'SELECT * FROM jugadores';
        $stmt = $conector->query($query);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $jugadores = array();

        foreach ($results as $row) {
            $jugador = new Jugador($row['dorsal'], $row['nombre']);
            array_push($jugadores, $jugador);
        }

        $buscar = $_GET['buscar'] ?? '';
        foreach ($jugadores as $jugador) {
            if ($buscar == $jugador->nombre || $buscar == '') {
                echo '<li>';
                echo '<form action="actualizar.php" method="POST">';
                echo '<input type="hidden" name="dorsal_original" value="' . $jugador->dorsal . '">';
                echo '<input type="number" name="dorsal" value="' . $jugador->dorsal . '" required>';
                echo '<input type="text" name="nombre" value="' . $jugador->nombre . '" required>';
                echo '<button type="submit">Editar</button>';
                echo '</form>';
                echo '<form action="borrar.php" method="POST">';
                echo '<input type="hidden" name="dorsal" value="' . $jugador->dorsal . '">';
                echo '<button type="submit">Borrar</button>';
                echo '</form>';
                echo '</li>';
            }
        }
        ?>
    </ul>
</body>

</html>