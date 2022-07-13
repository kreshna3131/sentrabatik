<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>Input Data Materi Zona Batik</title>
</head>

<body>
  <div class="input">
    <form action="prosesinputdatamateri.php" name="form1" id="form1" method="POST" enctype="multipart/form-data">
      <fieldset class="dua">
        <center>
          <legend>
            <h3>Input Data Materi Zona Batik</h3>
          </legend>
        </center>
        <center>
          <div class="isi">
            <table>
              <tr>
                <th>ID Materi</th>
                <th>:</th>
                <th><input type="text" name="id_materi" id="id_materi" size="50" maxlength="15" required></th>
              </tr>
              <tr>
                <th>Keterangan</th>
                <th>:</th>
                <th><input type="text" name="keterangan" id="keterangan" size="50" required></th>
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
                <th>Materi</th>
                <th>:</th>
                <th><input type="text" name="materi" id="materi" size="50" required></th>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th>
                  <button type="submit" name="simpan" id="simpan">Simpan</button>
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