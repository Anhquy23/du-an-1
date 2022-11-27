-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 04:25 PM
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
  `iduser` int(10) DEFAULT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản',
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_satus` int(11) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Đang chờ 2. Giao hàng 3. Đã giao hàng',
  `recevie_name` int(11) DEFAULT NULL,
  `recevie_address` int(11) DEFAULT NULL,
  `recevie_tel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `ma_kh` int(10) NOT NULL,
  `ma_hh` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_bl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES
(1, 2, 3, 'abc', '2022-11-25 13:23:42');

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
(21, 'Manga abc', 199999.00, 'dragon-ball-full-color---phan5---truy-lung-cell-bo-hung---tap-6.jpg', 'dsfdsf', 0, 32);

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
(5, 'thieuvjpdaica', 'thieu123', 'thieu@gmail.com', 'abcd xyz', '0376732833', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
