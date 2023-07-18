<?php require_once("../../Controller/auth.php");

include '../../Controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM users WHERE id = '".$_SESSION['user']."' ");
    $d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../../CSS/post-test.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>BER-ALAM|Post Test</title>
</head>
<body>
    <ul>
        <li><h1>BER-ALAM</h1></li>
        <li><a href="halaman-user.php">HOME</a></li>
        <li><a href="modul.php">MODUL</a></li>
        <li><a href="post-test.php">POST-TEST</a></li>
        <li><a href="akun.php">PROFIL</a></li>
        <li><a href="../../Controller/logout.php">LOGOUT</a></li>
    </ul>
    <form action="../../Controller/cek-post.php" method="POST">
<main class="bg">
<main class="page-content">
    <div class="card">
      <div class="content">
        <h2 class="title">POST-TEST 1</h2>
        <h2 class="judul">Nilai anda : <?php echo $d->nilai1 ?></h2>
        <button name="masuk" class="btn" type="submit">KERJAKAN</button>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <h2 class="title">POST-TEST 2</h2>
        <h2 class="judul">Nilai anda : <?php echo $d->nilai2 ?></h2>
        <button name="masuk2" class="btn" type="submit">KERJAKAN</button>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <h2 class="title">POST-TEST 3</h2>
        <h2 class="judul">Nilai anda : <?php echo $d->nilai3 ?></h2>
        <button name="masuk3" class="btn" type="submit">KERJAKAN</button>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <h2 class="title">POST-TEST 4</h2>
        <h2 class="judul">Nilai anda : <?php echo $d->nilai4 ?></h2>
        <button name="masuk4" class="btn" type="submit">KERJAKAN</button>
      </div>
    </div>
    <div class="card">
        <div class="content">
          <h2 class="title">POST-TEST 5</h2>
          <h2 class="judul">Nilai anda : <?php echo $d->nilai5 ?></h2>
          <button name="masuk5" class="btn" type="submit">KERJAKAN</button>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2 class="title">POST-TEST 6</h2>
          <h2 class="judul">Nilai anda : <?php echo $d->nilai6 ?></h2>
          <button name="masuk6" class="btn" type="submit">KERJAKAN</button>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2 class="title">POST-TEST 7</h2>
          <h2 class="judul">Nilai anda : <?php echo $d->nilai7 ?></h2>
          <button name="masuk7" class="btn" type="submit">KERJAKAN</button>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <h2 class="title">POST-TEST 8</h2>
          <h2 class="judul">Nilai anda : <?php echo $d->nilai8 ?></h2>
          <button name="masuk8" class="btn" type="submit">KERJAKAN</button>
        </div>
      </div>
  </main>
</main>
</form>

</body>
</html>