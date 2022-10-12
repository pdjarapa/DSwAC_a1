<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 003</title>
</head>
<body>
    <h1>Desarrollo de Software en ambiente Cloud - DSwAC</h1>
    <img src="../pictures/logo.png">
    <p></p>
    <h2>Trabajo Autonomo</h2>
    <p></p>
    <table class="default">
        <tr>
            <th scope="row">Datos de servidor</th>
            <th>Variable de servidor</th>
        </tr>
        <tr>
            <th>El servidor es : </th>
            <td><?php echo "{$_SERVER['SERVER_NAME']}";?></td>
        </tr>
        <tr>
            <th>La Direccion IP es : </th>
            <td><?php echo "{$_SERVER['REMOTE_ADDR']}";?></td>
        </tr>
        <tr>
            <th>Viene direccionada de : </th>
            <td><?php echo "{$_SERVER['HTTP_REFERER']}";?></td>
        </tr>
        <tr>
            <th>Esta utilizando el puerto : </th>
            <td><?php echo "{$_SERVER['REMOTE_PORT']}";?></td>
        </tr>
        <tr>
            <th>El valor del USER AGENT es : </th>
            <td><?php echo "{$_SERVER['HTTP_USER_AGENT']}";?></td>
        </tr>
    </table>
    <p></p>
    <img src="../pictures/Captura007.png" alt="Captura007" style="height: 500px; width:900px;">
    <img src="../pictures/Captura008.png" alt="Captura008" style="height: 500px; width:900px;">
    <img src="../pictures/Captura009.png" alt="Captura009" style="height: 500px; width:900px;">
    <p></p>
    <h3><A HREF="https://developer.mozilla.org/es/docs/Web/HTTP/Headers/Referer">Referer</A><Referer</h3>
	<p>La cabecera de solicitud Referer (‘referente’) contiene la dirección de la página web anterior de la que provenía el enlace a la página actual que se siguió.</p>
	<P></P>
    <h3><A HREF="https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent">User-Agent</A></h3>
	<p>El User-Agent request header (en-US) es una cadena característica que le permite a los servidores y servicios de red identificar la aplicación, sistema operativo, compañía, y/o la versión del user agent (en-US) que hace la petición.</p>
	<P></P>
    <h3><A HREF="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/getAllResponseHeaders">getAllResponseHeaders()</A></h3>
	<p>Una cadena que representa todos los encabezados de la respuesta (excepto aquellos cuyo nombre de campo es Set-Cookie) separados por CRLF, o nulo si no se ha recibido respuesta.</p>
	<P></P>
    
    <form action="fase3.php">
         <input type="submit" name="Enviar" value="Fase 003">
    </form>
    <img src="../pictures/1594935655135.png">
    <h3><A HREF="../Fase2/fase2.php">Fase 002</A></h3>
    <h3><A HREF="../index.html">Index</A></h3>
    <h3><A HREF="../Fase4/fase4.php">Fase 004</A></h3>
</body>
</html>