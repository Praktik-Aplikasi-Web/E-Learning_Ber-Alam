<?php
include '../../Controller/koneksi.php';
$id         = $_GET['id'];
$posttest  = mysqli_query($con, "select * from posttest where id='$id'");
$row        = mysqli_fetch_array($posttest);
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
            <label for="jenis">jenis</label>
            <textarea class="edit" name="jenis" rows="4" cols="50"><?php echo $row['jenis']; ?>"</textarea>

            <label for="soal" class="first-name">Soal</label>
            <input type="text" name="soal" class="edit" value="<?php echo $row['soal']; ?>" required>

            <label for="a" class="last-name">a</label>
            <textarea class="edit" name="a" rows="4" cols="50"><?php echo $row['a']; ?></textarea>

            <label for="b" class="last-name">b</label>
            <textarea class="edit" name="b" rows="4" cols="50"><?php echo $row['b']; ?></textarea>

            <label for="c" class="last-name">c</label>
            <textarea class="edit" name="c" rows="4" cols="50"><?php echo $row['c']; ?></textarea>


            <label for="d">d</label>
            <textarea class="edit" name="d" rows="4" cols="50"><?php echo $row['d']; ?></textarea>

            <label for="kunci">kunci</label>
            <textarea class="edit" name="kunci" rows="4" cols="50"><?php echo $row['kunci']; ?>"</textarea>

            <input type="submit" name="ubah_data" value="UBAH DATA" class="tombol">
        </form>
        <?php
        if (isset($_POST['ubah_data'])) {

            $jenis     = $_POST['jenis'];
            $soal   = $_POST['soal'];
            $a   = $_POST['a'];
            $b   = $_POST['b'];
            $c   = $_POST['c'];
            $d = $_POST['d'];
            $kunci     = $_POST['kunci'];

            $update = mysqli_query($con, "UPDATE posttest SET
                                jenis = '" . $jenis . "',
                                soal = '" . $soal . "',
                                a = '" . $a . "',
                                b = '" . $b . "',
                                c = '" . $c . "',
                                d = '" . $d . "',
                                kunci = '" . $kunci . "'                                
                                where id='$id' ");

            if ($update) {
                echo '<script>alert("Ubah data Berhasil")</script>';
                echo '<script>window.location="tabel_post.php"</script>';
            } else {
                echo '<script>alert("Ubah data Gagal")</script>';
                echo '<script>window.location="tabel_post.php"</script>';
            }
        }
        ?>
    </div>
</body>

</html>