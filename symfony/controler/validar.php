<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Check Login and create session</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			// Connection info. file
			include 'coneccion/conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$user = $_POST['User'];
			$pass = $_POST['Pass'];
			
			// Query sent to database
			$result = mysqli_query($conn, "SELECT Pass, User, Rol FROM login WHERE User = '$user'");
			
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['Pass'];
			$user = $row['User'];
			$pri = $row['Rol'];
			if ($_POST['Pass'] == $hash ) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['User'];
				if($pri == 2)
				{
					echo'<script type="text/javascript">
					window.location.href="administrativo/index.php";</script>';
				}
				if($pri == 1)
				{
					echo'<script type="text/javascript">
					window.location.href="usuario/index.php";</script>';
				}

				
						
			
			} if($_POST['pass'] != $hash) {
				echo'<script type="text/javascript"> alert("Conexion fallida, compruebe si el usuario y contraseña estan bien escritas");
				window.location.href="index.php";</script>';			
			}	
			?>
		</div>
		
	</body>
</html>