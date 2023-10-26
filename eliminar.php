<?php
include("./config.php");

if (isset($_POST['eliminarfila'])) {
    $id = $_POST['id_eliminar'];

    $sql = "DELETE FROM mantenimientos WHERE id_mantenimiento = '$id'";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("akses dilarang...");
