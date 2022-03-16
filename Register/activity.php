<?php
    //require_once "Pagina/util/conexion.php";
    if(isset($_POST['submit'])){
        $nom_activ=$_POST['nombre'];
        $desc_activ=$_POST['desc'];
        $ubi_activ=$_POST['ubi'];
        $dia_activ=$_POST['dia'];
        $hora_activ=$_POST['hora'];
        $limit_activ=$_POST['limit'];
        $dura_activ=$_POST['dura'];
        $x=0;
    }
    /*
    $obj = new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['Id_usu'];
    $sql="SELECT Id_usu,Nom_usu,Nacim_usu,Tel_usu,Cor_usu FROM usuario WHERE Id_usu='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);
    */
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registra una nueva actividad!</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información de la actividad</h1>
        <label for="">Nombre:</label> <br>
        <input type="text" name="nombre" value="<?php
        if(isset($nom_activ)){echo $nom_activ;}?>"> <br> <br>
        <label for="">Breve descripción: </label> <br>
        <input type="text" name="desc" value="<?php
        if(isset($desc_activ)){echo $desc_activ;}?>"> <br> <br>
        <label for="">Ubicación </label> <br>
        <input type="text" name="ubi" value="<?php
        if(isset($ubi_activ)){echo $ubi_activ;}?>"> <br><br>
        <label for="">Día de realización: </label><br>
        <input type="text" name="dia" value="<?php
        if(isset($dia_activ)){echo $dia_activ;}?>"> <br><br>
        <label for="">Hora: </label><br>
        <input type="text" name="hora" value="<?php
        if(isset($hora_activ)){echo $hora_activ;}?>"> <br><br>
        <label for="">Limite de participantes</label><br>
        <input type="text" name="limit" value="<?php
        if(isset($limit_activ)){echo $limit_activ;}?>"><br><br><br>
        <label for="">Duración:</label><br>
        <input type="text" name="dura" value="<?php
        if(isset($dura_activ)){echo $dura_activ;}?>"><br><br><br>


        <input type="submit" name="submit">

<?php
ini_set('include_path', '/objects/actividad.php');
ini_set('include_path', '/util/DAOactividad.php');
$activ = new actividad($nom_activ,$desc_activ, $ubi_activ, $dia_activ, $hora_activ, $limit_activ, $dura_activ);
$R_activ = new DAOactividad();
$R_activ.createActividad($activ);

?>

    
   
    
    </form>
    </body>
</html>