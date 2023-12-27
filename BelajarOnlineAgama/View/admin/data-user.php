<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../CSS/admin.css">
    <link rel="stylesheet" href="../../CSS/table.css">
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
        <table style="margin-left:auto;margin-right:auto" border="1">
            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>Email</td>
                <td>password</td>
                <td>Alamat</td>
                <td>Nomor telepon</td>
                <td>status</td>
                <td>nilai 1</td>
                <td>nilai 2</td>
                <td>nilai 3</td>
                <td>nilai 4</td>
                <td>nilai 5</td>
                <td>nilai 6</td>
                <td>nilai 7</td>
                <td>nilai 8</td>
                <td>aksi</td>

            </tr>
            <?php
            include '../../Controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from users");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['nama'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['password'] . "</td>
    <td>" . $row['alamat'] . "</td>
    <td>" . $row['hp'] . "</td>
    <td>" . $row['status'] . "</td>
    <td>" . $row['nilai1'] . "</td>
    <td>" . $row['nilai2'] . "</td>
    <td>" . $row['nilai3'] . "</td>
    <td>" . $row['nilai4'] . "</td>
    <td>" . $row['nilai5'] . "</td>
    <td>" . $row['nilai6'] . "</td>
    <td>" . $row['nilai7'] . "</td>
    <td>" . $row['nilai8'] . "</td>
    <td>
    <a href='edit.php?id=$row[id]'>Edit</a>
    <a href='delete.php?id=$row[id]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>