<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fecha de torneos</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body background="imagenes/fondo.jpg">
   <h1 id="titulo">Guardar un torneo</h1>
   <div id="principal">
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
        </table>           
           <div id="efecto">
             <input type="submit" id="boton" value="Guardar"/></td>
           	 <input type="button" name="b" id="boton" value="Volver" onclick="location.href='acceso_admin.php';"> 
           </div>

   </form>
   </div>
</body>
</html>