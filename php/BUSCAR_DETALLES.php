<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>Documento sin título</title>

</head>

<body background="imagenes/fondo.jpg">
<h1 id="titulo">Buscador De Detalles De Una Inscripcion</h1>
    <div id="principal">
    <form action="BUSCANDO_DETALLES.php" method="post">
      
         <input type="text" required=true  name="usuario" placeholder="Ingresa el usuario a buscar" />
         <div id="efecto">
         <input type="submit" id="boton" value="Buscar"/>
       	 </div>
     </form>
     	<div id="efecto">
     		<input type="button" id="boton" onclick="location.href='acceso_admin.php';" value="Volver">
     	</div>
     </div>
</body>
<style type="text/css">
	input {
		width: 45%;
		padding: 6px;
		margin-left: 26%;

	}
</style>
</html>