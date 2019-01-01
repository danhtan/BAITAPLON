-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2018 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qltv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieumuon`
--

CREATE TABLE `chitietphieumuon` (
  `mapm` int(10) DEFAULT NULL,
  `id_sach` int(10) DEFAULT NULL,
  `ngaymuon` date DEFAULT NULL,
  `henngaytra` date DEFAULT NULL,
  `trangthailt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieumuon`
--

INSERT INTO `chitietphieumuon` (`mapm`, `id_sach`, `ngaymuon`, `henngaytra`, `trangthailt`) VALUES
(1, 1, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(1, 6, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(2, 2, '2018-12-29', '2018-12-23', 'Vẫn Tốt'),
(2, 4, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(2, 5, '2018-12-27', '2018-12-30', 'Vẫn Tốt'),
(2, 6, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(3, 4, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(3, 3, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(3, 6, '2018-12-29', '2019-01-01', 'Vẫn Tốt'),
(4, 7, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(4, 2, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(4, 4, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(5, 8, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(5, 9, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(5, 2, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(6, 7, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(6, 10, '2018-12-29', '2018-12-30', 'Vẫn Tốt'),
(6, 5, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(7, 11, '2018-12-30', '2018-12-30', 'Vẫn Tốt'),
(7, 10, '2018-12-29', '2018-12-30', 'Đã Cũ'),
(7, 9, '2018-12-29', '2018-12-29', 'Bình Thường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotendg` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hansudung` date DEFAULT NULL,
  `urlhinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hotendg`, `diachi`, `ngaysinh`, `gioitinh`, `hansudung`, `urlhinh`, `gmail`, `sdt`) VALUES
('dg1', 'nguyễn văn thuyên', 'thanh hóa', '2018-12-18', 'nam', '2018-12-27', 'dg1.jpg', 'vanthuyen@gmail.com', 23456),
('dg10', 'nguyễn VĂn D', 'nam định', '2018-12-13', 'nam', '2018-12-25', 'dg10.jpg', 'vanD@gmail.com', 3232535),
('dg12', 'Nguyễn Quốc ', 'nam dijnh', '2018-12-08', 'nam', '0000-00-00', 'dg12.jpg', 'nguyenthe@gmail.com', 182828282),
('dg13', 'thế', 'ha noi', '2018-11-29', 'nam', '0000-00-00', 'dg12.jpg', 'nguyenthe@gmail.com', 182828282),
('dg14', 'đời sốn', 'ha noi', '2018-12-07', 'nam', '0000-00-00', 'dg12.jpg', 'nguyenthe@gmail.com', 182828282),
('dg2', 'trương thanh', 'hà nooij', '2018-12-11', 'nam', '2018-12-25', 'dg2.jpg', 'thanhthien@gmail.com', 123456),
('dg20', 'ngueyxxnnx', 'nam dinh', '2018-12-09', 'nam', '0000-00-00', 'dg10.jpg', 'nguyenthe@gmauil.com', 12234),
('dg3', 'trần văn tiến', 'nghệ an', '2018-12-18', 'nam', '2018-12-27', 'dg3.jpg', 'vantien@gmail.com', 234567),
('dg30', 'nguyenx van B', 'hà nội', '2018-12-01', 'nam', '0000-00-00', 'dg3.jpg', 'abc#gmail.com', 102092922),
('dg4', 'nguyên văn ', 'nam định', '2018-12-19', 'nam', '2018-12-25', 'dg4.jpg', 'vanthi@gmail.com', 345678),
('madg2', 'ngueyxxnnx', 'nam dinh', '2018-12-09', 'nam', '0000-00-00', 'dg10.jpg', 'nguyenthe@gmauil.com', 12234);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidap`
--

CREATE TABLE `hoidap` (
  `mach` int(10) DEFAULT NULL,
  `cauhoi` text COLLATE utf8mb4_unicode_ci,
  `cautraloi` text COLLATE utf8mb4_unicode_ci,
  `trangthai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoidap`
--

INSERT INTO `hoidap` (`mach`, `cauhoi`, `cautraloi`, `trangthai`) VALUES
(1, 'Em làm mất thẻ thư viện thì có được sử dụng Thư viện và được mượn tài liệu của Thư viện không?', NULL, 'chưa trả lời'),
(2, 'Em muốn biết thủ tục và thời gian làm lại thẻ sinh viên khi bị mất hoặc hỏng.', NULL, 'chưa  trả lời'),
(3, 'Em làm mất sách của thư viện thì em phải làm như thế nào', NULL, 'chưa trả lời'),
(4, 'Em đã mang trả sách cho Thư viện sao khi kiểm tra account mượn/trả của mình em vẫn thấy còn nợ cuốn sách đó?', NULL, 'chưa trả lời'),
(5, ': Em cho bạn mượn sách nhưng chưa lấy lại được, giờ em cần cuốn đó để ôn thi. Vậy em có được mượn cuốn đó nữa không', 'Em không mượn được thêm cuốn sách đó. Mỗi sinh viên có thể mượn tối đa 30 cuốn sách trong một học kỳ nhưng không trùng nhau.', 'đã trả lời'),
(6, ': Giờ mở cửa và thời gian phục vụ mượn/trả sách của Phòng TLTK?', 'Phòng TLTK và Tạp chí mở cửa từ 7h30 - 17h00 các ngày làm việc trong tuần (từ thứ hai đến thứ sáu).', 'đã trả  lời'),
(0, '', NULL, ''),
(7, ' Em cho bạn mượn sách nhưng chưa lấy lại được, giờ em cần cuốn đó để ôn thi. Vậy em có được mượn cuốn đó nữa không?', '$Phòng TLTK và Tạp chí mở cửa từ 7h30 - 17h00 các ngày làm việc trong tuần (từ thứ hai đến thứ sáu).', 'đã trả lời'),
(8, ' Những tài liệu nào trong Phòng TLTK không được mượn về? ', '$Thông thường, sinh viên được mượn 2 cuốn/1 lần, riêng đối với sinh viên đang làm đồ án tốt nghiệp được mượn 3 cuốn /1 lần. Thời gian mượn tài liệu là 2 tuần. Nếu có nhu cầu em có thể xin gia hạn thêm bằng các hình thức như: đến Kho TLTK gặp trực tiếp cán bộ thư viện hoặc điện thoại đến số máy (024) 3 8521445 hoặc gửi email đến địa chỉ thuvien@tlu.edu.vn.', 'đã trả lời'),
(9, 'Cách tìm tài liệu tham khảo trong Phòng TLTK như thế nào?', '$Một số loại hình tài liệu chỉ phục vụ cho tra cứu tại chỗ (không được mượn về), như luận án, từ điển, niên giám, các tài liệu dán tem hồng trên gáy. Nếu có nhu cầu đặc biệt, xin liên hệ với cán bộ trực tại quầy phục vụ.', 'đã trả lời');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisach`
--

CREATE TABLE `loaisach` (
  `id_loaisach` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloaisach` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisach`
--

INSERT INTO `loaisach` (`id_loaisach`, `tenloaisach`) VALUES
('ls2', 'đời sống'),
('ls3', 'công nghệ thông tin'),
('ls4', 'khoa học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_user` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen_try_cap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_user`, `username`, `password`, `quyen_try_cap`) VALUES
('nd1', 'nguyenthe', '123456', 1),
('nd2', 'nguyenthoi', '123456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotennv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `urlhinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `id_user`, `hotennv`, `diachi`, `ngaysinh`, `gioitinh`, `sdt`, `urlhinh`, `chucvu`, `gmail`) VALUES
('nv1', 'nd1', 'nguyễn thanh ', 'hà nọi', '2018-12-10', 'nam', 917383, 'nv1.jpg', 'nhân viên', 'thanhtung@gmail.com'),
('nv10', 'nd2', 'đời sốn', 'hà nội', '0000-00-00', 'nam', 182828282, 'nv8.jpg', 'nhân viên', 'nguyenthe@gmail.com'),
('nv11', 'nd1', 'đời sốn', 'ha noi', '0000-00-00', 'nam', 182828282, 'nv8.jpg', 'nhân viên', 'nguyenthe@gmail.com'),
('nv12', 'nd1', 'nguyễn thị hoài', 'ha noi', '0000-00-00', 'nam', 182828282, 'nv9.jpg', 'nhân viên', 'nguyenthe@gmail.com'),
('nv14', 'nd2', 'Nguyễn Văn k', 'ha noi', '0000-00-00', 'nam', 182828282, 'nv2.jpg', 'trưởng phòng', 'nguyenthe@gmail.com'),
('nv2', 'nd2', 'nguyễn văn tôn', 'hà nội', '2018-12-12', 'nam', 3232535, 'nv2.jpg', 'Kế Toán', 'thanhton@gmail.com'),
('nv3', 'nd1', 'nguyễn văn thời', 'nam định', '2018-12-17', 'nam', 3232535, 'nv3.jpg', 'nhân viên', 'vanthoi@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phat`
--

CREATE TABLE `phat` (
  `madg` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotendocgia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieumuon`
--

CREATE TABLE `phieumuon` (
  `mapm` int(10) NOT NULL,
  `madg` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manv` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieumuon`
--

INSERT INTO `phieumuon` (`mapm`, `madg`, `manv`) VALUES
(1, 'dg12', 'nv10'),
(2, 'dg10', 'nv10'),
(3, 'dg10', 'nv11'),
(4, 'dg10', 'nv10'),
(5, 'dg1', 'nv1'),
(6, 'dg10', 'nv11'),
(7, 'dg10', 'nv12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieutra`
--

CREATE TABLE `phieutra` (
  `mapt` int(10) DEFAULT NULL,
  `mapm` int(10) DEFAULT NULL,
  `ngaytra` date DEFAULT NULL,
  `tinhtranglt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id_sach` int(10) NOT NULL,
  `tensach` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loaisach` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tacgia` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlhinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `gia` float DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `soluongcon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id_sach`, `tensach`, `id_loaisach`, `id_tacgia`, `urlhinh`, `mota`, `gia`, `soluong`, `soluongcon`) VALUES
(1, 'Chân Dung ', 'ls3', 'tg3', 'anh1.jpg', 'Với kết cấu hoàn hảo, cốt truyện không thiếu những pha hành động gay cấn, tình tiết bất ngờ và không khí kình địch đến nghẹt thở, Bố già xứng đáng là đỉnh cao trong sự nghiệp văn chương của Mario Puzo.', 1234, 123, 11),
(2, 'Người Cá', 'ls2', 'tg7', 'anh2.jpg', 'Dân làng ven vịnh Plata xôn xao về chuyện con quỷ biển xuất hiện, ai nấy đều sợ đến mức không dám ra khơi. Tin đồn lan tới tận thủ đô Buenos Aires, thu hút giới báo chí chuyên săn lùng những tin giật gân thỏa mãn độc giả hiếu kì. Nhưng vẫn không ai biết thực hư như thế nào.', 2000, 1234, 119),
(3, 'Thế Giới ', 'ls3', 'tg3', 'anh3.jpg', 'Đặt giả thuyết nếu chỉ còn đủ tiền để mua một cuốn sách để biết về thế giới này trong thời gian ngắn nhất thì tôi khuyên bạn hãy đọc Thế giới phẳng. Thomas Friedman là nhà báo tài năng bậc nhất mà tôi từng biết. Để viết một cuốn sách như thế này, không biết ông đã phải đi bao nhiêu nơi, gặp bao nhiều người, đọc bao nhiêu sách, nghiên cứu bao nhiêu thời gian. Mỗi trang sách của ông chứa đầy thông tin, vừa mở rộng tầm mắt, vừa đánh giá, lý luận. Đọc Thế giới phẳng, tôi đâm lo sợ, lo sợ rằng Thế giới này quá khác mình tưởng tượng, lo sợ thế giới thay đổi quá nhanh và bị làm phẳng quá nhanh, lo sợ những gì mình học ở trường đại học chỉ là con số 0 tròn trĩnh. Đọc Thế giới phẳng để choáng ngợp và lo sợ. Một thầy giáo ở trường tôi đã dành hẳn một tiết học để nói về Thế giới phẳng, và nó quả là giáo trình tuyệt vời nhất cho bất kì ai muốn theo kịp với thế giới hiện đại.', 1234, 12, 9),
(4, 'Quẳng Gánh ', 'ls2', 'tg3', 'anh4.jpg', 'Bất kỳ ai đang sống đều sẽ có những lo lắng thường trực về học hành, công việc, những hoá đơn, chuyện nhà cửa,… Cuộc sống không dễ dàng giải thoát bạn khỏi căng thẳng, ngược lại, nếu quá lo lắng, bạn có thể mắc bệnh trầm cảm. Quẳng Gánh Lo Đi Và Vui Sống khuyên bạn hãy khóa chặt dĩ vãng và tương lai lại để sống trong cái phòng kín mít của ngày hôm nay. Mọi vấn đề đều có thể được giải quyết, chỉ cần bạn bình tĩnh và xác định đúng hành động cần làm vào đúng thời điểm.\r\n\r\nNói thì có vẻ dễ nhưng những vấn đề liên quan đến các trạng thái tinh thần chẳng bao giờ dễ giải quyết. Chấm dứt lo lắng là điều không thể nhưng bớt đi sự lo lắng thì có thể, chỉ cần bạn đủ quyết tâm.\r\n\r\nQuẳng Gánh Lo Đi Và Vui Sống khuyên bạn những cách để giảm thiểu lo lắng rất đơn giản như chia sẻ nó với người khác, tìm cách giải quyết vấn đề, quên tất cả những điều lo lắng nằm ngoài tầm tay,… Cố gắng thực tập điều này hàng ngày và trong cuộc sống chắc hẳn bạn sẽ thành công, có thể, không được như bạn muốn, nhưng chỉ cần bớt đi một chút phiền muộn thì cuộc sống của bạn đã có thêm một niềm vui.', 1234, 12, -2),
(5, 'Lược Sử ', 'ls3', 'tg3', 'anh5.jpg', 'Chúng ta sống cuộc sống hàng ngày của chúng ta mà hầu như không hiểu được về thế giới chung quanh. Chúng ta cũng ít khi suy ngẫm về cơ chế đã tạo ra ánh sáng Mặt trời – một yếu tố quan trọng góp phần tạo nên sự sống, về hấp dẫn – cái chất keo đã kết dính chúng ta vào Trái đất mà nếu khác đi chúng ta sẽ xoay tít và trôi dạt vào không gian vũ trụ, về nguyên tử đã cấu tạo nên tất cả chúng ta và chúng ta hoàn toàn lệ thuộc vào sự bền vững của chúng. Chỉ trừ có trẻ em (vì chúng còn biết quá ít để không ngần ngại đặt ra những câu hỏi quan trọng) còn ít ai trong chúng ta tốn thời gian để băn khoăn tại sao tự nhiên lại như thế này mà không như thế khác, vũ trụ ra đời từ đâu, hoặc nó có mãi mãi như thế này không, liệu có một ngày nào đó thời gian sẽ trôi giật lùi, hậu quả có trước nguyên nhân hay không; hoặc có giới hạn cuối cùng cho sự hiểu biết của con người hay không. Thậm chí có những đứa trẻ con, mà tôi có gặp một số, muốn biết lỗ đen là cái gì; cái gì là hạt vật chất nhỏ bé nhất, tại sao chúng ta chỉ nhớ quá khứ mà không nhớ tương lai; và nếu lúc bắt đầu là hỗn loạn thì làm thế nào có sự trật tự như ta thấy hôm nay và tại sao lại có vũ trụ.', 1234, 125, 10),
(6, 'Đi Tìm ', 'ls3', 'tg4', 'anh6.jpg', 'Đi tìm lẽ sống của Viktor Frankl là một trong những quyển sách kinh điển của thời đại. Thông thường, nếu một quyển sách chỉ có một đoạn văn, một ý tưởng có sức mạnh thay đổi cuộc sống của một người, thì chỉ riêng điều đó cũng đã đủ để chúng ta đọc đi đọc lại và dành cho nó một chỗ trên kệ sách của mình. Quyển sách này có nhiều đoạn văn như thế.\r\n\r\nTrước hết, đây là quyển sách viết về sự sinh tồn. Giống như nhiều người Do Thái sinh sống tại Đức và Đông Âu khi ấy, vốn nghĩ rằng mình sẽ được an toàn trong những năm 1930, Frankl đã trải qua khoảng thời gian chịu nhiều nghiệt ngã trong trại tập trung và trại hủy diệt của Đức quốc xã. Điều kỳ diệu là ông đã sống sót, cụm từ “thép đã tôi thế đấy” có thể lột tả chính xác trường hợp này. Nhưng trong Đi tìm lẽ sống, tác giả ít đề cập đến những khó nhọc, đau thương, mất mát mà ông đã trải qua, thay vào đó ông viết về những nguồn sức mạnh đã giúp ông tồn tại. Ông chua xót kể về những tù nhân đã đầu hàng cuộc sống, mất hết hy vọng ở tương lai và chắc hẳn là những người đầu tiên sẽ chết. Ít người chết vì thiếu thức ăn và thuốc men, mà phần lớn họ chết vì thiếu hy vọng, thiếu một lẽ sống', 2333, 23, 18),
(7, 'Giết Con ', 'ls3', 'tg6', 'anh7.jpg', 'Nào, hãy mở cuốn sách này ra. Bạn phải làm quen ngay với bố Atticus của hai anh em – Jem và Scout, ông bố luật sư có một cách riêng, để những đứa trẻ của mình cứng cáp và vững vàng hơn khi đón nhận những bức xúc không sao hiểu nổi trong cuộc sống. Bạn sẽ nhớ rất lâu người đàn ông thích trốn trong nhà Boo Radley, kẻ bị đám đông coi là lập dị đã chọn một cách rất riêng để gửi những món quà nhỏ cho Jem và Scout, và khi chúng lâm nguy, đã đột nhiên xuất hiện để che chở. Và tất nhiên, bạn không thể bỏ qua anh chàng Tom Robinson, kẻ bị kết án tử hình vì tội hãm hiếp một cô gái da trắng, sự thật thà và suy nghĩ quá đỗi đơn giản của anh lại dẫn đến một cái kết hết sức đau lòng, chỉ vì lý do anh là một người da đen.\r\n\r\nCho dù được kể dưới góc nhìn của một cô bé, cuốn sách Giết con chim nhại không né tránh bất kỳ vấn đề nào, gai góc hay lớn lao, sâu xa hay phức tạp: nạn phân biệt chủng tộc, những định kiến khắt khe, sự trọng nam khinh nữ… Góc nhìn trẻ thơ là một dấu ấn đậm nét và cũng là đặc sắc trong Giết con chim nhại. Trong sáng, hồn nhiên và đầy cảm xúc, những câu chuyện tưởng như chẳng có gì to tát gieo vào người đọc hạt mầm yêu thương.', 2000, 234, 10),
(8, 'Tôi Là Ai ?', 'ls2', 'tg7', 'anh8.jpg', 'Có rất nhiều cuốn sách về triết học, nhưng Tôi là ai – và nếu vậy thì bao nhiêu? là một sự khác biệt. Trước nay chưa từng có một ai dẫn dắt người đọc đến với những câu hỏi lớn của triết học bằng một cách am tường chuyên môn, đồng thời nhẹ nhàng tinh tế như vậy. Thông qua môn khoa học nghiên cứu não bộ, tâm lý học, lịch sử, và thậm chí văn hóa đại chúng (pop-culture), triết gia đương đại người Đức Richard David Precht đã khéo léo soi sáng những vấn đề ở tâm điểm của tồn tại con người như: Sự thật là gì? Cuộc sống có ý nghĩa gì? Tại sao tôi nên tốt? và trình bày chúng qua lối văn ngắn gọn, thông tuệ, uốn hút. Kết quả là một chuyến du hành xuyên lịch sử triết học và một dẫn nhập sáng tỏ vào những nghiên cứu hiện thời về não bộ. Tôi là ai – và nếu vậy thì bao nhiêu? đích thực là một cuốn sách xuất sắc để tiếp cận triết học. Cuốn sách như một lăng kính vạn hoa của những vấn đề triết luận, những kiến thức thú vị và hài hước, các vấn đề thuộc môn thần kinh học và sinh vật học cũng như nghiên cứu tâm lý học. Sách chia được chia làm ba phần: 1) Tôi có thể biết gì? – tập trung vào các mô tả não bộ, bản tính cũng như phạm vi của tri thức nhân loại, khởi đầu từ các câu hỏi được mổ xẻ bởi Kant, Descartes, Nietzsch, Freud, và các triết gia khác. 2) Tôi nên làm gì? – giải quyết các vấn đề đạo đức và luân lý, sử dụng các nghiên cứu thần kinh học và xã hội học để lý giải tại sao chúng ta có thiện cảm với người khác và bu', 2333, 123, 11),
(9, 'Hành Trình \r\n', 'ls2', 'tg3', 'anh9.jpg', 'Hành Trình Về Phương Đông kể về những trải nghiệm của một đoàn khoa học gồm các chuyên gia hàng đầu của Hội Khoa Học Hoàng Gia Anh được cử sang Ấn Độ nghiên cứu về huyền học và những khả năng siêu nhiên của con người. Suốt hai năm trời rong ruổi khắp các đền chùa Ấn Độ, chúng kiến nhiều pháp luật, nhiều cảnh mê tín dị đoan, thậm chí lừa đảo…của nhiều pháp sư, đạo sĩ…họ được tiếp xúc với những vị thế, họ được chứng kiến, trải nghiệm, hiểu biết sâu sắc về các khoa học cổ xưa và bí truyền của văn hóa Ấn Độ như Yoga, thiền định, thuật chiêm duyên, nghiệp báo, luật nhân quả, cõi sống và cõi chết….\r\n\r\nĐúng lúc một cuộc đối thoại cởi mở và chân thành đang sắp diễn ra với các đạo sĩ bậc thầy, thì đoàn nhận được tối hậu thu từ chính quyền Anh Quốc là phải ngừng ngay việc nghiên cứu, tức khắc hồi hương và bị buộc phải im lặng, không được phát ngôn về bất cứ điều gì mà họ đã chứng nghiệm. Sau cùng ba nhà khoa học trong đoàn đã chấp nhận bỏ lại tất cả sau lưng, ở lại Ấn Độ tiếp tục nghiên cứu và cuối cùng trở thành tu sĩ. Trong số đó có giáo sư Salding- tác giả hồi ký đặc biệt này.', 1234, 123, 10),
(10, 'Việt Nam  ', 'ls2', 'tg3', 'anh10.jpg', 'Từ phong tục trong gia tộc, phong tục xóm làng (hương đảng) đến các phong tục ngoài xã hội, Việt Nam phong tục của học giả Phan Kế Bính là một bộ biên khảo tương đối đầy đủ về các phong tục tập quán cũ của nước Việt. Là một nhà nho uyên bác mang tư tưởng tân tiến, tác giả không chỉ mô tả từng tập tục, mà còn về gốc tích, nguyên ủy cái tục ấy, nhìn nhận, đánh giá để xem nó hay hay dở, từ đó “xét điều gì quá tệ mà bỏ bớt đi, rồi lâu lâu mới đem cái tục hay mà bổ hết cho cái tục dở.\r\n\r\nCòn tục gì hay mà là quốc túy của ta thì cứ giữ lấy”. Đến nay, tập sách gần một trăm năm tuổi này vẫn là một trong những công trình khảo cứu có giá trị bậc nhất về các phong tục tập quán trên đất nước ta và nhiều vấn đề được Phan Kế Bính nhắc tới vẫn nóng hổi tính thời đại.', 4000, 1222, 121),
(11, 'Chúa Tể ', 'ls3', 'tg6', 'anh11.jpg', 'Chúa tể những chiếc nhẫn được viết trong thời kỳ tác giả dạy học ở Oxford, từ năm 1937 đến 1949; nhưng những phác thảo đầu tiên về Arda đã bắt đầu từ 1917, khi ông đang dưỡng thương trong quá trình tham chiến ở Pháp. Buổi sáng thế từ Âm nhạc của các Ainur, những cuộc di cư lớn của người Tiên, chuyện tình giữa Beren và Lúthien, trận chiến quy mô vũ trụ giữa các Valar cùng người Tiên với Morgoth mà Sauron chỉ là một gã học trò, tất cả đã thành hình từ lâu trước khi lần đầu tiên ông nghĩ tới giống dân Hobbit. Và câu chuyện về cuộc Nhẫn Chiến trở thành một nối tiếp tự nhiên, Kỷ Đệ Tam, theo sau những thời đại hoàng kim kia. Tolkien mong muốn tạo ra một sử thi không kém Beowulf hoặc Kalevala, nhưng những gì ông làm được có lẽ còn rộng hơn thế.\r\n\r\nMột trong những điểm hấp dẫn chính của Chúa tể những chiếc Nhẫn lại không nằm trong những trang sách: mà là trong sự tồn tại của câu chuyện với tư cách một mảnh ghép làm thành “hệ truyền thuyết” (legendarium – chữ của Tolkien) về Trung Địa; nói cách khác, trong sự tồn tại của Trung Địa như một lục địa bên trong Arda (thế giới này), đến lượt nó lại nằm trong Eä (vũ trụ).', 2000, 123, 11),
(12, 'Đại Gia ', 'ls2', 'tg5', 'anh12.jpg', 'Xem giá bán\r\n“Gatsby đã tin vào đốm sáng xanh ấy, vào cái tương lai mê đắm đến cực điểm đang rời xa trước mắt chúng ta năm này qua năm khác. Ừ thì nó đã tuột khỏi tay chúng ta, nhưng có làm sao đâu – ngày mai chúng ta sẽ lại chạy nhanh hơn, vươn tay ra xa hơn…”\r\n\r\nLà bức chân dung của “Thời đại Jazz” (Jazz Age, cái tên do chính Fitzgerald đặt cho thời kỳ 1918 – 1929), đại gia Gatsby nắm bắt vô cùng sâu sắc tinh thần của thế hệ cùng thời ông: những ám ảnh thường trực về thành đạt, tiền bạc, sang trọng, dư dật, hào nhoáng; song đồng thời là nỗi âu lo trước thói sùng bái vật chất vô độ và sự thiếu vắng đạo đức đang ngày một lên ngôi. Phất lên nhanh chóng từ chỗ “hàn vi”, Gatsby, nhân vật chính của câu chuyện, những tưởng sẽ có tất cả – tiền bạc, quyền lực, và sau rốt là tình yêu -, nhưng rồi ảo tưởng tình yêu đó tan vỡ thật đau đớn, theo sau là cái chết tức tưởi của Gatsby, để cuối cùng lập tức bị người đời quên lãng. Là lời cảnh tỉnh để đời của Scott Fitzgerald về cái gọi là “Giấc mơ Mỹ”, Đại gia Gatsby được ví như một tượng đài văn học, một cánh cửa cần mở ra cho những ai quan tâm tới văn học và lịch sử tinh thần nước Mỹ thời hiện đai.', 5000, 1233, 12),
(13, 'Hai Số', 'ls2', 'tg3', 'anh13.jpg', 'Xem giá bán\r\nHai số phận của hai con người này hoàn toàn khác nhau, một người sinh ra trong nghèo khó nhưng lại rất may mắn, một người sinh ra trong giàu có nhưng lại rất nỗ lực. Hai con người ai cũng phải trải qua những biến cố, mất mát và trải nghiệm sống để mà có thể đi đến thành công. Đọc quyển sách, ta có thể cảm nhận được những quyết tâm và tài năng của họ để đạt được mục tiêu của đời mình, một người muốn thoát khỏi cảnh nghèo khó, một người muốn chứng tỏ bản thân giỏi hơn cha mình..', 3000, 344, 22),
(14, 'Kiêu Hãnh \r\n', 'ls2', 'tg4', 'anh14.jpg', 'Xem giá bán\r\nKhắp làng trên xóm dưới Herfordshire xôn xao: Netherfield sắp có người thuê, mà còn là một quý ông chưa vợ với khoản lợi tức lên đến năm nghìn bảng mỗi năm. Chao ôi, quả là tin đáng mừng đối với gia đình ông bà Bennett, vốn có tới năm cô con gái cần phải gả chồng. Giữa những quay cuồng vũ hội cùng âm mưu toan tính của cả một xã hội ganh đua nhau tìm tấm chồng tốt cho các cô gái, nổi lên câu chuyện tình của cô con gái thứ cứng đầu Elizabeth và chàng quý tộc Darcy – nơi lòng Kiêu hãnh phải nhún nhường và Định kiến cần giải tỏa để có thể đi đến kết cục hoàn toàn viên mãn.\r\n\r\nSuốt hơn 200 năm qua, Kiêu hãnh và Định kiến luôn nằm trong số những tiểu thuyết tiếng Anh được yêu mến nhất. Chính Jane Austen cũng coi tác phẩm xuất sắc này là “đứa con cưng” của bà. Tài năng của Austen quả thực đã biến câu chuyện tình sôi nổi nơi miền quê nước Anh thành một bản châm biếm sắc sảo hóm hỉnh và một viên ngọc quý trong kho tàng Anh ngữ.', 5000, 123, 12),
(15, 'Kẻ Trộm ', 'ls2', 'tg4', 'anh15.jpg', 'Xem giá bán\r\nChiến tranh là thứ mà không ai mong muốn xảy ra. Nó sẽ là một thứ kinh hoàng, nổi ám ảnh cuả bất kì ai đang sống trong thời gian đó. Nhưng trong giai đoạn đó, lại có những câu chuyện thú vị và đầy ý nghĩa. Đó cũng chính là câu chuyện mà quyển truyện này mang lại. Nhan đề chỉ đơn thuần là kẻ trộm sách nhưng không phải vậy, mà ẩn chứa sau những việc ấy là những điều kỳ diệu mà ít ai biết được. Đặc biệt là vị thần chết, kẻ mà không bao giờ vắng mặt trong chiến tranh..', 2000, 23, 11),
(16, 'Chuyện Ở ', 'ls2', 'tg3', 'anh16.jpg', 'Mượn câu chuyện về một nông trại với những con vật nổi loạn và xây dựng xã hội riêng cho mình nhưng cuối cùng cái xã hội mộng tưởng đó cũng sụp đổ trong tay những kẻ cầm quyền. Một xã hội chẳng thể nào tốt đẹp và duy trì nêu ở đó người cầm quyền chỉ chăm lo lợi ích cho bản thân mình, đàn áp người dân, bác bỏ mọi ý kiến xây dựng tích cực. Đây là một cuốn sách phê phán hiện thực xã hội Nga thật thâm thúy và ý nghĩa!', 500, 345, 45),
(17, 'Chúa Ruồi', 'ls2', 'tg6', 'anh17.jpg', 'Quyển sách là một câu chuyện về một đám trẻ bị lạc ở đảo hoang, nơi mà chúng phải tìm cách mà sống và sinh tồn. Những tranh cãi, mâu thuẫn dần đẩy lên cao trào và tiến gần đến bạo lực. Bạn sẽ lặng đi ở trang sách cuối cùng. Hãy suy ngẫm về điều đó!', 5000, 123, 12),
(18, 'Khuyến Học', 'ls2', 'tg4', 'anh18.jpg', 'Khuyến học không phải là tác phẩm đồ sộ và sâu sắc nhất của ông nhưng lại là tác phẩm có ảnh hưởng sâu rộng nhất đến công chúng Nhật Bản. Khi mới đựơc in lần đầu, cuốn sách này có một số lượng ấn bản kỷ lục là 3,4 triệu bản, trong khi dân số Nhật Bản thời đó chỉ khoảng ba mươi lăm triệu người. Chỉ riêng điều đó đã cho thấy đây thực sự là cuốn sách gối đầu giường của mọi người dân Nhật trong thời kỳ Duy Tân. Kể từ năm 1942 đến năm 2000, riêng nhà xuất bản Iwanami Bunko cũng đã tái bản đến bảy mươi sáu lần.\r\n\r\nTrong cuốn sách này, Fukizawa Yukichi đề cập tinh thần cơ bản của con người và mục đích thực thụ của học vấn. Với các chương viết về sự bình đẳng, quyền con người, ý nghĩa của nền văn học mới, trách nhiệm của nhân dân và chính phủ trong một quốc gia pháp trị… khuyến học đã làm lay chuyển tâm lý người Nhật Bản dưới thời Minh Trị. Với tuyên ngôn “trời không tạo ra người đứng trên người và cũng không tạo ra người đứng dưới người”, Fukuzawa Yukichi đã gây kinh ngạc và bàng hoàng – như “không tin vào tai mình” – cho đa số người Nhật Bản vốn bị trói buộc bởi đẳng cấp, thân phận, quen phục tùng phó mặc và e sợ quan quyền suốt hàng trăm năm dưới chính thể phong kiến Mạc phủ. Ông khẳng định mọi người sinh ra đều bình đẳng và nếu có khác biệt là do trình độ học vấn.', 5999, 233, 12),
(19, 'Vô Cùng ', 'ls2', 'tg3', 'anh19.jpg', 'Vô Cùng Tàn Nhẫn Vô Cùng Yêu Thương là chấp bút của một bà mẹ Do Thái sinh ra và lớn lên ở Thượng Hải, đã bồi dưỡng con cái của mình trở thành triệu phú.\r\n\r\nDo Thái là một dân tộc huyền bí, từng xuất hiện nhiều triết gia vĩ đại và doanh nhân thành công ở khắp mọi nơi trên thế giới. Mặc dù dân số không đông nhưng lại có nguồn sức mạnh tiềm ẩn khổng lồ, chưa biết chừng còn nắm giữ huyết mạch của cả thế giới.\r\nTích hợp phương pháp giáo dục của Trung Quốc và Do Thái, Sara cho rằng: “Người nào nuông chiều con cái, ắt có ngày người đó phải băng bó vết thương cho con. Mềm mỏng là hại, tàn nhẫn là yêu!” Bà cũng ví von: “Một số cha mẹ Trung Quốc yêu thương con giống hình tử cung, còn các bậc cha mẹ Do Thái yêu thương con cái như hình đống lửa.”', 2222, 222, 22),
(20, 'Phi lý trí', 'ls2', 'tg4', 'anh20.jpg', 'Bạn sẵn sàng rút 2 nghìn đồng cho một người ăn mày nghèo khổ trên đường. Nhưng cũng chính bạn lại cò kè từng 2 nghìn bạc với bà đồng nát khi bán mớ báo cũ trong nhà.\r\n\r\nBạn sẵn sàng bỏ ra 10 triệu để chụp bộ ảnh cưới thật đẹp mà chỉ xem một vài lần rồi cất vào tủ. Nhưng chắc chắn bạn sẽ rất cân nhắc và suy tính cẩn thận khi quyết định mua một chiếc máy ảnh với giá 10 triệu trong khi bạn có thể dùng nó nhiều năm liền.\r\n\r\nBạn cảm thấy một món ăn ngon hơn khi có người khác bỗng khen rằng ngon đấy (cho dù có khi món ăn đó cũng không ngon đến vậy). Bạn cảm thấy mình nhỏ bé hơn, khúm núm hơn khi có dịp nói chuyện với một người nổi tiếng cho dù có khi anh ta cũng chẳng hơn gì bạn xét về cả hình thức lẫn trí tuệ. Vân vân và vân vân', 5666, 45, 45),
(21, 'Tôi Tự Học\r\n', 'ls2', 'tg4', 'anh21.jpg', 'ách “Tôi tự học” của tác giả Nguyễn Duy Cần đề cập đến khái niệm, mục đích của học vấn đối với con người đồng thời nêu lên một số phương pháp học tập đúng đắn và hiệu quả. Tác giả cho rằng giá trị của học vấn nằm ở sự lĩnh hội và mở mang tri thức của con người chứ không đơn thuần thể hiện trên bằng cấp. Trong xã hội ngày nay, không ít người quên đi ý nghĩa đích thực của học vấn, biến việc học của mình thành công cụ để kiếm tiền nhưng thực ra nó chỉ là phương tiện để đưa con người đến thành công mà thôi. Bởi vì học không phải để lấy bằng mà học còn để “biết mình” và để “đối nhân xử thế”.\r\n\r\nCuốn sách này tuy đã được xuất bản từ rất lâu nhưng giá trị của sách vẫn còn nguyên vẹn. Những tư tưởng, chủ đề của sách vẫn phù hợp và có thể áp dụng trong đời sống hiện nay. Thiết nghĩ, cuốn sách này rất cần cho mọi đối tượng bạn đọc vì không có giới hạn nào cho việc truy tầm kiến thức, việc học là sự nghiệp lâu dài của mỗi con người. Đặc biệt, cuốn sách là một tài liệu quý để các bạn học sinh – sinh viên tham khảo, tổ chức lại việc học của mình một cách hợp lý và khoa học. Các bậc phụ huynh cũng cần tham khảo sách này để định hướng và tư vấn cho con em mình trong quá trình học tập.', 2222, 22, 11),
(22, 'Nhà Giả Ki', 'ls2', 'tg5', 'anh22.jpg', 'Tiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.\r\n\r\n“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”', 11111, 111, 11),
(23, 'Người Giàu', 'ls2', 'tg4', 'anh23.jpg', 'Khi nói đến tiền bạc, chúng ta thường đề cập đến quy luật trọng trường và nó luôn phổ quát và bất biến trong mọi trường hợp. Trải qua thời gian dài và phát triển, quy luật này đã được trải nghiệm và đúc rút thành những bí quyết không chỉ đảm bảo cho bạn một túi tiền đầy, mà còn giúp cho bạn có một cuộc sống cân bằng để có thể phát triển mỹ mãn hơn những tiềm năng của bản thân trong các lĩnh vực khác của cuộc sống. Bởi trên thực tế, không ai có thể phủ nhận rằng sự dồi dào về vật chất có thể làm cho đời sống con người trở nên tốt đẹp hơn. Riêng trong lĩnh vực kinh doanh, sức mạnh tài chính là phương tiện chủ yếu để đo lường mức độ thành đạt của các doanh nhân.\r\n\r\nNgày nay, tiền bạc vẫn có những ảnh hưởng lớn đối với cuộc sống con người, cũng giống như cách đây năm ngàn năm nó đã chi phối mạnh mẽ cuộc sống của cư dân vương quốc Babylon, thúc đẩy họ tìm hiểu và nắm bắt các quy luật tạo ra tiền, nhằm có được một cuộc sống sung túc và sang trọng bậc nhất.', 4444, 444, 44),
(24, 'Người Đua ', 'ls2', 'tg4', 'anh24.jpg', 'Câu chuyện là lời tự thuật của nhà văn người Mỹ gốc Afghanistan Amir về những năm tháng tuổi thơ đầy niềm vui cũng như lỗi lầm, về những ngày trôi dạt trên đất khách rồi cuộc hành trình trở lại quê hương đổ nát để cứu chuộc tội lỗi cho bản thân và cho cả người cha đã khuất. Theo dòng hồi ức của Amir, người đọc trở lại hơn hai mươi năm về trước, khi Amir còn là một cậu bé mười hai tuổi sống trong vòng tay che chở của Baba giàu sang và thanh thế. Cùng gắn bó với Amir suốt những năm tháng tuổi thơ là Hassan, con trai của người quản gia Ali, một cậu bé lanh lợi, mạnh mẽ nhiều lần xả thân để bảo vệ Amir. Thế nhưng tình bạn và lòng tận tụy của Hassan đã không được đền đáp, một ngày mùa đông năm 1975, Hassan vì ra sức bảo vệ chiếc diều xanh chiến lợi phẩm của Amir đã bị bọn trẻ xấu hành hung và nhục mạ. Sự nhu nhược và hèn nhát đã cản bước Amir cứu bạn, thậm chí, còn biến cậu thành một kẻ gian dối khi bịa chuyện nhằm đuổi cha con Ali và Hassan ra khỏi nhà. Và Amir đã phải trả giá cho lỗi lầm ấy trong suốt phần đời còn lại. Ngay cả khi anh đang sống sung túc trên đất Mỹ, ngay cả khi tìm được một mái ấm cho riêng mình hay thực hiện được mơ ước trở thành nhà văn, nỗi ám ảnh của một kẻ gian dối vẫn ngày đêm đeo đuổi Amir. Và cuối cùng, trở lại Afghanistan để cứu con trai Hassan khỏi tay bọn Taliban là con đường duy nhất để Amir chuộc lỗi với người bạn, người em cùng cha khác mẹ Hassan đã chết dưới họng súng Taliban.', 6666, 66, 66),
(25, 'Không Theo ', 'ls2', 'tg4', 'anh25.jpg', 'Bạn là một đứa trẻ 4 tuổi bỗng nhiên được cho 1 cái kẹo với lời nói: “Nếu con cố gắng giữ không ăn cái kẹo trong vòng 15 phút thì con sẽ được thêm 1 cái kẹo nữa.” Bạn sẽ lựa chọn thế nào? Ăn ngay hay cố gắng chờ đợi?Theo kết quả một thử nghiệm, nhiều năm sau, khi tìm lại những đứa trẻ đã tham gia thử nghiệm trên, các nhà nghiên cứu nhận thấy rằng những đứa trẻ đã từng để dành kẹo, cố đợi 15 phút nữa là những đứa trẻ thành công và giàu có hơn những đứa trẻ khác.\r\n\r\nTrên thế giới này, không thiếu những người thông minh nhưng tại sao họ lại chỉ là những anh tài xế bình thường trong khi những người khác – cũng thông minh như họ, lại đường hoàng là một ông chủ? Không Theo Lối Mòn là một cuốn sách nói về bí quyết để giành lấy thành công, đồng thời lý giải sự khác biệt giữa thành công và thất bại. Đó là sự chờ đợi và kiên nhẫn trước những lợi ích tức thời.\r\n\r\nMột lời khuyên khác Không Theo Lối Mòn dành cho độc giả. Điều cốt yếu chính là hiện ', 6666, 666, 66),
(26, 'Thiên nga đen', 'ls2', 'tg3', 'anh26.jpg', 'hiên nga đen là một biến cố tưởng chừng như không thể xảy ra với ba đặc điểm chính: không thể dự đoán, có tác động nặng nề và sau khi nó xảy ra, người ta dựng lên một lời giải thích để khiến nó ít ngẫu nhiên hơn, dễ dự đoán hơn bản chất thật của nó. Thành công bất ngờ của Google có thể xem là một “thiên nga đen”, sự kiện ngày 11 tháng 9 cũng vậy. Với Nassim Nicholas Taleb, “Thiên nga đen” ẩn chứa hầu như mọi điều về thế giới này, từ sự trỗi dậy của tôn giáo đến những biến cố trong cuộc sống của chính chúng ta.\r\n\r\nVì sao chúng ta không nhận thấy những hiện tượng “thiên nga đen” mãi đến sau khi chúng xảy ra? Theo Taleb, một phần là vì con người chúng ta tự trói buộc mình vào những cái chi tiết trong khi lẽ ra nên tập trung vào cái tổng quát. Chúng ta tập trung vào những gì đã biết trong khi hết lần này đến lần khác bỏ qua những thứ mình chưa biết. Do đó, chúng ta không thể đánh giá được các cơ hội, không thể kháng lại xu hướng đơn giản hóa, tường thuật và phân loại, và không đủ phóng khoáng để tưởng thưởng cho những ai có thể hình dung ra được “những cái không thể”', 7000, 77, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `id_tacgia` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotentg` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namsinh` date DEFAULT NULL,
  `quequan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`id_tacgia`, `hotentg`, `namsinh`, `quequan`, `sdt`) VALUES
('tg1', 'nguyễn quốc ', '2018-12-11', 'tg1', 12222),
('tg3', 'tống dức thắng ', '2018-12-10', 'hà nội', 91939),
('tg4', 'nguyễn danh tấn', '2018-12-18', 'hà nội', 18913),
('tg5', 'đời sốn', '2018-12-28', 'haha', 121313),
('tg6', 'thế12', '2018-12-22', 'tg6', 12),
('tg7', 's', '2018-12-20', 'tg7', 11233);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `matb` int(10) DEFAULT NULL,
  `urlhinh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci,
  `tieude` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`matb`, `urlhinh`, `noidung`, `tieude`) VALUES
(1, 'tb1.jpg', 'Ngày 28/12/2018 Thư viện phục vụ bạn đọc giờ hành chính từ 07h00 – 16h30;\r\nNgày 29 – 31/12/2018 và 01/01/2019: thư viện tạm ngưng phục vụ bạn đọc nhân dịp Tết Dương lịch 2019;\r\nNgày 02/01/2019: thư viện phục vụ bạn đọc bình thường;\r\nKính chúc bạn đọc có những ngày nghỉ lễ vui vẻ, an toàn.', ' Phục vụ giờ hành chính và Lịch nghỉ Tết Dương lịch 2019'),
(2, 'tb2.jpg', 'Bạn đọc có thể tra cứu trực tuyến, xem chi tiết và mượn tài liệu có trong danh mục tại tất cả các kho sách. Nếu bạn gặp khó khăn trong việc sử dụng tài liệu, vui lòng đừng ngần ngại liên hệ:', 'Thông báo sách mới tháng 11/2018'),
(3, 'tb3.jpg', 'Nhằm đánh giá sự chuyên cần của sinh viên phục vụ kiểm định chất lượng giáo dục và đảm bảo an ninh trật tự, Thư viện áp dụng hình thức quét thẻ sinh viên. Vậy sinh viên có thẻ từ (chỉ sử dụng cho cổng kiểm soát) vào thư viện bằng lối nhà A; sinh viên đang sử dụng thẻ giấy vào thư viện bằng lối nhà H – Phòng Truyền thống và quẹt thẻ bằng mã vạch.', ' V/v hướng dẫn sinh viên vào Thư viện học tập, nghiên cứu'),
(4, 'tb4.jpg', 'THông báo Lịch Đóng Cửa của Tuần,THông báo Lịch Đóng Cửa của Tuần,THông báo Lịch Đóng Cửa của Tuần,THông báo Lịch Đóng Cửa của Tuần,THông báo Lịch Đóng Cửa của Tuần,THông báo Lịch Đóng Cửa của Tuần', 'THông báo Lịch Đóng Cửa của Tuần ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  ADD KEY `mapm` (`mapm`),
  ADD KEY `id_sach` (`id_sach`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- Chỉ mục cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`id_loaisach`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `phat`
--
ALTER TABLE `phat`
  ADD KEY `madg` (`madg`);

--
-- Chỉ mục cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  ADD PRIMARY KEY (`mapm`),
  ADD KEY `madg` (`madg`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `phieutra`
--
ALTER TABLE `phieutra`
  ADD KEY `mapm` (`mapm`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id_sach`),
  ADD KEY `id_loaisach` (`id_loaisach`),
  ADD KEY `id_tacgia` (`id_tacgia`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id_tacgia`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietphieumuon`
--
ALTER TABLE `chitietphieumuon`
  ADD CONSTRAINT `chitietphieumuon_ibfk_1` FOREIGN KEY (`mapm`) REFERENCES `phieumuon` (`mapm`),
  ADD CONSTRAINT `chitietphieumuon_ibfk_2` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id_sach`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `nguoidung` (`id_user`);

--
-- Các ràng buộc cho bảng `phat`
--
ALTER TABLE `phat`
  ADD CONSTRAINT `phat_ibfk_1` FOREIGN KEY (`madg`) REFERENCES `docgia` (`madg`);

--
-- Các ràng buộc cho bảng `phieumuon`
--
ALTER TABLE `phieumuon`
  ADD CONSTRAINT `phieumuon_ibfk_1` FOREIGN KEY (`madg`) REFERENCES `docgia` (`madg`),
  ADD CONSTRAINT `phieumuon_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `phieutra`
--
ALTER TABLE `phieutra`
  ADD CONSTRAINT `phieutra_ibfk_1` FOREIGN KEY (`mapm`) REFERENCES `phieumuon` (`mapm`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`id_loaisach`) REFERENCES `loaisach` (`id_loaisach`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`id_tacgia`) REFERENCES `tacgia` (`id_tacgia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
