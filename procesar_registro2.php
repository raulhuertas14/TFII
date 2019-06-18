<?php
$especie = $_POST["e"];
$raza = $_POST["r"];
$dueños = $_POST["d"];

$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$pdo->query("INSERT INTO esterilizacion VALUES (NULL,'$especie','$raza','$dueños')");

header("Location: documento.php");
?>