<?php
include '../../Controller/koneksi.php';
$id         = $_GET['id'];
$users  = mysqli_query($con, "select * from modul where id_modul='$id'");
$row        = mysqli_fetch_array($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../CSS/edit2.css">
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
        <form class="form1" method="post">
            <label for="nama" class="first-name">Nama Modul</label>
            <input type="text" name="nama" class="edit" value="<?php echo $row['nmodul']; ?>" required>

            <label for="pengertian" class="last-name">Pengertian</label>
            <textarea class="edit" name="pengertian" rows="4" cols="50"><?php echo $row['pengertian']; ?></textarea>

            <label for="p1" class="last-name">P1</label>
            <textarea class="edit" name="p1" rows="4" cols="50"><?php echo $row['p1']; ?></textarea>

            <label for="password" class="last-name">P2</label>
            <textarea class="edit" name="p2" rows="4" cols="50"><?php echo $row['p2']; ?></textarea>


            <label for="alamat">P3</label>
            <textarea class="edit" name="p3" rows="4" cols="50"><?php echo $row['p3']; ?></textarea>

            <label for="nomor telepon">P4</label>
            <textarea class="edit" name="akhir" rows="4" cols="50"><?php echo $row['akhir']; ?>"</textarea>

            <input type="submit" name="ubah_data" value="UBAH DATA" class="tombol">
        </form>
        <?php
        if (isset($_POST['ubah_data'])) {

            $nama   = $_POST['nama'];
            $pengertian   = $_POST['pengertian'];
            $p1   = $_POST['p1'];
            $p2   = $_POST['p2'];
            $p3 = $_POST['p3'];
            $akhir     = $_POST['akhir'];

            $update = mysqli_query($con, "UPDATE modul SET
                                nmodul = '" . $nama . "',
                                pengertian = '" . $pengertian . "',
                                p1 = '" . $p1 . "',
                                p2 = '" . $p2 . "',
                                p3 = '" . $p3 . "',
                                akhir = '" . $akhir . "'
                                where id_modul='$id' ");

            if ($update) {
                echo '<script>alert("Ubah data Berhasil")</script>';
                echo '<script>window.location="data-modul.php"</script>';
            } else {
                echo '<script>alert("Ubah data Gagal")</script>';
                echo '<script>window.location="data-modul.php"</script>';
            }
        }
        ?>
    </div>
</body>

</html>