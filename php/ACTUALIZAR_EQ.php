<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
        html{
			background-image:url(imagenes/Deporte.jpg);
			background-size:100%;
		   
		}
         #tabla{
		margin:0 auto;
		background-color:#060;
		color:#FFF;
		font-family:"Comic Sans MS", cursive;
		font-size:36px;
		text-align:center;
		width:50%;
		border-radius:55%;
		
		}
		h1{
			margin:0 auto;
			text-align:center;
			background-color:#030;
			color:#FFF;
			font-style:italic;
			font-size:36px;
			font-family:"Comic Sans MS", cursive;
			width:30%;
			border-radius:45%;
		  
		}


</style>
</head>


<body  >
<?php
        $equipo=$_POST["nom_equipo"];
		$fecha_creacion=$_POST["fecha_creacion"];
		$cant_jugadores=$_POST["cant_jugadores"];
		$categoria=$_POST["categoria"];
		$Torneo=$_POST["torneo"];
	
      
	    $conexion=mysqli_connect("localhost","root","");// conectar a la base de datos 
	   if(mysqli_connect_errno()){// funcion si no tenemos exito en encontrar la ruta de base de datos
		   echo "Fallo al conectar con la base de datos ";
		   exit();// salir de pagina
		}
		mysqli_select_db($conexion,"torneo_dep") or die ("No se encuentra la base de datos ");
		mysqli_set_charset($conexion,"utf8");// arrglar problema de caracteres 
	 
	  
	  $consulta="UPDATE registro_torneo SET nom_equipo='$equipo' , fecha_creacion='$fecha_creacion' ,cant_jugadores='$cant_jugadores',categoria='$categoria',torneo='$Torneo' where  torneo='$Torneo' AND categoria='$categoria' AND nom_equipo='$equipo'"; 
	  $resultado=mysqli_query($conexion,$consulta); // consulta de datos 
//	 
	  mysqli_close($conexion);
	  
	  if($resultado==false){
		  echo "error en los emvios de datos ";
	  }
	  else{
		echo "<h1>Registro guardado</h1> <br><br>"; 
		echo "<table id='tabla'><tr><td>$equipo</td></tr>
		             <tr><td>$categoria</td></tr>
					 <tr><td>$fecha_creacion</td></tr>
					 <tr><td>$cant_jugadores</td></tr>
					  <tr><td>$Torneo</td></tr>
		</table>";
	  }
   
   
?>
</body>
</html>