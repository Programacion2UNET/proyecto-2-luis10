<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">

<title>Resgistro torneo</title>
   
        <script src="css/jquery-3.2.1.min.js"></script>
         <script type="text/javascript">
		

		
         function imprimir(usuario,clave) {
         
            document.write(" <form action='registrar.php'  method='post' id='formulario'><table><tr><td><label for='torneo'>Torneo</label></td> <td><select  name='torneo' id='torneo'><option id='lista'></option></select> </td>      </tr>      <tr>         <td><label for='cant'>participantes</label></td>         <td><input type='text' name='cant' id='cant' placeholder='cantidad de participantes'></td>     </tr>     <tr>            <td> <label for='cate'>categoria :</label></td>           <td><select name='categoria'>              <option>Principiante</option>              <option>Aficionado</option>              <option>Profesional</option>          </select></td>     <tr>                  <tr>              <td><label for='usuario' style='visibility:hidden'>Usuario:</label></td>                <td><input type='text' id='usuario' name='usuario' placeholder='Ingresa tu usuario'  value="+usuario+" style='visibility:hidden'></td>            </tr>           <tr>              <td><label for='clave' style='visibility:hidden'>Clave :</label></td>                <td><input type='text' id='clave' name='clave' placeholder='Ingresa tu clave'  value="+clave+" style='visibility:hidden'></td>            </tr>  </table><div id='efecto'> <input  type='submit' value='Registrar' id='boton' /></div>    </form>");   
		 
		 // document.writeln(arrayJS[0]);
		 
			//for(var i=0;i<cont;i++){
			  // $("#lista").after("<option>"+torneo[i]+"</option>");
			//}
           
          /*  $("#lista").after("<option>"+num+"</option>");//asignar variables que pro      
          	$("#lista").after("<option>basquet</option>");    
			      $("#lista").remove(); */  
               
		  }
				 function insertar(torneo,fecha,creacion){
			
			   
			   var FECHA=fecha.split("-");
			   var FechA=creacion.split("-");
			    var dia,diac;
				var mes,mesc;
				var ano,anoc;
				for(var i=0;i<FECHA.length;i++){
				    if(i==0){
						dia=FECHA[i];
					    diac=FechA[i];
					}
					else if(i==1){
					   mes=FECHA[i];
					   mesc=FechA[i];
					}
					else if(i==2){
					   ano=FECHA[i];
					   anoc=FechA[i];
					}
				}
				var F=new Date(""+dia+"/"+mes+"/"+ano);
				var FF=new Date(""+diac+"/"+mesc+"/"+anoc);
				if(FF.getTime()<=F.getTime()){
					$("#lista").after("<option>"+torneo+"</option>");
				}
		}
		function eliminar(){
		 $("#lista").remove();	
		}
      </script>
  
</head>

<body background="imagenes/fondo.jpg">
 	
 	  <div id="titulo">
      	<h1>Registro de Torneo</h1>
	  </div>		
     <div id="principal">
   
     <?php
	        $usuario=$_POST["usuario"];
			$clave=$_POST["clave"];
			$db_host="localhost";
			$db_nombre="torneo_dep";
			$db_usuario="root";
			$db_contra="";
		    $creacion;
			try{
				$base=new PDO('mysql:host=localhost; dbname=torneo_dep','root','');
				$base->exec("SET CHARACTER SET utf8");
				$sql="SELECT * FROM datos_usuarios where usuario =:usu AND clave =:cla";
				
				$resultado=$base->prepare($sql);
				$resultado->execute(array(":usu"=>$usuario,":cla"=>$clave));
			
				while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
					$creacion=$registro['fecha_creacion'];
					
				 }
			
				$resultado->closeCursor();
		   }
		   catch(Exception $e){
				die ('Error' . $e->GetMessage());
			 } 
   
			
			
			$coneccion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
			if(mysqli_connect_errno()){
				
				   echo "FALLO AL CONECTAR";
				   exit();
				}
			  mysqli_set_charset($coneccion,"uft8");
			 $consulta="SELECT * FROM torneos_fecha";
			 $resultado=mysqli_query($coneccion,$consulta);
			 $ecn=false;
			 $cont=0;
			 $torneo[]="";
			 $Fecha []="";
			  while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)){
				  
			    if(strcmp($fila["torneo"],"")==0 && strcmp($fila["fecha"],"")==0){
	    	        
					
	              }
				  else {
				   $ecn=true;	  
				 }  
			
				     $torneo[]=$fila["torneo"];
			         $Fecha []=$fila["fecha"];
				
			    $cont++;
			  }
			  
			  mysqli_close($coneccion);
         
			  if($ecn){
				  echo"<script>imprimir('$usuario','$clave')</script>";
				  for($v=1;$v<count($torneo);$v++){
				   echo "<script>insertar('$torneo[$v]','$Fecha[$v]','$creacion')</script>";
				  }
				  echo "<script>eliminar();</script>";
			  }
			  else if(!$ecn){
				   echo"<script>imprimir('$usuario','$clave')</script>";
				  for($v=0;$v<count($torneo);$v++){
				   echo "<script>insertar('$torneo[$v]')</script>";
				  }
				  echo "<script>eliminar();</script>";
		     }
			 
			  
     ?>
     </div>

</body>
</html>