<?php
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['edit'])) {
    $id = $_POST["id_penjual"];
    $nama_penjual = $_POST["nama_penjual"];
    $id_kota = $_POST["id_kota"];
    $kontak = $_POST["kontak"];
    $alamat = $_POST["alamat"];
    
    $query = "UPDATE penjual SET nama_penjual = '$nama_penjual', id_kota = '$id_kota', kontak = '$kontak', alamat = '$alamat' WHERE id_penjual = '$id'";
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='datapenjual.php';
        </script>";
    }
}

?>