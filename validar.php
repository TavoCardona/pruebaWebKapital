<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$encriptacionMD5 = md5($contraseña);
$_POST['pwd'] = $encriptacionMD5;
session_start();
$_SESSION['ususario'] = $usuario;

include('db.php');
include('global.php');

$consulta = "SELECT * FROM usuarios where usuario = '$usuario' and clave ='$encriptacionMD5'";
$resultado = mysqli_query($conexion, $consulta);


$id_usuario = mysqli_fetch_assoc($resultado) ;
$usuario_gbl = $id_usuario['id'];

/* recupera_id($usuario_gbl); */

$filas = mysqli_num_rows($resultado);

if ($filas){

    //recupera_id($usuario_gbl);
    header("location:home.php?idUsuario=".$usuario_gbl);
    
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <div class = "input-contenedor-mensaje">
        <h2 class = "bad">usuario y/o contraseña incorrecta</h2>
    </div>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);