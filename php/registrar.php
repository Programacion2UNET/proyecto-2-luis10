<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registros</title>
</head>

<body background="imagenes/fondo.jpg">

<?php
	    $torneo=$_POST["torneo"];
		$categoria=$_POST["categoria"];
		$participantes=$_POST["cant"];
		$usuario=$_POST["usuario"];
		$clave=$_POST["clave"];
	  	$nombre_eq="";
	  	$fecha_cre="";
	  	$dir="";
	  	$gmail="";
	  	$web="";
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
	  //  echo $registro["Nombre_Equipo"];
	   	$nombre_eq=$registro["Nombre_Equipo"];
	  	$fecha_cre=$registro["fecha_creacion"];
	  	$dir=$registro["dir_responsable"];
	  	$gmail=$registro["correo"];
	  	$web=$registro["sitio_web"];
	   
	}
	
	$sqli="SELECT * FROM registro_torneo where usuario =:usu AND  categoria=:categoria AND torneo=:torneo";
        $resultados=$base->prepare($sqli);
		$resultados->execute(array(":usu"=>$usuario,":categoria"=>$categoria,":torneo"=>$torneo));
		$band=0;
		$ecn=true;
	while($registros=$resultados->fetch(PDO::FETCH_ASSOC)){
	   $ecn=false;
	   $band=1;
      // echo $registros["categoria"].$registros['torneo'];
	}
	if($band==1){
       echo"<p id='titulo' style='text-align:center'>NO SE PUEDE REGISTRAR </p>";
		$resultado->closeCursor();
        $resultados->closeCursor();
	}
	else{
		//echo "si se puede registrar";
	/*	$SQLI="SELECT * FROM registro_torneo WHERE usuario =:usu AND clave =:cla  AND torneo=:torneo";
        $resultadoss=$base->prepare($SQLI);
		$resultadoss->execute(array(":usu"=>$usuario,":cla"=>$clave,":torneo"=>$torneo));
		$ecn=true;
		
	while($registros=$resultadoss->fetch(PDO::FETCH_ASSOC)){
		echo "torneo" . $registros["torneo"];
	   if(strcmp($registros["torneo"],"")==0){
	  
	      $ecn=false;
	   }
	}*/
		if($ecn && $torneo!=""){
			
	     $SQL="INSERT INTO registro_torneo(cant_jugadores,categoria,clave,correo,dir_resp,fecha_creacion,nom_equipo,torneo,usuario,web)
		 VALUES (:participantes,:categoria,:clave,:gmail,:dir,:fecha_cre,:nombre_eq,:torneo,:usuario,:web) ";
		 $RESULTADO=$base->prepare($SQL);
		 $RESULTADO->execute(array(":participantes"=>$participantes,":categoria"=>$categoria,":clave"=>$clave,":gmail"=>$gmail,":dir"=>$dir,":fecha_cre"=>          $fecha_cre,":nombre_eq"=>$nombre_eq,":torneo"=>$torneo,":usuario"=>$usuario,":web"=>$web ));
		 echo"<p id='titulo'>Registro exitoso </p>"; 
		 $resultado->closeCursor();
		}
		else {
			//  echo"<p >Ya te encuentras registrado en el torneo de $torneo</p>";
			//  $resultadoss->closeCursor();
		 }
	  }
      $SQ="SELECT * FROM registro_torneo where usuario =:usu AND clave =:cla ";
        $resultad=$base->prepare($SQ);
		$resultad->execute(array(":usu"=>$usuario,":cla"=>$clave));
		echo "<h1 id='titulo'>Listado de torneos inscritos</h1>";
	while($registros=$resultad->fetch(PDO::FETCH_ASSOC)){
	     echo "<h2>El Equipo : ".$registros["nom_equipo"]." esta registrado en el torneo : ".$registros["torneo"] ."  Categoria :".$registros["categoria"]." </h2> </br>";
     
	}
   }
   catch(Exception $e){
	    die ('Error' . $e->GetMessage());
	 } 
?>

</body>
</html>