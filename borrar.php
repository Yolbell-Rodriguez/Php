<?php
include 'PagFutbol.php';

$dorsal = $_POST['dorsal'] ?? 0;

$sql = "delete from jugadores where dorsal = :dorsal";
$stmt = $conector->prepare($sql);
$stmt->bindParam(':dorsal', $dorsal, PDO::PARAM_INT);

$stmt->execute();

header("Location: index.php");
?>