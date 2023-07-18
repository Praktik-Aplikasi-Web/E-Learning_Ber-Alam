<?php
require_once("auth.php");


//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';

$query = mysqli_query($con, "SELECT * FROM posttest");
$data = mysqli_fetch_assoc($query);

$sql = mysqli_query($con, "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_assoc($sql);

if (isset($_POST['masuk'])) {
    $_SESSION['test'] =  $data['id'];
    $_SESSION['jenis'] = "syahadat";

    header("location:../View/user/isi-post.php");
} elseif (isset($_POST['masuk2'])) {
    if ($d['nilai1'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "shalat";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk3'])) {
    if ($d['nilai2'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "zakat";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk4'])) {
    if ($d['nilai3'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "puasa";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk5'])) {
    if ($d['nilai4'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "haji";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk6'])) {
    if ($d['nilai5'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "wudhu";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk7'])) {
    if ($d['nilai6'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "rukun iman";
        header("location:../View/user/isi-post.php");
    }
} elseif (isset($_POST['masuk8'])) {
    if ($d['nilai7'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/post-test.php';</script>";
    } else {
        $_SESSION['test'] =  $data['id'];
        $_SESSION['jenis'] = "nabi & rasul";
        header("location:../View/user/isi-post.php");
    }
}
