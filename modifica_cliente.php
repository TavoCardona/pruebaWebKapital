<?php
include('db.php');

modificarClientes($conexion,$_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['celular'], $_POST['correo'],$_POST['idUsuario'],$_POST['direccion'], $_POST['municipio']);

function modificarClientes($conexion_db,$id_cliente, $nombre_cli, $apellidos_cli, $celular_cli, $correo_cli,$user_gbl,$direccion_cli,$municipio_cli){

    try {
        $sentencia = "UPDATE clientes 
                         SET 
                            id = '".$id_cliente."',
                            nombre = '".$nombre_cli."',
                            apellidos = '".$apellidos_cli."',
                            celular = '".$celular_cli."',
                            correo = '".$correo_cli."' 
                        WHERE id='".$id_cliente."'"; 
        $resultado = mysqli_query($conexion_db, $sentencia);

        if ($resultado){
            $sentenciaDireccion ="UPDATE cliente_direccion 
                                SET  
                                direccion = '".$direccion_cli."',
                                municipio_fk = '".$municipio_cli."'
                                WHERE cliente_fk = '".$id_cliente."'"; 
        
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

<!-- <script type="text/javascript">
    alert("Cliente modificado exitosamente");
    window.location.href = 'home.php';
</script> -->