<?php
require_once("auth3.php");
    include "koneksi.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['pilihan'])){
        ?>
            <script language="JavaScript">
                alert('Oops! Serius. Anda tidak mengerjakan soal apapun ...');
                document.location='../View/user/isi-post.php';
            </script>
        <?php
        }
        
        $pilihan    =$_POST["pilihan"];
        $id_soal    =$_POST["id"];
        $jumlah        =$_POST["jumlah"];
        
        $score    =0;
        $benar    =0;
        $salah    =0;
        $kosong    =0;

        for($i=0;$i<$jumlah;$i++){
            $nomor    =$id_soal[$i];
            
            // jika peserta tidak memilih jawaban
            if(empty($pilihan[$nomor])){
                $kosong++;
            }
            // jika memilih
            else {
                $jawaban    =$pilihan[$nomor];

                // cocokan kunci jawaban dengan database
                $query    =mysqli_query($con, "SELECT * FROM posttest WHERE id='$nomor' AND kunci='$jawaban'");
                $cek    =mysqli_num_rows($query);
                
                // jika jawaban benar (cocok dengan database)
                if($cek){
                    $benar++;
                }
                // jika jawaban salah (tidak cocok dengan database)
                else {
                    $salah++;
                }
            }
            /*
                ----------
                Nilai 100
                ----------
                Hasil = 100 / jumlah soal * Jawaban Benar
            */
            // script php membuat soal pilihan ganda
            // hitung skor
            $hitung =mysqli_query($con, "SELECT * FROM posttest WHERE jenis = '".$_SESSION['jenis']."' ");
            $jumlah_soal    =mysqli_num_rows($hitung);
            $score    =100 / $jumlah_soal * $benar;
            $hasil    =number_format($score,2);


        }
    $query = mysqli_query($con, "SELECT * FROM posttest WHERE jenis = '".$_SESSION['jenis']."' ");
    $d = mysqli_fetch_assoc($query);
    $user = mysqli_query($con, "SELECT * FROM users WHERE id = '".$_SESSION['user']."' ");
    $cb = mysqli_fetch_assoc($user);

    if($d['jenis']=="syahadat"){
        $update = mysqli_query($con, "UPDATE users SET nilai1 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="shalat") {
        $update = mysqli_query($con, "UPDATE users SET nilai2 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="zakat") {
        $update = mysqli_query($con, "UPDATE users SET nilai3 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="puasa") {
        $update = mysqli_query($con, "UPDATE users SET nilai4 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="haji") {
        $update = mysqli_query($con, "UPDATE users SET nilai5 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="wudhu") {
        $update = mysqli_query($con, "UPDATE users SET nilai6 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="rukun iman") {
        $update = mysqli_query($con, "UPDATE users SET nilai7 = '$score' WHERE id = '".$_SESSION['user']."'");
    } elseif($d['jenis']=="nabi & rasul") {
        $update = mysqli_query($con, "UPDATE users SET nilai8 = '$score' WHERE id = '".$_SESSION['user']."'");
    }
    // Tampilkan Hasil Ujian Soal Pilihan Ganda
    echo"
    <table border='0'>
        <tbody>
            <tr>
                <td colspan='4'><h4>Nilai Ujian Anda</h4></td>
            </tr>
            <tr>
                <td width='80'><u>Benar ✔</u></td>
                <td width='80'><u>Salah ✕</u></td>
                <td width='140'><u>Tidak Terjawab !</u></td>
                <td width='100'><u>Skor Akhir #</u></td>
            </tr>
            <tr>
                <td align='center'>$benar</td>
                <td align='center'>$salah</td>
                <td align='center'>$kosong</td>
                <td align='right'><b>$hasil</b></td>
            </tr>
        </tbody>
    </table>
    ";
    echo "<br /><a href='../View/user/modul.php'><< kembali</a>";
}
?>