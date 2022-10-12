<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase 006</title>
</head>
<body>
    <h1>Desarrollo de Software en ambiente Cloud - DSwAC</h1>
    <img src="../pictures/logo.png">
    <p></p>
    <h2>Actividad 1 - Ejemplo Docente</h2>
    <h3><A HREF="../sesion1/leerxml/index.php">Leer XML 1</A></h3>
    <h3><A HREF="../sesion1/leerxml/leerxmlfile.php">Leer XML 2</A></h3>
    <p></p>
    <h2>Trabajo Autonomo - Actividad 1 - Fase 006</h2>
    <p></p>
    <p>En esta fase importamos datos desde un archivo XML a tabla.</p>
    <p></p>
    <?php
        print("<h1 align='center'>Listado de Estudiantes - 2022</h1>");
		echo('<table align="center" border=1 style="background:grey">');
		echo '<tr>';
		echo '<th>Cedula</th>';
		echo '<th>Apellido</th>';
        echo '<th>Nombre</th>';
        echo '<th>Celular</th>';
        echo '<th>Direccion</th>';
		echo '</tr>';
        if (file_exists('Estudiantes.xml')) {
			$xml = simplexml_load_file('Estudiantes.xml');
            foreach ($xml->estudiante as $key => $estud) {
                echo '<tr>';   
				echo '<td>'.$estud->cedula.'</td>';
				echo '<td>'.$estud->apellido.'</td>';
                echo '<td>'.$estud->nombre.'</td>';
                echo '<td>'.$estud->celular.'</td>';
                echo '<td>'.$estud->direccion.'</td>';
				echo '</tr>';
	        }
		} else {
			exit('No se puede abrir XML');
		}
        echo '</table>';
	    $userA= $_SERVER['HTTP_USER_AGENT'];
		if (preg_match("/Firefox/i", $userA)) {
			echo "<br><h3>Te encuentras navegando con Firefox</h3>";
		} else {
			echo "<br><h3>Estas navegando en otro navaegador diferente Firefox.</h3>";
		}
        var_dump(http_response_code());
        $navegador = $_SERVER['HTTP_USER_AGENT'];
        echo ("<br> Navegador Completo:". ($navegador));
    ?>
    <p></p>
    <A HREF="http://localhost/wordpress6.0.2/">Fase 004</A>
    <h3><A HREF="../index.html">Index</A></h3>
</body>
</html>