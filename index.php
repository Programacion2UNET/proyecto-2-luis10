<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<h1>INICIAR SESION</h1>
	
	<div id="principal">
	<?php 
		/*$db_host="localhost";
		$bd="prueba";
		$dbu="root";
		$dbc="";

		$conexion=mysqli_connect($db_host,$dbu,$dbc,$bd);

		if (mysqli_connect_errno()) {
			echo "Error al conectar con la BBDD";
			exit();
		}

		mysqli_set_charset($conexion,"utf8");

		$consulta="SELECT * FROM EQUIPOS";

		$resultado=mysqli_query($conexion,$consulta);

		while (($fila=mysqli_fetch_row($resultado))==true){
			echo $fila[0];
			echo "<br>";
		}

		

		echo $fila[0];
		*/
	 ?>
	<form>
		<label>Nombre de usuario:</label>
		<br>
		<input type="text" name="usuario">
		<br>
		<label>Contraseña:</label>
		<br>
		<input type="password" name="contra">
		<br>
		<input type="submit" name="iniciar" value="Iniciar Sesion">
		<br>
		<input type="button" value="Registrarse" onclick="window.open('registro.php')" />
		
		
	</form>

	</div>

	
</body>

</html>