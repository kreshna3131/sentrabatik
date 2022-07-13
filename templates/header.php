<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- My Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Karla&family=Spectral:wght@500&display=swap" rel="stylesheet">

  <!-- CDN FONTAWESOME -->
  <script src="https://kit.fontawesome.com/cfd43ca04c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsz+ywDWZCvqsWgccV3gForBv0z+8dLJgyAHIhR35VZc2pM/gI1w==" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="icon" href="http://localhost/sentrabatik/assets/img/logobatik.png">
  <link rel="stylesheet" href="http://localhost/sentrabatik/assets/css/contact.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/sentrabatik/assets/css/solo.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
  <base rel="stylesheet" type="text/css" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script type="text/javascript" src="http://localhost/sentrabatik/assets/js/main.js"></script>

  <title>Sentra Batik Indonesia</title>
  <style>
    body {
      width: 100%;
      background-color: #fff1e6;
      opacity: 1;
      background-size: 50px 50px;
    }

    #loader {
      position: fixed;
      width: 100%;
      height: 100vh;
      z-index: 999999999;
      overflow: visible;
    }

    /* Latar Belakang */
    .overlay {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 11111;
      right: 0;
      top: 0;
      background-color: rgba(249, 253, 255, 0.9);
      overflow-x: hidden;
      transition: 0.7s;
    }

    /* pilihan navbar */
    .overlay-content {
      position: relative;
      top: 25%;
      width: 100%;
      text-align: center;
      margin-top: 30px;
    }

    /* navbar dibuka */
    .overlay a {
      padding: 8px;
      text-decoration: none;
      font-size: 36px;
      font-family: 'Karla', sans-serif;
      font-weight: bold;
      color: rgb(207, 3, 3);
      display: block;
      color: #a87a41;
      transition: 0.3s;
    }

    /* hover */
    .overlay a:hover,
    .overlay a:focus {
      /* color: #FE9001; */
      color: #FE9001;
    }

    /* tombol tutup */
    .overlay .closebtn {
      position: absolute;
      top: -8px;
      right: 31px;
      font-size: 60px;
    }

    .hamb {
      border: 3px solid #ece5d9;
      box-shadow: 0px 0px 5px 1px #aaaaaa;
      position: fixed;
      width: 70px;
      height: 70px;
      top: 15px;
      right: 20px;
      color: #ece5d9;
      background-color: #a87a41;
      border-radius: 50px;
      text-align: center;
      font-size: 1.5em;
      z-index: 1;
    }

    @media (max-width: 768px) {
      .hamb {
        top: 20px;
        left: 85vw;
      }
    }

    @media (max-width: 474px) {
      .hamb {
        top: 20px;
        left: 82vw;
      }
    }

    @media (max-width: 390px) {
      .hamb {
        top: 20px;
        left: 78vw;
      }
    }

    @media (max-width: 280px) {
      .hamb {
        top: 20px;
        left: 73vw;
      }
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <div id="loader"></div>
  <div id="content">
  </div>
  <!-- overlay -->
  <div id="myNav" class="overlay">
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <!-- Overlay content -->
    <div class="overlay-content">
      <a class="nav-link" href="http://localhost/sentrabatik/index.php">Home</a>
      <a class="link" href="http://localhost/sentrabatik/pages/list.php">Choose City</a>
      <a class="link" href="http://localhost/sentrabatik/pages/gallery.php">Gallery</a>
      <a class="link" href="http://localhost/sentrabatik/pages/about.php">About</a>
      <a class="link" href="http://localhost/sentrabatik/pages/contact.php">Contact Us</a>
    </div>
  </div>
  <span onclick="openNav()">
    <button type="button" class="btn hamb">
      <i class="fas fa-bars"></i>
    </button>
  </span>


  </nav>