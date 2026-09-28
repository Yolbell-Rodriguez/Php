<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'dwes.cnc6vpljlwms.us-east-1.rds.amazonaws.com';
$port = 3306;
$usuario = "admin";
$password = "dwes2026";
$base_datos = "dwes";

$dsn = "mysql:host=$host;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_SSL_CA => __DIR__ . '/../cert/global-bundle.pem',
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
];

$conector = new PDO($dsn, $usuario, $password, $opciones);
?>
</body>
</html>

