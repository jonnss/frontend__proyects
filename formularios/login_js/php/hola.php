<?php
include("conexion.php");

if(isset($_POST['registrarme'])){
    $mensaje = "";
    $usuario = $conexion->real_scape_string($_POST['usuario']);
    $correo = $conexion->real_scape_string($_POST['correo']);
    $pw = $conexion->real_scape_string($_POST['pw']);

    //Consulta para verificar que algún registro no exista
    $validar_usuario = "SELECT *FROM usuarios WHERE usuario = $usuario || correo = $correo";
    $validando = $conexion->query($validar_usuario);
    if($validando->num_rows >0){
        $mensaje.="h5 class='error'>El usuario y/o correo ya se encuentran registrados</h5>";
    }
    else{
        $insertar = "INSERT INTO usuarios(usuario,correo,pw) VALUES ('$usuario','$correo','pw')";
        $guardando = $conexion->query($insertar);
        if($guardando >0){
            $mensaje.="h5 class='correcto'>¡Registro exitoso!</h5>";
        }
        else{
            $mensaje.="h5 class='error'>Registro no exitoso</h5>";
        }
    }
}