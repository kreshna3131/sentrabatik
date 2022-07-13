<?php
// include "../login/koneksi.php";
include "../templates/header.php";
include "../admin/login/connect.php";
?>
<style>
  .tablecirebon .col h2 {
    text-align: center;
    font-size: 1.5rem;
    color: #a87a41;
    font-family: 'Spectral', serif;
  }

  .tablecirebon .col p {
    text-align: justify;
    font-family: 'Spectral', serif;
  }

  .tablecirebon .col h4 {
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Spectral', serif;
  }

  /* mobile version */
  @media (max-width: 768px) {
    .containercirebon {
      overflow-x: hidden;
      width: 100%;
      font-family: 'Spectral', serif;
    }

    .tablecirebon {
      font-size: 10px;
    }

    .containercirebon h1 {
      font-size: 25px;
    }

    .containercirebon .tablecirebon h2 {
      font-size: 20px;
    }

    .containercirebon .tablecirebon p {
      font-size: 1rem;
    }

    .containercirebon .tablecirebon th td {
      font-size: 1rem;
    }

  }
</style>

<body style="margin: auto;">
  <div class="container containercirebon" id="content" style="font-family: 'Lato', sans-serif;">
    <br>
    <h1 style="color: #a87a41; font-weight: 800; font-style: italic; font-family: 'Karla', sans-serif;" data-aos="fade-down">
      <center>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 54 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
      </center>
    </h1>
    <br><br>
    <div id_materi="content" class="row tablecirebon">
      <div class="col cirebonclass" data-aos="fade-right" data-aos-duration="2000">
        <h2 style="color: #a87a41;" data-aos="fade-down" data-aos-duration="2000">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 48 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h2>
        <hr>
          <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 8 "); ?>
              <?php foreach ($result as $row) : 
                $src = "http://localhost/sentrabatik/admin/image/".$row['foto'];
                echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
              ?>
            <?php $i++; ?>
          <?php endforeach; ?>
        <hr>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 19 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 20 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 21 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 47 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 22 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 23 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 24 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h4 style="color: #a87a41;">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 49 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h4>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 25 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <br><br>
      </div>
      <div class="col tablecirebon" style="color: #a87a41; font-family: 'Spectral', serif;" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1500">
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
          <?php $result = mysqli_query($koneksi, "SELECT * FROM penjual WHERE id_kota = 3"); ?>
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