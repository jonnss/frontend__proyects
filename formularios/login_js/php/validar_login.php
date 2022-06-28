<?php
error_reporting(0);
include("../php/conexion.php");

$usuario = $_POST['usuario'];
$pw = $_POST['pw'];

$consulta = "SELECT *FROM usuarios WHERE usuario = '$usuario' and pw = '$pw'";
$resultado = mysqli_query($conexion,$consulta);

$datos = mysqli_num_rows($resultado);

if($datos > 0){
    header("location:../index.php");
}
else{
    echo '<script>
            alert("Usuario o contraseña incorrecto");
            window.location.href = "../iniciar-sesion.php";
        </script>';
exit;
}

mysqli_free_result($resultado);
mysqli_close($conexion);