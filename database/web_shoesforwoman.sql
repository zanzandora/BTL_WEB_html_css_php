-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 03:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_shoesforwoman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(111) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `tenkhachhang`, `email`, `sodienthoai`, `diachi`, `matkhau`) VALUES
(10, 'Mai Minh Tú', 'tu@gmail.com', '0123456789', 'Hà Nội', 'tu123456'),
(11, 'Bùi Công Quang', 'quang@gmail.com', '0987654321', 'Hòa Bình', 'quang12345');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `ten`, `thutu`) VALUES
(20, 'Giày cao gót', 1),
(22, 'Giày thể thao', 3),
(23, 'Boots', 4),
(24, 'Sandal', 5),
(25, 'Dép', 6),
(26, 'Giày ballet', 6);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL,
  `mau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `madonhang`, `idsanpham`, `soluongsp`, `mau`) VALUES
(1, '574164', 10, 2, ''),
(2, '449161', 10, 3, ''),
(3, '727482', 17, 4, ''),
(4, '363157', 16, 2, ''),
(5, '363157', 23, 3, ''),
(6, '363157', 15, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `idkhachhang`, `madonhang`, `trangthai`) VALUES
(1, 11, '574164', 0),
(2, 10, '449161', 0),
(3, 10, '727482', 0),
(4, 10, '363157', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `sodienthoai`, `noidung`) VALUES
(1, 'Bùi Công Quang', 'quang@gmail.com', '0987654321', 'Sản phẩm quá tệ , tốt nhất nên dẹp hàng đi');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `masanpham` varchar(200) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `nhasanxuat` varchar(200) NOT NULL,
  `xuatsu` varchar(50) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `mau` varchar(100) NOT NULL,
  `khoiluong` varchar(100) NOT NULL,
  `kichco` varchar(100) NOT NULL,
  `chatlieu` varchar(100) NOT NULL,
  `degiay` varchar(100) NOT NULL,
  `cao` int(20) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `nhasanxuat`, `xuatsu`, `hinhanh`, `mau`, `khoiluong`, `kichco`, `chatlieu`, `degiay`, `cao`, `gia`, `trangthai`, `iddanhmuc`) VALUES
(10, '001', 'Dép nữ đi chơi', 'Charles & Keith', 'Việt Nam', 'product_1.jpg', 'đen', '400', '2,3,4', 'da tổng hợp', 'đế cao su', 8, '1200000', 1, 25),
(15, '002', 'Giày thể thao basic Kichi Shoes', 'Beyorn', 'Trung Quốc', 'giay-nu-prada-miland-trang-4_1.jpg', 'trắng', '550', '4,5', 'vải tổng hợp', 'đế cao su', 10, '2000000', 1, 22),
(16, '003', 'Giày Sandal cao gót', 'Huy Cao', 'Việt Nam', 'timthumb_sandal_1.jpg', 'đen, trắng', '550', '2,3,4,5', 'da bò tự nhiên', 'da tự nhiên, đế cứng', 7, '400000', 1, 24),
(17, '004', 'Dép sandals nữ đi học đế cao', 'Crosc', 'Trung Quốc', 'giay-dep-sandals-nu-di-hoc-9_1.jpg', 'xanh dương, trắng', '450', '2,3,4,5', 'cao su', 'đế dày', 6, '700000', 1, 24),
(18, '005', 'Cao Gót Nữ Quai Hậu Phối Ngọc Trai Gót Vuông 5cm Thời Trang Thanh Lịch', 'MWC', 'Việt Nam', 'goi-y-1_1.jpg', 'đen', '300', '2,3,4,5', 'da PU cao cấp', 'gót vuông', 5, '2400000', 1, 20),
(19, '006', 'Giày bé gái búp bê Animo', 'Animo', 'Trung Quốc', 'giay-be-gai-bup-be-animo-a2205-mn005-21-kem_1.jpg', 'kem', '150', '1,2,3,5', 'da PU', 'nhựa TPR', 2, '230000', 1, 25),
(20, '007', 'Giày boot da nữ buột dây, đế vuông, cá tính đế cao 4 phân phong cách hàn Quốc B118', 'None', 'Hàn Quốc', 'c287ef673710a47406fabebf50ec0d37_1.jpg', 'đen', '550', '2,3,4,5', 'da tổng hợp', 'da tổng hợp', 4, '320000', 1, 23),
(21, '007', 'Giày Boots Nữ Cổ Lửng Phá Cách Phối Dây Xích Cực Chất, Hottrend Thời trang.', 'MWC', 'Việt Nam', 'mwc-boost-nu_1.jpg', 'kem', '680', '2,3,4,5', 'da PU cao cấp', 'nhựa PVC', 5, '375000', 1, 23),
(22, '008', 'Boot Nữ Martin Đế Cao Thoáng Khí Phong Cách Cá Tính', 'Martin', 'Việt Nam', 'mwc-boots-nu-2_1.jpg', 'nâu', '700', '3,4,5', 'da lộn cao cấp', 'nhựa TPR', 5, '270000', 1, 23),
(23, '009', 'Giày Boot nữ cá tính đế cao 9cm', 'Giày Bánh Mì', 'Việt Nam', 'b396909d-5313-452d-9cdf-499890ef67b6-jpeg_1.jpg', 'trắng', '700', '2,3,4,5', 'da PU cao cấp', 'nhựa TPR', 7, '280000', 1, 23),
(24, '010', 'Giày Boot nữ đế cao 5cm', 'Giày Bánh Mì', 'Việt Nam', '5ec9f5ad-8719-4c67-9c2f-b275cd507e3f-jpeg_1.webp', 'trắng', '600', '1,2,3,4', 'da PU cao cấp', 'nhựa TPR', 7, '670000', 1, 23),
(27, '011', 'Giày boots thấp cổ ngắn', 'Spao', 'Hàn Quốc', 'boot_co_thap_1.jpg', 'đen', '700', '2,3,4', 'da PU cao cấp', 'da tự nhiên, đế cứng', 7, '880000', 1, 23),
(30, '012', 'Giày Adidas Superstar', 'Adidas', 'Đức', 'Giay-Adidas-Superstar_1.png', 'trắng, đen', '400', '1,2,3,4', 'vải cao cấp', 'dày', 4, '2300000', 1, 22),
(31, '013', 'Giày Adidas Stan Smith', 'Adidas', 'Đức', 'giay-adidas-stan-smith_1.jpg', 'trắng', '570', '2,3,4,5', 'da PU cao cấp', 'dày', 5, '4599000', 1, 22),
(32, '014', 'Giày bata trắng', 'Bata', 'Ấn độ', 'giay-bata-trang_1.jpg', 'trắng', '570', '1,2,3,5', 'vải tổng hợp cao cấp', 'thường', 5, '3499000', 1, 22),
(33, '015', 'Giày thể thao nữ MWC NUTT- 0776 Giày Thể Thao Nữ Phối Màu Thời Trang,Sneaker Da Siêu Êm Chân Đế Độn 4CM Hot Trend', 'MWC', 'Việt Nam', 'mwc-nut_1.jpg', 'trắng, kem', '700', '3,4,5', 'da PU cao cấp ', 'đế cao su đúc', 6, '390000', 1, 22),
(34, '016', 'Giày thể thao ba lê ballet flat', 'Biscuitshop', 'Hàn Quốc', 'ballet-blokecore-8_1.jpg', 'đen', '2', '2,3,4', 'da thuộc', 'cao su', 120, '1399000', 1, 26),
(35, '017', 'Giày Búp Bê Nữ Coach Abigail Ballet Flat', 'Coach', 'Mỹ', 'sGK8Umh1TtZuTMizjUlu8kbTiS4lBknmbqsFcSel_1.jpg', 'xám, nâu', '200', '1,2,3,4', ' Leather, Canvas', 'updating', 2, '2899000', 1, 26),
(36, '018', 'Giày ballet bệt đinh tán', 'Maje', 'Pháp', 'Maje_MFACH00614-2517_H_2_1_4_1.jpg', 'đen', '230', '1,2,3', 'nhựa, cotton, đinh đồng', 'updating', 2, '9570000', 1, 26),
(37, '019', 'Giày múa bale ballet chất lượng cao - Giày biểu diễn văn nghệ ', 'Animo', 'Trung Quốc', 'vn-11134207-7r98o-lyxz5pq3x86918_1.jpg', 'be', 'updating', '1,2,3,4,5', 'vải mềm mại ', 'đàn hồi', 0, '230000', 1, 26),
(39, '020', 'Giày cao gót nữ mũi nhọn da nhám sọc HX-5 bạc', 'Format', 'Việt Nam', 'giay_cg_cao_cap_hx-5_bac_385k__1_master_1.jpg', 'bạc', '200', '1,2,3,5', 'da tổng hợp', 'updating', 11, '799000', 1, 20),
(40, '021', 'Giày Nữ Cỡ Lớn Mới Nhất Giày Cao Gót Mũi Nhọn Cao Gót ', 'Beyorn', 'Trung Quốc', 'giay-cao-got-moi-nhat_1.jpg', 'bạc', 'updating', '3,4', 'PVC', 'updating', 7, '999000', 1, 20),
(41, '022', 'Xăng Đan Nữ Cao Gót Mũi Nhọn Thời Trang Mới Giày Microfiber Dành Cho Nữ', 'Beyorn', 'Trung Quốc', 'giay-cao-got-do_1.jpg', 'đỏ', 'updating', '2,3,4', 'PU cao cấp', 'updating', 9, '850000', 1, 20),
(42, '023', 'Giày sandal đế dày có quai phong cách thời trang roman cho nữ', 'Scholl', 'Vương quốc Anh', 'sandal-1_1.jpg', 'trắng nhạt', '230', '1,2,3,4,5', 'PU cao cấp', 'cao su', 3, '499000', 1, 24),
(43, '024', 'Giày sandal / dép sandal quai hậu đi học dành cho bạn nữ, 3 quai 2 màu', 'No brand', 'Việt Nam', 'sandal-2_1.jpg', 'trắng, đen', '350', '2,3,4,5', 'PU', 'cao su', 3, '580000', 1, 24),
(44, '025', 'Giày Sandal nữ xỏ ngón, sandal bệt, dép nữ quai mảnh da mềm ôm chân cho nữ', 'No brand', 'Việt Nam', 'sandal-3_1.jpg', 'trắng kem', 'updating', '2,4,5', 'PU', 'updating', 0, '230000', 1, 24),
(45, '026', 'Giày sneaker nữ Balenciaga Triple S', 'Balenciaga', 'Pháp', 'giay_balen_nu_864d5c7d7e_1.jpg', 'hồng, trắng', '550', '3,4,5', 'da PU cao cấp, vải lưới', 'cao su', 5, '3799000', 1, 22),
(46, '027', 'Giày nữ hot trend - Alexander McQueen Oversized ', 'Alexander McQueen', 'Vương quốc Anh', 'giay_mc_queen_nu_c380020069_1.jpg', 'xám đốm trắng', '390', '1,2,3,4,5', 'da bò cao cấp', 'cao su cao cấp', 5, '7499000', 1, 22),
(47, '028', 'Giày thể thao nữ Sneaker thêu Gucci Ace Embroidered', 'Gucci', 'Italy', 'giay_mc_Sneaker_theu_Gucci_5ec3ea9df3_1.jpg', 'trắng', '300', '1,2,3,4', 'vải tổng hợp cao cấp, mềm mại', 'cao su', 3, '5680000', 1, 22),
(48, '029', 'Dép matcha thiết kế độc đáo Urban Monkey', 'Urban Monkey', 'Việt Nam', 'urban-monkey-dep_1.jpg', 'matcha', 'updating', '1,2,3,4', 'cao su cao cấp', 'cao su cao cấp', 0, '670000', 1, 25),
(49, '030', 'Dép quai ngang Juno', 'Juno', 'Việt Nam', 'juno-dep_1.jpg', 'đen, trắng', 'updating', '1,2,3', 'cao su ', 'cao su', 0, '129000', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_size`
--

CREATE TABLE `sanpham_size` (
  `idsanpham` int(11) NOT NULL,
  `idsize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham_size`
--

INSERT INTO `sanpham_size` (`idsanpham`, `idsize`) VALUES
(10, 2),
(10, 3),
(10, 4),
(15, 4),
(15, 5),
(16, 2),
(16, 3),
(16, 4),
(16, 5),
(17, 2),
(17, 3),
(17, 4),
(17, 5),
(18, 2),
(18, 3),
(18, 4),
(18, 5),
(19, 1),
(19, 2),
(19, 3),
(19, 5),
(20, 2),
(20, 3),
(20, 4),
(20, 5),
(21, 2),
(21, 3),
(21, 4),
(21, 5),
(22, 3),
(22, 4),
(22, 5),
(23, 2),
(23, 3),
(23, 4),
(23, 5),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(27, 2),
(27, 3),
(27, 4),
(30, 1),
(30, 2),
(30, 3),
(30, 4),
(31, 2),
(31, 3),
(31, 4),
(31, 5),
(32, 1),
(32, 2),
(32, 3),
(32, 5),
(33, 3),
(33, 4),
(33, 5),
(34, 2),
(34, 3),
(34, 4),
(35, 1),
(35, 2),
(35, 3),
(35, 4),
(36, 1),
(36, 2),
(36, 3),
(37, 1),
(37, 2),
(37, 3),
(37, 4),
(37, 5),
(39, 1),
(39, 2),
(39, 3),
(39, 5),
(40, 3),
(40, 4),
(41, 2),
(41, 3),
(41, 4),
(42, 1),
(42, 2),
(42, 3),
(42, 4),
(42, 5),
(43, 2),
(43, 3),
(43, 4),
(43, 5),
(44, 2),
(44, 4),
(44, 5),
(45, 3),
(45, 4),
(45, 5),
(46, 1),
(46, 2),
(46, 3),
(46, 4),
(46, 5),
(47, 1),
(47, 2),
(47, 3),
(47, 4),
(48, 1),
(48, 2),
(48, 3),
(48, 4),
(49, 1),
(49, 2),
(49, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madonhang` (`madonhang`),
  ADD KEY `idkhachhang` (`idkhachhang`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Indexes for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  ADD PRIMARY KEY (`idsanpham`,`idsize`),
  ADD KEY `idsanpham` (`idsanpham`),
  ADD KEY `idsize` (`idsize`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_giohang` FOREIGN KEY (`madonhang`) REFERENCES `giohang` (`madonhang`),
  ADD CONSTRAINT `fk_donhang_sanpham` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_dangky` FOREIGN KEY (`idkhachhang`) REFERENCES `dangky` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  ADD CONSTRAINT `fk_sanphamsize_sanpham` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sanphamsize_sizes` FOREIGN KEY (`idsize`) REFERENCES `sizes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
