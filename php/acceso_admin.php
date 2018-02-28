<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta charset="utf-8">
<title>Administrador</title>
       
</head>

<body background="imagenes/fondo.jpg">
	
	<div id="titulo">
    <h1>Zona de Administrador</h1>
     </div>

     <div id="principal">

     	<div id="aux">
      	   <div id="efecto">
              <input type="button" onclick="location.href='listado_equipos.php';" value="Listado con todos los equipos inscritos en el torneo" id="boton" />
              <input type="button" onclick="location.href='BUSCAR_DETALLES.php';" value="Detalles de una inscripcion" id="boton" />
              <input type="button" onclick="location.href='BORRAR_REGISTROS.php';" value="Borrar un registro" id="boton" />
              <input type="button" onclick="location.href='DEFINIR_FECHA_TORNEO.php';" value="Registrar torneos, definir la fecha de realización" id="boton" />
            </div>
        </div> 
      	
      	<div id="separar">
      	<div id="efecto" >
      	   	<input type="button" onclick="location.href='index.html';" value="Volver a inicio" id="boton" />
      	</div>
      	</div>   	
     </div>

     <style type="text/css">
     	#efecto #boton {
     		width: 62%;
     		margin-left: 20%;
     	}
     	#separar #boton {
     		width: 25%;
     		margin-left: 38%;
     		
     		background: #7a5656;
     	}
     </style>
</body>
</html>