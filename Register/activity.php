<?php
    if(isset($_POST['submit'])){
        $nom_activ=$_POST['nombre'];
        $desc_activ=$_POST['desc'];
        $ubi_activ=$_POST['ubi'];
        $dia_activ=$_POST['dia'];
        $hora_activ=$_POST['hora'];
        $limit_activ=$_POST['limit'];
        $dura_activ=$_POST['dura'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Actividad</title>
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
                    if(isset($nom_activ)){echo $nom_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras y números</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Desc -->
                <div class="formulario__grupo" id="grupo__desc">
                    <label for="desc" class="formulario__label">Breve descripción: </label>
                    <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" id="desc" name="desc" value="<?php 
                    if(isset($desc_activ)){echo $desc_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo con menos de 200 palabras y solo con números y letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Ubi -->
                <div class="formulario__grupo" id="grupo__ubi">
                    <label for="ubi" class="formulario__label">Ubicación: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="ubi" name="ubi" value="<?php 
                    if(isset($ubi_activ)){echo $ubi_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números y letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Dia -->
                <div class="formulario__grupo" id="grupo__dia">
                    <label for="dia" class="formulario__label">Día de realización:
                    <div class="formulario__grupo-input"> <br>
                    <!--
                    <select name="dia de la semana">
                        <option class="form__input" name="dia" id="dia1" value="L">Lunes</option>
                        <option class="form__input" name="dia" id="dia2" value="M">Martes</option>
                        <option class="form__input" name="dia" id="dia3" value="X">Miercoles</option>
                        <option class="form__input" name="dia" id="dia4" value="J">Jueves</option>
                        <option class="form__input" name="dia" id="dia5" value="V">Viernes</option>
                    </select>
                    -->
                    <!--
                    <input type="radio" class="form__input" name="dia" id="dia1">Lunes 
                    <input type="radio" class="form__input" name="dia" id="dia2">Martes 
                    <input type="radio" class="form__input" name="dia" id="dia3">Miercoles 
                    <input type="radio" class="form__input" name="dia" id="dia4">Jueves 
                    <input type="radio" class="form__input" name="dia" id="dia5">Viernes
                    -->
                    <input type="text" class="formulario__input" id="dia" name="dia" value="<?php 
                    if(isset($dia_activ)){echo $dia_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    </label>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Hora -->
                <div class="formulario__grupo" id="grupo__hora">
                    <label for="hora" class="formulario__label">Hora: </label>
                    <div class="formulario__grupo-input">
                    <input required type="time" class="formulario__input" id="hora" name="hora" value="<?php 
                    if(isset($hora_activ)){echo $hora_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo ingresando la hora</p>
                </div>
                <!-- ///////////  -->

                <!-- Grupo: Limite -->
                <div class="formulario__grupo" id="grupo__limit">
                    <label for="limit" class="formulario__label">Limite de participantes: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="limit" name="limit" value="<?php 
                    if(isset($limit_activ)){echo $limit_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con números de máximo dos cifras</p>
                </div>
                <!-- ///////////  -->
                
                <!-- Grupo: Duración -->
                <div class="formulario__grupo" id="grupo__dura">
                    <label for="dura" class="formulario__label">Duración en horas: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="dura" name="dura" value="<?php 
                    if(isset($dura_activ)){echo $dura_activ;}?>">
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
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>

                
            </form>
        </main>

        <script src="js/formularioA.php"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


    </body>
</html>