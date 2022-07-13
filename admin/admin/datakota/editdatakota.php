<?php
include '../../login/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM kota WHERE id_kota = '$id'");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row["id_kota"];
        $kota = $row["kota"];
    }
} else {
    header("Location: datakota.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Edit Data Kota Zona Batik</title>
</head>

<body>
<div class="input">
    <form action="proseseditdatakota.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset class="dua">
            <center><legend>
                <h3>Edit Data Kota Zona Batik</h3>
            </legend></center>
            <center><div class="isi"><table>
                <tr>
                    <th>ID Kota</th>
                    <th>:</th>
                    <th><input type="text" name="id_kota" id="id_kota" size="50" maxlength="15" value="<?= $id; ?>" readonly></th>
                </tr>
                <tr>
                    <th>Kota</th>
                    <th>:</th>
                    <th><input type="text" name="kota" id="kota" size="50" value="<?= $kota; ?>" required></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th>
                        <button type="submit" name="edit" id="edit">Edit</button>
                    </th>
                </tr>
            </table></center></div>
        </fieldset>
    </form>
</div>
</body>

</html>