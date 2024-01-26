-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 16, 2024 lúc 01:42 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_lich_thi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `MaAD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenAD` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `AnhDD` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`MaAD`, `TenAD`, `Email`, `MatKhau`, `AnhDD`) VALUES
('AD001', 'Nguyễn Mỹ Yến', 'nguyenmyyen3018@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/set.png'),
('AD002', 'Cao Ka Ka', 'caokaka2002@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/set.png'),
('AD003', 'Nguyễn Thanh Trúc', 'nguyenthanhtruc2002@gmail.com', '202cb962ac59075b964b07152d234b70', '/assets/img/set.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `MaBM` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenBM` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`MaBM`, `TenBM`) VALUES
('BM001', 'Công nghệ thông tin'),
('BM002', 'Cơ khí - Động lực'),
('BM003', 'Điện - Điện tử'),
('BM004', 'Xây dựng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `HoTenGV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhauGV` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `SdtGV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaBM` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `HoTenGV`, `Email`, `MatKhauGV`, `SdtGV`, `MaBM`) VALUES
('GV001', 'Võ Thành C', 'thanhc2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0377523393', 'BM001'),
('GV002', 'Lê Minh Tự', 'minhtu2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0288567993', 'BM001'),
('GV003', 'Nguyễn Bá Nhiệm', 'banhiem2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0926789301', 'BM001'),
('GV004', 'Nguyễn Bảo Ân', 'baoan2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0987737406', 'BM001'),
('GV005', 'Trịnh Quốc Việt', 'quocviet2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0977872277', 'BM001'),
('GV006', 'Ngô Thanh Hà', 'thanhha2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0918586973', 'BM002'),
('GV007', 'Phan Tấn Tài', 'tantai2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0914575466', 'BM002'),
('GV008', 'Tăng Tấn Minh', 'tanminh2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0939303.250', 'BM002'),
('GV009', 'Phan Văn Tuân', 'vantuan2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0919762700', 'BM002'),
('GV010', 'Đặng Hoàng Vũ', 'hoangvu2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0948800879', 'BM002'),
('GV011', 'Triệu Quốc Huy', 'quochuy2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0918439231', 'BM003'),
('GV012', 'Lê Thanh Tùng', 'thanhtung2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0908710097', 'BM003'),
('GV013', 'Kim Anh Tuấn', 'anhtuan2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0979166740', 'BM003'),
('GV014', 'Đăng Hữu Phúc', 'huuphuc2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0989049629', 'BM003'),
('GV015', 'Lê Minh Hải', 'minhhai2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0913632937', 'BM003'),
('GV016', 'Huỳnh Văn Hiệp', 'vanhiep2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0963887689', 'BM004'),
('GV017', 'Cao Hữu Lợi', 'huuloi2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0365212064', 'BM004'),
('GV018', 'Ngô Gia Truyền', 'giatruyen2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0966776769', 'BM004'),
('GV019', 'Võ Minh Huy', 'minhhuy2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0907022132', 'BM004'),
('GV020', 'Bùi Phước Hảo', 'phuochao2023@gmail.com', '202cb962ac59075b964b07152d234b70', '0345501368', 'BM004'),
('GV021', 'GV-KTCN', 'nguyenthimyyen3018@gmail.com', '202cb962ac59075b964b07152d234b70', '0369993018', 'BM001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `MaHT` int(11) NOT NULL,
  `TenHT` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthuc`
--

INSERT INTO `hinhthuc` (`MaHT`, `TenHT`) VALUES
(1, 'Lý thuyết'),
(2, 'Thực hành'),
(3, 'Báo cáo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `MaHK` int(11) NOT NULL,
  `TenHK` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`MaHK`, `TenHK`) VALUES
(1, 'Học kỳ I'),
(2, 'Học kỳ II'),
(3, 'Học kỳ III');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `MaLT` int(11) NOT NULL,
  `TenLT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayBD` date NOT NULL,
  `TGThi` int(11) NOT NULL,
  `TietBD` int(11) NOT NULL,
  `PhongThi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHT` int(11) NOT NULL,
  `MaNH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaHK` int(11) NOT NULL,
  `MaMH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Duyet` tinyint(1) NOT NULL DEFAULT 0,
  `LanThi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichthi`
--

INSERT INTO `lichthi` (`MaLT`, `TenLT`, `NgayBD`, `TGThi`, `TietBD`, `PhongThi`, `MaHT`, `MaNH`, `MaHK`, `MaMH`, `MaGV`, `MaLop`, `Duyet`, `LanThi`) VALUES
(12, 'Thi kết thúc học phần Kỹ thuật lập trình', '2024-01-22', 90, 2, 'D71.105', 2, 'NH2324', 2, 'MH002', 'GV001', 'DA22ATT', 1, 1),
(13, 'Thi kết thúc học phần thiết kế web', '2024-01-25', 90, 6, 'C71.205', 2, 'NH2324', 2, 'MH007', 'GV001', 'DA21ATT', 0, 1),
(14, 'Thi kết thúc học phần Công nghệ phần mềm', '2024-01-27', 45, 2, 'C71.202', 3, 'NH2324', 2, 'MH013', 'GV004', 'DA21AI', 2, 2),
(15, 'Thi kết thúc học phần Cơ sở trí tuệ nhân tạo', '2024-01-28', 45, 6, 'C71.202', 3, 'NH2324', 2, 'MH012', 'GV004', 'DA20AI', 1, 1),
(16, 'Thi kết thúc học phần Cơ khí đại cương', '2024-01-23', 90, 1, 'B31.203', 1, 'NH2324', 2, 'MH031', 'GV007', 'DA22CK', 2, 2),
(17, 'Thi kết thúc học phần Anh văn chuyên ngành cơ khí động lực', '2024-01-29', 45, 7, 'B21.205', 1, 'NH2223', 2, 'MH039', 'GV007', 'DA20COT', 0, 1),
(20, 'Thi kết thúc học phần Chi tiết máy', '2024-02-05', 90, 2, 'B31.207', 1, 'NH2324', 2, 'MH034', 'GV009', 'DA20CK', 2, 2),
(21, 'Thi kết thúc học phần Sức bền vật liệu', '2024-02-06', 120, 11, 'D31.1035', 1, 'NH2324', 2, 'MH033', 'GV009', 'DA23COT', 1, 1),
(22, 'Thi kết thúc học phần Nhập môn ngành điện - điện tử', '2024-02-08', 90, 2, 'B31.307', 2, 'NH2324', 1, 'MH027', 'GV012', 'DA23KD', 1, 1),
(23, 'Thi kết thúc học phần An toàn điện', '2024-02-13', 45, 6, 'B11.409', 1, 'NH2324', 1, 'MH021', 'GV012', 'DA22KDHT', 1, 2),
(24, 'Thi kết thúc học phần Kỹ thuật xung số', '2024-02-17', 90, 11, 'B21.303', 1, 'NH2324', 1, 'MH025', 'GV015', 'DA20KDHT', 1, 1),
(25, '', '2024-02-11', 60, 1, 'D31.102', 1, 'NH2324', 1, 'MH026', 'GV015', 'DA22KD', 0, 2),
(26, 'Thi kết thúc học phần Anh văn chuyên ngành xây dựng', '2024-02-10', 45, 11, 'B31.202', 1, 'NH2324', 1, 'MH042', 'GV017', 'DA21XD', 2, 1),
(27, 'Thi kết thúc học phần trắc địa', '2024-02-01', 90, 11, 'D31.104', 1, 'NH2324', 1, 'MH043', 'GV017', 'DA22XD', 2, 1),
(28, 'Thi kết thúc học phần Cơ học đất', '2024-02-09', 90, 6, 'B21.103', 1, 'NH2324', 1, 'MH048', 'GV019', 'DA20XDGT', 1, 2),
(29, 'Thi kết thúc học phần Thuỷ lực công trình', '2024-02-13', 90, 11, 'B31.101', 1, 'NH2324', 1, 'MH049', 'GV019', 'DA23XDGT', 1, 1),
(30, 'Thi kết thúc học phần Lập trình hướng đối tượng', '2024-02-01', 60, 11, 'C71.206', 2, 'NH2324', 1, 'MH006', 'GV001', 'DA22ATT', 2, 1),
(69, 'Thi 1', '2024-01-26', 45, 1, 'C71.202', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 2, 1),
(71, 'Thi 3', '2024-01-21', 45, 1, 'B31.202', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 2, 1),
(72, 'Thi 4', '2024-01-21', 45, 1, 'B31.202', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 1, 1),
(73, 'Thi kết thúc học phần thiết kế web', '2024-01-20', 45, 1, 'C71.202', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 2, 1),
(74, 'Thi kết thúc học phần thiết kế web', '2024-01-28', 45, 1, 'C71.202222', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 1, 1),
(75, 'Thi kết thúc học phần thiết kế web aaaaa', '2024-01-21', 45, 1, 'C71.202', 1, 'NH2021', 1, 'MH001', 'GV021', 'DA20AI', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaBM` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaBM`) VALUES
('DA20AI', 'Đại học Trí tuệ nhân tạo khoá 20', 'BM001'),
('DA20ATT', 'Đại học Công nghệ thông tin khoá 20', 'BM001'),
('DA20CK', 'Đại học Cơ khí khoá 20', 'BM002'),
('DA20COT', 'Đại học Công nghệ ô tô khoá 20', 'BM002'),
('DA20KD', 'Đại học Kỹ thuật điện khoá 20', 'BM003'),
('DA20KDHT', 'Đại học Hệ thống điện khoá 20', 'BM003'),
('DA20XD', 'Đại học Công trình xây dựng khoá 20', 'BM004'),
('DA20XDGT', 'Đại học Công trình giao thông khoá 20', 'BM004'),
('DA21AI', 'Đại học Trí tuệ nhân tạo khoá 21', 'BM001'),
('DA21ATT', 'Đại học Công nghệ thông tin khoá 21', 'BM001'),
('DA21CK', 'Đại học Cơ khí khoá 21', 'BM002'),
('DA21COT', 'Đại học Công nghệ ô tô khoá 21', 'BM002'),
('DA21KD', 'Đại học Kỹ thuật điện khoá 21', 'BM003'),
('DA21KDHT', 'Đại học Hệ thống điện khoá 21', 'BM003'),
('DA21XD', 'Đại học Công trình xây dựng khoá 21', 'BM004'),
('DA21XDGT', 'Đại học Công trình giao thông khoá 21', 'BM004'),
('DA22AI', 'Đại học Trí tuệ nhân tạo khoá 22', 'BM001'),
('DA22ATT', 'Đại học Công nghệ thông tin khoá 22', 'BM001'),
('DA22CK', 'Đại học Cơ khí khoá 22', 'BM002'),
('DA22COT', 'Đại học Công nghệ ô tô khoá 22', 'BM002'),
('DA22KD', 'Đại học Kỹ thuật điện khoá 22', 'BM003'),
('DA22KDHT', 'Đại học Hệ thống điện khoá 22', 'BM003'),
('DA22XD', 'Đại học Công trình xây dựng khoá 22', 'BM004'),
('DA22XDGT', 'Đại học Công trình giao thông khoá 22', 'BM004'),
('DA23AI', 'Đại học Trí tuệ nhân tạo khoá 23', 'BM001'),
('DA23ATT', 'Đại học Công nghệ thông tin khoá 23', 'BM001'),
('DA23CK', 'Đại học Cơ khí khoá 23', 'BM002'),
('DA23COT', 'Đại học Công nghệ ô tô khoá 23', 'BM002'),
('DA23KD', 'Đại học Kỹ thuật điện khoá 23', 'BM003'),
('DA23KDHT', 'Đại học Hệ thống điện khoá 23', 'BM003'),
('DA23XD', 'Đại học Công trình xây dựng khoá 2023', 'BM004'),
('DA23XDGT', 'Đại học Công trình giao thông khoá 23', 'BM004');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenMH` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`) VALUES
('MH001', 'Nhập môn Công nghệ thông tin'),
('MH002', 'Kỹ thuật lập trình'),
('MH003', 'Toán rời rạc'),
('MH004', 'Cấu trúc dữ liệu và giải thuật'),
('MH005', 'Cơ sở dữ liệu'),
('MH006', 'Lập trình hướng đối tượng'),
('MH007', 'Thiết kế web'),
('MH008', 'Anh văn chuyên ngành Công nghệ thông tin'),
('MH009', 'Điện toán đám mây'),
('MH010', 'Phân tích thiết kế hệ thống thông tin'),
('MH011', 'An toàn và bảo mật thông tin'),
('MH012', 'Cơ sở trí tuệ nhân tạo'),
('MH013', 'Công nghệ phần mềm'),
('MH014', 'Hệ quản trị cơ sở dữ liệu'),
('MH015', 'Phát triển ứng dụng hướng dịch vụ'),
('MH016', 'Thống kê và phân tích dữ liệu'),
('MH017', 'Phát triển phần mềm hướng đối tượng'),
('MH018', 'Phát triển ứng dụng web với mã nguồn mở'),
('MH019', 'Chuyên đề ASP.net'),
('MH020', 'Máy học ứng dụng'),
('MH021', 'An toàn điện'),
('MH022', 'Đo lường điện - điện tử'),
('MH023', 'Kỹ thuật cảm biến'),
('MH024', 'Khí cụ điện'),
('MH025', 'Kỹ thuật xung số'),
('MH026', 'Linh kiện điện tử'),
('MH027', 'Nhập môn ngành điện - điện tử'),
('MH028', 'Anh văn chuyên ngành điện - điện tử'),
('MH029', 'Xử lí tín hiệu số'),
('MH030', 'Kỹ thuật vi điều khiển'),
('MH031', 'Cơ khí đại cương'),
('MH032', 'Cơ học kỹ thuật'),
('MH033', 'Sức bền vật liệu'),
('MH034', 'Chi tiết máy'),
('MH035', 'Công nghệ chế tạo máy'),
('MH036', 'Đồ án thiết kế máy'),
('MH037', 'Dung sai và kỹ thuật đo'),
('MH038', 'Cảm biến và đo lường'),
('MH039', 'Anh văn chuyên ngành cơ khí động lực'),
('MH040', 'Nguyên lý máy'),
('MH041', 'Vẽ kỹ thuật xây dựng'),
('MH042', 'Anh văn chuyên ngành xây dựng'),
('MH043', 'Trắc địa'),
('MH044', 'Địa chất công trình'),
('MH045', 'Cơ học kết cấu'),
('MH046', 'Vật liệu xây dựng'),
('MH047', 'Cơ học chất lỏng'),
('MH048', 'Cơ học đất'),
('MH049', 'Thuỷ lực công trình'),
('MH050', 'Tĩnh học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

CREATE TABLE `namhoc` (
  `MaNH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenNH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TGBD` date NOT NULL,
  `TGKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`MaNH`, `TenNH`, `TGBD`, `TGKT`) VALUES
('NH2021', '2020 - 2021', '2020-12-09', '2021-08-01'),
('NH2122', '2021 - 2022', '2021-09-05', '2022-08-01'),
('NH2223', '2022 - 2023', '2022-09-05', '2023-06-09'),
('NH2324', '2023 - 2024', '2023-12-15', '2024-12-15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MaAD`);

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`MaBM`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD KEY `MaBM` (`MaBM`);

--
-- Chỉ mục cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`MaHT`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHK`);

--
-- Chỉ mục cho bảng `lichthi`
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
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaBM` (`MaBM`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`);

--
-- Chỉ mục cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`MaNH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `MaHT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hocky`
--
ALTER TABLE `hocky`
  MODIFY `MaHK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `MaLT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`MaBM`) REFERENCES `bomon` (`MaBM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD CONSTRAINT `lichthi_ibfk_1` FOREIGN KEY (`MaHT`) REFERENCES `hinhthuc` (`MaHT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_2` FOREIGN KEY (`MaNH`) REFERENCES `namhoc` (`MaNH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_3` FOREIGN KEY (`MaHK`) REFERENCES `hocky` (`MaHK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_4` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_5` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lichthi_ibfk_6` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaBM`) REFERENCES `bomon` (`MaBM`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
