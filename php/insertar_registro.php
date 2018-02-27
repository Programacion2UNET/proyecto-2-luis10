<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Registro</title>
</head>

<body background="imagenes/fondo.jpg">


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
	if($band==1 || ($ecn && $band==0)){
	?>
		
			<h1>No se pudo registrar</h1>
		
		<div id="flujo">
			<input type="button" onclick="location.href='index.html';" value="Iniciar sesion" id="boton"/>	
		</div>

	<?php
	}
	else{
		
	    $SQL="INSERT INTO datos_usuarios(Nombre_Equipo,fecha_creacion,dir_responsable,correo,sitio_web,usuario,clave)
		 VALUES (:nombre_eq,:fecha_cre,:dir,:gmail,:web,:usuario,:clave) ";
		 $RESULTADO=$base->prepare($SQL);
		 $RESULTADO->execute(array(":nombre_eq"=>$nombre_eq,":fecha_cre"=>$fecha_cre,":dir"=>$dir,":gmail"=>$gmail,":web"=>$web,":usuario"=>$usuario,":clave"=>$clave));
		?>


		<div class="bajar">
			<div id="titulo">
				<h1>Registrado exitosamente.</h1>
			</div>
		</div>

		<div id="efecto">
			<input type="button" onclick="location.href='index.html';" value="Iniciar sesion" id="boton"/>	
		</div>
		
		<?php 
		$resultado->closeCursor();
	}

   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 }  


?>
	<style type="text/css">
		.bajar {
			margin-top: 15%;
		}          		
    </style>
</body>
</html>