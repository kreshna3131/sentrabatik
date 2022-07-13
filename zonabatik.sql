-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2021 pada 15.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zonabatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id_admin` int(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id_admin`, `username`, `password`, `level`) VALUES
(15, 'bagasaditya', '$2y$10$sL647Ak8CfOBxYrwETVDlutW/8Cpyc2mtSOGFo1sDYH54qx6fH5Le', 'admin'),
(16, 'ivanfausta', '$2y$10$QjDp00BqP68/MuQ7xyMA/OAK9wQEJ6mt/3cSU2g8rCR3kbAV4rSpi', 'pengurus'),
(17, 'kreshnaputra', '$2y$10$QjVprKpdXTexSon7b68wJ.acfPs7EFvG643.dmF2skpksawWvf07q', 'pengurus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(30) NOT NULL,
  `id_kota` int(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_kota`, `foto`) VALUES
(1, 1, 'homeimg.jpg'),
(2, 2, 'store.png'),
(3, 3, 'teks.png'),
(4, 4, 'peta.png'),
(5, 1, 'galeri.png'),
(6, 1, 'solo.jpg'),
(7, 2, 'pekalongan.jpg'),
(8, 3, 'cirebon.jpeg'),
(9, 4, 'jogja.jpg'),
(10, 1, 'title.png'),
(11, 1, 'solo5.jpg'),
(12, 1, 'solo2.jpg'),
(13, 1, 'solo3.jpg'),
(14, 1, 'solo4.jpg'),
(15, 4, 'yogya4.jpg'),
(16, 3, 'cirebon.jpg'),
(17, 1, 'DSC06057.JPG'),
(18, 1, 'solo1.jpg'),
(19, 3, 'cirebon2.jpg'),
(20, 2, 'pekalogan2.jpg'),
(21, 3, 'cirebon3.jpg'),
(22, 2, 'pekalogan3.jpg'),
(23, 3, 'cirebon4.jpg'),
(24, 2, 'pekalongan3.jpg'),
(25, 1, 'annisa-asyarofa-MNEcwebSFQc-unsplash.jpg'),
(26, 4, 'bangkit-ristant-6aV84WczseY-unsplash.jpg'),
(27, 3, 'cirebon 2.jpg'),
(28, 3, 'Cirebon_Kejaksan_Station.jpg'),
(29, 3, 'maharanita-nugradianti--NfN-PIJf_k-unsplash.jpg'),
(30, 4, 'mahendra-febrianto-08_7WGCEYqA-unsplash.jpg'),
(31, 2, 'pekalongan 1.jpg'),
(32, 2, 'pekalongan 2.jpg'),
(33, 2, 'pekalongan 3.jpg'),
(34, 4, 'camille-bismonte-vUc03gxjEY4-unsplash.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(30) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(1, 'Solo'),
(2, 'Pekalongan'),
(3, 'Cirebon'),
(4, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(30) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `id_kota` int(30) NOT NULL,
  `materi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `keterangan`, `id_kota`, `materi`) VALUES
(1, 'Ciri Kain Batik Solo dan Keindahannya', 1, 'Ciri Kain Batik Solo dan Keindahannya'),
(2, 'Ciri Kain Batik Solo dan Keindahannya', 1, '<p>Ciri kain batik solo, Setiap daerah di Indonesia pasti memiliki corak batik tersendiri. Untuk daerah Solo atau Surakarta, apakah yang menjadi ciri khas dari batik Solo? Batik Solo terkenal dengan corak dan pola tradisionalnya batik dalam proses cap maupun dalam batik tulisnya. Bahan-bahan yang dipergunakan untuk pewarnaan masih tetap banyak memakai bahan-bahan dalam negeri seperti soga Jawa yang sudah terkenal sejak dari dahulu.</p>        <p>Ada pula motif yang mengandung unsur agama pun menghiasi motif khas batik Solo. Semisal motif naga, burung garuda, serta sawat yang merupakan simbol agama Hindu. Untuk hal pewarnaan, batik Solo lebih didominasi warna hitam atau kecoklatan. Meskipun menggunakan warna putih tetap saja warna kecoklatan mendominasi pada motif batik.</p>        <hr>'),
(3, 'Beberapa ciri khasnya', 1, 'Beberapa ciri khasnya'),
(4, 'Beberapa ciri khasnya', 1, '<p>1. Batik Solo memiliki warna dominan cokelat soga kekuningan. <br> 2. Batik Solo memiliki ciri khas geometris pada batiknya. <br> 3. Ukuran motifnya yang kecil, atau istilahnya Truntum.</p>'),
(5, 'Beberapa ciri khasnya', 1, '<p>Ciri kain batik Solo terkenal dengan corak dan pola tradisionalnya batik dalam proses maupun dalam batik tulisnya. Bahan-bahan yang dipergunakan untuk pewarnaan masih tetap banyak memakai bahan-bahan dalam negeri seperti soga Jawa yang sudah terkenal sejak dari dahulu. Polanya yang terkenal antara lain '),
(6, 'Ciri Kain Batik Solo, Sejarah dan Penjelasannya', 1, 'Ciri Kain Batik Solo, Sejarah dan Penjelasannya'),
(7, 'Ciri Kain Batik Solo, Sejarah dan Penjelasannya', 1, '<p>Selain dikenal dengan kekentalan adat Jawa, Solo juga dikenal sebagai ikon batik. Motif batik Solo yang dihasilkan pun beragam. Bahkan batik Solo kini lebih populer melalui BatikDlidir yang sudah merambah pangsa pasar luar negeri. Tidak mengherankan jika batik Solo menjadi salah satu tujuan yang wajib dikunjungi oleh para wisatawan ketika berkunjung ke kota Surakarta hadiningrat. Kammi juga memiliki pabrik produksi batik kami sendiri yang bertempat di Laweyan, Solo. Kegiatan membatik sudah menjadi budaya sehari-hari bagi masyarakatnya, dan biasanya diturunkan dari leluhurnya.         </p>'),
(8, 'Data Penjual Batik', 1, 'Data Penjual Batik'),
(9, 'Ciri Kain Batik Pekalongan dan Keindahannya', 2, 'Ciri Kain Batik Pekalongan dan Keindahannya'),
(10, 'Ciri Kain Batik Pekalongan dan Keindahannya', 2, '<p>Apa arti dari motif batik Pekalongan? Yang dimaksud dengan motif batik Pekalongan adalah motif batik yang berasal dari kota Pekalongan - Jawa Tengah, tempat dari motif batik ini berasal. Biasa juga disebut batik pesisir, karena letak geografis kota Pekalongan yang berada di pesisir pantai utara pulau Jawa. Begitu pun motif batik daerah lain, disebut dengan nama daerah masing-masing seperti motif batik solo, motif batik jogja dll.Penyebutan ini lebih memudahkan sekaligus menjadi penanda dari mana motif batik tersebut berasal.</p>'),
(11, '1. Memiliki warna yang cerah', 2, '1. Memiliki warna yang cerah'),
(12, 'Ciri Kain Batik Pekalongan dan Keindahannya', 2, '<p>Sejarah motif batik Pekalongan Sejarah motif batik pekalongan tercatat banyak dipengaruhi oleh budaya dari luar yaitu budaya dari Arab (Islam) dan budaya dari tionghoa yang terjadi pada masa lalu. Sebelumnya, mayoritas masyarakat Pekalongan selalu membuat motif batik dengan meniru antara satu dan lainnya. Jadi sebenarnya masyarakat Pekalongan memiliki imajinasi dan kreatifitas yang tinggi, mengapa? Karena masyarakat Pekalongan dituntut untuk bisa menciptakan motif batik pekalongan terbaru agar tidak disamai oleh yang lainnya.</p>'),
(13, 'Ciri Kain Batik Pekalongan dan Keindahannya', 2, '<p>Menurut sumber lain, pengusaha batik asal Belanda juga turut berkontribusi atas perkembangan motif batik pekalongan. Dengan kreativitasnya, dia berhasil mengarahkan terciptanya motif-motif baru batik pekalongan dan salah satunya menjadi motif batik yang terkenal di pekalongan.</p>'),
(14, '1. Memiliki warna yang cerah', 2, '<p>Salah satu ciri batik pekalongan yaitu memiliki warna yang sangat cerah. Salah satu warna khas dari batik pekalongan memiliki warna batik pesisir dengan warna yang lebih cerah dan terang. Umumnya warna-warna yang digunakan dalam proses pewarnaan batik pekalongan yaitu warna pink terang, merah muda, hijau, kuning, biru, dalem dan jenis-jenis warna lainnya yang sering dijumpai di sekitar kita.</p>'),
(15, '2. Memiliki motif penuh dengan titik dan garis', 2, '<p>Setiap batik pekalongan memiliki motif titik dan juga garis pada setiap hasilnya. Misalnya jika batik memiliki pola bunga kecil-kecil maka akan diapit dan dikelilingi dengan motif-motif perpaduan titik dan garis sehingga dapat memberikan desain tampilan motif yang lebih hidup dan nyata. Jadi motif batik pekalongan memiliki motif batik yang sangat ramai, padat, dan juga warna-warna yang cerah sehingga dapat memberikan daya tariknya tersendiri.</p>'),
(16, '3. Memiliki motif jlamprang', 2, '<p>Motif jlamprang merupakan motif titik geometris yang serupa dari ujung ke ujung. Motif ini menggunakan perpaduan antara warna-warna yang cerah agar lebih menarik.</p>'),
(17, '4. Memiliki motif khas keturunan Tiongkok', 2, '<p>Batik pekalongan juga memiliki motif khas Tiongkok misalnya seperti motif bergambar burung phoenix, naga, dan motif lainnya.</p>'),
(18, '5. Mayoritas bermotif bunga', 2, '<p>Rata-rata motif batik pekalongan memiliki motif dan corak bunga-bunga namun corak bunganya tentu bermacam-macam. Hanya saja motif bunga pada batik pekalongan memiliki ukuran yang kecil dibandingkan motif bunga jenis batik lainnya. Corak bunga dibuat kecil dengan tujuan agar pengguna pakaian motif batik ini bisa terlihat lebih langsing.</p> '),
(19, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Perjalanan sejarah batik di Cirebon kurang lebih sama dengan batik di Yogyakarta dan batik di Surakarta (Solo). Mula-mula muncul di lingkungan keraton untuk selanjutnya keluar melalui para abdi dalem yang tinggal di luar keraton. Seiring berjalannya waktu, masyarakat Cirebon mengetahui dan mempelajari seni batik sebagai barang dagangan.</p>'),
(20, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Cirebon yang berada di pantai utara Jawa sangat strategis sebagai tempat bertemunya berbagai kebudayaan. Pelabuhan Muara Jati menjadi titik awal dimana batik semakin berkembang. Di sanalah tempat persinggahan pedagang dari berbagai bangsa, seperti Tiongkok, Arab, Persia, India, Malaka, Tumasik, Pasai, Jawa Timur, Madura dan Palembang.</p>'),
(21, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Konon, masyarakat Cirebon sendiri juga merupakan pendatang dari kerajaan Galuh Pakuan yang menetap dan mendirikan perkampungan nelayan hingga mendirikan kerajaan Cirebon. Masyarakat pesisir dikenal terbuka sehingga memungkinkan persinggungan budaya dan mencipta asimilasi maupun interkulturasi yang saling mempengaruhi.</p>'),
(22, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Pertumbuhan dan perkembangan batik di wilayah Cirebon unik karena hadir dalam dua klasifikasi, yakni batik Keratonan dan Pesisiran. Selain oleh pihak keraton, kelestarian batik Cirebon juga disangga oleh beberapa tempat produksi bati, seperti Kenduruan, Paoman, Trusmi dan Kalitengah. Di antara sentra batik tersebut, desa Trusmi yang masih bertahan.</p>'),
(23, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Selain menjadi pemasok kebutuhan sandang batik di Keraton Cirebon, desa Trusmi juga memproduksi batik gaya pesisiran untuk memenuhi kebutuhan masyarakat. Batik gaya Keratonan sarat dengan nilai filosofis yang mendalam. Sementara itu, batik gaya Pesisiran lebih dinamis dalam mengikuti selera pasar dan tidak harus mengandung makna filosofis.</p>'),
(24, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Sama dengan geliat perbatikan di daerah lain, industri batik Cirebon terus bertumbuh. Terlebih ketika batik ditetapkan sebagai warisan dunia UNESCO pada tahun 2009. Batik yang sebelumnya sudah meningkat dalam segi jumlah, semakin berkembang lagi. Jika awalnya hanya berupa kain, selanjutnya batik juga hadir dalam bentuk busana maupun aksesoris.</p>'),
(25, 'Keunikan Motif Batik Cirebonan', 3, '<p>Salah satu motif yang cukup terkenal adalah motif Megamendung,dilihat dari segi craftmanship nya, motif batik Megamendung banyak di pengaruhi oleh kebudayaan China pada masanya. Motif batik cirebon megamendung ini memiliki ciri khas yaitu bentuk garis-garis awan yang berbentuk lonjong, lancip dan segitiga yang berbeda dengan garis awan motif China yang umumnya berbentuk bulatan. Yang kedua adalah motif batik Naga Silam, motif ini hampir sama dengan motif batik mega mendung, karena motif batik naga silam juga dipengaruhi oleh kebudayaan dari China. Perbedaannya adalah motif batik naga silam juga dipengaruhi oleh kebudayaan dari India. Corak motif naga silam mempunyai makna yaitu peperangan antara kebaikan melawan kejahatan untuk mencapai suatu kemakmuran. Dilihat dari sisi demografi, batik cirebon banyak terpengaruh kebudayaan China dikarenakan letaknya yang berada di pesisir pantai utara jawa barat dan merupakan pintu gerbang masuknya kebudayaan China pada masanya.</p>'),
(26, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Kerajaan Mataram Islam yang pernah berjaya di Jawa memiliki andil kuat dalam melestarikan batik. Batik tulis yang mewakili batik klasik atau batik murni bersumber pada arus budaya di masa kerajaan yang didirikan Sutawijaya tersebut. Lestari dalam lingkup keraton untuk kemudian berkembang hingga keluar keraton.</p>'),
(27, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Selama mendirikan Mataram, Sutawijaya atau Panembahan Senopati (1587-1601) sering bertapa, melakukan pengembaraan spiritual di sepanjang pesisir selatan Jawa. Konon, lanskap ombak yang menghantam bebatuan karang telah mengilhaminya untuk menciptakan motif parang, salah satu motif batik khas Mataram.</p>'),
(28, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Selanjutnya, dinamika kehidupan keraton melahirkan Perjanjian Giyanti (1755 M). Perjanjian yang membagi Mataram menjadi Kasunanan Surakarta dan Kasultanan Yogyakarta. Tidak hanya kekuasaan, namun juga cara melestarikan budayanya. Batik Surakarta (Solo) dan Batik Yogyakarta tercipta dalam nuansa seperti itu.</p>'),
(29, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Meski tetap dijadikan pakaian adat keraton, dua jenis batik tersebut khas dengan coraknya sendiri. Batik Yogya mewakili salah satu kelengkapan busana Mataram yang seutuhnya menjadi milik Keraton Yogyakarta. Dominasi warna tanah menjadi pembeda dari Batik Solo yang berwarna coklat emas dengan dasar krem.</p>'),
(30, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Batik awalnya berkembang terbatas sebagai bagian dari pendidikan putri bangsawan dalam lingkup keraton. Membatik merupakan rutinitas para ratu dan putri kerajaan yang biasanya dibantu para abdi dalem perempuan. Karena rumit dan lama, lambat laut pengerjaannya pun boleh dilanjut di rumah masing-masing.</p>'),
(31, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Dengan diizinkannya pengerjaan batik di rumah, akhirnya tumbuh juga keinginan abdi dalem untuk membuat batik bagi diri mereka sendiri. Dari sini, kegiatan membatik mulai meluas, termasuk di keluarga abdi dalem dan prajurit. Dan, semakin tersebar seiring banyak masyarakat yang melihat mulai tertarik juga menirunya.</p>'),
(32, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Demikianlah akhirnya Batik Yogyakarta keluar dari tembok keraton dan bisa dinikmati oleh semua kalangan. Kreatifitas yang ada turut memperkaya kehadiran motif-motif baru yang dijadikan ciri khas masing-masing kelompok. Motif-motif ini selanjutnya turut menjadi identitas sosial masyarakat Yogyakarta.</p>'),
(33, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, '<p>Sebagai misal, ada batik keraton dan batik larangan yang hanya diperuntukkan bagi keluarga keraton. Ada juga batik sudagaran, batik khas kaum berekonomi kuat namun bukan berasal dari keluarga keraton. Sementara itu, ada juga batik petani atau batik rakyat yang dipakai para petani dan masyarakat umum.</p>'),
(34, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Seiring popularitasnya, klasifikasi batik Yogyakarta semakin memudar. Banyak masyarakat yang mengenakan motif larangan. Hal ini juga sejalan dengan tidak lagi diberlakukannya pelarangan motif tersebut di luar keraton. Hanya saja terkadang masyarakat memakai berdasarkan rasa suka dan tidak memahami peruntukannya.</p>'),
(35, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Sebagai misal motif yang dikhususkan untuk upacara kematian, sebagian masyarakat malah memakainya untuk acara pernikahan. Bukanlah suatu kewajiban untuk memahami filosofinya, yang perlu dimengerti bahwa batik bukanlah sekedar kain bergambar. Setiap motifnya menyimpan makna, baik corak maupun warnanya.</p>'),
(36, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Motif larangan sendiri merupakan pola batik yang sejak akhir abad ke-18 ditentukan, baik oleh Sultan Yogyakarta maupun Sunan Surakarta. Ada aturan-aturan tertentu, termasuk cara pemakaiannya. Ini adalah pakaian kebesaran (busana keprabon) di kalangan bangsawan keraton yang biasanya berbentuk kampuh/dodot.</p>'),
(37, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Sesuai peraturan Sultan Hamengku Buwono VIII yang dikeluarkan pada 3 Mei 1927, terdapat 8 motif yang termasuk batik larangan. Beberapa di antaranya adalah Parang Rusak Barong, Parang Rusak Gendreh, Parang Rusak Klitik, Semen Gede Swat Gruda, Semen Gede Swat Lat, Udan Riris, Rujak Sente, dan Parang-parangan.</p>'),
(38, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Sementara itu, untuk ciri khas batik Yogyakarta secara umum adalah menggunakan latar belakang warna putih. Lebih menghadirkan warna motif terang atau kontras, namun jarang menggunakan isen-isen penuh. Apabila menggunakan perada, diterapkan pada seluruh motif sehingga batiknya terkesan mewah.</p>'),
(39, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Ragam motif batik Jogja cenderung berkisar pada garis silang atau yang dikenal sebagai motif ceplok dan kawung. Ada juga seputar garis miring yang dikenal sebagai motif lereng atau parang. Juga, motif anyaman atau limaran, serta motif non geometris, seperti bunga, burung, naga, awan, gunung dan sebagainya.</p>'),
(40, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Sebagai penerus tradisi budaya klasik, motif batik Yogyakarta banyak mengadopsi simbol kebudayaan Hindu. Paling banyak terlihat pada motif semen. Motif tersebut biasanya menampilkan gurda (burung garuda, melambangkan matahari), lidah api (Dewa Api), serta gambaran tentang konsep dunia bawah-tengah-atas dan mandala.</p>'),
(41, 'Ciri Khas Batik Gaya Jogyakarta', 4, '<p>Keunikan batik Jogja lainnya bisa dilihat dari seret, yakni bagian putih pada pinggir kain batik. Seret batik gaya Yogyakarta dipertahankan agar tetap berwarna putih terang. Sehingga, dalam proses pembuatannya diusahakan agar lilin (malam) yang digunakan tidak pecah untuk menghindari masuknya warna lain.</p>'),
(42, '2. Memiliki motif penuh dengan titik dan garis', 2, '2. Memiliki motif penuh dengan titik dan garis'),
(43, '3. Memiliki motif jlamprang', 2, '3. Memiliki motif jlamprang'),
(44, '4. Memiliki motif khas keturunan Tiongkok', 2, '4. Memiliki motif khas keturunan Tiongkok'),
(45, '5. Mayoritas bermotif bunga', 2, '5. Mayoritas bermotif bunga'),
(46, 'Beberapa ciri khasnya', 2, '<p>Setiap batik memiliki ciri khasnya masing-masing sesuai dengan asalnya sehingga orang yang menggunakan batik tersebut bisa lebih mudah mengenali dan mengetahui asal dari batik tersebut. Sama halnya seperti motif batik pekalongan yang memiliki ciri khasnya sendiri baik pada pola, motif, dan lainnya. ciri khas batik pekalongan yaitu:</p>'),
(47, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, '<p>Sebagian besar bentuk produk budaya di Cirebon hidup dalam nuansa budaya seperti itu, tidak terkecuali Batik Cirebon. Secara visual motif dan corak batiknya sangat beragam dengan banyak pengaruh dari luar. Dari mancanegara terlihat pengaruh budaya Cina, Arab dan India. Pengaruh sangat besar khususnya datang dari seni rupa Cina.</p>'),
(48, 'Ciri Kain Batik Cirebon dan Keindahannya', 3, 'Ciri Kain Batik Cirebon dan Keindahannya'),
(49, 'Keunikan Motif Batik Cirebonan', 3, 'Keunikan Motif Batik Cirebonan'),
(50, 'Ciri Kain Batik Yogyakarta dan Keindahannya', 4, 'Ciri Kain Batik Yogyakarta dan Keindahannya'),
(51, 'Ciri Khas Batik Gaya Yogyakarta', 4, 'Ciri Khas Batik Gaya Yogyakarta'),
(52, 'SEPUTAR BATIK SOLO', 1, 'SEPUTAR BATIK SOLO'),
(53, 'SEPUTAR BATIK PEKALONGAN', 2, 'SEPUTAR BATIK PEKALONGAN'),
(54, 'SEPUTAR BATIK CIREBON', 3, 'SEPUTAR BATIK CIREBON'),
(55, 'SEPUTAR BATIK YOGYAKARTA', 4, 'SEPUTAR BATIK YOGYAKARTA'),
(56, 'Judul About ', 1, 'ASAL USUL WEBSITE'),
(57, 'Isi About', 1, 'Zona Batik'),
(58, 'Isi About', 1, 'adalah sebuah web yang di dalamnya berisi rekomendasi tempat berbelanja batik yang dilengkapi dengan petunjuk lokasi tempat penjual batik yang ada dibeberapa kota besar di Indonesia seperti Solo, Cirebon, Pekalongan dan Yogyakarta. Web ini dibuat dan dikembangakan oleh tim three star yang beranggotakan oleh Bagas Aditya Pramudana sebagai ketua, Ivan Fausta Dinata dan Kreshna Putra Adi Wicaksana. Tujuan atau dasar dibuatnya web ini adalah inisiatif kita dikarenakan pada masa pandemi virus corona ini banyak toko ataupun pengerajin batik yang susah dalam menjual produknya, dengan adanya web ini diharapkan para pengerajin batik dan toko batik bisa mendapatkan konsumen kembali seperti saat sebelum pandemi virus corona.'),
(59, 'Judul Gallery', 1, 'GALLERY SENTRA BATIK'),
(60, 'SELAMAT DATANG', 1, 'SELAMAT DATANG'),
(61, 'DI WEBSITE', 1, 'DI WEBSITE'),
(62, 'SENTRA BATIK INDONESIA', 1, 'SENTRA BATIK INDONESIA'),
(63, 'Narasi Home', 1, 'Temukan Motif Batik terbaik yang ada di Indonesia.'),
(64, '\"klik Get Started\"', 1, '\"klik Get Started\"'),
(65, 'isi narasi', 1, 'untuk memulai memilih kota penghasil batik dan temukan motif batik pilihanmu'),
(66, 'Judul Service', 1, 'Pelayanan Kami'),
(67, 'Narasi service', 1, 'Kami memberikan informasi mengenai batik terbaik bagi para wisatawan baik lokal maupun internasional'),
(68, 'sub judul service', 1, 'Rekomendasi Tempat penghasil batik'),
(69, 'materi sub judul 1', 1, 'Kami mencantumkan beberapa penghasil/toko batik dibeberapa kota yang mempunyai motif batik tertentu'),
(70, 'Sub judul 2', 1, 'Penjelasan Motif batik'),
(71, 'Materi sub judul 2', 1, 'Setiap kota yang mempunyai ciri khas batik tertentu mempunyai makna yang berbeda beda tiap motifnya'),
(72, 'Sub judul 3', 1, 'Denah lokasi'),
(73, 'Materi sub judul 3', 1, 'Setiap toko/penghasil batik sudah terintegrasi dengan Google Maps'),
(74, 'Sub judul 4', 1, 'Gallery'),
(75, 'Materi sub judul 4', 1, 'Kami memberikan beberapa foto tempat wisata sebagai referensi lain selain kain batik'),
(76, 'Contact us', 1, 'HUBUNGI KAMI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(30) NOT NULL,
  `nama_penjual` varchar(100) NOT NULL,
  `id_kota` int(30) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `alamat` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama_penjual`, `id_kota`, `kontak`, `alamat`) VALUES
(1, 'Batik Danar Hadi', 1, '(0271) 648598', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Danar+Hadi+Batik+(Pusat)/@-7.573567,110.8193467,19z/data=!4m13!1m7!3m6!1s0x2e7a1664a6e1320f:0xd3041858d661e320!2sPs.+Singosaren,+Jl.+Dr.+Rajiman+No.164,+Kemlayan,+Kec.+Serengan,+Kota+Surakarta,+Jawa+Tengah+57149!3b1!8m2!3d-7.5731732!4d110.8206439!3m4!1s0x2e7a16805a9dce81:0x8c174f9a02b66ada!8m2!3d-7.5733893!4d110.8198509\">Jalan Dr. Rajiman No.164, Kemlayan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57149'),
(2, 'Pusat Grosir Solo (PGS)', 1, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/PGS+(Pusat+Grosir+Solo)/@-7.572984,110.8278565,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a16674a358f2d:0x7911d181ed22169a!8m2!3d-7.5729893!4d110.8300452\">Jalan Mayor Sunaryo No. 1, Gladag'),
(3, 'Kampung Batik Kauman', 1, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Kampung+Batik+Kauman/@-7.5740976,110.8256411,18.67z/data=!4m13!1m7!3m6!1s0x2e7a1666b28703d5:0xa069637d6a63f721!2sKauman,+Kec.+Ps.+Kliwon,+Kota+Surakarta,+Jawa+Tengah!3b1!8m2!3d-7.573677!4d110.8262346!3m4!1s0x2e7a177fb06ec2e5:0x13604084a482227c!8m2!3d-7.5742476!4d110.8255595\">Kauman, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57122'),
(4, 'Kampung Batik Laweyan', 1, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Forum+Pengembangan+Kampoeng+Batik+Laweyan/@-7.5702517,110.7963928,19.17z/data=!4m13!1m7!3m6!1s0x2e7a15d2b9884bb3:0xf7bba04690535f31!2sJl.+Dr.+Rajiman+No.521,+Laweyan,+Kec.+Laweyan,+Kota+Surakarta,+Jawa+Tengah+57148!3b1!8m2!3d-7.5703474!4d110.7970165!3m4!1s0x2e7a15d4edf74255:0x982cd379dfbb3d4!8m2!3d-7.5698751!4d110.7968625\">Jl. Dr. Rajiman No.521, Laweyan, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57148'),
(5, 'Pasar Klewer', 1, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/PASAR+KLEWER+SOLO/@-7.5760059,110.8261507,18.53z/data=!4m5!3m4!1s0x2e7a16668a70978d:0x896798431c35b6c5!8m2!3d-7.5754744!4d110.8266013\">Jl. DR. Radjiman, Gajahan, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57155'),
(6, 'KAMPUNG BATIK WIRADESA', 2, '0817460021', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/KAMPUNG+BATIK+WIRADESA/@-6.8911176,109.6089231,16z/data=!4m9!1m2!2m1!1sKAMPUNG+BATIK+WIRADESA!3m5!1s0x2e7027b015189735:0x6a3a9e48cca8be9!8m2!3d-6.8913276!4d109.617366!15sChZLQU1QVU5HIEJBVElLIFdJUkFERVNBkgEPc2hvcHBpbmdfY2VudGVy\">Jl. KH. Hasyim Asyari No.8, Mayanglengkong, Kepatihan, Kec. Wiradesa, Pekalongan, Jawa Tengah 51127'),
(7, 'International Batik Center', 2, '(0285) 4416958', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/International+Batik+Center+Pusat+Belanja+Dan+Wisata+Batik/@-6.8915918,109.6229221,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7026f975a179f7:0x9629231c62a2757b!8m2!3d-6.8915971!4d109.6251108\">Jl. Ahmad Yani No.573, Pegantungan, Pekuncen, Kec. Wiradesa, Pekalongan, Jawa Tengah 51152'),
(8, 'Kampung Batik Pesindon', 2, '082221114321', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Kampung+Batik+Pesindon/@-6.8883564,109.6688194,17z/data=!3m1!4b1!4m5!3m4!1s0x2e70242c8c350647:0x9a0b0d2f0d3201e4!8m2!3d-6.8883601!4d109.6710311\">Kampung batik pesindon 4 No.15, Bendan, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51113'),
(9, 'Batik Art, Oey Soe Tjoen', 2, '0825785268', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Art+Tradisional+%2F+oey+soe+tjoen/@-6.9697899,109.643902,17z/data=!3m1!4b1!4m5!3m4!1s0x2e70219de1e0e4e7:0x437e032b4ea5eec1!8m2!3d-6.9697952!4d109.6460907\">Jl. Raya Kedungwuni No.208, Kedungwuni, Kedungwuni Tim., Kec. Kedungwuni, Pekalongan, Jawa Tengah 51173'),
(10, 'Pasar Grosir Setono', 2, '(0285) 421321', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Pasar+Grosir+Setono+Pekalongan/@-6.9026323,109.6878229,17z/data=!3m1!4b1!4m5!3m4!1s0x2e702440945e2c41:0x40d719cb31820374!8m2!3d-6.9026376!4d109.6900116\">Jl. Dr. Setiabudi No.1 - 2, Karangmalang, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51122'),
(11, 'Batik unggul jaya', 2, '081548958858', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Unggul+Jaya+Pekalongan/@-6.9025405,109.6549919,13z/data=!4m9!1m2!2m1!1sBatik+unggul+jaya!3m5!1s0x2e7025d74f04c325:0xdd050f2f0d71a404!8m2!3d-6.8864652!4d109.6675362!15sChFCYXRpayB1bmdndWwgamF5YVomChFiYXRpayB1bmdndWwgamF5YSIRYmF0aWsgdW5nZ3VsIGpheWGSAQtvdXRsZXRfbWFsbJoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOek1rMUhSM0pSUlJBQg\">Jl. Angkatan 45 No.39, Belakang kantor, pajak Pekalongan, Kota Pekalongan, Jawa Tengah 51145'),
(12, 'Qonita Batik', 2, '(0285) 423939', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Qonita+Batik+Boutique/@-6.9023675,109.6549919,13z/data=!4m9!1m2!2m1!1sQonita+Batik!3m5!1s0x2e702686d5630dd1:0x7a6e8e1f0426b97!8m2!3d-6.8890775!4d109.6609405!15sCgxRb25pdGEgQmF0aWsiA4gBAVocCgxxb25pdGEgYmF0aWsiDHFvbml0YSBiYXRpa5IBFGJhdGlrX2Nsb3RoaW5nX3N0b3JlmgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU5CTmpRdE0zZFJSUkFC\">Jl. Gajah Mada Bar. No.49, Kramatsari, Kec. Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118'),
(13, 'Batik Putra tunggal', 2, '085601069371', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/BATIK+PUTRA+TUNGGAL/@-6.9369596,109.6833502,13.17z/data=!4m9!1m2!2m1!1sBatik+Putra+tunggal!3m5!1s0x2e702440eb7deed7:0xd76feb0f345bb70c!8m2!3d-6.9022405!4d109.6893214!15sChNCYXRpayBQdXRyYSB0dW5nZ2FsWioKE2JhdGlrIHB1dHJhIHR1bmdnYWwiE2JhdGlrIHB1dHJhIHR1bmdnYWySAQ5jbG90aGluZ19zdG9yZQ\">Karangmalang, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51122'),
(14, 'Batik Huza', 2, '(0285) 427931', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Huza/@-6.8831156,109.6769748,17z/data=!4m9!1m2!2m1!1sBatik+Huza!3m5!1s0x2e7025cce97dfdd7:0x5edf2345716c5f2d!8m2!3d-6.8836616!4d109.6796405!15sCgpCYXRpayBIdXphWhgKCmJhdGlrIGh1emEiCmJhdGlrIGh1emGSAQ5jbG90aGluZ19zdG9yZQ\">Jl. Kenanga No.7, Klego, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51124'),
(15, 'Batik Tobal', 2, '081903622117', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Tobal/@-6.8826727,109.6794901,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7024335ef7cf3d:0x389929a07aa2a172!8m2!3d-6.882741!4d109.6816684\">Jl. Teratai No.24, Klego, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51123'),
(16, 'Batik Trusmi', 3, '08112399146', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/BT+Batik+Trusmi/@-6.6999939,108.506913,14z/data=!4m9!1m2!2m1!1sBatik+Trusmi!3m5!1s0x2e6ee190415be02b:0x5ba69b4e717196ca!8m2!3d-6.7011831!4d108.5076399!15sCgxCYXRpayBUcnVzbWlaHAoMYmF0aWsgdHJ1c21pIgxiYXRpayB0cnVzbWmSAQ9zaG9wcGluZ19jZW50ZXI\">Jl. Trusmi No.148, Weru Lor, Plered, Cirebon, Jawa Barat 45154'),
(17, 'Toko Pangestu', 3, '087729020171', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Toko+Oleh-oleh+Pangestu+Cirebon/@-6.7153027,108.5422876,14z/data=!4m9!1m2!2m1!1sToko+Pangestu!3m5!1s0x2e6ee265092b8cc5:0x30bca46234cc6410!8m2!3d-6.715307!4d108.5598015!15sCg1Ub2tvIFBhbmdlc3R1Wh4KDXRva28gcGFuZ2VzdHUiDXRva28gcGFuZ2VzdHWSAQlnaWZ0X3Nob3CaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVTjVOWEJsVkVSbkVBRQ\">Jl. Sukalila Selatan No.49, Pekalangan, Kec. Pekalipan, Kota Cirebon, Jawa Barat 45118'),
(18, 'Toko Pesona batik', 3, '(0231) 323831', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Pesona+Batik+Cirebon/@-6.7050121,108.4900093,14z/data=!4m9!1m2!2m1!1sToko+Pesona+batik!3m5!1s0x2e6ee193c94bdf2d:0xf2bba82eda6a484e!8m2!3d-6.7050171!4d108.5075486!15sChFUb2tvIFBlc29uYSBiYXRpa1oZCgR0b2tvIhF0b2tvIHBlc29uYSBiYXRpa5IBFGJhdGlrX2Nsb3RoaW5nX3N0b3Jl\">Jl. Syekh Datul Kahfi No.1, Weru Lor, Plered, Cirebon, Jawa Barat 45154'),
(19, 'Galeri batik ninik ichsan', 3, '(0231) 322300', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Ninik+Ichsan/@-6.6974887,108.5067283,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6ee19019de99a1:0x447e6956b75c9582!8m2!3d-6.697494!4d108.508917\">Jl. Syekh Datul Kahfi No.331, RW.03, Wotgali, Plered, Cirebon, Jawa Barat 45154'),
(20, 'Batik Salma', 3, '(0231) 321037 081286637009', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Salma/@-6.6974619,108.5001622,15z/data=!4m9!1m2!2m1!1sBatik+Salma!3m5!1s0x2e6ee26324b9336b:0xdcfeab6bb6af3215!8m2!3d-6.7003653!4d108.5089154!15sCgtCYXRpayBTYWxtYVoaCgtiYXRpayBzYWxtYSILYmF0aWsgc2FsbWGSAQhib3V0aXF1ZQ\">Jl. Trusmi Kulon No.87, Trusmi Kulon, Plered, Cirebon, Jawa Barat 45154'),
(21, 'Rajjas Batik Juanda', 3, '(0231) 8300244', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/RAJJAS+BATIK+Juanda/@-6.7077932,108.5155808,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6ee18b48aaea7f:0xfba0dba3c42ca942!8m2!3d-6.7077985!4d108.5177695\">Jl. Ir. H. Juanda No.31, Battembat, Kec. Tengah Tani, Cirebon, Jawa Barat 45153'),
(22, 'Mall Batik Salma', 3, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Mall+Batik+Salma+Cirebon/@-6.7082973,108.5139967,16z/data=!4m9!1m2!2m1!1sMall+Batik+Salma!3m5!1s0x2e6ee35a73753f17:0xa576479c112b713f!8m2!3d-6.7082425!4d108.518384!15sChBNYWxsIEJhdGlrIFNhbG1hWiQKEG1hbGwgYmF0aWsgc2FsbWEiEG1hbGwgYmF0aWsgc2FsbWGSAQ5jbG90aGluZ19zdG9yZQ\">Jl. Ir. H. Juanda No.15, Battembat, Kec. Tengah Tani, Cirebon, Jawa Barat 45154'),
(23, 'IM Batik Cirebon', 3, '08997438142', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/IM+batik+cirebon/@-6.6965315,108.5006079,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6ee1219b5f4bbd:0xecc1c2ee7d9308ea!8m2!3d-6.6965368!4d108.5027966\">Jl Kinatagama RT/RW 13/03, Kaliwulu, Plered, Cirebon, Jawa Barat 45154'),
(24, 'Pasar pagi', 3, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Pasar+Pagi+Kota+Cirebon/@-6.6964396,108.4677769,13z/data=!4m9!1m2!2m1!1sPasar+pagi!3m5!1s0x2e6ee31ace887dff:0xea22fc6c7f887b6e!8m2!3d-6.7130196!4d108.561162!15sCgpQYXNhciBwYWdpWhgKCnBhc2FyIHBhZ2kiCnBhc2FyIHBhZ2mSAQ5wcm9kdWNlX21hcmtldA\">Jl. Siliwangi (Jl. Sukalila blok Mambo, Kejaksan, Kec. Kejaksan, Kota Cirebon, Jawa Barat 45123'),
(25, 'Pasar Kanoman', 3, '-', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/PASAR+KANOMAN/@-6.7265125,108.4854035,13z/data=!4m9!1m2!2m1!1sPasar+Kanoman!3m5!1s0x2e6ee3a09e689a13:0x35156abbce0602d6!8m2!3d-6.7208216!4d108.5677723!15sCg1QYXNhciBLYW5vbWFukgEPc2hvcHBpbmdfY2VudGVy\">Jl. Ps. Kanoman No.4, bagian Timur, Kec. Pekalipan, Kota Cirebon, Jawa Barat 45117'),
(26, 'Batik Winotosastro', 4, '(0274) 371226', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Winotosastro/@-7.819042,110.3652613,17z/data=!4m5!3m4!1s0x2e7a57bd3d22a9d3:0x9d53ab89ce3a51ee!8m2!3d-7.819042!4d110.36745\">Jl. Tirtodipuran No.54, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143'),
(27, 'Batik Yudhistira', 4, '(0274) 379436', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Grosir+Batik+Yudhistira/@-7.8130859,110.3675233,15z/data=!4m9!1m2!2m1!1sBatik+Yudhistira!3m5!1s0x2e7a579fadf5e2e7:0xd6238cbe746e1305!8m2!3d-7.8130852!4d110.3763467!15sChBCYXRpayBZdWRoaXN0aXJhWiQKEGJhdGlrIHl1ZGhpc3RpcmEiEGJhdGlrIHl1ZGhpc3RpcmGSARRiYXRpa19jbG90aGluZ19zdG9yZQ\">Jl. Taman Siswa No.150 A, Wirogunan, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55151'),
(28, 'Hamzah Batik', 4, '(0274) 588524', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Hamzah+Batik+Malioboro+Yogyakarta/@-7.779782,110.3053462,12z/data=!4m9!1m2!2m1!1sHamzah+Batik!3m5!1s0x2e7a5788f240c627:0xfaca4923aefb4e7b!8m2!3d-7.7991314!4d110.3648589!15sCgxIYW16YWggQmF0aWtaHAoMaGFtemFoIGJhdGlrIgxoYW16YWggYmF0aWuSARRiYXRpa19jbG90aGluZ19zdG9yZZoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VSWk5rbHhZbXhSUlJBQg\">Jl. Margo Mulyo No.9, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122'),
(29, 'Rianty Batik Store', 4, '089633630671', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Rianty+Batik/@-7.7937937,110.3633231,17z/data=!4m5!3m4!1s0x2e7a5827c5f4910b:0x5418941b5976d91d!8m2!3d-7.7937998!4d110.3655803\">Jl. Malioboro No.79, Sosromenduran, Gedong Tengen, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55271'),
(30, 'Paradise Batik', 4, '(0274) 384593', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Paradise+Batik+(Batik+Jogja)/@-7.8274147,110.1208327,10z/data=!4m9!1m2!2m1!1sParadise+Batik!3m5!1s0x2e7a57227e76501d:0x3bc0f6b3d4ad6f27!8m2!3d-7.8274147!4d110.4009841!15sCg5QYXJhZGlzZSBCYXRpa1ogCg5wYXJhZGlzZSBiYXRpayIOcGFyYWRpc2UgYmF0aWuSAQ5jbG90aGluZ19zdG9yZQ\">Jl. Karanglo No.7, Purbayan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55173'),
(31, 'Toko Batik Wisnu', 4, '(0274) 379625', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Toko+Batik+Wisnu/@-7.8035408,110.3643135,17z/data=!4m5!3m4!1s0x2e7a5785992a1441:0x601fc1a572ff7d09!8m2!3d-7.8035126!4d110.3665098\">Jl. Ibu Ruswo No.14, Prawirodirjan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55131'),
(32, 'Batik Rumah Suryowijayan', 4, '(0274) 412217', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Rumah+Suryowijayan/@-7.8110305,110.3522588,17z/data=!4m5!3m4!1s0x2e7a579300000001:0x61174e26ae274b56!8m2!3d-7.8110687!4d110.354473\">MJ 1, Jl. Suryowijayan No.427, Gedongkiwo, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55142'),
(33, 'Batik Seno', 4, '(0274) 374654', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Seno/@-7.8191505,110.3630417,17z/data=!4m5!3m4!1s0x2e7a57bd205a8fe5:0x31bedc009abb0571!8m2!3d-7.8191461!4d110.3652066\">Jl. Mantrijeron, Mantrijeron, Kec. Mantrijeron, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55143'),
(34, 'Batik giriloyo', 4, '081912889075', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Batik+Giriloyo/@-7.9161808,110.3971241,17z/data=!4m5!3m4!1s0x2e7a5458d3e81aab:0xf8507c195e7ce0bd!8m2!3d-7.9161808!4d110.3993181\">Gazebo Wisata Giriloyo Jalan Imogiri Timur No.Km. 14, Karang Kulon, Wukirsari, Kec. Imogiri, Bantul, Daerah Istimewa Yogyakarta 55782'),
(35, 'Desa wisata krebet', 4, '085643764313', '<a style=\"color: #a87a41;\" href=\"https://www.google.com/maps/place/Desa+Wisata+Krebet+Pajangan/@-7.8577301,110.2947987,16z/data=!4m9!1m2!2m1!1sDesa+wisata+krebet!3m5!1s0x2e7af8ecffffffff:0xd0279595d07b3187!8m2!3d-7.8588863!4d110.2997889!15sChJEZXNhIHdpc2F0YSBrcmViZXSSARdsb2NhbF9nb3Zlcm5tZW50X29mZmljZQ\">Desa Wisata Krebet RT. 04, Sendangsari, Pajangan, Krebet, Sendangsari, Kec. Pajangan, Bantul, Daerah Istimewa Yogyakarta 55751');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indeks untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`),
  ADD KEY `id_kota` (`id_kota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111112;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111112;

--
-- AUTO_INCREMENT untuk tabel `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1111112;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_id_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_id_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Ketidakleluasaan untuk tabel `penjual`
--
ALTER TABLE `penjual`
  ADD CONSTRAINT `penjual_id_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
