-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 05:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlfurama`
--

-- --------------------------------------------------------

--
-- Table structure for table `bophan`
--

CREATE TABLE `bophan` (
  `IDBoPhan` int(11) NOT NULL,
  `TenBoPhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bophan`
--

INSERT INTO `bophan` (`IDBoPhan`, `TenBoPhan`) VALUES
(1, 'SaleMarketing'),
(2, 'HanhChinh'),
(3, 'PhucVu'),
(4, 'QuanLy');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `IDDichVu` int(11) NOT NULL,
  `TenDichVu` varchar(55) NOT NULL,
  `DienTich` int(11) NOT NULL,
  `SoTang` int(11) NOT NULL,
  `SoNguoiToiDa` int(11) NOT NULL,
  `IdKieuThue` int(11) NOT NULL,
  `TrangThai` varchar(50) NOT NULL,
  `TieuChuanPhong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`IDDichVu`, `TenDichVu`, `DienTich`, `SoTang`, `SoNguoiToiDa`, `IdKieuThue`, `TrangThai`, `TieuChuanPhong`) VALUES
(1, 'Villa 01', 150, 3, 5, 1, 'Con Trong', '5 sao'),
(2, 'House', 50, 1, 5, 10, 'Con Trong', '4 Sao');

-- --------------------------------------------------------

--
-- Table structure for table `dichvudikem`
--

CREATE TABLE `dichvudikem` (
  `IdDichVuDiKem` int(11) NOT NULL,
  `TenDichVu` varchar(55) NOT NULL,
  `Gia` int(11) NOT NULL,
  `DonVi` varchar(11) NOT NULL,
  `TrangThaiKhaiDung` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dichvudikem`
--

INSERT INTO `dichvudikem` (`IdDichVuDiKem`, `TenDichVu`, `Gia`, `DonVi`, `TrangThaiKhaiDung`) VALUES
(1, 'Karaoke', 100000, 'Gio', 'ConPhong'),
(2, 'Massage', 90000, 'Gio', 'ConPhong'),
(3, 'ThucAn', 100000, 'Suat', 'Con'),
(4, 'ThucUong', 20000, 'Chai', 'Con'),
(5, 'PhuongTienDiLai', 50000, 'Chuyen', 'Con'),
(6, 'HoBoi', 0, 'Cai', 'DiKemVila'),
(7, 'SanTennis', 100000, 'Gio', 'ConSan');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `IDHopDong` int(10) NOT NULL,
  `IdNhanVien` int(10) NOT NULL,
  `IdKhachHang` int(10) NOT NULL,
  `IdDichVu` int(10) NOT NULL,
  `NgayLamHopDong` date NOT NULL,
  `NgayBatDau` date NOT NULL,
  `NgayKetThuc` date NOT NULL,
  `TienDatCoc` int(15) NOT NULL,
  `TongTien` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`IDHopDong`, `IdNhanVien`, `IdKhachHang`, `IdDichVu`, `NgayLamHopDong`, `NgayBatDau`, `NgayKetThuc`, `TienDatCoc`, `TongTien`) VALUES
(1, 1, 1, 1, '2019-09-11', '2019-09-12', '2019-09-18', 2000000, 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `hopdongchitiet`
--

CREATE TABLE `hopdongchitiet` (
  `IDHopDong` int(10) NOT NULL,
  `iDDichVuDiKem` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hopdongchitiet`
--

INSERT INTO `hopdongchitiet` (`IDHopDong`, `iDDichVuDiKem`, `SoLuong`) VALUES
(1, 1, 3),
(1, 2, 1),
(1, 3, 5),
(1, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKhachHang` int(11) NOT NULL,
  `IDLoaiKhach` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SoCMND` int(11) NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`IDKhachHang`, `IDLoaiKhach`, `HoTen`, `NgaySinh`, `SoCMND`, `DienThoai`, `Email`, `DiaChi`) VALUES
(1, 3, 'Trinh Ngoc Tuan', '1994-09-15', 12345678, 989666888, 'ngoctuan.qhvn@gmail.com', 'ThanhKhe-DaNang'),
(3, 1, 'Huynh Tan Dai', '1999-11-11', 205123456, 982982999, 'huynhtandai95@gmail.com', 'Quang Nam');

-- --------------------------------------------------------

--
-- Table structure for table `kieuthue`
--

CREATE TABLE `kieuthue` (
  `IDKieuThue` int(11) NOT NULL,
  `TenKieuThue` varchar(50) NOT NULL,
  `GiaThue` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kieuthue`
--

INSERT INTO `kieuthue` (`IDKieuThue`, `TenKieuThue`, `GiaThue`) VALUES
(1, 'VillaGio', 1000000),
(2, 'VillaNgay', 12000000),
(3, 'VillaThang', 300000000),
(4, 'VillaNam', 3000000000),
(5, 'RoomGio', 200000),
(6, 'RoomNgay', 3000000),
(7, 'RoomThang', 80000000),
(8, 'RoomNam', 800000000),
(9, 'HouseGio', 400000),
(10, 'HouseNgay', 6000000),
(11, 'HouseThang', 16000000),
(12, 'HouseNam', 1600000000);

-- --------------------------------------------------------

--
-- Table structure for table `loaikhach`
--

CREATE TABLE `loaikhach` (
  `IDLoaiKhach` int(11) NOT NULL,
  `TenLoaiKhach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaikhach`
--

INSERT INTO `loaikhach` (`IDLoaiKhach`, `TenLoaiKhach`) VALUES
(1, 'Diamond'),
(2, 'Platinium'),
(3, 'Gold'),
(4, 'Silver'),
(5, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNhanVien` int(11) NOT NULL,
  `TenNhanVien` varchar(50) NOT NULL,
  `IDViTri` int(11) NOT NULL,
  `IDTrinhDo` int(11) NOT NULL,
  `IDBoPhan` int(11) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SoCMND` int(11) NOT NULL,
  `Luong` int(11) NOT NULL,
  `SDT` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`IDNhanVien`, `TenNhanVien`, `IDViTri`, `IDTrinhDo`, `IDBoPhan`, `NgaySinh`, `SoCMND`, `Luong`, `SDT`, `Email`, `DiaChi`) VALUES
(1, 'Le Dinh Thoa', 5, 5, 4, '1990-07-19', 12345678, 10000000, '0909111222', 'huynhtandai95@gmail.com', 'Thanh Khe - Da Nang');

-- --------------------------------------------------------

--
-- Table structure for table `quanlyxe`
--

CREATE TABLE `quanlyxe` (
  `id` int(11) NOT NULL,
  `BienSoXe` varchar(15) NOT NULL,
  `ThoiGianVao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quanlyxe`
--

INSERT INTO `quanlyxe` (`id`, `BienSoXe`, `ThoiGianVao`) VALUES
(0, '92L11001', '2019-09-18 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdo`
--

CREATE TABLE `trinhdo` (
  `IDTrinhDo` int(11) NOT NULL,
  `TenTrinhDo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trinhdo`
--

INSERT INTO `trinhdo` (`IDTrinhDo`, `TenTrinhDo`) VALUES
(1, 'THPT'),
(2, 'TrungCap'),
(3, 'CaoDang'),
(4, 'DaiHoc'),
(5, 'ThacSi');

-- --------------------------------------------------------

--
-- Table structure for table `vitri`
--

CREATE TABLE `vitri` (
  `IDViTri` int(11) NOT NULL,
  `TenViTri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitri`
--

INSERT INTO `vitri` (`IDViTri`, `TenViTri`) VALUES
(1, 'LeTan'),
(2, 'PhucVu'),
(3, 'ChuyenVien'),
(4, 'GiamSat'),
(5, 'QuanLy'),
(6, 'GiamDoc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`IDBoPhan`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`IDDichVu`),
  ADD KEY `IdKieuThue` (`IdKieuThue`);

--
-- Indexes for table `dichvudikem`
--
ALTER TABLE `dichvudikem`
  ADD PRIMARY KEY (`IdDichVuDiKem`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`IDHopDong`),
  ADD KEY `IdNhanVien` (`IdNhanVien`),
  ADD KEY `IdKhachHang` (`IdKhachHang`),
  ADD KEY `IdDichVu` (`IdDichVu`);

--
-- Indexes for table `hopdongchitiet`
--
ALTER TABLE `hopdongchitiet`
  ADD PRIMARY KEY (`IDHopDong`,`iDDichVuDiKem`),
  ADD KEY `iDDichVuDiKem` (`iDDichVuDiKem`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKhachHang`),
  ADD KEY `IDLoaiKhach` (`IDLoaiKhach`);

--
-- Indexes for table `kieuthue`
--
ALTER TABLE `kieuthue`
  ADD PRIMARY KEY (`IDKieuThue`);

--
-- Indexes for table `loaikhach`
--
ALTER TABLE `loaikhach`
  ADD PRIMARY KEY (`IDLoaiKhach`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNhanVien`),
  ADD KEY `IDBoPhan` (`IDBoPhan`),
  ADD KEY `IDTrinhDo` (`IDTrinhDo`),
  ADD KEY `IDViTri` (`IDViTri`);

--
-- Indexes for table `quanlyxe`
--
ALTER TABLE `quanlyxe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`IDTrinhDo`);

--
-- Indexes for table `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`IDViTri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bophan`
--
ALTER TABLE `bophan`
  MODIFY `IDBoPhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `IDDichVu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dichvudikem`
--
ALTER TABLE `dichvudikem`
  MODIFY `IdDichVuDiKem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `IDHopDong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaikhach`
--
ALTER TABLE `loaikhach`
  MODIFY `IDLoaiKhach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `IDNhanVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `IDTrinhDo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vitri`
--
ALTER TABLE `vitri`
  MODIFY `IDViTri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD CONSTRAINT `dichvu_ibfk_1` FOREIGN KEY (`IdKieuThue`) REFERENCES `kieuthue` (`IDKieuThue`);

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_ibfk_1` FOREIGN KEY (`IdNhanVien`) REFERENCES `nhanvien` (`IDNhanVien`),
  ADD CONSTRAINT `hopdong_ibfk_2` FOREIGN KEY (`IdKhachHang`) REFERENCES `khachhang` (`IDKhachHang`),
  ADD CONSTRAINT `hopdong_ibfk_3` FOREIGN KEY (`IdDichVu`) REFERENCES `dichvu` (`IDDichVu`);

--
-- Constraints for table `hopdongchitiet`
--
ALTER TABLE `hopdongchitiet`
  ADD CONSTRAINT `hopdongchitiet_ibfk_1` FOREIGN KEY (`IDHopDong`) REFERENCES `hopdong` (`IDHopDong`),
  ADD CONSTRAINT `hopdongchitiet_ibfk_2` FOREIGN KEY (`iDDichVuDiKem`) REFERENCES `dichvudikem` (`IdDichVuDiKem`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`IDLoaiKhach`) REFERENCES `loaikhach` (`IDLoaiKhach`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`IDBoPhan`) REFERENCES `bophan` (`IDBoPhan`),
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`IDTrinhDo`) REFERENCES `trinhdo` (`IDTrinhDo`),
  ADD CONSTRAINT `nhanvien_ibfk_3` FOREIGN KEY (`IDViTri`) REFERENCES `vitri` (`IDViTri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
