<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>
<?php
    echo"<h1>Listado de equipos registrados</h1>";
	try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT * FROM registro_torneo";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array());
	
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   echo "<p class='dato'>".$registro["nom_equipo"]."</p>";
	   echo"<form action='#' method='post'> 
	          <table style='display'>

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
					    <td><label> torneo :</label></td>
						<td><input type='text'  name='torneo' value='".$registro["torneo"]."'></input></td>
					</tr>
					<tr>
					    <td><label> Categoria :</label></td>
						<td><input type='text' name='categoria' value='".$registro["categoria"]."'></input><td>
					</tr>
					   
					<tr>
					
					  <td><input type='submit' value='actualizar' onclick=this.form.action='ACTUALIZAR_EQ.php'></td>
					   <td><input type='submit' value='eliminar' onclick=this.form.action='ELIMINAR_EQ.php' ></td>
					</tr> 
	            </table>
	   </form>";
	   echo "<br>";
	}
	
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 } 
	
	
	
?>
</body>
</html>