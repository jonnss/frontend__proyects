
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 	    <link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Overpass:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/registrarse.css">
		
        <title>Iniciar Sesión</title>
	</head>
	
 <body>   
 <div class="container">
        <div class="header">
            <h2>Iniciar Sesión <i class="fas fa-check-circle"></i></h2>
        </div>
        <form method="post" action="../php/validar_login.php" id="form" class="form">
            <div class="form-control">
                <label for="usuario">Usuario:</label>
                <input type="text" placeholder="Usuario" id="usuario" name="usuario" required/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="pw">Contraseña:</label>
                <input type="password" placeholder="Contraseña" id="pw" name="pw" required/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <input type="submit" class="button" value="Iniciar Sesión" id="iniciar-sesion" name="iniciar-sesion"/>
            <div class="div-login">
                <a href="registrarse.php" class="login">Registrarme</a>
            </div>
            
        </form>
    </div> 

 <script src="../js/spec.js"></script>
 <script src="https://kit.fontawesome.com/9654fb2e68.js" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 </body>
</html>