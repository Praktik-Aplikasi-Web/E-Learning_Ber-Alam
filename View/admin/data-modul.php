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
                <td>Judul Modul</td>
                <td>Pengertian</td>
                <td>P1</td>
                <td>P2</td>
                <td>P3</td>
                <td>P4</td>
                <td>aksi</td>

            </tr>
            <?php
            include '../../Controller/koneksi.php';
            $modul = mysqli_query($con, "SELECT * from modul");
            $no = 1;
            foreach ($modul as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['nmodul'] . "</td>
    <td>" . $row['pengertian'] . "</td>
    <td>" . $row['p1'] . "</td>
    <td>" . $row['p2'] . "</td>
    <td>" . $row['p3'] . "</td>
    <td>" . $row['akhir'] . "</td>
    <td>
    <a href='edit2.php?id=$row[id_modul]'>Edit</a>
    <a href='delete2.php?id=$row[id_modul]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>