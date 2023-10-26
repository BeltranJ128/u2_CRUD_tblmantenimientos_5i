<?php
include("./config.php");

if (isset($_POST['editar_fila'])) {
    $id_mantenimiento = $_POST['edit_id'];
    $id_cliente = $_POST['edit_idc'];
    $id_empleado = $_POST['edit_ide'];
    $id_producto = $_POST['edit_idp'];
    $nom = $_POST['edit_nom'];
    $hora = $_POST['edit_hora'];
    $costo = $_POST['edit_costo'];
    $iva = $_POST['edit_iva'];


    $sql = "UPDATE mantenimientos SET id_cliente='$id_cliente', id_empleado='$id_empleado', id_producto='$id_producto', nombre_producto='$nom', hora='$hora', costo='$costo', iva='$iva' WHERE id_mantenimiento = '$id_mantenimiento'";
    $consulta = mysqli_query($db, $sql);

    if ($consulta){
        header('Location: ./index.php?actualizar=exito');
    }
    else{
        header('Location: ./index.php?actualizar=error');
    }
} else
    die("Acceso Denegado...");
?>