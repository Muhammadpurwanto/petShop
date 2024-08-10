-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2024 at 10:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `image`) VALUES
(7, 'admin@gmail.com', '$2y$10$7mRs6kPWuLBfjLW28H6nN.1TuwHBz2gV0uqtE2ZReTU22UuT68.fC', 'Admin', '1723279409_ac6a80dd6fd5ff6b727e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` int(9) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `kode_pos` int(9) NOT NULL,
  `id_users` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `detail`, `kode_pos`, `id_users`) VALUES
(4, 'Jawa Barat', 'Cikampek', 'Cikampek', 'Sukaseri', 'Rumah warna merah belakang masjid agung Rt.01 Rw.03 ', 111111, 13),
(6, 'Jawa Tengah', 'Kunduran', 'Kunduran', 'Kunduran', 'Rumah warna merah belakang masjid agung Rt.01 Rw.03 ', 900023, 25),
(7, 'jawa barat', 'bungursari', 'bungursari', 'cibening', 'cat putih', 41141, 26),
(8, 'Jawa Tengah', 'Grobogan', 'Ngaringan', 'Ngarap-arap', 'Sebelah barat balai dasa ngarap-arap', 93168, 27);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
('CAT', 'Cat'),
('FEE', 'Food'),
('OTH', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` varchar(255) NOT NULL,
  `quantity` int(9) NOT NULL,
  `id_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `quantity`, `id_product`) VALUES
('6640b685cfc2b', 1, 'C006'),
('6640b8c8c63a7', 3, 'C004'),
('6640b8c8c63a7', 1, 'C006'),
('6640c35236299', 1, 'H662'),
('6640c3ae70ff5', 1, 'H662'),
('6640c4646f5e1', 1, 'H662'),
('6640c63f18978', 1, 'H662'),
('6640deafa7436', 4, 'C004'),
('6640dedea4af6', 1, 'F006'),
('6640def6c5876', 1, 'O006'),
('664966bde953a', 1, 'H662'),
('664968e9f221c', 1, 'H662'),
('664968e9f221c', 3, 'C004'),
('664969220a97d', 1, 'C004'),
('664969802158d', 1, 'C006'),
('66496abb9dc26', 1, 'C004'),
('66496acce5f67', 1, 'C004'),
('66496c1ad40cb', 1, 'C004'),
('66496c5dbb8cb', 1, 'F006'),
('66496dd6f1764', 1, 'H662'),
('66496e3addc6c', 1, 'H662'),
('66497113e129c', 1, 'H662'),
('66497113e129c', 3, 'C004'),
('66497642981f1', 2, 'C004'),
('66497674661cc', 1, 'F006'),
('66497674661cc', 1, 'C004'),
('6652c56ed3e7e', 1, 'CHESTER'),
('6652c56ed3e7e', 1, 'CHOIZE'),
('6652c57e71642', 1, 'EXEL'),
('6677cc15d9493', 1, 'ANGGORA'),
('66b22d586b800', 1, 'ANGGORA'),
('66b4c980317b6', 1, 'ANGGORA'),
('66b4d9be4158b', 1, 'CHOIZE'),
('66b70469ce811', 1, 'BIG-CAT'),
('66b706df4bcaa', 1, 'CHESTER'),
('66b714218b56c', 1, 'CHESTER'),
('66b7156c4f7a5', 1, 'CHESTER');

-- --------------------------------------------------------

--
-- Table structure for table `jasa_kirim`
--

CREATE TABLE `jasa_kirim` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(9) DEFAULT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa_kirim`
--

INSERT INTO `jasa_kirim` (`id`, `name`, `price`, `category`) VALUES
('ASE', 'Antar Sendiri', 0, 'service'),
('JDR', 'Jemput Dirumah', 20000, 'service'),
('JNE', 'JNE', 20000, 'product'),
('JNT', 'JNT', 15000, 'product'),
('SIC', 'SiCepat', 10000, 'product');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `email`, `name`) VALUES
('K001', 'Sandi@gmail', 'Sandi'),
('K002', 'Arif@gmail', 'Arif'),
('K003', 'Dhika@gmail', 'Dhika'),
('K004', 'Santi@gmail', 'Santi');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(9) NOT NULL,
  `jumlah` int(9) DEFAULT NULL,
  `id_user` int(9) NOT NULL,
  `id_product` varchar(255) DEFAULT NULL,
  `total` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `jumlah`, `id_user`, `id_product`, `total`) VALUES
(22, 1, 25, 'ANGGORA', 1200000),
(23, 1, 25, 'BIRMAN', 850000),
(28, 1, 26, 'ANGGORA', 1200000),
(29, 1, 26, 'ANGGORA', 1200000),
(30, 1, 26, 'ANGGORA', 1200000),
(31, 1, 26, 'BIG-CAT', 50000),
(32, 1, 26, 'CHESTER', 22000),
(33, 1, 26, 'ANGGORA', 1200000),
(34, 1, 26, 'ANGGORA', 1200000),
(36, 1, 27, 'BIRMAN', 850000),
(37, 1, 25, 'ANGGORA', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `petpay`
--

CREATE TABLE `petpay` (
  `id` int(9) NOT NULL,
  `saldo` int(9) NOT NULL,
  `id_user` int(9) DEFAULT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petpay`
--

INSERT INTO `petpay` (`id`, `saldo`, `id_user`, `no_rek`) VALUES
(7, 4453000, 13, '1234565432'),
(10, 477000, 25, '123456765432'),
(12, 0, 26, '34328761563'),
(13, 97610000, 27, '63718308734');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(9) NOT NULL DEFAULT 0,
  `price` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categories` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `quantity`, `price`, `image`, `id_categories`, `created_at`, `updated_at`) VALUES
('ANGGORA', 'Kucing Anggora', 'Kucing Anggora memiliki ciri khas pada bentuk kepalanya yang segitiga berbulu lebat menyerupai singa dengan hidung yang lebih mancung dari kucing jenis lainnya. Leher dengan bulu yang panjang juga jadi ciri khas yang tidak bisa dialihkan dari Kucing Anggora. Itu lah yang membuat kucing jenis ini sangat menggemaskan.   Cara merawat kucing jenis ini tidak jauh berbeda dengan merawat Kucing Persia. Karena bulunya yang lebat dan panjang, sang pemilik harus rajin memperhatikan bulu dan menyisirnya. Kucing Anggora biasanya dijual dengan harga yang cukup mahal sekitar 1 juta sampai 2 juta.   ', 17, 1200000, '1716695667_9f28fa580f232a08bc40.jpg', 'CAT', '2024-05-26 03:54:27', '2024-08-08 06:34:56'),
('BIG-CAT', 'Big Cat', '  MANFAAT terbukti NYATA hanya dalam pemakaian 1 minggu:  1. GEMUKIN kucing dengan CEPAT dan MURAH  2. Meningkatkan NAFSU MAKAN dengan DRASTIS    Kandungan MURNI dari alam untuk kehidupan kucing agar 10x lebih SEHAT dan CANTIK:  - Amino Esensial Acid  - Protein Hewani    Takaran pakai sesuai usia kucing:  UMUR 2-3 BULAN:  SEHARI 2x = SETENGAH kapsul pagi dan SETENGAH kapsul malam    LEBIH DARI 4 BULAN:  SEHARI 2x = SATU kapsul pagi dan SATU kapsul malam', 99, 50000, '1716694369_3e19394372bb1e06d035.jpg', 'OTH', '2024-05-26 03:32:49', '2024-08-09 23:10:49'),
('BIRMAN', 'Cat Birman', 'kucing birman punya karakter yang ramah, penyayang, santai, lembut, dan selalu ingin tahu. Matanya yang berwarna biru muda juga tampak unik dan menarik.  Biasanya, kucing birman punya bobot mencapai 6 kg. Jadi, kamu harus mempersiapkan tempat tidur yang luas kalau mau memeliharanya.', 10, 850000, '1716694961_6e0fad3854874c104f32.jpg', 'CAT', '2024-05-26 03:42:41', '2024-05-26 03:42:41'),
('BOLT', 'Cat Bolt', 'Berat bersih makanan 800gr  dan  1kg  bentuk ikan rasa tuna bentuk donat rasa tuna bentuk bulat rasa salmon  Makanan Kucing Bolt  *kemasan di ganti berupa plastik bening jika plastik bolt habis*', 100, 21000, '1716692110_5dec638e77b3f257cf3b.jpg', 'FEE', '2024-05-26 02:55:10', '2024-05-26 02:55:10'),
('CHESTER', 'Cat Chester', 'Chester Tuna Cat Food merupakan makanan kucing yang baik untuk kesehatan bulu, mata, hingga gigi  Komposisi : Jagung, Tepung daging Unggas, Tepung Gandum, Protein Kedelai Isolate, Tepung Tuna, Lemak Unggas, Hati Ayam Digest, Vitamin dan Mineral (Vitamin A Palmitate, D3, E, L-ascorbyl-2-polyphosphate, Thiamin, Riboflavin, Pantothenic Acid, Pyridoxine, Biotin, Choline Chloride, Ferrous Sulfate, Zinc Sulfate, Copper Sulfate, Manganese Sulfate, Sodium Selenite, Calcium Iodate) Taurine, Antioksidan.  Nilai gizi : Protein max.28%, lemak max.9%, serat min.4%, abu min.10%, kalsium max.1%, fosfor max.0.8%, kadar air max.10%', 96, 22000, '1716692746_ec8adab0334566e35aa8.jpg', 'FEE', '2024-05-26 03:05:46', '2024-08-10 00:23:24'),
('CHOIZE', 'Cat Choize', 'Cat Choize fresh pack 800 gram varian rasa tuna dan salmon, bisa pilih saat masukkan keranjang  untuk kucing dewasa di atas 12 bulan  CAT CHOIZE mengandung nutrisi , vitamin dan mineral lengkap yang menjaga kesehatan kucing. Diet yang seimbang telah dikembangkan untuk memastikan pertumbuhan kucing yang optimal.  CAT CHOIZE cocok untuk semua ras dan tahap kehidupan kucing  KESEHATAN GIGI :  Tektur Kibble yang renyah membantu mengurangi penumpukan wabah dan memutihkan gigi  FUNGSI PENCERNAAN : serat yang dipilih membantu mendukung fungsi percernaan yang optimal  Kulit dan Bulu yang sehat :  asam lemak omega 6 dan seng menghasilkan kulit dan bulu yang sehat   agar lebih aman, bisa order tambahan bubble wrap yaa..  terima kasih semoga anabul sehat selalu 😊😊', 98, 20000, '1716691973_3158e4d3100b2e6e130f.png', 'FEE', '2024-05-26 02:52:53', '2024-08-08 07:44:14'),
('EXEL', 'Cat Exel', 'Deskripsi Makanan Kucing Excel CAT FOOD 1KG Non Bolt Maxi Nice Makanan kucing EXCEL \'\'\'Excellent Food\'\'\' 1 KG PRODUK TERBARU DARI PT. JAPFA COMFEED  Keunggulan: - Menyehatkan kulit dan memperindah bulu - Menyehatkan mata - Meningkatkan daya tahan tubuh - Memperkuat tulang dan gigi - Mengurangi bau  Nutrition Content: Crude Protein: min. 30% Crude Fat: min. 14% Crube Fiber: min. 3% Moisture: max. 7% AHA DHA: min. 2.5% - TIDAK MENGANDUNG BABI - Mengandung VITAMIN A  tersedia 2 jenis kibble - Donat - Ikan', 99, 25000, '1716693177_1740655eb1329919009c.jpg', 'FEE', '2024-05-26 03:12:57', '2024-05-25 22:15:42'),
('KAMPUNG', ' kucing Domestik', 'Kucing domestik mungkin menjadi jenis kucing yang paling banyak ditemui. Jenis kucing domestik lebih populer dikenal dengan nama kucing kampung. Kucing kampung juga jenis kucing yang mudah untuk dipelihara. Kucing kampung juga tidak memerlukan  perawatan khusus layaknya kucing ras lain yang mempunyai karakteristik khas. Jadi kamu tidak repot-repot mempersiapkan banyak hal untuk jenis kucing ini.', 50, 150000, '1716695597_b8ca4134b9ed1210072d.jpg', 'CAT', '2024-05-26 03:53:17', '2024-05-26 03:53:17'),
('KITTY', 'Cat Kitty', 'Kitty Premium Cat Food Fress Salmon & Tuna 400Gr  Kenapa Kitty? Karena setiap kaleng Kitty mengandung campuran rasa yang menggiurkan dan lezat untuk menjadikan pengalaman makan mereka (kucing) menyenangkan dengan komposisi  -	100% nutrisi lengkap & seimbang untuk kucing dewasa -	100% organic tanpa bahan pengawet & no pork -	Protein kualitas tinggi untuk mempertahankan otot tanpa lemak yang membuat kucing berenergi & bulu lebih sehat  -	Mengandung OMEGA 3 yang bagus untuk perkembangan kucing  -	Mengandung Vit A,C,D,E untuk memenuhi kebutuhan kucing  Kelebihan produk Kitty  -	Menggunakan teknologi sterilisasi modern -	Penyajian mudah dan cepat   Simpan ditempat dingin dan kering. Setelah kemasan dibuka sebaiknya disimpan di lemari es.  wajib memberikan video unboxing jika ingin mengajukan pengembalian barang atau dana, jika tidak ada video unboxing tidak akan kami proses pengajuan   #KittyPetfood #Kitty #makanankucing', 100, 15000, '1716692292_9f5d98c06afc526c954a.jpg', 'FEE', '2024-05-26 02:58:12', '2024-05-26 02:58:12'),
('LEZATO', 'Cat Lezato', 'Makanan kucing produk terAnyar dengan rasa Tuna, campuran 2 bentuk kibble dengan tujuan memberikan sensasi yang berbeda ketika dikonsumsi kucing kesayangan anda,diperkaya dengan vitamin dan mineral dengan komposisi yang tepat.   Dry cat food. For adult cat. LEZATO Yummy Cat Food adalah makanan yg seimbang utk dinikmati kucing anda. Dengan bahan2 berkualitas tinggi, LEZATO memastikan kucing anda akan menikmati setiap saat waktu makannya. Selain itu, LEZATO berperan dalam kesehatan sistem pencernaan dan fungsi sistem kekebalan tubuh kucing anda. LEZATO cocok utk semua jenis kucing.  Manfaat untuk kucing anda ;  1. Kalsium membantu kucing utk memiliki tulang dan gigi yg kuat 2. Tekstur Kibble yg akan membantu gusi dan gigi dalam mencegah resiko pembentukan plak dan karang gigi 3. Taurine akan membantu penglihatan dan fungsi mata yg sehat 4. Asam lemak Omegga 6 dan Seng akan berperan pd kulit dan bulu kucing  Kandungan Nutrisi: -Crude Protein : 27% -Crude Fat : 9% -Crude Fiber : 4% -Moizture : 10%', 100, 23000, '1716692931_f68b19a7ae19780356a2.jpg', 'FEE', '2024-05-26 03:08:51', '2024-05-26 03:08:51'),
('MAINE', 'Maine Coon', 'karakter kucing ini mudah dilatih, bisa bersosialisasi, ramah, dan suka bermain.  Selain itu, kucing maine coonpunya ukuran tubuh cukup besar. Jadi, kamu harus memberikannya makanan basah dan kering yang mengandung protein tinggi biar kebutuhan nutrisinya terpenuhi, seperti berikut ini.', 10, 900000, '1716695123_b92793f4f4e1bb3b6f85.jpg', 'CAT', '2024-05-26 03:45:23', '2024-05-26 03:45:23'),
('MAXI', 'Cat Maxi', 'Makanan kucing kering murah MAXI Cat 1kg rasa Chicken Tuna MAXI Chicken & Tuna merupakan makanan kucing untuk semua usia (all life stages), baik untuk kucing dewasa (adult) maupun anak kucing (kitten). Mengandung ekstrak Yucca Schidigera yang berkhasiat mengurangi bau pesing / amoniak pada kotoran kucing. Terbuat dari daging pilihan, tinggi protein, merawat kesehatan gigi, dan mengandung asam lemak murni, membuat makanan meong ini diproduksi dan telah lulus uji tes di Australia  Mengandung nutrisi lengkap dan seimbang yang di dalamnya terdapat kandungan taurin dan asam amino yang memelihara kesehatan mata dan fungsi hati  L-Lysine yang bermanfaat menjaga kekebalan tubuh dan merangsang nafsu makan, serta Yucca Schidigera Extract untuk mengurangi bau pesing pada kotoran, tekstur makanan berbentuk bola-bola kecil yang lentur sehingga cocok untuk kucing dan kitten', 100, 28000, '1716692836_b8af0edc7648a6fb8063.png', 'FEE', '2024-05-26 03:07:16', '2024-05-26 03:07:16'),
('ME-O', 'Me-o', 'Meo adult Tuna 1kg  Terbuat dari bahan alami, segar dan berkualitas. Kandungan yang terdapat dalam pakan ini dapat membantu menjaga kesehatan mata, meningkatkan daya tahan tubuh dan imunitas tubuh kucing, serta memperkuat tulang dan gigi. Bentuk kibblenya kecil sehingga mudah untuk dicerna oleh kucing  ⭐Ukuran: Repack 1kg ⭐Aman untuk usia: Cocok untuk usia kucing dewasa  - Buka setiap hari (Minggu hanya aktif pengiriman sameday dan instant) - Last order jam 12 siang untuk ekspedisi, jam 2 siang untuk sameday,  jam 4 sore untuk Instant courier  - Untuk pengajuan barang tidak sesuai wajib untuk menyertakan video unboxing dengan kondisi belum dibuka dari awal.  Expired dipastikan panjang', 100, 36000, '1716692193_6abc1e68a34d7a495a6d.png', 'FEE', '2024-05-26 02:56:33', '2024-05-26 02:56:33'),
('NATIVE+', 'Native+', 'Vitamin Kucing Tinggi Protein untuk pelengkap nutrisi harian makanan kucing, hasil kerjasama Olive Care dengan Pembudidaya Lokal dalam menyediakan bahan-bahan utama berkualitas yang berasal dari Protein Ayam Kampung dan berbagai macam Sayuran dan Buah.  𝟑 𝐢𝐧 𝟏 𝐏𝐮𝐫𝐫𝐟𝐞𝐜𝐭 𝐒𝐨𝐥𝐮𝐭𝐢𝐨𝐧 🌱 Native+ mengadaptasi Formula dari Vitamin Olive Care untuk mendapatkan 3 manfaat utama dalam 1 produk: 1. Menambah Nafsu Makan & Berat Badan 2. Melebatkan Bulu & Mengurangi Bulu Rontok 3. Menjaga Daya Tahan Tubuh & Sistem Imun', 100, 26000, '1716694485_5afd0476d12aef32838e.jpg', 'OTH', '2024-05-26 03:34:45', '2024-05-26 03:34:45'),
('PERSIA', 'Persia', 'Kucing persia sangat terkenal di kalangan masyarakat Indonesia karena memiliki sifat yang menggemaskan. Biaya adopsi yang cukup terjangkau membuat kucing ras ini paling banyak digemari di kalangan pecinta kucing. Rambutnya yang panjang merupakan hasil mutasi alami yang membuat masyarakat kagum dan memeliharanya', 10, 650000, '1716695500_68f59aa6caf9c174f29c.jpg', 'CAT', '2024-05-26 03:51:40', '2024-05-26 03:51:40'),
('SALMON', 'Salmon Oil', 'PURE SALMON OIL FOR DOG AND CAT (minyak ikan salmon untuk anjing dan kucing)  Manfaat Minyak Ikan Salmon Bagi Anjing / Kucing :  1. Merawat Kesehatan Kulit dan Bulu 2. Mengurangi Kerontokan Bulu 3. Mendukung Kesehatan Jantung dan Tulang 4. Mengurangai Alergi 5. Meningkatkan Sistem Imun 6. Meningkatkan Daya Tahan Tubuh 7. Menambah Nafsu Makan  Saran pemakaian : Campurkan salmon oil ke makanan atau boleh diminumkan secara langsung ke Anjing atau kucing.  *Simpan di suhu ruang, Tidak dianjurkan untuk disimpan didalam kulkas!!  Packing dari kami sudah termasuk kardus dan bubble wrap', 100, 59000, '1716695862_91749599f6622d6999c0.jpg', 'OTH', '2024-05-26 03:57:42', '2024-05-26 03:57:42'),
('SIAM', 'Siam', 'Kucing siam adalah jenis kucing domestik yang berasal dari Thailand. Karakternya cukup unik nih karena mereka punya perpaduan bulu berwarna putih pucat dan kehitaman di telinga, wajah, kaki, dan ekor.  Jenis peliharaan satu ini cocok dengan kamu yang suka berinteraksi karena mereka penuh kasih sayang dan suka bersosialisasi.', 10, 400000, '1716695244_7b44398d7c31e0fde227.jpg', 'CAT', '2024-05-26 03:47:24', '2024-05-26 03:47:24'),
('VITA', 'Vita Plus', 'Kelebihan VITAPLUS : Mudah di berikan,inovasi rasa sehingga tidak sulit di berikan. Dalam bentuk cair atau liquid sehingga sangat cepat di serap tubuh. Reaksi cepat dan tidak ketergantungan. Produk alami dan sudah teruji dibanyak peternakan kecil hingga besar.  Cara penggunaan : Berikan 1X sehari untuk menjaga kesehatan. Berikan 2X sehari pada kucing yang sakit,lemas,kurang nafsu makan dll.  MENYEHATKAN DAN MENYEMBUHKAN.  Netto 30ml', 100, 18500, '1716694280_850781fe79c2ce2e4fc0.jpg', 'OTH', '2024-05-26 03:31:20', '2024-05-26 03:31:20'),
('WISKAS', 'Cat Wiskas', 'WHISKAS ADULT 1 KG ( MAKANAN KUCING DEWASA ) Untuk Kucing Usia > 1 th  WHISKAS makanan kucing yang sehat dan seimbang, secara spesifik di formulasikan untuk memenuhi kebutuhan nutrisi kucing pada setiap masa kehidupannya. Jika kucingmu memasuki usia 12 bulan.  Kucing dengan usia 1-6 tahun membutuhkan banyak latihan dan bermain serta makanan yang seimbang untuk menjaganya tetap aktif dan sehat. Kucing adalah karnivora, sedangkan manusia , omnivora, jadi kucing membutuhkan 2 kali lebih banyak protein daripada manusia. Mereka juga membutuhkan 41 kandungan nutrisi esensial untuk kesehatan yang optimum. WHISKAS mengerti akan kandungan nutrisi yang dibutuhkan oleh kucing dan setiap produk secara spesifik di formulasikan dengan kandungan nutrisi yang lengkap dan seimbang.  -Mengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah. -Mengandung Vit.A dan taurine untuk kesehatan matanya -Mengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia', 100, 52000, '1716693116_2e734ebdee4e1a27ed79.jpg', 'FEE', '2024-05-26 03:11:56', '2024-05-26 03:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(9) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `description`, `image`) VALUES
('S001', 'Cat Hotel', 50000, 'Di sini kami berkomitmen untuk memberikan rumah sementara yang aman, nyaman, dan penuh kasih sayang untuk kucing kesayangan Anda', '1716696126_e43feeee23788bc2040e.jpg'),
('S002', 'Grooming', 60000, 'Kami menyediakan layanan grooming kucing yang profesional dan membuat kucing Anda akan kembali pulang berseri-seri dan segar setelah mandi.', '1716696136_9c233d920e7c0c91a51b.jpg'),
('S003', 'Cat Care', 100000, 'Di sini, kami menyediakan berbagai layanan perawatan kucing yang mencakup pemeriksaan kesehatan, pemotongan kuku, perawatan gigi, dan banyak lagi.', '1716696148_eabd9bf653056753ee5d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `id_admin` int(9) DEFAULT NULL,
  `id_user` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(255) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_petPay` int(9) DEFAULT NULL,
  `id_jasa_kirim` varchar(255) DEFAULT NULL,
  `id_karyawan` varchar(255) DEFAULT NULL,
  `id_service` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_alamat` int(9) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_petPay`, `id_jasa_kirim`, `id_karyawan`, `id_service`, `created_at`, `id_alamat`, `tanggal`, `jam`) VALUES
('6640b685cfc2b', 13, 7, 'JNE', NULL, NULL, '2024-05-12 12:31:01', 4, NULL, NULL),
('6640b8c8c63a7', 13, 7, 'SIC', NULL, NULL, '2024-05-12 12:40:40', 4, NULL, NULL),
('6640c1b0b5884', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:18:40', 4, NULL, NULL),
('6640c2239a471', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:20:35', 4, NULL, NULL),
('6640c2a7df7ab', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:22:47', 4, NULL, NULL),
('6640c35236299', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:25:38', 4, NULL, NULL),
('6640c3ae70ff5', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:27:10', 4, NULL, NULL),
('6640c4646f5e1', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:30:12', 4, NULL, NULL),
('6640c63f18978', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:38:07', 4, NULL, NULL),
('6640c653b9574', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:38:27', 4, NULL, NULL),
('6640c87e8958d', 13, 7, 'JNE', NULL, NULL, '2024-05-12 13:47:42', 4, NULL, NULL),
('6640deafa7436', 13, 7, 'JNE', NULL, NULL, '2024-05-12 15:22:23', 4, NULL, NULL),
('6640dedea4af6', 13, 7, 'JNE', NULL, NULL, '2024-05-12 15:23:10', 4, NULL, NULL),
('6640def6c5876', 13, 7, 'JNE', NULL, NULL, '2024-05-12 15:23:34', 4, NULL, NULL),
('66496656b024f', 13, 7, 'JNT', NULL, NULL, '2024-05-19 02:39:18', 4, NULL, NULL),
('664966bde953a', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:41:01', 4, NULL, NULL),
('664968e9f221c', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:50:17', 4, NULL, NULL),
('664969220a97d', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:51:14', 4, NULL, NULL),
('664969802158d', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:52:48', 4, NULL, NULL),
('66496abb9dc26', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:58:03', 4, NULL, NULL),
('66496acce5f67', 13, 7, 'JNE', NULL, NULL, '2024-05-19 02:58:20', 4, NULL, NULL),
('66496c1ad40cb', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:03:54', 4, NULL, NULL),
('66496c5dbb8cb', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:05:01', 4, NULL, NULL),
('66496dd6f1764', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:11:18', 4, NULL, NULL),
('66496e3addc6c', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:12:58', 4, NULL, NULL),
('66497113e129c', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:25:07', 4, NULL, NULL),
('664971b86d44c', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:27:52', 4, NULL, NULL),
('66497642981f1', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:47:14', 4, NULL, NULL),
('66497674661cc', 13, 7, 'JNE', NULL, NULL, '2024-05-19 03:48:04', 4, NULL, NULL),
('6649b6bcb37a4', 13, 7, 'JDR', 'K002', 'S002', '2024-05-19 08:22:20', 4, 'Wednesday, 22-May-2024', '10.00-12.00'),
('6649ca51f1e75', 13, 7, 'ASE', 'K001', 'S002', '2024-05-19 09:45:53', 4, 'Sunday, 19-May-2024', '08.00-10.00'),
('6649cce6e8267', 13, 7, 'ASE', 'K001', 'S001', '2024-05-19 09:56:54', 4, 'Monday, 20-May-2024', '08.00-10.00'),
('6649cdaa71b2a', 13, 7, 'ASE', 'K002', 'S002', '2024-05-19 10:00:10', 4, 'Sunday, 19-May-2024', '08.00-10.00'),
('6649ed14195df', 13, 7, 'JDR', 'K002', 'S003', '2024-05-19 12:14:12', 4, 'Thursday, 23-May-2024', '08.00-10.00'),
('664a1c4583bde', 13, 7, 'JDR', 'K003', 'S002', '2024-05-19 15:35:33', 4, 'Wednesday, 22-May-2024', '12.00-14.00'),
('66529a0d75949', 25, 10, 'ASE', 'K001', 'S003', '2024-05-26 02:10:21', 6, 'Sunday, 26-May-2024', '08.00-10.00'),
('6652c56ed3e7e', 25, 10, 'JNE', NULL, NULL, '2024-05-26 05:15:26', 6, NULL, NULL),
('6652c57e71642', 25, 10, 'JNE', NULL, NULL, '2024-05-26 05:15:42', 6, NULL, NULL),
('6677cc15d9493', 25, 10, 'JNE', NULL, NULL, '2024-06-23 07:17:41', 6, NULL, NULL),
('66b22b9f17bbd', 27, 13, 'ASE', 'K001', 'S001', '2024-08-06 13:56:47', 8, 'Tuesday, 06-Aug-2024', '08.00-10.00'),
('66b22d586b800', 27, 13, 'JNE', NULL, NULL, '2024-08-06 14:04:08', 8, NULL, NULL),
('66b4c980317b6', 27, 13, 'JNE', NULL, NULL, '2024-08-08 13:34:56', 8, NULL, NULL),
('66b4d9be4158b', 25, 10, 'JNE', NULL, NULL, '2024-08-08 14:44:14', 6, NULL, NULL),
('66b70469ce811', 25, 10, 'JNE', NULL, NULL, '2024-08-10 06:10:49', 6, NULL, NULL),
('66b706df4bcaa', 25, 10, 'JNE', NULL, NULL, '2024-08-10 06:21:19', 6, NULL, NULL),
('66b714218b56c', 25, 10, 'JNE', NULL, NULL, '2024-08-10 07:17:53', 6, NULL, NULL),
('66b7156c4f7a5', 25, 10, 'JNE', NULL, NULL, '2024-08-10 07:23:24', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `image`) VALUES
(13, 'sandi@gmail.com', '$2y$10$.qWtRSg4N0dpKpicbh19gO1sbSLPd5v.0Q9z7fajUbWcqnL/bOmDm', 'sandi', '1715000494_63029e45a355320a3e9c.jpg'),
(25, 'pur@gmail.com', '$2y$10$UJ3YR3Y5NpNpGXl6TECMUOCcFb2QcjdNeM6NMT91b6gCddLmeOT/m', 'pur', '1716698092_a4e7962aa86ec6908805.jpg'),
(26, 'yoga@gmail.com', '$2y$10$EXC6kRycwvYHlS/rL/bd2O4siZQCZMk2xuleJ1mPRm5ch9rSSe0te', 'Yoga', 'defaultUser.jpg'),
(27, 'dimas@gmail.com', '$2y$10$2rBiFajUiZSeiFxLBq8OuesehWPvXAZOmhXfKLBCRfMYG0Ae6RJHS', 'Dimass', '1722781689_f64c141b0d2fe274b535.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alamat_users` (`id_users`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `fk_detail_transaksi_transaksi` (`id_transaksi`),
  ADD KEY `fk_detail_transaksi_products` (`id_product`);

--
-- Indexes for table `jasa_kirim`
--
ALTER TABLE `jasa_kirim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_keranjang_users` (`id_user`),
  ADD KEY `fk_keranjang_products` (`id_product`);

--
-- Indexes for table `petpay`
--
ALTER TABLE `petpay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_petPay_users` (`id_user`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_products_categories` (`id_categories`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sessions_users` (`id_user`),
  ADD KEY `fk_sessions_admin` (`id_admin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_users` (`id_user`),
  ADD KEY `fk_transaksi_petPay` (`id_petPay`),
  ADD KEY `fk_transaksi_jasa_kirim` (`id_jasa_kirim`),
  ADD KEY `fk_transaksi_karyawan` (`id_karyawan`),
  ADD KEY `fk_transaksi_service` (`id_service`),
  ADD KEY `fk_transaksi_alamat` (`id_alamat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `petpay`
--
ALTER TABLE `petpay`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_alamat_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail_transaksi_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_keranjang_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `petpay`
--
ALTER TABLE `petpay`
  ADD CONSTRAINT `fk_petPay_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_sessions_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fk_sessions_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_alamat` FOREIGN KEY (`id_alamat`) REFERENCES `alamat` (`id`),
  ADD CONSTRAINT `fk_transaksi_jasa_kirim` FOREIGN KEY (`id_jasa_kirim`) REFERENCES `jasa_kirim` (`id`),
  ADD CONSTRAINT `fk_transaksi_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`),
  ADD CONSTRAINT `fk_transaksi_petPay` FOREIGN KEY (`id_petPay`) REFERENCES `petpay` (`id`),
  ADD CONSTRAINT `fk_transaksi_service` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `fk_transaksi_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
