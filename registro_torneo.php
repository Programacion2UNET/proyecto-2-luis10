<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resgistro torneo</title>
   <style type="text/css">
		 
		 html{
   	 	   background-color: green;
   	     }
   	     #formulario{
   	     	 position: absolute;
   	     	 left: 40%;
   	     	 top: 10%;
   	     }
         label{
         	color: white;
         	font-size: 24px; 
         }
		 select{
	     }
         h1{
      	  text-align: center;
      	  color: white;
      	  font-family: cursive;
         }
         .boton{
		   position:absolute;
		   left:40%;
		   top:60%;
		 }
		</style>
        <script src="jquery-3.2.1.min.js"></script>
         <script type="text/javascript">
		

		
         function imprimir(usuario,clave) {
         
            document.write(" <form action='registrar.php'  method='post' id='formulario'><table><tr><td><label for='torneo'>Torneo</label></td> <td><select id='torneo'><option id='lista'></option></select> </td>      </tr>      <tr>         <td><label for='cant'>participantes</label></td>         <td><input type='text' name='cant' id='cant' placeholder='cantidad de participantes'></td>     </tr>     <tr>            <td> <label for='cate'>categoria :</label></td>           <td><select>              <option>principiante</option>              <option>aficiaonado</option>              <option>profesional</option>          </select></td>     <tr>                  <tr>              <td><label for='usuario' style='visibility:hidden'>Usuario:</label></td>                <td><input type='text' id='usuario' name='usuario' placeholder='Ingresa tu usuario' disabled='true' value="+usuario+" style='visibility:hidden'></td>            </tr>           <tr>              <td><label for='clave' style='visibility:hidden'>Clave :</label></td>                <td><input type='text' id='clave' name='clave' placeholder='Ingresa tu clave' disabled='true' value="+clave+" style='visibility:hidden'></td>            </tr>     <tr>       <td><input class='boton' type='submit' value='registrar'  /></td>     </tr>     </table>     </form>");   
		 
		 // document.writeln(arrayJS[0]);
		 
			//for(var i=0;i<cont;i++){
			  // $("#lista").after("<option>"+torneo[i]+"</option>");
			//}
           
          /*  $("#lista").after("<option>"+num+"</option>");//asignar variables que pro      
          	$("#lista").after("<option>basquet</option>");    
			      $("#lista").remove(); */  
               
		  }
		 function insertar(torneo){
			  $("#lista").after("<option>"+torneo+"</option>");
			 
		}
		function eliminar(){
		 $("#lista").remove();	
		}
      </script>
  
</head>

<body>

     <h1>Registro de Torneo</h1>

     <?php
	 		
           
			$usuario=$_POST["usuario"];
			$clave=$_POST["clave"];
			$db_host="localhost";
			$db_nombre="torneo_dep";
			$db_usuario="root";
			$db_contra="";
			
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
			
			  while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)){
				  
			    if(strcmp($fila["torneo"],"")==0 && strcmp($fila["fecha"],"")==0){
	    	        
					
	              }
				  else {
				   $ecn=true;	  
				 }  
				$torneo[]=$fila["torneo"];
			    $cont++;
			  }
			  
			  mysqli_close($coneccion);
         
			  if($ecn){
				  echo"<script>imprimir('$usuario','$clave')</script>";
				  for($v=1;$v<count($torneo);$v++){
				   echo "<script>insertar('$torneo[$v]')</script>";
				  }
				  echo "<script>eliminar();</script>";
			  }
			 
			  
     ?>
     

</body>
</html>