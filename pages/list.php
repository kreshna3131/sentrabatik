<?php
include "../templates/header.php";
?>
<style>
  @media (min-width: 769px) {
    body {
      background: #FFF1E6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .containerlist {
      width: 900px;
      height: 470px;
      background: rgb(248, 248, 248);
      display: flex;
      align-items: center;
      border-radius: 10px;
      position: relative;
      border: 1px solid #a87a41;
    }

    .containerlist h1 {
      text-align: center;
    }

    .judullist h1 {
      font-family: 'Karla', sans-serif;
      font-weight: 900;
    }

    ul {
      width: 100%;
      margin-left: 20px;
      list-style: none;
    }

    ul a {
      width: 80%;
      height: 60px;
      background: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.100);
      padding: 0 1em;
      display: flex;
      align-items: center;
      margin: 1em 2em;
      z-index: 1;
      cursor: pointer;
      position: relative;
      transition: all .4s;
      font-size: 29px;
      color: #a87a41;
      background: rgb(248, 248, 248);
      border-radius: 10px;
      font-family: 'Spectral', serif;
    }

    ul a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -30px;
      width: 10px;
      height: 100%;
      background: #a87a41;
      z-index: -1;
      transition: all .4s;
      border-radius: 10px;
    }

    ul a:hover::before {
      width: 100%;
    }

    ul a:hover {
      overflow: hidden;
      color: white;
      text-decoration: none;
    }
  }

  /* mobile version */
  @media (max-width: 768px) {
    body {
      background: #FFF1E6;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      margin-top: 10px;
    }

    .containerlist {
      height: 470px;
      background: rgb(248, 248, 248);
      display: flex;
      align-items: center;
      border-radius: 10px;
      position: relative;
    }

    .containerlist h1 {
      text-align: center;
    }

    .judullist h1 {
      font-family: 'Karla', sans-serif;
      font-weight: 900;
      font-size: 6vw;
    }

    ul {
      width: 100%;
      margin: auto;
      list-style: none;
    }

    ul a {
      width: 80%;
      height: 60px;
      background: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.100);
      padding: 0 1em;
      display: flex;
      align-items: center;
      margin: 1em 2em;
      z-index: 1;
      cursor: pointer;
      position: relative;
      transition: all .4s;
      font-size: 5vw;
      color: #a87a41;
      background: rgb(248, 248, 248);
      border-radius: 10px;
      font-family: 'Spectral', serif;
      left: -5vw;
    }

    ul a:hover {
      overflow: hidden;
      color: white;
      text-decoration: none;
    }
  }
</style>

<div class="container containerlist">
  <div class="row">
    <div class="col-md-12">
      <div class="judullist" data-aos="fade-up" data-aos-duration="2000">
        <h1>Pilih Kota yang Dituju</h1>
      </div>
    </div>
    <div class="col-md-12">
      <ul>
        <a href="http://localhost/sentrabatik/kota/solo.php" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Solo City</a>
        <a href="http://localhost/sentrabatik/kota/pekalongan.php" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">Pekalongan City</a>
        <a href="http://localhost/sentrabatik/kota/cirebon.php" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">Cirebon City</a>
        <a href="http://localhost/sentrabatik/kota/yogyakarta.php" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="800">Yogyakarta City</a>
      </ul>
    </div>
  </div>
</div>

<?php
include "../templates/footer.php";
?>