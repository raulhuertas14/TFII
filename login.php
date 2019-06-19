<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
    * {margin: 0;padding: 0;font-family: sans-serif;box-sizing: border-box;}
    body {background: cornsilk;display: flex;min-height: 100vh;}
    form {margin: auto;width: 50%;max-width: 500px;background: cornsilk;padding:30px;border: 1px solid grey}
    h2 {text-align: center;margin-bottom: 20px;color: grey}
    input {display:block;padding:10px;width: 100%;margin:30px 0; font-size: 20px;}
    input[type="submit"] {background: orange;border: 0;color: black;opacity: 0.8;cursor: pointer;border-radius: 20px;margin-bottom: 0;}
    </style>
</head>
<body>
    <form method="post" action="documento.php">
        <h2>Inicio de Sesión</h2>
        Username : <input type="text" name="username"><br><br>
        Password : <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
