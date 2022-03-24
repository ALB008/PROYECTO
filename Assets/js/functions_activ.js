function openModal(){
    document.querySelector('#idActividad').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('btnText'.innerHtml="Guardar");
    document.querySelector('#titleModal').innerHtml = "Nueva Actividad";
    document.querySelector('#formulario').reset();
    $('#modalFormA').modal('show');
}