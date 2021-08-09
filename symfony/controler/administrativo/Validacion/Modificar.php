<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");
$select = mysqli_query($conn, "select * from revision WHERE titulo = '$titulo'");
while ($raw = mysqli_fetch_array($select)) {
    $descrip = $raw['Descripcion'];
    $imagen = $raw['Imagen'];
}

$retry_value = mysqli_query($conn, "UPDATE galeria SET Titulo = '$titulo', Descripcion = '$descrip', Imagen = '$imagen' WHERE Titulo = '$titulo'");

if (!$retry_value) {

    echo'<script type="text/javascript"> alert("Fallo en la Modificacion, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}

else{
    $slect = mysqli_query($conn, "DELETE from revision WHERE Titulo = '$titulo'");
	echo'<script type="text/javascript"> alert("¡¡¡  Modificacion exitosa !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>