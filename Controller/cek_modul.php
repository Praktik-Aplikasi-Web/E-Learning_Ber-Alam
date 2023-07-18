<?php
require_once("auth.php");


//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';

$query = mysqli_query($con, "SELECT * FROM modul");
$data = mysqli_fetch_assoc($query);

$sql = mysqli_query($con, "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_assoc($sql);

if (isset($_POST['masuk'])) {
    $_SESSION['modul'] =  $data['id_modul'];
    $_SESSION['nmodul'] = "syahadat";

    header("location:../View/user/isi-modul.php");
} elseif (isset($_POST['masuk2'])) {
    if ($d['nilai1'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "shalat";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk3'])) {
    if ($d['nilai2'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "zakat";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk4'])) {
    if ($d['nilai3'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "puasa";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk5'])) {
    if ($d['nilai4'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "haji";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk6'])) {
    if ($d['nilai5'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "wudhu";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk7'])) {
    if ($d['nilai6'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "rukun iman";
        header("location:../View/user/isi-modul.php");
    }
} elseif (isset($_POST['masuk8'])) {
    if ($d['nilai7'] == NULL) {
        $message = "Anda belum mengerjakan Post Test pada modul sebelumnya!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../View/user/modul.php';</script>";
    } else {
        $_SESSION['modul'] =  $data['id_modul'];
        $_SESSION['nmodul'] = "nabi & rasul";
        header("location:../View/user/isi-modul.php");
    }
}
