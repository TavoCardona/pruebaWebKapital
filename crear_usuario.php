<?php
include('db.php');

crearUsuario($conexion, $_POST['usuario'], $_POST['clave']);

function crearUsuario($conexion_db,$nombre_usu, $clave_usu){

    $encriptacionMD5 = md5($clave_usu);
    $_POST['pwd'] = $encriptacionMD5;
    
    try {
        $sentencia = "INSERT INTO usuarios 
                                    (usuario, clave)
                            VALUES('".$nombre_usu."',
                                   '".$encriptacionMD5."')"; 
        $resultado = mysqli_query($conexion_db, $sentencia);
    } catch (Exception $e) {
        echo "Error: ".$e;
    }

}

?>

<script type="text/javascript">
    alert("Cliente agregado exitosamente");
    window.location.href = 'index.php';
</script>