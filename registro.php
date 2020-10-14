<html>
	<head>
		<link rel="stylesheet" type="text/css" href="daniaestilo.css">
		<div id="div1">
		<title>CLINICA OFTALMOLOGICA CASTRO</title>
	</div>

	<link rel="stylesheet"
		  type="text/css"
		  href="daniaestilo.css"
	      />
	<body>

<?php
sconexion = mysqli_connect("localhost", "root", "", "enfermo");


$dpi= $_POST['dpi'];
$nobre= $_POST['nombre'];
$apellido= $_POST['apellidp'];
$sueldo= $_POST['sueldo'];
$comentario= $_POST['comentario'];

echo$dpi;
echo$apellido;
echo$sueldo;

myspli_query($conexion, "INSERT INTO ´enfermo´. ´ziniga´(´dp´, ´nombre´, ´apellido´, ´sueldo´) VALUES('$dpi', '$nombre', '$apellidp', '$sueldo')");
echo"exito...";
myspli_close($conexion);
?>
<center>
	<div id="footer"> 		
		<footer><h4>COPYRIGHT, 2020 VILLA NUEVA, ciudad de Guatemala, hecho por Dania Maydelí Castro Barrera <br> CLINICA OFTALMOLOGICA CASTRO</h4></footer>
	</div>
</center>

	</body>
</html>
