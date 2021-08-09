<?php
    include('db.php');

    function recupera_id($recu_id){

        $usuario_gbl = $recu_id;
        echo $usuario_gbl;
        /* $GLOBALS["user_gbl"] = $GLOBALS[$recu_id]; */
        
        /* return $GLOBALS['user_gbl'] = $usuario_gbl; */
    }

    /* $sentencia = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sentencia);

    $id_usuario = mysqli_fetch_assoc($resultado) ;
    $usuario_gbl = $id_usuario['id'];

    $GLOBALS['user_gbl'] = $usuario_gbl; */
?>