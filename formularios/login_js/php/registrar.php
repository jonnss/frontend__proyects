<?php 
    error_reporting(0);
    
    if(isset($_POST['registrarme'])){
        include('../php/conexion.php');

        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $pw = $_POST['pw'];
        
        //consulta para insertar un usuario
        $insertar ="INSERT INTO usuarios(usuario,correo,pw) VALUES ('$usuario','$correo','$pw')";  
        
        //consulta para verificar usuario
        $verificar_usuario = mysqli_query($conexion,"SELECT *FROM usuarios WHERE usuario = '$usuario'");
        if(mysqli_num_rows($verificar_usuario)>0){
            echo '<script>
                    alert("El nombre de usuario ya está registrado");
                    window.history.go(-1);
                 </script>';
            exit;
        }

        //consulta para verificar correo
        $verificar_correo = mysqli_query($conexion, "SELECT *FROM usuarios WHERE correo = '$correo'");
        if(mysqli_num_rows($verificar_correo)>0){
            echo '<script>
                    alert("El correo ya está registrado");
                    window.history.go(-1);
                 </script>';
            exit;
        }

        $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo '<script>
                    alert("Usuario no registrado");
                    window.location.href = "../php/registrarse.php";
                 </script>';
            exit;
        }
        else{
            echo '<script>
                    alert("Usuario registrado exitosamente");
                    window.location.href = "../bienvenido.html";
                </script>';
    exit;

        }

    }

    mysqli_close($conexion);
?>