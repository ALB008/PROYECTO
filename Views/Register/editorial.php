<?php

    if(isset($_POST['submit'])){
        $nom_edit=$_POST['nombre'];
        $ciud_edit=$_POST['ciud'];
        $direc_edit=$_POST['edit'];
        $tel_edit=$_POST['tel'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar Editorial</title>
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
                    if(isset($nom_edit)){echo $nom_edit;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras y números</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Ciudad -->
                <div class="formulario__grupo" id="grupo__ciud">
                    <label for="ciud" class="formulario__label">Ciudad: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="ciud" name="ciud" value="<?php 
                    if(isset($ciud_edit)){echo $ciud_edit;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Dirección -->
                <div class="formulario__grupo" id="grupo__direc">
                    <label for="direc" class="formulario__label">Dirección: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="direc" name="direc" value="<?php 
                    if(isset($direc_edit)){echo $direc_edit;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números, letras y estos signos (# -)</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Telefono -->
                <div class="formulario__grupo" id="grupo__tel">
                    <label for="tel" class="formulario__label">Telefono: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="tel" name="tel" value="<?php 
                    if(isset($tel_edit)){echo $tel_edit;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo con un número de telefono válido, usa numeros y signo +</p>
                </div>
                <!-- ///////////  -->


                <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Editorial registrada exitosamente!</p>
			</div>

                
            </form>
        </main>

        <script src="js/formularioEd.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


    </body>
</html>