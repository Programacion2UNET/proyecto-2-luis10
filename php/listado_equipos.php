<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
   <script src="css/jquery-3.2.1.min.js"></script>
<script>

	  function imprimir() {
         
            document.write(" <form action='VER_LISTADO.php'  method='post' id='formulario'><table><tr><td><label for='torneo'>Torneo</label></td> <td><select  name='torneo' id='Torneo'></select> </td>      </tr>        <tr>       <td><input class='boton' type='submit' value='Buscar'  /></td>     </tr>     </table>     </form>");   
		      
		  }
	 function insertar(torneo){
		 
		    $("#Torneo").append("<option>"+torneo+"</option>");
	  }



</script>
</head>


<body>
<h1>Informacion de equipos de torneos</h1>
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