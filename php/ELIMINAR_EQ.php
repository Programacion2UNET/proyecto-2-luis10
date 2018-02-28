<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body background="imagenes/fondo.jpg">

<?php
      $equipo=$_POST["nom_equipo"];
	  $fecha_creacion=$_POST["fecha_creacion"];
	  $cant_jugadores=$_POST["cant_jugadores"];
	  $categoria=$_POST["categoria"];
	  $Torneo=$_POST["torneo"];
    
    try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="DELETE FROM registro_torneo WHERE torneo=:torneo AND categoria=:categoria AND nom_equipo=:equipo";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":torneo"=>$Torneo,":categoria"=>$categoria,":equipo"=>$equipo));
	/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   echo " nombre " . $registro["NOMBRE"];
	   echo " Apellido " . $registro["APELLIDO"];
	   echo "<br>";
	}*/
	echo"<h1 id='titulo'>Registro eliminado</h1> <div id='principal'>
		<div id='efecto'>
			<input type='button' id='boton' value='Volver' onclick=location.href='BORRAR_REGISTROS.php';>
		</div>
	";
	$resultado->closeCursor();
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }

?>
</div>
</body>
</html>