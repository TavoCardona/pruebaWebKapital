<?php
include('db.php');
$idUsuario = $_GET['idUsuario'];
$sentencia = "SELECT codigo, municipio FROM municipios";
$municipios = mysqli_query($conexion, $sentencia);
?>
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
        <form action = "agregar_cliente.php" method="post">
            <div>
                <h1> Agregar </h1>
                    <div class="contenedor">
                        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>">
                        <div>
                            <label> Nombre:  </label>
                            <input type="text" name = "nombre">
                        </div>
                        <div>
                            <label> Apellidos:  </label>
                            <input type="text" name = "apellidos">
                        </div>
                        <div>
                            <label> Celular:  </label>
                            <input type="text" name = "celular">
                        </div>
                        <div>
                            <label> Correo:  </label>
                            <input type="text" name = "correo">
                        </div>
                        <div>
                            <label > Dirección: </label>
                            <input type="text" name="direccion">
                        </div>
                        <div>
                            <select name="municipio">
                                <option value="0">Seleccione: </option>
                                <?php
                                
                                    while ($fila = mysqli_fetch_assoc($municipios)) {
                                        echo '<option value="'.$fila[codigo].'">'.$fila[municipio].'</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <button type = "submit" class="btn btn-success"> Agregar </button>
                    </div>
            </div>                
        </form>
    </div>
</body>
</html>