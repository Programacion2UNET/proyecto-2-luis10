<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css">

<title>Eliminar Registros</title>

</head>

<body background="imagenes/fondo.jpg">

<?php
      echo "<h1 id='titulo'>Eliminando registros de la base de datos</h1>";
	  try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT * FROM registro_torneo";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array());
	 echo "<div id='principal'>";
	 echo "<h2 >Registros de torneo</h2>";
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   echo"<form action='#' method='post'> 
	          <table>
	               <tr> 
	                  <td> <label> Equipo :</label></td>
	                  <td><input type='text' name='nom_equipo' value='".$registro["nom_equipo"]."'></input></td>
	                </tr>
				   <tr>  
				        <td> <label> Fecha : </label></td>
	                    <td><input type='date' name='fecha_creacion' value='".$registro["fecha_creacion"]."'></input><td> 
	               </tr>
				   <tr>  
				        <td><label> Jugadores :</label></td>  
					    <td><input type='text' name='cant_jugadores' value='".$registro["cant_jugadores"]."'></input><td>
				    </tr>
				     <tr>
					    <td><label> Torneo :</label></td>
						<td><input type='text'  name='torneo' value='".$registro["torneo"]."'></input></td>
					</tr>
					<tr>
					    <td><label> Categoria :</label></td>
						<td><input type='text' name='categoria' value='".$registro["categoria"]."'></input><td>
					</tr>
					  </table> 
					
					 <div id='efecto'>
					  <input type='submit' id='boton' value='Actualizar' onclick=this.form.action='ACTUALIZAR_EQ.php'></td>
					  <input type='submit' id='boton' value='Eliminar' onclick=this.form.action='ELIMINAR_EQ.php' >
					 </div>
	            
	   </form>";
	   echo "<br>";
	}
		$sql="SELECT * FROM torneos_fecha";
	
	$resultados=$base->prepare($sql);
	$resultados->execute(array());
	 echo "<h2 >Registros de torneo y fecha </h2>";
	while($registro=$resultados->fetch(PDO::FETCH_ASSOC)){
	   echo"<form action='#' method='post' class='torneo'> 
	          <table>
	               <tr> 
	                  <td> <label> Torneo :</label></td>
	                  <td><input type='text' name='torneo' value='".$registro["torneo"]."'></input></td>
	                </tr>
				   <tr>  
				        <td> <label> Fecha : </label></td>
	                    <td><input type='date' name='fecha' value='".$registro["fecha"]."'></input><td> 
	               </tr></table>			
					
					<div id='efecto'>
					  <input type='submit' id='boton' value='Actualizar' onclick=this.form.action='ACTUALIZAR_TORNEO.php'>
					  <input type='submit' value='Eliminar' id='boton' onclick=this.form.action='ELIMINAR_TORNEO.php' >
					</div> 
	            
	   </form>";
	   echo "<br>";
	}
	$sql="SELECT * FROM datos_usuarios";
	
	$resultadoss=$base->prepare($sql);
	$resultadoss->execute(array());
	 echo "<h2 >Registros de datos usuarios </h2>";
	while($registro=$resultadoss->fetch(PDO::FETCH_ASSOC)){
	   echo"<form action='#' method='post' class='torneo'> 
	          <table>
	                <tr> 
	                  <td> <label> Equipo :</label></td>
	                  <td><input type='text' name='nom_equipo' value='".$registro["Nombre_Equipo"]."'></input></td>
	                </tr>
				   <tr>  
				        <td> <label> Fecha : </label></td>
	                    <td><input type='date' name='fecha_creacion' value='".$registro["fecha_creacion"]."'></input><td> 
	               </tr>
				   <tr>  
				        <td><label> Direccion :</label></td>  
					    <td><input type='text' name='dir_responsable' value='".$registro["dir_responsable"]."'></input><td>
				    </tr>
					<tr>
					    <td><label> correo :</label></td>
						<td><input type='text' name='correo' value='".$registro["correo"]."'></input><td>
					</tr>
					<tr>
					    <td><label> sitio web :</label></td>
						<td><input type='text' name='sitio_web' value='".$registro["sitio_web"]."'></input><td>
					</tr>
				     <tr>
					    <td><label> Usuario :</label></td>
						<td><input type='text'  name='usuario' value='".$registro["usuario"]."'></input></td>
					</tr>
					<tr>
					    <td><label> Contraseña :</label></td>
						<td><input type='text' name='clave' value='".$registro["clave"]."'></input><td>
					</tr>
					  </table> 

					<div id='efecto'>
					  <input type='submit' id='boton' value='Actualizar' onclick=this.form.action='ACTUALIZAR_D_USUARIO.php'>
					   <input type='submit' id='boton' value='Eliminar' onclick=this.form.action='ELIMINAR_D_USUARIO.php' >
					</div>
	            
	   </form>";
	   
	}
	echo "<br><br><br><br><div id='efecto'>
			<input type='button' id='boton' value='Volver' onclick=location.href='acceso_admin.php';>
		</div>";
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 } 
        



?>
</div>
</body>
</html>