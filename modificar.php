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
    <?php
    include('db.php');

    $sentencia = "SELECT codigo, municipio FROM municipios";
    $municipios = mysqli_query($conexion, $sentencia);

    $consulta = consultarCliente($conexion, $_GET['id']);
    $consultaDireccion = consultarDireccionCliente($conexion, $_GET['id']);
    $idUsuario = $_GET['idUsuario'];

    function consultarCliente($conexion_db, $id_cliente){
        $sentencia = "SELECT * FROM clientes WHERE id = '".$id_cliente."' ";
        $resultado = mysqli_query($conexion_db, $sentencia);
        $fila = mysqli_fetch_assoc($resultado);
        
        return[
            $fila['id'],
            $fila['nombre'],
            $fila['apellidos'],
            $fila['celular'],
            $fila['correo'],
        ];
    }
    function consultarDireccionCliente($conexion_db,$id_cliente){
        $sentencia = "SELECT direccion, municipio_fk FROM cliente_direccion WHERE cliente_fk = '".$id_cliente."' ";
        $resultado = mysqli_query($conexion_db, $sentencia);
        $fila = mysqli_fetch_assoc($resultado);
        
        return  $fila;
    }
    ?>
    <div>
        <form action = "modifica_cliente.php" method="post">
            <div>
                <h1> Modificar </h1>
                    <div class="contenedor">
                        <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>">
                        <div>
                            <label> Id:  </label>
                            <input type="text" value = "<?php echo $consulta[0];?>" name = "id" readonly >
                        </div>
                        <div>
                            <label> Nombre:  </label>
                            <input type="text" value = "<?php echo $consulta[1];?>" name = "nombre">
                        </div>
                        <div>
                            <label> Apellidos:  </label>
                            <input type="text" value = '<?php echo $consulta[2]?>' name = "apellidos">
                        </div>
                        <div>
                            <label> Celular:  </label>
                            <input type="text" value = '<?php echo $consulta[3]?>' name = "celular">
                        </div>
                        <div>
                            <label> Correo:  </label>
                            <input type="text" value = '<?php echo $consulta[4]?>' name = "correo">
                        </div>
                        <div>
                            <label > Dirección: </label>
                            <input type="text" name="direccion" value='<?php echo $consultaDireccion['direccion'];?>'>
                        </div>
                        <div>
                            <select name="municipio">
                                <option value="0">Seleccione: </option>
                                <?php
                                
                                    while ($fila = mysqli_fetch_assoc($municipios)) {
                                        $municipioSeleccionado = $fila[codigo] == $consultaDireccion['municipio_fk'] ? "selected" : "";
                                        echo $municipioSeleccionado;
                                        echo '<option value="'.$fila[codigo].'"'.$municipioSeleccionado.'>'.$fila[municipio].'</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <button type = "submit" class="btn btn-success"> Guardar </button>
                    </div>
            </div>                
        </form>
    </div>
</body>
</html>