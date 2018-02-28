<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DEFINIR_FECHA_TORNEO</title>
<style>
	
	html{
		background-image:url(imagenes/guardar.png);
		
		
	}
	h1{
		text-align:center;
		font-family:"Comic Sans MS", cursive;
		font-size:36px;
		color:#030;
	  
	}
	#formulario{
		margin:0 auto;
		width:30%;
		background-color:#930;
		color:#FFF;
	
	}
	label{
		font-size:24px;
		font-family:"Comic Sans MS", cursive;
	
	}

	
</style>
</head>

<body>
   <h1>Guardar un torneo</h1>
   <form id="formulario" action="REGISTRAR_FECHA_TORNEO.php" method="post">
      
        <table>
           <tr>
               <td><label for="torneo">Torneo</label></td>
               <td><input required=true  name="torneo" id="torneo" placeholder="Ingresa torneo" type="text" /></td>
           </tr>
           <tr>
               <td><label for="fecha">Fecha </label></td>
               <td><input required=true  name="fecha" id="fecha" placeholder="Ingresa Fecha" type="date" /></td>
           </tr>
           <tr>
             <td><input type="submit"  value="guardar	"/></td>
           </tr>
        </table>
   </form>

</body>
</html>