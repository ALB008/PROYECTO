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

<!-- Modal -->
<div>
<div class="modal fade" id="modalFormA" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Registra una nueva actividad!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="tile">
            <h3 class="tile-title">información de la actividad</h3>
            <div class="tile-body">

          <form action="" method="post" id="formulario" class="formulario">
            <input type="hidden" id="idActividad" name="idActividad" value="">
            <p class="text-primary">Todos los campos son requeridos</p>

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
                    <input type="text" class="formulario__input" id="desc" name="desc" value="<?php 
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
                <div class="form-row">
                <div class="formulario__grupo col-md-6" id="grupo__dia">
                    <label for="dia" class="formulario__label">Día de realización:</label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="dia" name="dia" value="<?php
                    if(isset($dia_activ)){echo $dia_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solo con letras</p>
                </div>

                <!-- Grupo: Hora -->
                <div class="formulario__grupo col-md-6" id="grupo__hora">
                    <label for="hora" class="formulario__label">Hora: </label>
                    <div class="formulario__grupo-input">
                    <input required type="time" class="formulario__input" id="hora" name="hora" value="<?php 
                    if(isset($hora_activ)){echo $hora_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo ingresando la hora</p>
                </div>
  </div>
                <!-- ///////////  -->

                <!-- Grupo: Limite -->
                <div class="form-row">
                <div class="formulario__grupo col-md-6" id="grupo__limit">
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
                <div class="formulario__grupo col-md-6" id="grupo__dura">
                    <label for="dura" class="formulario__label">Duración en horas: </label>
                    <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" id="dura" name="dura" value="<?php 
                    if(isset($dura_activ)){echo $dura_activ;}?>">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Rellena este campo solamente con números</p>
                </div>
  </div>
                <!-- ///////////  -->

                

          <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
          </div>
          
<div class="tile-footer">
          <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button id="btnActionForm" type="submit" class="btn btn-primary">
              <i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText"> Registrar</span></button>&nbsp;&nbsp;

            <button class="btn btn-danger" type="buttom" data-dismiss="modal">
              <i class="fa fa-fw fa-lg fa-times-circle"></i> Cerrar 
            </button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Actividad registrada exitosamente!</p>
          </div>
                </div>
          </form>
            
            <script src="<?= media();?>/js/js/formularioA.js"></script>

            </div>
          </div>
      </div>
    </div>
  </div>
</div>