<?php
include "admin/login/connect.php";
?>

<style>
  .banner_main {
    background: #FFF1E6;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding: 50px;
  }

  .text-bg h1 {
    color: #fff;
    font-size: 40px;
    font-family: 'Karla', sans-serif;
    line-height: 50px;
    font-weight: bold;
    color: #a87a41;
    text-align: center;
  }

  .text-bg .h1home {
    color: #a87a41;
    font-size: 40px;
    line-height: 10px;
    padding-bottom: 25px;
    font-weight: bold;
    color: black;
    text-align: center;
  }

  .text-bg h1 span {
    color: #a87a41;
    font-family: 'Spectral', serif;
    font-size: 31px;
    line-height: 35px;
    font-weight: bold;
    text-align: justify;
  }

  .text-bg p {
    color: #fff;
    font-size: 17px;
    line-height: 28px;
    padding: 40px 0;
    color: #a87a41;
    text-align: justify;
  }

  .text-bg a {
    font-size: 16px;
    font-weight: bold;
    background-color: #fff;
    color: #a87a41;
    padding: 10px 0px;
    width: 100%;
    max-width: 190px;
    text-align: center;
    display: inline-block;
    text-transform: uppercase;
    border-radius: 10px;
    border: 1px solid #a87a41;
  }

  .text-bg a:hover {
    background-color: #000;
    color: #fff;
    text-decoration: none;
  }

  .text-img figure {
    margin: 0px;
  }

  .text-img figure img {
    width: 75%;
    margin-left: 50px;
    border-radius: 10px;
    border: 3px solid #a87a41;
  }

  /** Services section **/
  .Services {
    padding: 90px;
    background: #FFF1E6;
    font-family: Poppins;
  }

  .Services .titlepage {
    text-align: center;
  }

  .Services .titlepage h2 {
    padding-bottom: 20px;
    font-size: 45px;
    color: #a87a41;
  }

  .Services .titlepage p {
    color: #a87a41;
  }

  .Services .Services-box i {
    background: #fff;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    display: inline-block;
    padding-top: 19px;
  }

  .Services .Services-box i:hover {
    background: #ddd;
  }

  .Services .Services-box h3 {
    padding: 20px 0px 20px 0px;
    font-size: 20px;
    line-height: 25px;
    display: block;
    font-weight: 500;
    color: #a87a41;
  }

  .Services .Services-box {
    text-align: center;
    background-color: transparent;
    border-radius: 20px;
    border: #a87a41 solid 2px;
    padding: 40px;
    transition: ease-in all 0.5s;
    margin-bottom: 30px;
  }

  .Services .Services-box:hover {
    background: #fcc889;
    transition: ease-in all 0.5s;
    cursor: pointer;
    color: #FFF1E6;
  }

  .Services .Services-box p {
    font-size: 16px;
    line-height: 24px;
    color: #a87a41;
  }

  .read_more {
    font-size: 16px;
    background-color: #fff;
    color: #000;
    padding: 10px 0px;
    width: 100%;
    max-width: 190px;
    display: flex;
    justify-content: center;
    text-align: center;
    margin: 0 auto;
    margin-top: 20px;
  }

  .read_more:hover {
    background: #8308eb;
    color: #fff;
  }

  @media (max-width: 1025px) {
    .text-bg h1 {
      font-size: 6vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 4vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }
  }


  @media (max-width: 768px) {
    body {
      padding-top: 110px;
    }

    .text-bg h1 {
      font-size: 7vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 5vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }

    .banner_main {
      padding: 0;
    }

    .Services {
      padding: 0;
    }
  }

  @media (max-width: 376px) {
    .text-bg h1 {
      font-size: 10vw;
      text-align: center;
    }

    .text-bg h1 span {
      font-size: 7vw;
      text-align: center;
    }

    .text-bg p {
      text-align: justify;
    }
  }

  @media (max-width: 442px) {
    .text-bg span {
      font-size: 7vw;
      text-align: center;
    }
  }

  /** end Services section **/
</style>

<!-- banner -->
<div class="container containerhome">
  <section class="banner_main">
    <div class="row d_flex">
      <div class="col-md-5 col-sm-12">
        <div class="text-bg">
          <h1 data-aos="fade-down" data-aos-delay="200">
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 60 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h1>
          <h1 data-aos="fade-down" data-aos-delay="400">
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 61 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h1>
          <h1 data-aos="fade-right" data-aos-delay="600">
            <span>
              <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 62 "); ?>
              <?php foreach ($result as $row) : ?>
                <?= $row['materi']; ?>
              <?php endforeach;
              ?>
            </span>
          </h1>
          <p data-aos="fade-up" data-aos-delay="800">
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 63 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
            <strong>
              <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 64 "); ?>
              <?php foreach ($result as $row) : ?>
                <?= $row['materi']; ?>
              <?php endforeach;
              ?>
            </strong>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 65 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
          <a href="http://localhost/sentrabatik/pages/list.php" data-aos="fade-up" data-aos-delay="1000">Get Started</a>
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
        <div class="text-img" data-aos="fade-left" data-aos-delay="1000">
          <figure>
            <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 1 "); ?>
            <?php foreach ($result as $row) :
              $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
              echo "<img src='$src' />";
            ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </figure>
        </div>
      </div>
    </div>

  </section>
  <!-- end banner -->

  <!-- Services  -->
  <div id="service" class="Services">

    <div class="row">
      <div class="col-md-12">
        <div class="titlepage">
          <h2 data-aos="fade-left" data-aos-delay="200">
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 66 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h2>
          <p data-aos="fade-right" data-aos-delay="400">
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 67 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="200">
        <div class="Services-box">
          <i>
            <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 2 "); ?>
            <?php foreach ($result as $row) :
              $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
              echo "<img src='$src' width='60px' height='60px' alt='#' />";
            ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </i>
          <h3>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 68 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h3>
          <p>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 69 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="400">
        <div class="Services-box">
          <i>
            <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 3 "); ?>
            <?php foreach ($result as $row) :
              $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
              echo "<img src='$src' width='50px' height='65px' alt='#' />";
            ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </i>
          <h3>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 70 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h3>
          <p>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 71 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="600">
        <div class="Services-box">
          <i>
            <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 4 "); ?>
            <?php foreach ($result as $row) :
              $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
              echo "<img src='$src' width='60px' height='60px' alt='#' />";
            ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </i>
          <h3>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 72 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h3>
          <p>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 73 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="800">
        <div class="Services-box">
          <i>
            <?php $i = 1; ?>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_gallery = 5 "); ?>
            <?php foreach ($result as $row) :
              $src = "http://localhost/sentrabatik/admin/image/" . $row['foto'];
              echo "<img src='$src' width='60px' height='60px' alt='#' />";
            ?>
              <?php $i++; ?>
            <?php endforeach; ?>
          </i>
          <h3>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 74 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </h3>
          <p>
            <?php $result = mysqli_query($koneksi, "SELECT * FROM materi WHERE id_materi = 75 "); ?>
            <?php foreach ($result as $row) : ?>
              <?= $row['materi']; ?>
            <?php endforeach;
            ?>
          </p>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- end Servicess -->