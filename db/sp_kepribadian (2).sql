-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2023 at 06:05 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_kepribadian`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aturan`
--

CREATE TABLE `tbl_aturan` (
  `id_aturan` int(11) NOT NULL,
  `id_kepribadian` varchar(255) NOT NULL,
  `id_ciri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aturan`
--

INSERT INTO `tbl_aturan` (`id_aturan`, `id_kepribadian`, `id_ciri`) VALUES
(1, 'P001', 'G001'),
(2, 'P001', 'G004'),
(3, 'P001', 'G005'),
(4, 'P001', 'G006'),
(6, 'P004', 'G005'),
(8, 'P002', 'G007'),
(10, 'P003', 'G015'),
(11, 'P003', 'G006'),
(12, 'P003', 'G005'),
(13, 'P004', 'G001'),
(15, 'P004', 'G003'),
(16, 'P004', 'G011'),
(17, 'P005', 'G012'),
(18, 'P005', 'G005'),
(20, 'P005', 'G004'),
(22, 'P002', 'G008'),
(23, 'P002', 'G009'),
(24, 'P002', 'G010'),
(25, 'P002', 'G014'),
(26, 'P003', 'G001'),
(27, 'P003', 'G004'),
(28, 'P004', 'G013'),
(30, 'P005', 'G002'),
(31, 'P005', 'G016'),
(32, 'K1', 'C1'),
(33, 'K1', 'C2'),
(34, 'K1', 'C3'),
(35, 'K1', 'C4'),
(36, 'K1', 'C5'),
(37, 'K1', 'C6'),
(38, 'K1', 'C7'),
(39, 'K1', 'C8'),
(40, 'K1', 'C9'),
(41, 'K1', 'C10'),
(42, 'K1', 'C11'),
(43, 'K1', 'C12'),
(44, 'K1', 'C13'),
(45, 'K1', 'C13'),
(46, 'K1', 'C14'),
(47, 'K1', 'C15'),
(48, 'k2', 'C16'),
(49, 'k2', 'C17'),
(50, 'k2', 'C17'),
(51, 'k2', 'C18'),
(52, 'k2', 'C19'),
(53, 'k2', 'C20'),
(54, 'k2', 'C21'),
(55, 'k2', 'C22'),
(56, 'k2', 'C23'),
(57, 'k2', 'C24'),
(58, 'k2', 'C25'),
(59, 'k2', 'C26'),
(60, 'k2', 'C27 '),
(61, 'k2', 'C28'),
(62, 'k2', 'C29'),
(63, 'k2', 'C30'),
(64, 'K1', 'C1'),
(65, 'K1', 'C2'),
(66, 'K1', 'C3'),
(67, 'K1', 'C4'),
(68, 'K1', 'C5'),
(69, 'K1', 'C6'),
(70, 'K1', 'C7'),
(71, 'K1', 'C8'),
(72, 'K1', 'C9'),
(73, 'K1', 'C10'),
(74, 'K2', 'C11'),
(75, 'K2', 'C12'),
(76, 'K2', 'C12'),
(77, 'K2', 'C13'),
(78, 'K2', 'C14'),
(79, 'K2', 'C15'),
(80, 'K2', 'C16'),
(81, 'K2', 'C17'),
(82, 'K2', 'C18'),
(83, 'K2', 'C19'),
(84, 'K2', 'C20'),
(85, 'K4', 'C31'),
(86, 'K4', 'C32'),
(87, 'K4', 'C33'),
(88, 'K4', 'C34'),
(89, 'K4', 'C35'),
(90, 'K4', 'C36'),
(91, 'K4', 'C37'),
(92, 'K4', 'C38'),
(93, 'K4', 'C39'),
(94, 'K4', 'C40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ciri`
--

CREATE TABLE `tbl_ciri` (
  `id_ciri` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ciri`
--

INSERT INTO `tbl_ciri` (`id_ciri`, `name`) VALUES
('C1', 'Ramah'),
('C10', 'Ekspresif'),
('C11', 'Tidak mau disalahkan'),
('C12', 'Disiplin'),
('C13', 'Pendendam'),
('C14', 'Teratur'),
('C15', 'Lamban dalam menerima hal baru'),
('C16', 'Perencana'),
('C17', 'Tertib'),
('C18', 'Kreatif'),
('C19', 'Perfeksionis'),
('C2', 'Spontan'),
('C20', 'Mudah tersinggung'),
('C21', 'Suka membantu'),
('C22', 'Sabar'),
('C23', 'Menghindari konflik'),
('C24', 'Tidak suka menonjolkan diri'),
('C25', 'Tenang'),
('C26', 'Pendiam'),
('C27 ', 'Toleran'),
('C28', 'Ragu-ragu'),
('C29', 'Pemalu'),
('C3', 'Emosinya labil'),
('C30', 'Tidak tegas'),
('C31', 'Penuh semangat'),
('C32', 'Mudah marah'),
('C33', 'Suka menonjolkan diri'),
('C34', 'Tidak sabar'),
('C35', 'Keras kepala'),
('C36', 'Tidak mau kalah'),
('C37', 'Gigih'),
('C38', 'Kurang simpati'),
('C39', 'Sulit mengakui kesalahan'),
('C4', 'Humoris'),
('C40', 'Egois'),
('C5', 'Riang'),
('C50', 'Galau'),
('C6', 'Kurang disiplin'),
('C7', 'Banyak bicara'),
('C8', 'Tidak konsisten'),
('C9', 'Responsif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepribadian`
--

CREATE TABLE `tbl_kepribadian` (
  `id_kepribadian` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kepribadian`
--

INSERT INTO `tbl_kepribadian` (`id_kepribadian`, `name`, `solusi`) VALUES
('K1', 'Sanguinis', 'Saran profesi untuk kepribadian Sanguinis adalah Penjualan atau Marketing, Public Relation, Pemasaran, Tour Guide, Instruktur Olahraga, Influencer, Aktor, Guru dan Selebgram.'),
('K2', 'Melankolis', 'Profesi yang cocok untuk kepribadian ini adalah Data Analist, Programmer, Penulis, Desainer dan Dokter Hewan.'),
('K4', 'Koleris', 'Saran profesi untuk kepribadian Koleris adalah Programmer, Polisi, Tentara, Pengusaha dan Atlet.'),
('K5', 'Extrovert', 'Profesi penulis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kode`
--

CREATE TABLE `tbl_kode` (
  `id_riwayat` int(11) NOT NULL,
  `kode_laporan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kode`
--

INSERT INTO `tbl_kode` (`id_riwayat`, `kode_laporan`) VALUES
(2, 'bjnjandkja'),
(3, 'kandklakld2'),
(23, '104afd0b3ff4fdc07fa8c63faeae5807'),
(24, 'bec2d76f121dbc307f50e2cd7fcc1980'),
(25, 'a15150210107c6abf42f56049e74db92'),
(25, '3ca6d11568e0c337984ea36e09204902'),
(26, '1e7ae2dae2e6bdd23c6886b1a5f6a1ec'),
(27, '51ce74621c1d5db3af067cb4b751e7d7'),
(30, 'd0497fd6c3147130efad33b4549354d4'),
(31, '223f1cbc6242a0da6894bee0444841b9'),
(32, '6d2dce12960a9d59f54e12841e966cec'),
(33, '3fdde9e525ecbb416da696794a952071'),
(34, 'e3d19c74c762c014b38d32883b4f24c9'),
(35, '6737b2da992ad6be9f1fd7c418823c92'),
(36, '3a686cb83cfc381f3e8283d11314f8bf'),
(37, 'c91838be754681a4957075faed24f5ca'),
(38, 'a8a317d77e5299646f929346e0961082'),
(39, '77fb128bcf9f2dff21c9b5df23b11f84'),
(39, '331f139ba3994b027faf8ef51364ee26'),
(40, '3ab5ddac2951475854a0b0dd30ad11fe'),
(40, 'f51098d78fd665cad1f98680bf0bd114'),
(41, '3119f56b47a3c21a783ae7396416a4dd'),
(42, '7e9007243733249cca2b782ffb4f79d3'),
(43, 'a57defce9283b04c4c9390f67bf1cc3c'),
(44, 'bbaabb04c7230a17f46d6078a25229df'),
(45, '2d42e08efb3a422a836b27dd0c53b8fa'),
(45, 'a9591989fe854f40db7a625a30b1e08f'),
(46, '3f678329470cabb0eca6118332e98148'),
(46, 'f7cd29bcef696b2465a7c494bed6bd16'),
(47, 'df7d8449ec663e82ef21343b28ed68d5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_penyakit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id_riwayat`, `id_user`, `id_penyakit`, `created_at`) VALUES
(1, '1', 'P001', '2022-08-06 03:25:21'),
(2, '16', 'P005', '2022-08-06 03:25:48'),
(3, '16', 'P004', '2022-08-06 03:26:24'),
(4, '8', 'P005', '2022-08-06 09:14:38'),
(5, '8', 'P005', '2022-08-07 02:56:43'),
(6, '8', 'P005', '2022-08-07 12:33:28'),
(7, '8', 'P004', '2022-08-08 00:05:20'),
(8, '8', 'P005', '2022-08-08 00:05:44'),
(9, '8', 'P004', '2022-08-08 01:14:00'),
(10, '8', 'P004', '2022-08-08 01:22:00'),
(11, '8', 'P004', '2022-08-08 01:30:12'),
(12, '8', 'P004', '2022-08-08 01:32:26'),
(13, '8', 'P004', '2022-08-08 01:32:47'),
(14, '8', 'P004', '2022-08-08 01:33:18'),
(15, '8', 'P004', '2022-08-08 01:35:02'),
(16, '8', 'P004', '2022-08-08 01:35:32'),
(17, '8', 'P004', '2022-08-08 01:54:03'),
(18, '8', 'P004', '2022-08-08 01:59:18'),
(19, '8', 'P004', '2022-08-08 02:04:55'),
(20, '8', 'P004', '2022-08-08 03:47:02'),
(21, '8', 'P004', '2022-08-08 07:51:01'),
(22, '8', 'P004', '2022-08-08 07:51:25'),
(23, '8', 'P004', '2022-08-08 07:53:56'),
(24, '8', 'P004', '2022-08-08 07:55:43'),
(25, '8', 'P005', '2022-08-08 07:57:24'),
(26, '8', 'P005', '2022-08-08 07:57:58'),
(27, '8', 'P004', '2022-08-08 07:59:14'),
(28, '8', 'P004', '2022-08-08 14:45:34'),
(29, '8', 'P004', '2022-08-09 01:45:56'),
(30, '8', 'P004', '2022-08-10 01:11:01'),
(31, '8', 'P004', '2022-08-10 01:11:29'),
(32, '8', 'P005', '2022-08-13 09:37:34'),
(33, '8', 'P004', '2022-08-15 00:22:36'),
(34, '8', 'P005', '2022-08-15 00:27:01'),
(35, '8', 'P003', '2022-08-15 01:12:38'),
(36, '8', 'P005', '2022-08-17 01:26:02'),
(37, '8', 'P004', '2022-08-17 04:39:09'),
(38, '8', 'P004', '2022-08-17 09:46:08'),
(39, '25', 'P005', '2022-08-19 03:38:35'),
(40, '25', 'P003', '2022-08-24 06:20:29'),
(41, '25', 'P004', '2022-08-24 08:37:14'),
(42, '25', 'P001', '2022-08-24 09:03:25'),
(43, '16', 'P001', '2022-08-25 06:50:00'),
(44, '16', 'P004', '2022-08-25 07:09:17'),
(45, '28', 'K2', '2023-06-07 01:59:30'),
(46, '30', 'K1', '2023-07-08 22:53:22'),
(47, '30', 'K1', '2023-07-08 23:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE `test_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kesukaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`id`, `nama`, `kesukaan`, `alamat`) VALUES
(1, 'parhan', 'coding', 'jl.munggur'),
(2, 'koralov', 'climbing', 'st.john'),
(3, 'moveto', 'throwing', 'jl.fuu'),
(4, 'jump', 'mangan', 'st.mangrove');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(1, 'hahan', 'hahaneztd@gmail.com', '12345678', 1, '', '2022-03-02'),
(2, 'bow', 'bow@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, '', NULL),
(7, 'hasna', 'hasna.danisa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(8, 'farhan', 'farhan.fcbar@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'laki-laki', '2000-03-23'),
(9, 'fly high', 'sayapterbang6@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(10, 'sayap', 'sayapterbang6@gmail.commm', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(11, 'sayapterbang6@gmail.commmm', 'sayapterbang6@gmail.co.id', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(12, 'vharchman', 'hahan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(13, 'vharchman', 'hahannn@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, '', NULL),
(14, 'vharchman', 'hahannn@gmail.comm', '25f9e794323b453885f5181f1b624d0b', 2, '', NULL),
(15, 'farhan', 'farhan@sevenpion.co.id', 'e807f1fcf82d132f9bb018ca6738a19f', 2, 'laki-laki', '2000-03-23'),
(16, 'danisa', 'danisa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'perempuan', '2001-08-07'),
(17, 'hann', 'farhan@han.commmm', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2022-08-05'),
(18, 'farhan.fcbar@gmail.com', 'farhan.fcbar@gmail.commm', '25d55ad283aa400af464c76d713c07ad', 2, 'none', '2022-08-03'),
(19, 'farhan.fcbar@gmail.com', 'danisa@gmail.commmm', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2022-08-19'),
(20, 'Muhammad Farhan A', 'farhan.hahan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-23'),
(21, 'suryanti', 'suryanti@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Perempuan', '1987-06-17'),
(22, 'sartono', 'sartono@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '1977-11-17'),
(24, 'parhan', 'parhan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-23'),
(25, 'farhan', 'farhan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 2, 'Lak-laki', '2000-03-19'),
(26, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'Perempuan', '2023-01-24'),
(27, 'ali', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de', 2, 'Lak-laki', '2023-06-02'),
(28, 'Austin', 'Austin@gmail.com', '229979fce5174c17d4645bf8752dae1e', 2, 'Lak-laki', '1997-05-05'),
(29, 'ema', 'ema@gmailcom', '93bdb73b49e88b5ce23da0509da1b8ac', 2, 'Perempuan', '2023-05-29'),
(30, 'ema', 'ema@gmail.com', '93bdb73b49e88b5ce23da0509da1b8ac', 2, 'Perempuan', '2023-07-20'),
(33, 'HOLIP', 'holip@gmail.com', 'c842d4f7399a03bd2c62dbf7c5bb8f40', 2, 'Perempuan', '2022-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aturan`
--
ALTER TABLE `tbl_aturan`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `tbl_ciri`
--
ALTER TABLE `tbl_ciri`
  ADD PRIMARY KEY (`id_ciri`);

--
-- Indexes for table `tbl_kepribadian`
--
ALTER TABLE `tbl_kepribadian`
  ADD PRIMARY KEY (`id_kepribadian`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aturan`
--
ALTER TABLE `tbl_aturan`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `test_table`
--
ALTER TABLE `test_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
