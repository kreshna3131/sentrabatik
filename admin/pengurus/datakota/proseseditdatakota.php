<?php
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['edit'])) {
    $id = $_POST["id_kota"];
    $kota = $_POST["kota"];
    
    $query = "UPDATE kota SET kota = '$kota' WHERE id_kota = '$id'";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='datakota.php';
        </script>";
    }
}
