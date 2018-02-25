<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<style type="text/css">
		 
		 html{
   	 	   background-color: green;
   	     }
   	    p{  
		    position:absolute
		     left: 30%;
   	     	 top: 10%;
			text-align:center;
			font-size:24px;
			color:#FFF;
		}

		</style>
</head>

<body>
<?php
      $nombre_eq=$_POST["nombre_eq"];
	  $fecha_cre=$_POST["fecha_cre"];
	  $dir=$_POST["dir"];
	  $gmail=$_POST["gmail"];
	  $web=$_POST["web"];
	  $usuario=$_POST["usuario"];
	  $clave=$_POST["clave"];
	  //codio de verificacion
      $auxausuario=$usuario;
	  $auxausuario=substr($auxausuario,1);
     try{
    $base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
	$base->exec("SET CHARACTER SET utf8");
	$sql="SELECT Nombre_Equipo ,fecha_creacion ,dir_responsable,correo,sitio_web,usuario,clave FROM datos_usuarios where usuario =:usu AND clave =:cla";
	
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":usu"=>$usuario,":cla"=>$clave));
	$ecn=false;
	$band=0;
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	   $ecn=true;
	   if(strcmp($usuario,"")==0){
	    	$band=1;
	   }
	}
	if($band==1){
       echo"<p >NO SE PUEDE REGISTRAR </p>";
		$resultado->closeCursor();

	}
	else if($ecn && $band==0){
		
	    echo"<p >NO SE PUEDE REGISTRAR USUARIO EXISTENTE EN LA BDD</p>";
		$resultado->closeCursor();
	}
	else{
		
	    $SQL="INSERT INTO datos_usuarios(Nombre_Equipo,fecha_creacion,dir_responsable,correo,sitio_web,usuario,clave)
		 VALUES (:nombre_eq,:fecha_cre,:dir,:gmail,:web,:usuario,:clave) ";
		 $RESULTADO=$base->prepare($SQL);
		 $RESULTADO->execute(array(":nombre_eq"=>$nombre_eq,":fecha_cre"=>$fecha_cre,":dir"=>$dir,":gmail"=>$gmail,":web"=>$web,":usuario"=>$usuario,":clave"=>$clave));
		echo"<p>Registro exitoso </p>"; 
		$resultado->closeCursor();
	}

   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }  


?>
</body>
</html>