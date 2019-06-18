<?php
$especie = $_POST["e"];
$raza = $_POST["r"];
$lugar = $_POST["l"];

$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$pdo->query("INSERT INTO mascotas VALUES (NULL,'$especie','$raza','$lugar')");

header("Location: documento.php");
?>