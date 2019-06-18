<?php
$nombre = $_POST["n"];
$apellido = $_POST["a"];
$edad = $_POST["e"];
$dni = $_POST["dn"];
$direccion = $_POST["di"];
$correo = $_POST["c"];
$telefono = $_POST["t"];
$id = $_POST["id"];

$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$pdo->query("INSERT INTO registro VALUES (NULL,'$nombre','$apellido','$edad','$dni','$direccion','$correo','$telefono')");

header("Location: documento.php");
?>
