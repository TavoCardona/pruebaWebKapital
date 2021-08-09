<?php
include('db.php');
include('global.php');


agregarClientes($conexion, $_POST['nombre'], $_POST['apellidos'], $_POST['celular'], $_POST['correo'], $_POST['idUsuario'], $_POST['direccion'], $_POST['municipio']);

function agregarClientes($conexion_db,$nombre_cli, $apellidos_cli, $celular_cli, $correo_cli, $user_gbl,$direccion,$municipioCodigo){

    try {
        $sentencia = "INSERT INTO clientes 
                                    (nombre, apellidos, celular, correo,usuario_fk)
                            VALUES('".$nombre_cli."',
                                '".$apellidos_cli."',
                                ".$celular_cli.",
                                '".$correo_cli."',
                                '".$user_gbl."')"; 
        $resultado = mysqli_query($conexion_db, $sentencia);
        $idClienteInsert = mysqli_insert_id($conexion_db);
        
        if ($resultado){
            $sentenciaDireccion ="INSERT INTO cliente_direccion (direccion,municipio_fk,cliente_fk)
                                values ('".$direccion."',
                                        '".$municipioCodigo."',
                                        ".intval($idClienteInsert).")"; 

            $insertDireccion = mysqli_query($conexion_db,$sentenciaDireccion);

            if($insertDireccion){
                header('location:home.php?idUsuario='.$user_gbl);
            }
        }
    } catch (Exception $e) {
        echo "Error: ".$e;
    }

}

?>
