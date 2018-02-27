<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	$usuario=$_POST["usuario"];
	    try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT * FROM datos_usuarios where usuario =:usu ";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":usu"=>$usuario));
	$band=false;
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	  echo "<h1>Detalles de la inscripcion del usuario : $usuario</h1>"; 	
	  echo"<p>Usuario : ".$registro['usuario']."</p>";
	  echo"<p>Clave : ".$registro['clave']."</p>";
	  echo"<p>Correo : ".$registro['correo']."</p>";
	  echo"<p>Sitio Web : ".$registro['sitio_web']."</p>";
	  echo"<p>Direccion : ".$registro['dir_responsable']."</p>";
	  echo"<p>Nombre del Equipo : ".$registro['Nombre_Equipo']."</p>";
	  echo"<p>Fecha de Creacion : ".$registro['fecha_creacion']."</p>";
	  $band=true;
	}
	if(!$band){
		echo"<p>No esta registrado en la Base de Datos</p>";
	}
	
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 } 	



?>
</body>
</html>