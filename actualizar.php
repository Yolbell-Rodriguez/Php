<?php
include 'PagFutbol.php';
include 'jugador.php';

$dorsal_original = $_POST['dorsal_original'] ?? 0;
$dorsal = $_POST['dorsal'] ?? 0;
$nombre = $_POST['nombre'] ?? '';

$jugador = new Jugador($dorsal, $nombre);

$sql = "update jugadores set dorsal = :dorsal, nombre = :nombre where dorsal = :dorsal_original";
$stmt = $conector->prepare($sql);
$stmt->bindParam(':dorsal', $jugador->dorsal, PDO::PARAM_INT);
$stmt->bindParam(':nombre', $jugador->nombre, PDO::PARAM_STR);
$stmt->bindParam(':dorsal_original', $dorsal_original, PDO::PARAM_INT);

$stmt->execute();
?>
<form action="update.php" method="post">

  <label for="nombre">nombre: </label><br>
  <input type="text" id="nombre" name="nombre" required><br>

  <label for="dorsal">dorsal: </label><br>
  <input type="number" id="dorsal" name="dorsal" required><br><br>
  
  <input type="submit" value="Enviar">
</form> 
</body>