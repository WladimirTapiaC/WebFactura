<?php
// Connection variables
$dbhost	= "localhost";	   // localhost or IP
$dbuser	= "root";		  // database username
$dbpass	= "";		     // database password
$dbname	= "symfony";    // database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM galeria";
$res = mysqli_query($conn, $sql);

$M = "SELECT Titulo FROM galeria";
$row = mysqli_query($conn, $M);


?>