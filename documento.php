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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body background="fondo.jpg">
    <div class="cuerpo">
        <h1>Bienvenidos al portal "Control de Mascotas"</h1>
        <h2>¿Vio a un animal perdido? Registrelo aqui!</h2>
        <?php
        ?>
        <table border="10">
            <tr>
                <th>Especie</th>
                <th>Raza</th>
                <th>Lugar</th>
                <th><a href="registrar.php">Registrar</a></th>
                <th>Adopción</th>
                
            </tr>
            <?php foreach ($pdo->query("SELECT * FROM mascotas") as $fila){ ?>
            <tr>
                <td><?php echo $fila["especie"] ?></td>
                <td><?php echo $fila["raza"] ?></td>
                <td><?php echo $fila["lugar"] ?></td>
                <td><a href="editar_mascota.php?id=<?php echo $fila["id"]?>">Editar</a></td>
                <td><a href="adopcion.php?id=<?php echo $fila["id"]?>">¿Adoptar mascota?</a></td>
            </tr>
            <?php } ?>
        </table>
        <h2>(Recibira un email de su registro de adopción en aproximadamente 1 semana)</h2>
    </div>
    <div class="perrunos"><img src="imagen2.jpeg">
                
    </div>
    <div>
        <h2>¿Necesita esterilizar a su mascota? Registrela <a href="registrar2.php">AQUI</a> para proceder con la cita:</h2>
        <?php
        ?>
        <table border="10">
            <tr>
                <th>Mascota registrada</th>
                <th>Espera para la cita</th>
            </tr>
            <?php foreach ($pdo->query("SELECT * FROM esterilizacion") as $fila){ ?>
            <tr>
                <td><?php echo $fila["especie"] ?> <?php echo $fila["raza"] ?></td>
                <td>Espera de la cita: 1 semana</td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
