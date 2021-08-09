<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];
$descrip= $_POST['descrip'];
$imagen = $_POST['imagen'];
$estado = "Ingreso";


$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");

$retry_value = mysqli_query($conn, "insert into revision(titulo,descripcion,imagen,estado)values('$titulo','$descrip','$imagen','$estado')");
 
if (!$retry_value) {
    echo'<script type="text/javascript"> alert("Fallo en la Solicitud ingresado, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}
else{
	echo'<script type="text/javascript"> alert("¡¡¡ Solicitud de Ingreso exitoso !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>