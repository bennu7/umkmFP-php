<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "umkm";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if ($conn->connect_errno) {
  echo "Koneksi database gagal: " . $conn->connect_error;
  exit();
} else {
  // echo "<br>";
  // echo "koneksi berhasil";
  echo "<br>";
}
