<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar PHP</title>
</head>
<body>
	<form action="procesar.php" method="POST">
		<input type="text" name="Usuario" placeholder="Ingresa informacion">
		<input type="text" name="Clave" placeholder="Ingresar Clave">		
		<input type="text" name="Edad" placeholder="Ingresar Edad">
		<input type="submit" name="Enviar" value="Guardar">
	</form>
	<h2><A HREF="https://developer.mozilla.org/es/docs/Web/HTTP/Methods/POST">POST</A></h2>
	<p>El método HTTP POST envía datos al servidor. El tipo del cuerpo de la solicitud es indicada por la cabecera Content-Type.</p>
	<P></P>
	<h1>Presentacion de Datos Ingresados por el usuario</h>
	<?php
       print_r($_REQUEST);
       print "<p>Su nombre es : $_REQUEST[Usuario]</p>\n";
       print("<br>El Apellido es : ". $_REQUEST['Clave']);
       print("<h1>La clave ingresada es : ". $_REQUEST['Edad']);
       print("<h1>");
    ?>
	<p></p>
	<p>Observe que sus datos ingresados en la página web viajan en texto plano en la URL de la petición mediante método GET.</p>
	<p></p>
	<form action="fase2.php">
         <input type="submit" name="Enviar" value="Fase 002">
    </form>
</body>
</html>
<?php
	setcookie("Cookie2DSwAC","paulo.jara@unl.edu.ec", time()+1);
	if(count($_COOKIE)>0)
	{
		print ("<br>No puedo almacenar cookies porque ya existe");
	}
	else{
		print ("<br>Se almacena la cookie");
	}
?>