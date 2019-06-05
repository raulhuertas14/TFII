<?php
# Leer los parametros POST
$raza = $_POST["r"];
$lugar = $_POST["l"];

# Guardar los datos en la base de datos
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$pdo->query("INSERT INTO mascotas VALUES (NULL,'$raza','$lugar')");

# Redireccionar al index
header("Location: documento.php");
?>