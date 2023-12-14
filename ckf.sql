-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2023 lúc 10:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ckf`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `quyen_truy_cap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `mat_khau`, `quyen_truy_cap`) VALUES
(1, 'PHTrang1229@gmail.com', '[29122001', 2),
(2, 'anhll@gmail.com', '123456', 2),
(3, 'quangnt@gmai.com', '123456', 2),
(4, 'nhungtt@gmail.com', '123456', 2),
(5, 'thaont@gmail.com', '123456', 2),
(6, 'tranglt@gmail.com', '123456', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_sp` int(3) NOT NULL,
  `ten_sp` int(100) NOT NULL,
  `gia_sp` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `id_hang` int(10) UNSIGNED NOT NULL,
  `ten_hang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`id_hang`, `ten_hang`) VALUES
(1, 'NIKE'),
(2, 'PUMA'),
(3, 'NEW BELANCE'),
(4, 'JORDAN'),
(5, 'MLB'),
(6, 'PHỤ KIỆN'),
(10, 'ASICS'),
(24, 'ADIDAS'),
(25, 'Thượng Đình'),
(26, 'Reebook'),
(27, 'FILA'),
(28, 'UNDER AMOUR'),
(29, 'TIMER '),
(30, 'TICK KA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total` int(9) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `name`, `address`, `total`, `time`) VALUES
('DH002', 'Nguyễn Thanh Quang', 'số 3 Hồ Tùng Mậu', 500000, '2023-12-14 08:26:19'),
('DH003', 'Trịnh Thị Nhụng', 'Số 5 Hồ Tùng Mậu', 999000, '2023-12-14 08:34:26'),
('DH004', 'Nguyễn Thị Thanh Thảo', '15 ngõ 134 Nguyễn Đổng Chi', 790000, '2023-12-14 08:34:26'),
('DH005', 'Nguyễn Thị Thanh Thảo ', 'thôn Thanh Cao, xã Ngọc Thanh', 660000, '2023-12-14 08:34:26'),
('DH006', 'Lê Thùy Trang', 'Trường Đại học Thương Mại', 400000, '2023-12-14 08:34:26'),
('DH007', 'Nguyễn Xuân Trường ', 'Trường đại học Thương Mại', 900000, '2023-12-14 08:34:26'),
('DH008', 'Trần Văn Nam', 'Học viện kỹ thuật mật mã', 500000, '2023-12-14 08:34:26'),
('DH009', 'Lưu Thị Thanh Thảo ', 'Trường đại học Ngoại ngữ', 80000, '2023-12-14 08:34:26'),
('DH010', 'Ngô Kim Huệ', 'Trường đại học Ngoại Thương', 444000, '2023-12-14 08:34:26'),
('DH011', 'Nguyễn Thị Thu Hà', 'Trường đại học kinh tế Quốc dân', 900000, '2023-12-14 08:34:26'),
('DH012', 'Chu Thị Thanh Thư', 'Trường đại học sư phạm Hà Nội', 400000, '2023-12-14 08:34:26'),
('DH013', 'Chu Thị Vân Anh', 'Đại học Thủy Lợi', 90000, '2023-12-14 08:34:26'),
('DH014', 'Đoàn Phương Anh', 'Đại học Thương Mại', 700000, '2023-12-14 08:34:26'),
('DH016', 'Đoàn Gia Bảo', 'Trường trung học phổ thông Trung Mầu', 900000, '2023-12-14 08:34:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) UNSIGNED NOT NULL,
  `id_hang` int(10) UNSIGNED NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(10) NOT NULL,
  `so_luong` varchar(10) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_hang`, `ten_sp`, `anh_sp`, `gia_sp`, `so_luong`, `mo_ta`) VALUES
(4, 1, 'Puma SF cali trắng đạp gót ', 'Anhgiay8.png', '350000', '2', 'Chất liệu da trơn'),
(5, 1, 'Naf SF gucci trắng xanh đỏ', 'Anhgiay1.png', '399000', '4', 'Chất liệu da trơn'),
(7, 4, 'Jordan SF xanh bạc hà nỉ cao', 'Anhgiay7.png', '350000', '12', 'Chất liệu nỉ'),
(8, 3, 'NB 530 trắng chữ bạc', 'Anhgiay6.png', '600000', '3', 'Sản phẩm chất lượng'),
(9, 5, 'MLB 1:1 chunky đen đế cao', 'Anhgiay5.png', '780,000', '20', 'Giày đế cao'),
(11, 1, 'Naf rep kem trắng', 'Anhgiay4.png', '550,000', '12', 'Da thật'),
(12, 1, 'Naf nhiều màu', 'Anhgiay7.png', '600000', '20', 'Đổi màu khi ra ngoài nắng'),
(13, 3, 'NB 530 trắng chữ bạc', 'Anhgiay6.png', '900000', '3', 'Chất liệu nỉ'),
(14, 10, 'test', 'Anhgiay1.png', '350.000', '100', 'xinh dep tuyet voi'),
(15, 2, 'Puma cầu vồng', 'Anhgiay2.png', '350.000', '100', 'Giày chống nước, chống bẩn siêu bền'),
(16, 1, 'Nike phát sáng', 'Anhgiay7.png', '500.000', '100', 'Đặc biệt phát sáng ban đêm chói lóa'),
(17, 1, 'Nike cầu vồng', 'Anhgiay6.png', '500.000', '100', 'Hot trend với màu cam đào ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`id_hang`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_hang` (`id_hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `id_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_hang`) REFERENCES `hang` (`id_hang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
