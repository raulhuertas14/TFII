<?php
$id = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
$resultado = $pdo->query("SELECT * FROM mascotas WHERE id = '$id'");
$mascota = $resultado->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body background="fondo.jpg">
    <h1>Editar mascota</h1>
    <form action="procesar_mascota.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div>Raza: <input type="text" name="r" value="<?php echo $mascota['raza']?>"></div>
        <div>Lugar: <input type="text" name="l" value="<?php echo $mascota['lugar']?>"></div>
        <button>Actualizar</button>
    </form>
</body>
</html>