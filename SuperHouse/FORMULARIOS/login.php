<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico"/>
</head>
<body>
	<img align="center" class="parametros" src="SB.png" alt="Super House">

	<form class="espaciado animated slideInUp" action="login.php" method="POST">
		<?php
            session_start();
			include ("abrir_conexion.php");

			if(isset($_POST['sesion'])){

				$email = $_POST['email'];
				$password = $_POST['password'];
				$campos = array();

				$buscar_info = mysqli_query($enlace, "SELECT * FROM registro WHERE email = '$email' and password = '$password'");
				$filas = mysqli_num_rows($buscar_info);
                
				if($filas > 0){
					header('Location: ../index.html');
				}else{
					array_push($campos, "Correo electrónico o contraseña inválido.");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Ha iniciado sesión correctamente";
				}
				echo "</div>";
				}


			include ("cerrar_conexión.php");
		?>

    <h1 class="centrado">Inicia Sesión</h1>

    <p class="fas fa-envelope">
		Correo electrónico:<br/>
		<input type="text" name="email" placeholder="Ingrese el correo electrónico">
		</p>

		<p class="fas fa-unlock-alt">
		Contraseña:<br/>
		<input type="password" name="password" placeholder="Ingrese una contraseña">
		</p>


		<p>
      <input class="centrado" type="submit" value="Iniciar Sesión" name="sesion">
    </p>

		<p class="centrado">¿Aún no tienes una cuenta?
      <a class="link" href="formulario.php">Registrate</a>
    </p>
	</form>

	<footer>
		<p> © 2019 Universidad Tecnológica de Honduras © SuperHouse</p>
	</footer>
</body>
</html>
