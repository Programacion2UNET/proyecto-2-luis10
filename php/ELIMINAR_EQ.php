<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eliminar</title>
<style>
        html{
			background-image:url(imagenes/Deporte.jpg);
			background-size:100%;
		   
		}
       
		h1{
			margin:0 auto;
			text-align:center;
			background-color:#030;
			color:#FFF;
			font-style:italic;
			font-size:36px;
			font-family:"Comic Sans MS", cursive;
			width:40%;
			border-radius:45%;
		  
		}


</style>

</head>

<body>
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
	echo"<h1>Registro eliminado</h1>";
	$resultado->closeCursor();
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }

?>

</body>
</html>