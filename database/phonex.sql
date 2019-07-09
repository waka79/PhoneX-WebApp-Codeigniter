-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2019 pada 17.02
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `status`) VALUES
(1, 'adminWaka', 'wira ardi', 'iyalah', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `kategori_id`, `judul`, `isi`, `gambar`, `status`) VALUES
(8, 7, 'Review Huawei P30, Kamera Kece, Kinerja Oke', '<p><strong>Jakarta, Selular.ID –</strong> Redaksi Selular.ID berkesempatan me-review smartphone premium terbaru Huawei yakni Huawei P30. Sebelumnya kami telah melakukan hands-on Huawei P30.</p><p>Huawei P30 merupakan versi original dari P30 series. P30 series sendiri mencakup P30, P30 Pro dan P30 Lite. Smartphone ini masih mengedepankan kamera dan performa sebagai fitur andalan seperti yang dimiliki oleh anggota P30 series lainnya.</p><p>Smartphone ini akan tersedia di Indonesia dalam waktu dekat. Di Indonesia, Huawei P30 sudah bisa di pre-order mulai 12-19 April 2019 baik online dan offline melalui Huawei High-End Experience Shop dan e-commerce partner. Harganya, Huawei P30 dibanderel Rp 9.999 juta.</p><p>Huawei P30 hadir dalam varian warna Hitam, Aurora, Amber Sunrise, Breathing Crystal, dan Pearl White. Huawei P30 memiliki beragam konfigurasi yakni RAM 6GB dan 8GB serta ROM 64/128/256 GB.</p><p>Varian Huawei P30 yang kami review kali ini adalah 4/128GB dengan warna Breathing Crystal. Berikut ulasannya.</p><p><strong>Desain</strong></p><p> </p><p>Varian warna Breathing Crystal memberikan efek gradasi warna pada Huawei P30. Ketika berada dibawah pantulan sinar matahari atau lampu, efek gradasi warna lebih terlihat. Gradasi warna yang dihasilkan tergantung pencahayaan.</p><p>Body smartphone ini menggunakan material polycarbonate berbalut bahan kaca pada bagian belakang. Pemilihan bahan polycarbonat ini membuat Huawei P30 terlihat seperti smartphone menengah, tidak terlihat seperti ponsel premium. Keseluruhan kerangka menggunakan bahan alumunium.</p><p>Ketika kami melihat dan menggenggam Huawei P30 terlihat elegan dan kokoh. Seperti smartphone premium pada umumnya, kualitas build quality Huawei P30 cukup baik.</p><p>Saat digenggam, Huawei P30 juga cukup nyaman dan tidak terlalu berat dengan dimensi 71.36mm x 149.1mm x 7.57mm dan bobot 165g. Sudut lengkung menambah kenyamanan saat ponsel digenggam.</p><p>Layar seluas 6.1 inci, notch waterdrop sebagai wadah kamera selfie 32 MP dan speaker receiver terpampang di bagian depan ponsel ini. Sementara tiga kamera utama beresolusi 40MP, 16MP dan 8MP, LED Flash, tulisan sensor Leica dan logo Huawei tersemat di bagian belakang ponsel ini.</p><p>Sisi kanan dijumpai tombol power serta tombol volume up dan down. Sedangkan sisi kiri ditemui slot sim card saja. Slot MicroSD harus absen dari ponsel ini.</p><p>Jack audio 3,5mm, port USB Type-C, speaker dan lubang mic hadir di bagian bawah ponsel ini. Bagian atas ponsel hanya terdapat sebuah lubang mic saja.</p><p><strong>Kamera</strong></p><p> </p><p>Urusan foto dan video, P30 disematkan 3 kamera utama beresolusi 40MP, 16MP dan 8MP. Lensa utama beresolusi 40 MP dengan aperture f/1.8.</p><p>Lensa sekundernya didukung sensor ultrawide berukuran 16 MP dengan aperture f/2.2. Sedangkan lensa ketiga menggunakan sensor telephoto berukuran 8 MP dengan aperture f/2.4.</p><p>Kamera utama Huawei P30 didukung teknologi AI. Mode AI ini dapat mendeteksi objek foto, kondisi foto dan lainnya.</p><p>Mode AI dapat Anda aktfikan di menu kamera utama saja. Mode ini bisa digunakan untuk kamera selfie.</p><p>Tampilan kamera Huawei P30 cukup simpel. Tersaji mode photo, portrait, pro, night mode, AR lens, HDR, wide, super macro dan lainnya.</p><p>Mode photo memiliki kemampuan optical zoom 5x dan digital zoom hingga 30x. Ketika kami mencoba mode optical zoom hingga 5x zoom, foto yang dihasilkan tidak pecah dan minim noise. Sebaliknya, saat mencoba digital zoom hingga 30x, foto yang dihasilkan pecah dan banyak noise.</p><p>Saat kami menggunakan kamera utama P30, foto yang dihasilkan cukup tajam dan detail dengan komposisi warna yang pas. Hasil foto ini kami dapatkan ketika mengaktifkan mode AI pada kamera utama.</p><p>Ketika tidak menggunakan mode AI, foto yang dihasilkan jauh lebih terang dan komposisi warna kurang sesuai. Dalam kondisi cahaya cukup, baik indoor maupun outdoor foto yang dihasilkan lebih tajam dan tidak ada noise. Sebab mode AI mampu menyesuaikan dengan kondisi pencahayaan sekitar.</p><p>Dalam kondisi gelap dan malam hari, hasil fotonya juga cukup baik. Anda juga bisa mencoba night mode untuk kualitas foto yang lebih baik.</p><p>Night mode ini menghasilkan komposisi warna dan detail yang lebih baik dibandingkan mode photo biasa. Anda juga bisa menggunakan LED Flash saat foto di malam hari.</p><p>Efek bokeh yang dihasilkan mode portrait juga cukup natural. Tersedia beragam AR enmoji, stiker dan filter menarik untuk memperindah hasil foto.</p><p>Kamera selfienya beresolusi 32 MP dengan aperture f/2.0. Kamera selfie ini mampu mendeteksi wajah dengan akurat.</p><p>Saat selfie baik dalam kondisi cahaya cukup maupun minim cahaya, hasilnya cukup memuaskan. Anda juga bisa menggunakan LED Flash ketika selfie di malam hari. Mode beuaty dapat memperhalus wajah Anda, namun hasilnya tetap natural.</p><p>Untuk video disertakan mode video, slow-mo dan time lapse.</p><p><strong>Layar dan UI</strong></p><p> </p><p>Huawei P30 dibekali layar OLED berukuran 6,1 inci beresolusi FHD+ (2340x1080p). Aspek rasionya 19.5:9 dan screen body to rasionya mencapai 85.8%.</p><p>Ketika kami mencoba bermain game dan menonton video, tampilan visual yang disajikan layar ini cukup tajam dan detail. Desain notch sedikit mengganggu ketika bermain game. Anda bisa mengatur tampilan agar tidak menutupi notch di menu setting.</p><p>Tampilan layar Huawei P30 cukup simpel. Tampilan antarmukanya menggunakan EMUI 9.1.0.</p><p>Di bagian atas tampilan layar terdapat notification tray yang memuat notifikasi pesan masuk dan menu. Notification tray menyajikan Bluetooth, Wi-Fi, senter, sound, auto rotate, Huawei share, airplane mode, mobile data, GPS, screenshoot, screen recorder, wireless projection, hostspot dan NFC. Anda juga dapat mengatur kecerahan layar di notification tray.</p><p><strong>Software dan fitur</strong></p><p> </p><p>Ponsel ini berjalan dengan sistem operasi Android 9.0 Pie. Tidak banyak aplikasi bawaan Huawei yang disematkan dalam ponsel ini. Aplikasi bawaan tersebut meliputi AppGallery dan Health.</p><p>AppGalerry ini mirip PlayStore yang memungkinkan pengguna untuk mendownload aplikasi. Sesuai namanya, aplikasi health dapat mengukur kesehatan Anda seperti jumlah langkah, kalori dan lainnya.</p><p>Aplikasi bawaan Google juga hadir di ponsel ini seperti Google, Gmail, Gmaps, YouTube, Drive dan lainnya. Fitur screen recorder yang mampu mengambil tangkapan video juga hadir di smartphone ini.</p><p>Soal keamanan, ponsel ini didukung fingerprint dan face unlock. Huawei P30 dibenamkan sensor sidik jari di dalam layar yang menjadi keunggulan ponsel ini.</p><p>Kemampuan fingerprint dan face unlock mampu membuka ponsel dengan cepat dibawah 1 detik. Sensor face unlock dapat mampu membuka ponsel ketika wajah pengguna menggunakan aksesoris seperti kacamata, topi dan lainnya serta dalam keadaan gelap.</p><p><strong>Hardware dan performa</strong></p><p> </p><p>Dapur pacunya disokong chipset Kirin 980 dengan prosesor Octa-core dan GPU Mali-G76 MP10. Untuk mendukung performanya, didukung teknologi GPU Turbo 3.0.</p><p>Penyimpanannya disokong RAM 4GB dan ROM 128GB. Karena memori internalnya cukup besar, tidak disediakan slot MicroSD di ponsel ini.</p><p>Untuk menguji performanya, kami menggunakan aplikasi benchmark dan bermain game. Aplikasi benchmark yang kami gunakan adalah AnTuTu, 3D Mark, PC Mark, dan Geekbench.</p><p>Huawei P30 berhasil menjalani semua tes benchmark dengan lancar dan tidak ada kendala berarti. Di AnTuTu, Huawei P30 meraih skor 291579 dan menduduki peringkat ke 16. Huawei P30 mendapatkan skor 7693 dalam tes work 2.0 performance di PC Mark.</p><p>Tes 3D Mark, Huawei P30 meraih skor 35863. Sedangkan tes geekbench, ponsel ini menorehkan skor 3270 untuk single-core dan 9696 untuk multi-core.</p><p>Kami mencoba bermain game menggunakan game PUBG, Bleach Mobile 3D, dan One Piece Bounty Rush. Untuk game PUBG, Huawei P30 mampu menjalankan settingan tertinggi dengan grafis HDR dan frame rate ultra.</p><p>Kami bermain game PUBG dengan settingan tersebut atau rata kanan. Ketika kami bermain grafis yang disuguhkan Huawei P30 terasa sangat halus pada settingan tersebut.</p><p>Hasilnya, game PUBG sanggup dilibas habis oleh Huawei P30. Begitupun dengan dua game lainnya mampu berjalan dengan lancar di Huawei P30.</p><p>Kami juga melakukan uji audio dengan menonton video dan mendengarkan musik. Suara yang dihasilkan cukup jernih dan bulat.</p><p><strong>Daya tahan</strong></p><p>Dayanya, Huawei P30 disokong baterai berkapasitas 3650mAh dengan dukungan teknologi fast charging 22.5W. Ponsel ini terisi penuh dalam kondisi dibawah 20?lam waktu satu setengah jam. Ketika kondisinya diatas 20%, tentunya proses isi dayanya lebih cepat.</p><p>Saat digunakan untuk bermain game, ponsel ini mampu bertahan hingga 6 sampai 7 jam. Ketika digunakan untuk menonton video, Huawei P30 mampu bertahan hingga 10 hingga 12 jam.</p><p>Untuk penggunaan standar seperti browsing internet, email, jejaring sosial dan lainnya, gawai ini bisa bertahan hingga seharian penuh sekitar 24 jam. Dalam keadaan standby, sanggup bertahan hingga dua hari atau 48 jam.</p><p><strong>Konektivitas</strong></p><p> </p><p>Konektivitasnya, Huawei P30 dilengkapi Bluetooth 5.0, Wi-Fi 802.11 a/b/g/n/ac, port USB Type-C serta jaringan 2G/3G/4G. Disertakan pula sensor fingerprint under display, accelerometer, gyro, proximity, compass, color spectrum dan NFC. Sensor NFC ini sangat berguna untuk melakukan transaksi pembayaran.</p><p>Gawai ini hanya memiliki dua buah slot Sim Card. Sayangnya tidak disematkan slot MicroSD di ponsel ini.</p><p>Kami menguji jaringan Huawei P30 menggunakan aplikasi Speed Test melalui bantuan operator Indosat. Kecepatan download yang dihaslikan mencapai 39,5 Mbps dan kecepatan upload 23,7 Mbps. Kestabilan dan kecepatan jaringan juga tergantung operator yang digunakan, kondisi cuaca dan lainnya.</p><p><strong>Kesimpulan</strong></p><p>Dengan harga Rp 9.999 juta, Huawei memiliki sejumlah keunggulan dari segi performa, kamera, daya tahan dan lainnya. Kamera Huawei P30 memiliki kemampuan setara kamera profesional. Performa Huawei P30 juga maksimal dengan sejumlah tes yang dilewati.</p><p>Visualisasi di layar juga cukup detail dan tajam. Daya tahan baterainya cukup awet. Koneksi jaringan cukup stabil tergantung provider dan cuaca.</p><p>Dari segi desain, gradasi warna membuat kesan elegan Huawei P30. Namun, material polycarbonat tidak mencerminkan Huawei P30 seperti ponsel premium. Huawei P30 cocok untuk Anda yang suka fotografi mobile, selfie dan bermain game.</p>', 'Huawei-P30-k-696x462.jpg', 'on'),
(9, 4, 'iPhone XS Max Mahal, Ini Dia Android Anti-lag Main PUBG Mobile', '<p><strong>Jakarta, Selular.ID </strong>– Stigma yang tumbuh dikalangan pemain PUBG Mobile saat ini mengarah kepada produk Apple, yang mana dinilai sangat stabil dan tidak patah-patah saat bermain PUBG Mobile. Masa sih?</p><p>Memang, kita tahu bahwa Apple selalu mengeluarkan produk yang ekslusif dengan performa optimal tapi, mahal. Hanya orang-orang kelas atas saja yang mampu membeli produk mereka, apalagi iPhone XS Max yang harganya luar biasa mahal.</p><p>Namun, saya bisa mengklaim bahwa bukan cuma iPhone/iPad yang gahar saat bermain PUBG, tapi Android juga bisa.</p><p>Pengalaman ini saya dapat ketika berkesempatan mengikuti turnamen PUBG Mobile di Universitas Gunadarma, bertempat di Sport Center Kampus H Kelapa Dua, Depok.</p><p>Kala itu, Universitas Gunadarma melalui FIKTI (Fakultas Ilmu Komputer dan Teknologi Informasi) sedang mengadakan event tahunan, yaitu FOSC 2019.</p><p>Pada kesempatan itu, saya beserta tim “dibekali” dengan smartphone Android flagship besutan vendor Tiongkok.</p><p>Awalnya saya tidak begitu yakin dengan kemampuan smartphone ini, namun setelah coba digeber selama beberapa hari, tidak ditemukan indikasi lag atau patah-patah.</p><p>Sebelumnya saya menggunakan smartphone Samsung Galaxy A8 Star yang ditenagai prosesor Snapdragon 660 dengan RAM 4GB. Namun masih merasa kurang puas karena terdapat sedikit lag saat bermain, apalagi jika smartphone mulai panas. Jadi, sangat amat menganggu permainan, bisa-bisa gagal chicken.</p><p>Kembali lagi ke topik, smartphone yang saya gunakan ketika mengikuti turnamen FOSC 2019 dibekali dengan prosesor tinggi dikastanya, Qualcomm Snapdragon 845 yang ditandem 8GB RAM/256GB ROM serta GPU Adreno 630.</p><p>Sebagai informasi, Qualcomm Snapdragon 845 dibangun dengan fabrikasi 10nm yang mana diklaim mampu memberikan performa optimal tanpa memberatkan beban ke baterai. Artinya, pengguna tidak perlu khawatir baterai cepat habis walau sedang menjalankan game maupun aplikasi yang berat.</p><p>Settingan yang saya gunakan untuk memainkan PUBG Mobile di smartphone ini yaitu Graphic: Smooth, FPS: Extreme. Sebenarnya, settingan rata kanan pun smartphone ini fine saja, tapi saya lebih mementingkan FPS ketimbang grafis karena mungkin akan mempengaruhi permainan.</p><p>Ketika kurang lebih 3 jam bermain, smartphone ini mulai mengeluarkan hawa panas yang tidak nyaman. Namun, performa tidak sama sekali terpengaruhi, PUBG Mobile tetap berjalan tanpa FPS nge-drop.</p><p>Dibagian tenaga, smartphone ini dibekali baterai tidak terlalu besar, yaitu 3730mAh. Walaupun kapasitas baterainya sedang, smartphone ini mampu diajak main PUBG Mobile hingga 6,5 jam non-stop. Awal pemakaian 100% sisa 14%.</p><p>Yang paling menakjubkan, pada masa inkubasi tim, kami diharuskan latihan minimal 10-15 jam perhari. Berkat adanya fitur khusus yang dibenamkan, pengisian baterai sangat cepat, hanya 50 menit terisi 82?ngan mode airplane. Jadi, tidak banyak waktu yang terbuang hanya untuk menunggu pengisian baterai.</p><p>Nah bagian layarnya pun sangat menggoda, luas dan lebar tanpa gangguan notch ataupun air drop. Berbekal layar 6,4 inci dengan screen ratio hingga 93.8 persen, membuat pengalaman bermain PUBG Mobile makin mantap ketika mencari musuh yang “ngepron”.</p><p>Kurang lebih seperti itulah pengalaman menggunakan <a href=\"https://selular.id/2018/09/oppo-find-x-review-kejutan-terindah/\">Oppo Find X</a> untuk memainkan game PUBG Mobile.</p><p>Jika kita bandingkan harga dengan iPhone XS Max, Oppo Find X saya kira lebih worth it. Mengapa? Jika Anda terpengaruhi oleh stigma yang saya sebutkan diatas, ada baiknya Anda mengurungkan niat membeli iPhone XS Max hanya untuk main PUBG.</p><p>Saat ini, harga iPhone XS Max menyentuh Rp. 25.499.000 dengan konfigurasi 4GB RAM/256GB penyimpanan internal. Sedangkan, Oppo Find X dengan konfigurasi 8GB RAM/256GB penyimpanan internal hanya dilego Rp. 10.999.000 saja.</p><p>Perbandingan harga hingga Rp 15.000.000 sepertinya bisa dijadikan pertimbangan jika ingin membeli iPhone XS Max untuk memenuhi kebutuhan bermain game.</p>', 'iphone-xs-max-pubg-696x392.jpg', 'on'),
(10, 6, 'Komparasi Realme 3 VS Redmi Note 7, Unggul Mana?', '<p><strong>Jakarta, Selular.ID –</strong> Belum lama ini, lini produk Xiaomi yakni Redmi memisahkan diri dengan induknya dan resmi menjadi sub brand. Kehadiran Redmi sebagai sub brand menambah ketatnya persaingan di ranah smartphone.</p><p>Brand smartphone Cina sejauh ini mendominasi sub brand di beberapa Negara, termasuk Indonesia. Misalnya Realme, Redmi, Pocophone dan Honor.</p><p>Munculnya Redmi sebagai sub brand menambah anggota baru sub brand Xiaomi setelah Pocophone. Redmi menyasar segmen menengah. Sedangkan Pocophone menyasar segmen premium.</p><p>Redmi dan Realme sama-sama bersaing di kelas menengah di beberapa Negara, termasuk Indonesia. Pekan lalu, Realme meluncurkan smartphone terbarunya yakni Realme 3. Tak mau kalah saing, Redmi juga akan segera memboyong smartphone barunya ke Indonesia yakni Redmi Note 7.</p><p>Baik Realme 3 maupun Redmi Note 7 sama-sama berkisar di harga Rp 2 jutaan. Keduanya sama-sama mengusung performa, desain dan kamera sebagai fitur andalan.</p><p>Realme 3 hadir dalam 3 konfigurasi yakni RAM 4GB dengan ROM 64GB, RAM 3GB dengan ROM 64GB dan RAM 3GB dan ROM 32GB. Sedangkan Redmi Note 7 hadir dalam 3 konfigurasi yakni RAM 4GB dengan ROM 64GB, RAM 6GB dengan ROM 128GB dan RAM 3GB dengan ROM 32GB.</p><p>Realme 3 tersaji dalam varian warna Black, Dynamic Black dan Radiant Blue. Sedangkan Realme 3 Redmi Note 7 tersedia dalam varian warna Blue, Black dan Twilight Gold.</p><p>Redaksi Selular.ID melakukan komparasi Realme 3 dengan Redmi Note 7. Varian Realme 3 yang kami komparasi adalah 4/64 dengan warna Radiant Blue. Sedangkan Redmi Note 7 yang kami ulas adalah varian 3/32 dengan warna biru dan merupakan versi china.</p><p>Mana yang lebih unggul Realme 3 atau Redmi Note 7? Simak ulasannya berikut ini.</p><p>Realme 3 Vs Redmi Note 7</p><p><strong>Desain</strong></p><p> </p><p>Dari segi desain, Redmi Note 7 nyaris sama dengan Realme 3. Bedanya hanya sedikit.</p><p>Warna Radiant Blue dengan gradasi warna pada body belakang menambah kesan elegan Realme 3. Radiant Blue menggabungkan efek cermin dengan warna biru dan hijau. Ketika Realme 3 terkena pantulan cahaya, maka gradasi warnanya lebih terlihat.</p><p>Realme 3 mengusung desain unibody berbalut material polikarbonat. Body Realme 3 menyerupai sandwich dan tersusun oleh layar, frame, dan cover belakang. Garis samping bodi yang nyaris tak terlihat membuat keseluruhan bodi Realme 3 terlihat lebih halus, lebih ringan, dan lebih tipis.</p><p>Sementara pesaingnya, yakni Redmi Note 7 juga tak mau kalah dengan mengusung warna gradasi. Kendati mengusung warna gradasi, desain keseluruhan dari Redmi Note 7 terhitung cukup mainstream.</p><p>Realme 3 memiliki bobot 175g dan dimensi 156.1 x 75.6 x 8.3 mm.</p><p>Sedangkan Redmi Note 7 memiliki bobot lebih berat mencapai 186g dan dimensi lebih luas yakni 159.2 x 75.2 x 8.1 mm. Ketika digenggam, jelas Redmi Note 7 lebih berat dibandingkan Realme 3.</p><p>Ketika kami menggenggam Realme 3 cukup nyaman dan tidak terlalu berat. Sudut lengkung atau kurva menambah kenyamanan Realme 3 saat digenggam.</p><p>Sama halnya dengan Realme 3, Redmi Note 7 juga mengusung sudut lengkung. Ketika digenggam pun cukup nyaman, namun lebih berat.</p><p>Kamera utama ganda beresolusi 13MP+2MP, LED Falsh, sensor fingerprint dan logo Realme terpampang di bagian belakang Realme 3. Sedangkan bagian belakang Redmi Note 7 disisipi kamera utama 48 MP + 5 MP, LED Flash, fingerprint dan logo Redmi.</p><p>Body belakang Redmi Note 7 dibuat lebih datar. Sedangkan body belakang Realme 3 sedikit lebih cembung.</p><p>Layar seluas 6.2 inci terbentang di bagian depan Realme 3. Di atas layar terdapat notch dewdrop sebagai wadah kamera selfie 13MP dan sebuah speaker receiver.</p><p>Sedangkan Redmi Note 7 memiliki layar yang lebih luas dari dari Realme 3 dengan bentang 6.3 inci yang terbentang di bagian depan. Di atas layar juga terdapat notch yang menampung speaker receiver dan kamera selfie 13 MP.</p><p>Sisi kiri Realme 3 dijumpai tombol volume up and down serta slot MicroSD. Sedangkan sisi kiri Redmi Note 7 dibubuhi slot MicroSD.</p><p>Sisi kanan Realme 3 hanya terdapat tombol power. Sementara sisi kanan Redmi Note 7 terdapat tombol volume up and down serta tombol power.</p><p>Bagian bawah Realme 3 disisipi port microUSB 2.0, jack audio 3,5 mm, dua buah lubang mic dan sebuah speaker. Sementara bagian bawah Redmi Note 7 disematkan port USB type-C yang diapit dua buah speaker.</p><p>Bagian atas Realme 3 polos saja, tidak ditemui apapun. Sedangkan bagian atas Redmi Note 7 dibubuhi jack audio 3,5 mm dan lubang mic.</p><p><strong>Kamera</strong></p><p> </p><p>Realme 3 disematkan kamera utama ganda beresolusi 13MP dan 2MP. Lensa utamanya beresolusi 13MP dengan aperture f/1.8. Sedangkan lensa sekundernya beresolusi 2MP didukung depth sensor.</p><p>Sedangkan Redmi Note 7 memiliki resolusi kamera utama lebih besar 48MP dan 5MP. Lensa utamanya beresolusi 48MP dan lensa sekunder 5MP.</p><p>Baik kamera utama maupun selfie Realme 3 dan Redmi Note 7 sama-sama didukung teknologi AI. Teknologi AI pada kamera Realme 3 bekerja secara otomatis. Sedangkan fitur AI pada kamera Redmi Note 7 dapat Anda aktifkan.</p><p>Meskipun resolusi kamera utama Realme 3 lebih kecil, namun smartphone ini mengusung fitur baru seperti Mode Chroma Boost dan Mode Nightscape yang membuat hasil foto lebih baik. Tersaji mode photo, portrait, pano dan expert. Beragam filter menarik juga disajikan di menu kamera utama maupun selfie.</p><p>Mode Chroma Boost menghasilkan foto dengan perpaduan warna dan eksposur yang seimbang. Mode ini bekerja menggunakan algoritma AI. Chroma Boost dapat Anda aktifkan dan nonaktifkan melalui menu kamera utama. Chroma boost ini juga mirip seperti mode HDR.</p><p>Saat kami mencobanya, mode Chroma Boost ini mampu menyesuaikan warna objek dengan kondisi di sekitar seperti indoor, outdoor, pagi, siang, maupun malam hari. Misalnya, ketika mengambil objek tanaman di outdoor, komposisi warna yang dihasilkan sangat pas.</p><p>Kamera Redmi Note 7 tidak mendukung mode chroma boost. Hanya mendukung mode HDR.</p><p>Ketika kami mencoba kamera utama Redmi Note 7, foto yang dihasilkan cenderung lebih terang. Komposisi warna yang dihasilkan Realme 3 lebih baik ketimbang Redmi Note 7.</p><p>Dalam kondisi minim cahaya, kamera Realme 3 mampu menangkap objek dengan baik. Agar hasil foto low light semakin bagus, Anda bisa menggunakan Mode Nightscape. Dukungan teknologi AI, sinergi multi-frame dan algoritma anti-shake, mode Nightscape akan secara signifikan meningkatkan kualitas gambar dalam cahaya redup. Mode Nightscape mampu meningkatkan eksposur dalam kondisi minim cahaya.</p><p>Ketika kami mengambil foto dalam kondisi minim cahaya ataupun malam hari, foto yang dihasilkan melalui teknologi ini cukup baik. Noise tidak terlalu terlihat dalam foto tersebut.</p><p>Untuk menggunakan mode Nightscape, Anda hanya perlu menekan tombol kamera lalu tahan selama 4 detik untuk fokus ke objek foto. Usahakan objek foto tidak bergerak selama 4 detik, agar hasilnya optimal.</p><p>Mode night scape ini mirip seperti night mode. Namun kemampuannya sudah ditingkatkan.</p><p>Redmi Note 7 hanya memiliki fitur night mode. Foto yang dihaslikan fitur night mode ini ketika kondisi minim cahaya cukup baik.</p><p>Namun, noise masih terlihat. Berbeda dengan mode night scape yang dihasilkan Realme 3. Hasilnya jauh lebih baik, noise nyaris tidak terlihat.</p><p>Kamera selfienya, Realme 3 dan Redmi Note 7 didukung resolusi yang sama yakni 13MP. Namun kamera seflie Realme 3 didukung lensa 5P.</p><p>Saat kami foto selfie, hasilnya cukup baik. Terlebih dalam kondisi cahaya cukup, foto selfie terlihat tajam dengan komposisi warna yang pas.</p><p>Saat kondisi minim cahaya, hasil foto cukup baik. Namun, noise masih banyak terlihat. Mungkin Anda bisa menggunakan LED Flash ketika selfie di malam hari ataupun kondisi minim cahaya.</p><p>Ketika kami selfie menggunakan kamera depan Redmi Note 7 hasilnya juga tak kalah bagus. Namun, warna yang dihasilkan Redmi Note 7 lebih nautral dibandingkan Realme 3.</p><p><strong>Hardware dan Performa</strong></p><p> </p><p>Dapur pacunya, Realme 3 ditunjang MediaTek Helio P60 dengan proses FinFET 12nm terbaru TSMC yang lebih hemat daya. Helio P60 mengadopsi struktur 8-inti dan dilengkapi dengan empat inti Cortex-A53 dan empat inti Cortex-A73, dengan clock speed hingga 2.0GHz.</p><p>Helio P60 memiliki teknologi khusus bernama NeuroPilot untuk mengolah teknologi AI. NeuroPilot mampu melakukan pendeteksian wajah, pembelajaran yang mendalam, pengenalan adegan, akselerasi AR dan MR.</p><p>Sementara Redmi Note 7 dibenamkan chipset Qualcomm Snapradgon 660 yang dibangun dengan teknologi fabrikasi yang lebih lama, yakni 14 nm. Chipset Snapdragon 660 ini menggunakan prosesor 8 core Qualcomm Kryo 260 64 bit.</p><p>Untuk menguji performa Realme 3 dan Redmi Note 7, kami menggunakan aplikasi PC Mark. Redmi 3 meraih skor 6.790 untuk tes work performance 1.0. Sementara Realme 3 meraih skor lebih tinggi mencapai 10.909 dalam tes yang sama yakni work performance 1.0.</p><p>Kami juga mencoba bermain game yang sama yakni PlayerUnknown’s Battlegrounds (PUBG) dan Mobile Legends: Bang Bang. Untuk PUBG, settingan yang kami gunakan di kedua smartphone ini sama dengan settingan tertinggi dengan grafis HD dan frame rate high.</p><p>Untuk Mobile Legends: Bang Bang kami menggunakan setting grafis High. Hasilnya, kedua smartphone ini sanggup melibas kedua game tersebut dengan baik.</p><p>Tidak ada kendala berarti saat bermain kedua game tersebut. Namun, dukungan game space pada Realme 3 membuat performa smartphone ini lebih baik, gambar yang dihasilkan lebih halus serta bebas gangguan telepon ketika bermain game.</p><p><strong>Daya tahan</strong></p><p>Dayanya, Realme 3 dibenamkan baterai berkapasitas cukup besar yakni 4.230mAh. Kapasitas baterai tersebut memberikan daya tahan lebih lama pada Realme 3.</p><p>Dalam keadaan standby, Realme 3 mampu bertahan hingga seharian penuh atau 24 jam. Saat digunakan untuk browsing internet, smartphone ini bertahan hingga 21 jam.</p><p>Saat menonton video non stop, Realme 3 mampu bertahan hingga 12 jam. Ketika bermain game terus menerus, Realme 3 bertahan hingga 10 sampai 11 jam.</p><p>Mode Screen Battery Optimization pada Realme 3 membuat lebih irit daya. Keseimbangan dan Mode Efisiensi Energi Tinggi yang dapat dipilih pengguna untuk memperpanjang masa pakai baterai masing-masing sebesar 5?n 10%.</p><p>Proses isi daya Realme 3 terbilang cepat. Dari kondisi dibawah 20% hingga 100%, Realme 3 membutuhkan waktu isi daya 2 jam. Dalam kondisi diatas 20%, tentunya membutuhkan waktu yang sedikit dalam proses charging, sekitar 1 sampai 1 setengah jam.</p><p>Sedangkan Redmi Note 7 dibenamkan baterai berkapasitas lebih kecil, yakni 4.000. Proses isi dayanya, Redmi Note 7 memakan waktu lebih lama sekitar 2,5 jam.</p><p>Dalam keadaan standby, Redmi Note 7 mampu bertahan hingga seharian penuh atau 24 jam. Ketika bermain game terus menerus, Redmi Note 7 bertahan hingga 6 sampai 7 jam.</p><p><strong>Harga dan layanan after sales</strong></p><p>Realme 3 varian 4/64 dilepas seharga Rp2.399.000. Varian 3/64 dilepas seharga Rp2.099.000. Sedangkan varian 3/32 dijual seharga Rp1.799.000.</p><p>Realme resmi mendirikan Service Center Eksklusif Realme untuk pertama kalinya di Indonesia yang berlokasi di Roxy, Jakarta Barat. Realme Service Center akan melayani pelanggan dari Senin hingga Minggu mulai pukul 09:00 hingga 17:30 WIB. Service center ini menawarkan layanan perbaikan semua smartphone Realme dengan cepat hanya dalam waktu satu jam.</p><p>Sejumlah teknisi profesional dihadirkan Realme dalam service centernya. Selain itu, service center ini menyediakan aksesoris asli untuk dijual, konsultasi, upgrade, penggantian komponen dan pengiriman gratis. Selanjutnya, Realme akan membangun Exclusive Store pertamanya di dunia.</p><p>Untuk Redmi Note 7 sendiri belum ada harga resminya karena belum diluncurkan secara resmi di Indonesia. Di Cina, Redmi Note 7 dibanderol 999 Yuan atau sekitar Rp 2.100.000 untuk varian 3GB/32GB dibanderol.</p><p>Varian 4GB/64GB dijual 1.199 Yuan atau sekitar Rp2.500.000 juta. Varian tertinggi 6GB/64GB dibanderol 1.399 Yuan atau sekitar Rp2.900.000 juta.</p><p><strong>Kesimpulan</strong></p><p>Dari segi desain, Realme 3 lebih ringan dan lebih elegan dibandingkan Redmi Note 7. Hasil foto kamera utama Realme 3 lebih natural dibandingkan Redmi Note 7. Sementara hasil selfie Redmi Note 7 lebih natural dibandingkan Realme 3.</p><p>Kedua smartphone ini sama-sama memiliki performa optimal. Namun, ketika bermain game Realme 3 lebih smooth dibandingkan Redmi Note 7.</p><p>Dari segi harga, Realme 3 lebih terjangkau dibandingkan Redmi Note 7. Untuk layanan after sales nya pun Realme lebih cepat dan baik.</p><p>Demikian perbandingan Realme 3 Vs Redmi Note 7, semoga bisa menjadi acuan pembaca untuk memilih smartphone terbaik yang dibutuhkan.</p>', 'Realme-vs-Xiaomi-redmi-not-7d-696x461.jpg', 'on'),
(11, 7, 'Review Huawei Y7 Pro 2019: Smartphone Para Kreator', '<p><strong>Jakarta, Selular.ID</strong> – Usai menutup tahun dengan flagship Mate 20 Pro, Huawei memulai tahun 2019 dengan handset merakyat. Huawei Y7 Pro 2019 menjadi model pembuka perusahaan di Indonesia.</p><p>Sampai artikel ini diterbitkan, belum ada kepastian soal harga dari Huawei. Tetapi sesuai DNA Y series, Huawei Y7 Pro (2019) akan dibanderol cukup ramah di kantong.</p><p>Sebelum membahas lebih lanjut, berikut sekilas mengenai spesifikasi Huawei Y7 Pro 2019. Handset menampilkan layar LCD IPS 6,26, prosesor Octa core 1.8 GHz Snapdragon 450, RAM 3GB, penyimpanan internal 32GB yang terbuka untuk ekspansi hingga 512GB melalui kartu microSD.</p><p>Smartphone dibekali dual kamera belakang 13MP + 2MP dan kamera depan 8MP yang sudah mendukung Face Unlock. Handset sudah mengadopsi Android 9.0 Pie berlapis MEUI 9.0 dengan dukungan kapasitas baterai 4000 mAh.</p><p>Sekarang, mari kita bahas lebih dalam mengenai fitur-fiturnya.</p><p><strong>Desain</strong></p><p>Huawei Y7 Pro (2019) diperuntukan bagi kalangan milenial yang aktif dan selalu bersemangat. Karena itu, smartphone hadir dalam dua opsi warna: Midnight Black dan Aurora Blue. Dua warna itu melekat indah di bodi bagian belakang keramiknya.</p><p>Perangkat ini dirancang dengan tubuh berbahan Polycarbonat untuk meningkatkan daya tahan terhadap goresan yang bakal merusak penampilan dan estetikanya.</p><p>Penempatan kamera ganda Y7 Pro 2019 meniru flagship Huawei P20 Pro. Jadi ketika diposisikan miring atau dipegang secara horizontal, setup kamera terlihat apik, Anda akan melihat bagian belakangnya begitu menyerupai kamera digital.</p><p>Anda bisa mengaktifkan dua kartu SIM dan memasukkan microSD sekaligus, karena Huawei Y7 Pro 2019 sudah mengusung tiga laci dalam satu slot. Sementara untuk keperluan mengisi daya, handset dibubuhi port micro USB standard.</p><p>Catatan: Tidak ada pemindai sidik jari. Pengguna bisa menggunakan fitur Face Unlock untuk keamanan selain metode standard PIN, kata sandi, dan pola.</p><p>Layar</p><p>Selain soal warna, untuk lebih memantapkan pengalaman penggunaan yang maksimal, Huawei Y7 Pro 2019 dibekali dengan bentang layar alias display yang luas yakni 6.26 inci resolusi HD (720x1520px) dengan rasio 19:9.</p><p>Bagian muka kian dipercantik dengan desain Dewdrop (tetes air) di layar bagian atas. Dengan begitu, layar makin lebar sehingga nyaman digunakan untuk menikmati konten multimedia. Serta, cocok bagi Anda yang suka bermain game online dari layar smartphone ketika mobile.</p><p><strong>Kamera</strong></p><p>Berbicara mengenai kualitas kamera, Huawei Y7 Pro 2019 cocok bagi pekerja seni terutama creator konten. Kameranya memiliki bukaan dengan rentang f-stop yang besar. Dimulai dari f/1.8 hingga f/16.</p><p>Dengan rentang nilai aperture seperti ini, pengguna akan bisa memanfaatkannya untuk mengambil foto bokeh dengan latar belakang buram yang sangat baik hingga foto landskap yang indah. Kemampuan itu tentu dibutuhkan bagi pembuat konten, baik itu video, foto, atau boomerang. Kemudian dengan mudah bisa di-share ke Instagram, TikTok, dan Snapchat dan lainnya.</p><p>Nah, kamera belakang Huawei Y7 Pro 2019 sendiri memilliki komposisi double yakni 13MP dan 2MP (dual kamera) dan sudah dilengkapi teknologi AI.</p><p>Kamera mampu mengenali 22 objek berbeda yang terdiri dari, langit, manusia, binatang dan pantai. Nantinya AI akan membantu memberikan adjustment untuk memperbagus hasil foto yang dikenalinya tersebut.</p><p>Pada kamera depan 8MP, Huawei menyiapkan fitur Easy Hands-Free Shooting, yang mampu membuat foto selfie menjadi lebih mudah dengan memanfaatkan kontrol gerakan dan deteksi senyuman.</p><p><strong>Baterai besar</strong></p><p>Fitur wajib yang harus ada di smartphone kretaor juga adalah daya tahan. Ketersediaan smartphone dengan kapasitas baterai yang besar menjadi sangat penting. Nah Huawei Y7 Pro 2019 ini menjanjikan power besar karena dibekali baterai berkapasitas 4000mAh.</p><p>Dengan begitu, Anda bisa menggunakan lebih dari sehari untuk sekali recharge, meski dengan penggunaan yang intensif. Bahkan, perusahaan mengklaim baterai akan bisa diandalkan sampai dua tahun lamanya dengan penggunaan normal.</p><p>Agar penggunaan baterai dapat dihemat, Huawei Y7 Pro, yang sudah memakai sistem operasi EMUI 9.0 berbasis Android P dan memiliki sistem management baterai yang pintar.</p><p>Sistem akan mendeteksi aplikasi yang menyedot banyak daya baterai di background dan segera mengingatkan pemiliknya. Penggunaan baterai pada tiap-tiap perangkat keras di dalam smartphone ini juga bisa dilihat.</p><p><strong>Kinerja</strong></p><p>Kinerja Huawei Y7 Pro ditopang chipset Qualcomm Snapdragon 450 octa-core. Chipset berteknologi 14nm ini mengandung delapan core ARM Cortex-A53 yang sangat efisien dengan kecepatan sampai 1.8GHz, untuk menyajikan performa multi-core yang luar biasa tapi dengan penggunaan baterai yang efisien.</p><p>Dengan pemroses grafis Andreno 506 GPU yang didukung oleh Vulkan, menghasilkan performa grafis yang mulus saat kamu memainkan game yang membutuhkan grafis tinggi. Keasyikan main game takkan terganggu panggilan telepon berkat fitur Do Not Disturb Mode.</p><p>Modem X6 LTE di dalam chipset Snapdragon 450 itu memungkinkan Huawei Y7 Pro mendukung konektivitas Dual 4G. Dengan fitur ini, pengguna bisa menjalankan data pada satu SIM Card sambil melakukan panggilan telepon pada SIM Card yang satu lagi. Malah, kedua SIM Card bisa diisi operator yang berbeda.</p><p><strong>Benchmark</strong></p><p>Ditopang Qualcomm Snapdragon 450 menjadikan nyaman digunakan sehari-hari. Mulai dari bertelepon, chatting, social media, memotret, merekam video, sampai bermain game.</p><p>Untuk lebih Selular.ID menguji kinerja menggunakan Antutu Benchmark v7.1.4, Huawei Y7 Pro (2019) memiliki skor cukup tinggi yakni 68.840.</p><p>Skor Huawei Y7 Pro (2019) pada pengujian Geekbench 4.3.2 untuk single dan multi-core juga cukup baik, yakni 691 dan 2.989.</p><p>Dengan angka itu, artinya Huawei Y7 Pro (2019) berkemampuan baik untuk melakukan tugas harian.</p><p><strong>Game Mode</strong></p><p>Pada Do Not Disturb Mode, penelepon akan diberitahu bahwa si penerima sedang tidak bisa menerima panggilan, sambil mengabarkan si penerima melalui SMS tentang adanya panggilan telepon tersebut. Dengan mode ini juga, semua notifikasi (kecuali yang penting macam daya baterai yang tersisa, alarm, dan sebagainya) dibikin senyap.</p><p>Tak usah khawatir kehabisan tempat untuk menyimpan berbagai aplikasi dan file yang menarik dan menghibur, seperti dokumen, game, foto, musik, dan video. Sebab kapasitas penyimpanan internal sebesar 32GB bisa ditingkatkan dengan slot kartu MicroSD sampai 512GB.</p><p><strong>Layak dibeli?</strong></p><p>Smartphone Android Pie dengan baterai besar belum banyak di pasaran. Dua poin itu saja sudah bisa menjadi alasan kuat bagi Anda untuk memilih Huawei Y7 Pro 2019.</p><p>Ditambah, performa mengagumkan berkat kombinasi chipset dan GPU yang hebat tentu memuluskan apapun aktivitas Anda bersama smartphone. Apalagi Huawei akan menghadirkannya dengan harga terjangkau. Kira-kira akan dibanderol berapa ya cocoknya smartphone dengan fitur-fitur keren begini?</p><p> </p>', 'Huawei-Y7-Pro-4-696x462.jpg', 'on'),
(12, 1, 'Samsung Rilis Galaxy Jean2 dan Galaxy Wide4', '<p><strong>Jakarta, Selular.ID</strong> – Bukan hanya lini premium, Samsung juga meluncurkan smartphone keluarga entry level di pasar domestiknya, karena vendor baru-baru ini mengeluarkan Galaxy Jean2 dan Galaxy Wide4 di Korea Selatan.</p><p>Perangkat yang memiliki nomor model SM-A202K dan SM-A205S sebenarnya adalah produk yang sama dengan Galaxy A20e dan Galaxy A20 yang sudah edar di negara lain termasuk Indonesia.</p><p>Tergolong entry level, kedua handset dijual dalam kisaran harga terjangkau untuk portofolio Samsung.</p><p>Pada awalnya, Galaxy Jean2 diperkenalkan sebagai smartphone eksklusif untuk pasar Eropa dengan layar TFT 5,8 inci dengan berat 141 gram.</p><p>Jean2 ditenagai SoC Exynos 7884, ditambah dengan RAM 3GB, penyimpanan 32GB dan memiliki dua kamera di bagian belakang (sensor primer 13MP dan lensa sudut lebar 5MP).</p><p>Samsung Galaxy Jean2 dibanderol KRW200.000 atau sekitar Rp2,4 juta, dan sudah tersedia di toko offline dan online di Korsel.</p><p>Model satunya lagi, Galaxy Wide4 menghadirkan layar Super AMOLED 6,4 inci bersama bobot yang lebih berat dan baterai yang lebih besar.</p><p>Spesifikasi lain seperti memori, kamera, dan software cukup mirip dengan Galaxy A20/Galaxy Jean2.</p><p>Meskipun awalnya ponsel diluncurkan di beberapa pasar dengan harga yang setara dengan Rp2,5 juta, Galaxy Wide4 muncul di Korea Selatan dengan harga KRW220.000 atau sekitar Rp2,7 juta.</p>', 'IMG_20190605_164107-696x494.jpg', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_artikel`
--

CREATE TABLE `banner_artikel` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner_artikel`
--

INSERT INTO `banner_artikel` (`banner_id`, `banner`, `gambar`, `link`, `status`) VALUES
(2, 'Review Huawei P30, Kamera Kece, Kinerja Oke', 'Huawei-P30-k-696x462.jpg', 'http://localhost/phoneX/home/view_artikel/8', 'on'),
(5, 'Samsung Rilis Galaxy Jean2 dan Galaxy Wide4', 'IMG_20190605_164107-696x494.jpg', 'http://localhost/phoneX/home/view_artikel/12', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_promosi`
--

CREATE TABLE `banner_promosi` (
  `banner_id` int(10) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner_promosi`
--

INSERT INTO `banner_promosi` (`banner_id`, `banner`, `gambar`, `link`, `status`) VALUES
(2, 'Promo Tokopedia Gratis Ongkir', 'Kode-Promo-Tokopedia-tokopedia_net_.jpg', 'https://www.tokopedia.com/discovery/promo-harian/?c=676207368&ds_rl=1261170&gclid=CjwKCAjw0ZfoBRB4EiwASUMdYdb1kflRHd3T9nNEVle2y9_0aWZ86g_i_oe3vq_ts0GDltrrHbP2pxoCxycQAvD_BwE&gclsrc=aw.ds', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`, `status`) VALUES
(1, 'Samsung', 'on'),
(4, 'Apple', 'on'),
(6, 'Xiaomi', 'on'),
(7, 'Huawei', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id_komen` int(10) NOT NULL,
  `artikel_id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id_komen`, `artikel_id`, `nama`, `email`, `message`) VALUES
(1, 10, 'wira', 'wiraadji90@gmail.com', 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(10) NOT NULL,
  `level` enum('premium','reguler') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `level`, `nama`, `link`, `gambar`, `status`) VALUES
(2, 'premium', 'Toko Cinta Damai', 'https://www.tokopedia.com/wendyefendy/samsung-galaxy-s10-ram-8gb-rom-128gb-original-bnib?ev_efid=CjwKEAjwlujnBRDl2teOp_veulQSJAC5bHgtOuHYubahQZbjw8Vz7md9b-acjxx4JU1xv-OoYc7byhoC-_Pw_wcB:G:s&ds_rl=1270', 'logo_1.jpg', 'on'),
(3, 'premium', 'Toko Hidup Makmur', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_2.jpg', 'on'),
(4, 'premium', 'Kedai Aceh', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_3.jpg', 'on'),
(5, 'reguler', 'Rumah Makan Padang', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_4.jpg', 'on'),
(6, 'premium', 'Toko Hidup Indah', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_5.jpg', 'on'),
(7, 'premium', 'Toko Gadget KU', 'https://www.tokopedia.com/wendyefendy/samsung-galaxy-s10-ram-8gb-rom-128gb-original-bnib?ev_efid=CjwKEAjwlujnBRDl2teOp_veulQSJAC5bHgtOuHYubahQZbjw8Vz7md9b-acjxx4JU1xv-OoYc7byhoC-_Pw_wcB:G:s&ds_rl=1270', 'logo_6.jpg', 'on'),
(8, 'premium', 'Toko Aku dan Kamu', 'https://www.tokopedia.com/wendyefendy/samsung-galaxy-s10-ram-8gb-rom-128gb-original-bnib?ev_efid=CjwKEAjwlujnBRDl2teOp_veulQSJAC5bHgtOuHYubahQZbjw8Vz7md9b-acjxx4JU1xv-OoYc7byhoC-_Pw_wcB:G:s&ds_rl=1270', 'logo_7.png', 'on'),
(9, 'premium', 'Toko Kembar Upin Ipin', 'https://www.tokopedia.com/wendyefendy/samsung-galaxy-s10-ram-8gb-rom-128gb-original-bnib?ev_efid=CjwKEAjwlujnBRDl2teOp_veulQSJAC5bHgtOuHYubahQZbjw8Vz7md9b-acjxx4JU1xv-OoYc7byhoC-_Pw_wcB:G:s&ds_rl=1270', 'logo_8.jpg', 'on'),
(10, 'premium', 'Toko Uncle Mutoh', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_51.jpg', 'on'),
(11, 'reguler', 'Toko Wak Dalang', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_71.png', 'on'),
(12, 'premium', 'Toko Atok', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_31.jpg', 'on'),
(13, 'reguler', 'Toko Kita', 'https://www.samsung.com/id/smartphones/galaxy-m20/SM-M205GDADXID/?gclid=CjwKCAjwlujnBRBlEiwAuWx4LT4f9WDuLxmc5dLinPacSpcXlizlV93Ipqu_GdLWPZF5ZrZb4L59bhoCoFgQAvD_BwE&cid=ID_20180312_IM_SMART_M20_AO_I_SE', 'logo_72.png', 'on');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `banner_artikel`
--
ALTER TABLE `banner_artikel`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `banner_promosi`
--
ALTER TABLE `banner_promosi`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `banner_artikel`
--
ALTER TABLE `banner_artikel`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `banner_promosi`
--
ALTER TABLE `banner_promosi`
  MODIFY `banner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`);

--
-- Ketidakleluasaan untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `komen_ibfk_1` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`artikel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
