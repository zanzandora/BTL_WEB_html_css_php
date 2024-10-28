-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2024 lúc 11:50 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_shoesforwoman`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(111) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin1234', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
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
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id`, `tenkhachhang`, `email`, `sodienthoai`, `diachi`, `matkhau`) VALUES
(10, 'Mai Minh Tú', 'tu@gmail.com', '0123456789', 'Hà Nội', 'tu123456'),
(11, 'Bùi Công Quang', 'quang@gmail.com', '0987654321', 'Hòa Bình', 'quang12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `ten`, `thutu`) VALUES
(20, 'Giày cao gót', 1),
(21, 'Giày bệt', 2),
(22, 'Giày thể thao', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL,
  `mau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `madonhang`, `idsanpham`, `soluongsp`, `mau`) VALUES
(1, '574164', 10, 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `madonhang` varchar(10) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `idkhachhang`, `madonhang`, `trangthai`) VALUES
(1, 11, '574164', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(50) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `sodienthoai`, `noidung`) VALUES
(1, 'Bùi Công Quang', 'quang@gmail.com', '0987654321', 'Sản phẩm quá tệ , tốt nhất nên dẹp hàng đi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `nhasanxuat`, `xuatsu`, `hinhanh`, `mau`, `khoiluong`, `kichco`, `chatlieu`, `degiay`, `cao`, `gia`, `trangthai`, `iddanhmuc`) VALUES
(10, '001', 'Giày cao gót công sở', 'Charles & Keith', 'Việt Nam', 'product_4.jpg', 'đen', '400', '32', 'da tổng hợp', 'đế cao su', 8, '1200000', 1, 20),
(11, '002', 'Giày thể thao basic Kichi Shoes', 'Beyorn', 'Trung Quốc', 'product_2.jpg', 'trắng', '550', '34', 'vải tổng hợp', 'đế cao su', 10, '320000', 1, 22);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madonhang` (`madonhang`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madonhang` (`madonhang`),
  ADD KEY `idkhachhang` (`idkhachhang`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_donhang_giohang` FOREIGN KEY (`madonhang`) REFERENCES `giohang` (`madonhang`),
  ADD CONSTRAINT `fk_donhang_sanpham` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_dangky` FOREIGN KEY (`idkhachhang`) REFERENCES `dangky` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
