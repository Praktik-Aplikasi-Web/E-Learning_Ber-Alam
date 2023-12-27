<?php

require_once("../../Controller/auth3.php");

include '../../Controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM posttest WHERE jenis = '" . $_SESSION['jenis'] . "' ");
$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/isi-post.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>BER-ALAM|Post Test</title>
</head>

<body>
    <ul>
        <li>
            <h1>BER-ALAM</h1>
        </li>
    </ul>
    <b class="judul">Soal Post-test</b>
    <br>
    <br>
    <table width="100%" border="0">

        <?php
        $hasil = mysqli_query($con, "select * from posttest WHERE jenis = '" . $_SESSION['jenis'] . "'");
        $jumlah = mysqli_num_rows($hasil);
        $urut = 0;
        while ($row = mysqli_fetch_array($hasil)) {
            $id = $row["id"];
            $soal = $row["soal"];
            $a = $row["a"];
            $b = $row["b"];
            $c = $row["c"];
            $d = $row["d"];

        ?>
            <form name="form1" method="post" action="../../Controller/hasil.php">
                <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                <tr>
                    <td class="nomor" width="40" style="padding-left : 20px;"><?php echo $urut = $urut + 1 ?></td>
                    <td width="700"><?php echo "$soal" ?></td>
                </tr>
                <tr>
                    <td height="21"></td>
                    <td>
                        A. <input name="pilihan[<?php echo $id ?>]" type="radio" value="A">
                        <?php echo "$a" ?> </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        B. <input name="pilihan[<?php echo $id ?>]" type="radio" value="B">
                        <?php echo "$b" ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        C. <input name="pilihan[<?php echo $id ?>]" type="radio" value="C">
                        <?php echo "$c" ?> </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        D. <input name="pilihan[<?php echo $id ?>]" type="radio" value="D">
                        <?php echo "$d" ?></td>
                </tr>

            <?php
        }
            ?>
            <tr>
                <td>&nbsp;</td>

                <td><br><input class="tmbl" type="submit" name="submit" value="SELESAI" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"><br><br></td>
            </tr>
    </table>
    </form>
</body>

</html>