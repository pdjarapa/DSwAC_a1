<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar PHP</title>
</head>
<body>
	<?php
		print("<br><h3>Se imprime los Headers: </h3><br>");
		var_dump($_SERVER);
		print("<br><br>");
 		echo "<b>El servidor es : </b> {$_SERVER['SERVER_NAME']}<br>"; 
    	echo "<b>El valor de USER AGENT es : </b> {$_SERVER['HTTP_USER_AGENT']}<br>"; 
		print("<br>");
		print("<br><h3>Se usa la función getallheaders: </h3><br>");
		foreach (getallheaders() as $name => $value) {
			echo "$name: $value <br>";
		}
    ?>
	<p></p>
	<form action="tarea003.php" method="POST">
		<input type="submit" name="Enviar" value="Tarea 003">
	</form>
	<p></p>
	<h3><A HREF="../Fase3/fase3.php">Fase 003</A></h3>
    <img src="../pictures/1594935655135.png">
    <h3><A HREF="../index.html">Index</A></h3>
</body>
</html>
<?php
	setcookie("Cookie3DSwAC","paulo.jara@unl.edu.ec", time()+1);
	if(count($_COOKIE)>0)
	{
		print ("<br>No puedo almacenar cookies porque ya existe");
	}
	else{
		print ("<br>Se almacena la cookie");
	}
?>