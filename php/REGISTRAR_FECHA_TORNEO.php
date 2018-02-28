<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<style>
	
	html{
		background-image:url(imagenes/guardar.png);
		
		
	}
	p{
		text-align:center;
		font-family:"Comic Sans MS", cursive;
		font-size:36px;
		color:#006;
	  
	}


	
</style>
</head>

<body>
<?php
    $torneo=$_POST["torneo"];
	$fecha=$_POST["fecha"];
	
	try{
    	$base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
		$base->exec("SET CHARACTER SET utf8");
		$sql="SELECT torneo,fecha FROM torneos_fecha WHERE torneo =:torneo AND fecha =:fecha";
	
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":torneo"=>$torneo,":fecha"=>$fecha));
		$ecn=false;
		$band=0;
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	  	  $ecn=true;
	   	  if(strcmp($torneo,"")==0){
	    	  $band=1;
	     }
	
	    }
		if($band==1){
       echo"<p >NO SE PUEDE REGISTRAR El TORNEO</p>";
		$resultado->closeCursor();

	}
	else if($ecn && $band==0){
		
	    echo"<p >NO SE PUEDE REGISTRAR TORNEO EXISTENTE EN LA BDD</p>";
		$resultado->closeCursor();
	}
	else{
		
	    $SQL="INSERT INTO torneos_fecha(torneo,fecha) VALUES (:torneo,:fecha)";
		 $RESULTADO=$base->prepare($SQL);
		 $RESULTADO->execute(array(":torneo"=>$torneo,":fecha"=>$fecha));
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