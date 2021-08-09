<?php

require_once("../conn.php");

$titulo = $_POST['titulo'];

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die("problemas al conectar al servidor");
$retry_value = mysqli_query($conn, "DELETE from revision WHERE titulo = '$titulo'");

if (!$retry_value) {

    echo'<script type="text/javascript"> alert("Fallo en la Eliminado, porfavor, intentalo nuevamente");
    window.location.href="../index.php";</script>';
}

else{
    $select = mysqli_query($conn, "DELETE from galeria WHERE Titulo = '$titulo'");
	echo'<script type="text/javascript"> alert("¡¡¡  Eliminacion exitosa !!!");
    window.location.href="../index.php";</script>';
}
 
mysqli_close($conn);
		
?>