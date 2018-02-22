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

	  header('Location:registro_torneo.php');
	}
	else if($ecn){
		$resultado->closeCursor();
	  header('Location:acceso_admin.php');
	}
	else {
	  $resultado->closeCursor();
	    header('Location:portada.html');
	}
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }
	

?>