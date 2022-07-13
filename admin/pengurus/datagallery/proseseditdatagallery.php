<?php
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['edit'])) {
    $id = $_POST["id_gallery"];
    $kota = $_POST["id_kota"];
    $foto = $_FILES['foto']['name'];;
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "../../image/" . $foto;
    
    if (empty($foto)) {
        $query = "UPDATE gallery SET kota = '$kota', foto = '$foto' WHERE id_gallery = '$id'";
    } else {
        $file = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = '$id'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("../../image/" . $foto_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE gallery SET id_kota = '$kota', foto = '$foto' WHERE id_gallery = '$id'";
        }
    }
    
    $result = mysqli_query($koneksi, $query);
    
    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi) . mysqli_error($koneksi));
    } else {
        echo "<script>
            alert('Data Berhasil Diubah !');
            window.location.href='datagallery.php';
        </script>";
    }
}

?>