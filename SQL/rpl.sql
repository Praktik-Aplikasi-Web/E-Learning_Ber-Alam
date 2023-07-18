-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2023 at 05:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE Database rpl;
use rpl;

DROP TABLE IF EXISTS `modul`;
CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nmodul` text NOT NULL,
  `pengertian` text NOT NULL,
  `p1` longtext,
  `p2` longtext,
  `p3` longtext,
  `akhir` text,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nmodul`, `pengertian`, `p1`, `p2`, `p3`, `akhir`) VALUES
(1, 'syahadat', 'Syahadat terdiri dari dua kalimat singkat, \"La ilaha illa Allah, Muhammad Rasul Allah,\" yang diterjemahkan sebagai \"Tiada Tuhan selain Allah, Muhammad adalah utusan Allah.\" Makna di balik kalimat ini sangat mendalam. Pertama, ia mengakui adanya satu Tuhan yang Maha Esa, yang menciptakan segala sesuatu dan memiliki otoritas tertinggi. Kedua, ia mengakui Muhammad sebagai utusan Allah, yang membawa wahyu-Nya kepada umat manusia. Syahadat adalah penegasan terhadap keesaan Allah dan kepemimpinan Nabi Muhammad dalam membimbing manusia.', 'Syahadat memiliki peran sentral dalam agama Islam. Ia adalah kunci masuk ke dalam agama ini dan merupakan syarat utama untuk menjadi seorang muslim. Dengan mengucapkan dan memahami arti syahadat, seseorang menyatakan komitmennya untuk mengikuti agama Islam. Selain itu, syahadat juga merupakan pengikat dan pemersatu seluruh umat Muslim di seluruh dunia. Ia menghubungkan mereka melalui keyakinan bersama pada tauhid dan Nabi Muhammad sebagai utusan Allah.', 'Syahadat tidak hanya sekedar ungkapan lisan, tetapi juga membawa implikasi yang signifikan dalam kehidupan sehari-hari seorang muslim. Ia mempengaruhi cara pandang, sikap, dan tindakan mereka. Mengucapkan syahadat berarti melepaskan diri dari penyembahan terhadap tuhan-tuhan palsu dan menjadikan Allah sebagai sumber utama dalam hidup. Selain itu, syahadat juga mendorong muslim untuk mengikuti ajaran dan teladan yang diajarkan oleh Nabi Muhammad, termasuk dalam hal berlaku adil, jujur, dan berperilaku baik kepada sesama.', 'Syahadat membawa konsekuensi yang signifikan bagi seorang muslim. Pertama, ia menuntut komitmen total terhadap keimanan dan ibadah kepada Allah. Sebagai muslim, kita harus mengutamakan ketaatan kepada-Nya dalam setiap aspek kehidupan. Kedua, syahadat menuntut pengembangan ilmu dan pemahaman yang lebih dalam tentang ajaran Islam. Dengan belajar dan mengamalkan ajaran agama, kita dapat mengaplikasikan nilai-nilai Islam dalam kehidupan sehari-hari dan memperkuat hubungan kita dengan Allah SWT.', 'Syahadat adalah inti ajaran Islam dan memahaminya secara benar serta mengamalkannya dengan sungguh-sungguh sangatlah penting. Ia membimbing muslim dalam mengenali Tuhannya dengan lebih baik, memperkuat keimanan, dan mengarahkan kehidupan menuju jalan yang benar. Melalui pemahaman yang mendalam dan pengamalan yang konsisten terhadap syahadat, seorang muslim dapat merasakan kedamaian batin dan mendapatkan kebahagiaan yang hakiki dalam mengarungi hidupnya.\"\"\"'),
(2, 'shalat', 'Shalat adalah ibadah ritual yang melibatkan serangkaian gerakan fisik, bacaan doa, dan dzikir yang dilakukan oleh seorang muslim. Ia adalah bentuk ibadah yang diwajibkan oleh Allah SWT dan merupakan pilar utama dalam agama Islam. Shalat bukan hanya sekadar rangkaian gerakan fisik, tetapi juga merupakan sarana untuk memperkuat hubungan spiritual dengan Allah. Melalui shalat, seorang muslim berkomunikasi dengan Sang Pencipta dan menunjukkan ketaatannya kepada-Nya.', 'Shalat memiliki peran yang sangat penting dalam agama Islam. Pertama, shalat merupakan kewajiban yang diemban setiap muslim. Ia adalah salah satu dari lima rukun Islam dan merupakan salah satu cara utama untuk mengekspresikan keimanan kepada Allah. Kedua, shalat adalah sarana untuk membersihkan dan menyucikan jiwa. Dalam shalat, seorang muslim berhadapan langsung dengan Allah, mengakui dosa-dosanya, memohon ampunan, dan memperkuat hubungan spiritual dengan-Nya.', 'Shalat tidak hanya memiliki nilai spiritual, tetapi juga memberikan manfaat yang nyata dalam kehidupan sehari-hari. Pertama, shalat melatih disiplin dan ketekunan. Ia mengajarkan kita untuk melaksanakan ibadah secara rutin dan konsisten, yang membentuk pola hidup yang teratur dan terorganisir. Kedua, shalat membantu menghilangkan stres dan kegelisahan. Saat melaksanakan shalat, kita memusatkan perhatian kepada Allah, melepaskan beban pikiran, dan mencari ketenangan batin. Shalat juga memperkuat hubungan sosial dengan sesama muslim, karena seringkali dilakukan secara berjamaah di masjid.', 'Shalat memiliki makna dan simbolisme yang dalam. Saat melaksanakan shalat, seorang muslim berdiri dengan rendah hati di hadapan Allah, mengakui kebesaran-Nya dan kerendahan dirinya sebagai hamba. Gerakan-gerakan dalam shalat juga memiliki makna tersendiri, seperti rukuk yang melambangkan ketaatan dan sujud yang melambangkan kerendahan diri. Dalam keseluruhan shalat, seorang muslim menyampaikan penghormatan, syukur, dan permohonan kepada Allah, serta mengingatkan dirinya akan tujuan hidup yang lebih tinggi.', 'Shalat adalah ibadah yang penting dalam agama Islam. Ia membawa makna spiritual yang mendalam, menunjukkan ketaatan kepada Allah, dan memperkuat hubungan dengan-Nya. Selain itu, shalat juga memberikan manfaat nyata dalam kehidupan sehari-hari, seperti disiplin, ketenangan batin, dan koneksi sosial. Penting bagi setiap muslim untuk memahami makna dan simbolisme dalam shalat serta melaksanakannya dengan penuh kesadaran dan keikhlasan. Melalui shalat yang sungguh-sungguh, seorang muslim dapat mendapatkan kedamaian jiwa dan mendekatkan diri kepada Allah SWT.'),
(3, 'zakat', 'Zakat adalah salah satu dari lima rukun Islam dan merupakan kewajiban bagi umat Muslim yang mampu. Zakat secara harfiah berarti \"pembersihan\" atau \"pertumbuhan yang berkah\". Ia adalah kewajiban yang ditetapkan oleh Allah SWT untuk membantu meringankan beban orang miskin dan membantu masyarakat dalam menjaga keseimbangan ekonomi. Zakat tidak hanya berupa sumbangan uang, tetapi juga meliputi harta seperti emas, perak, pertanian, perdagangan, dan lain sebagainya.', 'Tujuan utama zakat adalah untuk memperkuat solidaritas sosial di antara umat Muslim dan membantu mengatasi masalah kemiskinan. Dalam Islam, zakat dianggap sebagai bentuk ibadah yang menguatkan hubungan dengan Allah dan menumbuhkan sikap dermawan dan rendah hati. Dengan memberikan zakat, seseorang dapat membersihkan harta benda dan jiwa mereka dari sifat-sifat yang negatif seperti keserakahan dan kedengkian.', 'Penerima zakat terdiri dari delapan golongan yang berhak menerimanya, seperti orang miskin, fakir, mualaf, budak yang ingin membebaskan diri, orang yang berhutang, musafir, dan lain sebagainya. Zakat harus diberikan kepada mereka yang memenuhi kriteria tersebut. Sebelum memberikan zakat, sangat penting untuk memastikan bahwa penerima zakat memang layak menerimanya dan dana yang diberikan akan digunakan dengan benar.', 'Jumlah zakat yang harus diberikan adalah 2,5% dari harta yang dimiliki setelah memenuhi nisab. Nisab adalah ambang batas kekayaan yang harus dicapai agar seseorang wajib membayar zakat. Jumlah nisab ditentukan berdasarkan jenis harta yang dimiliki, seperti uang tunai, emas, atau perak. Zakat bisa dihitung sendiri atau melalui lembaga zakat yang terpercaya.', 'Selain memberikan zakat, umat Muslim juga dianjurkan untuk memberikan sedekah secara sukarela. Sedekah bisa diberikan kapan saja dan dalam bentuk apa pun. Sedekah bukanlah kewajiban seperti zakat, tetapi merupakan amalan yang sangat dianjurkan dalam agama Islam. Dengan memberikan sedekah, kita dapat membantu orang lain dan mendapatkan pahala yang berlipat ganda.\"'),
(4, 'puasa', 'Puasa adalah salah satu kewajiban dalam agama Islam yang dilaksanakan selama bulan Ramadan. Ramadan adalah bulan kesembilan dalam kalender Islam yang dianggap suci. Selama bulan Ramadan, umat Muslim berpuasa mulai dari fajar hingga terbenam matahari. Puasa bukan hanya menahan diri dari makan dan minum, tetapi juga menahan diri dari perilaku dan ucapan yang tidak bermanfaat atau bertentangan dengan nilai-nilai agama.', 'Tujuan utama puasa adalah mendekatkan diri kepada Allah SWT, melatih diri untuk meningkatkan kesabaran dan disiplin, serta merasakan empati terhadap orang-orang yang kurang beruntung. Dengan puasa, umat Muslim berharap untuk membersihkan jiwa, mengendalikan hawa nafsu, dan mendapatkan rahmat serta pengampunan Allah SWT.', 'Puasa juga memiliki manfaat kesehatan, baik secara fisik maupun psikologis. Saat berpuasa, tubuh mengalami detoksifikasi karena menghilangkan racun dan zat-zat yang tidak perlu. Selain itu, puasa juga dapat membantu mengatur pola makan dan mengendalikan berat badan. Secara psikologis, puasa dapat meningkatkan kesadaran diri, mengajarkan kemampuan mengendalikan diri, serta meningkatkan rasa syukur dan kebersamaan dengan sesama.', 'Selama puasa, terdapat beberapa hal yang harus dihindari, seperti makan, minum, merokok, berhubungan intim, dan perilaku negatif lainnya. Selain itu, umat Muslim juga diwajibkan untuk menjaga lidah agar tidak berkata-kata yang buruk atau menyakiti orang lain. Puasa juga mengajarkan nilai-nilai seperti tolong-menolong, kebaikan, dan keikhlasan.', 'Puasa Ramadan merupakan ibadah yang dianjurkan bagi umat Muslim yang sehat dan telah mencapai usia baligh. Namun, ada beberapa kondisi tertentu yang memungkinkan seseorang untuk tidak berpuasa, seperti wanita hamil atau menyusui, orang yang sedang sakit atau dalam perjalanan yang jauh. Mereka dapat menggantinya di lain waktu atau memberikan fidyah, yaitu memberikan makanan atau uang kepada orang yang membutuhkan.'),
(5, 'haji', 'Haji adalah ibadah yang menjadi salah satu dari lima rukun Islam dan merupakan kewajiban bagi umat Muslim yang mampu secara fisik dan finansial. Haji dilakukan di Makkah, Arab Saudi, pada bulan Dzulhijjah, bulan terakhir dalam kalender Islam. Setiap tahun, jutaan umat Muslim dari seluruh dunia berkumpul untuk menjalankan ibadah haji, yang merupakan perjalanan suci dan penuh makna.', 'Tujuan utama dari ibadah haji adalah untuk mendekatkan diri kepada Allah SWT, menghapus dosa-dosa masa lalu, serta mendapatkan pengampunan dan rahmat-Nya. Haji juga menjadi momentum untuk menyatukan umat Muslim dari berbagai suku, ras, dan negara, mengingatkan kita akan persaudaraan dalam Islam.', 'Proses pelaksanaan haji melibatkan serangkaian kegiatan yang meliputi tindakan-tindakan seperti tawaf, sa\'i, wukuf di Arafah, melempar jumrah, dan berbagai ibadah lainnya. Selama haji, umat Muslim mengenakan pakaian khusus yang disebut ihram, yang melambangkan kesederhanaan dan kesatuan dalam menjalankan ibadah ini.', 'Haji adalah ibadah yang membutuhkan persiapan yang matang. Calon jamaah haji harus menjalani serangkaian proses administrasi dan medis, serta mempersiapkan diri secara mental dan spiritual. Ini termasuk mempelajari tata cara ibadah haji, memahami etika dan tata tertib selama haji, serta mengumpulkan dana yang diperlukan untuk biaya perjalanan dan penginapan.', 'Haji adalah salah satu momen yang paling penting dalam kehidupan seorang Muslim. Setelah menyelesaikan ibadah haji, seseorang dianggap telah mencapai derajat spiritual tertinggi dan diharapkan dapat membawa perubahan positif dalam diri serta berkontribusi dalam membangun komunitas Muslim. Selain itu, pelaksanaan haji juga mengajarkan nilai-nilai kesabaran, kerendahan hati, dan pengorbanan.'),
(6, 'wudhu', 'Wudhu adalah ritual penyucian diri yang dilakukan oleh umat Muslim sebelum melaksanakan ibadah, seperti salat atau membaca Al-Qur\'an. Wudhu merupakan salah satu syarat sah dalam menjalankan ibadah-ibadah tersebut. Ia melibatkan membersihkan beberapa anggota tubuh dengan air, sesuai dengan tata cara yang ditentukan.', 'Tujuan utama dari wudhu adalah membersihkan diri secara fisik dan spiritual. Melalui wudhu, umat Muslim membersihkan kotoran dan najis fisik yang dapat menghalangi kualitas ibadah. Selain itu, wudhu juga memiliki makna simbolis dalam membersihkan hati dan mempersiapkan diri untuk berkomunikasi dengan Allah SWT dalam ibadah-ibadah yang dilakukan.', 'Tata cara wudhu terdiri dari beberapa langkah yang harus diikuti dengan urutan yang tepat. Langkah-langkah tersebut meliputi mencuci tangan, berkumur-kumur, membersihkan hidung, mencuci wajah, mencuci lengan hingga siku, mengusap kepala, mencuci kaki hingga mata kaki, dan melakukan urutan tersebut sebanyak tiga kali. Selain itu, juga penting untuk menjaga niat dan konsentrasi selama melaksanakan wudhu.', 'Selain menjadi syarat sah dalam ibadah, wudhu juga memiliki keutamaan dan manfaat. Dalam hadis, Rasulullah SAW menyebutkan bahwa orang yang melaksanakan wudhu dengan baik akan mendapatkan cahaya di hari kiamat dan mempunyai pangkalan yang kokoh di surga. Wudhu juga dapat memberikan efek menenangkan, membersihkan pikiran, serta meningkatkan konsentrasi dalam beribadah.', 'Wudhu harus dilakukan dengan memperhatikan kebersihan, kehati-hatian, dan kecermatan. Air yang digunakan untuk wudhu harus bersih dan suci, dan semua anggota tubuh yang wajib dibersihkan harus mendapatkan air dengan sempurna. Selain itu, wudhu juga dapat diulang ketika seseorang telah melakukan tindakan yang membatalkannya, seperti buang air kecil atau besar, tidur nyenyak, atau kehilangan kesadaran.'),
(7, 'rukun iman', 'Rukun Iman adalah konsep fundamental dalam agama Islam yang menggambarkan enam keyakinan dasar yang harus diyakini oleh setiap Muslim. Rukun Iman merupakan bagian penting dalam membangun dan menguatkan iman seorang Muslim. Keenam rukun tersebut adalah iman kepada Allah, malaikat-malaikat-Nya, kitab-kitab-Nya, rasul-rasul-Nya, hari kiamat, dan takdir atau qadha dan qadar.', 'Iman kepada Allah adalah rukun pertama dalam Rukun Iman. Ini berarti mengakui keesaan Allah SWT sebagai satu-satunya Tuhan yang berhak disembah dan meyakini sifat-sifat-Nya yang sempurna. Iman kepada Allah melibatkan keyakinan akan keberadaan-Nya, kekuasaan-Nya, dan kasih sayang-Nya terhadap umat manusia.\n\nIman kepada malaikat-malaikat Allah merupakan rukun kedua dalam Rukun Iman. Muslim meyakini bahwa Allah menciptakan malaikat sebagai makhluk yang tidak terlihat oleh mata manusia. Malaikat memiliki tugas khusus dan berperan dalam menjalankan kehendak Allah, termasuk mencatat amal perbuatan manusia', 'Iman kepada kitab-kitab Allah adalah rukun ketiga dalam Rukun Iman. Ini mencakup keyakinan terhadap kitab-kitab suci yang diturunkan oleh Allah kepada para rasul-Nya, termasuk Al-Qur\'an sebagai kitab suci terakhir dan paling sempurna. Iman kepada kitab-kitab Allah juga melibatkan menghormati dan mengikuti ajaran-ajaran yang terkandung di dalamnya.\nIman kepada rasul-rasul Allah merupakan rukun keempat dalam Rukun Iman. Muslim meyakini bahwa Allah mengutus rasul-rasul-Nya sebagai pembawa wahyu-Nya kepada umat manusia. Mereka adalah utusan Allah yang membawa petunjuk dan pedoman hidup yang harus diikuti oleh umat manusia. Nabi Muhammad SAW dianggap sebagai rasul terakhir dan penutup segala rasul.', 'Iman kepada hari kiamat adalah rukun kelima dalam Rukun Iman. Muslim meyakini bahwa akan ada kehidupan setelah mati dan hari pembalasan di akhirat. Pada hari kiamat, segala amal perbuatan manusia akan dihisab dan mendapatkan balasan sesuai dengan perbuatan mereka di dunia ini.\nIman kepada takdir atau qadha dan qadar adalah rukun keenam dalam Rukun Iman. Ini mencakup keyakinan bahwa segala sesuatu yang terjadi di dunia ini telah ditentukan oleh Allah SWT. Qadha dan qadar mengajarkan pentingnya menerima takdir Allah dengan penuh ketulusan dan keikhlasan.', 'Dalam modul pembelajaran ini, kita telah menjelajahi konsep Rukun Iman dalam Islam, yang terdiri dari iman kepada Allah, malaikat-malaikat-Nya, kitab-kitab-Nya, rasul-rasul-Nya, hari kiamat, dan takdir atau qadha dan qadar. Rukun Iman merupakan pondasi iman yang kuat bagi umat Muslim dalam memperkokoh hubungan dengan Allah dan menjalankan ajaran-Nya. Dengan memahami dan mengamalkan Rukun Iman, kita dapat memperdalam keimanan, menguatkan keyakinan, dan memperoleh panduan hidup yang benar. Semoga modul ini memberikan pemahaman yang baik dan menginspirasi dalam memperkokoh iman kita.'),
(8, 'nabi & rasul', '\nNabi adalah Seorang utusan Allah SWT pembawa ajaran agama yang dibawa rosul sebelumnya. Sebutan lain untuk nabi adalah orang yang menyampaikan berita gembira (basyir) dan pembawa peringatan (nadzir). Sementara Rasul Artinya adalah utusan, duta, atau sering disebut al mursalun (orang-orang yang dikirim) dalam Al Quran. Rasul adalah utusan Allah SWT yang mengajarkan agama atau wahyu baru pada masyarakat umum. \n', '\nTugas nabi antara lain adalah Menyerukan iman kepada Allah dan mengesakanNya, Menyerukan iman kepada hari akhir dan hari pembalasan, dan Menerangkan syariat demi kemaslahatan dan kebahagiaan manusia di dunia dan akhirat. \n', '\nSementara Tugas rasul adalah Menyeru makhluk untuk hanya menyembah kepada Allah SWT, Menyampaikan perintah dan larangan Allah SWT pada umat, Menunjukkan dan membimbing manusia ke jalan yang lurus, Menjadi teladan yang baik, Memperingatkan manusia mengenai hari akhir, Memalingkan perhatian manusia menjadi lebih fokus pada kehidupan akhirat, dan Menyatakan alasan untuk tidak membantah Allah SWT pada manusia.\n', '\nNabi adalah manusia biasa yang menjalankan hidup seperti orang lain pada umumnya. Dia juga mengalami sakit, lemah, tua, dan mati. Namun nabi punya keistimewaan serta sifat yang luhur dan agung sesuai kedudukannya.\n', '\nSementara Rasul diambil golongan umat itu sendiri yang berasal keturunan mulia. Dia telah dipilih Allah SWT dan diberi karunia, misal kebaikan pikiran atau kesucian rohani. Allah SWT juga memberikan keutamaan (maziat) pada para rosul agar dapat menyampaikan ajaran Allah SWT. Maziat juga diberikan agar dapat menjadi contoh bagi umat dalam urusan dunia dan akhirat.\n');

-- --------------------------------------------------------

--
-- Table structure for table `posttest`
--

DROP TABLE IF EXISTS `posttest`;
CREATE TABLE IF NOT EXISTS `posttest` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `soal` text,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `kunci` varchar(255) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posttest`
--

INSERT INTO `posttest` (`id`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `jenis`) VALUES
(1, 'kata syahadat berasal dari bahasa Arab, yaitu syahida yang berarti....', 'bersedia', 'bersiap', 'bersaksi', 'takut', 'c', 'syahadat'),
(2, 'Setelah mengikrarkan dua kalimat syahadat dan mengetahui makna yang terkandung di dalam keduanya dan segala konsekuensinya, manusia lantas dapat....', 'shalat', 'mandi wajib', 'wudhu', 'menerapkan dalam kehidupan sehari-hari', 'd', 'syahadat'),
(3, 'Beriman dan bertaqwa kepada Allah, menjalankan segala perintah dan menjauhi segala larangannya, \nmenyembah hanya kepada Allah tanpa menyekutukannya sedikitpun dengan sesuatu apapun merupakan bentuk dan implementasi terhadap....', 'syahadat', 'menerapkan kalimat syahadat', 'tauhid', 'ibadah', 'c', 'syahadat'),
(4, 'konsekuensi terhadap kalimat syahadat adalah.....', 'Selalu mengikuti sunnah Nabi, ittiba’, tidak taklid atau ikut-ikutan dalam mengerjakan suatu amalan ibadah', 'bersedia sakit', 'menerapkan sunnah sehari-hari', 'shalat', 'a', 'syahadat'),
(5, 'Rukun iman yang paling fundamental yang diajarkan oleh Allah adalah....', 'syahadat', 'keesaan allah (tauhid)', 'puasa', 'haji', 'b', 'syahadat'),
(6, 'Pengertian salat adalah....', 'ibadah wajib umat Islam yang ditunaikan sebanyak lima waktu', 'ibadah', 'bersuci', 'takut', 'a', 'shalat'),
(7, 'Berasal dari pengertian salat yang dapat dipahami, salat ditujukan untuk berkomunikasi dengan....', 'rasulullah', 'setan', 'Allah SWT', 'orang tua', 'c', 'shalat'),
(8, 'Dalam buku berjudul Fiqh Ibadah oleh Abdul Aziz Muhammad Azzam dan Abdul Wahhab Sayyed Hawwas, tujuan salat adalah....', 'beribadah kepada Allah', 'mensucikan diri', 'meminta ampun', 'menghubungkan seorang hamba kepada penciptanya', 'd', 'shalat'),
(9, 'Syarat Sah Salat yang paling utama adalah....', 'suci', 'beragama islam', 'syahadat', 'tidak mabuk', 'b', 'shalat'),
(10, 'berikut adalah beberapa rukun shalat, kecuali....', 'niat', 'takbirotul ihram', 'sujud 2 kali', 'duduk diantara 1 sujud', 'd', 'shalat'),
(11, 'Allah SWT berfirman : “Dirikanlah salat dan bayarkanlah zakat”, firman tersebut terdapat pada surah....', 'al-baqarah : 100', 'al-baqarah : 44', 'al-baqarah : 43', 'al-ikhlas : 1', 'c', 'zakat'),
(12, 'Terdapat berbagai macam zakat, di antaranya....', 'zakat mal', 'zakat fitrah', 'zakat hidayah', 'A dan B benar', 'd', 'zakat'),
(13, 'zakat berasal dari bentuk kata “zaka” yang berarti, kecuali....', 'suci', 'baik', 'tumbuh', 'menyatu', 'd', 'zakat'),
(14, 'Zakat ditunaikan untuk diberikan kepada golongan yang berhak menerimanya, golongan yang berhak menerima dinamakan....', 'adnan', 'asnaf', 'fakir', 'hizbullah', 'b', 'zakat'),
(15, 'Dinamakan zakat, karena di dalamnya terkandung harapan untuk memperoleh....', 'berkah', 'harta lagi', 'ridha orang tua', 'pengakuan masyarakat', 'a', 'zakat'),
(16, 'Puasa wajib atau shaum wajib merupakan jenis puasa yang harus dilaksanakan oleh.....', 'seluruh manusia', 'pemuka agama', 'seluruh umat islam', 'guru', 'c', 'puasa'),
(17, 'berikut adalah rukun-rukun puasa, kecuali...', 'islam', 'niat', 'menahan serta mengontrol diri', 'sahur', 'd', 'puasa'),
(18, 'Apabila seorang umat muslim berhasil melaksanakan puasa jenis ini maka ia akan mendapatkan....', 'PS 5', 'pujian', 'pahala', 'ridha orang tua', 'c', 'puasa'),
(19, 'apabila seorang muslim belum baligh, apakah diwajibkan untuk berpuasa....', 'wajib', 'dianjurkan', 'mubah', 'makruh', 'b', 'puasa'),
(20, 'ketika seseorang sedang dalam perjalanan jauh(musafir), apakah diwajibkan untuk puasa?', 'wajib', 'sunnah', 'tidak, tetapi wajib diganti', 'tidak, dan tidak harus diganti', 'c', 'puasa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` char(15) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `nilai1` int DEFAULT NULL,
  `nilai2` int DEFAULT NULL,
  `nilai3` int DEFAULT NULL,
  `nilai4` int DEFAULT NULL,
  `nilai5` int DEFAULT NULL,
  `nilai6` int DEFAULT NULL,
  `nilai7` int DEFAULT NULL,
  `nilai8` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `alamat`, `hp`, `status`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1', 'jakarta', '081296444322', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
