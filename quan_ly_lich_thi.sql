-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 02:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_lich_thi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `MaAD` varchar(20) NOT NULL,
  `TenAD` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `AnhDD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`MaAD`, `TenAD`, `Email`, `MatKhau`, `AnhDD`) VALUES
('AD001', 'Nguyễn Thị Mỹ Yến', 'nguyenthimyyen3018@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/admin.png'),
('AD002', 'Cao Ka Ka', 'caokaka2002@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/admin.png'),
('AD003', 'Nguyễn Thanh Trúc', 'nguyenthanhtruc2002@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `MaBM` varchar(10) NOT NULL,
  `TenBM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`MaBM`, `TenBM`) VALUES
('BM001', 'Công nghệ thông tin'),
('BM002', 'Cơ khí - Động lực'),
('BM003', 'Điện - Điện tử'),
('BM004', 'Xây dựng');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) NOT NULL,
  `HoTenGV` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhauGV` varchar(32) NOT NULL,
  `SdtGV` varchar(20) NOT NULL,
  `MaBM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `HoTenGV`, `Email`, `MatKhauGV`, `SdtGV`, `MaBM`) VALUES
('GV001', 'Võ Thành C', 'thanhc2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0377523393', 'BM001'),
('GV002', 'Nguyễn Hoàng Duy Thiện', 'duythien2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0288567993', 'BM001');

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `MaHT` int(11) NOT NULL,
  `TenHT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinhthuc`
--

INSERT INTO `hinhthuc` (`MaHT`, `TenHT`) VALUES
(1, 'Lý thuyết'),
(2, 'Thực hành'),
(3, 'Báo cáo');

-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

CREATE TABLE `hocky` (
  `MaHK` int(11) NOT NULL,
  `TenHK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichthi`
--

CREATE TABLE `lichthi` (
  `MaLT` int(11) NOT NULL,
  `TenLT` varchar(100) NOT NULL,
  `NgayBD` date NOT NULL,
  `TGThi` time NOT NULL,
  `TietBD` int(11) NOT NULL,
  `PhongThi` varchar(10) NOT NULL,
  `MaHT` int(11) NOT NULL,
  `MaNH` varchar(10) NOT NULL,
  `MaHK` int(11) NOT NULL,
  `MaMH` varchar(10) NOT NULL,
  `MaGV` varchar(10) NOT NULL,
  `MaLop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(50) NOT NULL,
  `MaBM` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaBM`) VALUES
('DA20COT', 'Đại học Công nghệ ô tô khoá 20', 'BM002'),
('DA20KD', 'Đại học Kỹ thuật điện khoá 20', 'BM003'),
('DA20TT', 'Đại học Công nghệ thông tin khoá 20', 'BM001'),
('DA20XD', 'Đại học Xây dựng khoá 20', 'BM004');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) NOT NULL,
  `TenMH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
('220222', 'Kỹ thuật lập trình'),
('220286', 'Thiết kế web nâng cao'),
('220290', 'Anh văn chuyên ngành Công nghệ thông tin'),
('220295', 'Lập trình web'),
('234123', 'Thiết kế web cơ bản và nâng cao');

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

CREATE TABLE `namhoc` (
  `MaNH` varchar(10) NOT NULL,
  `TenNH` varchar(20) NOT NULL,
  `TGBD` date NOT NULL,
  `TGKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MaNH`, `TenNH`, `TGBD`, `TGKT`) VALUES
('NH2021', '2020 - 2021', '2020-12-09', '2021-08-01'),
('NH2122', '2021 - 2022', '2021-09-05', '2022-08-01'),
('NH2223', '2022 - 2023', '2022-09-05', '2023-06-09'),
('NH2324', '2023 - 2024', '2023-12-15', '2024-12-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MaAD`);

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MaBM`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaBM` (`MaBM`);

--
-- Indexes for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`MaHT`);

--
-- Indexes for table `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHK`);

--
-- Indexes for table `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`MaLT`),
  ADD KEY `MaHK` (`MaHK`),
  ADD KEY `MaHT` (`MaHT`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `lichthi_ibfk_4` (`MaMH`),
  ADD KEY `MaNH` (`MaNH`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaBM` (`MaBM`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Indexes for table `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`MaNH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hocky`
--
ALTER TABLE `hocky`
  MODIFY `MaHK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `MaLT` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaBM`) REFERENCES `bomon` (`MaBM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_2` FOREIGN KEY (`MaNH`) REFERENCES `namhoc` (`MaNH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_3` FOREIGN KEY (`MaHK`) REFERENCES `hocky` (`MaHK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_4` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_5` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_6` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaBM`) REFERENCES `bomon` (`MaBM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
