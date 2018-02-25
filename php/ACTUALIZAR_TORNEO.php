<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	
	
		$fecha_creacion=$_POST["fecha"];
		$Torneo=$_POST["torneo"];
	
      
	    $conexion=mysqli_connect("localhost","root","");// conectar a la base de datos 
	   if(mysqli_connect_errno()){// funcion si no tenemos exito en encontrar la ruta de base de datos
		   echo "Fallo al conectar con la base de datos ";
		   exit();// salir de pagina
		}
		mysqli_select_db($conexion,"torneo_dep") or die ("No se encuentra la base de datos ");
		mysqli_set_charset($conexion,"utf8");// arrglar problema de caracteres 
	 
	  
	  $consulta="UPDATE torneos_fecha SET torneo='$Torneo' , fecha='$fecha_creacion' where  torneo='$Torneo' AND fecha='$fecha_creacion'"; 
	  $resultado=mysqli_query($conexion,$consulta); // consulta de datos 
//	 
	  mysqli_close($conexion);
	  
	  if($resultado==false){
		  echo "error en los emvios de datos ";
	  }
	  else{
		echo "Registro guardado <br><br>"; 
		echo "<table>
		             <tr><td>$Torneo</td></tr>
					 <tr><td>$fecha_creacion</td></tr>
								
		</table>";
	  }
	
	
?>
</body>
</html>