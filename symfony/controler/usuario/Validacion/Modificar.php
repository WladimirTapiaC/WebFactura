<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];
$descrip= $_POST['descrip'];
$imagen = $_POST['imagen'];
$estado = "Modificacion";


$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");

$retry_value = mysqli_query($conn, "insert into revision(titulo,descripcion,imagen,estado)values('$titulo','$descrip','$imagen','$estado')");
 
if (!$retry_value) {
    echo'<script type="text/javascript"> alert("Fallo en la Solicitud de Modificacion, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}
else{
	echo'<script type="text/javascript"> alert("¡¡¡ Solicitud de Modificacion exitoso !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>
		
?>