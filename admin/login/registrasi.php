<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('User baru berhasil ditambahkan!);
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

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
            overflow-x:hidden;
            background: #FDDFB9;
            font-family: 'Roboto', sans-serif;
        }
        a:hover{
        color:white;
        text-decoration:none;
        }
        body,
        html { height: 100%;}

        /*---------------------------------
        sidebar
        ----------------------*/

        #sidebar-wrapper {
            z-index: 1000;
            height: 100%;
            width:0px;
            left: -50px;
            overflow-y: auto;
            overflow-x: hidden;
            background: #222e3c;
            transition: all 0.5s ease;
        }
        #sidebar-wrapper::-webkit-scrollbar {
            width: 8px;
            background: #222e3c;
        }
        #sidebar-wrapper::-webkit-scrollbar-thumb {
            background-color:#989898;
            border-radius:10px;
        }
        .sidebar-brand {
            font-weight: 600;
            font-size: 1.15rem;
            padding: 1.15rem 1.5rem;
            display: block;
            color: #f8f9fa;
        }
        .sidebar-header{
            text-transform:capitalize;
            padding: 1.5rem 1.5rem .375rem!important;
            font-size: 14px;
            color: #ced4da;
        }
        .navbar-nav > li > a ,.submenu-box ul li a{
            color:gray!important;
            text-transform: capitalize;
            font-size: 14px;
            padding:10px 10px 10px 20px!important;
            display: block;
            font-weight: 400;
            position: relative;
            z-index: 2;
            font-family: 'Roboto', sans-serif;
            letter-spacing: .2px;
        }
        .submenu-box ul li a{
        padding:4px 10px 4px 20px!important;
        color:#c1c1c1!important;
        }
        .navbar-nav > li > a.active{
            color: white !important;
            background: linear-gradient(90deg, rgba(210, 155, 33, 0.5),  50%, transparent);
            border-left: 4px solid #a87a41;
        }
        .navbar-nav .has-sub > a.collapsed::after {
            transition: 0.4s ease;
        }
        .navbar-nav .has-sub > a.collapsed::after {
            color:gray;
            font-size: 10px;
            content: "\f078";
        }
        .navbar-nav .has-sub > a.collapsed::after {
        color:gray;
        }
        .navbar-nav .has-sub > a::after {
            position: absolute;
            right: 0px;
            top: 50%;
            height: 30px;
            width: 30px;
            text-align: center;
            color:gray;
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
            width:270px!important;
            height: 100%;
            left: 0px;
            overflow-y:auto;
            overflow-x:hidden;
            transition: all 0.5s ease;
        }
        .navbar-nav li{
        display:block!important;
        margin:2px 0px;
        }
        .nav-item .nav-link{
            display:block;
            color:white!important;
            text-transform:capitalize;
            text-decoration: none;
            padding:6px 10px; 
            transition:0.4s ease;	
        }
        .navbar-nav > li > a i:before{
        margin:0px 5px 0px 0px;
        font-size:14px;
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
        .toggled#page-content-wrapper{
        margin-left:270px;
        transition: all 0.5s ease;
        }
        @media only screen and (min-width:992px){
        .toggled#page-content-wrapper{
            width:calc(100% - 270px); 
            }
        }

        /*---------------------------------
        main-content
        ----------------------*/

        /*---------------------------------
        cross-bar animation
        ----------------------*/

        .nav-icon1{
        z-index: 999;
        position:relative;
        display: block;
        width:23px;
        margin:0px 30px 0px 25px;
        cursor:pointer;
        height: 25px;
        }
        .nav-icon1 span{
        position:absolute;
        top:0;
        width:100%;
        height:3px;
        cursor:pointer;
        background-color:white;
        left:0;
        transform:rotate(0deg);
        transition:.30s ease-in-out;
        }
        .nav-icon1:hover span:nth-of-type(1){
        top:-3px
        }
        .nav-icon1:hover span:nth-of-type(3){
        top:19px;
        }
        .nav-icon1 span:nth-of-type(1){
        top:0;
        }
        .nav-icon1 span:nth-of-type(2){
        top:8px;
        }
        .nav-icon1 span:nth-of-type(3){
        top:16px;
        }
        .nav-icon1.open span:nth-of-type(1){
        top:8px;
        transform:rotate(135deg);
        }
        .nav-icon1.open span:nth-of-type(2){
        top:8px;
        opacity:0;
        left:-30px;
        }
        .nav-icon1.open span:nth-of-type(3){
        top:8px;
        transform:rotate(-135deg);
        }

        /*---------------------------------
        cross-bar animation
        ----------------------*/

        /*---------------------------------
        header navbar design
        ----------------------*/
        .my-navbar{
        padding:0px;
        background-color:#a87a41;
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.16);
        }
        .text-gray-600 {
            color: #858796!important;
        }
        .nav-link .img-profile {
            height:50px;
            width:100px;
        }
        .navbar-nav > li > a >i{
            font-size: 18px;
            color:#b3b3b3;
            margin:8px 0px 0px 0px;
            padding:0px;
        }
        .badge-counter {
            position: absolute;
            transform:scale(.7);
            transform-origin: top right;
            right:6px;
            margin-top:4px;
        }
        .dropdown, .dropleft, .dropright, .dropup {
            position: relative;
        }
        .nav-flag, .nav-icon {
            padding: .1rem .8rem;
            display: block;
            font-size: 1.5rem;
            color: #6c757d;
            transition: background .1s ease-in-out,color .1s ease-in-out;
            line-height: 1.4;
        }
        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-nav .dropdown-menu {
            box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
        }
        .navbar-nav .dropdown-menu {
            position: static;
            float: none;
        }
        .dropdown-menu-lg {
            min-width: 20rem;
        }
        .position-relative {
            position: relative!important;
        }
        .nav-item .indicator {
            background: #3b7ddd;
            box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
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
            margin:0px;
            list-style:none;
        }
        .footer ul  li{
        display:inline-block;
        margin:0px 7px;
        }
        .text-muted {
            color: #6c757d!important;
            font-size:14px;
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
			<a class="sidebar-brand" href="../admin/indexadmin.php">
                <span class="align-middle">Zona Batik</span>
            </a>
			<ul class="navbar-nav align-self-stretch">
                <li class=""> 
                    <a class="nav-link text-left" href="../admin/indexadmin.php" role="button" aria-haspopup="true" aria-expanded="false" href="dashboard.php">
                        <i class="flaticon-bar-chart-1"></i>   Dashboard 
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left" href="../admin/datakota/datakota.php" role="button">
                        <i class="flaticon-bar-chart-1"></i>   Kota
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left" href="../admin/datapenjual/datapenjual.php" role="button">
                        <i class="flaticon-bar-chart-1"></i>   Penjual
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left" href="../admin/datamateri/datamateri.php" role="button">
                        <i class="flaticon-bar-chart-1"></i>   Materi
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left" href="../admin/datagallery/datagallery.php" role="button">
                        <i class="flaticon-bar-chart-1"></i>   Gallery
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left active" href="registrasi.php" role="button" >
                        <i class="flaticon-bar-chart-1"></i>   Registrasi
                    </a>
                </li>
                <li class=""> 
                    <a class="nav-link text-left"  role="button" href="logout.php">
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
                    <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
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
        <style>
    
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, dl, dt, dd, ol, nav ul, nav li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
  display: block;
}

ol, ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/*-- start editing from here --*/
a {
  text-decoration: none;
}

.txt-rt {
  text-align: right;
}

/* text align right */
.txt-lt {
  text-align: left;
}

/* text align left */
.txt-center {
  text-align: center;
}

/* text align center */
.float-rt {
  float: right;
}

/* float right */
.float-lt {
  float: left;
}

/* float left */
.clear {
  clear: both;
}

/* clear float */
.pos-relative {
  position: relative;
}

/* Position Relative */
.pos-absolute {
  position: absolute;
}

/* Position Absolute */
.vertical-base {
  vertical-align: baseline;
}

/* vertical align baseline */
.vertical-top {
  vertical-align: top;
}

/* vertical align top */
nav.vertical ul li {
  display: block;
}

/* vertical menu */
nav.horizontal ul li {
  display: inline-block;
}

/* horizontal menu */
img {
  max-width: 100%;
}

/*-- end reset --*/
body {
  background: #FBDFBA;
  /* fallback for old browsers */
  /*background: -webkit-linear-gradient(to top, #cecfd7, #a87a41);
  background: -moz-linear-gradient(to top, #cecfd7, #a87a41);
  background: -o-linear-gradient(to top, #cecfd7, #a87a41);
  background: linear-gradient(to top, #cecfd7, #a87a41);
  background-size: cover;
  background-attachment: fixed;*/
  font-family: 'Roboto', sans-serif;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: #a87a41;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: 'Roboto', sans-serif;
}

/*-- main --*/
.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
  background: #a87a41;
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #a87a41;
  background: #fff1e6;
  outline: none;
  border: 1px solid #a87a41;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}

input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: #f2e5da;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}

/*-- //main --*/
/*-- checkbox --*/
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #ad7836;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}

input.checkbox:before {
  content: "";
  position: absolute;
  width: 1.2em;
  height: 1.2em;
  background: inherit;
  cursor: pointer;
}

input.checkbox:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  z-index: 1;
  width: 1.2em;
  height: 1.2em;
  border: 1px solid #fff;
  -webkit-transition: .4s ease-in-out;
  -moz-transition: .4s ease-in-out;
  -o-transition: .4s ease-in-out;
  transition: .4s ease-in-out;
}

input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: #fff;
  border-top-color: transparent;
  border-right-color: transparent;
}

.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}

@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}


.colorlibcopy-agile {
  margin: 2em 0 1em;
  text-align: center;
}

.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}

/*-- //copyright --*/
.wrapper {
  position: relative;
  overflow: hidden;
}

.colorlib-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.colorlib-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: #a87a41;
  bottom: -160px;
  -webkit-animation: square 20s infinite;
  -moz-animation: square 250s infinite;
  -o-animation: square 20s infinite;
  -ms-animation: square 20s infinite;
  animation: square 20s infinite;
  -webkit-transition-timing-function: linear;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  transition-timing-function: linear;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.colorlib-bubbles li:nth-child(1) {
  left: 10%;
}

.colorlib-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  -o-animation-delay: 2s;
  -ms-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  -moz-animation-duration: 17s;
  -o-animation-duration: 17s;
  animation-duration: 17s;
}

.colorlib-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
  -moz-animation-delay: 4s;
  -o-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s;
}

.colorlib-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
  -moz-animation-duration: 22s;
  -o-animation-duration: 22s;
  -ms-animation-duration: 22s;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}

.colorlib-bubbles li:nth-child(5) {
  left: 70%;
}

.colorlib-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  -o-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}

.colorlib-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
  -moz-animation-delay: 7s;
  -o-animation-delay: 7s;
  -ms-animation-delay: 7s;
  animation-delay: 7s;
}

.colorlib-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
  -moz-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-duration: 40s;
  -moz-animation-duration: 40s;
  animation-duration: 40s;
}

.colorlib-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}

.colorlib-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

/*-- responsive-design --*/
@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] {
    width: 94%;
  }
}

@media(max-width:1366px) {
  h1 {
    font-size: 2.6em;
  }

  .agileits-top {
    padding: 2.5em;
  }

  .main-agileinfo {
    margin: 2em auto;
  }

  .main-agileinfo {
    width: 36%;
  }
}

@media(max-width:1280px) {
  .main-agileinfo {
    width: 40%;
  }
}

@media(max-width:1080px) {
  .main-agileinfo {
    width: 46%;
  }
}

@media(max-width:1024px) {
  .main-agileinfo {
    width: 49%;
  }
}

@media(max-width:991px) {
  h1 {
    font-size: 2.4em;
  }

  .main-w3layouts {
    padding: 2em 0 1em;
  }
}

@media(max-width:900px) {
  .main-agileinfo {
    width: 58%;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 93%;
  }
}

@media(max-width:800px) {
  h1 {
    font-size: 2.2em;
  }
}

@media(max-width:736px) {
  .main-agileinfo {
    width: 62%;
  }
}

@media(max-width:667px) {
  .main-agileinfo {
    width: 67%;
  }
}

@media(max-width:600px) {
  .agileits-top {
    padding: 2.2em;
  }

  input.email, input.text.w3lpass {
    margin: 1.5em 0;
  }

  input[type="submit"] {
    margin: 2em 0;
  }

  h1 {
    font-size: 2em;
    letter-spacing: 3px;
  }
}

@media(max-width:568px) {
  .main-agileinfo {
    width: 75%;
  }

  .colorlibcopy-agile p {
    padding: 0 2em;
  }
}

@media(max-width:480px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 3px;
  }

  .agileits-top {
    padding: 1.8em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 91%;
  }

  .agileits-top p {
    font-size: 0.9em;
  }
}

@media(max-width:414px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 2px;
  }

  .main-agileinfo {
    width: 85%;
    margin: 1.5em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  .wthree-text ul li, .wthree-text ul li:nth-child(2) {
    display: block;
    float: none;
  }

  .wthree-text ul li:nth-child(2) {
    margin-top: 1.5em;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
    letter-spacing: 3px;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
  }

  .colorlibcopy-agile {
    margin: 1em 0 1em;
  }
}

@media(max-width:384px) {
  .main-agileinfo {
    width: 88%;
  }

  .colorlibcopy-agile p {
    padding: 0 1em;
  }
}

@media(max-width:375px) {
  .agileits-top p {
    letter-spacing: 0px;
  }
}

@media(max-width:320px) {
  .main-w3layouts {
    padding: 1.5em 0 0;
  }

  .agileits-top {
    padding: 1.2em;
  }

  .colorlibcopy-agile {
    margin: 0 0 1em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 89.5%;
    font-size: 0.85em;
  }

  h1 {
    font-size: 1.7em;
    letter-spacing: 0px;
  }

  .main-agileinfo {
    width: 92%;
    margin: 1em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;
  }

  .colorlibcopy-agile p {
    font-size: .85em;
  }

  .wthree-text label {
    font-size: 0.85em;
  }

  .main-w3layouts {
    padding: 1em 0 0;
  }
}
</style>


<!DOCTYPE html>
<html>
<head>
<title>Registrasi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
 <div id="wrapper">
   <div class="overlay"></div>
    
  
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Registrasi</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<center><form action="#" method="post">
					<ul>
            <li>
              <label for="username">Username :</label>
              <input type="text" name="username" id="username" required>
            </li><br>
            <li>
              <label for="password">Password :</label>
              <input type="password" name="password" id="password" required>
            </li><br>
            <li>
              <label for="password2">Konfirmasi Password :</label>
              <input type="password" name="password2" id="password2" required>
            </li><br>
            <li>
              <label for="level">Level :</label>
              <th>
                <select name="level" id="level" required>
                  <option value="">--Pilih Level--</option>
                  <option value="admin">Admin</option>
                  <option value="pengurus">Pengurus</option>
                </select>
              </th>
            </li><br><br>
            <li>
              <button type="submit" name="register">Register!</button>
            </li>
          </ul>
				</form></center>
				<!-- <p>Don't have an Account? <a href="#"> Login Now!</a></p> -->
			</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
    <!-- /#wrapper -->
  
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

  </body>
</html>