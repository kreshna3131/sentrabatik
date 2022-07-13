<?php
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['edit'])) {
    $id = $_POST["id_materi"];
    $keterangan = $_POST["keterangan"];
    $kota = $_POST["id_kota"];
    $materi = $_POST["materi"];
    
    $query = "UPDATE materi SET keterangan = '$keterangan', id_kota = '$kota', materi = '$materi' WHERE id_materi = '$id'";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='datamateri.php';
        </script>";
    }
}
