
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">
        <div class="formulario">
            <h1>Login</h1>
                <div class = "contenedor">

                    <div class = "input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" placeholder = "Usuario" name = "usuario">
                    </div>

                    <div class = "input-contenedor">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" placeholder = "Contraseña" name = "contraseña">
                    </div>
                    <input type="submit" value = "Ingresar" class = "button">
                </div>
        </div>
    </form>
</body>
</html>