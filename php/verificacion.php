<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
	  html{
		  background-color:#6FF;
	   
	  }
      #imagen{
		  position:absolute;
		  left:20%;
		  width:50%;
		  
	  }
      #boton{
		  position:absolute;
		  
		  left:55%;
		  top:35%;
	     background-color:#000;
		 font-size:2em;
		 font-style:oblique;
		 color:#FFF;
		 width:15%;
		 height:50px;
	     
	  }
    </style>
    
</head>

<body>
<img src="imagenes/continuar.jpg"  id="imagen" />
<?php
	
	/*$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	
	if(strcmp($usuario,"william")==0){
		header('Location:acceso_admin.php');
	}
	$coneccion=mysqli_connect("localhost","root","","torneo_dep");
	if(!$coneccion){
 		echo "fallo de conecion a la BDD";
	}	*/
	$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	$auxausuario=$usuario;
	$auxausuario=substr($auxausuario,1);
     try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT Nombre_Equipo ,fecha_creacion ,dir_responsable,correo,sitio_web,usuario,clave FROM datos_usuarios where usuario =:usu AND clave =:cla";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":usu"=>$usuario,":cla"=>$clave));
	$ecn=false;
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   $ecn=true;
	   if(strcmp($usuario,"")==0){
	    	$ecn=false;
	   }
	  
	}
	
	 if($ecn==true && ($usuario!="#".$auxausuario && $clave!="1234") ){
		
	   $resultado->closeCursor();
	   $base=null;
      echo"<form action='registro_torneo.php' method='post'>    
	         <table>   
			 <tr>   
			   <td><input type='text' id='usuario' name='usuario' value='$usuario'   style='visibility:hidden'></input><td/>  
			    <td><input type='text' id='clave' name='clave' value='$clave'   style='visibility:hidden'></input></td>
			  </tr>	
			  <tr>
			    <input type='submit' value='continuar' id='boton'/>
			  </tr>
			  </table>
		</form>";
	 // header('Location:registro_torneo.php');
	}
	else if($ecn){
		$resultado->closeCursor();
		$base=null;
	  header('Location:acceso_admin.php');
	}
	else {
	  $resultado->closeCursor();
	  $base=null;
	    header('Location:portada.html');
	}
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }
	

?>
</body>
</html>
