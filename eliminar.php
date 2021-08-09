<?php
include('db.php');

$consulta = eliminarRegistro($conexion, $_GET['id'],$_GET['idUsuario']);


function eliminarRegistro($conexion_db, $id_cliente,$idUsuario){

    try {
        $sentencia = "DELETE FROM clientes WHERE id = '".$id_cliente."' ";
        $resultado = mysqli_query($conexion_db, $sentencia);

        if ($resultado) {
            echo "hola";
            header("location:home.php?idUsuario=".$idUsuario);
        }
    } catch (Exception $e) {
        throw $e;
    }
}

?>