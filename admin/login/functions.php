<?php
// koneksi ke database
// urutannya string(nama host), username mysql, password, namadatabase
$conn = mysqli_connect("localhost", "root", "", "sentrabatik");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function registrasi($data)
{
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);
  $level = strtolower(stripslashes($data["level"]));


  // cek username sudah ada apa belum
  $result = mysqli_query($conn, "SELECT username FROM adminn WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('Username yang dipilih sudah terdaftar!');
            </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
            </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO adminn VALUES('', '$username', '$password', '$level')");

  return mysqli_affected_rows($conn);
}
