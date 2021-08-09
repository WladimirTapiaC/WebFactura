<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];
$estado = "Eliminacion";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");

$slect = mysqli_query($conn, "Select * from galeria where Titulo = '$titulo'");

while ($raw = mysqli_fetch_array($slect)) {
    $descrip = $raw['Descripcion'];
    $imagen = $raw['Imagen'];
}
$retry_value = mysqli_query($conn, "insert into revision(titulo,descripcion,imagen,estado)values('$titulo','$descrip','$imagen','$estado')");
 
if (!$retry_value) {
    echo'<script type="text/javascript"> alert("Fallo en la Solicitud de Eliminado, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}
else{
	echo'<script type="text/javascript"> alert("¡¡¡ Solicitud de Eliminacion exitosa !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>