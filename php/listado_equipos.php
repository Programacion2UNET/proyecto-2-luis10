<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>Listado Equipos</title>

   <script src="css/jquery-3.2.1.min.js"></script>
<script>

	  function imprimir() {
         
            document.write(" <div id='principal'> <form action='VER_LISTADO.php'  method='post' id='FORMULARIO'><table><tr><td><label  for='torneo'>Torneo</label></td> <td><select  name='torneo' id='Torneo'></select> </td>      </tr>    </table>  <div id='efecto'>  <input  type='submit' value='Buscar' id='boton' /> <input  type='button' onclick=location.href='acceso_admin.php'; value='Volver' id='boton' /> </div>        </form> </div>");   
		      
		  }
	 function insertar(torneo){
		 
		    $("#Torneo").append("<option>"+torneo+"</option>");
	  }



</script>
</head>


<body  background="imagenes/fondo.jpg">
<h1 id="titulo">Informacion de equipos de torneos</h1>
<?php

	try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT * FROM torneos_fecha";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array());	
	$TORNEOS []="";
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   	
		$TORNEOS[]=$registro["torneo"];  		
	}
	
	      echo"<script>imprimir()</script>";
		  for($v=1;$v<count($TORNEOS);$v++){
		   echo "<script>insertar('$TORNEOS[$v]')</script>";
	    }
	
	
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	} 
	
	
	
?>
</body>
</html>