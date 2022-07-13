<?php
error_reporting(0);
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['simpan'])) {
    $id = $_POST['id_kota'];
    $kota = $_POST['kota'];

    $query = "INSERT INTO kota VALUES ('$id','$kota')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Ditambah !');
                window.location.href='datakota.php';
            </script>";
    }
}