<?php
$raza = $_POST["r"];
$lugar = $_POST["l"];
$id = $_POST["id"];

$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$pdo->query("UPDATE mascotas SET raza='$raza',lugar='$lugar' WHERE id='$id'");

header("Location: documento.php");
?>