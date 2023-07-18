<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BER-ALAM</title>
    <link rel = "stylesheet" href = "../CSS/halamanawal.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "container">
        <div class = "navbar">
            <nav>
                <ul id="menulist">
                    <li><a href ="registrasi.php">REGISTRASI</a></li>
                    <li><a href ="login.php">LOGIN</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col">
                <h1>BER-ALAM</h1>
                <p>Belajar agama islam.</p>
            </div>
            <div class="col">
                <div class="card card1">
                    <h5>BER-ALAM</h5>
                    <p>Merupakan web pembelajaran agama bagi anda yang masih kurang mengerti terhadap agama islam.</p>
                </div>
                <div class="card card2">
                    <h5>LOGIN</h5>
                    <p>Silahkan login terlebih dahulu agar anda bisa mengakses web pembelajaran ini.</p>
                </div>
                <div class="card card3">
                    <h5>MODUL</h5>
                    <p>Modul-modul kami berisi materi agama islam bagi anda yang masih awam terhadap ilmu agama.</p>
                </div>
                <div class="card card4">
                    <h5>POST-TEST</h5>
                    <p>Setelah anda selesai mempelajari materi, kami menyediakan post-test untuk menguji kemampuan anda.</p>
                </div>

            </div>
        </div>
    </div>

    <script>
        var menulist = document.getElementById("menulist");
        menulist.style.maxHeight = "0px" ;

        function togglemenu() {
            if(menulist.style.maxHeight == "0px") {
                menulist.style.maxHeight = "130px";
            }
            else {
                menulist.style.maxHeight = "0px";
            }

        }
    </script>
</body>
</html>