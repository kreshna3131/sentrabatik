<?php
include "../templates/header.php";
include "../admin/login/connect.php";
?>

<style>
  .cardabout {
    border-radius: 10px;
    padding: 2.5vw;
    margin: 3vw;
    width: 80vw;
    border: 1px solid #a87a41;
  }

  .cardabout img {
    width: 80%;
    align-items: center;
    justify-content: center;
    display: flex;
    padding-bottom: 20px;
  }

  .cardabout h1 {
    text-align: center;
    font-size: 3vw;
    padding-bottom: 20px;
    font-family: 'Karla';
    font-weight: bold;
  }

  .cardabout p {
    text-align: justify;
    font-family: 'Spectral', serif;
  }
</style>

<div class="card cardabout d-flex justify-content-center align-items-center">
  <h1 data-aos="fade-down" data-aos-duration="2000">
    <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 56 "); ?>
    <?php foreach ($result as $row) : ?>
      <?= $row['materi']; ?>
    <?php endforeach;
    ?>
  </h1>
  <?php $i = 1; ?>
  <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 10 "); ?>
  <?php foreach ($result as $row) :
    $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
    echo "<img src='$src' class='card-img-top' alt='...' data-aos='zoom-in' data-aos-duration='2000' />";
  ?>
    <?php $i++; ?>
  <?php endforeach; ?>
  <div class="card-body">
    <p class="pabout" data-aos-duration="2000" data-aos="fade-up">
      <strong>
        <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 57 "); ?>
        <?php foreach ($result as $row) : ?>
          <?= $row['materi']; ?>
        <?php endforeach;
        ?>
      </strong>
      <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 58 "); ?>
      <?php foreach ($result as $row) : ?>
        <?= $row['materi']; ?>
      <?php endforeach;
      ?>
    </p>
  </div>
</div>
<?php
include "../templates/footer.php";
?>