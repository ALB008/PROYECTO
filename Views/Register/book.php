<?php

    if(isset($_POST['submit'])){
        $isbn_lib=$_POST['isbn'];
        $cod_lib=$_POST['cod'];
        $nom_lib=$_POST['nombre'];
        //$estado_lib=$_POST['estado'];
        $desc_lib=$_POST['desc'];
        $anno_lib=$_POST['anno'];
        $pag_lib=$_POST['pag'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrar libro</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estilos.css">

</head>
    <body>
        <main>
            <form action="" method="post" id="formulario" class="formulario">

                <!-- Grupo: ISBN -->
                <div class="formulario__grupo" id="grupo__isbn">
                    <label for="isbn" class="formulario__label">ISBN: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="isbn" name="isbn" value="<?php 
                    if(isset($isbn_lib)){echo $isbn_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: cod -->
                <div class="formulario__grupo" id="grupo__cod">
                    <label for="cod" class="formulario__label">Código interno: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="cod" name="cod" value="<?php 
                    if(isset($cod_lib)){echo $cod_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números y letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Nombre -->
                <div class="formulario__grupo" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Titulo:</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="nombre" name="nombre" value="<?php
                    if(isset($nom_lib)){echo $nom_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo con letras, números y algunos signos (/ - () = , ; . + * ¡! ¿?)</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: desc -->
                <div class="formulario__grupo" id="grupo__desc">
                    <label for="desc" class="formulario__label">Descripción general: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="desc" name="desc" value="<?php 
                    if(isset($desc_lib)){echo $desc_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números y letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Año -->
                <div class="formulario__grupo" id="grupo__anno">
                    <label for="anno" class="formulario__label">Año de publicación: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="anno" name="anno" value="<?php 
                    if(isset($anno_lib)){echo $anno_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con un número de máximo cuatro cifras</p>
                </div>
                <!-- ///////////  -->
                
                <!-- Grupo: Paginas -->
                <div class="formulario__grupo" id="grupo__pag">
                    <label for="pag" class="formulario__label">Cantidad de páginas: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="pag" name="pag" value="<?php 
                    if(isset($pag_lib)){echo $pag_lib;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solamente con números</p>
                </div>
                <!-- ///////////  -->

                

                <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Libro registrado exitosamente!</p>
			</div>

                
            </form>
        </main>

        <script src="js/formularioB.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


    </body>
</html>