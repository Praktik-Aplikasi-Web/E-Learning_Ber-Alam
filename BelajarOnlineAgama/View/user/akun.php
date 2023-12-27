<?php
require_once("../../Controller/auth.php");
include '../../Controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_object($query);
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = '" . $_SESSION['user'] . "' "));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/akun.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>BER-ALAM|Profil</title>
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
        <form class="form1" action="" method="POST">
            <label for="nama" class="first-name">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="edit" value="<?php echo $d->nama ?>" required>

            <label for="email" class="last-name">Email</label>
            <input type="email" name="email" placeholder="email" class="edit" value="<?php echo $d->email ?>" required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="alamat" class="edit" value="<?php echo $d->alamat ?>" required>

            <label for="nomor telepon">Nomor Telepon</label>
            <input type="text" name="hp" placeholder="hp" class="edit" value="<?php echo $d->hp ?>" required>
            <input type="submit" name="ubah_data" value="UBAH PROFIL" class="tombol">
        </form>
        <?php
        if (isset($_POST['ubah_data'])) {

            $nama   = $_POST['nama'];
            $email   = $_POST['email'];
            $alamat = $_POST['alamat'];
            $hp     = $_POST['hp'];

            $update = mysqli_query($con, "UPDATE users SET
                                nama = '" . $nama . "',
                                email = '" . $email . "',
                                alamat = '" . $alamat . "',
                                hp = '" . $hp . "'
                                WHERE id = '" . $d->id . "' ");

            if ($update) {
                echo '<script>alert("Ubah Data Berhasil")</script>';
                echo '<script>window.location="akun.php"</script>';
            } else {
                echo '<script>alert("Ubah Data Gagal")</script>';
                echo '<script>window.location="akun.php"</script>';
            }
        }
        ?>
        <br>
        <h3 class="jp">Ubah Password</h3>
        <div class="box">
            <form name="form2" action="" method="POST">
                <input id="exampleInputPassword1" type="password" name="passasli" placeholder="Password Baru" class="fake" required value="<?php echo $d->password ?>" required>
                <input id="exampleInputPassword2" type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                <input id="exampleInputPassword3" type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                <input type="checkbox" class="cekbox" id="show-password">
                <font color="white" style="font-family:Roboto">Tampilkan Password </font>
                <br>
                <br>
                <input type="submit" name="ubah_password" value="UBAH PASSWORD" class="tombol1">
            </form>
            <?php
            if (isset($_POST['ubah_password'])) {

                $pass1   = $_POST['pass1'];
                $pass2   = $_POST['pass2'];

                if ($pass2 != $pass1) {
                    echo '<script>alert("Konfirmasi password tidak sesuai")</script>';
                } else {

                    $u_pass = mysqli_query($con, "UPDATE users SET
                                password = '$pass1'
                                WHERE id = '$d->id' ");
                    if ($u_pass) {
                        echo '<script>alert("Ubah password Berhasil")</script>';
                        echo '<script>window.location="akun.php"</script>';
                    } else {
                        echo '<script>alert("Ubah password Gagal")</script>';
                        echo '<script>window.location="akun.php"</script>';
                    }
                }
            }
            ?>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword1').attr('type', 'text');
            } else {
                $('#exampleInputPassword1').attr('type', 'password');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword2').attr('type', 'text');
            } else {
                $('#exampleInputPassword2').attr('type', 'password');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword3').attr('type', 'text');
            } else {
                $('#exampleInputPassword3').attr('type', 'password');
            }
        });
    });
</script>

</html>