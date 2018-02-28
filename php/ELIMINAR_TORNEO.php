<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar torneo</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body background="imagenes/fondo.jpg">

<?php
	  $fecha_creacion=$_POST["fecha"];
	  $Torneo=$_POST["torneo"];
    
    try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="DELETE FROM torneos_fecha WHERE torneo=:torneo AND fecha=:fecha ";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":torneo"=>$Torneo,":fecha"=>$fecha_creacion));
	/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   echo " nombre " . $registro["NOMBRE"];
	   echo " Apellido " . $registro["APELLIDO"];
	   echo "<br>";
	}*/
	echo"<h1 id='titulo'>Registro Eliminado</h1>";
	$resultado->closeCursor();
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }




?>
<div id="principal">
	
	<div id="efecto">
             <input type="button" name="b" id="boton" value="Volver" onclick="location.href='acceso_admin.php';"> 
           </div>
</div>
</body>
</html>