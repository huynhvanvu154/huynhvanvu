-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 20, 2019 lúc 04:20 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybenhnhan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benhnhan`
--

DROP TABLE IF EXISTS `benhnhan`;
CREATE TABLE IF NOT EXISTS `benhnhan` (
  `idBN` int(10) NOT NULL AUTO_INCREMENT,
  `HotenBN` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Gioitinh` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ngaysinh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Nghenghiep` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Dantoc` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `Cmt` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`idBN`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `benhnhan`
--

INSERT INTO `benhnhan` (`idBN`, `HotenBN`, `email`, `Gioitinh`, `Ngaysinh`, `Nghenghiep`, `Diachi`, `Dantoc`, `Cmt`) VALUES
(1, 'Huỳnh Văn Cho', 'cho@gmail.com', 'Nam', '10/01/1998', 'Sinh Viên', 'HCM', 'Khơ-Me', '0'),
(20, 'Huỳnh Văn Vũ', 'vu@gmail.com', 'Nam', '01/02/1997', 'Sinh Viên', 'Phù Cát', 'Kinh', '0'),
(21, 'nguyễn văn A', 'A@gmail.com', 'Nam', '10/10/1996', 'Sinh Viên', 'HCM', 'Kinh', '0'),
(22, 'Nguyễn Thị Tèo', 'Teo@gmail.com', 'Nữ', '12/01/1990', 'Nông', 'Ngãi An', 'Kinh', '0'),
(24, 'nguyễn thị Hà', 'ha@gmail.com', 'nữ', '101010', 'nông', 'cát khánh', 'mường', '21'),
(26, 'nguyễn thị Hà', 'ha@gmail.com', 'nữ', '101010', 'nông', 'cát khánh', 'mường', '111111'),
(82, 'huá»³nh thá»‹ má»¹ duyÃªn', 'myduyen@gmail.com', 'ná»¯', '12/12/1990', 'nÃ´ng', 'ngÃ£i an', 'kinh', '123456789'),
(83, 'huá»³nh thá»‹ má»¹ duyÃªn', 'myduyen@gmail.com', 'ná»¯', '12/12/1990', 'nÃ´ng', 'ngÃ£i an', 'kinh', '123456789'),
(84, 'huá»³nh thá»‹ má»¹ duyÃªn', 'myduyen@gmail.com', 'ná»¯', '12/12/1990', 'nÃ´ng', 'ngÃ£i an', 'kinh', '123456789'),
(90, 'HUá»²NH VÄ‚N THÃ”NG', 'thong@gmail', 'nam', '12/12/1212', 'nÃ´ng', 'vÅ©ng tÃ u', 'kinh', '12121111111111111'),
(91, 'HUá»²NH VÄ‚N THÃ”NG', 'thong@gmail', 'nam', '12/12/1212', 'nÃ´ng', 'vÅ©ng tÃ u', 'kinh', '12121111111111111'),
(99, 'HUá»²NH VÄ‚N VÅ¨', 'vanvu@gmail.com', 'nam', '10/10/1996', 'sinh viÃªn', 'bÃ¬nh Ä‘á»‹nh', 'kinh', '215374647'),
(101, 'huá»³nh vÄƒn vÅ©', 'vanvu@gmail.com', 'nam', '10/10/1996', 'nÃ´ng', 'bÃ¬nh Ä‘á»‹nh', 'kinh', '212121212'),
(102, 'a', 'a@a', 'a', 'a', 'a', 'a', 'a', '12'),
(103, 'Ã¡', 'a@a', 'a', 'a', 'a', 'a', 'a', '12'),
(104, 'Ã¡', 'a@a', 'a', 'a', 'a', 'a', 'a', '12'),
(105, 'Ã¡', 'a@a', 'a', 'a', 'a', 'a', 'a', '12'),
(106, 'Ã¡', 'a@a', 'a', 'a', 'a', 'a', 'a', '12'),
(107, 'phat ho', 'hophat@gmail.com', 'nam', '12/12/1212', 'sinh vien', '123123', 'kinh', '123123123'),
(114, '123', '123@123.com', '123', '123', '123', '123', '123', '123'),
(115, '123', '123@123.com', '123', '123', '123', '123', '123', '123'),
(116, '123', '123@123.com', '123', '123', '123', '123', '123', '123'),
(117, 'a', 'a2a@a', 'a', 'a', 'a', 'a', 'a', '1'),
(118, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(119, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(120, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(121, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(122, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(123, 'aaaaaaa', 'aaa@a', 'aaaa', 'aaaaaaa', 'aaaa', 'aaaa', 'aaaaa', '12122'),
(124, 'lao', 'lao@gmail.com', 'nam', '1212', 'sáº¥', 's', 'e', '122');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `benh_an`
--

DROP TABLE IF EXISTS `benh_an`;
CREATE TABLE IF NOT EXISTS `benh_an` (
  `id_benh_an` int(100) NOT NULL AUTO_INCREMENT,
  `ten_benh_an` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `date` date NOT NULL,
  `id_benhnhan` int(100) NOT NULL,
  PRIMARY KEY (`id_benh_an`),
  KEY `id_benhnhan` (`id_benhnhan`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `benh_an`
--

INSERT INTO `benh_an` (`id_benh_an`, `ten_benh_an`, `date`, `id_benhnhan`) VALUES
(137, 'aaaa', '2019-11-15', 1),
(138, 'a', '2019-11-16', 1),
(139, 'aa', '2019-11-16', 1),
(140, '', '2019-11-17', 1),
(141, '', '2019-11-18', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

DROP TABLE IF EXISTS `cauhoi`;
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `id_cauhoi` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_cauhoi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id_cauhoi`, `tieude`, `noidung`, `email`) VALUES
(2, 'a', 'a', 'vu@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmt_name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `cmt_avater` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `cmt_body` text COLLATE utf8_vietnamese_ci NOT NULL,
  `cmt_date` time NOT NULL,
  PRIMARY KEY (`cmt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`cmt_id`, `cmt_name`, `cmt_avater`, `cmt_body`, `cmt_date`) VALUES
(107, 'nhanvien@gmail.com', 'boy.png', ' aaaaaaaaaaaaaa', '22:48:41'),
(103, 'benhnhan@gmail.com', 'boy.png', 'má»‡t quÃ¡ vÅ© Æ¡i', '19:33:10'),
(104, 'benhnhan@gmail.com', 'boy.png', 'má»‡t quÃ¡ vÅ© Æ¡i', '19:34:15'),
(105, 'benhnhan@gmail.com', 'girl.png', ' sÆ°á»›ng quÃ¡ vÅ© Æ¡i', '19:37:50'),
(106, 'benhnhan@gmail.com', 'boy.png', ' phá»‡ lÃ o khÃ¹ng\r\n', '20:52:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donthuoc`
--

DROP TABLE IF EXISTS `donthuoc`;
CREATE TABLE IF NOT EXISTS `donthuoc` (
  `id_donthuoc` int(10) NOT NULL AUTO_INCREMENT,
  `tenthuoc` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `xuatxu` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `loidan` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_benhnhan` int(100) NOT NULL,
  PRIMARY KEY (`id_donthuoc`),
  KEY `id_benhnhan` (`id_benhnhan`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donthuoc`
--

INSERT INTO `donthuoc` (`id_donthuoc`, `tenthuoc`, `xuatxu`, `loidan`, `id_benhnhan`) VALUES
(3, 'alaka', 'asaka', '123', 1),
(4, 'alaka', 'asaka', '123', 1),
(5, 'alaka', 'asaka', '123', 1),
(6, 'alaka', 'asaka', '123', 1),
(9, 'a', 'a', 'a', 20),
(10, 'aaaa', 'aaa', 'aa', 1),
(11, 'vũ', 'v8xa', 'vá', 1),
(12, 'a', 'a', 'a', 1),
(13, 'a', 'a', 'a', 1),
(14, 'alecco', 'hàn quốc', 'alaku', 1),
(15, 'alecco', 'hàn quốc', 'alaku', 1),
(16, 'alecco', 'hàn quốc', 'alaku', 1),
(17, 'alecco', 'hàn quốc', 'alaku', 1),
(18, 'âdadad', 'adad', 'ada', 1),
(19, 'adad', 'đâ', 'adad', 1),
(20, 'aleccosex', 'mỹ', 'ok', 90);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichkham`
--

DROP TABLE IF EXISTS `lichkham`;
CREATE TABLE IF NOT EXISTS `lichkham` (
  `id_lichkham` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `cmt` int(20) NOT NULL,
  `sdt` int(20) NOT NULL,
  `date` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_lichkham`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lichkham`
--

INSERT INTO `lichkham` (`id_lichkham`, `name`, `email`, `cmt`, `sdt`, `date`, `sex`) VALUES
(1, 'HUỲNH VĂN VŨ', 'vu@gmail.com', 123, 123, '1996-10-10', 'Nam'),
(2, 'HUỲNH VĂN VŨ', 'vu@gmail.com', 123, 123, '1996-10-10', 'Nam'),
(3, 'PHỆ LÀO', 'LAO@GMAIL', 123, 123, '0112-10-10', 'NAM'),
(4, 'PHỆ LÀO', 'LAO@GMAIL', 123, 123, '0112-10-10', 'NAM'),
(5, 'PHỆ LÀO', 'LAO@GMAIL', 123, 123, '0112-10-10', 'NAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `birtday` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `role` int(10) NOT NULL,
  `sdt` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `address`, `birtday`, `sex`, `role`, `sdt`, `id`) VALUES
('admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'bình định', '10/10/1996', 'nam', 1, '121332131', 64),
('nhanvien', 'nhanvien@gmail.com', '202cb962ac59075b964b07152d234b70', 'bình định', '101001', 'nam', 2, '122211212', 65),
('benhnhan', 'benhnhan@gmail.com', '202cb962ac59075b964b07152d234b70', 'bình định', '121121', 'nam', 3, '1212212', 66),
('bacsi', 'bacsi@gmail.com', '202cb962ac59075b964b07152d234b70', 'bình định', '121212', 'nam', 4, '12112212', 67);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `benh_an`
--
ALTER TABLE `benh_an`
  ADD CONSTRAINT `benh_an_ibfk_1` FOREIGN KEY (`id_benhnhan`) REFERENCES `benhnhan` (`idBN`);

--
-- Các ràng buộc cho bảng `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD CONSTRAINT `donthuoc_ibfk_1` FOREIGN KEY (`id_benhnhan`) REFERENCES `benhnhan` (`idBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
