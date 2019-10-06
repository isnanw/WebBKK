-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2019 pada 03.36
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mybkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_about`
--

CREATE TABLE `tbl_about` (
  `No` int(9) NOT NULL,
  `Gambar` varchar(150) NOT NULL,
  `BKK` longtext NOT NULL,
  `Sejarah` mediumtext NOT NULL,
  `Visi` varchar(500) NOT NULL,
  `Misi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_about`
--

INSERT INTO `tbl_about` (`No`, `Gambar`, `BKK`, `Sejarah`, `Visi`, `Misi`) VALUES
(4, 'BKK.jpg', '<p><em>Bursa Kerja Khusus (BKK)</em>&nbsp;adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.</p>\r\n<p><strong><em>Urian Tugas BKK "PATRIA KARYA BHAKTI" SMKN 1 KRA</em></strong></p>\r\n<p class="MsoListParagraphCxSpFirst" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pimpinan BKK</p>\r\n<ul>\r\n<li>Mengkoordinir pelaksanaan yang menjadi tugas dan wewenang BKK</li>\r\n<li>Membantu Kepala sekolah untuk memasyarakatkan program BKK ke seluruh unsur sekolah</li>\r\n<li>Mengkoordinasikan kegiatan dengan DInsosnakertrans dan pihak lainnya</li>\r\n</ul>\r\n<p class="MsoListParagraphCxSpMiddle" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas IPK (Informasi Pasar Kerja)</p>\r\n<ul>\r\n<li>Mencari informasi adanya lowongan pekerjaan</li>\r\n<li>Melakukan peningkatan dan pendekatandengan DU/ DI</li>\r\n</ul>\r\n<p class="MsoListParagraphCxSpMiddle" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Pendaftaran dan pendekatan dengan DU/ DI</p>\r\n<ul>\r\n<li>Mendaftar alumni/ pencaker yang melamar pekerjaan ke BKK</li>\r\n<li>Memberi bimbingan jabatan/ analisis jabatan kepada siswa/ alumni</li>\r\n<li>Menginformasikan lowongan pekerjaan kepada alumni/ pencaker</li>\r\n</ul>\r\n<p class="MsoListParagraphCxSpMiddle" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Interview, Pendataan Lowongan Pekerjaan</p>\r\n<ul>\r\n<li>Melakukan tes wawancara : fisik kepada pencaker (bila ada)</li>\r\n<li>Mendata lowongan yang ada dan mengarsipkannya</li>\r\n<li>Mengelola keuangan BKK</li>\r\n</ul>\r\n<p class="MsoListParagraphCxSpMiddle" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Administrasi / TU</p>\r\n<ul>\r\n<li>Melakukan pekerjaan administrasi BKK</li>\r\n<li>Melakukan pekerjaan pelaporan</li>\r\n</ul>\r\n<p class="MsoListParagraphCxSpMiddle" style="margin-left: 18.0pt; mso-add-space: auto; text-indent: -18.0pt; mso-list: l6 level1 lfo1;">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Petugas Penempatan Tenaga Kerja</p>\r\n<ul>\r\n<li>Melakukan pelaksanaan penempatan tenaga kerja</li>\r\n<li>Mempromosikan tamatan kepada DU/DI atau pemakai tamatan lainnya</li>\r\n<li>Mengadakan penelusuran tamatan&nbsp;</li>\r\n</ul>', '<p><em>SMK Negeri 1 Karanganyar</em> Berdiri 7 November 1963 dengan SK MENDIKBUD No.974/B-3/Kedj. Dikenal dengan sebutan SMEA. Jumlah siswa 1.443 dari 37 Rombongan Belajar. Luas Lahan 7.656 M2 dan Luas Gedung 4.750 M2 seluruh gedung berlantai 2. Luas lahan Pengembangan 1.821 M2 masih dalam proses pengadaan melalui Dinas Pendidikan Pemuda dan Olahraga Kabupaten Karanganyar. Halaman/Taman : 1.947 M2 disertai dengan Lapangan Olahraga seluas 788 M2. Menyiapkan siswa untuk memasuki lapangan kerja serta mengembangkan sikap profesional pada bidang Akuntansi, Administrasi Perkantoran, Pemasaran, Busana Butik, Multimedia dan Usaha Perjalanan Wisata.</p>\r\n<p><strong><em>Penempatan Kerja:</em></strong><br /><em>Penempatan:</em><br /><em>1. Antar Kerja Lokal (AKL)</em>&nbsp;Penempatan se Provinsi Jawa Tengah :<br />&bull; PT. NATURAL AROMATIK NUSANTARA<br />&bull; PT. LIEBRA PERMANA<br />&bull; PT. SINAR AGUNG SELALU SUKSES (SAS)<br />&bull; PT. SARI WARNA ASLI GARMENT<br />&bull; PT. BTPN SYARIAH<br />&bull; PT. RAMAYANA LESTARI SENTOSA TBK<br />&bull; PT. DAN LARIS<br />&bull; PT. DUNIA SETIA SANDANG ASLI TEXTIL V<br />&bull; PT. HARDO SOLOPLAST<br />&bull; PT. KONIMEX<br />&bull; PT. KUSUMAHADI SANTOSO<br />&bull; PT. PNM PERSERO<br />&bull; PT. BINTANG ABADI PERSADA<br />&bull; PT. IFARS<br />&bull; PT. DELTA MERLIN DUNIA TEXTILE VI<br />&bull; PT. KENINDO GRAND SEJAHTERA<br />&bull; PT. PELITA THOMANG MAS<br />&bull; CV. KARYA SOLENOIDA (FEMAX MANUFACTURE)<br />&bull; PT. RINA JAYA GARMEN SUKOHARJO<br />&bull; PT. NESIA PAN PACIFIC WONOGIRI<br /><em>2. Antar Kerja Antar Daerah (AKAD)</em>&nbsp;Penempatan di luar Provinsi Jawa Tengah :<br />&bull; PT. PHILIPS BATAM<br />&bull; PT. JMS BATAM<br />&bull; PT. EX BATAM<br /><em>3. Antar Kerja Antar Negara (AKAN)</em>&nbsp;Penempatan di luar negeri. Bekerja sama dengan PT. KARYATAMA MITRA SEJATI Cabang Sukoharjo.</p>', '<p>Terwujudnya tamatan cerdas dan terampil dan kreatif, berkepribadian unggul, berakhlak mulia. Berjiwa wirausaha, berwawasan lingkungan serta mampu bersaing di era global.</p>', '<p>1. Membekali peserta didik agar mampu menjadi insan cerdas yang terampil, kreatif dan kompetitif.<br />2. Membekali peserta didik agar memiliki kepribadian unggul, etos kerja yang tinggi dan berbudi pekerti luhur.<br />3. Membekali peserta didik dengan kompetensi yang memadai agar memiliki jiwa mandiri dan mampu berwirausaha.<br />4. Membekali peserta didik agar memiliki wawasan dan kepedulian terhadap lingkungan.<br />5. Membekali peserta didik agar memiliki daya saing tinggi dalam memasuki dunia kerja maupun dalam memasuki jenjang pendidikan yang lebih tinggi.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi_singkat` varchar(300) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `username`, `gambar`, `judul`, `deskripsi_singkat`, `deskripsi`, `tgl_upload`) VALUES
(10, 'Isnan Wahyudi123', 'employee-moral-660x350.jpg', 'Pentingnya Bekerja Sesuai Dengan Passion dan Hasrat Kita.', 'Di dunia kerja, saya terkadang bertemu orang-orang yang terus bertahan di pekerjaan yang sebenarnya tidak mereka nikmati.', '<p>Di dunia kerja, saya terkadang bertemu orang-orang yang terus bertahan di pekerjaan yang sebenarnya tidak mereka nikmati. Dengan keyakinan bahwa mereka tidak punya pilihan dan tidak punya kesempatan lain di luar sana. Pentingnya Bekerja Sesuai Dengan Passion Kita. Mereka terus mengeluh dan merasa pekerjaan mereka hanyalah sekumpulan tugas dan rutinitas yang harus diselesaikan. Mereka bekerja sekedar untuk survive atau sekedar agar tidak dipecat. Kalau sudah begini, jangankan menikmati pekerjaan. Stress dan burn out malah datang yang akhirnya berbuah apathy. Namun sebelum bicara lebih lanjut tentang Pentingnya Bekerja Dengan Passion Kita.</p>\r\n<p>Tapi, Tahukah Apa Itu Passion? Tidak ada lagi excitement, tidak ada motivasi untuk melakukan lebih dari standar. Apalagi memikirkan inovasi atau breakthrough di pekerjaan. Kalau sudah begini, bagaimana prestasi kerjanya bisa unggul? Di sisi lain, saya juga menjumpai orang-orang yang berprestasi di pekerjaan yang menurut mereka sebenarnya tidak mereka nikmati. Buat mereka pembicaraan tentang passion dan perasaan mereka dalam pekerjaan adalah obrolan yang tidak relevan. Karena buat mereka, pekerjaan bukanlah tentang suka atau tidak, menikmati atau tidak. Pentingnya Bekerja Sesuai Dengan Passion Kita. Apa itu passion dan pentingnya bekerja sesuai dengan passion Mereka meninggalkan passion mereka di luar pekerjaan. Mereka adalah &ldquo;profesional sejati&rdquo;. Orang-orang hebat yang memang punya kapabilitas besar dalam diri mereka. Orang yang menjalani pekerjaannya dengan rasional, penuh komitmen dan tanggung jawab. Regardless of how they feel about it.</p>\r\n<p>Mereka biasanya mencari kesenangan dari hal-hal di luar pekerjaan. Dan mereka mendapatkan kepuasan dari hal-hal yang bersifat eksternal. Seperti gaji atau fee yang diterima, fasilitas yang menjamin pemenuhan kebutuhan dan gaya hidup yang nyaman. Prestige jabatan, atau pengakuan perusahaan dan rekan-rekan akan prestasi mereka. Yah, ini memang sebuah option, namun saya tergoda untuk berpikir. Jika mereka bisa mencapai prestasi dalam pekerjaan yang tidak mereka nikmati. Bayangkan bagaimana cemerlangnya mereka bila sejak awal berfokus pada pekerjaan yang memang sejalan dengan passion mereka. Sehingga bisa mengeluarkan semua potensi dan kapasitas yang ada di dalam diri mereka secara optimal. Bekerja Sesuai Dengan Passion sebagai hasrat terpendam Ada orang-orang yang menyimpan passionnya sebagai &ldquo;hasrat atau impian terpendam&rdquo;. Passion dianggap terlalu muluk untuk diungkapkan, &lsquo;impractical&rsquo;.</p>\r\n<p>Tidak realistis atau tidak ada peluang untuk bisa jadi kenyataan. Mereka melakukan pekerjaan-pekerjaan yang jauh dari passion mereka. Melalui hari demi hari tanpa pernah tahu apakah sebenarnya mereka bisa mewujudkannya. Apa itu passion dan pentingnya bekerja sesuai dengan passion Bahkan, terkadang sukses yang diraih pun hanya membuat mereka semakin jauh dari passion mereka. Hingga, pada akhirnya, mereka memang kehabisan waktu untuk mendalami apa yang diperlukan ke tingkat yang memungkinkan. Mereka hanya bisa melamunkan &ldquo;hasrat yang terkubur&rdquo;, atau &ldquo;impian-impian yang kandas&rdquo; Yang lebih parah, ada yang memproyeksikannya pada anak-anak mereka. Anak-anak yang dibentuk dan dipaksa untuk mewujudkan hasrat atau impian terpendam orangtuanya. Jadi, jika saat ini kamu belum tahu apa passion kamu sebenarnya, belum terlambat untuk berusaha menemukannya. Selagi muda, selagi belum melangkah jauh. Explore the world, explore yourselves, dig deeper, listen to your heart, and find your true passion. Why bother? Kalau kamu percaya konsep &ldquo;soul over body&rdquo;, saat kita melakukan sesuatu &lsquo;soulfully&rsquo;; dengan penuh antusiasme, excitement dan enjoyment, energi kita akan lebih melimpah. Tubuh dan pikiran seperti terpacu untuk terus &ldquo;on&rdquo; dan fokus. Naturally hasilnya pun lebih bagus daripada sesuatu yang kita lakukan sekadarnya saja atau semata karena memenuhi tugas. Passion can bring out the best in you, the best of you.</p>\r\n<p><em>&ldquo;Do what you love to do, find someone who&rsquo;s willing to pay you for it. Then you&rsquo;ll never have to work a single day of your life&rdquo;</em>. Itulah bekerja dengan passion.</p>', '2018-12-10 03:06:39'),
(11, 'Isnan Wahyudi123', 'IMG_4809 - Copy.JPG', '5 Hal Baik yang Kamu Dapatkan dari Bekerja Keras di Usia Muda', 'Demi masa depan yang cemerlang', '<p>Bekerja sudah menjadi bagian dari kehidupan orang dewasa. Demi mendapatkan karir yang cemerlang, semua berlomba untuk menjadi yang terbaik.</p>\r\n<p>Khusus bagi anak muda, bekerja keras sedari muda bisa memberi keuntungan tersendiri. Selain pengalaman yang lebih banyak, kamu bisa mempersiapkan jalanmu dengan lebih matang.</p>\r\n<p>Meski lelah karena harus bekerja, setidaknya 5 hal baik ini bisa kamu peroleh karena sudah berusaha keras sejak muda.</p>\r\n<p><strong>1. Kamu sedang memulai langkah untuk mempersiapkan masa depan yang cerah</strong></p>\r\n<p>Dengan kerja keras dari muda, sebenarnya kamu sedang mempersiapkan langkah awal untuk meraih masa depan yang cerah. Kamu meniti tangga satu persatu untuk belajar dari yang paling dasar sampai bisa jadi profesional.</p>\r\n<p>Meski jalanmu masih berat dan berliku, jangan menyerah. Karena pemenang sejati gak akan mudah kalah.</p>\r\n<p><strong>2. Sejak muda, kamu sudah belajar arti tanggung jawab dan kerja keras</strong></p>\r\n<p>Bekerja keras dari muda mengajarkanmu arti tanggung jawab yang sesungguhnya. Contohya bagaimana mengatur jadwal dengan efektif, menciptakan peluang dan belajar banyak dari pengalaman.</p>\r\n<p>Kamu punya banyak kesempatan untuk mencoba hal-hal baru, atau menemukan passion yang sesuai dengan keinginanmu. Tanggung jawab yang kamu emban sejak muda dapat membentukmu jadi pribadi yang lebih bertanggung jawab.</p>\r\n<p><strong>3. Mentalmu juga terlatih agar tahan banting dan tak mudah menyerah</strong></p>\r\n<p>Tak perlu berkecil hati jika hidupmu tak senyaman teman-temanmu yang lain. Mereka bisa bersantai sementara kamu sibuk mengumpulkan pundi uang.</p>\r\n<p>Kamu memang mengalami rasa sakit yang bertubi-tubi, tapi perlahan, mentalmu sedang di tempa dan dilatih agar sekuat baja. Asal semangatmu tak patah dan terus berusaha, impian dan cita-cita yang kamu impikan pasti bisa didapatkan.</p>\r\n<p><strong>4. Kamu tak menghabiskannya masa muda dengan sia-sia</strong></p>\r\n<p>Bekerja itu memang melelahkan, tapi tak lebih lelah dari orang lain yang sedang mencari pekerjaan. Dengan bekerja giat, kamu sedang memanfaatkan masa muda dengan sebaik-baiknya.</p>\r\n<p>Waktumu tidak terbuang sia-sia dengan melakukan hal yang tidak berguna. Tenagamu masih kuat dan semangatmu masih membara. Bahkan dari hasil kerja kerasmu, kamu bisa membantu orang tua atau kerabat terdekat. Bukankah itu sangat membanggakan?</p>\r\n<p><strong>5. Semuanya kamu lakukan demi meraih masa depan yang gemilang</strong></p>\r\n<p>Ada harga mahal yang harus dibayar demi meraih kesuksesan, seperti air mata dan jerih payah dari rasa lelah. Tapi dengan tekad kuat yang diimbangi dengan kerja keras, kamu bisa meraih masa depan gemilang yang kamu impikan. Bersabarlah, kamu pasti bisa melewatinya.</p>\r\n<p>Masa muda adalah saat yang terbaik, oleh sebab itu kamu harus berusaha segiat-segiatnya di usia belia, semangat!</p>', '2019-01-01 12:40:04'),
(12, 'yudhi', 'Ilustrasi-Penderita-Alzheimer.jpg', '7 Resiko Memiliki Ambisi yang Besar', 'Apa yang akan kamu korbankan demi mimpimu?', '<p>Untuk orang-orang yang punya sifat ambisius, kamu tentu sudah punya bayangan seperti apa dirimu nanti lima tahun dari sekarang. Kamu pun rela melakukan apa saja demi mewujudkannya. Popbela sangat kagum! Namun, ambisi yang besar itu tak datang dengan cuma-cuma. Ambisi yang terlalu besar&nbsp;akan banyak menyita waktu, emosi, dan tenagamu. Jadi sebelum kamu melangkah lebih jauh, coba pertimbangkan dulu keputusanmu dengan tujuh tanda ini.</p>\r\n<h3>1. Tak punya waktu untuk menikmati hasil&nbsp;kerja kerasmu</h3>\r\n<p>Orang yang berambisi tinggi biasanya rela bekerja keras membanting tulang seharian penuh. Kurang tidur pun tak jadi masalah, apalagi mengorbankan akhir pekan. Tapi kamu jadi tak punya waktu misalnya untuk bersenang-senang merayakan keberhasilan proyekmu. Atau untuk mentraktir sahabatmu karena kamu baru saja naik jabatan. Mana sempat, sih?&nbsp;</p>\r\n<h3>2.&nbsp;Kehilangan sahabat, kekasih, bahkan keluarga</h3>\r\n<p>Saking sibuknya, kamu jadi kehilangan kesempatan untuk menghabiskan waktu berkualitas dengan orang-orang terdekatmu. Kalau kamu tidak benar-benar berusaha meluangkan waktu untuk mereka, perlahan-lahan mereka pun akan melangkah semakin jauh darimu.&nbsp;</p>\r\n<h3>3. Orang-orang jadi berharap terlalu tinggi padamu</h3>\r\n<p>Karena setiap orang sudah melihat bahwa kamu punya cita-cita yang bahkan lebih tinggi dari langit, orang-orang pun jadi memiliki ekspektasi yang tinggi pula padamu. Tak jarang mereka akan jadi tidak realistis dan malah melunjak karena merasa kamu akan melakukan apa saja demi mewujdukan mimpimu. Kamu pun jadi takut mengecewakan orang lain sehingga lupa bahwa alasan utama mengapa kamu sangat berambisi meraih cita-citamu adalah bagi dirimu sendiri, bukan untuk siapa pun.&nbsp;</p>\r\n<h3>4. Masalah yang kamu hadapi jadi semakin berat</h3>\r\n<p>Makin besar ambisimu, semakin berat juga beban yang harus kamu pikul. Kamu harus mudah beradaptasi dengan perubahan dan lingkungan yang tidak sesuai harapanmu, tanggung jawabmu semakin banyak, dan kamu harus siap keluar dari zona nyamanmu. Tak bisa dipungkiri, suatu hari nanti kamu akan merasa kewalahan juga dan semangatmu menguap. Masa-masa itulah yang akan jadi ujian terbesarmu.&nbsp;</p>\r\n<h3>5. Dibutakan oleh hasil&nbsp;</h3>\r\n<p>Ambisi yang besar bisa membuatmu terlalu fokus untuk meraih hasil yang sempurna dan memuaskan. Sehingga, kamu pun melupakan pentingnya menghayati proses dan setiap langkah kecilmu. Jadi ketika kamu mendapat sebuah pengalaman berharga dan mendewasakan dari kesalahan yang kamu buat, kamu tidak mau tahu dan hanya melihat kegagalanmu saja.&nbsp;</p>\r\n<h3>6. Menyakiti atau merugikan orang lain</h3>\r\n<p>Yang satu ini sudah parah banget, Bela. Kalau kamu sampai menghalalkan segala cara untuk meraih mimpimu, tandanya kamu harus renungkan lagi apakah tujuan yang ingin kamu capai benar-benar setimpal dengan usahamu? Sebenarnya apa pun alasannya, kamu tak boleh menyakiti atau merugikan orang lain, apalagi dengan penuh kesadaran. Ingat Bela, jangan pernah memperlakukan orang lain seperti&nbsp;kamu tak ingin diperlakukan.&nbsp;&nbsp;</p>\r\n<h3>7. Kalau kamu jatuh, sakitnya tak bisa diobati</h3>\r\n<div>Punya ambisi besar akan membuatmu jadi terobsesi. Kalau sudah terobsesi, otakmu hanya akan fokus pada hal itu saja dalam hidupmu. Tapi kamu harus tahu bahwa ambisi besar tak menjamin keberhasilan. Jadi bisa saja pada satu titik kamu menemui kegagalan dan harus jatuh cukup dalam. Karena seluruh energi dan pikiran sudah kamu curahkan untuk ambisimu ini, tentu rasa sakitnya ketika kamu jatuh sungguh tak terobati lagi. Mungkin hanya waktu yang bisa menjawabnya.&nbsp;</div>\r\n<div>Bagaimana, Bela? Sudah siap menemui tujuh risiko di atas dengan ambisimu yang besar? Punya cita-cita itu boleh. Sangat dianjurkan, malah! Namun, ingatlah untuk selalu memijakkan kakimu pada bumi. Gengsi dan ambisimu mungkin akan membawamu terbang ke atas, tapi apakah pemandangan yang kamu lihat di atas setimpal dengan segala pengorbanan yang sudah kamu berikan untuk mimpimu ini?&nbsp;</div>', '2019-01-01 13:05:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `No` int(9) NOT NULL,
  `NoTlp` varchar(100) NOT NULL,
  `NoWA` varchar(50) NOT NULL,
  `Alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_contact`
--

INSERT INTO `tbl_contact` (`No`, `NoTlp`, `NoWA`, `Alamat`) VALUES
(1, 'bkksmkn1karanganyar@gmail.com', '(0271) 495079 / WA : 085747147985', 'Jl. Monginsidi No.1, Manggeh, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `No` int(9) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Deskripsi` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`No`, `Judul`, `Gambar`, `Deskripsi`) VALUES
(5, 'Tari Pembukaan Job Matching SMK 2018', 'IMG_6754.JPG', ''),
(6, 'Job Matching', 'IMG_6772.JPG', ''),
(7, 'Job Matching', 'IMG_6757.JPG', ''),
(8, 'Partisipan Job Matching 2018', 'IMG_6775.JPG', ''),
(9, 'Tari Pembukaan Job Matching SMK 2018', 'IMG_6751.JPG', ''),
(10, 'Line Job', 'IMG_6889.JPG', ''),
(11, 'Pembukaan Job Matching SMK 2018', 'IMG_6856.JPG', ''),
(12, 'Pendaftaran TopKarir dan Sosialisasi Line Job', 'IMG_6881.JPG', ''),
(13, 'Partisipan Job Matching 2018', 'IMG_6782.JPG', ''),
(14, 'Job Macthing SMK 2018', 'IMG_6791.JPG', ''),
(15, 'Line Jobs', 'IMG_6892.JPG', ''),
(16, 'Job Macthing SMK 2018', 'IMG_6821.JPG', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_industri`
--

CREATE TABLE `tbl_industri` (
  `No` int(9) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Nama` varchar(80) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NoHp` varchar(20) NOT NULL,
  `DeskripsiSingkat` varchar(130) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_industri`
--

INSERT INTO `tbl_industri` (`No`, `Gambar`, `Nama`, `Alamat`, `NoHp`, `DeskripsiSingkat`, `Deskripsi`) VALUES
(10, 'hhhh.jpg', 'PPTKIS PT. KARYATAMA MITRA SEJATI', 'JL. SOLO - SUKOHARJO KM. 10, NGAGLIK, SIDOREJO, BENDOSARI, SUKOHARJO', '(0271) 6595791', 'Kerja Di Malaysia ??? Gaji Besar, Tidak Pakai Biaya / Gratis ??? ', 'PT. KARYATAMA MITRA SEJATI- PT. Karyatama Mitra Sejati (PT. KMS) adalah penyalur tenaga kerja Indonesia Khususnya malaysia. PT. KMS merupakan PJTKI resmi yang siap membantu anak muda Indonesia untuk mendapatkan pekerjaan. karena PT. KMS sudah bekerja sama dengan beberapa pabrik elektronik di Malaysia, Seperti :\r\n- PT. Panasonic\r\n- PT. Osram\r\n- PT. Coba Vision\r\n- PT. Elna\r\n- PT. VS\r\n- PT. Jabil\r\n- PT. Plexus\r\n- Sumitomo, dll\r\n\r\nKami merupakan lembaga resmi yang sudah mendapatkan ijin oleh Dinas tenaga kerja, transmigrasi dan Kependudukan untuk menyalurkan tenaga kerja Indonesia ke Malaysia. Bagi anda yang berminqt bekerja di pabrik elektronik Malaysia silahkan menghubungi Bpk Rokhmat                     '),
(11, 'kecil_1513055575type-a.jpg', 'PT. PHILIPS BATAM', 'Jalan Beringin  Lot 1, 2nd Floor, Batamindo Industrial Park  Mukakuning  Batam,  29433  Indonesia', '(0778) 611958 - 6119', 'P.T. Philips Industries Batam operates as a subsidiary of Koninklijke Philips N.V.', 'P.T. Philips Industries Batam operates as a subsidiary of Koninklijke Philips N.V.'),
(12, 'unternehmen.jpg', 'PT. JMS BATAM', 'Jl Beringin Lot 211 Batamindo Industrial Park, Muka Kuning Batam 29433', '(0770) 611807', 'PT. JMS BATAM Adalah perusahaan asing asal jepang yang memproduksi alat- alat medis untuk Rumah Saki', 'PT. JMS BATAM Adalah perusahaan asing asal jepang yang memproduksi alat- alat medis untuk Rumah Sakit.\r\nPT. JMS BATAM Produsen Alat Medis & Rumah Sakit (mis. Garis Darah, Kantong Darah, Kantong Transfer, Set Transfusi, Set Infus, Jarum AVF Pengaman, Kulit Kepala, Nadi, dst.)                    '),
(13, 'Natura Aromatik.png', 'PT Natura Aromatik Nusantara', 'Jl. Raya Solo Sragen KM7  Desa Dagen. Kec. Jaten, Kab, Karanganyar  Jawa Tengah, Indonesia 57771', 'Solo +62-271 7889448', 'PT Natura Aromatik Nusantara didirikan sebagai upaya kolaboratif individu pada tahun 2014, masing-m', 'PT Natura Aromatik Nusantara didirikan sebagai upaya kolaboratif individu pada tahun 2014, masing-masing memiliki keahlian yang luas di industri ini, Natura Aromatik Nusantara adalah perusahaan terbatas swasta dengan impian bersama untuk memupuk anugerah alami Indonesia dan memberi nilai bagi produk kami. Mengambil keuntungan dari koleksi bahan baku yang melekat di Indonesia untuk ekstrak alami berkualitas - ekstrak, minyak atsiri dan bahan kimia aroma, Natura memberikan hubungan yang saling menguntungkan bagi pasangannya dalam industri aroma dan aroma, makanan & minuman, kosmetik dan nutrisi.'),
(14, '229cf57f5d.png', 'PT LIEBRA PERMANA', 'Jln. Raya Soekarno-Hatta KM.31 Bawen, Harjosari, Kab. Semarang', '(0298) 522789', 'PT Liebra Permana merupakan perusahaan manufaktur pakaian dalam wanita yang terus berkembang, berska', '                    	PT Liebra Permana merupakan perusahaan manufaktur pakaian dalam wanita yang terus berkembang, berskala internasional, 100% produk ternama eksport dengan lebih dari 10.000 karyawan.                     '),
(15, 'device.jpg', 'PT. SINAR AGUNG SELALU SUKSES', 'Ngalasan RT 02 RW 01 Brujul Jaten Karanganyar', '(0271) 821439', 'PT. Sinar Agung Selalu Sukses adalah perusahan yang bergerak di bidang sparepart otomotif, yang berg', '                    	                    	                    	PT. Sinar Agung Selalu Sukses adalah perusahan yang bergerak di bidang sparepart otomotif, yang bergerak di bidang manufacturing. Tergabung di dalam SAS Group yang didalamnya ada 3 anak Perusahaan, yaitu PT Sinar Agung Selalu Sukses sebagai pengembang dan pembuatan spare part otomotif, PT. Sinar Agung Prasadikindo sebagai distributor yang memiliki 13 cabang di seluruh kota besar di indonesia, serta PT. Surya Anugerah Setia Abadi (Part Station), yang memiliki 34 cabang retail di seluruh Indonesia.                                                             '),
(16, '1497599229saic.jpg', 'PT. Sari Warna Asli Garment', 'Jl. HOS Cokroaminoto No.28, Pucangsawit, Jebres, Kota Surakarta, Jawa Tengah 57125', '0271-648747', 'PT. Sari Warna Asli Garment adalah perusahaan besar yang bergerak dibidang industri garment. ', 'PT. Sari Warna Asli Garment adalah perusahaan besar yang bergerak dibidang industri garment.\r\n\r\nSejarah awal perusahaan berawal dari mergernya PT. Sritex dan PT. Sari Warna Asli. Keduanya merupakan perusahaan textile terbesar di Indonesia. PT. Sari Warna Asli Garment merupakan perusahaan manukfaktur yang bergerak dalam bidang pembuatan pakaian baik baju, celana maupun jaket, baik itu militer maupun bukan.\r\n\r\nPT. Sari Warna Asli Garment mulai beroperasi sejak tanggal 1 Januari 2012, namun baru diresmikan pada tanggal 18 Mei 2012. Memiliki jumlah total karyawan sementara sekitar 760 orang pada bulan Januari-Agustus, namun per bulan Desember 2012 jumlahnya sudah bertambah menjadi lebih dari 1000 orang dan akan terus bertambah setiap tahunnya.'),
(17, 'DSC04484.JPG', 'PT.Nesia Pan Pacific Clothing Wonogiri', 'Jalan Ngadirojo/Wonogiri-Ponorogo, Dekat Warung Makan Barokah, Kerjolor, Ngadirojo, Dusun Ketonggo, ', '(0273) 5327123', 'Garment Exporter', '                    	Garment Exporter in Indonesia                    '),
(18, 'btpn.png', 'PT. BTN SYARIAH', 'PUSAT : Menara BTPN, lt. 12 - CBD Mega Kuningan  Jl. Dr. Ide Anak Agung Gde Agung, Kav. 5.5 - 5.6  J', '+62 21 300 26 400', 'BTPN Syariah adalah bank umum syariah ke 12 yang ada di Indonesia, memiliki tekad untuk menumbuhkan ', 'BTPN Syariah adalah bank umum syariah ke 12 yang ada di Indonesia, memiliki tekad untuk menumbuhkan jutaan rakyat Indonesia sehingga memiliki kehidupan yang baik sesuai dengan slogan Bank ini yaitu : Menjadi Bank Syariah Terbaik, untuk Keuangan Inklusif, Mengubah Hidup Berjuta Rakyat Indonesia.\r\n\r\nBTPN Syariah lahir dari perpaduan dua kekuatan yaitu, PT Bank Sahabat Purbadanarta dan Unit Usaha Syariah BTPN.\r\nBank Sahabat Purbadanarta yang berdiri sejak Maret 1991 di Semarang, merupakan bank umum non devisa yang 70% sahamnya diakusisi oleh PT Bank Tabungan Pensiunan Nasional, Tbk (BTPN), pada 20 Januari 2014, dan kemudian dikonversi menjadi BTPN Syariah berdasarkan Surat Keputusan Otoritas Jasa Keuangan (OJK) tanggal 22 Mei 2014.\r\nUnit Usaha Syariah BTPN yang difokuskan melayani dan memberdayakan keluarga pra sejahtera di seluruh Indonesia adalah salah satu segmen bisnis di PT Bank Tabungan Nasional Tbk sejak Maret 2008, kemudian di spin off dan bergabung ke BTPN Syariah pada Juni 2014.'),
(20, 'ramayana.jpg', 'PT. Ramayana Lestari Sentosa', 'Jl. K.H. Wahid Hasyim No. 220 A-B Jakarta Pusat', '-', 'PT. RAMAYANA LESTARI SENTOSA, Tbk merupakan salah satu perusahaan yang bergerak dalam bidang bisnis ', 'PT. RAMAYANA LESTARI SENTOSA, Tbk merupakan salah satu perusahaan yang bergerak dalam bidang bisnis rantai toko swalayan yang ada di Indonesia. Jaringan toko yang dirintis oleh pasangan suami istri Paulus Tumewu dan Tan Lee Chuan ini pertama kali dibuka pada tahun 1978.\r\n\r\nToko yang pertama didirikan dengan nama Ramayana Fashion Store ini merupakan harapan pasangan asal Ujung Pandang, Sulawesi Selatan ini untuk mengadu nasib di ibukota Jakarta. Berangkat dari rencana membuka sebuah department store yang menyediakan barang-barang berkualitas namun dengan harga yang terjangkau, mereka mulai memberanikan diri untuk membuka bisnis garmen dan pakaian.\r\n\r\nPerkembangan toko yang baru dibuka itu nyatanya menunjukkan hasil yang baik. Terbukti pada tahun 1985, mereka telah membuka toko cabang yang berada di luar Jakarta yakni di Bandung. Selain itu, mereka juga mulai mengembangkan produk-produk yang ditawarkan di toko. Pada toko cabang pertama mereka di Bandung, mereka telah memperkenalkan produ'),
(21, 'logo-femax.png', 'CV.Karya Solenoida(Femax Manufacture)', 'Jalan A. Yani no. 94, Wedi, Klaten, Jawa Tengah', '(0274) 580520 ', 'Penghemat BBM', 'Penghemat BBM bertempat di Jalan A. Yani no. 94, Wedi, Klaten, Jawa Tengah'),
(22, 'ca2c94cf50.jpg', 'PT. Dan Liris', 'Kelurahan Banaran, Kecamatan Grogol, Kabupaten Sukoharjo 57193 Jawa Tengah, Indonesia', '(0271) 714400, 74088', 'Mempekerjakan lebih dari 8.000 pekerja dan menggunakan mesin canggih, PT Danliris menempati posisi p', 'Mempekerjakan lebih dari 8.000 pekerja dan menggunakan mesin canggih, PT Danliris menempati posisi penting dalam industri tekstil terpadu di Indonesia. Terbukti dengan berhasilnya diraih Iso 9001 Cetificate.\r\nDanliris terletak di Sukoharjo (Solo), Jawa Tengah, pabrik PT Danliris menempati area seluas 500.000 meter persegi. Omset dari perusahaan telah meningkat dari tahun ke tahun.\r\n\r\nDalam ekspor tekstil dan produk tekstil PT Danliris sekarang menempati posisi dominan dalam mengamankan ekspor ke negara-negara merancang menerapkan kuota non.\r\n\r\nPenelitian dan upaya pengembangan dilakukan untuk meningkatkan kualitas dan keunggulan produk. Ini keahlian sumber daya manusia secara terus-menerus didorong jadi selalu siap untuk memenuhi tuntutan efisiensi dan kualitas produksi.\r\n\r\nDaya saing dinikmati oleh PT Danliris terletak dalam proses produksi efisien yang dihasilkan dari penggunaan teknologi tepat guna dan pekerja terampil serta inovasi dan kreativitas dalam menciptakan desain dan pola '),
(23, 'Lowongan_Kerja_Logo_Delta_Dunia_Sandang_Tekstil.jpg', 'PT. DUNIA SETIA SANDANG ASTIL TEXTILE V', 'JL. Kepunton No.35, Jagalan, Jebres, Kota Surakarta, Jawa Tengah 57162', '(0271) 653890', '', '                    	                    '),
(24, 'lowongan-kerja-pt-hardo-soloplast.jpg', 'PT. HARDO SOLOPLAST', 'Jl. Raya Palur Km.8, Desa Jetis, Kec. Jaten Kab. Karanganyar 57771 Surakarta - Indonesia', '+62 271 825050', 'PT Hardo Soloplast didirikan pada tahun 1989 dengan tujuan untuk menjadi pemimpin dalam industri ...', 'PT Hardo Soloplast didirikan pada tahun 1989 dengan tujuan untuk menjadi pemimpin dalam industri karung  Polypropylene. Tahun 1992, PT Hardo Soloplast mulai mengekspor ke Eropa. Kualitas pelayanan yang memuaskan serta hubungan kerjasama yang kokoh merupakan prioritas kami. Dalam waktu kurang dari 3 tahun, karung kami telah diterima dengan baik oleh pasar Internasional oleh karena kualitas dan ketepatan waktu pengiriman produk kami.\r\n\r\nKerja keras dan konsistensi menjadikan kami sebagai salah satu produsen karung PP & benang multifilamen terkemuka di Indonesia.\r\n\r\nTim produksi PT Hardo Soloplast didukung oleh para profesional yang berpengalaman, dengan mesin berteknologi canggih dari Eropa dan Asia untuk menghasilkan produk berkualitas dengan harga yang bersaing.\r\n\r\nKami membangun relasi jangka panjang dengan setiap rekan dari seluruh dunia.'),
(25, 'Konimex.jpg', 'PT. KONIMEX', 'Sanggrahan, Kecamatan Grogol, kabupaten Sukoharjo, Jawa Tengah', '-', 'Konimex adalah salah satu perusahaan farmasi Nasional yang didirikan oleh Djoenaedi Joesoef pada 8 J', '              Konimex adalah salah satu perusahaan farmasi Nasional yang didirikan oleh Djoenaedi Joesoef pada 8 Juni 1967 sebagai perusahaan perdagangan jual beli obat-obatan, bahan kimia, alat laboratorium dan alat kedokteran. Pada tahun 1971, PT Konimex mulai memproduksi sendiri obat-obatan dengan dukungan fasilitas Penanaman Modal Dalam Negeri (PMDN). Perusahaan ini kini memproduksi berbagai macam produk: obat-obatan, permen dan makanan dengan motto Ikut Menyehatkan Bangsa, seperti yang selalu dituliskan pada iklan-iklannya. Seiring dengan semakin tingginya kecenderungan masyarakat kembali ke alam, Konimex mulai mengembangkan produk-produk yang berbasiskan bahan-bahan alami.\r\n\r\nPT Konimex berlokasi di desa Sanggrahan, Kecamatan Grogol, kabupaten Sukoharjo, Jawa Tengah yang dibangun pada tahun 1979. Setahun kemudian, 1980, di kompleks baru ini didirikan pabrik kembang gula Nimmâ€™s yang menjadi awal diversifikasi Konimex ke industri makanan. Mengikuti peraturan pemerintah yang mengh'),
(26, 'Kusumahadi Santosa.jpg', 'PT. KUSUMAHADI SANTOSA', 'Jalan Raya Jaten KM 9.4 Jaten - Karanganyar S o l o - 57771 Indonesia', '(62-271) 825636', 'Building upon the centuries-old Javanese tradition of fine textile production, Kusumahadi Santosa ha', 'Building upon the centuries-old Javanese tradition of fine textile production, Kusumahadi Santosa has evolved from a batik manufacturer into a modern, integrated textile company catering to markets all over the world.\r\n\r\nFrom yarns to textiles, from grey cloth to printed and dyed cloth to garment production, Kusumahadi Santosa covers the entire spectrum of textile production.\r\n\r\nUncompromising quality, modern technology, innovative designs, a diversified and exhaustive product range in addition to a selection of specialty products have propelled us onto the forefront among Asiaâ€™s textile producers. We supply to domestic and regional markets as well as to the most demanding customers in Europe,Japan, USA and the middle East.'),
(27, 'pnm-min.jpg', 'PT. PNM PESERO', 'Jl. Adi Sumarmo No 171 Banyuanyar Banjarsari Surakarta', '-', 'PT Permodalan Nasional Madani atau disingkat PNM adalah Badan Usaha Milik Negara Indonesia yang ....', 'PT Permodalan Nasional Madani (Persero) â€“ PT PNM adalah sebuah Lembaga Keuangan Khusus yang sahamnya 100% milik Pemerintah, didirikan di Jakarta berdasarkan TAP XVI/MPR/1998, Letter of Intent IMF tanggal 16 Maret 1999, PP No. 38/99 tanggal 25 Mei 1999 dan Akte Notaris No. 1 tanggal 1 Juni 1999 yang mendapat pengesahan Menteri Kehakiman RI No. C-11.609.HT.01.01.TH 99 tanggal 23 Juni 1999. Dari modal dasar perseroan ini sebesar Rp. 1,2 trilyun, telah ditempatkan dan disetorkan sebesar 300 milyar.\r\n\r\nPT Permodalan Nasional Madani (Persero) mengundang putera â€“ puteri terbaik Indonesia yang memiliki Idealisme dan integritas tinggi untuk pengembangan Usaha Mikro, guna di tempatkan di Unit Layanan Modal Mikro (ULaMM) dengan ketentuan sebagai berikut :\r\n\r\nAccount Officer Mikro (AOM)\r\nKualifikasi :\r\n\r\nPendidikan minimal SMA/SMK (diutamakan D3/S1)\r\nUsia maksimal 32 tahun\r\nMemiliki pengalaman minimal 1 tahun sebagai Sales/Marketing (diutamakan di lembaga pembiayaan mikro)\r\nMenguasai program M'),
(28, 'BAP-LOGO.png', 'PT. BINTANG ABADI PERSADA', 'Jl. Solo-Tawangmangu, Ngemplak, Popongan, Karangpandan, Kabupaten Karanganyar, Jawa Tengah 57715', '0271-649098', 'PT BINTANG ABADI PERSADA Adalah perusahaan pakaian dalam yang berskala internasional, 100% export.', 'PT BINTANG ABADI PERSADA Adalah perusahaan pakaian dalam yang berskala internasional, 100% export. Karang pandan, Karanganyar, Jawa Tengah'),
(30, 'logo_0fa4d3c8a15db016963d38df18c66324.jpg', 'PT. DELTA MERLIN DUNIA TEXTILE VI', 'Dusun I, Celep, Nguter, Kabupaten Sukoharjo, Jawa Tengah 57571', '(0271) 625169', 'Kami Sebuah Perusahaan Tekstil Weaving, merupakan bagian dari DUNIATEX GROUP', '                    	Kami Sebuah Perusahaan Tekstil Weaving, merupakan bagian dari DUNIATEX GROUP, berlokasi di desa Pengkol, Nguter, Sukoharjo.\r\n                    '),
(32, 'Harsono-Wong.jpg', 'PT. PELITA THOMANG MAS', 'km 9, Jl. Raya Solo-Tawangmangu, Dusun V, Jaten, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tenga', '-', 'PT Pelita Tomangmas, perusahaan yang bergerak di bidang alas kaki', 'PT Pelita Tomangmas, perusahaan yang bergerak di bidang alas kaki'),
(36, 'ifars.jpg', 'PT. IFARS', 'Jl. Solo - Sragen No.KM. 14.9, Waru, Pulosari, Kebakkramat, Kabupaten Karanganyar, Jawa Tengah 57762', '0271-656220', 'PT IFARS PHARMACEUTICAL LABORATORIES (PT IFARS) didirikan pada tahun 1974 dan memproduksi resep (eth', 'PT IFARS PHARMACEUTICAL LABORATORIES (PT IFARS) didirikan pada tahun 1974 dan memproduksi resep (ethical) obat, over-the-counter (OTC) obat-obatan dan suplemen makanan.'),
(37, '5-perilaku-orang-sukses-patut-ditiru-saat-mereka-di-umur-20-tahun.jpg', 'PT. KENINDO GRAND SEJAHTERA', 'Jln. Dalon Raya Km.01 Ring Road Mojosongo. Karanganyar, SOLO', 'Telp.0271-666390-081', 'Knitting, Singeing, Mercerizing, Dyeing, Finishing, Setting, Brushing, Compacting, Kalendering, Sanf', 'Knitting, Singeing, Mercerizing, Dyeing, Finishing, Setting, Brushing, Compacting, Kalendering, Sanforising, Textile Industry');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) NOT NULL,
  `Title` varchar(25) NOT NULL,
  `Gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `Title`, `Gambar`) VALUES
(2, 'PT. SAS', 'sinar agung prasadikindo logo.jpg'),
(3, 'PT. DAN LIRIS', 'ca2c94cf50.jpg'),
(4, 'PT. BAP', 'BAP-LOGO.png'),
(5, 'PT. BTPN', 'btpn.png'),
(6, 'PT. IFARS', 'ifars.jpg'),
(7, 'PT. KS', 'Kusumahadi Santosa.jpg'),
(10, 'PPTKIS PT. KARYATAMA MITR', 'anzdoc_logo.png'),
(11, 'PT. KONIMEX', 'Konimex.jpg'),
(12, 'PNM', 'pnm-min.jpg'),
(13, 'PT. PHILIPS', '1a5c2063ef20060d8b2401a3cf5fee02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_loker`
--

CREATE TABLE `tbl_loker` (
  `No` int(9) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Perusahaan` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Posisi` varchar(50) NOT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `DeskripsiSingkat` varchar(150) NOT NULL,
  `Deskripsi` varchar(5000) NOT NULL,
  `Persyaratan` varchar(1000) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_loker`
--

INSERT INTO `tbl_loker` (`No`, `Gambar`, `Perusahaan`, `Jurusan`, `Posisi`, `Lokasi`, `DeskripsiSingkat`, `Deskripsi`, `Persyaratan`, `tgl_upload`) VALUES
(6, 'kinerjapay-logo-blue-yellow.png', 'PT. KINERJA PAY INDONESIA', 'Semua Jurusan SMA/SMK Sederajat', 'Design Graphis', 'Indonesia', 'Industri : Internet / Media Online / E-Commerce . Jenjang Karir : Staff ( > 1 tahun pengalaman kerja)', '<p>Industri : Internet / Media Online / E-Commerce Jenjang Karir : Staff ( &gt; 1 tahun pengalaman kerja) Pendidikan : Diploma (D3) Gaji yang Ditawarkan : - Fasilitas &amp; Tunjangan : Lainnya. Keahlian : Adobe Illustrator dan Adobe Photoshop Ditempatkan : Indonesia</p>', '<p>1. Lulusan SMA/SMK Semua Jurusan<br />2. Nilai UN rata rata 7.0<br />3. Bekerja Keras<br />4. mampu Bekerja dibawah Tekanan<br />5. Dapat Bekerja Team</p>', '2018-11-19 02:46:57'),
(7, 'UCARD-LOGO.jpg', 'UCARD INDONESIA', 'D3 / S1 Grafika', 'Grafika', 'Solo', 'UCard adalah perusahaan yang bergerak di bidang spesialis produsen kartu PVC bersekuriti tinggi, yang memiliki standar kualitas produksi ISO terbaik d', '                    	                    	UCard adalah perusahaan yang bergerak di bidang spesialis produsen kartu PVC bersekuriti tinggi, yang memiliki standar kualitas produksi ISO terbaik di Indonesia. Dengan pelanggan hampir seluruh perusahaan dan organisasi papan atas di bidang perbankan, telekomunikasi, mass media, hotel, business retail, dll.\r\n\r\nKami bangga dalam budaya tim kami yang kuat saling percaya, belajar, berbagi, kepedulian dan perhatian. Termasuk menyediakan lingkungan kerja yang nyaman dan kondusif dan meningkatkan profesional dan pribadi pertumbuhan staf kami. Kami mencari tenaga professional yang termotivasi, dinamis, mandiri, bertanggung jawab dan disiplin bersedia untuk maju dan bergabung dengan kami dan menjadi salah satu tim yang hebat kami.\r\n\r\nTanggung Jawab Pekerjaan :\r\n1. Membuat perencanaan dan jadwal proses produksi\r\n2. Mengawasi proses produksi agar kualitas, kuantitas dan waktunya sesuai dengan perencanaan yang sudah dibuat\r\n3. Bertanggung jawab mengatur manajemen gudang agar tidak terjadi kelebihan atau kekurangan persediaan bahan baku, bahan penolong maupuan produk yang sudah jadi di gudang\r\n4. Bertanggung jawab mengatur manajemen alat agar fasilitas produksi berfungsi sebagaimana mestinya dan beroperasi dengan lancar\r\n5. Membuat laporan secara berkala mengenai kegiatan di bagiannya\r\n6. Bertanggung jawab pada peningkatan ketrampilan dan keahlian karyawan yang berada di bawah tanggung jawabnya\r\n7. Memberikan penilaian dan sanksi jika karyawan di bawah tanggung jawabnya melakukan kesalahan dan pelanggaran\r\n8. Berinovasi dalam pengerjaan produksi dan memberikan masukan pada perusahaan yang berkaitan dengan bagian produksi\r\n\r\n\r\nKualifikasi :\r\n1. Memiliki kemampuan berkomunikasi yang baik\r\n2. Memiliki kemampuan manajerial yang bagus agar dapat menjalankan perusahaan secara efektif dan efisien.\r\n3. Memiliki kemampuan teknis dan lapangan\r\n4. Berjiwa pemimpin dan dapat dipercaya\r\n5. Dapat mengembangkan dan membuat strategi bisnis\r\n6. Tegas dan berintegritas tinggi\r\n7. Seorang pribadi yang baik dan dapat memotivasi bawahannya\r\n8. Jujur, bertanggung jawab, dan kreatif serta proaktif\r\n9. Dapat bertindak cepat dan memecahkan permasalahan dengan penyelesaian yang tepat\r\n10.Mampu bekerja di bawah tekanan dan siap lembur sesuai dengan kebutuhan perusahaan\r\n11.Mampu menganalisa dan memperbaiki proses produksi sehingga menjadi lebih efektif & efisien\r\n\r\nTunjangan :\r\nTunjangan Ketenagakerjaan\r\n\r\nInsentif :\r\nReward Project\r\n\r\nWaktu Bekerja :\r\nJam 9 s/d 17 Senin â€“ Jumat, Jam 9 s/d 14.00 Sabtu                                        ', '                    	                    	Syarat Pengalaman :\r\nPengalaman min. 1 tahun sebagai kepala produksi percetakan\r\nKeahlian :\r\nâ€“ Lulusan D3 atau S1 Grafika\r\nâ€“ Pria maksimal usia 40 tahun\r\nâ€“ Pengalaman min. 1 tahun sebagai kepala produksi percetakan atau sebagai staff percetakan\r\nâ€“ Berpengalaman dalam perencanaan produksi sehingga menjaga ketepatan pengiriman barang\r\nâ€“ Menguasai dengan baik setiap aspek pra cetak, produksi hinga finishing\r\nâ€“ Mampu menjaga produktivitas dalam menangani beberapa proyek yang berbeda\r\nâ€“ Memiliki kemampuan memimpin, merencanakan, dan interpersonal yang tinggi\r\nâ€“ Mampu bekerja secara mandiri dengan minimum arahan, dan bisa bekerja sama dalam tim\r\nâ€“ Memiliki tempo kerja yang cepat dan sanggup bekerja dengan deadline ketat, teliti, bertanggung jawab terhadap tugas, dan bisa diandalkan                                        ', '2018-11-19 02:46:57'),
(9, 'download.png', 'PT. Biru International (Biru & Sons Ltd.)', 'Multimedia', 'Graphic Designer Multimedia ', 'Jakarta', 'Mahir menggunakan Corel Draw & Photoshop', 'Usia 21- 35 tahun \r\nPendidikan minimal S1 Design Grafis (DKV) \r\nIPK 2.75 skala 4.00 \r\nInnovatif, Kreatif, dan Bermotivasi tinggi \r\nMahir menggunakan Corel Draw & Photoshop \r\nRamah, komunikatif, fleksibel, mampu bekerja di bawah tekanan, aktif, pekerja keras dan bermotivasi tinggi \r\nDapat bekerja individual maupun dengan team \r\nBerpengalaman di bidangnya, fresh graduate is welcome', '1. Usia 21- 35 tahun \r\n2. Pendidikan minimal S1 Design Grafis (DKV) \r\n3. IPK 2.75 skala 4.00 \r\n4. Innovatif, Kreatif, dan Bermotivasi tinggi \r\n5. Mahir menggunakan Corel Draw & Photoshop \r\n6. Ramah, komunikatif, fleksibel, mampu bekerja di bawah tekanan, aktif, pekerja keras dan bermotivasi tinggi \r\n7. Dapat bekerja individual maupun dengan team \r\n8. Berpengalaman di bidangnya, fresh graduate is welcome', '2018-11-19 02:46:57'),
(10, 'Seraphim-Karya-Agung.jpg', 'PT. Seraphim Karya Agung', 'Tata Busana', 'Penjahit', 'Jakarta', 'PENJAHIT Usia max. 35 tahun Pendidikan min SMA diutamakan dari jurusan Tata Busana', 'Walk In Interview:\r\n\r\nSenin - Jumat\r\n\r\n8.00 - 13.00\r\n\r\nJl. Pluit Raya III Blok J1 No. 3G\r\n\r\nPenjaringan, Jakarta Utara', '- PENJAHIT\r\n- Usia max. 35 tahun\r\n- Pendidikan min SMA diutamakan dari jurusan Tata Busana\r\n- Memiliki pengalaman sebagai penjahit min 2 th\r\n- Teliti dan Cekatan', '2018-11-19 02:46:57'),
(11, 'logo_tadika_puri.png', 'Yayasan Tadika Puri', 'Pemasaran', 'Manager Marketing Online E-Commerce', 'Malang', 'Pemasaran (Non-Teknis), Pemasaran (Teknis), Pemasaran Internet', '                    	Fungsi Kerja\r\nPemasaran (Non-Teknis), Pemasaran (Teknis), Pemasaran Internet\r\nLevel Karir\r\nManajer - Departemen, Manajer - Cabang/Regional, Manajer Senior\r\nPengalaman\r\nSetidaknya 3 tahun\r\nPendidikan\r\nSemuanya                    ', '1. Pria / Wanita\r\n2. Pengalaman minimal 3 tahun di bdg pemasaran on line e-commerce.\r\n3. Pengalaman menjual lewat FB, Instagram, Google Ads dll                    ', '2018-11-19 02:46:57'),
(13, 'image1.jpg', 'PT Taharim Berkah Semesta', 'Usaha Perjalanan dan Wisata', 'Digital Marketing', 'Tangerang', 'Fungsi Kerja Pemasaran (Non-Teknis), Pemasaran (Teknis), Pemasaran Internet Level Karir Pemula / Staf, Staf Senior Pengalaman Setidaknya 2 tahun Pendi', '<p>Fungsi Kerja : Pemasaran (Non-Teknis), Pemasaran (Teknis), Pemasaran Internet<br />Level Karir : Pemula / Staf, Staf Senior<br />Pengalaman : Setidaknya 2 tahun<br />Pendidikan : Pariwisata dan Perhotelan</p>', '<p>1. Pria/ Wanita<br />2. Usia max. 35 tahun<br />3. Lulusan Min. SMK (Multimedia / Pariwisata)<br />4. Menguasai Photoshop<br />5. Pengalaman min. 2 tahun<br />6. Harus memiliki pengalaman dalam program pemasaran online digital<br />7. Pemahaman yang kuat dari saat ini konsep pemasaran online, strategi dan pratek terbaik.<br />8. Dapat memantaince website<br />9. Fasih berbahasa inggris baik tertulis maupun lisan<br />10. Sanggup bekerja dibawah tekanan dalam mencapai target serta bekerjasama dalam team Personality. Diantaranya sabar, tekun, tidak cepat menyerah, berpenampilan baik, jujur, loyal, pandai berbicara, sopan, dan bisa menjaga image Perusahaan<br />11. Diutamakan pengalaman dalam dunia pariwisata</p>', '2019-01-12 03:20:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `username`, `password`, `email`, `gambar`) VALUES
(15, 'Isnan Wahyudi123', '12345', 'isnanwahyudi45@gmail.com', 'IMG_4629 - Copy.JPG'),
(18, 'Yudhi', '123456789', 'yudhi354@gmail.com', 'hqkeNYsY.jpg'),
(28, 'Member Aktif', '12345', 'member@yahoo.co.id', '190600.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `id_pelamar` int(9) NOT NULL,
  `id_lamar` varchar(50) NOT NULL,
  `id_loker` int(9) NOT NULL,
  `username` varchar(100) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `Sekolah` varchar(50) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `TB` int(5) NOT NULL,
  `BB` int(3) NOT NULL,
  `Nilai` varchar(10) NOT NULL,
  `Perusahaan` varchar(100) NOT NULL,
  `Posisi` varchar(100) NOT NULL,
  `tgl_lamar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`id_pelamar`, `id_lamar`, `id_loker`, `username`, `NamaLengkap`, `Sekolah`, `Jurusan`, `TB`, `BB`, `Nilai`, `Perusahaan`, `Posisi`, `tgl_lamar`) VALUES
(28, '201911', 11, 'Yudhi', 'Kusnanto', 'SMKN 2 Karanganyar', 'RPL', 165, 55, '80', 'Yayasan Tadika Puri', 'Manager Marketing Online E-Commerce', '2019-01-19 00:30:14'),
(29, '20199', 9, 'Yudhi', 'Nasullah', 'SMKN 1 Karanganyar', 'MM', 165, 50, '81', 'PT. Biru International (Biru & Sons Ltd.)', 'Graphic Designer Multimedia ', '2019-01-19 01:42:39'),
(30, '201910', 10, 'Member aktif', 'Memet', 'SMKN 1 Karanganyar', 'Tata Busana', 155, 55, '82', 'PT. Seraphim Karya Agung', 'Penjahit', '2019-01-19 02:19:18'),
(31, '20199', 9, 'Member aktif', 'Efry', 'SMK', 'RPL', 165, 55, '80', 'PT. Biru International (Biru & Sons Ltd.)', 'Graphic Designer Multimedia ', '2019-01-24 04:26:25'),
(32, '201913', 13, 'Isnan Wahyudi123', 'Isnan Wahyudi', 'SMKN 2 Karanganyar', 'RPL', 167, 50, '80', 'PT Taharim Berkah Semesta', 'Digital Marketing', '2019-02-14 08:12:51'),
(33, '201910', 10, 'Isnan Wahyudi123', 'Isnan Wahyudi', 'SMKN 2 Karanganyar', 'RPL', 167, 50, '80', 'PT. Seraphim Karya Agung', 'Penjahit', '2019-02-26 09:13:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pesan` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id`, `Nama`, `Email`, `Pesan`) VALUES
(1, 'Luna', 'lunaimut@gmail.com', 'Membatu saya dalam mencari informasi lowongan pekerjaan yang sesuai dengan jurusan yang saya ambil saat waktu masih sekolah di SMK Negeri 1 Karanganyar dan sesuai dengan kemampuan saya, sehingga saya dapat bekerja dengan baik. Terimakasih My-BKK yang telah memberikan layanan yang terbaik.'),
(3, 'Ayus', 'ayusafitri@gmail.com', 'Konten-konten yang ada pada website ini sangat berguna bagi saya. Semoga website ini terus berkembang sehingga bermanfaat bagi orang banyak.'),
(6, 'Idha', 'idhacomel7@gmail.com', 'Tampilan home website menarik dan juga elegan sehingga penggunjung tidak jenuh pada tampilan home website. Tetapi perlu ditinggakaykan pada tampilan sub-sub page website seperti page loker, perusahaan, new dan juga profil.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `No` int(9) NOT NULL,
  `Gambar` varchar(5000) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slide`
--

INSERT INTO `tbl_slide` (`No`, `Gambar`, `Title`, `Deskripsi`) VALUES
(17, 'IMG_6791.JPG', 'WELCOME', 'Bursa Kerja Khusus "PATRIA KARYA BHAKTI" SMK NEGERI 1 KARANGANYAR'),
(20, '5-perilaku-orang-sukses-patut-ditiru-saat-mereka-di-umur-20-tahun.jpg', 'VISI', 'Terwujudnya tamatan cerdas dan terampil dan kreatif, berkepribadian unggul, berakhlak mulia. Berjiwa wirausaha, berwawasan lingkungan serta mampu bersaing di era global.'),
(22, 'IMG_6757.JPG', 'MISI', 'Membekali peserta didik agar memiliki daya saing tinggi dalam memasuki dunia kerja maupun dalam memasuki jenjang pendidikan yang lebih tinggi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `No` int(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`No`, `username`, `password`, `level`) VALUES
(7, 'admin', 'admin', 'admin'),
(8, 'user', 'user', 'user'),
(14, 'Pak Ria', 'ria12345', 'admin'),
(15, 'Siswa', 'siswa123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_industri`
--
ALTER TABLE `tbl_industri`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loker`
--
ALTER TABLE `tbl_loker`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_industri`
--
ALTER TABLE `tbl_industri`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_loker`
--
ALTER TABLE `tbl_loker`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  MODIFY `id_pelamar` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `No` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
