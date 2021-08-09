<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/login.css" />
	</head>
	<body>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>

        <div class="login">
          <div class="login-header">
            <h1>Login</h1>
          </div>
          <div class="login-form">
              <form method="post" action="validar.php">
                <h3>Nombre de usuario:</h3>
                <input type="text" name="User" placeholder="Username"/><br>
                <h3>Contraseña:</h3>
                <input type="password" name="Pass" placeholder="Password"/>
                <br>
                <button type="submit" class="login-button">
							Entrar
						</button>
              </form> 
          </div>
        </div>
        
		<script src="js/login.js"></script>	
	</body>
</html>