-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 10:26 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1_mmobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `ma_tk` varchar(20) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0: Khách, 1: Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ma_tk`, `mat_khau`, `ho_ten`, `email`, `dia_chi`, `sdt`, `role`) VALUES
('khachhang1', 'manhnd', 'Khách hàng 1', 'ndm108k3@gmail.com', 'Hà Nội', '0377377897', 0),
('khachhang2', 'manhnd', 'Nguyễn Đức Mạnh', 'manhndph19912@fpt.edu.vn', 'Hà Nội', '0377377897', 0),
('Manhnd', 'manhnd', 'Nguyễn Đức Mạnh', 'manhnd10803@gmail.com', 'Hà Nội', '0377377897', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `bill_ho_ten` varchar(255) NOT NULL,
  `bill_dia_chi` varchar(255) NOT NULL,
  `bill_sdt` varchar(10) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL COMMENT '0: Thanh toán khi nhận, 1: Thanh toán online',
  `bill_ngay_dat` varchar(50) NOT NULL,
  `bill_tong_tien` int(10) NOT NULL,
  `bill_trang_thai` tinyint(1) NOT NULL COMMENT '0: Đơn hàng mới, 1: Đang xử lý, 2: Đang giao hàng, 3: Đã thanh toán, 4: Đã hoàn thành, 5: Đã hủy',
  `ma_tk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_ho_ten`, `bill_dia_chi`, `bill_sdt`, `bill_email`, `bill_pttt`, `bill_ngay_dat`, `bill_tong_tien`, `bill_trang_thai`, `ma_tk`) VALUES
(141, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '01/12/2022', 11590000, 5, 'Manhnd'),
(142, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '02/12/2022', 34990000, 5, 'Manhnd'),
(143, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '02/12/2022', 27490000, 5, 'Manhnd'),
(144, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '02/12/2022', 39780000, 5, 'Manhnd'),
(145, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '02/12/2022', 10890000, 5, 'Manhnd'),
(146, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '03/12/2022', 24890000, 5, 'Manhnd'),
(147, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '03/12/2022', 24890000, 5, 'Manhnd'),
(148, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '03/12/2022', 17490000, 5, 'Manhnd'),
(149, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '04/12/2022', 34990000, 0, 'Manhnd'),
(150, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '04/12/2022', 33390000, 0, 'Manhnd'),
(151, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '04/12/2022', 16290000, 0, 'Manhnd'),
(153, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '04/12/2022', 11590000, 0, 'Manhnd'),
(154, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '04/12/2022', 21090000, 0, 'Manhnd'),
(155, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 33390000, 0, 'Manhnd'),
(156, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 10890000, 0, 'Manhnd'),
(157, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 82270000, 0, 'Manhnd'),
(158, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 15790000, 0, 'Manhnd'),
(159, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 15790000, 0, 'Manhnd'),
(160, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '05/12/2022', 17490000, 0, 'Manhnd'),
(161, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '06/12/2022', 27490000, 0, 'Manhnd'),
(162, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '06/12/2022', 35980000, 0, 'Manhnd'),
(163, 'Khách hàng 1', 'Hà Nội', '0377377897', 'ndm108k3@gmail.com', 0, '07/12/2022', 44280000, 2, 'khachhang1'),
(164, 'khách hàng mua trực tuyến', 'Khách hàng mua trực tiếp', '0377377897', 'ndm108k3@gmail.com', 0, '07/12/2022', 28180000, 3, 'Manhnd'),
(165, 'Khách hàng 1', 'Hà Nội', '0377377897', 'ndm108k3@gmail.com', 0, '07/12/2022', 52980000, 3, 'khachhang1'),
(166, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhndph19912@fpt.edu.vn', 0, '07/12/2022', 44280000, 2, 'khachhang2'),
(167, 'Nguyễn Đức Mạnh', 'Khách hàng mua trực tiếp', '0377377897', 'manhndph19912@fpt.edu.vn', 0, '07/12/2022', 36980000, 3, 'Manhnd'),
(168, 'Nguyễn Đức Mạnh 2', 'Khách hàng mua trực tiếp', '0377377897', 'manhdeptrai1082003@gmail.com', 0, '14/12/2022', 41280000, 0, 'Manhnd'),
(170, 'Mạnh', 'Khách hàng mua trực tiếp', '0377377897', 'manhdeptrai1082003@gmail.com', 0, '14/12/2022', 15790000, 0, 'Manhnd'),
(171, 'Nguyễn Đức Mạnh', 'Hà Nội', '0377377897', 'manhnd10803@gmail.com', 0, '14/12/2022', 27990000, 0, 'Manhnd'),
(172, 'Mạnh', 'Khách hàng mua trực tiếp', '0377377897', 'manhdeptrai1082003@gmail.com', 0, '14/12/2022', 44780000, 5, 'Manhnd'),
(173, 'Nguyễn Đức Mạnh 2', 'Khách hàng mua trực tiếp', '0377377897', 'manhdeptrai1082003@gmail.com', 0, '14/12/2022', 34990000, 4, 'Manhnd'),
(174, 'Mạnh', 'Khách hàng mua trực tiếp', '0377377897', 'manhdeptrai1082003@gmail.com', 0, '14/12/2022', 15790000, 4, 'Manhnd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `ma_tk` varchar(20) NOT NULL,
  `ma_sp` int(10) NOT NULL,
  `hinh_anh_sp` varchar(255) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `mau_sac` varchar(20) NOT NULL,
  `thong_so` varchar(255) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `ma_tk`, `ma_sp`, `hinh_anh_sp`, `ten_sp`, `gia_sp`, `so_luong`, `mau_sac`, `thong_so`, `thanh_tien`, `id_bill`) VALUES
(103, 'Manhnd', 12, 'upload/samsung-galaxy-a73-1-600x600.jpg', 'Samsung Galaxy A73 (5G)', 11590000, 1, 'Bạc', 'Bản 256GB', 11590000, 141),
(104, 'Manhnd', 10, 'upload/samsung_galaxy_z_fold_4-7.jpg', 'Samsung Galaxy Z Fold4', 34990000, 1, 'Xám', 'Bản 128GB', 34990000, 142),
(105, 'Manhnd', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27490000, 1, 'Bạc', 'Bản 128GB', 27490000, 143),
(106, 'Manhnd', 3, 'upload/photo_2022-09-28_21-58-51_2.jpg', 'iPhone 14 | Chính hãng VN/A', 23990000, 1, 'Bạc', 'Bản 128GB', 23990000, 144),
(107, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 15790000, 1, 'Vàng', 'Bản 128GB', 15790000, 144),
(108, 'Manhnd', 8, 'upload/3_225.jpg', 'iPhone 11 I Chính hãng VN/A', 10890000, 1, 'Vàng', 'Bản 128GB', 10890000, 145),
(109, 'Manhnd', 9, 'upload/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Samsung Galaxy S22 Ultra', 24890000, 1, 'Bạc', 'Bản 128GB', 24890000, 146),
(110, 'Manhnd', 9, 'upload/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Samsung Galaxy S22 Ultra', 24890000, 1, 'Bạc', 'Bản 128GB', 24890000, 147),
(111, 'Manhnd', 13, 'upload/sm-s901_galaxys22_front_pinkgold_211122.jpg', 'Samsung Galaxy S22', 17490000, 1, 'Vàng', 'Bản 128GB', 17490000, 148),
(112, 'Manhnd', 10, 'upload/samsung_galaxy_z_fold_4-7.jpg', 'Samsung Galaxy Z Fold4', 34990000, 1, 'Bạc', 'Bản 128GB', 34990000, 149),
(113, 'Manhnd', 6, 'upload/t_m_18.png', 'iPhone 14 Pro Max | Chính hãng VN/A', 33390000, 1, 'Vàng', 'Bản 128GB', 33390000, 150),
(114, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16290000, 1, 'Xám', 'Bản 256GB', 16290000, 151),
(115, 'Manhnd', 12, 'upload/samsung-galaxy-a73-1-600x600.jpg', 'Samsung Galaxy A73 (5G)', 11590000, 1, 'Vàng', 'Bản 256GB', 11590000, 153),
(116, 'Manhnd', 11, 'upload/samsung_galaxy_z_flip_m_i_2022-1_1.jpg', 'Samsung Galaxy Z Flip4 ', 21090000, 1, 'Vàng', 'Bản 256GB', 21090000, 154),
(117, 'Manhnd', 6, 'upload/t_m_18.png', 'iPhone 14 Pro Max | Chính hãng VN/A', 33390000, 1, 'Vàng', 'Bản 128GB', 33390000, 155),
(118, 'Manhnd', 8, 'upload/3_225.jpg', 'iPhone 11 I Chính hãng VN/A', 10890000, 1, 'Vàng', 'Bản 128GB', 10890000, 156),
(119, 'Manhnd', 3, 'upload/photo_2022-09-28_21-58-51_2.jpg', 'iPhone 14 | Chính hãng VN/A', 23990000, 1, 'Vàng', 'Bản 128GB', 23990000, 157),
(120, 'Manhnd', 9, 'upload/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Samsung Galaxy S22 Ultra', 24890000, 1, 'Vàng', 'Bản 128GB', 24890000, 157),
(121, 'Manhnd', 6, 'upload/t_m_18.png', 'iPhone 14 Pro Max | Chính hãng VN/A', 33390000, 1, 'Vàng', 'Bản 256GB', 33390000, 157),
(122, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 15790000, 1, 'Bạc', 'Bản 128GB', 15790000, 158),
(123, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 15790000, 1, 'Vàng', 'Bản 128GB', 15790000, 159),
(124, 'Manhnd', 13, 'upload/sm-s901_galaxys22_front_pinkgold_211122.jpg', 'Samsung Galaxy S22', 17490000, 1, 'Vàng', 'Bản 128GB', 17490000, 160),
(125, 'Manhnd', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27490000, 1, 'Bạc', 'Bản 128GB', 27490000, 161),
(126, 'Manhnd', 9, 'upload/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Samsung Galaxy S22 Ultra', 24890000, 1, 'Bạc', 'Bản 128GB', 24890000, 162),
(127, 'Manhnd', 12, 'upload/samsung-galaxy-a73-1-600x600.jpg', 'Samsung Galaxy A73 (5G)', 11090000, 1, 'Vàng', 'Bản 128GB', 11090000, 162),
(128, 'khachhang1', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16790000, 1, 'Xám', 'Bản 512GB', 16790000, 163),
(129, 'khachhang1', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27490000, 1, 'Bạc', 'Bản 128GB', 27490000, 163),
(130, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16290000, 1, 'Vàng', 'Bản 256GB', 16290000, 164),
(131, 'Manhnd', 8, 'upload/3_225.jpg', 'iPhone 11 I Chính hãng VN/A', 11890000, 1, 'Xám', 'Bản 512GB', 11890000, 164),
(132, 'khachhang1', 3, 'upload/photo_2022-09-28_21-58-51_2.jpg', 'iPhone 14 | Chính hãng VN/A', 24990000, 1, 'Bạc', 'Bản 512GB', 24990000, 165),
(133, 'khachhang1', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27990000, 1, 'Xám', 'Bản 256GB', 27990000, 165),
(134, 'khachhang2', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16790000, 1, 'Bạc', 'Bản 512GB', 16790000, 166),
(135, 'khachhang2', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27490000, 1, 'Xám', 'Bản 128GB', 27490000, 166),
(136, 'Manhnd', 9, 'upload/sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Samsung Galaxy S22 Ultra', 25390000, 1, 'Vàng', 'Bản 256GB', 25390000, 167),
(137, 'Manhnd', 12, 'upload/samsung-galaxy-a73-1-600x600.jpg', 'Samsung Galaxy A73 (5G)', 11590000, 1, 'Xám', 'Bản 256GB', 11590000, 167),
(138, 'Manhnd', 3, 'upload/photo_2022-09-28_21-58-51_2.jpg', 'iPhone 14 | Chính hãng VN/A', 24490000, 1, 'Bạc', 'Bản 256GB', 24490000, 168),
(139, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16790000, 1, 'Xám', 'Bản 512GB', 16790000, 168),
(140, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 15790000, 1, 'Bạc', 'Bản 128GB', 15790000, 170),
(141, 'Manhnd', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 27990000, 1, 'Xám', 'Bản 256GB', 27990000, 171),
(142, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 16290000, 1, 'Xám', 'Bản 256GB', 16290000, 172),
(143, 'Manhnd', 5, 'upload/3_51_1_7.jpg', 'iPhone 13 Pro Max | Chính hãng VN/A', 28490000, 1, 'Xám', 'Bản 512GB', 28490000, 172),
(144, 'Manhnd', 10, 'upload/samsung_galaxy_z_fold_4-7.jpg', 'Samsung Galaxy Z Fold4', 34990000, 1, 'Xám', 'Bản 128GB', 34990000, 173),
(145, 'Manhnd', 2, 'upload/iphone-12-den-new-2-600x600.jpg', 'iPhone 12 I Chính hãng VN/A', 15790000, 1, 'Bạc', 'Bản 128GB', 15790000, 174);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentary`
--

CREATE TABLE `commentary` (
  `ma_bl` int(10) NOT NULL,
  `noi_dung` varchar(225) NOT NULL,
  `ma_tk` varchar(20) NOT NULL,
  `ngay_bl` varchar(50) NOT NULL,
  `ma_sp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `commentary`
--

INSERT INTO `commentary` (`ma_bl`, `noi_dung`, `ma_tk`, `ngay_bl`, `ma_sp`) VALUES
(10, 'Bảo hành bao lâu ạ', 'Manhnd', '29/11/2022', 11),
(11, 'Bảo hành bao lâu ạ', 'Manhnd', '06/12/2022', 2),
(12, 'Sp tốt ạ', 'khachhang1', '07/12/2022', 2),
(13, 'Bảo hành bao lâu ạ', 'khachhang1', '07/12/2022', 3),
(14, 'Bảo hành bao lâu ạ', 'khachhang2', '07/12/2022', 2),
(15, 'Sản phẩm tốt ạ', 'khachhang2', '07/12/2022', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ma_sp` int(10) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `giam_gia_sp` int(10) NOT NULL,
  `hinh_anh_sp` varchar(255) NOT NULL,
  `mo_ta_sp` text NOT NULL,
  `ngay_nhap` varchar(50) NOT NULL,
  `luot_xem` int(10) NOT NULL,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ma_sp`, `ten_sp`, `gia_sp`, `giam_gia_sp`, `hinh_anh_sp`, `mo_ta_sp`, `ngay_nhap`, `luot_xem`, `ma_loai`) VALUES
(2, 'iPhone 12 I Chính hãng VN/A', 19990000, 15790000, 'iphone-12-den-new-2-600x600.jpg', 'Điện thoại iPhone 11 64GB Đen sở hữu thiết kế tinh xảo tỉ mỉ đến từng chi tiết với khung nhôm bền bỉ, mặt kính cường lực chắc chắn. Bên cạnh đó màn hình tràn viền Liquid Retina 6.1 inch sắc nét mang lại cho bạn những trải nghiệm chân thực và sống động. Chiếc điện thoại iPhone này không chỉ cuốn hút ngay từ cái nhìn đầu tiên với 6 phiên bản màu thanh lịch mà còn gây ấn tượng bởi những khả năng nổi trội mà nó mang lại cho cuộc sống của bạn. Với phiên bản màu đen huyền bí, Apple mang đến sự lựa chọn tuyệt vời cho những ai ưa thích sự mạnh mẽ và sang trọng và lịch lãm. ', '2022-11-23', 270, 13),
(3, 'iPhone 14 | Chính hãng VN/A', 27990000, 23990000, 'photo_2022-09-28_21-58-51_2.jpg', 'Mới đây Apple đã tung ra thị trường dòng iPhone 14 256GB. Sản phẩm có hệ điều hành iOS 16 và chipset Apple A15 Bionic. Đặc biệt, phần camera đã tăng kích thước đường kính 16.17mm với góc rộng 48MP. Hiện nay vẫn chưa có thông báo chính thức về ngày bán ở Việt Nam, tuy nhiên Quý Khách có thể để lại thông tin dưới phần bình luận hoặc đăng ký nhận tin sau để Mobile thông báo đến khách hàng SỚM NHẤT và được hưởng các chính sách ưu đãi cực lớn. Xin chân thành cảm ơn Quý Khách.', '2022-11-22', 65, 13),
(5, 'iPhone 13 Pro Max | Chính hãng VN/A', 34990000, 27490000, '3_51_1_7.jpg', 'Đánh giá iPhone 13 Pro Max – Hiệu năng vô đối, camera cực đỉnh\r\niPhone 12 ra mắt cách đây chưa lâu, thì những tin đồn mới nhất về iPhone 13 Pro Max đã khiến bao tín đồ công nghệ ngóng chờ. Cụm camera được nâng cấp, màu sắc mới, đặc biệt là màn hình 120Hz với phần notch được làm nhỏ gọn hơn chính là những điểm làm cho thu hút mọi sự chú ý trong năm nay.', '2022-11-23', 40, 13),
(6, 'iPhone 14 Pro Max | Chính hãng VN/A', 34990000, 33390000, 't_m_18.png', 'iPhone 14 Pro Max là mẫu flagship nổi bật nhất của Apple trong lần trở lại năm 2022 với nhiều cải tiến về công nghệ cũng như vẻ ngoài cao cấp, sang chảnh hợp với gu thẩm mỹ đại chúng. Những chiếc điện thoại đến từ nhà Táo Khuyết nhận được rất nhiều sự kỳ vọng của thị trường ngay từ khi chưa ra mắt. Vậy liệu những chiếc flagship đến từ công ty công nghệ hàng đầu thế giới này có làm bạn thất vọng? Cùng khám phá những điều thú vị về iPhone 14 Pro Max ở bài viết dưới đây nhé.', '2022-11-23', 40, 13),
(8, 'iPhone 11 I Chính hãng VN/A', 14990000, 10890000, '3_225.jpg', 'Nguồn tin từ LeaksApplePro cho biết Apple nhiều khả năng sẽ khai tử chiếc iPhone 11, sau khi trình làng thế hệ iPhone mới vào tháng 9 sắp tới đây. Cho đến thời điểm hiện tại, iPhone 11 không còn là sản phẩm mới nhất hay tốt nhất của Táo khuyết. Tuy nhiên, theo nhận định từ Toms Guide, với mức giá giảm xuống cực hấp dẫn như hiện tại, người dùng khó có thể tìm được một chiếc smartphone nào tốt hơn.', '2022-11-23', 20, 13),
(9, 'Samsung Galaxy S22 Ultra', 30990000, 24890000, 'sm-s908_galaxys22ultra_front_burgundy_211119.jpg', 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt với tên gọi là Samsung Galaxy S22 Ultra với nhiều cải tiến đáng giá. Mẫu điện thoại cao cấp đến từ Samsung này có nhiều thay đổi từ thiết kế, cấu hình cho đến camera. Vậy siêu phẩm này có gì mới, giá bao nhiêu và có nên mua không? Hãy cùng tìm hiểu chi tiết ngay bên dưới nhé!', '2022-11-23', 11, 6),
(10, 'Samsung Galaxy Z Fold4', 40990000, 34990000, 'samsung_galaxy_z_fold_4-7.jpg', 'Galaxy Z Fold3 vốn đã rất nổi bật thì mới đây, sự xuất hiện của điện thoại gập mới Samsung Galaxy Z Fold 4 lại càng hấp dẫn nhiều người dùng hơn khi sở hữu thiết kế gập màn hình mới cùng với những cải tiến cho trải nghiệm nhân đôi. Vậy chiếc smartphone màn hình gập cao cấp thế hệ mới có gì mới, giá bao nhiêu và có nên mua không? Cùng tìm hiểu nhé!', '2022-11-23', 8, 6),
(11, 'Samsung Galaxy Z Flip4 ', 23990000, 20590000, 'samsung_galaxy_z_flip_m_i_2022-1_1.jpg', 'Tiếp tục là một mẫu smartphone màn hình gập độc đáo, đầy lôi cuốn và mới mẻ từ hãng công nghệ Hàn Quốc, dự kiến sẽ có tên là Samsung Galaxy Z Flip 4 với nhiều nâng cấp. Đây hứa hẹn sẽ là một siêu phẩm bùng nổ trong thời gian tới và thu hút được sự quan tâm của đông đảo người dùng với nhiều cải tiến từ ngoại hình, camera, bộ vi xử lý và viên pin được nâng cấp.', '2022-11-23', 6, 6),
(12, 'Samsung Galaxy A73 (5G)', 12990000, 11090000, 'samsung-galaxy-a73-1-600x600.jpg', 'Năm 2022 hứa hẹn sẽ là một năm rất đáng trông đợi đối với những ai là fan của thương hiệu điện thoại Samsung. Mới đây, hãng sẽ tiếp tục cho ra mắt nhiều smartphone với sự cải tiến trong thiết kế và cấu hình, trong đó phải kể đến chiếc Samsung A73 với nhiều cải tiến so với thế hệ trước. Vậy sản phẩm có gì nổi bật, giá bao nhiêu và liệu có nên mua không? Tìm hiểu ngay nhé!', '2022-11-23', 8, 6),
(13, 'Samsung Galaxy S22', 21990000, 17490000, 'sm-s901_galaxys22_front_pinkgold_211122.jpg', 'Đây được xem là một trong những cái tên đáng được mong chờ nhất trong năm 2021. Sở hữu thiết kế đẹp mắt cùng hiệu năng mạnh mẽ, điện thoại Samsung S22 hứa hẹn đây sẽ là chiếc smartphone làm mưa làm gió trên thị trường ngay từ khi được ra mắt. Đây sẽ là sự lựa chọn không thể nào thích hợp hơn dành cho bạn.', '2022-11-23', 10, 6),
(14, 'OPPO Reno8', 8990000, 8390000, 'oppo-reno-8-didongviet.jpg', 'OPPO Reno8 - chuyên gia chụp ảnh chân dung hàng đầu nhờ sự kết hợp giữa cảm biến cao cấp Sony IMX709(camera trước) và IMX766(camera sau) với ống kính Micro30x. Ngoài ra, phiên bản Reno 8 mang lại cho người dùng khả năng cân bằng cuộc sống theo khung giờ 8 tiếng giúp làm việc hiệu quả và nghỉ ngơi đầy đủ. Hiệu năng mà OPPO Reno 8 sở hữu 8GB RAM, 256GB bộ nhớ trong đi cùng với vi xử lý MediaTek Dimensity 1300 giúp tối ưu các tác vụ hiệu quả cùng hiệu năng chơi game đỉnh cao.', '2022-12-14', 3, 5),
(15, 'OPPO Reno7 4G', 8990000, 6990000, 'OPPO-Reno7-4G-Thumb-cam-1-600x600.jpg', 'Hãng OPPO đã giới thiệu OPPO Reno7 4G tại thị trường Việt Nam vào cuối tháng 4. Dường như phiên bản này chỉ thiếu đi kết nối 5G còn các yếu tố khác như thiết kế, màn hình, hệ thống camera đều không có quá nhiều sự thay đổi. Vậy phiên bản 4G này có đáng để trải nghiệm không, chất lượng ra sao hãy cùng tìm hiểu ngay sau đây.', '2022-12-14', 2, 5),
(16, 'OPPO A77s', 6290000, 5990000, 'oppo-a77s-xanh-thumb-1-200x200.jpg', 'Sau màn ra mắt thành công của OPPO A77, công ty công nghệ hàng đầu xứ Trung đã có màn nâng cấp ngoạn mục cho dòng điện thoại này bằng cách cho ra mắt OPPO A77s. Vì là phiên bản nâng cấp của dòng điện thoại tầm trung siêu hot nên những chiếc A77s nhận được rất nhiều sự quan tâm. Để tìm hiểu chi tiết hơn về OPPO A77s hãy đọc bài viết dưới đây nhé.', '2022-12-14', 0, 5),
(17, 'OPPO A57', 4490000, 4290000, 'oppo-a57-xanh-thumb-1-600x600.jpg', 'Với thiết kế mang ngôn ngữ OPPO Glow trứ danh, điện thoại OPPO A57 tuy giản đơn mà vẫn sang trọng làm toát lên vẻ lịch lãm, quý phái cho người sở hữu được chiếc smartphone này. Trọng lượng điện thoại OPPO A57 chỉ 147g và kích thước điện thoại chỉ 149.1 x 72.9 mm nên khá mỏng và nhẹ, thuận tiện cầm nắm, bỏ túi hay balo dễ dàng. Điện thoại OPPO A57 được thiết kế với các tùy chọn màu sắc hấp dẫn như Đen, Xanh đầy mê hoặc.', '2022-12-14', 0, 5),
(18, 'OPPO Reno8 Pro 5G', 18990000, 17990000, 'oppo-reno8-pro-thumb-xanh-1-600x600.jpg', 'Điện thoại OPPO Reno8 Pro được trang bị chip kép cho hiệu năng vượt trội. Trong đó chip MediaTek Dimensity 8100-Max được sản xuất trên tiến trình 5nm với 8 nhân giúp hiệu năng được cải thiện vượt trội tới 12% CPU và 29% GPU, hiệu suất năng lượng cải thiện 50%. Con chip mạnh mã được chứng minh khi đo điểm hiệu năng Antutu Benchmark lên tới 827.026.', '2022-12-14', 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `ma_loai` int(10) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`ma_loai`, `ten_loai`, `icon`) VALUES
(5, 'Oppo', ''),
(6, 'Samsung', ''),
(13, 'iPhone', ''),
(14, 'Vivo', ''),
(15, 'Nokia', ''),
(16, 'Realme', ''),
(17, 'ASUS', ''),
(18, 'OnePlus', ''),
(19, 'Nubia', ''),
(21, 'Tecno', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ma_tk`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_mmtk` (`ma_tk`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bill` (`id_bill`),
  ADD KEY `lk_mtk` (`ma_tk`),
  ADD KEY `lk_amsp` (`ma_sp`);

--
-- Chỉ mục cho bảng `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_tk` (`ma_tk`),
  ADD KEY `lk_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `lk_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT cho bảng `commentary`
--
ALTER TABLE `commentary`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ma_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_mmtk` FOREIGN KEY (`ma_tk`) REFERENCES `account` (`ma_tk`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `lk_amsp` FOREIGN KEY (`ma_sp`) REFERENCES `product` (`ma_sp`),
  ADD CONSTRAINT `lk_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_mtk` FOREIGN KEY (`ma_tk`) REFERENCES `account` (`ma_tk`);

--
-- Các ràng buộc cho bảng `commentary`
--
ALTER TABLE `commentary`
  ADD CONSTRAINT `lk_sp` FOREIGN KEY (`ma_sp`) REFERENCES `product` (`ma_sp`),
  ADD CONSTRAINT `lk_tk` FOREIGN KEY (`ma_tk`) REFERENCES `account` (`ma_tk`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_loai` FOREIGN KEY (`ma_loai`) REFERENCES `type` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
