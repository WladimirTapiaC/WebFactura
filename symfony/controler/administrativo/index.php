<?php

use App\Kernel;

	require_once 'conn.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
        <div class="child-page-listing">
          
          <div class="formu" style="width:33%;min-width:400px;float:left;">
               <h3>Solicitud de Ingreso</h3>
               <form method="post" action="Validacion/Ingreso.php">
                    <h3>Titulo:</h3>
                    <select name="titulo">
                        <?php
                            
                            while($valores = mysqli_fetch_array($res)){?>
                                <option value="<?php echo $valores['titulo']; ?>"><?php echo $valores['titulo']; ?></option>
                           <?php }
                        ?>
                    </select> <br>
                    
                    <br><br>
                    <button type="submit" class="boton">
							    Ingreso
						    </button>
               </form>
           </div>
           <div class="formu" style="width:33%;min-width:400px;float:left;">
              <h3>Solicitud de Modificacion</h3> 
              <form method="post" action="Validacion/Modificar.php">
                    <h3>Titulo:</h3>
                    <select name="titulo">
                        <?php
                            
                            while($valores = mysqli_fetch_array($rew)){?>
                                <option value="<?php echo $valores['titulo']; ?>"><?php echo $valores['titulo']; ?></option>
                           <?php }
                        ?>
                    </select> <br><br>
                    <button type="submit" class="boton">
							    Modificar
						    </button>
              </form>
           </div>
           <div class="formu" style="width:33%;min-width:400px;float:left;">
               <h3>Solicitud de Eliminacion</h3>
               <form method="post" action="Validacion/Eliminar.php">
                    <h3>Titulo:</h3>
                    <select name="titulo">
                        <?php
                            
                            while($valores = mysqli_fetch_array($dele)){?>
                                <option value="<?php echo $valores['titulo']; ?>"><?php echo $valores['titulo']; ?></option>
                           <?php }
                        ?>
                    </select> <br><br>
                    <button type="submit" class="boton">
							    Eliminar
						    </button>
               </form>
           </div>
         <br><br> 
          
        <a class="boton_personalizado" href="../../public/index.php">Volver a la Galeria</a><br>

          <!-- end grid container -->
        
        </div>
    </body>

</HTML>


