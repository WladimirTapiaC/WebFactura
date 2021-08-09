<?php

use App\Kernel;

	require_once("../controler/coneccion/conn.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="../controler/css/estilo.css" />
	</head>
	<body>
        <div class="child-page-listing">
          <?php
            if (mysqli_num_rows($res) > 0){
           ?>
           <a class="boton_personalizado" href="../controler/login.php">Login</a><br>
          <h2>Galeria</h2>
          
          <div class="grid-container">
            <?php while ($raw = mysqli_fetch_array($res)) { ?>

            <article id="3685" class="location-listing">

              <a class="location-title" href="#">
                <?php echo $raw['Titulo']; ?><br><br>
                <?php echo $raw['Descripcion']; ?>
               </a>

              <div class="location-image">
                <a href="#">
                    <img src="<?php echo $raw['Imagen']; ?>" alt="">
                </a>

              </div>
              
            </article>
            <?php }}?>

           </div>
          <!-- end grid container -->

        </div>
        
    </body>

</HTML>


