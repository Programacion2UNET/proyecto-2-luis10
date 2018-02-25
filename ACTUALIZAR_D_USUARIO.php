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
	
      
	    $conexion=mysqli_connect("localhost","root","");// conectar a la base de datos 
	   if(mysqli_connect_errno()){// funcion si no tenemos exito en encontrar la ruta de base de datos
		   echo "Fallo al conectar con la base de datos ";
		   exit();// salir de pagina
		}
		mysqli_select_db($conexion,"torneo_dep") or die ("No se encuentra la base de datos ");
		mysqli_set_charset($conexion,"utf8");// arrglar problema de caracteres 
	 
	  
	  $consulta="UPDATE datos_usuarios SET Nombre_Equipo='$equipo' , fecha_creacion='$fecha_creacion', dir_responsable='$dir' , correo='$correo' , sitio_web='$sitio_web' , usuario='$usuario' , clave='$clave'   where  usuario='$usuario' AND clave='$clave'"; 
	  $resultado=mysqli_query($conexion,$consulta); // consulta de datos 
//	 
	  mysqli_close($conexion);
	  
	  if($resultado==false){
		  echo "error en los emvios de datos ";
	  }
	  else{
		echo "Registro guardado <br><br>"; 
		echo "<table>
		             <tr><td>$equipo</td></tr>
					 <tr><td>$fecha_creacion</td></tr>
					 <tr><td>$sitio_web</td></tr>
					 <tr><td>$dir</td></tr>
					 <tr><td>$correo</td></tr>
					 <tr><td>$usuario</td></tr>
					 <tr><td>$clave</td></tr>			
		</table>";
	  }
	
	
?>
</body>
</html>