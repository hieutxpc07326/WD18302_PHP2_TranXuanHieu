-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 05, 2024 lúc 12:58 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tuyensinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_xet_tuyen`
--

CREATE TABLE `don_xet_tuyen` (
  `ma_don` int NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `gioi_tinh` enum('Nam','Nữ') COLLATE utf8mb4_general_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `so_cmnd` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `so_dien_thoai` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nganh_hoc` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `diem_thi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_xet_tuyen`
--

INSERT INTO `don_xet_tuyen` (`ma_don`, `ho_ten`, `ngay_sinh`, `gioi_tinh`, `dia_chi`, `so_cmnd`, `so_dien_thoai`, `email`, `nganh_hoc`, `diem_thi`) VALUES
(1, 'tran hieu', '2024-01-01', 'Nam', 'can tho', '01234', '0356764863', 'hieu@gmail.com', 'cntt', 25);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `don_xet_tuyen`
--
ALTER TABLE `don_xet_tuyen`
  ADD PRIMARY KEY (`ma_don`),
  ADD UNIQUE KEY `so_cmnd` (`so_cmnd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_xet_tuyen`
--
ALTER TABLE `don_xet_tuyen`
  MODIFY `ma_don` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
