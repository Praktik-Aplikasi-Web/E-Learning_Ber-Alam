<?php

//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';

//mengecek apakah form disubmit atau tidak
if (isset($_POST['login'])) {
  // menghilangkan backshlases
  $email = stripslashes($_POST['email']);
  //cara sederhana mengamankan dari sql injection
  $email = mysqli_real_escape_string($con, $email);
  // menghilangkan backshlases
  $password = stripslashes($_POST['password']);
  //cara sederhana mengamankan dari sql injection
  $password = mysqli_real_escape_string($con, $password);

  // berfungsi menyeleksi data user dengan username dan password yang sesuai
  $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
  //berfungsi menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($sql);

  // berfungsi mengecek apakah username dan password ada pada database
  if ($cek > 0) {
    $data = mysqli_fetch_assoc($sql);

    // berfungsi mengecek jika user login sebagai admin
    if ($data['status'] == "admin") {
      // berfungsi membuat session
      $_SESSION['user'] =  $data['id'];
      $_SESSION['status'] = "admin";
      //berfungsi mengalihkan ke halaman admin
      header("location:../View/admin/halaman-admin.php");
      // berfungsi mengecek jika user login sebagai moderator
    } elseif ($data['status'] == NULL) {
      // berfungsi membuat session
      $_SESSION['user'] = $data['id'];
      $_SESSION['status'] = NULL;
      // berfungsi mengalihkan ke halaman moderator
      header("location:../View/user/halaman-user.php");
    } else {
      // berfungsi mengalihkan alihkan ke halaman login kembali
      $message = "data anda tidak terdaftar!!";
      echo "<script type='text/javascript'>alert('$message');
      window.location.href='../view/login.php';</script>";
    }
  } else {
    $message = "data anda tidak terdaftar!!";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='../view/login.php';</script>";
  }
}
