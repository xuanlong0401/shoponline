-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2022 lúc 10:48 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dienthoai`
--
CREATE DATABASE IF NOT EXISTS `dienthoai` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `banhngottrunghieu`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` varchar(20) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `phuongthucthanhtoan` int(11) NOT NULL,
  `id_hdct` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `dequi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `dequi`) VALUES
(1, 'BÁNH TUYẾT ', 1),
(2, 'BÁNH BAO ', 1),
(3, 'CHẢ GHẸ', 2),
(4, 'CHẢ GIÒ ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `idht` int(11) NOT NULL,
  `chude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaygui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idnd` int(11) NOT NULL,
  `tennd` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`idnd`, `tennd`, `username`, `password`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`, `phanquyen`) VALUES
(5, 'xuân long', 'kenzin', 'e10adc3949ba59abbe56e057f20f883e', '1999-01-04', 'nam', 'longnguyen0401@gmail.com', 813116968, 'tpHCM', '2022-08-11', 1),
(6, 'xuân long', 'adminstator', 'e10adc3949ba59abbe56e057f20f883e', '1999-01-04', 'nam', 'kenzun1@gmail.com', 813116968, 'HCM', '2022-08-11', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `mau` varchar(20) NOT NULL,
  `chitiet` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai1` int(11) NOT NULL,
  `khuyenmai2` varchar(255) NOT NULL,
  `madm` int(11) NOT NULL,
  `ngaycapnhat` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhanh`, `mau`, `chitiet`, `soluong`, `daban`, `gia`, `khuyenmai1`, `khuyenmai2`, `madm`, `ngaycapnhat`, `trangthai`) VALUES
(1, 'Bánh bao chỉ truyền thống', '202208120641003118-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>B&aacute;nh bao chỉ hay c&ograve;n gọi l&agrave; Perle de Coco rất được ưa chuộng ở Ph&aacute;p trong c&aacute;c nh&agrave; h&agrave;ng Ch&acirc;u &Aacute;. Người ta y&ecirc;u th&iacute;ch m&oacute;n ăn n&agrave;y kh&ocirc;ng chỉ v&igrave; vẻ đẹp của n&oacute; m&agrave; c&ograve;n từ hương thơm rất đặc trưng của dừa, vị b&eacute;o ngọt của đậu xanh h&ograve;a c&ugrave;ng vị nếp dẻo thơm!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, đường, đậu xanh, dừa b&agrave;o</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;ăn liền</p>\r\n', 10000, 2, 10000, 0, '', 2, '2022-08-12', 0),
(2, 'Bánh bao ngọt vị sầu riêng', '20220812062942banh-bao-ngot_1-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>Ng&agrave;y nay b&aacute;nh bao đ&atilde; trở n&ecirc;n quen thuộc với người Việt Nam, một c&aacute;i b&aacute;nh bao c&oacute; thể cung cấp một phần năng lượng thiết yếu cho bữa s&aacute;ng của bạn.</p>\r\n\r\n<p>B&aacute;nh bao gồm lớp vỏ l&agrave; bột m&igrave;, b&ecirc;n trong nh&acirc;n rất đa dạng, mỗi loại nh&acirc;n tạo n&ecirc;n một hương vị thơm ngon ri&ecirc;ng đặc trưng của b&aacute;nh, c&ugrave;ng với h&igrave;nh d&aacute;ng ngộ nghĩnh, c&aacute;ch l&agrave;m tỉ mỉ sẽ l&agrave;m cho bạn thấy h&agrave;i l&ograve;ng tuyệt vời ^^.</p>\r\n\r\n<p>Cam đoan kh&ocirc;ng sử dụng chất bảo quản, chất tẩy trắng hay phụ gia độc hại.</p>\r\n\r\n<p>Th&agrave;nh phần: bột m&igrave;, sầu ri&ecirc;ng, &hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng</strong>: đun s&ocirc;i nước hấp 10 ph&uacute;t.</p>\r\n', 10000, 0, 10000, 0, '', 2, '2022-08-12', 0),
(3, 'Bánh bao ngọt truyền thống', '20220812063421banh-bao-ngot_3-2-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>B&aacute;nh bao gồm lớp vỏ l&agrave; bột m&igrave;, b&ecirc;n trong nh&acirc;n rất đa dạng, mỗi loại nh&acirc;n tạo n&ecirc;n một hương vị thơm ngon ri&ecirc;ng đặc trưng của b&aacute;nh, c&ugrave;ng với h&igrave;nh d&aacute;ng ngộ nghĩnh, c&aacute;ch l&agrave;m tỉ mỉ sẽ l&agrave;m cho bạn thấy h&agrave;i l&ograve;ng tuyệt vời ^^.</p>\r\n\r\n<p>Cam đoan kh&ocirc;ng sử dụng chất bảo quản, chất tẩy trắng hay phụ gia độc hại.</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột m&igrave;, đường, &hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;đun s&ocirc;i nước hấp 10 ph&uacute;t.</p>\r\n', 10000, 0, 10000, 0, '', 2, '2022-08-12', 0),
(5, 'Bánh bao nhân thịt trứng', '20220812063525banh-bao-nhan-thit-trung-300x300.jpg', '', '<h1>M&ocirc; tả sản phẩm</h1>\r\n\r\n<h2>B&aacute;nh bao nh&acirc;n thịt trứng muối l&agrave; m&oacute;n b&aacute;nh truyền thống với lớp vỏ b&aacute;nh mềm, mịn, xốp, rất đẹp mắt b&ecirc;n trong l&agrave; nh&acirc;n thịt heo, nấm m&egrave;o, củ sắn, trứng c&uacute;t, trứng muối tạo n&ecirc;n m&ugrave;i vị rất đặc trưng</h2>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thịt, trứng,..</p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng:</strong>&nbsp;hấp l&ecirc;n</p>\r\n', 10000, 0, 17000, 0, '', 2, '2022-08-12', 0),
(6, 'Bánh bao nhân thịt', '20220812063730banh-bao-nhan-thit-1-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>B&aacute;nh bao nh&acirc;n thịt trứng muối l&agrave; m&oacute;n b&aacute;nh truyền thống với lớp vỏ b&aacute;nh mềm, mịn, xốp, rất đẹp mắt b&ecirc;n trong l&agrave; nh&acirc;n thịt heo, nấm m&egrave;o, củ sắn, trứng c&uacute;t, trứng muối tạo n&ecirc;n m&ugrave;i vị rất đặc trưng.</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột m&igrave;, thịt,..</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;đung s&ocirc;i nước, hấp 10 ph&uacute;t</p>\r\n', 10000, 0, 15000, 0, '', 2, '2022-08-12', 0),
(7, 'Bánh bao chỉ truyền thống', '20220812064141Banh-bao-chi-2-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>B&aacute;nh bao chỉ hay c&ograve;n gọi l&agrave; Perle de Coco rất được ưa chuộng ở Ph&aacute;p trong c&aacute;c nh&agrave; h&agrave;ng Ch&acirc;u &Aacute;. Người ta y&ecirc;u th&iacute;ch m&oacute;n ăn n&agrave;y kh&ocirc;ng chỉ v&igrave; vẻ đẹp của n&oacute; m&agrave; c&ograve;n từ hương thơm rất đặc trưng của dừa, vị b&eacute;o ngọt của đậu xanh h&ograve;a c&ugrave;ng vị nếp dẻo thơm!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, đường, đậu xanh, dừa b&agrave;o</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;ăn liền</p>\r\n', 10000, 0, 10000, 0, '', 2, '2022-08-12', 0),
(13, 'Bánh tuyết thiên sứ Trung Hiếu', '20220812070243Banh-tuyet-thien-su-Trung-Hieu_2-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(14, 'Bánh đào tiên ', '20220812070830banhdaotien2.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>Sản xuất tại Việt Nam.</p>\r\n\r\n<p>Kh&aacute;ch inbox khi cần số lượng nh&eacute;.</p>\r\n\r\n<p>Ship hoả tốc trong TP HCM.</p>\r\n\r\n<p>Hạn sử dụng: ngăn m&aacute;t 2 tuần(để ngo&agrave;i nơi tho&aacute;ng m&aacute;t 4-5 ng&agrave;y.)</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, đường, đậu xanh,..</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;ăn liền</p>\r\n\r\n<p>&nbsp;</p>\r\n', 10000, 0, 15000, 0, '', 1, '2022-08-12', 0),
(15, 'Chả ghẹ Farci', '20220812071413ghefarci.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>Chả Ghẹ Farci bao gồm&nbsp;:</p>\r\n\r\n<p>&bull; Thịt ghẹ</p>\r\n\r\n<p>&bull; Mai ghẹ</p>\r\n\r\n<p>&bull; C&agrave; rốt&nbsp;</p>\r\n\r\n<p>&bull; Gạch cua&nbsp;</p>\r\n\r\n<p>&bull; Nấm M&egrave;o</p>\r\n\r\n<p>&bull; Chả c&aacute; thu</p>\r\n\r\n<p>&bull; Thịt heo</p>\r\n\r\n<p>&bull; Trứng g&agrave;</p>\r\n\r\n<p>&bull; Mộc nhĩ...&nbsp;</p>\r\n\r\n<p><strong>C&aacute;ch d&ugrave;ng</strong> : ăn liền</p>\r\n', 10000, 1, 10000, 0, '', 3, '2022-08-12', 0),
(16, 'Chả giò hải sản sốt Mayonnaise ', '20220812071856chagio.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>Chả Gi&ograve; Hải Sản Xốt Mayonnaise được xem l&agrave; một m&oacute;n ăn ngon, ẩn b&ecirc;n trong lớp vỏ gi&ograve;n rụm l&agrave; phần nh&acirc;n hải sản tươi ngọt h&ograve;a quyện với vị b&eacute;o ngậy của xốt Mayonnaise đặc trưng b&eacute;o v&agrave; kh&ocirc;ng tan khiến ai ai cũng th&iacute;ch th&uacute; thưởng thức.</p>\r\n', 10000, 1, 10000, 0, '', 4, '2022-08-12', 0),
(99, 'Bánh tuyết bốn mùa (chanh dây)', '20220812085149banhtuyet_chanhday-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(100, 'Bánh tuyết bốn mùa (dâu)', '20220812090119dau-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(101, 'Bánh tuyết bốn mùa (dừa)', '20220812085240dừa-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(102, 'Bánh tuyết bốn mùa (khoai môn)', '20220812085444banhtuyet_mon-300x300.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(103, 'Bánh tuyết bốn mùa (dứa)', '20220812085547banhtuyet_thom.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0),
(104, 'Bánh tuyết bốn mùa truyền thống', '20220812085620banhtuyet.jpg', '', '<h2>M&ocirc; tả sản phẩm</h2>\r\n\r\n<p>L&agrave; b&aacute;nh r&atilde; đ&ocirc;ng ăn liền, lớp vỏ dai dai kết hợp với kem m&aacute;t lạnh b&ecirc;n trong kh&oacute; c&oacute; thể cưỡng lại được.</p>\r\n\r\n<p>Ngon tuyệt c&uacute; m&egrave;o nh&eacute;!!!</p>\r\n\r\n<p><strong>Th&agrave;nh phần:</strong>&nbsp;bột nếp, thạch tr&aacute;i c&acirc;y, kem,&hellip;</p>\r\n\r\n<p><strong>C&aacute;ch sử dụng:</strong>&nbsp;r&atilde; đ&ocirc;ng 3- 5 ph&uacute;t d&ugrave;ng trực tiếp</p>\r\n', 10000, 0, 10000, 0, '', 1, '2022-08-12', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hdct`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`idht`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idnd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_hdct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `idht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
