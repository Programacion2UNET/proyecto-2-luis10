<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DEFINIR_FECHA_TORNEO</title>
</head>

<body>
   
   <form id="formulario" action="REGISTRAR_FECHA_TORNEO.php" method="post">
      
        <table>
           <tr>
               <td><label for="torneo">Torneo</label></td>
               <td><input name="torneo" id="torneo" placeholder="Ingresa torneo" type="text" /></td>
           </tr>
           <tr>
               <td><label for="fecha">Fecha </label></td>
               <td><input name="fecha" id="fecha" placeholder="Ingresa Fecha" type="date" /></td>
           </tr>
           <tr>
             <td><input type="submit"  value="guardar	"/></td>
           </tr>
        </table>
   </form>

</body>
</html>