<?php
error_reporting(0);
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['simpan'])) {
    $id = $_POST['id_gallery'];
    $kota = $_POST['id_kota'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../image/" . $foto;

    $query = "INSERT INTO gallery VALUES ('$id','$kota','$foto')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>
                alert('Data Berhasil Ditambah !');
                window.location.href='datagallery.php';
            </script>";
    }
}