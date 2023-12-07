-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 11:04 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen_truy_cap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `mat_khau`, `quyen_truy_cap`) VALUES
(1, 'PHTrang1229@gmail.com', '[29122001', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `id_hang` int(10) UNSIGNED NOT NULL,
  `ten_hang` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
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
(6, 'PHỤ KIỆN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) UNSIGNED NOT NULL,
  `id_hang` int(10) UNSIGNED NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_sp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
(13, 3, 'NB 530 trắng chữ bạc', 'Anhgiay6.png', '900000', '3', 'Chất liệu nỉ');

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
  MODIFY `id_hang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
