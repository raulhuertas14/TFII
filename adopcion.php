<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilos.css">
</head>
<body background="fondo.jpg">
    <h1>Registro unico de adopción.</h1>
    <h2>Registro necesario para proceder a la adopción.</h2>
    <form action="procesar_adopcion.php" method="post">
        <div>
            Nombre: <input type="text" name="n">
        </div>
        <div>
            Apellido: <input type="text" name="a">
        </div>
        <div>
            Edad: <input type="text" name="e">
        </div>
        <div>
            DNI: <input type="text" name="dn">
        </div>
        <div>
            Dirección: <input type="text" name="di">
        </div>
        <div>
            Correo electronico: <input type="text" name="c">
        </div>
        <div>
            Telefono: <input type="text" name="t">
        </div>
        <button>Enviar registro</button>
        </form>
</body>
</html>
 