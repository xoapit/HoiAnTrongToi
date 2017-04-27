-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 11:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `henho`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBaiViet` int(11) NOT NULL,
  `MaLoai` varchar(10) NOT NULL,
  `TieuDe` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `MaAdmin` varchar(50) NOT NULL,
  `TrangThaiPheDuyet` varchar(20) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`MaBaiViet`, `MaLoai`, `TieuDe`, `NoiDung`, `ThoiGian`, `MaAdmin`, `TrangThaiPheDuyet`) VALUES
(1, 'ML01', 'THÔNG BÁO KẾT QUẢ #MINIGAME HẸN HÒ CÙNG NOO.', 'THÔNG BÁO KẾT QUẢ #MINIGAME HẸN HÒ CÙNG NOO.', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(2, 'ML01', 'TRỰC TIẾP MIỀN NAM: MC TẤN VĂN ( Chu Tấn Văn ) SẼ ĐỒNG HÀNH CÙNG HẸN HÒ RADIO TRÊN VOVGT HỒ CHÍ MINH FM91MHZ', 'TRỰC TIẾP MIỀN NAM: MC TẤN VĂN ( Chu Tấn Văn ) SẼ ĐỒNG HÀNH CÙNG HẸN HÒ RADIO TRÊN VOVGT HỒ CHÍ MINH FM91MHZ', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(3, 'ML01', ' Chú ý đề phòng lừa đảo , lừa tình', ' Chú ý đề phòng lừa đảo , lừa tình', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(4, 'ML01', ' DOWN Dating: Gặp gỡ, Trò chuyện và Hẹn hò với nhau', ' DOWN Dating: Gặp gỡ, Trò chuyện và Hẹn hò với nhau', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(5, 'ML03', ' Nội Quy', ' NỘI QUY NHÓM J2TEAM COMMUNITY \r\nĐể tránh việc bị Kick, Ban hoặc bị xóa bài mà không biết nguyên nhân tại sao, đề nghị các bạn vui lòng đọc kỹ nội quy trước khi tham gia nhóm. \r\nNỘI QUY VỀ TÀI KHOẢN \r\nNhững tài khoản có dạng như sau sẽ KHÔNG được phép tham gia nhóm: \r\nVừa tham gia Facebook được 1-3 ngày. \r\nKhông có ảnh đại diện (sử dụng ảnh mặc định của Facebook). \r\nCố tình sử dụng ảnh đại diện giống BQT gây nhầm lẫn cho thành viên khác. \r\nTài khoản có dấu hiệu là nick ảo, không hoạt động (vừa thay ảnh đại diện, ảnh bìa vài phút trước và không có bài đăng nào trên trang cá nhân). \r\nTài khoản không có tên hiển thị (Facebook ma) hoặc tên sử dụng ký tự đặc biệt. \r\nNỘI QUY ĐĂNG BÀI VIẾT', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(6, 'ML02', ' Chú ý đề phòng lừa đảo , lừa tình2', ' Chú ý đề phòng lừa đảo , lừa tình', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(7, 'ML02', ' Chú ý đề phòng lừa đảo , lừa tình3', ' Chú ý đề phòng lừa đảo , lừa tình', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt'),
(8, 'ML02', ' Chú ý đề phòng lừa đảo , lừa tình', ' Chú ý đề phòng lừa đảo , lừa tình', '2017-04-21 00:00:00', 'user00002', 'Đã Duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `khoauser`
--

CREATE TABLE `khoauser` (
  `MaUser` varchar(50) NOT NULL,
  `LyDoKhoa` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `Khoa` int(11) NOT NULL,
  `MaMod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khoauser`
--

INSERT INTO `khoauser` (`MaUser`, `LyDoKhoa`, `Khoa`, `MaMod`) VALUES
('00001', 'Nhảm', 1, '00002'),
('00002', 'Loãng box', 0, '00003'),
('00003', 'Nội dung không liên quan', 1, '00001'),
('00004', 'Nội dung không lành mạnh', 1, '00001'),
('00005', 'Nội dung đồi trụy', 1, '00001'),
('00006', 'Nội dung không liên quan', 2, '00002');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IdLogin` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(24) NOT NULL,
  `QuyenHan` varchar(20) NOT NULL,
  `isLock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IdLogin`, `Username`, `Password`, `QuyenHan`, `isLock`) VALUES
('user00001', 'phongphong', '123456', 'user', 0),
('user00002', 'xoapit', '123456', 'admin', 0),
('user00003', 'nghile', '111111', 'user', 1),
('user00004', 'phongpham', '122222', 'mod', 0),
('user00005', 'phuocle', '2222222', 'user', 0),
('user00006', 'quanvan', '32111111', 'user', 0),
('user00007', 'tamvan', '122222', 'mod', 0),
('user00008', 'danhvanvo', '122222', 'user', 0),
('user00009', 'tanthai', '123456', 'user', 0),
('user00010', 'conghoa', '123456', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `muctieu`
--

CREATE TABLE `muctieu` (
  `MaMucTieu` varchar(10) NOT NULL,
  `NoiDungMucTieu` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muctieu`
--

INSERT INTO `muctieu` (`MaMucTieu`, `NoiDungMucTieu`) VALUES
('MT01', 'Mong muốn được làm quên và kết bạn với nhiều bạn bè trên khắp mọi nơi'),
('MT02', 'Kết bạn giao lưu'),
('MT03', 'Tìm kiếm người đồng hương'),
('MT04', 'Kết bạn bốn phương'),
('MT05', 'Tìm người kết hôn'),
('MT06', 'Muốn sống ảo'),
('MT07', 'Tìm người hẹn hò'),
('MT08', 'Hãy đến với tôi, hy vọng tôi là nỗi đau của đời bạn, hehe'),
('MT09', 'Muốn xã giao, thế thôi!'),
('MT10', 'Tìm người tâm sự, chia sẻ tâm trạng');

-- --------------------------------------------------------

--
-- Table structure for table `quanhe`
--

CREATE TABLE `quanhe` (
  `MaUser` varchar(50) NOT NULL,
  `MaUserTuongTac` varchar(50) CHARACTER SET utf8 NOT NULL,
  `isHenHo` int(11) NOT NULL,
  `isBanBe` int(11) NOT NULL,
  `ThongTinHenHo` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quanhe`
--

INSERT INTO `quanhe` (`MaUser`, `MaUserTuongTac`, `isHenHo`, `isBanBe`, `ThongTinHenHo`) VALUES
('user00001', 'user00004', 0, 2, 'mình 21 tuổi muốn tìm người yêu'),
('user00001', 'user00010', 2, 2, 'mình 21 tuổi muốn tìm người yêu'),
('user00003', 'user00005', 0, 2, 'MÌnh ở đà nẵng'),
('user00003', 'user00008', 0, 2, 'MÌnh ở đà nẵng'),
('user00004', 'user00001', 0, 2, 'Phạm Đình Phong - Quảng Nam'),
('user00004', 'user00007', 0, 2, 'Phạm Đình Phong - Quảng Nam'),
('user00005', 'user00003', 0, 2, 'Hẹn hò quanh đà nẵng'),
('user00007', 'user00004', 0, 2, 'Lê Quang Tam - Quảng Nam'),
('user00008', 'user00003', 0, 2, 'Mình mún muốn tìm người chung chí hướng'),
('user00010', 'user00001', 2, 2, 'Mình năm nay 22 tuổi, đang độc thân');

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

CREATE TABLE `quocgia` (
  `MaQuocGia` varchar(10) NOT NULL,
  `TenQuocGia` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quocgia`
--

INSERT INTO `quocgia` (`MaQuocGia`, `TenQuocGia`) VALUES
('QG001', 'Việt Nam'),
('QG002', 'Thái Lan'),
('QG003', 'Lào'),
('QG004', 'Nhật Bản'),
('QG005', 'Hàn Quốc'),
('QG006', 'Mỹ'),
('QG007', 'Bỉ'),
('QG008', 'Hà Lan'),
('QG009', 'Thụy Điển'),
('QG010', 'Campuchia');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaLoai` varchar(10) NOT NULL,
  `TenTheLoai` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaLoai`, `TenTheLoai`) VALUES
('ML01', 'Thông báo'),
('ML02', 'Tin tức'),
('ML03', 'Nội quy');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `MaTinhThanh` varchar(10) NOT NULL,
  `TenTinhThanh` varchar(30) CHARACTER SET utf8 NOT NULL,
  `MaQuocGia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MaTinhThanh`, `TenTinhThanh`, `MaQuocGia`) VALUES
('TT01', 'Đà Nẵng', 'QG001'),
('TT02', 'Quảng Nam', 'QG001'),
('TT03', 'Bangkok', 'QG002'),
('TT04', 'Huế', 'QG001'),
('TT05', 'Thanh Hóa', 'QG001'),
('TT06', 'Viêng Chăn', 'QG003'),
('TT07', 'Tokyo', 'QG004'),
('TT08', 'Nghệ An', 'QG001'),
('TT09', 'Quảng Ngãi', 'QG001'),
('TT10', 'Hà Nội', 'QG001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `MaUser` varchar(50) NOT NULL,
  `HoTen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) NOT NULL,
  `GioiTinh` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HonNhan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `MaMucTieu` varchar(10) NOT NULL,
  `HocVan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChieuCao` int(11) NOT NULL,
  `CanNang` int(11) NOT NULL,
  `MaTinhThanh` varchar(10) NOT NULL,
  `TimNguoi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LinkAnh` varchar(200) NOT NULL,
  `TrangThai` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `HenHo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`MaUser`, `HoTen`, `Email`, `GioiTinh`, `HonNhan`, `NgaySinh`, `MaMucTieu`, `HocVan`, `ChieuCao`, `CanNang`, `MaTinhThanh`, `TimNguoi`, `LinkAnh`, `TrangThai`, `HenHo`) VALUES
('user00001', 'Hồ Tá Quý', 'hotaquy@gmail.com', 'Nam', 'Độc thân', '1995-03-15', 'MT01', 'Đại học', 159, 48, 'QG001', 'Đẹp trai, ga lăng', '', 'Đang buồn ràu, cần lém ngừ trò chiện', 'Chưa có ai'),
('user00002', 'Phạm Hoài Thu', 'hoaithu@gmail.com', 'Nữ', 'Độc thân', '1995-09-01', 'MT02', 'Đại học', 150, 42, 'QG003', 'Đẹp trai', '', 'Đang cần tìm gấu chơi lễ', 'Đang chờ'),
('user00003', 'Trần Lập', 'tranlap@gmail.com', 'Nam', 'Độc thân', '1993-07-15', 'MT03', 'Cao Đẳng', 190, 77, 'QG005', 'Chỉ cần xinh', '', 'ai muốn làm bạn gái mềnh không', 'Chưa có ai'),
('user00004', 'Nguyễn Hữu Tông', 'huutong@gmail.com', 'Nam', 'Độc thân', '1990-07-20', 'MT02', 'Đại học', 170, 60, 'QG002', 'Tìm bạn nữ xinh xắn cùng tỉnh', '', 'FA bùn we', 'Chưa có ai'),
('user00005', 'Trần Ngọc Nữ', 'hotgirl@gmail.com', 'Nữ', 'Độc thân', '1996-02-11', 'MT01', 'Trung cấp', 150, 42, 'QG006', 'Vui vẻ, cởi mở', '', 'Đang cần tìm bạn nào rảnh đi uống cà phê chung', 'Chưa có ai'),
('user00006', 'Nguyễn Văn Phước', 'vanphuoc@gmail.com', 'Nam', 'Độc thân', '1995-08-15', 'MT03', 'Đại học ', 170, 65, 'QG002', 'Chỉ cần xinh là đủ', '', 'Có nhiều điều muốn nói', 'Chưa có ai'),
('user00007', 'Nguyễn Ngọc Huyền', 'ngochuyen@gmail.com', 'Nữ', 'Độc thân', '1997-01-01', 'MT02', 'Đại học', 177, 52, 'QG001', 'Học giỏi, cùng trường', '', 'Muốn đi ăn lễ với bạn nào đó, ai mún pm mềnh nhá!!!', 'Chưa có ai'),
('user00008', 'Công Tôn Nữ', 'nu@gmail.com', 'Nữ', 'Độc thân', '1996-12-11', 'MT03', 'Cao Đẳng', 160, 48, 'QG003', 'Ga lăng là chính ', '', 'Không muốn tìm gấu, chỉ mún tìm anh chai nuôi thui', 'Chưa có ai'),
('user00009', 'Hồ Ngọc Nghĩa', 'nghia@gmail.com', 'Nam', 'Độc thân', '1994-06-10', 'MT02', 'Trung cấp', 159, 66, 'QG007', 'Ai cũng được', '', 'Mới hư điện thoại, bùn rười rượi. Cần người tâm sự', 'Chưa có ai'),
('user00010', 'Lê Thị Hiền', 'lehien@gmail.com', 'Nữ', 'Độc thân', '1997-01-15', 'MT01', 'Đại học', 155, 50, 'QG004', 'Hiền lành, ga lăng', '', 'Cần tuyển gấu gấp', 'Chưa có ai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBaiViet`),
  ADD UNIQUE KEY `MaBaiViet_2` (`MaBaiViet`),
  ADD KEY `MaBaiViet` (`MaBaiViet`);

--
-- Indexes for table `khoauser`
--
ALTER TABLE `khoauser`
  ADD PRIMARY KEY (`MaUser`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- Indexes for table `muctieu`
--
ALTER TABLE `muctieu`
  ADD PRIMARY KEY (`MaMucTieu`);

--
-- Indexes for table `quanhe`
--
ALTER TABLE `quanhe`
  ADD PRIMARY KEY (`MaUser`,`MaUserTuongTac`);

--
-- Indexes for table `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`MaQuocGia`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`MaTinhThanh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`MaUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBaiViet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
