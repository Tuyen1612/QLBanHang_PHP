-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 12:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHoaDon` varchar(10) NOT NULL,
  `MaSach` varchar(10) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHoaDon`, `MaSach`, `DonGia`, `SoLuong`, `ThanhTien`) VALUES
('HD-RWO4', 'S0004', 100000, 3, 300000),
('HD-RWO4', 'S0001', 500000, 2, 1000000),
('HD-fx6N', 'S0005', 98000, 1, 98000),
('HD-fx6N', 'S0001', 500000, 2, 1000000),
('HD-egqz', 'S0002', 300000, 4, 1200000),
('HD-egqz', 'S0007', 100000, 8, 800000),
('HD-NCzl', 'S0004', 100000, 1, 100000),
('HD-NCzl', 'S0005', 98000, 1, 98000),
('HD-m2TH', 'S0002', 300000, 1, 300000),
('HD-m2TH', 'S0004', 100000, 1, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsach`
--

CREATE TABLE `chitietsach` (
  `MaChiTiet` varchar(10) NOT NULL,
  `Dang` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoTrang` int(11) NOT NULL,
  `KichThuoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayXuatBan` date NOT NULL,
  `MaNXB` varchar(10) NOT NULL,
  `NgonNgu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitietsach`
--

INSERT INTO `chitietsach` (`MaChiTiet`, `Dang`, `SoTrang`, `KichThuoc`, `NgayXuatBan`, `MaNXB`, `NgonNgu`, `MoTa`) VALUES
('CT0001', 'Bìa cứng', 100, '153 x 234 x 43mm | 758g', '2020-04-05', 'NXB01', 'Tiếng Việt', '"Tôi mong các bạn giàu theo mọi cách có thể - về vật chất, tâm lý, tâm linh. Tôi ước sao các bạn có thể sống một cuộc sống sung túc nhất trần đời." - Osho\r\n\r\n"Thành công đích thực" khảo sát các triệu chứng và lo toan tâm lý về tiền tài và danh vọng như:\r\n\r\nThói tham từ đâu ra?\r\nCác giá trị như tính cạnh tranh và khát vọng có vị trí như thế nào trong nỗ lực mang lại thay đổi tích cực và mới mẻ?\r\nTại sao những người nổi tiếng và giàu có lại gây nhiều ảnh hưởng trên thế giới đến thế?\r\nTác phẩm đưa ra tầm viễn kiến thấu suốt, gợi hứng, đáng ngạc nhiên và hết sức thực tiễn cho thời kỳ khủng hoảng kinh tế chúng ta đang trải qua. Người đọc sẽ được trải nghiệm trí huệ, sự hóm hỉnh trực tiếp, tận nguồn của Osho. bạn của bạn.'),
('CT0002', 'Bìa 3B', 123, '170 x 240 x 50mm | 200g', '1999-02-05', 'NXB02', 'Tiếng Anh', 'Bạn thật may mắn khi được sống trong thời đại này bởi có một điều vô cùng vĩ đại sắp xảy ra – đó là sự gặp gỡ giữa khoa học và tôn giáo, sự gặp gỡ giữa Đông và Tây, sự gặp gỡ giữa hướng ngoại và hướng nội. Điều này sẽ tạo ra một con người mới, một con người có thể dễ dàng đi ra bên ngoài hoặc đi vào bên trong, đi vào thế giới hướng ngoại của khoa học hoặc đi vào thế giới hướng nội của tôn giáo – dễ dàng như khi bạn đi từ trong nhà ra vườn rồi lại quay trở vào nhà. Chẳng có gì khó khăn và bạn không cần sự thỏa hiệp nào cả. Mỗi lần ra khỏi nhà và bước lên bãi cỏ, bạn đâu có cần nhọc sức – bạn cứ thế bước ra mà thôi. Trong nhà lạnh quá còn ở ngoài kia, mặt trời rạng rỡ và ấm áp, bạn bước ra bãi cỏ, bạn ngồi xuống bãi cỏ. Rồi khi bên ngoài trở nên quá nóng, bạn lại đi vào nhà vì bên trong rất mát mẻ, chỉ đơn giản vậy thôi.\r\n\r\nMột con người toàn diện sẽ có thể dễ dàng đi vào khoa học và tôn giáo như bạn ra vào nhà mình vậy; cả bên trong lẫn bên ngoài đều thuộc về người đó.'),
('CT0003', 'Bìa in nổi', 100, '130 x 190 x 20mm | 300g', '2001-12-16', 'NXB03', 'Tiếng Pháp', 'Thưa thầy, làm sao thầy, một người đàn ông, lại có thể nói về tâm lý phụ nữ?\r\n\r\nTôi không nói chuyện với tư cách một người đàn ông, tôi nói với tâm thế một người phụ nữ. Tôi không hề nói bằng tâm trí. Tôi có dùng đến tâm trí, nhưng tôi nói chuyện bằng ý thức, bằng nhận thức. Và nhận thức thì không có giới tính, nhận thức chẳng phải đàn ông cũng không phải phụ nữ. Cơ thể bạn có sự phân chia đó, tâm trí bạn cũng vậy, bởi vì tâm trí bạn là phần nội tại của cơ thể bạn, còn cơ thể bạn là vỏ ngoài của tâm trí bạn. Cơ thể và tâm trí bạn không tách rời nhau; chúng là một thực thể. Thực ra, nói cơ thể và tâm trí là không đúng; không nên dùng chữ “và” ở đây. Bạn là cả hai.\r\n\r\nVì thế, với cơ thể, với tâm trí, những từ như nam tính hay nữ tính là có liên quan, có ý nghĩa. Nhưng có một điều vượt trên cả hai khái niệm ấy, một điều siêu việt. Đó là cốt lõi thực sự của bạn, bản thể của bạn. Bản thể đó chỉ nhận thức, chứng kiến, chú tâm. Nó là ý thức thuần túy.'),
('CT0004', 'Bìa cứng', 111, '210 x 240 x 35mm | 900g', '2003-04-25', 'NXB04', 'Tiếng Nga', 'Ngay khi vừa xuất bản năm 1947, cuốn tiểu thuyết Dịch hạch của Albert Camus đã gây tiếng vang lớn: 161.000 bản được bán hết trong hai năm đầu tiên. Kể từ đó đến nay, chỉ tính riêng ngôn ngữ tiếng Pháp, cuốn tiểu thuyết này đã bán được trên 5 triệu bản. Và sau hơn 60 năm sau ngày mất của tác giả, thế giới đã chứng kiến những đại dịch bệnh thật sự, như Ebola, COVID-19,... Không còn là một dịch bệnh hư cấu, những vấn đề liên quan tới nhân loại, cách loài người đối mặt với dịch bệnh, hàng loạt tầng sâu ý nghĩa trong Dịch hạch bỗng trở nên dễ hiểu, cấp thiết trong thời đại ngày nay.'),
('CT0005', 'Bìa 3B', 433, '153 x 234 x 43mm | 758g', '2011-06-14', 'NXB01', 'Tiếng Việt', 'Sau 8 năm Nguyễn Ngọc Tư mới trở lại với độc giả bằng một cuốn tiểu thuyết đậm chất huyền ảo: Biên sử nước. Tinh tế và sắc sảo, huyền ảo và hiện thực cùng hòa quyện, đan xen trong lớp lớp ngôn từ khiến người đọc không thể rời mắt.\r\n\r\nBiên Sử Nước là tác phẩm đặc sắc đánh dấu sự trở lại của Nguyễn Ngọc Tư với tiểu thuyết, sau nhiều năm định danh bằng truyện ngắn. Một tiểu thuyết kết tinh được những đặc sắc trong những tìm tòi sáng tạo của Nguyễn Ngọc Tư về nội dung lẫn bút pháp.\r\n\r\nBiên Sử Nước vì thế vừa quen thuộc vừa lạ lẫm, cho phép người đọc tái khám phá một Nguyễn Ngọc Tư điêu luyện nhưng mới mẻ.\r\n\r\n'),
('CT0006', 'Bìa in nổi', 80, '170 x 240 x 50mm | 200g', '2012-11-11', 'NXB02', 'Tiếng Việt', 'Bạn sẽ từ bỏ những gì để có cơ hội được TỎA SÁNG?\r\n\r\nĐể thành công, bạn cần nỗ lực, nhưng như thế có thể là chưa đủ.\r\n\r\nĐể theo đuổi những ước mơ của mình, bạn có thể phải chấp nhận từ bỏ một số điều khác, bao gồm cả những điều rất quan trọng đối với bạn. Bởi vì, mỗi sự lựa chọn đều đi kèm với một sự hy sinh.\r\n\r\nVậy bạn sẽ sẵn sàng từ bỏ những gì để giành lấy một cơ hội được sống với ước mơ của mình?\r\n\r\nĐối với Rachel Kim, một cô bạn 17 tuổi người Mỹ gốc Hàn, thì câu trả lời là: Gần như tất cả mọi thứ.'),
('CT0007', 'Bìa cứng', 90, '130 x 190 x 20mm | 300g', '2020-04-05', 'NXB03', 'Tiếng Anh', 'Một sát thủ bí ẩn âm thầm xuất hiện trong thành phố, hắn lặng lẽ hành quyết những người lang thang, những kẻ tâm thần. Sau khi gây án, hắn hoàn toàn không để lại dấu vết nào ngoại trừ chữ “Kẻ dọn rác” như lời thách thức dành cho giới cảnh sát. Nhóm giám định hiện trường có thể tìm thấy tay sát thủ thoắt ẩn thoắt hiện như bóng ma kia nhờ vào những dấu vô cùng tinh vi không? Mỗi giây mỗi phút diễn ra trong series “Bác sĩ pháp y Tần Minh” đều khiến từng tế bào thần kinh của bạn chịu kích thích đến cực độ. Tần Minh là một bác sĩ pháp y rất có danh tiếng tại Trung Quốc. Ông chính là tác giả của series sách bán chạy “Bác sĩ pháp y Tần Minh”. Tần Minh bước vào nghề pháp y từ rất sớm, nên ông có kinh nghiệm vô cùng phong phú trong việc giải mã dấu hiệu phạm tội trên các xác chết. Theo ông, những dấu hiệu đó chính là “lời của xác chết”. Với đôi tay phẫu thuật quỷ khốc thần sầu, với sự bình tĩnh đáng nể và tấm lòng nhân từ như Đức Phật, ông đã phanh phui biết bao sự thật bi thảm, giúp các oan hồn được giải thoát.'),
('CT-GYRk', 'Bìa Cứng', 232, '153 x 234 x 43mm | 758g', '2021-05-30', 'NXB02', 'Tiếng Việt', 'Sách nên mua kèm với sách này\r\n-15%Nhân Chứng Buộc Tội - The Witness For The Prosecution	+	-15%Con Mồi Hoàng Kim - Golden Prey	+	-15%Con Mồi Hoàng Kim - Golden Prey	 \r\nTổng giá bán 364.000 ₫\r\n\r\nNhân Chứng Buộc Tội - The Witness For The Prosecution 110.000 ₫\r\n\r\nCon Mồi Hoàng Kim - Golden Prey 127.000 ₫\r\n\r\nCon Mồi Hoàng Kim - Golden Prey 127.000 ₫\r\nGIỚI THIỆU SÁCHTHÔNG TIN CHI TIẾTĐÁNH GIÁ & BÌNH LUẬNKẻ Trừng Phạt (Series Bác Sĩ Pháp Y Tần Minh) (Tái Bàn 2020)Thông tin tác giả\r\nVi Nhất Đồng\r\nVào trang riêng của tác giả\r\nXem tất cả các sách của tác giả\r\n“Kẻ Trừng Phạt”, kích thích hơn “người giải mã tử thi” của Tần Minh, rúng động hơn “Tội ác tâm lý” của Lôi Mễ! Tác phẩm được các tác giả Liên Bồng, Lôi Mễ, Tri Thù, Tần Minh đặc biệt giới thiệu!\r\n\r\n“Kẻ Trừng Phạt”, tác phẩm mới nhất đánh dấu sự trở lại của tay bút được đánh giá là “hiện tượng” của dòng tiểu thuyết trinh thám trên trang Tianya.cn, kể về cuộc quyết chiến cuối cùng giữa CHÍNH NGHĨA và TÀ ÁC!\r\n\r\nMột “thi thể nữ” biết lái xe, một linh hồn “hồi sinh”, cuộc hẹn với người đã chết, những lời tiên đoán đáng sợ, khu trường học có “ma”… những tình tiết móc ngoặc, cảm xúc không ngừng thay đổi, yếu tố trinh thám dày đặc, biến thái, tuyệt mật, hồi hộp, những cách thức phạm tội tinh vi và hiện đại, chứng cứ vắng mặt hoàn hảo, những âm mưu quỷ kế không thể lật tẩy, những màn sương mù che phủ không thể làm tan biến, bạn sẽ đau tim đến cực độ, một cảm giác đọc sách thật đê mê!');

-- --------------------------------------------------------

--
-- Table structure for table `docgia`
--

CREATE TABLE `docgia` (
  `MaDocGia` varchar(10) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TenDocGia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `TienHienCo` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT '1',
  `Password` text NOT NULL,
  `DiaChi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docgia`
--

INSERT INTO `docgia` (`MaDocGia`, `HinhAnh`, `TenDocGia`, `NgaySinh`, `TienHienCo`, `UserName`, `TrangThai`, `Password`, `DiaChi`) VALUES
('DG0001', 'imag-01.jpg', 'Nguyễn Văn Anh', '1999-01-01', 500000, 'DG0001Reader', 0, '123456', 'Quận 1, TP Hồ Chí Minh'),
('DG0002', 'imag-02.jpg', 'Lê Thị Bình', '1998-02-03', 500000, 'DG0002Reader', 1, '123456', 'Quận 2, TP Hồ Chí Minh'),
('DG0003', 'imag-03.jpg', 'Trần Ngọc Chi', '1996-04-06', 500000, 'DG0003Reader', 1, '123456', 'Quận 3, TP Hồ Chí Minh'),
('DG0004', 'imag-04.jpg', 'Huỳnh Phương Dung', '1994-05-06', 500000, 'DG0004Reader', 1, '123456', 'Quận 4, TP Hồ Chí Minh'),
('DG0005', 'imag-05.jpg', 'Nguyễn Thị Diễm', '1999-01-01', 500000, 'DG0005Reader', 1, '123456', 'Quận 5, TP Hồ Chí Minh'),
('DG0006', 'imag-06.jpg', 'Mai Thanh Em', '1998-02-03', 500000, 'DG0006Reader', 1, '123456', 'Quận 6, TP Hồ Chí Minh'),
('DG0007', 'imag-07.jpg', 'Phạm Tấn Phong', '1996-04-06', 400000, 'DG0007Reader', 1, '123456', 'Quận 7, TP Hồ Chí Minh'),
('DG0008', 'imag-08.jpg', 'Lâm Thu Giang', '1994-05-06', 500000, 'DG0008Reader', 1, '123456', 'Quận 8, TP Hồ Chí Minh'),
('DG0009', 'imag-09.jpg', 'Hồ Minh Hoàng', '1999-01-01', 500000, 'DG0009Reader', 0, '123456', 'Quận 9, TP Hồ Chí Minh'),
('DG0010', 'imag-10.jpg', 'Võ Thị Thu Linh', '1998-02-03', 500000, 'DG0010Reader', 1, '123456', 'Quận 10, TP Hồ Chí Minh'),
('DG0011', 'imag-11.jpg', 'Hoàng Ngọc Minh', '1999-01-01', 400000, 'DG0011Reader', 0, '123456', 'Quận 1, TP Hồ Chí Minh'),
('DG0012', 'imag-12.jpg', 'Lê Hoàng Như', '1998-02-03', 500000, 'DG0012Reader', 1, '123456', 'Quận 2, TP Hồ Chí Minh'),
('DG0013', 'imag-13.jpg', 'Tống Thanh Tòng', '1996-04-06', 400000, 'DG0013Reader', 1, '123456', 'Quận 3, TP Hồ Chí Minh'),
('DG0014', 'imag-14.jpg', 'Phan Vũ Duy Phương', '1994-05-06', 400000, 'DG0014Reader', 1, '123456', 'Quận 4, TP Hồ Chí Minh'),
('DG0015', 'imag-15.jpg', 'Đặng Thi Thu Quyên', '1999-01-01', 500000, 'DG0015Reader', 1, '123456', 'Quận 5, TP Hồ Chí Minh'),
('DG0016', 'imag-16.jpg', 'Võ Thị Thu Yên', '1998-02-03', 500000, 'DG0016Reader', 1, '123456', 'Quận 6, TP Hồ Chí Minh'),
('DG0017', 'imag-17.jpg', 'Nguyễn Trần Vũ', '1996-04-06', 500000, 'DG0017Reader', 1, '123456', 'Quận 7, TP Hồ Chí Minh'),
('DG0026', 'imag-26.jpg', 'Lưu Vũ Thanh', '1998-02-03', 400000, 'DG0026Reader', 0, '123456', 'Quận 6, TP Hồ Chí Minh'),
('DG0027', 'imag-01.jpg', 'Vũ Thị Hoa', '1996-04-06', 500000, 'DG0027Reader', 0, '123456', 'Quận 7, TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` varchar(10) NOT NULL,
  `MaDocGia` varchar(10) NOT NULL,
  `NgayLapHD` date DEFAULT NULL,
  `TongSoLuong` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TinhTrang` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `MaDocGia`, `NgayLapHD`, `TongSoLuong`, `TongTien`, `TinhTrang`) VALUES
('HD-RWO4', 'DG0002', '2021-06-01', 5, 1300000, -1),
('HD-fx6N', 'DG0002', '2021-06-01', 3, 1098000, 1),
('HD-egqz', 'DG0002', '2021-06-01', 12, 2000000, 0),
('HD-NCzl', 'DG0025', '2021-06-02', 2, 198000, 0),
('HD-m2TH', 'DG0025', '2021-06-02', 2, 400000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `id` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `firstName` text COLLATE utf8mb4_vietnamese_ci,
  `lastName` text COLLATE utf8mb4_vietnamese_ci,
  `password` varchar(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`id`, `username`, `email`, `firstName`, `lastName`, `password`, `role`) VALUES
('MN1', 'manager', 'manager1@gmail.com', 'Phạm', 'Tấn Tài', '123456', 'ADMIN'),
('MN2', 'manager2', 'manager21@gmail.com', 'Phạm', 'Tấn Bla bla', '123456', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNXB` varchar(10) NOT NULL,
  `TenNXB` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`) VALUES
('NXB01', 'NXB Kim Đồng'),
('NXB02', 'NXB Hồng Ân'),
('NXB03', 'NXB Trẻ'),
('NXB04', 'NXB Tổng hợp Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `MaSach` varchar(10) NOT NULL,
  `MaTheLoai` varchar(10) NOT NULL,
  `TenSach` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` text NOT NULL,
  `MaTacGia` varchar(10) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `GiaMacDinh` int(11) NOT NULL,
  `LuotMua` int(11) NOT NULL DEFAULT '1',
  `SoLuong` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT '1',
  `MaChiTiet` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `MaTheLoai`, `TenSach`, `HinhAnh`, `MaTacGia`, `GiaBan`, `GiaMacDinh`, `LuotMua`, `SoLuong`, `TrangThai`, `MaChiTiet`) VALUES
('S0001', 'TL0001', 'Thành công', '1.jpg', 'TG0001', 500000, 625000, 548, 2141, 0, 'CT0001'),
('S0002', 'TL0002', 'Osho Đàn ông', '2.jpg', 'TG0002', 300000, 375000, 548, 2141, 1, 'CT0002'),
('S0003', 'TL0003', 'Osho Phụ Nữ', '3.jpg', 'TG0003', 200000, 250000, 548, 2141, 1, 'CT0003'),
('S0004', 'TL0004', 'Dịch Hạch', '4.jpg', 'TG0004', 100000, 125000, 548, 2141, 1, 'CT0004'),
('S0005', 'TL0005', 'Biên sử nước', '5.jpg', 'TG0005', 98000, 122500, 548, 2141, 1, 'CT0005'),
('S0006', 'TL0006', 'Tỏa sáng', '6.jpg', 'TG0006', 50000, 62500, 548, 2141, 1, 'CT0006'),
('S0007', 'TL0007', 'Kẻ dọn rác', '7.jpg', 'TG0007', 100000, 125000, 548, 2141, 1, 'CT0007'),
('S-4gPA', 'L-rMyg', 'Kẻ trừng phạt', '8.jpg', 'TG0007', 135000, 125000, 1, 2, 1, 'CT-GYRk');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTacGia` varchar(10) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TenTacGia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `SoSachXuatBan` int(11) NOT NULL,
  `ThongTin` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTacGia`, `HinhAnh`, `TenTacGia`, `NgaySinh`, `SoSachXuatBan`, `ThongTin`, `TrangThai`) VALUES
('TG0001', 'Gao.jpg', 'Gào', '1988-07-08', 121, 'Người đầu tiên phải kể chính là nữ nhà văn Gào, nữ nhà văn vừa nhận giải Tác giả nữ được yêu thích nhất năm 2015 của Tiki Book Awards. Gào tên thật là Vũ Phương Thanh, cô sinh ngày 08/07/1988, cô là một hot blogger đình đám, sở hữu hàng triệu lượt người xem.\r\n\r\nGào là một cô gái cá tính và đầy hoài bão, từ năm 17 tuổi cô đã đi làm tại những công ty lớn, thử sức làm CEO ở tuổi 21. Gào cũng từng làm quản lý cho nhóm nhạc 365daband của công ty VAA.\r\n\r\nMốc son đánh dấu sự nghiệp văn chương của cô chính là 2 tiểu thuyết: Cho em gần anh thêm chút nữa (2009), Nhật kí son môi (2010). Và cho đến khi Tự sát chính thức ra mắt cùng với trailer bộ phim cùng tên với sự tham gia của 2 thành viên trong nhóm nhạc 365 là Isaac và Jun thì tên tuổi của nhà văn trẻ này ngày càng được nhiều người biết đến hơn.\r\n\r\nNgoài ra cô còn cho ra đời những đứa con tinh thần như: Chúng ta rồi sẽ ổn thôi, Anh sẽ yêu em mãi chứ?, Hoa linh lan, Yêu em bởi tất cả những gì em có - mất anh bởi tất cả những gì cho,... Hiện nay, Gào đang sống hạnh phúc bên gia đình nhỏ của mình, cùng chồng và hai bé Bìn và Min. Cùng với việc sáng tác, cô cũng đang ấp ủ và thực hiện những dự án kinh doanh của mình.', 0),
('TG0002', 'HamletTruong.jpg', 'Hamlet Trương', '1988-09-22', 321, 'Hamlet Trương tên thật là Lê Văn Trương, sinh ngày 22/9/1988. Anh hoạt động trên khá nhiều lĩnh vực khác nhau: ca sĩ, nhạc sĩ, nhà văn, MC,.. Trong sự nghiệp sáng tác văn chương, anh có nhiều tác phẩm được độc giả yêu thích như: Tay tìm tay tay níu tay, Yêu đi rồi khóc, Thương nhau để đó, Thời gian để yêu, Thấu hiểu,... Chính nhờ số lượng bài viết khá lớn và phù hợp với thị hiếu đọc của giới trẻ nên hiện nay anh sở hữu số lượng độc giả nhất nhì làng sách.\r\n\r\n', 1),
('TG0003', 'TueNghi.jpg', 'Tuệ Nghi', '1993-04-16', 122, 'Tuệ Nghi tên thật là Phan Thanh Bảo Ngọc (1993) là Tổng giám đốc Công ty TNHH Đầu tư Thương mại Nghi Phong, là Doanh nhân Tiên Phong – Thương hiệu hàng đầu Việt Nam năm 2013.\r\nĐến với văn chương một cách hết sức tự nhiên, tác phẩm của Tuệ Nghi với sự trải lòng mình qua hình tượng nhân vật nữ chính được lấy cảm hứng từ chính tác giả. Cô đã đưa người đọc đến với một thế giới đầy biến động với những giọt nước mắt nhọc nhằn, đắng cay và thụ hưởng khát khao, hi vọng.\r\n\r\nNhững quyển sách đã được xuất bản của nữ tác giả là: Luật ngần, Sẽ có cách, đừng lo!, Cứ bình tĩnh,…', 1),
('TG0004', 'MinhNhat.jpg', 'Nguyễn Minh Nhật', '1987-03-03', 324, 'Nguyễn Minh Nhật với bút danh Sky đã trở nên rất quen thuộc với độc giả. Anh sinh ngày 3/3/1987, từng là du học sinh tại Singapore và là cây bút trẻ được nhiều người yêu mến. Anh được mọi người gọi là "Hoàng tử truyện ngắn", với những truyện ngắn xoay quanh đề tài về tuổi học trò, dịu dàng, nhẹ nhàng cũng đầy trăn trở.\r\nĐôi khi những vấn đề mà Minh Nhật viết tưởng chừng quen thuộc, giản dị nhưng gửi gắm biết bao ý nghĩa, làm cho ta giật mình vì dường như đã bị lãng quên. Những tác phẩm của anh có thể kể đến như: Cafe yêu, Nơi những cơn gió dừng chân, Những đêm không ngủ, Những quân cờ Domino, Lạc lối giữa cô đơn,...', 1),
('TG0005', 'NgocThach.jpg', 'Ngọc Thạch', '1991-03-04', 112, 'Nguyễn Ngọc Thạch không phải là một cái tên xa lạ trong cộng đồng văn học mạng. Những đề tài sáng tác của anh khá nhạy cảm, xoay quanh những vấn đề khá nhạy cảm như thế giới thứ ba, mại dâm, chuyển giới. Nhưng với giọng văn trần thuật, gai góc, nhưng giàu cảm xúc các tác phẩm của Thạch viết rất được đông đảo độc giả đón nhận như: Đời callboy, Lòng dạ đàn bà, Chênh vênh hai lăm, Một giọt đàn bà,...', 1),
('TG0006', 'AnhKhang.jpg', 'Anh Khang', '1989-02-03', 23, 'Nhà văn Anh Khang, tên đầy đủ là Quách Lê An Khang, sinh ngày 11/08/1987. Anh xuất thân là học sinh chuyên văn của trường Lê Hồng Phong (TP. Hồ Chí Minh). Anh Khang tiếp tục rèn luyện ngòi bút trong những năm tháng là sinh viên của trường Khoa học xã hội và nhân văn.\r\nCó thể nói những tác phẩm của Anh Khang để lại những dấu ấn khó phai trong lòng người đọc với những tác phẩm như: Ngày trôi về phía cũ, Đường hai ngả – Người thương thành lạ, Buồn làm sao buông, Đi đâu cũng nhớ Sài Gòn và em, Thương mấy cũng là người dưng,...Hiện nay, Anh Khang đảm khá nhiều công việc vừa là phóng viên, vừa công tác trong lĩnh vực PR - Marketing nhưng anh không từ bỏ đam mê viết lách của mình.', 1),
('TG0007', 'PhanYYen.jpg', 'Phan Ý Yên', '1995-01-04', 122, 'Phan Ý Yên tên thật là Nguyễn Hoàng Phương Thảo, sinh ngày 27/02/1985. Bút danh Phan Ý Yên với ý nghĩa là "tâm ý bình yên". Đây là một cây bút trẻ, giàu nội lực được nhiều chị em phụ nữ bởi những tác phẩm của cô luôn truyền cảm hứng sống mạnh mẽ. Những tác phẩm của cô được xuất bản như: Người lớn cô đơn, Đường về nhà, Em là để yêu, Cà phê với người lạ, Suốt một mùa đông,...', 1),
('TG0008', 'IrisCao.jpg', ' Iris Cao', '1992-02-03', 311, 'Iris Cao sinh ngày 14/03/1988, là sinh viên ngành quảng cáo - truyền thông ở Singapore. Cô về nước hoạt động trong ngành giải trí cho nhiều công ty lớn như WEpro, YanTV. Thương nhau để đó (2012) là quyển sách đầu tay của cô, gặt hái được nhiều thành công. Sau quyển sách đầu tay, cô cho ra đời cuốn sách Người yêu cũ có người yêu mới, đây là cuốn sách thuộc thể loại tản văn, lấy cảm hứng từ những mối quan hệ say mê và day dứt của những người đang yêu.', 1),
('TG0009', 'JunPham.jpg', 'Jun Phạm', '1992-12-03', 217, 'Jun Phạm tên thật là Phạm Duy Thuận, sinh ngày 24/07/1989. cựu thành viên của nhóm nhạc 365daband. Ra mắt với tư cách là một ca sĩ, sau 3 năm ca hát, Jun lấn sân sang lĩnh vực văn học và cho ra mắt quyển sách đầu tay "Nếu Như Không Thể Nói Nếu Như". Theo đuổi phong cách viết lãng mạn, vừa giản dị, gần gũi lại vừa mang hơi hướng nghệ sĩ, được viết bằng chính những cảm xúc chân thật của mình. Anh là cây bút được độc giả rất yêu thích, mỗi đầu sách ra mắt đều được bán với số lượng lớn.\r\nMột số sách đã ra mắt: Nếu Như Không Thể Nói Nếu Như, Có Ai Giữ Dùm Những Lãng Quên, 365 - Những Người Lạ Quen Thuộc.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaTheLoai` varchar(10) NOT NULL,
  `TenTheLoai` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoSach` int(11) NOT NULL DEFAULT '0',
  `TrangThai` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`, `SoSach`, `TrangThai`) VALUES
('TL0001', 'Nghệ thuật & Nhiếp ảnh', 27784, 1),
('TL0002', 'Tiểu sử', 2222, 0),
('TL0003', 'Sách thiếu nhi', 45533, 1),
('TL0004', 'Thủ công & Hobbies', 4565, 1),
('TL0005', 'Tội phạm và Phim kinh dị', 45435, 0),
('TL0006', 'Giả tưởng và Truyện kinh dị', 23232, 1),
('TL0007', 'Viẽn tưởng', 6456, 1),
('TL0008', 'Ẩm thực', 12111, 0),
('L-rMyg', 'Drama', 1, 1),
('L-otCO', 'Nhảm nhí', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHoaDon`,`MaSach`) USING BTREE;

--
-- Indexes for table `chitietsach`
--
ALTER TABLE `chitietsach`
  ADD PRIMARY KEY (`MaChiTiet`);

--
-- Indexes for table `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`MaDocGia`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTacGia`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTheLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
