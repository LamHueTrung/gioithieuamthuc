-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2024 lúc 10:45 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_daiphu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldanhmuc`
--

CREATE TABLE `tbldanhmuc` (
  `id_danhmuc` int(20) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `mota` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`id_danhmuc`, `tendanhmuc`, `mota`) VALUES
(3, 'Trà Vinh', 'Trà Vinh nằm ở cuối cù lao, nằm giữa sông Tiền và sông Hậu. Địa hình chủ yếu là đất bằng phẳng với độ cao dưới 1m so với mực nước biển. Vì nằm ở vùng đồng bằng ven biển, có nhiều giồng cát chạy dọc theo bờ biển, tạo thành các đường cong song song. Các giồng càng gần biển càng cao và rộng hơn.\r\n\r\nVới sự chia cắt bởi các giồng và mạng lưới đường lộ, kinh rạch, địa hình Trà Vinh khá phức tạp. Có các vùng trũng xen kẹp giữa các giồng cao, và độ dốc chỉ thể hiện trên từng cánh đồng. Đặc biệt, phần nam tỉnh có đất thấp, bị chia cắt bởi các giồng cát hình cánh cung thành nhiều vùng trũng nhỏ, với độ cao chỉ từ 0,5-0,8m. Do đó, hàng năm, vùng này thường bị ngập mặn trong khoảng thời gian từ 3-5 tháng.'),
(6, 'Hà Nội', 'Hà Nội là thủ đô, thành phố trực thuộc trung ương và là một trong hai đô thị loại đặc biệt của nước Cộng hòa xã hội chủ nghĩa Việt Nam. Đây là thành phố lớn nhất (về mặt diện tích) Việt Nam, có vị trí là trung tâm chính trị, một trong hai trung tâm kinh tế, văn hóa, giáo dục quan trọng tại Việt Nam. Hà Nội nằm về phía tây bắc của trung tâm vùng đồng bằng châu thổ sông Hồng, với địa hình bao gồm vùng đồng bằng trung tâm và vùng đồi núi ở phía bắc và phía tây thành phố. Với diện tích 3.359,82 km²,[2] và dân số 8,4 triệu người,[4] Hà Nội là thành phố trực thuộc trung ương có diện tích lớn nhất Việt Nam, đồng thời cũng là thành phố đông dân thứ hai và có mật độ dân số cao thứ hai trong 63 đơn vị hành chính cấp tỉnh của Việt Nam, nhưng phân bố dân số không đồng đều. Hà Nội có 30 đơn vị hành chính cấp huyện, gồm 12 quận, 17 huyện và 1 thị xã.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldiadiem`
--

CREATE TABLE `tbldiadiem` (
  `id` int(20) NOT NULL,
  `tendiadiem` varchar(300) NOT NULL,
  `hinhanh` varchar(300) NOT NULL,
  `mota` mediumtext NOT NULL,
  `diadiem` int(11) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `giophucvu` varchar(100) DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbldiadiem`
--

INSERT INTO `tbldiadiem` (`id`, `tendiadiem`, `hinhanh`, `mota`, `diadiem`, `diachi`, `giophucvu`, `sodienthoai`, `id_danhmuc`) VALUES
(13, 'Quán kimoochi', '391629404_817482557045162_6041731349485872144_n.jpg', 'Cùng chào đón Kimochi trong một diện mạo mới, mang màu sắc bất hủ của những năm về trước cho đến bây giờ vẫn thịnh hành. Mang đậm một Trà Vinh quen thuộc và thân thương \r\nHứa hẹn đây sẽ là một địa điểm ăn uống, tụ tập và chill cùng bạn bè hay gia đình đều lí tưởng 🍀\r\n🌻Nhân dịp khai trương KIMOOCHI TÂN THỜI sẽ có chương trình khuyến mãi như sau:\r\nTất cả khách check in tại quán đều được tặng lon nước ngọt mang về . \r\n         💥KIMOOCHI TÂN THỜI', NULL, 'Địa chỉ Khóm 4 phường 5 đường dương quang đông ( bờ kè )', '08:30', '0379017212', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblloaidiadiem`
--

CREATE TABLE `tblloaidiadiem` (
  `id` int(20) NOT NULL,
  `tenloaidiadiem` varchar(50) NOT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmonan`
--

CREATE TABLE `tblmonan` (
  `id_monan` int(20) NOT NULL,
  `tenmonan` varchar(50) NOT NULL,
  `hinhanh` varchar(300) NOT NULL,
  `congthuc` mediumtext NOT NULL,
  `nguyenlieu` varchar(500) NOT NULL,
  `vungmien` varchar(50) NOT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblmonan`
--

INSERT INTO `tblmonan` (`id_monan`, `tenmonan`, `hinhanh`, `congthuc`, `nguyenlieu`, `vungmien`, `id_danhmuc`) VALUES
(45, 'Bún nước lèo', 'nhung-mon-an-ngon-dac-san-tra-vinh-ban-nhat-dinh-phai-thu-202201051146071479.jpg', 'Sơ chế cá lóc\r\nCá lóc làm sạch, để ráo nước rồi cắt lấy thịt phi lê.\r\n\r\nDùng dao nhỏ, sắc bén, cắt đường thẳng dọc từ đầu cá tới phía đuôi, sát theo xương sống cá. Tương tự với bên còn lại, các bạn nhớ nhẹ nhàng từ từ cắt phần xương này, tránh làm cắt rời phần thịt cá.\r\n\r\nCắt rời phần xương sống cá ở đuôi, dùng kéo cắt rời xương sống khỏi thịt cá từ đuôi lên đầu.\r\n\r\nĐối với phần xương nhỏ ban đầu bạn cắt rời khỏi xương sống, bạn dùng dao nhỏ bén, nhẹ nhàng lóc sạch chúng ra khỏi phần thịt cá.\r\n\r', 'Nguyên liệu làm Bún nước lèo cho 3 người\r\n Bún tươi 500 gr\r\n Cá lóc 250 gr\r\n Tôm sú 300 gr\r\n Mắm cá linh 100 gr\r\n Nước dừa tươi 200 ml\r\n Bắp chuối 1 cái\r\n Giá đỗ 100 gr\r\n Hẹ 100 gr\r\n Húng quế 50 gr\r\n Sả 3 cây\r\n Ớt 10 gr\r\n Chanh 1 trái\r\n Nước lọc 800 ml', 'Miền Nam', 3),
(46, 'bún đậu mắm tôm mẹt', 'cach-lam-bun-dau-mam-tom-ngon-ngat-ngay-an-mot-lan-la-ghien-avt-1200x675.jpg', '1\r\nSơ chế thịt, lưỡi và bộ lòng heo\r\nGan, phèo non, dạ dày heo sau khi mua về thì rửa thật sạch với nhiều lần nước. Để khử mùi hôi thì bạn bóp chúng với giấm, chanh, muối và rửa lại với nước thêm nhiều lần cho sạch hoàn toàn.\r\n\r\nLưu ý: Đối với bộ lòng heo bạn cần phải làm sạch thật kỹ càng trước khi chế biến để đảm vệ sinh, an toàn. Để rõ hơn về chi tiết các sơ chế bạn có thể tham khảo trong các bài viết dưới.\r\nCách sơ chế phèo non heo:\r\n\r\nCách 1: Dùng hỗn hợp bột mì với muối để chà sát bề mặt p', 'Nguyên liệu làm Bún đậu mắm tôm cho 6 người\r\n Bún lá 1 ít\r\n(hoặc bún tươi loại thường)\r\n Đậu hũ 1 kg\r\n Phèo non 600 gr\r\n(ruột non)\r\n Gan 200 gr\r\n Huyết 100 gr\r\n Dạ dày 300 gr\r\n(bao tử)\r\n Lưỡi heo 1 cái\r\n Thịt heo 500 gr\r\n(thịt chân giòn hoặc thịt ba chỉ)\r\n Thịt heo xay 300 gr\r\n Khoai tây 1 củ\r\n Nấm mèo 500 gr\r\n Ớt 2 trái\r\n Dưa leo 3 quả\r\n Chanh 2 quả\r\n Rau ăn kèm 1 ít\r\n(tía tô/ húng quế/ kinh giới/ diếp cá/…)\r\n Hành tím 4 củ\r\n Tỏi 4 tép\r\n Gừng 1 củ\r\n Bánh tráng rế 15 cái\r\n Mắm tôm 500 gr\r\n Giấm ', 'Miền Bắc', 6),
(47, 'Cá vược nấu canh chua', 'canhchuacavuoc-1200x676.jpg', '1\r\nSơ chế cá vược\r\nCá vược mua về cắt bỏ mang, cạo bỏ vảy, đồng thời dùng dao mổ bụng, bỏ ruột, đồng thời lấy sạch đường gân máu chạy dọc sống lưng.\r\n\r\nMang cá đi chà xát với muối khoảng 3 - 5 phút, sau đó đem rửa lại với nước sạch vài lần, rồi để ráo.\r\n\r\nMẹo khử mùi tanh cá vược\r\n\r\nDùng nước cốt chanh hòa với nước ấm đem ngâm cùng cá vược 5 - 7 phút mùi tanh sẽ biến mất ngay.\r\nTiến hành ngâm cá vược với nước muối pha loãng 5 - 10 phút hoặc chà xát muối vào thân cá không những khử mùi mà còn loạ', 'Nguyên liệu làm Cá vược nấu canh chua cho 4 người\r\n Cá vược 700 gr\r\n Cà chua 3 trái\r\n Me chua 6 trái\r\n(khoảng 100gr)\r\n Hành tím 3 củ\r\n Ớt hiểm 2 trái\r\n Rau răm 1 ít\r\n Hành lá 2 nhánh\r\n Thì là 2 nhánh\r\n Dầu ăn 4 muỗng canh\r\n Nước mắm 1 muỗng canh\r\n Gia vị thông dụng 1 ít\r\n(muối/ hạt nêm/ bột ngọt)', 'Miền Nam', 3),
(48, 'Canh cà chua trứng (canh mây)', 'canh-ca-chua-trung-thumbnail.jpg', '1\r\nSơ chế nguyên liệu\r\nĐập trứng cho vào tô cùng với 1 muỗng cà phê nước mắm, 1 muỗng cà phê hạt nêm và đánh trứng cho tan ra hết.\r\n\r\nCà chua mua về rửa sạch, cắt múi cau. Hành tím lột vỏ, rửa sạch rồi cắt lát. Hành lá rửa sạch cắt nhỏ.\r\n\r\nBước 1 Sơ chế nguyên liệu Canh cà chua trứng (canh mây)Bước 1 Sơ chế nguyên liệu Canh cà chua trứng (canh mây)Bước 1 Sơ chế nguyên liệu Canh cà chua trứng (canh mây)Bước 1 Sơ chế nguyên liệu Canh cà chua trứng (canh mây)\r\n2\r\nNấu canh\r\nBắc nồi lên bếp, cho vào ', 'Nguyên liệu làm Canh cà chua trứng (canh mây) cho 1 tô canh\r\n Trứng 2 quả\r\n(trứng gà hoặc trứng vịt tùy thích)\r\n Cà chua 1 quả\r\n Hành tím 2 củ\r\n Hành lá 1 nhánh\r\n Nước mắm 1 muỗng cà phê\r\n Dầu ăn 1/2 muỗng canh\r\n Gia vị thông dụng 1 ít\r\n(muối/ hạt nêm/ tiêu)', 'Miền Nam', 3),
(49, 'Canh khoai mỡ chay nấm đùi gà', 'gtggg-thumbnail.jpg', '1\r\nSơ chế các nguyên liệu\r\nKhoai mỡ sau khi mua về gọt vỏ, rửa sạch sau đó băm nhuyễn hoặc dùng muỗng để nạo.\r\n\r\nNấm đùi gà rửa sạch, cắt khoanh vừa ăn. Ngò gai, ngò om rửa sạch cắt nhỏ cùng hành tím\r\n\r\nBước 1 Sơ chế các nguyên liệu Canh khoai mỡ chay nấm đùi gàBước 1 Sơ chế các nguyên liệu Canh khoai mỡ chay nấm đùi gàBước 1 Sơ chế các nguyên liệu Canh khoai mỡ chay nấm đùi gàBước 1 Sơ chế các nguyên liệu Canh khoai mỡ chay nấm đùi gà\r\n2\r\nXào và nấu nấm đùi gà\r\nLàm nóng một muỗng canh dầu ăn rồ', 'Nguyên liệu làm Canh khoai mỡ chay nấm đùi gà cho 4 người\r\n Khoai mỡ 400 gr\r\n(khoai ngọt)\r\n Nấm đùi gà 20 gr\r\n Tiêu 1 ít\r\n Đường 1 muỗng canh\r\n Hạt nêm chay 2 muỗng canh\r\n Nước mắm chay 1/2 muỗng canh\r\n Ngò gai 2 nhánh\r\n Hành tím 2 củ\r\n Dầu ăn 1 ít\r\n Ngò om 2 nhánh', 'Miền Nam', 3),
(50, 'Trứng nướng phô mai', 'maxresdefault-(16)-1200x676.jpg', 'Bước 1: Lấy lòng trứng ra ngoài và trộn phô mai\r\nDùng nĩa đập dập phần đầu nhỏ của trứng, sau đó nhẹ nhàng bóc lớp vỏ đã vỡ của quả trứng sao cho có thể lấy được lòng trứng ra. Chú ý nhẹ tay không để vỏ trứng bị vỡ.\r\nSau khi lấy lết lòng trứng ra, bạn cho 75gr phô mai Mozzarella cắt vụn vào, đánh đều tay cho lòng trứng tan hết và hòa quyện với phô mai.\r\n\r\nBước 2: Sơ chế vỏ trứng\r\nSau khi đã lấy lòng trứng ra rồi, bạn rửa sạch vỏ trứng cả bên trong lẫn bên ngoài.\r\nDùng kéo cắt bớt miệng vết đập trứng cho tròn đều và đẹp hơn nhé.\r\n\r\nBước 3: Rót trứng vào vỏ\r\nSau khi đã chuẩn bị xong vỏ trứng thì bạn rót phần trứng phô mai vào lại vỏ. Chỉ rót đến 2/3 vỏ trứng, đừng rót đầy quá để trứng tránh bị trào ra ngoài sau khi nướng.\r\n\r\nBước 4: Nướng trứng\r\nBật lò nướng ở nhiệt độ 170 độ C trong 10 phút để làm nóng lò.\r\nLấy 1 cái khay bánh cupcake và lót 1 lớp muối hạt bên dưới để tăng nhiệt độ khi nướng trứng. Cho từng quả trứng vào từng ô của khay và nướng ở nhiệt độ 175 độ C trong 10 phút.\r\n\r\nBước 5: Thành phẩm\r\nTrứng nướng phô mai béo ngậy, thơm ngon, khi ăn thì mềm mịn như muốn tan ngay trong miệng. Đây là một biến tấu mới lạ của món trứng nướng mà bạn nhất định không nên bỏ qua đâu đấy!', 'Nguyên liệu làm Trứng nướng phô mai cho 5 người\r\n Trứng gà 10 quả\r\n Phô mai Mozzarella 75 gr\r\n(bào vụn)\r\n Muối hạt 1 ít', 'Miền Nam', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmonan_diadiem`
--

CREATE TABLE `tblmonan_diadiem` (
  `id` int(20) NOT NULL,
  `nhanxet` varchar(50) NOT NULL,
  `monan` int(11) DEFAULT NULL,
  `diadiem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnguoidung`
--

CREATE TABLE `tblnguoidung` (
  `id` int(20) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `matkhau` text DEFAULT NULL,
  `hoten` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbldiadiem`
--
ALTER TABLE `tbldiadiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diadiem` (`diadiem`);

--
-- Chỉ mục cho bảng `tblloaidiadiem`
--
ALTER TABLE `tblloaidiadiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblmonan`
--
ALTER TABLE `tblmonan`
  ADD PRIMARY KEY (`id_monan`),
  ADD KEY `danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tblmonan_diadiem`
--
ALTER TABLE `tblmonan_diadiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monan` (`monan`),
  ADD KEY `diadiem` (`diadiem`);

--
-- Chỉ mục cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `id_danhmuc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbldiadiem`
--
ALTER TABLE `tbldiadiem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tblloaidiadiem`
--
ALTER TABLE `tblloaidiadiem`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblmonan`
--
ALTER TABLE `tblmonan`
  MODIFY `id_monan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `tblnguoidung`
--
ALTER TABLE `tblnguoidung`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbldiadiem`
--
ALTER TABLE `tbldiadiem`
  ADD CONSTRAINT `tbldiadiem_ibfk_1` FOREIGN KEY (`diadiem`) REFERENCES `tblloaidiadiem` (`id`);

--
-- Các ràng buộc cho bảng `tblmonan`
--
ALTER TABLE `tblmonan`
  ADD CONSTRAINT `tblmonan_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbldanhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tblmonan_diadiem`
--
ALTER TABLE `tblmonan_diadiem`
  ADD CONSTRAINT `tblmonan_diadiem_ibfk_1` FOREIGN KEY (`monan`) REFERENCES `tblmonan` (`id_monan`),
  ADD CONSTRAINT `tblmonan_diadiem_ibfk_2` FOREIGN KEY (`diadiem`) REFERENCES `tbldiadiem` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
