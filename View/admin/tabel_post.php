<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../CSS/datamdl.css">
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
    <div>
        <br><br><br>
        <table class='modul' style="margin-left:auto;margin-right:auto" border="1">
            <tr>
                <td>Nomor</td>
                <td>Jenis</td>
                <td>Soal</td>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
                <td>JAWABAN</td>
                <td>AKSI</td>
            </tr>
            <?php
            include '../../Controller/koneksi.php';
            $modul = mysqli_query($con, "SELECT * from posttest");
            $no = 1;
            foreach ($modul as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['jenis'] . "</td>
    <td>" . $row['soal'] . "</td>
    <td>" . $row['a'] . "</td>
    <td>" . $row['b'] . "</td>
    <td>" . $row['c'] . "</td>
    <td>" . $row['d'] . "</td>
    <td>" . $row['kunci'] . "</td>
    <td>
    <a href='edit3.php?id=$row[id]'>Edit</a>
    <a href='delete3.php?id=$row[id]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>