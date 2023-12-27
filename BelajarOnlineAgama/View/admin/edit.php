<?php
include '../../Controller/koneksi.php';
$id         = $_GET['id'];
$users  = mysqli_query($con, "select * from users where id='$id'");
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
    <link rel="stylesheet" href="../../CSS/edit.css">
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
            <label for="nama" class="first-name">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="edit" value="<?php echo $row['nama']; ?>" required>

            <label for="email" class="last-name">Email</label>
            <input type="email" name="email" placeholder="email" class="edit" value="<?php echo $row['email']; ?>" required>

            <label for="password" class="last-name">password</label>
            <input id="exampleInputPassword1" type="text" name="password" placeholder="Password Baru" class="edit" required value="<?php echo $row['password']; ?>" required>

            <label for="password" class="last-name">Status</label>
            <select class="edit" name="status">
                <option></option>
                <option value='admin'>admin</option>
            </select>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="alamat" class="edit" value="<?php echo $row['alamat']; ?>" required>

            <label for="nomor telepon">Nomor Telepon</label>
            <input type="text" name="hp" placeholder="hp" class="edit" value="<?php echo $row['hp']; ?>" required>
            <input type="submit" name="ubah_data" value="UBAH PROFIL" class="tombol">
        </form>
        <?php
        if (isset($_POST['ubah_data'])) {

            $nama   = $_POST['nama'];
            $email   = $_POST['email'];
            $password   = $_POST['password'];
            $status   = $_POST['status'];
            $alamat = $_POST['alamat'];
            $hp     = $_POST['hp'];

            $update = mysqli_query($con, "UPDATE users SET
                                nama = '" . $nama . "',
                                email = '" . $email . "',
                                password = '" . $password . "',
                                status = '" . $status . "',
                                alamat = '" . $alamat . "',
                                hp = '" . $hp . "'
                                where id='$id' ");

            if ($update) {
                echo '<script>alert("Ubah data Berhasil")</script>';
                echo '<script>window.location="data-user.php"</script>';
            } else {
                echo '<script>alert("Ubah data Gagal")</script>';
                echo '<script>window.location="data-user.php"</script>';
            }
        }
        ?>
    </div>
</body>

</html>