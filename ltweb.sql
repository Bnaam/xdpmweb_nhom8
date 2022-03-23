-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 08:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `mabv` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `madm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`mabv`, `tieude`, `noidung`, `hinh`, `madm`) VALUES
(2, 'THỜI TRANG THỂ THAO, DẠO PHỐ CUỐI TUẦN PHÁI MẠNH ĐỪNG BỎ QUA', 'Thời trang cho nam giới có muôn vàn cách mix & match trang phục phù hợp với hoàn cảnh, địa điểm khác nhau. Và để phái mạnh dễ dàng hơn khi phối đồ, dưới đây Áo thun VNXK sẽ gợi ý về cách phối áo thun nam đẹp thể thao, dạo phố cuối tuần cực chất.', 'phoi-do-thoi-trang-nam.jpg', 1),
(3, 'PHỐI ÁO PHÔNG NAM ĐEN THEO MÙA', 'Chàng trai phải làm cách nào để “hô biến” bản thân với trang phục đơn giản với áo phông nam đen?<br>\r\nMùa xuân – hè, thu – đông phải phối đồ như thế nào là phù hợp?\r\nCùng Áo thun VNXK tìm hiểu qua nội dung bài viết dưới đây nhé!', 'phoi-ao-thun-den-nam-thu-dong-style-3.jpg', 1),
(4, 'ÁO THUN CÁ TÍNH PHÙ HỢP MÀU DA NAM GIỚI', 'Việc lựa chọn áo thun cá tính, thời trang phù hợp với làn da không phải dễ, nhất là với nam giới. Áo thun VNXK sẽ giúp bạn chọn được những chiếc áo thun thích hợp với màu da qua bài viết dưới đây.<br>\r\n\r\nCHỌN ÁO THUN CÁ TÍNH PHÙ HỢP MÀU DA NAM GIỚI<br>\r\n\r\nMÀU DA TRẮNG NHẠT<br>\r\nĐối với nam giới sở hữu làn da trắng nhạt thì những tone màu đậm, rực rỡ, tương phản sẽ mang lại điểm nhấn cho trang phục.', 'aothun.jpg', 1),
(7, 'Quần Kaki - Loại quần nam được ưa chuộng nhất', 'Thiết kế tiếp theo mà bạn không nên bỏ qua chính là quần Kaki. Với form dáng đứng và chất vải không nhăn, loại quần nam này giúp thể hiện sự mạnh mẽ, phóng khoáng của phái mạnh. <br>\r\n\r\nBên cạnh đó, bạn có thể tham khảo một số mẫu quần Kaki dành riêng cho dân văn phòng. Những thiết kế này thường có tông màu tối, mang vẻ đẹp thời thượng, sang trọng và lịch lãm.', 'cac-loai-quan-nam.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giatien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madh`, `masp`, `soluong`, `giatien`) VALUES
(39, 19, 21, 2, 300000),
(40, 19, 30, 4, 990000),
(41, 21, 26, 1, 345000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucbaiviet`
--

CREATE TABLE `danhmucbaiviet` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucbaiviet`
--

INSERT INTO `danhmucbaiviet` (`madm`, `tendm`) VALUES
(1, 'Áo'),
(2, 'Quần');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`madm`, `tendm`) VALUES
(7, 'Áo thun'),
(8, 'Quần kaki'),
(11, 'Quần Jean');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL DEFAULT 'Chờ xử lý',
  `ngaydathang` date NOT NULL DEFAULT current_timestamp(),
  `ngaygiaohang` date DEFAULT NULL,
  `diachi` varchar(50) NOT NULL,
  `makh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `tinhtrang`, `ngaydathang`, `ngaygiaohang`, `diachi`, `makh`) VALUES
(19, 'Chờ xử lý', '2022-03-17', NULL, '', 27),
(21, 'Chờ xử lý', '2022-03-21', NULL, '', 27);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `giamoi` double NOT NULL,
  `giacu` double DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `mausac` varchar(30) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `madm` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giamoi`, `giacu`, `soluong`, `mausac`, `hinh`, `madm`, `mota`) VALUES
(21, 'ÁO THUN POLO SPKM', 150000, NULL, 2, 'Trắng', 'ao-thun-nam-form-rong-tre-trung-849-1.jpg', 7, '213'),
(22, 'Áo thun nam new-york', 170000, NULL, 2, 'Trắng', 'ao-thun-nam-new-york-687-1.jpg', 7, 'Áo ....'),
(23, 'Áo Phông Nam Thể Thao Tay Ngắn', 180000, NULL, 12, 'Xanh Trắng', 'ao-thun-1.jpg.jpg', 7, '...'),
(24, 'Áo thun nam ngắn tay kẻ sọc ngang', 90000, NULL, 5, 'Trắng', 'ao-thun-nam-tay-ngan.jpg', 7, '..'),
(25, 'GIORDANO Áo Thun Polo Họa Tiết Đơn Giản', 356000, NULL, 0, 'Xanh rêu', 'ao-thun-hoa-tiet.jpg', 7, '..'),
(26, 'QUẦN KAKI PHỐI DÂY SỌC QK006', 345000, NULL, 2, 'Nâu', 'quan-kaki-phoi-day-soc.jpg', 8, '..'),
(27, 'QUẦN KAKI TRƠN CĂN BẢN', 395000, NULL, 12, 'Xám', 'quan-kaki-tron-can-ban.jpg', 8, '..'),
(28, 'QUẦN KAKI TÚI SAU CÓ NẮP', 345000, NULL, 0, 'Đen', 'quan-kaki-tui-sau.jpg', 8, '..'),
(29, 'QUẦN JEANS THÊU LOGO', 475000, NULL, 1, 'Đen', 'quan-jeans-theu-logo.jpg', 11, '..'),
(30, 'QUẦN JEAN TRƠN', 495000, NULL, 2, 'Xanh', 'quan-jean-tron.jpg', 11, '..');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `sdt` char(10) NOT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'User',
  `trangthai` varchar(50) NOT NULL DEFAULT 'Hoạt động',
  `gioitinh` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`makh`, `tenkh`, `email`, `password`, `sdt`, `diachi`, `role`, `trangthai`, `gioitinh`) VALUES
(26, 'Tân Bỉnh Nam123', 'nam@gmail.com', '202cb962ac59075b964b07152d234b70', '0903865532', '123', 'Admin', 'Hoạt động', 'Nam'),
(27, 'Tăng Quang Huy', 'huy@gmail.com', '202cb962ac59075b964b07152d234b70', '0902546454', 'S', 'User', 'Hoạt động', 'Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`mabv`),
  ADD KEY `madm_fk` (`madm`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_madh` (`madh`),
  ADD KEY `fk_masp` (`masp`);

--
-- Indexes for table `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `fk_makh` (`makh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_madm` (`madm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`makh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `mabv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `madm_fk` FOREIGN KEY (`madm`) REFERENCES `danhmucbaiviet` (`madm`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_madh` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `fk_masp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_makh` FOREIGN KEY (`makh`) REFERENCES `user` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
