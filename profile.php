<?php
require 'env.php';
session_start();
$sessionId = $_SESSION["id"];
// convert ke int
$id = (int)$sessionId["id"];
// var_dump($id);
$findId = "SELECT * FROM user WHERE id = $id";
$resultId = mysqli_query($conn, $findId);
// var_dump(mysqli_fetch_assoc($resultId));
$user =  mysqli_fetch_assoc($resultId);

// update password
if (isset($_POST['updatePassword'])) {
  $password = $_POST['npassword'];
  $password2 = $_POST['cnpassword'];


  if ($password !== $password2) {
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "UPDATE user SET 
        password = '$password' 
        WHERE id = $id
        ";

  mysqli_query($conn, $query);
}

if (isset($_POST['updateEmailAlamat'])) {
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];

  $query = "UPDATE user SET 
        email = '$email',
        alamat = '$alamat'
        WHERE id = $id
        ";

  mysqli_query($conn, $query);
}




?>

<?php include("layout/header.php") ?>

<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row g-2 align-items-center">
              <div class="col-auto">
                <span class="avatar avatar-lg" style="background-image: url(https://waskita.test/profile.png)"></span>
              </div>
              <div class="col">
                <h4 class="card-title m-0">
                  <a href="#"><?= $user["name"] ?></a> <span class="badge bg-green"></span>
                </h4>
                <div class="small mt-1">
                  <?= $user["email"] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Pengaturan Akun</h3>
          </div>
          <div class="card-body">
            <form action="profile.php" method="POST">
              <div class="form-group mb-3 ">
                <label class="form-label">Nama Lengkap</label>
                <div>
                  <input type="text" class="form-control" aria-describedby="" placeholder="" value="<?= $user["name"] ?>" readonly>
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label" for="email">Alamat Email</label>
                <div>
                  <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" value="<?= $user["email"] ?>" autocomplete="off">
                  <div class="invalid-feedback"></div>
                </div>
              </div>
              <div class="form-group mb-3 text-muted">
                <label class="form-label" for="alamat">Alamat rumah</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $user["alamat"] ?>">
                <!-- <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…">jl. bersama dia tapi tidak pernah bersatu rt 01 rw 10 kec bersama kelurahan tidak pasti kabupaten mengsedih</textarea> -->
              </div>
          </div>
          <div class="form-footer">
            <button type="submit" id="submit" class="btn btn-primary w-100" name="updateEmailAlamat">Ubah Email/Alamat Rumah</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row row-cards">
      <div class="col-md-12">
        <form action="" method="POST">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengaturan Kata Sandi</h3>
            </div>
            <div class="card-body">
              <div class="form-group mb-3 ">
                <label class="form-label">Kata Sandi sebelumnya</label>
                <div>
                  <input type="password" class="form-control" name="password" id="password" aria-describedby="" placeholder="" autocomplete="off">
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Kata Sandi Baru</label>
                <div>
                  <input type="password" class="form-control" name="npassword" id="npassword" aria-describedby="" placeholder="" autocomplete="off">
                </div>
              </div>
              <div class="form-group mb-3 ">
                <label class="form-label">Konfirmasi Kata Sandi Baru</label>
                <div>
                  <input type="password" class="form-control" name="cnpassword" id="cnpassword" aria-describedby="" placeholder="" autocomplete="off">
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" id="submit" class="btn btn-primary w-100" name="updatePassword">Ubah Kata
                  Sandi</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include("layout/footer.php") ?>