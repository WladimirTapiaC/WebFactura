<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");

$select = mysqli_query($conn, "SELECT * FROM revision Where titulo = '$titulo'");
while ($raw = mysqli_fetch_array($select)) {
    $descrip = $raw['descripcion'];
    $imagen = $raw['imagen'];
}


$retry_value = mysqli_query($conn, "insert into galeria(titulo,descripcion,imagen)values('$titulo','$descrip','$imagen')");
 
if (!$retry_value) {
    echo'<script type="text/javascript"> alert("Fallo en el ingresado, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}
else{
    $slect = mysqli_query($conn, "DELETE from revision WHERE Titulo = '$titulo'");
	echo'<script type="text/javascript"> alert("¡¡¡  Ingreso exitoso !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>