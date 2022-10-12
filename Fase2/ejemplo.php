<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>
<body>
	<form action="procesar.php" method="GET">
		<input type="text" name="Usuario" placeholder="Ingresa informacion">
		<input type="text" name="Clave" placeholder="Ingresar Clave">		
		<input type="text" name="Edad" placeholder="Ingresar Edad">
		<input type="submit" name="Enviar" value="Guardar">
	</form>
	<h2><A HREF="https://developer.mozilla.org/es/docs/Web/HTTP/Methods/GET">GET</A></h2>
	<p>El método GET solicita una representación de un recurso específico. Las peticiones que usan el método GET sólo deben recuperar datos.</p>
	<P></P>
    <p></p>
	<form action="fase2.php">
         <input type="submit" name="Enviar" value="Fase 002">
    </form>
</body>
</html>
<?php
	setcookie("Cookie1DSwAC","paulo.jara@unl.edu.ec", time()+1);
	if(count($_COOKIE)>0)
	{
		print ("<br>No puedo almacenar cookies porque ya existe");
	}
	else{
		print ("<br>Se almacena la cookie");
	}
?>