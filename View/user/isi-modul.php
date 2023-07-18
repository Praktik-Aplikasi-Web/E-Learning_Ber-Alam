<?php
require_once("./../../Controller/auth2.php");
include './../../Controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM modul WHERE nmodul = '" . $_SESSION['nmodul'] . "' ");
$d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/isi-modul.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>modul|<?php echo $d->nmodul ?></title>
</head>

<body>
    <ul>
        <li>
            <h1>BER-ALAM</h1>
        </li>
        <li><a href="halaman-user.php">HOME</a></li>
        <li><a href="modul.php">MODUL</a></li>
        <li><a href="post-test.php">POST-TEST</a></li>
        <li><a href="akun.php">PROFIL</a></li>
        <li><a href="../../Controller/logout.php">LOGOUT</a></li>
    </ul>

    <div class="header">
        <p class="text">MATERI PEMBELAJARAN</p>
        <p class="text2">Belajar agama islam.</p>
    </div>
    <div class="ket">
        <h1 class="tls">MATERI</h1>
    </div>

    <div class="konten">
        <h1 class="judul"><?php echo strtoupper($d->nmodul) ?></h1>
        <p class="edit">materi BER-ALAM</p>
        <p class="isi"><?php echo $d->pengertian ?></p>
        <p class="isi"><?php echo $d->p1 ?></p>
        <p class="isi"><?php echo $d->p2 ?></p>
        <p class="isi"><?php echo $d->p3 ?></p>
        <p class="isi"><?php echo $d->akhir ?></p>
    </div>
    <div class="tbl">
        <form class="form1" action="" method="POST">
            <input type="submit" name="back" value="KEMBALI" class="tombol1">
            <input type="submit" name="post" value="POST-TEST" class="tombol2">
    </div>
    </form>
    <?php
    if (isset($_POST['back'])) {
        $message = "Anda yakin akan kembali?";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='modul.php';</script>";
    }
    //menyertakan file program koneksi.php pada register
    require('../../Controller/koneksi.php');
    //inisialisasi session
    $validate = '';

    $query = mysqli_query($con, "SELECT * FROM posttest");
    $data = mysqli_fetch_assoc($query);

    $sql = mysqli_query($con, "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "' ");
    $do = mysqli_fetch_assoc($sql);

    if (isset($_POST['post'])) {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = $d->nmodul;
        $message = "Anda akan mengerjakan Post-Test";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='isi-post.php';</script>";
    }
    ?>
</body>