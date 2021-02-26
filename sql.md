-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 18, 2020 at 08:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

CREATE TABLE `administrations` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrations`
--

INSERT INTO `administrations` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8_bin NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8_bin NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(60) COLLATE utf8_bin NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(50) COLLATE utf8_bin NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` bit(1) NOT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `tinh_trang` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `dac_biet`, `so_luong`, `so_luot_xem`, `ngay_nhap`, `mo_ta`, `tinh_trang`) VALUES
(2, 'Quần Tây Âu', 2000, 0.2, 'product-15.jpg', 2, b'0', 200, 1000, '2020-10-18', 'a product from famous store!', '1');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) COLLATE utf8_bin NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_bin NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `hinh` varchar(50) COLLATE utf8_bin NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `vai_tro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
('DucNH', 'iloveyou', 'Nguyễn Hoàng Đức', 'ducnh@gmail.com', 'maxresdefault.jpg', b'1', b'0'),
('HoaPT', 'iloveyou', 'PHẠM THỊ HÒA', 'hoapt@gmail.com', 'resus.jpg', b'1', b'1'),
('teonv', 'iloveyou', 'Nguyễn Văn Tèo', 'teonv@gmail.com', 'messi.jpg', b'1', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Áo'),
(2, 'Quần'),
(3, 'Phụ kiện'),
(1002, 'Máy ảnh'),
(1003, 'Điện thoại'),
(1004, 'Nước hoa'),
(1005, 'Nữ trang'),
(1006, 'Nón thời trang'),
(1007, 'Túi xách du lịch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `FK_KhachHang_BinhLuan` (`ma_kh`),
  ADD KEY `FK_HangHoa_BinhLuan` (`ma_hh`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `FK_Loai_HangHoa` (`ma_loai`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `FK_HangHoa_BinhLuan` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_KhachHang_BinhLuan` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `FK_Loai_HangHoa` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
