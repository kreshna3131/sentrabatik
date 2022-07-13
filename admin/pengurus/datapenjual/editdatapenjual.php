<?php
include '../../login/connect.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($koneksi, "SELECT * FROM penjual WHERE id_penjual = '$id'");

  while ($row = mysqli_fetch_array($result)) {
    $id = $row["id_penjual"];
    $nama_penjual = $row["nama_penjual"];
    $id_kota = $row["id_kota"];
    $kontak = $row["kontak"];
    $alamat = $row["alamat"];
  }
} else {
  header("Location: datapenjual.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Edit Data Penjual Zona Batik</title>
</head>

<body>
  <div class="input">
    <form action="proseseditdatapenjual.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
      <fieldset class="dua">
        <center>
          <legend>
            <h3>Edit Data Penjual Zona Batik</h3>
          </legend>
        </center>
        <center>
          <div class="isi">
            <table>
              <tr>
                <th>ID Penjual</th>
                <th>:</th>
                <th><input type="text" name="id_penjual" id="id_penjual" size="50" maxlength="15" value="<?= $id; ?>" readonly></th>
              </tr>
              <tr>
                <th>Nama Penjual</th>
                <th>:</th>
                <th><input type="text" name="nama_penjual" id="nama_penjual" size="50" value="<?= $nama_penjual; ?>" required></th>
              </tr>
              <tr>
                <th>Kota</th>
                <th>:</th>
                <th>
                  <select name="id_kota" id="id_kota" required>
                    <option value="">--Pilih Kota--</option>
                    <option value="1">Solo</option>
                    <option value="2">Pekalongan</option>
                    <option value="3">Cirebon</option>
                    <option value="4">Yogyakarta</option>
                  </select>
                </th>
              </tr>
              <tr>
                <th>kontak</th>
                <th>:</th>
                <th><input type="text" name="kontak" id="kontak" size="50" value="<?= $kontak; ?>" required></th>
              </tr>
              <tr>
                <th>Alamat</th>
                <th>:</th>
                <th><input type="text" name="alamat" id="alamat" size="50" value="<?= $alamat; ?>" required></th>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th>
                  <button type="submit" name="edit" id="edit">Edit</button>
                </th>
              </tr>
            </table>
        </center>
  </div>
  </fieldset>
  </form>
  </div>
</body>

</html>