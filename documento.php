<?php
$pdo = new PDO("mysql:host=localhost;dbname=mascotas;charset=utf8", "root", "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilos.css">
    <style type="text/css">
    h1 {font-size:45px; font-weight: bold; background-color: white; text-align: center; }
    h2 {font-size:24px; font-weight: bold; background-color: white; }
    table {font-size:20px; font-weight: bold; background-color: white; }
    </style>
</head>
<body background="fondo.jpg">
    <h1>Bienvenidos al portal "Animales Sin Hogar"</h1>
    <h2>¿Vio a un animal perdido? Registrelo aqui!</h2>
    <?php
    ?>
    <table border="1">
        <tr>
            <th>Raza</th>
            <th>Lugar</th>
            <th><a href="registrar.php">Registrar</a></th>
        </tr>
        <?php foreach ($pdo->query("SELECT * FROM mascotas") as $fila){ ?>
        <tr>
            <td><?php echo $fila["raza"] ?></td>
            <td><?php echo $fila["lugar"] ?></td>
            <td><a href="editar_mascota.php?id=<?php echo $fila["id"]?>">Editar</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
