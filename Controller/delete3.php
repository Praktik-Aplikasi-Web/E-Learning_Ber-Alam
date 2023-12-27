<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from posttest where id='$id'";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
header("location:tabel_post.php");
?>