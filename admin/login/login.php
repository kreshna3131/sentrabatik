<!-- CSS -->
<style>
  body{
    background : #FDDFB9;
  }
  .login-div {
    text-align: center;
    width: 350px;
    height: 550px;
    margin-top: 30px;
    padding: 30px 35px 35px 35px;
    border-radius: 40px;
    background: #a87a41;
    margin-left: -25px;
    margin-bottom: 30px;
  }

  .title {
    text-align: center;
    font-size: 36px;
    letter-spacing: 0.5px;
    color: #ffffff;
  }

  .sub-title {
    font-size: 25px;
    padding-top: 7px;
    letter-spacing: 1px;
    color: #ffffff;
  }

  .fields {
    width: 100%;
    padding: 25px 5px 5px 5px;
  }

  .fields input {
    border: none;
    outline: none;
    background: none;
    font-size: 18px;
    color: black;
    padding: 20px 10px 20px 5px;
  }

  .username,
  .password {
    margin-bottom: 30px;
    border-radius: 25px;
    background-color : white;
  }

  .fields svg {
    height: 22px;
    margin: 0 10px -3px 25px;
  }

  .signin-button {
    outline: none;
    border: none;
    cursor: pointer;
    width: 100%;
    height: 60px;
    border-radius: 30px;
    font-size: 20px;
    font-weight: 700;
    font-family: 'lato', sans-serif;
    color: #fff;
    text-align: center;
    background: #8e5b1c;
    transition: 0.5;
  }

  .signin-button:hover {
    background: #e0c28c;
  }

  .signin-button:active {
    background: #1da88a;
  }

  .alert {
    background: #e44e4e;
    color: white;
    text-align: center;
    width: 350px;
    height: 20px;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 5px 35px 35px 35px;
    border-radius: 40px;
    margin-left: -25px;
  }
</style>

<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
  $username = $_COOKIE['username'];
  $password = $_COOKIE['password'];
}

if (isset($_SESSION["login"])) {
  header("Location: ../pengurus/indexpengurus.php");
  header("Location: ../admin/indexadmin.php");
  exit;
}

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $captcha = $_POST["kodecaptcha"];

  $result = mysqli_query($conn, "SELECT * FROM adminn WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session

      if ($_SESSION["code"] === $_POST["kodecaptcha"]) {
        $_SESSION["code"] = true;
        $_SESSION["login"] = true;

        if (!empty($_POST['remember'])) {

          // buat cookie
          setcookie("username", $username, time() + (60 * 60 * 24 * 30), "/");
          setcookie("password", $password, time() + (60 * 60 * 24 * 30), "/");
        } else {
          if (isset($_COOKIE["username"])) {
            setcookie("username", "");
          }
          if (isset($_COOKIE["password"])) {
            setcookie($password, "");
          }
        }
        if ($row['level'] == "admin") {
          // buat session login dan username
          $_SESSION['username'] = $username;
          $_SESSION['level'] = "admin";
          // alihkan ke halaman dashboard admin
          header("location:../admin/indexadmin.php");

          // cek jika user login sebagai pegawai
        }
        if ($row['level'] == "pengurus") {
          // buat session login dan username
          $_SESSION['username'] = $username;
          $_SESSION['level'] = "pengurus";
          // alihkan ke halaman dashboard pegawai
          header("location:../pengurus/indexpengurus.php");

        } else {
          header("Location: login.php");
          exit;
        }
      }
    }
  }

  $error = true;
}



?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
</head>

<body>
  <?php if (isset($error)) : ?>
    <center>
      <div class='alert'>
        <p>Username, Password, Captcha Anda Belum Benar !!!</p>
      </div>
    </center>
  <?php endif; ?>

  <center>
    <form action="" method="post">
      <div class="login-div">
        <div class="title">Zona Batik</div>
        <div class="sub-title">Admin</div>
        <div class="fields">
          <div class="username">
            <input type="username" name="username" id="username" value="<?php if (isset($_COOKIE["username"])) {
                                                                          echo $_COOKIE["username"];
                                                                        } ?>" placeholder="Username">
          </div>
          <div class="password">
            <input type="password" name="password" id="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                          echo $_COOKIE["password"];
                                                                        } ?>" placeholder="Password">
          </div>
          <div>
            <!-- tentukan letak script generate gambar -->
            <td><img src="captcha.php" alt="gambar" /> </td>
          </div><br>
          <div class="username">
            <input name="kodecaptcha" value="" maxlength="5" placeholder="Masukkan Captcha" />
          </div>
          <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
            <br><br>
          </div>
        </div>
        <button class="signin-button" type="submit" name="login">Login</button>
      </div>
    </form>
  </center>
</body>

</html>