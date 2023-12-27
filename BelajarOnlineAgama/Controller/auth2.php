<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['modul']) ){
  $_SESSION['msg'] = 'anda harus memiliki nilai untuk mengakses halaman ini';
  header('Location: modul.php');
}