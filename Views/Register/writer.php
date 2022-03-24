<?php

    if(isset($_POST['submit'])){
        $nom_aut=$_POST['nombre'];
        $orige_aut=$_POST['orige'];
        $estado_aut=$_POST['estado'];
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar un escritor</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">

</head>
    <body>
        <main>
            <form action="" method="post" id="formulario" class="formulario">
                
                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombre:</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="nombre" name="nombre" value="<?php
                    if(isset($nom_aut)){echo $nom_aut;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: orige -->
                <div class="formulario__grupo" id="grupo__orige">
                    <label for="orige" class="formulario__label">Pais de origen: </label>
                    <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" id="orige" name="orige" value="<?php 
                    if(isset($orige_aut)){echo $orige_aut;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: estado -->
                <div class="formulario__grupo" id="grupo__estado">
                    <label for="estado" class="formulario__label">Estado: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="estado" name="estado" value="<?php 
                    if(isset($estado_aut)){echo $estado_aut;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->


                <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Escritor registrado exitosamente!</p>
			</div>

                
            </form>
        </main>

        <script src="js/formularioW.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


    </body>
</html>