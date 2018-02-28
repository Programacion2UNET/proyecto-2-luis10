<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
	
	html{
		background-image:url(imagenes/buscador.jpg);
		background-size:80%;
		
	}
	h1{
		text-align:center;
		font-family:"Comic Sans MS", cursive;
		font-size:36px;
		color:#03C;
	  
	}
	#tabla{
		margin:0 auto;
		background-origin:border-box;
		
	}
	input {
		width:300px;
		height:30px;
	    
	}
	
</style>

</head>

<body>
<h1>Buscador De Detalles De Una Inscripcion</h1>
    <form action="BUSCANDO_DETALLES.php" method="post">
      <table id='tabla'>
        <tr>
         <td><input type="text" required=true  name="usuario" placeholder="Ingresa el usuario a buscar" /></td>
         <td><input type="submit" value="Buscar"/><td>
        </tr>
        </table>
     </form>

</body>
</html>