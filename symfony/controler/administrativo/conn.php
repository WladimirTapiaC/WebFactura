<?php
// Connection variables
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "";		     // database password
$dbname	= "symfony";    // database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$Ingreso = "SELECT * FROM revision Where Estado = 'Ingreso'";
$res = mysqli_query($conn, $Ingreso);

$Modificar = "SELECT * FROM revision Where Estado = 'Modificacion'";
$rew = mysqli_query($conn, $Modificar);

$sql = "SELECT * FROM revision Where Estado = 'Eliminacion'";
$dele = mysqli_query($conn, $sql);


?>