<?php
// include "../login/koneksi.php";
include "../templates/header.php";
include "../admin/login/connect.php";
?>
<style>
  .tableyogyakarta .col h2 {
    text-align: center;
    font-size: 1.5rem;
    color: #a87a41;
    font-family: 'Spectral', serif;
  }

  .tableyogyakarta .col p {
    text-align: justify;
    font-family: 'Spectral', serif;
  }

  .tableyogyakarta .col h4 {
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Spectral', serif;
  }

  /* mobile version */
  @media (max-width: 768px) {
    .containeryogyakarta {
      overflow-x: hidden;
      width: 100%;
      font-family: 'Spectral', serif;
    }

    .tableyogyakarta {
      font-size: 10px;
    }

    .containeryogyakarta h1 {
      font-size: 25px;
    }

    .containeryogyakarta .tableyogyakarta h2 {
      font-size: 20px;
    }

    .containeryogyakarta .tableyogyakarta p {
      font-size: 1rem;
    }

    .containeryogyakarta .tableyogyakarta th td {
      font-size: 1rem;
    }

  }
</style>

<body style="margin: auto;">
  <div class="container containeryogyakarta" id="content" style="font-family: 'Lato', sans-serif;">
    <br>
    <h1 style="color: #a87a41; font-weight: 800; font-style: italic; font-family: 'Karla', sans-serif;" data-aos="fade-down">
      <center>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 55 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
      </center>
    </h1>
    <br><br>
    <div id_materi="content" class="row tableyogyakarta">
      <div class="col yogyakartaclass" data-aos="fade-right" data-aos-duration="2000">
        <h2 style="color: #a87a41;" data-aos="fade-down" data-aos-duration="2000">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 50 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h2>
        <hr>
          <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 9 "); ?>
              <?php foreach ($result as $row) : 
                $src = "http://localhost/sentrabatik/admin/image/".$row['foto'];
                echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
              ?>
            <?php $i++; ?>
          <?php endforeach; ?>
        <hr>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 26 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 27 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 28 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 29 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 30 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 31 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 32 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 33 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h4 style="color: #a87a41;">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 51 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h4>
        <hr>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 34 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 35 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 36 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 37 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 38 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 39 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 40 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 41 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <br><br>
      </div>
      <div class="col tableyogyakarta" style="color: #a87a41; font-family: 'Spectral', serif;" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1500">
        <table class="table table-responsive-md table-striped">
          <center>
            <h2>
              <strong>
                <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 8 "); ?>
                <?php foreach ($result as $row) : ?>
                  <?= $row['materi']; ?>
                <?php endforeach;
                ?>
              </strong>
            </h2>
          </center>

          <thead>
            <tr>
              <th scope="col">
                <center>No</center>
              </th>
              <th width="300px" scope="col">
                <center>Nama Penjual/Sentra</center>
              </th>
              <th scope="col">Kontak</th>
              <th scope="col">
                <center>Alamat</center>
              </th>
            </tr>
          </thead>
          <?php $i = 1; ?>
          <?php $result = mysqli_query($koneksi, "SELECT * FROM penjual WHERE id_kota = 4"); ?>
          <?php foreach ($result as $row) : ?>
            <tbody>
              <tr>
                <th style="width: 20px;"><?= $i; ?></th>
                <th style="width: 80px;"><?= $row['nama_penjual']; ?></th>
                <th style="width: 100px;"><?= $row['kontak']; ?></th>
                <th style="width: 400px;"><?= $row['alamat']; ?></th>
              </tr>
            </tbody>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>

  </div>
  <?php
  include "../templates/footer.php"
  ?>