<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <?php
    include('db.php');
    include('global.php');

    $idUsuario = $_GET['idUsuario'];

    $sentencia = "SELECT * FROM clientes WHERE usuario_fk=".intval($idUsuario);
    $resultado = mysqli_query($conexion, $sentencia);

    echo "<div class= \"table-container\">";
    echo "<table class=\"table\">";
    echo "<tr>";
            echo "<td>"; echo "ID"; echo"</td>";
            echo "<td>"; echo "NOMBRE"; echo"</td>";
            echo "<td>"; echo "APELLIDOS"; echo"</td>";
            echo "<td>"; echo "CELULAR"; echo"</td>";
            echo "<td>"; echo "CORREO"; echo"</td>";
            echo "<td>"; echo "<button class=\"btn btn-info\" onclick=\"location.href='agregar.php?idUsuario=".$idUsuario."'\"> Nuevo </button>"; echo"</td>";
        echo "</tr>";
    while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
            echo "<td>"; echo $fila['id']; echo"</td>";
            echo "<td>"; echo $fila['nombre']; echo"</td>";
            echo "<td>"; echo $fila['apellidos']; echo"</td>";
            echo "<td>"; echo $fila['celular']; echo"</td>";
            echo "<td>"; echo $fila['correo']; echo"</td>";
            echo "<td>"; echo "<button class=\" btn btn-info\" onclick=\"location.href='modificar.php?idUsuario=".$idUsuario."&id=".$fila['id']."'\"> editar </button>"; echo"</td>";
            echo "<td>"; echo "<button class=\"btn btn-danger\" onclick=\"location.href='eliminar.php?idUsuario=".$idUsuario."&id=".$fila['id']."'\"> Eliminar </button>"; echo"</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
</body>
</html>