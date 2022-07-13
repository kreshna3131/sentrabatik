<?php
// include "../login/koneksi.php";
include "../templates/header.php";
include "../admin/login/connect.php";
?>
<style>
  .tablepekalongan .col h2 {
    text-align: center;
    font-size: 1.5rem;
    color: #a87a41;
    font-family: 'Spectral', serif;
  }

  .tablepekalongan .col p {
    text-align: justify;
    font-family: 'Spectral', serif;
  }

  .tablepekalongan .col h4 {
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Spectral', serif;
  }

  /* mobile version */
  @media (max-width: 768px) {
    .containerpekalongan {
      overflow-x: hidden;
      width: 100%;
      font-family: 'Spectral', serif;
    }

    .tablepekalongan {
      font-size: 10px;
    }

    .containerpekalongan h1 {
      font-size: 25px;
    }

    .containerpekalongan .tablepekalongan h2 {
      font-size: 20px;
    }

    .containerpekalongan .tablepekalongan p {
      font-size: 1rem;
    }

    .containerpekalongan .tablepekalongan th td {
      font-size: 1rem;
    }

  }
</style>

<body style="margin: auto;">
  <div class="container containerpekalongan" id="content" style="font-family: 'Lato', sans-serif;">
    <br>
    <h1 style="color: #a87a41; font-weight: 800; font-style: italic; font-family: 'Karla', sans-serif;" data-aos="fade-down">
      <center>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 53 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
      </center>
    </h1>
    <br><br>
    <div id="content" class="row tablepekalongan">
      <div class="col pekalonganclass" data-aos="fade-right" data-aos-duration="2000">
        <h2 style="color: #a87a41;" data-aos="fade-down" data-aos-duration="2000">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 9 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h2>
        <hr>
          <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 7 "); ?>
              <?php foreach ($result as $row) : 
                $src = "http://localhost/sentrabatik/admin/image/".$row['foto'];
                echo "<img src='$src' class='img-fluid' alt='Responsive image' />";
              ?>
            <?php $i++; ?>
          <?php endforeach; ?>
        <hr>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 10 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 12 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 13 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h4 style="color: #a87a41;">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 3 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h4>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 46 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h6 style="color: #a87a41; font-family: 'Spectral', serif">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 11 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h6>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 14 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h6 style="color: #a87a41; font-family: 'Spectral', serif">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 42 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h6>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 15 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h6 style="color: #a87a41; font-family: 'Spectral', serif" ;>
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 43 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h6>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 16 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h6 style="color: #a87a41; font-family: 'Spectral', serif">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 44 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h6>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 17 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <h6 style="color: #a87a41; font-family: 'Spectral', serif">
          <strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 45 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </strong>
        </h6>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 18 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
        <br><br>
      </div>
      <div class="col tablepekalongan" style="color: #a87a41; font-family: 'Spectral', serif;" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="1500">
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
          <?php $result = mysqli_query($koneksi, "SELECT * FROM penjual WHERE id_kota = 2"); ?>
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