<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/loader.css">


    <title>BER-ALAM|Login</title>
  </head>
  <div id="loader-wrapper">
  <div class="spinner"></div>
</div>
    <script>
      var loader = document.getElementById("loader-wrapper");
  
      window.addEventListener("load",function(){
        loader.style.display = "none" ;
      })
    </script>
  <body>
    <div class="container">
      <form class="login-container" action="../Controller/cek_login.php" method="POST">
        <h3 class="textJudul mb-5">Masuk</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">Masukkan email anda</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Masukkan kata sandi anda</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          <br>
          <input type="checkbox" class="form-check-input" id="show-password"> Tampilkan Password
        </div>
        <div class="text-end">
        <a href class="textForm text-hover" ="#"></a>
      </div>
        <div class="d-grid textForm mt-5">
        <button name="login" type="submit" class="btn btn-primary">Masuk</button>
        </div>
        <div class="mt-3">
          <span class="textForm">Belum punya akun? <a href="registrasi.php" class="text-hover">Daftar</span>
        </div>
      </form>
    </div>

  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- jquery 3.5.1 -->
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
  </body>
</html>