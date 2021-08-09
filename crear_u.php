<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <form action = "crear_usuario.php" method="post">
            <div>
                <h1> Crear Usuario</h1>
                    <div class="contenedor">
                        <div>
                            <label> Usuario:  </label>
                            <input type="text" name = "usuario">
                        </div>
                        <div>
                            <label> Clave:  </label>
                            <input type="password" name = "clave">
                        </div>
                        <button type = "submit" class="btn btn-success"> Agregar </button>
                    </div>
            </div>                
        </form>
    </div>
</body>
</html>