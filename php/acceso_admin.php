<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
       <style type="text/css">
		 
		 html{
			 background-image:url(imagenes/administrador.jpg);
			 background-size:100%;
   	     }
		 #portada{
   	 	 width:50%;
		 
		 background-color:#666;
		   
		 
   	 	
   	    }
		 .accseso{
	
			 text-decoration: none;
			 font-size: 30px;
			 
			 color: white;
		 }
		 li{
			 list-style:none;
		}
		 div{
			text-align: center;
			 position:absolute;
			 left: 25%;
			 top:30%;
		 }
		 a:hover{
			color: black;
		 }
			 
		  
         h1{
      	  text-align: center;
      	  color: clack;
      	  font-family: cursive;
         }

		</style>
</head>

<body>

    <h1>Bienvenido al Menu de Administrador</h1>
      <div id="portada">
      	
      	   <ul class="menu">
      	   	   <li><a class="accseso" href="listado_equipos.php">listado con todos los equipos inscritos en el torneo</a></li>
      	   	   <li><a class="accseso" href="BUSCAR_DETALLES.php">Detalles de una inscripcion</a></li>
      	   	   <li><a class="accseso" href="BORRAR_REGISTROS.php">borrar un registro</a></li>
               <li><a class="accseso" href="DEFINIR_FECHA_TORNEO.php">Registrar torneos definir la fecha de realización</a></li>
      	   </ul>

      </div>
     

</body>
</html>