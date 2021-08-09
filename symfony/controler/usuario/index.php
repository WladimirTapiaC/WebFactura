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
               <h2>Ingresar Nueva Imagen</h2>

               <form method="post" action="Validacion/Ingreso.php">
                    <h3>Titulo:</h3>
                    <input type="text" name="titulo" placeholder="Titulo"/><br>
                    <h3>Descripcion:</h3>
                    <input type="text" name="descrip" placeholder="Descripcion"/><br>
                    <h3>Link de la Imagen:</h3>
                    <input type="text" name="imagen" placeholder="Link de la Imagen"/>
                    <br><br>
                    <button type="submit" class="boton">
							    Ingresar
						    </button>
               </form> 
           </div>
           <div class="formu" style="width:33%;min-width:400px;float:left;">
               <h2>Modificar una Imagen</h2>
               <form method="post" action="Validacion/Modificar.php">
                    <h3>Titulo:</h3>
                    <select name="titulo">
                        <?php
                            
                            while($valores = mysqli_fetch_array($row)){?>
                                <option value="<?php echo $valores['Titulo']; ?>"><?php echo $valores['Titulo']; ?></option>
                           <?php }
                        ?>
                    </select> <br>
                    <h3>Descripcion:</h3>
                    <input type="text" name="descrip" placeholder="Descripcion"/><br>
                    <h3>Link de la Imagen:</h3>
                    <input type="text" name="imagen" placeholder="Link de la Imagen"/>
                    <br><br>
                    <button type="submit" class="boton">
							    Modificar
						    </button>
               </form>
           </div>
           <div class="formu" style="width:33%;min-width:400px;float:left;">
               <h2>Eliminar Imagen</h2>

               <form method="post" action="Validacion/Eliminar.php">
                    <h3>Titulo:</h3>
                    <select name="titulo">
                        <?php
                            
                            while($valores = mysqli_fetch_array($res)){?>
                                <option value="<?php echo $valores['Titulo']; ?>"><?php echo $valores['Titulo']; ?></option>
                           <?php }
                        ?>
                    </select> <br><br>
                    <button type="submit" class="boton">
							    Eliminar
						    </button>
               </form>
           </div>
           </div>
          <!-- end grid container -->

        </div>
        
    </body>

</HTML>


