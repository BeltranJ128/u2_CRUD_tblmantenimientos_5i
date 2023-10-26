<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['registrar'])) {
    // ambil data dari form
    $idc = $_POST['idc'];
    $ide = $_POST['ide'];
    $idp = $_POST['idp'];
    $nom = $_POST['nom'];
    $hora = $_POST['hora'];
    $costo = $_POST['costo'];
    $iva = $_POST['iva'];

    // query
    $sql = "INSERT INTO mantenimientos(id_cliente, id_empleado, id_producto, nombre_producto, hora, costo, iva)
    VALUES('$idc', '$ide', '$idp', '$nom', '$hora', '$costo','$iva')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?agregar=exito');
    else
        header('Location: ./index.php?agregar=error');
} else
    die("Acceso denegado...");
