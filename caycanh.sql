-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 27, 2024 lúc 04:56 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `caycanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commen`
--

CREATE TABLE `commen` (
  `idcommen` int NOT NULL,
  `makh` int NOT NULL,
  `mahh` int NOT NULL,
  `commen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `commen`
--

INSERT INTO `commen` (`idcommen`, `makh`, `mahh`, `commen`) VALUES
(28, 10, 22, ''),
(29, 10, 22, '  cadcawd'),
(30, 10, 22, '  vzdfssf'),
(31, 18, 10, '  mjinh'),
(32, 18, 22, '  bgbub'),
(33, 10, 21, '  hubgu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idmahh` int NOT NULL,
  `dongia` int NOT NULL,
  `soluongton` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idmahh`, `dongia`, `soluongton`) VALUES
(1, 15000, 9),
(2, 15000, 9),
(3, 15000, 9),
(4, 15000, 9),
(5, 15000, 9),
(6, 15000, 9),
(7, 15000, 9),
(8, 15000, 9),
(9, 15000, 9),
(10, 15000, 9),
(11, 15000, 9),
(12, 15000, 9),
(13, 15000, 9),
(14, 15000, 9),
(15, 15000, 9),
(16, 15000, 9),
(17, 15000, 9),
(18, 15000, 14),
(19, 15000, 8),
(20, 15000, 0),
(21, 15000, 5),
(22, 15000, -1),
(23, 15000, 9),
(28, 20000, 0),
(28, 20000, 0),
(29, 20000, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `tinhtrang` int NOT NULL,
  `masohd` int NOT NULL,
  `soluongmua` int NOT NULL,
  `mahh` int NOT NULL,
  `thanhtien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`tinhtrang`, `masohd`, `soluongmua`, `mahh`, `thanhtien`) VALUES
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 63, 1, 22, 15000),
(0, 64, 1, 21, 15000),
(0, 65, 1, 21, 15000),
(0, 67, 1, 21, 15000),
(0, 67, 1, 22, 15000),
(0, 68, 1, 21, 15000),
(0, 68, 1, 22, 15000),
(0, 69, 1, 21, 15000),
(0, 69, 1, 22, 15000),
(0, 70, 1, 21, 15000),
(0, 70, 1, 22, 15000),
(0, 71, 1, 21, 15000),
(0, 71, 1, 22, 15000),
(0, 72, 1, 21, 15000),
(0, 72, 1, 22, 15000),
(0, 73, 1, 21, 15000),
(0, 73, 1, 22, 15000),
(0, 74, 1, 21, 15000),
(0, 74, 1, 22, 15000),
(0, 75, 1, 21, 15000),
(0, 75, 1, 22, 15000),
(0, 76, 1, 21, 15000),
(0, 76, 1, 22, 15000),
(0, 83, 1, 21, 15000),
(0, 83, 1, 22, 15000),
(0, 83, 1, 4, 15000),
(0, 84, 1, 21, 15000),
(0, 86, 1, 22, 15000),
(0, 87, 1, 22, 15000),
(0, 88, 1, 22, 15000),
(0, 89, 1, 21, 15000),
(0, 90, 3, 23, 45000),
(0, 91, 3, 23, 45000),
(0, 92, 4, 23, 60000),
(0, 93, 4, 23, 60000),
(0, 95, 1, 21, 15000),
(0, 96, 1, 22, 15000),
(1, 98, 1, 22, 15000),
(0, 99, 1, 22, 15000),
(0, 100, 1, 5, 15000),
(0, 102, 5, 22, 75000),
(0, 104, 10, 22, 150000),
(0, 105, 1, 22, 15000),
(0, 107, 4, 18, 60000),
(0, 108, 2, 18, 30000),
(0, 108, 1, 17, 15000),
(0, 109, 1, 18, 15000),
(0, 109, 1, 15, 15000),
(0, 110, 1, 21, 15000),
(0, 111, 1, 21, 15000),
(0, 113, 1, 21, 15000),
(0, 114, 2, 12, 30000),
(0, 116, 1, 22, 15000),
(0, 117, 1, 22, 15000),
(0, 119, 1, 21, 15000),
(0, 120, 1, 21, 15000),
(0, 121, 3, 10, 45000),
(0, 122, 3, 18, 45000),
(0, 123, 6, 18, 90000),
(0, 124, 9, 20, 135000),
(0, 125, 1, 22, 15000),
(0, 126, 8, 22, 120000),
(0, 126, 1, 19, 15000),
(0, 128, 1, 21, 15000),
(0, 129, 1, 21, 15000),
(0, 131, 1, 21, 15000),
(0, 133, 20, 28, 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int NOT NULL,
  `hinh` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `act` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `hinh`, `ten`, `act`) VALUES
(1, 'senda.png', 'Cây cảnh', 'caycanh'),
(2, 'senda.png', 'Sen đá', 'senda'),
(3, 'senda.png', 'Xương Rồng', 'xuongrong'),
(4, 'senda.png', 'Cây Thủy Sinh', 'thuysinh'),
(5, '', 'vdvzdv', 'aaaaaaa'),
(8, '$tenloai', '$iddanhmuc', 'act'),
(9, 'fdshbh', 'fdshbh', 'act');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `maloai` int NOT NULL,
  `ngaylap` date NOT NULL,
  `soluotxem` int NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `an` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `hinh`, `maloai`, `ngaylap`, `soluotxem`, `mota`, `an`) VALUES
(1, 'Cây Tùng Xương Cá', 'xuongca.png', 5, '2024-02-02', 10, 'Là một cây được liệt kê vào hàng cây xa xỉ và có hình dáng bắt mắt, Tùng Xương Cá nhiều người yêu thích ngay từ ánh nhìn đầu tiên và ngày càng phổ biến trên thị trường cây cảnh.', 1),
(2, 'Cây Phát Tài', 'phattai.png', 1, '2024-02-02', 3, 'Cây Phát Tài được tìm thấy ở Zambia, Tanzania và Tây Phi. Loại cây này có lá màu xanh sẫm, tán lá xòe rộng và có đường gân vàng nổi bật, thường được trồng trong nhà giúp thanh lọc không khí hiệu quả…', 0),
(3, 'Cây Vạn Lộc', 'vanloc.png', 1, '2024-02-02', 3, 'Cây Vạn Lộc (tên khoa học: Aglaonema Rotundum Pink) có tốc độ sinh trưởng nhanh, dễ chăm sóc, phù hợp trang trí nội thất, phòng làm việc. Cây Vạn Lộc phong thủy tượng trưng cho sự may mắn, năng lượng tràn đầy và mang sự thịnh vượng, no đủ cho gia chủ.', 0),
(4, 'Cây Thẻ Bài Hồng', 'thebaihong.png', 1, '2024-02-02', 23, 'Cây Thẻ Bài Hồng (tên khoa học: Wallisia cyanea) còn gọi là cây Lệnh Bài. Trong phong thủy, cây sẽ mang lại tài lộc, may mắn cho những người mệnh Hỏa…', 0),
(5, 'Cây Đuôi Công Tím', 'congtim.png', 1, '2024-02-02', 3, 'Cây Đuôi Công Tím (tên khoa học: Calathea medallion/Calathea makoyana) với vẻ ngoài nổ bật, thu hút đã trở thành loại cây để bàn, cây văn phòng được ưa chuộng nhất hiện nay. Cây biểu trưng cho sự thịnh vượng và may mắn cho gia chủ.', 0),
(7, 'Rotala wallichi - Cây Luân Thảo Đỏ(Lá Cạn)', 'thaodo.png', 4, '2024-02-02', 3, 'Rotala wallichi là một loại cây thủy sinh đẹp, dễ trồng và có nhiều công dụng. Cây thích hợp cho mọi loại hồ thủy sinh, từ hồ thủy sinh nhỏ đến hồ thủy sinh lớn.', 0),
(8, 'Cây đại hồng huyết', 'honghuyet.png', 4, '2024-02-02', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(9, 'Rêu Minifiss trải nền “loại 1” xanh tươi.', 'reu.png', 4, '2024-02-02', 23, 'Rêu minifiss là loại thực vật được sử dụng rất nhiều trong bể thuỷ sinh. Nhờ khả năng thích nghi cao, dễ phát triển nên được rất nhiều anh em chơi thuỷ sinh lựa chọn. Minifiss thường được sử dụng để trải nền, tạo cảnh thảm cỏ xanh mướt. Có thể gắn rêu lên các vách đá tạo điểm nhấn.\r\n\r\n', 0),
(10, 'Cây ráy “nana tàu” lá nhỏ bán theo chậu.', 'nana.png', 4, '2024-02-02', 23, 'Nhờ vào vẻ đẹp tự nhiên, sức sống mạnh liệt, dễ chăm sóc. Mà cây ráy nana tàu lá nhỏ được sử dụng nhiều trong bể thuỷ sinh của nhiều anh em. Cây ráy thuỷ sinh nana là loại có kích thước nhỏ nhất và cũng có nhiều họ hàng.\r\n\r\nRáy nana tàu lá nhỏ có thể dùng keo dán rêu để cố định vào lũa, giá thể, đá để tạo cảnh thuỷ sinh. Hoặc cắm trực tiếp rễ xuống lớp phân nền trong bể thuỷ sinh.\r\n\r\nCây ráy nana tàu không cần thiết phải có co2. Đây là loại cây cần dinh dưỡng thấp, yêu cầu nhiệt độ nước trong bể thuỷ sinh từ 22-27 độ C.', 0),
(11, 'Cỏ dùi trống', 'co.png', 5, '2024-02-02', 3, 'Chưa có mô tả cho sản phẩm này', 0),
(12, 'Cây Dương xỉ', 'duongxi.png', 4, '2024-02-02', 3, 'Chưa có mô tả cho sản phẩm này', 0),
(13, 'Sen đá ngọc lá dài 3-5cm (bịch nhựa/chậu nhựa)', 'senda.png', 2, '2024-02-04', 3, 'Nơi trồng: thoáng mát, có nắng buổi sáng, tránh được mưa.\r\nTưới nước: Quan sát đất trồng, chỉ tưới khi đất đã khô hoàn toàn (khoản 2-3 ngày). Khi tưới phải tưới ướt đẫm, không tưới lên lá, tránh để cây khô trong nhiều ngày liên tục.\r\nPhơi nắng: Phơi nắng trực tiếp cho cây mỗi ngày, khoảng 3-4 tiếng nắng. Tốt nhất là nắng buổi sáng trước 11h hoặc nắng sau 14h.', 0),
(14, 'Sen đá viền đỏ 5-7cm (bịch nhựa)', 'sendado.png', 2, '2024-02-04', 23, 'HƯỚNG DẪN CHĂM SÓC\r\n\r\nNơi trồng: thoáng mát, có nắng buổi sáng, tránh được mưa.\r\nTưới nước: Quan sát đất trồng, chỉ tưới khi đất đã khô hoàn toàn (khoản 2-3 ngày). Khi tưới phải tưới ướt đẫm, không tưới lên lá, tránh để cây khô trong nhiều ngày liên tục.\r\nPhơi nắng: Phơi nắng trực tiếp cho cây mỗi ngày, khoảng 3-4 tiếng nắng. Tốt nhất là nắng buổi sáng trước 11h hoặc nắng sau 14h.', 0),
(15, 'Sen đá mặt trăng 5-7cm (bịch nhựa/chậu nhựa)', 'senmattrang.png', 2, '2024-02-04', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(16, 'Sen đá viền tím 5-7cm (Bịch nhựa)', 'sendatim.png', 2, '2024-02-04', 23, 'HƯỚNG DẪN CHĂM SÓC\r\n\r\nNơi trồng: thoáng mát, có nắng buổi sáng, tránh được mưa.\r\nTưới nước: Quan sát đất trồng, chỉ tưới khi đất đã khô hoàn toàn (khoản 2-3 ngày). Khi tưới phải tưới ướt đẫm, không tưới lên lá, tránh để cây khô trong nhiều ngày liên tục.\r\nPhơi nắng: Phơi nắng trực tiếp cho cây mỗi ngày, khoảng 3-4 tiếng nắng. Tốt nhất là nắng buổi sáng trước 11h hoặc nắng sau 14h.', 0),
(17, 'Kim cương trắng 5-7cm (chậu nhựa/bịch nhựa)', 'kimcuongtrang.png', 2, '2024-02-04', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(18, 'Sen dĩa hồng 5-7cm (chậu nhựa/bịch nhựa)', 'diahong.png', 2, '2024-02-04', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(19, 'Xương rồng trứng chim 3-5cm (bịch nhựa)', 'rongtrungchim.png', 3, '2024-02-04', 23, 'HƯỚNG DẪN CHĂM SÓC\r\n\r\nNơi trồng: thoáng mát, có nắng buổi sáng, tránh được mưa.\r\nTưới nước: Quan sát đất trồng, chỉ tưới khi đất đã khô hoàn toàn (khoản 2-3 ngày). Khi tưới phải tưới ướt đẫm, không tưới lên lá, tránh để cây khô trong nhiều ngày liên tục.\r\nPhơi nắng: Phơi nắng trực tiếp cho cây mỗi ngày, khoảng 3-4 tiếng nắng. Tốt nhất là nắng buổi sáng trước 11h hoặc nắng sau 14h.', 0),
(20, 'Xương rồng thạch trụ thiên cỡ nhỏ (Bịch nhựa)', 'rongthachnhu.png', 3, '2024-02-04', 25, 'Chưa có mô tả cho sản phẩm này', 1),
(21, 'Xương rồng bụi vàng nhạt 11-13cm (chậu nhựa/bịch nhựa)', 'rongbuivang.png', 3, '2024-02-04', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(22, 'Xương rồng bụi trắng 11-13cm (chậu nhựa/bịch nhựa)', 'rongbuitrang.png', 3, '2024-02-04', 23, 'Chưa có mô tả cho sản phẩm này', 0),
(31, 'xs', '2.jpg', 1, '2024-03-23', 12, 'Chưa có mô tả cho sản phẩm này', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int NOT NULL,
  `makh` int NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(97, 9, '2024-02-21', 0),
(98, 9, '2024-02-21', 15000),
(99, 9, '2024-02-21', 15000),
(100, 9, '2024-02-21', 15000),
(101, 9, '2024-02-21', 0),
(102, 9, '2024-02-21', 75000),
(103, 9, '2024-02-21', 0),
(104, 9, '2024-02-21', 150000),
(105, 9, '2024-02-21', 15000),
(106, 9, '2024-02-21', 0),
(107, 9, '2024-02-21', 60000),
(108, 9, '2024-02-21', 45000),
(109, 9, '2024-02-21', 30000),
(110, 9, '2024-02-21', 15000),
(111, 9, '2024-02-21', 15000),
(112, 9, '2024-02-21', 0),
(113, 9, '2024-02-21', 15000),
(114, 9, '2024-02-21', 30000),
(115, 9, '2024-02-21', 0),
(116, 9, '2024-02-21', 15000),
(117, 9, '2024-02-21', 15000),
(118, 9, '2024-02-21', 0),
(119, 9, '2024-02-21', 15000),
(120, 9, '2024-02-21', 15000),
(121, 10, '2024-03-05', 45000),
(122, 10, '2024-03-05', 45000),
(123, 10, '2024-03-05', 90000),
(124, 10, '2024-03-06', 135000),
(125, 10, '2024-03-08', 15000),
(126, 19, '2024-03-23', 135000),
(127, 19, '2024-03-23', 0),
(128, 9, '2024-03-23', 15000),
(129, 9, '2024-03-23', 15000),
(130, 9, '2024-03-23', 0),
(131, 9, '2024-03-23', 15000),
(132, 9, '2024-03-23', 0),
(133, 9, '2024-03-24', 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int NOT NULL,
  `tenkh` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sodienthoai` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(8, 'nam2', 'nam2', '0da4e57d0c88e17bd62908f23ac96e74', '434@gmail.com', '12', '0032659941'),
(9, 'nam1', 'nam1', '0da4e57d0c88e17bd62908f23ac96e74', 'root@gmail.com', '12v', '0032659941');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `iddanhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `iddanhmuc`) VALUES
(1, 'Cây cảnh', 1),
(2, 'Sen đá', 2),
(3, 'Xương rồng', 3),
(4, 'Cây thủy sinh', 4),
(5, 'vdvzdv', 5),
(11, 'czhsbh', 6),
(12, 'fdshbh', 7),
(13, '$tenloai', 9),
(14, 'fdshbh', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `matkhau` text NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`, `role`) VALUES
(1, 'nam', '12v', 'ng@gmail.com', '12345678', 1),
(2, 'scas', 'sf', 'fa', '123456', 2),
(4, 'gbgv', 'hjbh', 'nguyenhoainam61021@gmail.com', '123456', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `commen`
--
ALTER TABLE `commen`
  ADD PRIMARY KEY (`idcommen`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `commen`
--
ALTER TABLE `commen`
  MODIFY `idcommen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
