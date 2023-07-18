<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['user']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}