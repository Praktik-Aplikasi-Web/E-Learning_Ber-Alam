<?php
//menyertakan file program koneksi.php pada register
require('../Controller/koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if (isset($_POST['validasi'])) {
  if (isset($_POST['register'])) {
    // menghilangkan backshlases
    $nama = stripslashes($_POST['nama']);
    //cara sederhana mengamankan dari sql injection
    $nama = mysqli_real_escape_string($con, $nama);
    $email    = stripslashes($_POST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $repass   = stripslashes($_POST['repass']);
    $repass   = mysqli_real_escape_string($con, $repass);
    $alamat     = stripslashes($_POST['alamat']);
    $alamat     = mysqli_real_escape_string($con, $alamat);
    $hp     = stripslashes($_POST['hp']);
    $hp     = mysqli_real_escape_string($con, $hp);
    //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
    if (!empty(trim($nama)) && !empty(trim($alamat)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass)) && !empty(trim($hp))) {
      //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
      if ($password == $repass) {
        //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
        if (cek_nama($nama, $con) == 0) {
          //hashing password sebelum disimpan didatabase
          $pass  = password_hash($password, PASSWORD_DEFAULT);
          //insert data ke database
          $query = "INSERT INTO users (nama,email, password, alamat, hp ) VALUES ('$nama','$email','$password', '$alamat', '$hp')";
          $result   = mysqli_query($con, $query);
          //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
          if ($result) {
            $_SESSION['nama'] = $nama;
            $reg =  "Akun anda berhasil terdaftar!!";
            echo "<script type='text/javascript'>alert('$reg');
            window.location.href='../view/login.php';</script>";

            //jika gagal maka akan menampilkan pesan error
          } else {
            $error =  "Register User Gagal!!";
            echo "<script type='text/javascript'>alert('$error');
            window.location.href='../view/registrasi.php';</script>";
          }
        } else {
          $error =  "Username sudah terdaftar!!";
          echo "<script type='text/javascript'>alert('$error');
          window.location.href='../view/registrasi.php';</script>";
        }
      } else {
        $error = "Password tidak sama!!";
        echo "<script type='text/javascript'>alert('$error');
        window.location.href='../view/registrasi.php';</script>";
      }
    } else {
      $error =  "Data tidak boleh kosong!!";
      echo "<script type='text/javascript'>alert('$error');
      window.location.href='../view/registrasi.php';</script>";
    }
  }
}
//fungsi untuk mengecek username apakah sudah terdaftar atau belum
function cek_nama($nama, $con)
{
  $nama = mysqli_real_escape_string($con, $nama);
  $query = "SELECT * FROM users WHERE nama = '$nama'";
  if ($result = mysqli_query($con, $query)) return mysqli_num_rows($result);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../CSS/registrasi.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/loader.css">

  <title>BER-ALAM|Registrasi</title>
</head>
<div id="loader-wrapper">
  <div class="spinner"></div>
</div>
<script>
  var loader = document.getElementById("loader-wrapper");

  window.addEventListener("load", function() {
    loader.style.display = "none";
  })
</script>

<body>



  <div class="container">
    <form class="form-container" action="" method="POST">
      <h3 class="text-judul">Daftar</h3>
      <div class="row mt-5">
        <div class="col-md-7">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama lengkap anda disini">
          </div>
        </div>
        <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" placeholder="Masukan Password anda disini">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email anda disini">
          </div>
        </div>

        <div class="col-md-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ulangi Password</label>
            <input name="repass" type="password" class="form-control" id="exampleInputPassword2" aria-describedby="emailHelp" placeholder="Ulangi password anda disini">
            <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat anda">
          </div>
        </div>

        <div class="col-md-4">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No Handphone</label>
            <input name="hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone">
          </div>
        </div>
      </div>


      <div class="mb-3 form-check">
        <input name='validasi' type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Saya menyetujui <span class="text-merah">syarat dan ketentuan</span> yang berlaku <span class="text-merah">*</span></label>
      </div>
      <div class="mt-5">
        <div class="row">
          <div class="col-md-6 d-grid">
            <button name="register" type="submit" class="btn btn-outline-primary">Daftar</button>
          </div>
          <div class="col-md-6 d-grid">
            <button type="submit" class="btn btn-outline-danger">Hapus Data</button>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <label>Sudah punya akun? <a href="login.php" class="text-login">Login disini</label>
      </div>
    </form>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#show-password').click(function() {
        if ($(this).is(':checked')) {
          $('#exampleInputPassword1').attr('type', 'text');
        } else {
          $('#exampleInputPassword1').attr('type', 'password');
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#show-password').click(function() {
        if ($(this).is(':checked')) {
          $('#exampleInputPassword2').attr('type', 'text');
        } else {
          $('#exampleInputPassword2').attr('type', 'password');
        }
      });
    });
  </script>
</body>

</html>