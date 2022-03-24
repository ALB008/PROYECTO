<?php

    if(isset($_POST['submit'])){
        $id_usu=$_POST['id'];
        $nom_usu=$_POST['nombre'];
        $apell_usu=$_POST['apell'];
        $nacim_usu=$_POST['nacim'];
        $tel_usu=$_POST['tel'];
        $email_usu=$_POST['email'];
        $gen_usu=$_POST['gen'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar un usuario</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">

</head>
    <body>
        <main>
            <form action="" method="post" id="formulario" class="formulario">

            <!-- Grupo: ID -->
            <div class="formulario__grupo" id="grupo__id">
                    <label for="id" class="formulario__label">id:</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="id" name="id" value="<?php
                    if(isset($id_usu)){echo $id_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números</p>
                </div>
                <!-- ///////////  -->
                
                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombres:</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="nombre" name="nombre" value="<?php
                    if(isset($nom_usu)){echo $nom_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->
                
                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__apell">
                    <label for="apell" class="formulario__label">Apellidos: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="apell" name="apell" value="<?php 
                    if(isset($apell_usu)){echo $apell_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: nacim -->
                <div class="formulario__grupo" id="grupo__nacim">
                    <label for="nacim" class="formulario__label">Fecha de nacimiento: </label>
                    <div class="formulario__grupo-input">
                    <input type="date" required class="formulario__input" id="nacim" name="nacim" value="<?php 
                    if(isset($nacim_usu)){echo $nacim_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__tel">
                    <label for="tel" class="formulario__label">Telefono: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="tel" name="tel" value="<?php 
                    if(isset($tel_usu)){echo $tel_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Apellido -->
                <div class="formulario__grupo" id="grupo__email">
                    <label for="email" class="formulario__label">Correo: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="email" name="email" value="<?php 
                    if(isset($email_usu)){echo $email_usu;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo con uun correo valido</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Genero -->
                <div class="formulario__grupo" id="grupo__gen">
                    <label for="gen" class="formulario__label">Genero: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="gen" name="gen" value="<?php 
                    if(isset($gen_usu)){echo $gen_usu;}?>">
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
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Usuario registrado exitosamente!</p>
			</div>

                
            </form>
        </main>

        <script src="js/formularioU.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


    </body>
</html>