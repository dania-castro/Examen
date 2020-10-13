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
