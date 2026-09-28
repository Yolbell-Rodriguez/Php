<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// 1. Conexión a la base de datos de tu PC (Configurado para tu Workbench en Ubuntu)
$host ='mysql -h dwes.cnc6vpljlwms.us-east-1.rds.amazonaws.com';
$port = 3306;
$usuario = "admin";
$password = "dawes2026"; // ¡IMPORTANTE! Si pusiste contraseña en Workbench, escríbela aquí entre las comillas
$base_datos = "futbol"; // El nombre exacto de la base de datos que creamos

$dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
$opciones_ssl = [
    PDO::MYSQL_ATTR_SSL_CA => '../cert/global-bundle.pem',
    // Desactivamos temporalmente la verificación estricta del nombre del host para asegurar que conecte
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
];
?>
    
</body>
</html>

