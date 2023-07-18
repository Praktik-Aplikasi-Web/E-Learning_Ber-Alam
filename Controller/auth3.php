<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['jenis']) ){
  $_SESSION['msg'] = 'anda harus memiliki nilai untuk mengakses halaman ini';
  header('Location: post-test.php');
}