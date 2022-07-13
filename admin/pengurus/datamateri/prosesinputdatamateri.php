<?php
error_reporting(0);
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['simpan'])) {
  $id = $_POST['id_materi'];
  $keterangan = $_POST['keterangan'];
  $kota = $_POST['id_kota'];
  $materi = $_POST['materi'];

  $query = "INSERT INTO materi VALUES ('$id','$keterangan','$kota','$materi')";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
  } else {
    echo "<script>
                alert('Data Berhasil Ditambah !');
                window.location.href='datamateri.php';
            </script>";
  }
}
