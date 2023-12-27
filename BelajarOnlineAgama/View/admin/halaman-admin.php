<?php require_once("../../Controller/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../CSS/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title> BER-ALAM</title>
</head>

<body>
    <ul>
        <li>
            <h1>BER-ALAM</h1>
        </li>
        <li><a href="halaman-admin.php">HOME</a></li>
        <li><a href="data-user.php">DATA PENGGUNA</a></li>
        <li><a href="data-modul.php">DATA MODUL</a></li>
        <li><a href="tabel_post.php">DATA POST-TEST</a></li>
        <li><a href="../../Controller/logout.php">LOGOUT</a></li>
    </ul>
    <div class="header">
        <p class="text">PANEL ADMIN</p>
        <?php
        include "../../Controller/koneksi.php";
        $query = mysqli_query($con, "SELECT * FROM users");
        $data = mysqli_fetch_assoc($query);
        //menampilkan data dengan id tertentu
        ?>
        <p class="text2">Selamat datang <?php echo  $data["nama"] ?></p>
    </div>
</body>

</html>