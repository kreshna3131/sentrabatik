<?php
error_reporting(0);
include '../../login/connect.php';

global $koneksi;

if (isset($_POST['simpan'])) {
  $id = $_POST['id_penjual'];
  $nama_penjual = $_POST['nama_penjual'];
  $id_kota = $_POST['id_kota'];
  $kontak = $_POST['kontak'];
  $alamat = $_POST['alamat'];

  $query = "INSERT INTO penjual VALUES ('$id','$nama_penjual','$id_kota','$kontak','$alamat')";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die("Query gagal dijalankan." . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
  } else {
    echo "<script>
                alert('Data Berhasil Ditambah !');
                window.location.href='datapenjual.php';
            </script>";
  }
}
