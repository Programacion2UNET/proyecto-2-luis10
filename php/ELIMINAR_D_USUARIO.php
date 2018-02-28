<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminando usuarios</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body background="imagenes/fondo.jpg">
<?php
	 $equipo=$_POST["nom_equipo"];
	 $fecha_creacion=$_POST["fecha_creacion"];
	 $dir=$_POST["dir_responsable"];
	 $correo=$_POST["correo"];
	 $sitio_web=$_POST["sitio_web"];
	 $usuario=$_POST["usuario"];
	 $clave=$_POST["clave"];
    
    try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="DELETE FROM datos_usuarios WHERE usuario=:usuario AND clave=:clave ";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":usuario"=>$usuario,":clave"=>$clave));
	/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   echo " nombre " . $registro["NOMBRE"];
	   echo " Apellido " . $registro["APELLIDO"];
	   echo "<br>";
	}*/
	echo"<h1 id='titulo'>Registro Eliminado</h1>";
	echo "<div id='principal'>
		<div id='efecto'>
			<input type='button' id='boton' value='Volver' onclick=location.href='BORRAR_REGISTROS.php';>
		</div>
	</div>";
	$resultado->closeCursor();
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }



	
?>	
</body>
</html>