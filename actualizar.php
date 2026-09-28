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

header("Location: index.php");
