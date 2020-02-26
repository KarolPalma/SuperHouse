<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="icon.ico"/>
</head>

<body>
	<img align="center" class="parametros" src="SB.png" alt="Super House">

	<form class="espaciado animated slideInUp" action="formulario.php" method="POST">

		<?php
			include ("abrir_conexion.php");

			if(isset($_POST['registrate'])){
                $id = null;
                $numID = $_POST['numID'];
								$nombre = $_POST['nombre'];
								$apellido = $_POST['apellido'];
								$email = $_POST['email'];
                $password = $_POST['password'];
                $direccion = $_POST['direccion'];
								$numTelefono = $_POST['numTelefono'];
								$confirmar = 1;


								$verificar_correo = mysqli_query($enlace, "SELECT * FROM registro WHERE email = '$email'");
				        $busca_correo = mysqli_num_rows($verificar_correo);

                $verificar_ID = mysqli_query($enlace, "SELECT * FROM registro WHERE numID = '$numID'");
                $busca_ID = mysqli_num_rows($verificar_ID);

								$campos = array();

                if($numID == "" || strlen($numID) < 13 || strlen($numID) > 13 || strpos($email, "-") === true || strpos($email, " ") === true){
				    	array_push($campos, "El número de Identidad tiene 13 dígitos");
				    	$confirmar = 0;
							}else{
                    if($numID == "" || $busca_ID > 0){
                        array_push($campos, "El número de Identidad Ingresado ya existe, por favor iniciar sesión.");
                        $confirmar = 0;
                    }
              }
              if($email == "" || strpos($email, "@") === false || $busca_correo > 0){
				    				array_push($campos, "Ingresa un correo electrónico válido.");
				    				$confirmar = 0;
						}
						if($password == "" || strlen($password) < 6){
										array_push($campos, "La contraseña no puede tener menos de 6 caracteres o vacio.");
										$confirmar = 0;
						}
            if($numTelefono == "" || strlen($numTelefono) < 8){
				    				array_push($campos, "Debe de ingresarse un número de teléfono de 8 dígitos");
				    				$confirmar = 0;
						}

						if($confirmar == 1){
										$insertarDatos = "INSERT INTO registro VALUES('$id', '$numID', '$nombre', '$apellido', '$email', '$password', '$direccion', '$numTelefono')";
										$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
                                        header('Location: login.php');
						if(!$ejecutarInsertar){
										echo "Error al conectarse a la base de datos e ingresar datos ";
						}
										echo " Se pudo registrar correctamente";
						}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Se ha registrado Correctamente";
				}
				echo "</div>";
			}

			include ("cerrar_conexión.php");
		?>

    <h1 class="centrado">Registrate</h1>
    <p class="fas fa-user-circle">
    Número de Identidad:<br/>
    <input type="text" name="numID" placeholder="Ingrese su número de identidad (sin guiones)" required>
    </p>

    <p class="fas fa-user">
    Nombre:<br/>
    <input type="text" name="nombre" placeholder="Ingrese su primer nombre" required>
    </p>

    <p class="fas fa-user">
    Apellido:<br/>
    <input type="text" name="apellido" placeholder="Ingrese su primer apellido" required>
    </p>

    <p class="fas fa-envelope">
    Correo electrónico:<br/>
    <input type="text" name="email" placeholder="Ingrese su correo electrónico" required>
    </p>

    <p class="fas fa-unlock-alt">
    Contraseña:<br/>
    <input type="password" name="password" placeholder="Ingrese una contraseña" required>
    </p>

    <p class="fas fa-home">
    Direccion:<br/>
    <input type="text" name="direccion" placeholder="Ingrese una dirección" required>
    </p>

    <p class="fas fa-mobile-alt">
    Número de Teléfono:<br/>
    <input type="text" name="numTelefono" placeholder="+504" required>
    </p>

    <input type="submit" name="registrate" value="Registrarse">

    <p class="centrado">¿Ya tienes una cuenta?
      <a class="link" href="login.php">Iniciar Sesión</a>
    </p>
	</form>

	<footer>
		<p> © 2019 Universidad Tecnológica de Honduras © SuperHouse</p>
	</footer>
</body>
</html>
