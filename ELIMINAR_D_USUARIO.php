<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
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
	echo"Registro eliminado";
	$resultado->closeCursor();
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }



	
?>	
</body>
</html>