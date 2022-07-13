<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../login/login.php");
  exit;
}

require '../login/functions.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
  <title>Tampilan Admin</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!--fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="font/font/flaticon.css">
</head>

<style>
  body {
    position: relative;
    overflow-x: hidden;
    background: #FBDFBA;
    font-family: 'Roboto', sans-serif;
  }

  a:hover {
    color: white;
    text-decoration: none;
  }

  body,
  html {
    height: 100%;
  }

  /*---------------------------------
        sidebar
        ----------------------*/

  #sidebar-wrapper {
    z-index: 1000;
    height: 100%;
    width: 0px;
    left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #302d2a;
    transition: all 0.5s ease;
  }

  #sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #222e3c;
  }

  #sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color: #989898;
    border-radius: 10px;
  }

  .sidebar-brand {
    font-weight: 600;
    font-size: 1.15rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: #f8f9fa;
  }

  .sidebar-header {
    text-transform: capitalize;
    padding: 1.5rem 1.5rem .375rem !important;
    font-size: 14px;
    color: #ced4da;
  }

  .navbar-nav>li>a,
  .submenu-box ul li a {
    color: gray !important;
    text-transform: capitalize;
    font-size: 14px;
    padding: 10px 10px 10px 20px !important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
    font-family: 'Roboto', sans-serif;
    letter-spacing: .2px;
  }

  .submenu-box ul li a {
    padding: 4px 10px 4px 20px !important;
    color: #c1c1c1 !important;
  }

  .navbar-nav>li>a.active {
    color: white !important;
    background: linear-gradient(90deg, rgba(210, 155, 33, 0.5),  50%, transparent);
    border-left: 4px solid #a87a41;
  }

  .navbar-nav .has-sub>a.collapsed::after {
    transition: 0.4s ease;
  }

  .navbar-nav .has-sub>a.collapsed::after {
    color: gray;
    font-size: 10px;
    content: "\f078";
  }

  .navbar-nav .has-sub>a.collapsed::after {
    color: gray;
  }

  .navbar-nav .has-sub>a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color: gray;
    display: block;
    content: "\f077";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
  }

  #wrapper.toggled {
    padding-left: 270px;
  }

  .toggled#sidebar-wrapper {
    width: 270px !important;
    height: 100%;
    left: 0px;
    overflow-y: auto;
    overflow-x: hidden;
    transition: all 0.5s ease;
  }

  .navbar-nav li {
    display: block !important;
    margin: 2px 0px;
  }

  .nav-item .nav-link {
    display: block;
    color: white !important;
    text-transform: capitalize;
    text-decoration: none;
    padding: 6px 10px;
    transition: 0.4s ease;
  }

  .navbar-nav>li>a i:before {
    margin: 0px 5px 0px 0px;
    font-size: 14px;
  }

  /*---------------------------------
        sidebar
        ----------------------*/

  /*---------------------------------
        main-content
        ----------------------*/

  #page-content-wrapper {
    width: 100%;
    transition: all 0.5s ease;
  }

  #wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

    transition: all 0.5s ease;
  }

  .toggled#page-content-wrapper {
    margin-left: 270px;
    transition: all 0.5s ease;
  }

  @media only screen and (min-width:992px) {
    .toggled#page-content-wrapper {
      width: calc(100% - 270px);
    }
  }

  /*---------------------------------
        main-content
        ----------------------*/

  /*---------------------------------
        cross-bar animation
        ----------------------*/

  .nav-icon1 {
    z-index: 999;
    position: relative;
    display: block;
    width: 23px;
    margin: 0px 30px 0px 25px;
    cursor: pointer;
    height: 25px;
  }

  .nav-icon1 span {
    position: absolute;
    top: 0;
    width: 100%;
    height: 3px;
    cursor: pointer;
    background-color: white;
    left: 0;
    transform: rotate(0deg);
    transition: .30s ease-in-out;
  }

  .nav-icon1:hover span:nth-of-type(1) {
    top: -3px
  }

  .nav-icon1:hover span:nth-of-type(3) {
    top: 19px;
  }

  .nav-icon1 span:nth-of-type(1) {
    top: 0;
  }

  .nav-icon1 span:nth-of-type(2) {
    top: 8px;
  }

  .nav-icon1 span:nth-of-type(3) {
    top: 16px;
  }

  .nav-icon1.open span:nth-of-type(1) {
    top: 8px;
    transform: rotate(135deg);
  }

  .nav-icon1.open span:nth-of-type(2) {
    top: 8px;
    opacity: 0;
    left: -30px;
  }

  .nav-icon1.open span:nth-of-type(3) {
    top: 8px;
    transform: rotate(-135deg);
  }

  /*---------------------------------
        cross-bar animation
        ----------------------*/

  /*---------------------------------
        header navbar design
        ----------------------*/
  .my-navbar {
    padding: 0px;
    background-color: #a87a41;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .16);
  }

  .text-gray-600 {
    color: #858796 !important;
  }

  .nav-link .img-profile {
    height: 50px;
    width: 100px;
  }

  .navbar-nav>li>a>i {
    font-size: 18px;
    color: #b3b3b3;
    margin: 8px 0px 0px 0px;
    padding: 0px;
  }

  .badge-counter {
    position: absolute;
    transform: scale(.7);
    transform-origin: top right;
    right: 6px;
    margin-top: 4px;
  }

  .dropdown,
  .dropleft,
  .dropright,
  .dropup {
    position: relative;
  }

  .nav-flag,
  .nav-icon {
    padding: .1rem .8rem;
    display: block;
    font-size: 1.5rem;
    color: #6c757d;
    transition: background .1s ease-in-out, color .1s ease-in-out;
    line-height: 1.4;
  }

  .navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
  }

  .navbar-nav .dropdown-menu {
    position: static;
    float: none;
  }

  .dropdown-menu-lg {
    min-width: 20rem;
  }

  .position-relative {
    position: relative !important;
  }

  .nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, .05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top .1s ease-out;
    font-size: .675rem;
    color: #fff;
  }

  /*---------------------------------
        footer
        ----------------------*/

  footer.footer {
    padding: 1rem .875rem;
    direction: ltr;
    background: #fff;
  }

  footer.footer ul {
    margin: 0px;
    list-style: none;
  }

  .footer ul li {
    display: inline-block;
    margin: 0px 7px;
  }

  .text-muted {
    color: #6c757d !important;
    font-size: 14px;
  }

  /*---------------------------------
        footer
        ----------------------*/
</style>

<body>
  <div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
      <div class="simplebar-content" style="padding: 0px;">
        <a class="sidebar-brand" href="../indexadmin.php">
          <span class="align-middle">Zona Batik</span>
        </a>
        <ul class="navbar-nav align-self-stretch">
          <li class="">
            <a class="nav-link text-left active" href="indexadmin.php" role="button" aria-haspopup="true" aria-expanded="false" href="dashboard.php">
              <i class="flaticon-bar-chart-1"></i> Dashboard
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" href="datakota/datakota.php" role="button">
              <i class="flaticon-bar-chart-1"></i> Kota
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" href="datapenjual/datapenjual.php" role="button">
              <i class="flaticon-bar-chart-1"></i> Penjual
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" href="datamateri/datamateri.php" role="button">
              <i class="flaticon-bar-chart-1"></i> Materi
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" href="datagallery/datagallery.php" role="button">
              <i class="flaticon-bar-chart-1"></i> Gallery
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" href="../login/registrasi.php" role="button">
              <i class="flaticon-bar-chart-1"></i> Registrasi
            </a>
          </li>
          <li class="">
            <a class="nav-link text-left" role="button" href="../login/logout.php">
              <i class="flaticon-map"></i> LogOut
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div id="content">
        <div class="container-fluid p-0 px-lg-0 px-md-0">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light my-navbar">

            <!-- Sidebar Toggle (Topbar) -->
            <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                  <img class="img-profile rounded-circle" src="../../assets/img/logo/zona1.png">
                </a>
              </li>

            </ul>

          </nav>

          <!-- isi -->
          <div class="container">
            <br><br><br><br><br><br>
            <center>
              <h2>Selamat Datang Di Halaman Admin</h2>
            </center>
            <center>
              <h2>Zona Batik</h2>
            </center>
            <br><br><br><br><br><br>
            <center>
              <p>Anda Telah Login Sebagai Admin</p>
            </center>
            <center>
              <p>Selamat Bekerja Semoga Hari Kamu Menyenangkan :))</p>
            </center>
          </div>
        </div>
        <!-- /#wrapper -->





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


        <script>
          $('#bar').click(function() {
            $(this).toggleClass('open');
            $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');

          });
        </script>

</body>

</html>