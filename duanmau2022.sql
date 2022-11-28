-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2022`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `ngaydathang` varchar(50) DEFAULT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản',
  `total` int(10) NOT NULL,
  `bill_satus` int(11) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang chờ 2. Giao hàng 3. Đã giao hàng',
  `recevie_name` int(11) DEFAULT NULL,
  `recevie_address` int(11) DEFAULT NULL,
  `recevie_tel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `ngaydathang`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `total`, `bill_satus`, `recevie_name`, `recevie_address`, `recevie_tel`) VALUES
(1, 0, '04:05:042022-11-27T16:05:41+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 245, 0, NULL, NULL, NULL),
(2, 0, '04:06:042022-11-27T16:06:35+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 245, 0, NULL, NULL, NULL),
(3, 0, '04:07:042022-11-27T16:07:22+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(4, 0, '04:08:042022-11-27T16:08:07+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(5, 0, '04:08:042022-11-27T16:08:13+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(6, 0, '04:38:042022-11-27T16:38:21+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(7, 0, '04:41:042022-11-27T16:41:17+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(8, 0, '04:41:042022-11-27T16:41:40+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 245, 0, NULL, NULL, NULL),
(9, 0, '04:47:042022-11-27T16:47:07+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 145, 0, NULL, NULL, NULL),
(10, 0, '04:51:042022-11-27T16:51:30+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 145, 0, NULL, NULL, NULL),
(11, 0, '04:51:042022-11-27T16:51:45+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 145, 0, NULL, NULL, NULL),
(12, 0, '05:03:052022-11-27T17:03:14+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 1, 145, 0, NULL, NULL, NULL),
(13, 0, '05:03:052022-11-27T17:03:27+01:0011 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 145, 0, NULL, NULL, NULL),
(14, 0, '05:10:28Europe/Berlin 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 145, 0, NULL, NULL, NULL),
(15, 0, '05:10 27/11/2022', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 145, 0, NULL, NULL, NULL),
(16, 0, '27/11/2022 05:14:58', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 145, 0, NULL, NULL, NULL),
(17, 0, '27/11/2022 05:15:31 PM', 'abc', 'abcd xyz', '0376732833', 'hoangnvph15198@fpt.edu.vn', 0, 145, 0, NULL, NULL, NULL),
(18, 0, '27/11/2022 05:16:17 PM', '', '', '', '', 0, 99, 0, NULL, NULL, NULL),
(19, 0, '27/11/2022 05:17:06 PM', '', '', '', '', 0, 99, 0, NULL, NULL, NULL),
(20, 0, '27/11/2022 05:19:38 PM', 'thieu', '79 Nguyễn Chí Thanh - Đống Đa', '0376732833', 'thieu12345hn@gmail.com', 0, 99, 0, NULL, NULL, NULL),
(21, 0, '27/11/2022 05:19:54 PM', 'thieu', '79 Nguyễn Chí Thanh - Đống Đa', '0376732833', 'thieu12345hn@gmail.com', 0, 169, 0, NULL, NULL, NULL),
(22, 0, '27/11/2022 05:20:14 PM', 'thieu', '79 Nguyễn Chí Thanh - Đống Đa', '0376732833', 'thieu12345hn@gmail.com', 1, 169, 0, NULL, NULL, NULL),
(23, 0, '27/11/2022 05:21:29 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 0, 145, 0, NULL, NULL, NULL),
(24, 0, '27/11/2022 05:22:29 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 0, 289, 0, NULL, NULL, NULL),
(25, 0, '27/11/2022 05:24:49 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 368, 0, NULL, NULL, NULL),
(26, 0, '27/11/2022 05:25:49 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 0, 145, 0, NULL, NULL, NULL),
(27, 0, '27/11/2022 05:26:23 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 145, 0, NULL, NULL, NULL),
(28, 6, '27/11/2022 05:55:21 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 290, 0, NULL, NULL, NULL),
(29, 6, '27/11/2022 06:05:33 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 2, 368, 0, NULL, NULL, NULL),
(30, 6, '27/11/2022 06:07:24 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 99, 0, NULL, NULL, NULL),
(31, 6, '27/11/2022 06:09:06 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 80, 0, NULL, NULL, NULL),
(32, 6, '27/11/2022 06:20:08 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 1, 0, NULL, NULL, NULL),
(33, 6, '27/11/2022 06:25:56 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 2, 0, NULL, NULL, NULL),
(34, 6, '27/11/2022 06:27:39 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(35, 6, '27/11/2022 06:27:46 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(36, 6, '27/11/2022 06:27:56 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(37, 6, '27/11/2022 06:28:06 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(38, 6, '27/11/2022 06:29:31 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 1, 0, NULL, NULL, NULL),
(39, 6, '27/11/2022 06:29:59 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 297, 0, NULL, NULL, NULL),
(40, 6, '27/11/2022 06:31:20 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 1, 0, NULL, NULL, NULL),
(41, 6, '27/11/2022 06:33:27 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 1, 0, NULL, NULL, NULL),
(42, 6, '27/11/2022 06:35:44 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 5746000, 0, NULL, NULL, NULL),
(43, 6, '27/11/2022 06:36:24 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(44, 6, '27/11/2022 06:36:51 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 0, 0, NULL, NULL, NULL),
(45, 6, '27/11/2022 06:37:02 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 6799966, 0, NULL, NULL, NULL),
(46, 0, '27/11/2022 06:38:00 PM', 'thieuz', 'abc xyz', '0323232323', 'hoangnvph15198@fpt.edu.vn', 1, 870000, 0, NULL, NULL, NULL),
(47, 6, '27/11/2022 06:40:40 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 823745000, 0, NULL, NULL, NULL),
(48, 6, '27/11/2022 06:44:35 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 507000, 0, NULL, NULL, NULL),
(49, 6, '28/11/2022 03:18:21 PM', 'Thiều', 'Hà Tây', '0323232323', 'abv@gmail.com', 1, 1450297000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(199) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'hhihi', 3, 1, '28/11/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 1),
(2, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 1),
(3, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 2),
(4, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 2),
(5, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 3),
(6, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 3),
(7, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 4),
(8, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 4),
(9, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 5),
(10, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 5),
(11, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 6),
(12, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 6),
(13, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 7),
(14, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 7),
(15, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 8),
(16, 7, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 1, 100000, 8),
(17, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 9),
(18, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 10),
(19, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 11),
(20, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 12),
(21, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 13),
(22, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 14),
(23, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 15),
(24, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 16),
(25, 7, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 17),
(26, 0, 2, 'image_195509_1_36329.jpg', 'Tri Thức Cực Hạn', 99000, 1, 99000, 18),
(27, 0, 2, 'image_195509_1_36329.jpg', 'Tri Thức Cực Hạn', 99000, 1, 99000, 19),
(28, 2, 2, 'image_195509_1_36329.jpg', 'Tri Thức Cực Hạn', 99000, 1, 99000, 20),
(29, 2, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 1, 169000, 21),
(30, 2, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 1, 169000, 22),
(31, 6, 6, 'z3853755123845_b2a39dccbee5d09d9b45b0ee33394506_1.jpg', 'Tokyo Revengers - Tập 6 ', 145000, 1, 145000, 23),
(32, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 1, 169000, 24),
(33, 6, 12, 'ghi-ch_p-gi_i-ph_u-t_m-l_bia1.jpg', 'Ghi Chép Giải Phẫu Tâm Lý Học Tội Phạm', 120000, 1, 120000, 24),
(34, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 1, 169000, 25),
(35, 6, 21, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Manga abc', 199999, 1, 199999, 25),
(36, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 26),
(37, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 27),
(38, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 28),
(39, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 1, 145000, 28),
(40, 6, 21, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Manga abc', 199999, 1, 199999, 29),
(41, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 1, 169000, 29),
(42, 6, 2, 'image_195509_1_36329.jpg', 'Tri Thức Cực Hạn', 99000, 1, 99000, 30),
(43, 6, 13, '8936067607611.jpg', 'Tinh Thần Bền Bỉ', 80000, 1, 80000, 31),
(44, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 2, 290000, 32),
(45, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 2, 290000, 32),
(46, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 3, 435000, 32),
(47, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 3, 435000, 32),
(48, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 3, 507000, 32),
(49, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 14, 2366000, 33),
(50, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 10, 1450000, 38),
(51, 6, 10, 'tham-tu-lung-danh-conan---ho-so-tuyet-mat---heiji-hattori-_-kazuha-toyama.jpg', 'Thám Tử Lừng Danh Conan', 99000, 3, 297000, 39),
(52, 6, 9, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Dragon Ball Full Color', 100000, 11, 1100000, 40),
(53, 6, 14, '8935251419573.jpg', 'Mưu Hèn Kế Bẩn Nơi Công Sở', 110000, 18, 1980000, 41),
(54, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 34, 5746000, 42),
(55, 6, 21, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Manga abc', 199999, 34, 6799966, 45),
(56, 0, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 3, 435000, 46),
(57, 0, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 3, 435000, 46),
(58, 6, 6, 'z3853755123845_b2a39dccbee5d09d9b45b0ee33394506_1.jpg', 'Tokyo Revengers - Tập 6 ', 145000, 3, 435000, 47),
(59, 6, 4, 'tktt.jpg', 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000, 5678, 823310000, 47),
(60, 6, 1, '8936066692298.jpg', 'Thao Túng Tâm Lý', 169000, 3, 507000, 48),
(61, 6, 2, 'image_195509_1_36329.jpg', 'Tri Thức Cực Hạn', 99000, 3, 297000, 49),
(62, 6, 6, 'z3853755123845_b2a39dccbee5d09d9b45b0ee33394506_1.jpg', 'Tokyo Revengers - Tập 6 ', 145000, 10000, 1450000000, 49);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(32, 'Manga'),
(33, 'Tiểu thuyết'),
(34, 'Kỹ năng sống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Thao Túng Tâm Lý', 169000.00, '8936066692298.jpg', 'Nhận Diện, Thức Tỉnh Và Chữa Lành Những Tổn Thương Tiềm Ẩn', 1, 33),
(2, 'Tri Thức Cực Hạn', 99000.00, 'image_195509_1_36329.jpg', 'Tối Ưu Hóa Kĩ Năng Học Tập Và Quản Lí Tri Thức Cá Nhân', 1, 33),
(3, 'Thoát Khỏi Bẫy Nhận Thức', 85000.00, '1080x1080_thoat-khoi-bay-nhan-thuc.jpg', 'Nhà cung cấp:Minh Long\r\nTác giả:Thái Lũy Lỗi', 1, 33),
(4, 'Thoát Khỏi Tâm Trí và Bước Vào Cuộc Sống', 145000.00, 'tktt.jpg', 'Nhà cung cấp:Minh Long\r\nTác giả:Steven C.Hayes, Spencer Smith', 1, 33),
(6, 'Tokyo Revengers - Tập 6 ', 145000.00, 'z3853755123845_b2a39dccbee5d09d9b45b0ee33394506_1.jpg', 'Bản Đặc Biệt - Tặng Kèm Set 3 PVC Character Cards', 2, 32),
(7, 'KINGDOM - Tập 37', 45000.00, 'nxbtre_full_18282022_022848.jpg', 'Tặng Kèm Thẻ Hình Nhân Vật', 2, 32),
(8, 'MONSTER #8 - Tập 6', 60000.00, 'z3853755104240_a2ba6935b363bd575015d72e018029f0.jpg', 'Bản Đặc Biệt - Dark Ver - Tặng 1 Set Bookmark Hai Lớp + 2 Card PVC', 2, 32),
(9, 'Dragon Ball Full Color', 100000.00, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Phần Năm: Truy Lùng Cell Bọ Hung - Tập 6 - Tặng Kèm Ngẫu Nhiên 1 Trong 2 Mẫu Standee Hoặc Postcard', 2, 32),
(10, 'Thám Tử Lừng Danh Conan', 99000.00, 'tham-tu-lung-danh-conan---ho-so-tuyet-mat---heiji-hattori-_-kazuha-toyama.jpg', 'Hồ Sơ Tuyệt Mật - Heiji Hattori & Kazuha Toyama', 2, 32),
(11, 'Ninja Rantaro - Tập 65', 50000.00, 'ninja-rantaro---tap-65.jpg', 'Tặng Kèm Postcard\r\nNhà cung cấp:Nhà Xuất Bản Kim ĐồngTác giả:Soubee Amako', 2, 32),
(12, 'Ghi Chép Giải Phẫu Tâm Lý Học Tội Phạm', 120000.00, 'ghi-ch_p-gi_i-ph_u-t_m-l_bia1.jpg', 'Nhà cung cấp:AZ Việt Nam\r\nTác giả:Soo Jung Lee, Eun Jin Lee', 3, 34),
(13, 'Tinh Thần Bền Bỉ', 80000.00, '8936067607611.jpg', 'Bí Quyết Vượt Qua Nghịch Cảnh\r\nNhà cung cấp:Minh Long\r\nTác giả:Damon Zahariades', 3, 34),
(14, 'Mưu Hèn Kế Bẩn Nơi Công Sở', 110000.00, '8935251419573.jpg', 'Nghệ Thuật Thăng Tiến Trong Sự Nghiệp - Tập 2 (Tái Bản)', 3, 34),
(21, 'Manga abc', 199999.00, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'dsfdsf', 0, 32),
(24, 'thieuz', 99999999.99, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'Đây là một cuốn manga', 0, 32);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `role` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'thieu@gmail.com', 'thieu', 'thieu', 'abc xyz', '0376732833', 1),
(2, 'thieu', 'thieuu', 'thieu12345hn@gmail.com', '79 Nguyễn Chí Thanh - Đống Đa', '0376732833', 0),
(3, 'thieuz', 'thieu', 'thieuabc@xyz', 'ha noi', '0376732833', 1),
(4, 'thieuz', 'thieuzz', 'thieuz@gmail.com', 'ha tay', '0376732833', 0),
(5, 'thieuvjpdaica', 'thieu123', 'thieu@gmail.com', 'abcd xyz', '0376732833', 0),
(6, 'Thiều', '1234', 'abv@gmail.com', 'Hà Tây', '0323232323', 1),
(7, 'abc', '123', 'hoangnvph15198@fpt.edu.vn', 'abcd xyz', '0376732833', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dmsp_fk` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `dmsp_fk` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
