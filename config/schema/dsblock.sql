-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2016 at 03:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsblock`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `article_category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_category_id`, `title`, `alias`, `description`, `created`, `modified`, `status`) VALUES
(1, NULL, 'Về chúng tôi', 've-chung-toi', '<p></p><div><p><br></p></div><p></p>', '2016-07-31 05:23:19', '2016-08-12 14:20:09', 1),
(2, NULL, 'Adsfdf', 'asdfdf', '<p>sdafdf</p>', '2016-08-12 16:34:28', '2016-08-12 16:34:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE IF NOT EXISTS `article_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `title`, `alias`, `description`, `status`, `created`, `modified`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', '<b></b>introductions 123', 1, '0000-00-00 00:00:00', '2016-08-12 14:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `customer_services`
--

CREATE TABLE IF NOT EXISTS `customer_services` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` text COLLATE utf8_unicode_ci NOT NULL,
  `event` datetime NOT NULL,
  `attach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `description`, `filename`, `dir`, `created`, `modified`) VALUES
(18, 'Giới thiệu', '1 Giới thiệu (1 tờ).docx', '10516dbb-cd53-4917-a2d3-a2f2fc1201ed', '2016-08-11 17:05:37', '2016-08-11 17:05:37'),
(19, 'Tỷ lệ phục hồi', '2 Tỷ lệ phục hồi (in).docx', '1037676f-5fd0-4d7c-9892-6d06f037b5c0', '2016-08-13 03:10:00', '2016-08-13 03:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `medical_histories`
--

CREATE TABLE IF NOT EXISTS `medical_histories` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `medical_histories`
--

INSERT INTO `medical_histories` (`id`, `description`, `created`, `modified`) VALUES
(1, 'Bệnh 1111', '2016-08-12 14:39:50', '2016-08-14 07:43:59'),
(2, 'Bệnh 2222', '2016-08-12 14:39:55', '2016-08-14 07:44:04'),
(3, 'Bệnh 3333', '2016-08-12 14:45:55', '2016-08-14 07:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `keylink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `keylink`, `name`, `type`) VALUES
(29, 'about-us', 've-chung-toi', 0),
(30, 'introductions', 'gioi-thieu', 1),
(31, 'qa', 'cau-hoi-thuong-gap', 2),
(34, 'forms', 'forms', 2),
(35, 'login', 'dang-nhap', 2),
(36, 'logout', 'thoat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page_articles`
--

CREATE TABLE IF NOT EXISTS `page_articles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_urls`
--

CREATE TABLE IF NOT EXISTS `page_urls` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_urls`
--

INSERT INTO `page_urls` (`id`, `page_id`, `link`) VALUES
(33, 31, '/questions'),
(34, 30, '/articles/view?cid=1'),
(35, 29, '/articles/view?id=1'),
(36, 34, '/forms'),
(37, 35, '/users/login'),
(38, 36, '/users/logout');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modifed` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `dir`, `description`, `provider`, `created`, `modifed`) VALUES
(4, 'Sản phẩm 1', 'aaaa.jpg', '217a9848-c236-40f2-8883-247d7bd8afe9', '<p>asdasdasdas</p>', 'Provider 1', '2016-08-10 14:09:05', '0000-00-00 00:00:00'),
(5, 'Sản phẩm 2', 'homepage.jpg', '7233376d-e568-4f37-80d9-90a7c32c9523', '<p>Sản phẩm 2</p>', 'Provider 2', '2016-08-10 14:19:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `answer`, `created`, `modified`) VALUES
(1, 'Có phải Liệu pháp Tế bào tươi thích hợp cho tất cả mọi người không?', '<p>Thông thường liệu pháp tế bào tươi thích hợp cho mọi đối tượng khách hàng. Tuy nhiên, có một vài trường hợp chống chỉ định sử dụng Liệu pháp Tế bào tươi. Việc khám, xét nghiệm trước điều trị sẽ chỉ ra những người không phù hợp với Liệu pháp Tế bào tươi.<br></p>', '2016-08-09 15:29:02', '2016-08-12 13:30:13'),
(2, 'Những người sử dụng Liệu pháp Tế bào tươi có hiệu quả giống nhau không? Nếu không, hiệu quả của liệu pháp bị ảnh hưởng bởi những yếu tố nào?', '<p>Hiệu quả của liệu pháp tế bào tươi phụ thuộc vào rất nhiều yếu tố: hệ thống miễn dịch cơ thể của mỗi cá nhân, sức khỏe tổng thể của khách hàng. Việc Khách hàng thực hiện đúng các khuyến cáo trước và sau khi tiến hành trị liệu là một yếu tố ảnh hưởng nhiều đến hiệu quả của trị liệu<br></p>', '2016-08-09 15:29:28', '2016-08-12 13:30:33'),
(3, 'Liệu có những tình trạng sức khỏe sẵn có trong cơ thể làm giảm hiệu quả của Liệu pháp Tế bào tươi không?', '<p>Nói chung, không nên áp dụng liệu pháp khi đang điều trị viêm trong "giai đoạn cấp tính" như: Viêm khớp dạng thấp giai đoạn bùng phát, viêm phổi cấp… Không nên có điều trị trong khi mang thai, hóa trị hoặc ung thư hoạt động.<br></p>', '2016-08-12 13:30:46', '2016-08-12 13:30:46'),
(4, 'Độ tuổi nào là phù hợp để thực hiện Liệu pháp Tế bào tươi?', '<p>Chúng tôi có bệnh nhân từ 5 tuổi đến 90 tuổi tuỳ theo mục đích chữa trị. Bệnh nhân nhỏ tuổi thường là đối tượng mắc các vấn đề về não. Độ tuổi các bệnh nhân với mục đích tăng cường sức khoẻ và chống lão hoá thường là &gt;35 cho nữ và &gt;40 cho nam.<br></p>', '2016-08-12 13:30:59', '2016-08-12 13:30:59'),
(5, 'Có khoảng thời gian hoặc mùa nào trong năm phù hợp nhất để điều trị Liệu pháp Tế bào tươi không? Tại sao lại như vậy?', '<p></p><p>Mặc dù không có thời gian đặc biệt nào trong năm phù hợp hơn cả để thực hiện liệu pháp này, nhưng chúng tôi khuyến khích quý vị lên kế hoạch trước cho thời gian điều trị của mình do số lượng khách hàng muốn thực hiện dịch vụ này ngày càng đông.</p><p><b>&nbsp;</b></p><br><p></p>', '2016-08-12 13:31:12', '2016-08-12 13:31:17'),
(6, 'Sau khi chiết xuất, quá trình chuẩn bị tế bào cừu được diễn ra thế nào trước khi đưa vào cơ thể người?', '<p>Các mô được các chuyên gia y tế chuẩn bị kĩ càng theo những hướng dẫn nghiêm ngặt của Cơ quan Y tế Đức. Phương pháp này là bí mật độc quyền của chúng tôi.<br></p>', '2016-08-12 13:32:42', '2016-08-12 13:32:42'),
(7, 'Các tế bào nhau thai cừu được chiết xuất và đưa vào cơ thể người dưới hình thức nào?', '<p>Tế bào nhau thai cừu được đưa vào cơ thể người bằng hình thức tiêm bắp. Phương thức này được đánh giá là hiệu quả và an toàn nhất.<br></p>', '2016-08-12 13:33:08', '2016-08-12 13:33:08'),
(8, 'Cấu trúc tế bào giữa các tế bào cừu và tế bào người có khác nhau không? Nếu có, nó có phù hợp / đồng nhất với cơ thể con người khi cấy ghép?', '<p>Các tế bào động vật có vú này có nhiều đặc điểm tương tự nhưng không giống nhau. Các nghiên cứu gần đây cho thấy các tế bào sau khi chiết xuất và được tiêm vào cơ thể người sẽ phát ra những tín hiệu đến những mô bị tổn thương để kích thích cơ chế tự chữa lành tại đó.&nbsp; Tế bào cừu có khả năng tương thích và không gây tác dụng phụ đối với cơ thể con người.<br></p>', '2016-08-12 13:33:26', '2016-08-12 13:33:26'),
(9, 'Việc chích TBT có gây nghiện không? Ví dụ như nếu ngưng điều trị một thời gian nhất định thì các cơ quan có bị hư hại không?', '<p>Chích Tế bào tươi hoàn toàn không gây nghiện. Không có ảnh hưởng gì lên các cơ quan nếu ngưng điều trị trong một thời gian dài. Tuỳ theo mục đích chữa trị bệnh nhân có thể sử dụng 1 lần hoặc nhiều lần.<br></p>', '2016-08-12 13:34:42', '2016-08-12 13:34:42'),
(10, 'Nếu một người ngưng sử dụng Liệu pháp Tế bào tươi sau vài lần điều trị, liệu sức khỏe của người nhận có bị suy giảm nhiều không?', '<p>Thực tế cho thấy mỗi người sẽ có những phản ứng khác nhau đối với Liệu pháp Tế bào tươi. Trong một vài trường hợp, chỉ một lần điều trị đã mang lại đủ hiệu quả nhưng đa số người nhận nên điều trị lặp lại ít nhất một lần sau một năm để duy trì sức khỏe và chất lượng cuộc sống tối ưu.<br></p>', '2016-08-12 13:34:59', '2016-08-12 13:34:59'),
(11, 'Có nguy cơ nào cơ thể người phản ứng thái quá với sự xâm nhập của tế bào bên ngoài không?', '<p>Ít thấy trường hợp xảy ra những phản ứng dị ứng trong quá trình điều trị. Thông thường các phản ứng xảy ra nhẹ nhàng và luôn được sẵn sang xử lý một cách thận trọng nhằm tối thiểu nguy cơ xảy ra.<br></p>', '2016-08-12 13:35:36', '2016-08-12 13:35:36'),
(12, 'Có thể làm gì cho những bệnh nhân không có phòng khám toàn diện ở nước mình và muốn làm những bước tiền điều trị trước khi điều trị tế bào tươi?', '<p>D.S. Block đưa ra những hướng dẫn về những tiền trị liệu thay thế phục vụ điều trị nếu bệnh nhân không thể đến một phòng khám toàn diện nào tại nước mình để trị liệu thải độc. Xét nghiệm máu và các thông tin bệnh sử có thể được thực hiện tại các bệnh viện đa khoa.<br></p>', '2016-08-12 14:00:38', '2016-08-12 14:00:38'),
(13, 'Khách hàng sẽ được chăm sóc theo dõi như thế nào sau điều trị liệu pháp tế bào tươi của Đức?', '<p>Các kiểm tra máu cần thiết sau điều trị sẽ được tiến hành vào tháng thứ 3. Các xét nghiệm máu bổ sung cần thiết để theo dõi sự tiến triển sẽ được bác sĩ tư vấn đề nghị, bệnh nhân sẽ trả phí xét nghiệm nếu thực hiện.<br></p>', '2016-08-12 14:00:50', '2016-08-12 14:00:50'),
(14, 'Điều trị tế bào tươi có an toàn và hiệu quả không?', '<p>Liệu pháp tế bào tươi an toàn và hiệu quả mặc dù có thể có vài phản ứng phụ sau điều trị như hơi sưng đỏ ở nơi tiêm chích, sốt nhẹ…, đây là những dấu hiệu của kháng thể khi Tế bào tươi được cấy thành công vào cơ thể.<br></p>', '2016-08-12 14:01:10', '2016-08-12 14:01:10'),
(15, 'Có khó để theo dõi các kết quả của Liệu pháp tế bào tươi không?', '<p>Thông thường, người ta sử dụng 2 loại kết quả để theo dõi hiệu quả của Liệu pháp Tế bào tươi. Thứ nhất là những phát triển lâm sàng của bệnh nhân, được coi như những dấu hiệu tiến triển tốt. Thứ hai, các thông số máu, trước và sau điều trị. Trung tâm điều trị sẽ theo dõi cả 2 loại kết quả trên.<br></p>', '2016-08-12 14:01:22', '2016-08-12 14:01:22'),
(16, 'Có phải ADN của cừu sẽ được chuyển hóa thành ADN của người không?', '<p>Những tác dụng liệu pháp tế bào tươi xảy ra qua việc chuyển hóa protein (chất đạm), không phải chuyển hóa ADN. ADN được chuyển hóa thành tế bào phôi khi được tiêm. Tuy nhiên, nó sẽ không hòa nhập với tế bào ADN của người.<br></p>', '2016-08-12 14:01:59', '2016-08-12 14:01:59'),
(17, 'Những tác dụng phụ nào có thể xảy ra?', '<p>Cũng như trong bất kỳ thâm nhập mới nào vào cơ thể, có thể xuất hiện đau nhức nhẹ, mẩn ngứa và sưng ở vùng tiêm chích. Sốt nhẹ, một dấu hiệu của phản ứng hệ miễn dịch, nếu có xảy ra, là một chỉ số tốt cho biết cơ thể phản ứng tốt với các tế bào mới được cấy vào.<br></p>', '2016-08-12 14:02:12', '2016-08-12 14:02:12'),
(18, 'Những kết quả nổi bật của việc điều trị là gì?', '<p>Liệu pháp tế bào tươi là việc điều trị hỗ trợ đối với các điều trị truyền thống và các biện pháp điều trị hỗ trợ. Kết quả tùy thuộc vào tuổi tác, tình trạng thể lực, lối sống, thói quen ăn uống và tình trạng bệnh của bệnh nhân. Nói chung, bệnh nhân mau hồi phục trong các trường hợp bệnh nặng, sẽ có ngoại hình và làn da trẻ trung hơn, gia tăng khả năng sinh sản, giảm các triệu chứng thể lực xấu và sức khỏe tổng thể được cải thiện.<br></p>', '2016-08-12 14:02:24', '2016-08-12 14:02:24'),
(19, 'Phải chờ khoảng bao lâu sau khi chích mới thấy rõ hiệu quả vượt trội của liệu pháp?', '<p>Nhờ các bào quan trong chất tiêm (đặc biệt là chất mitochondria – ti thể – được coi như là ‘trung tâm năng lượng’ của tế bào), cảm giác khoẻ khoắn và đầy năng lượng sẽ đến với bệnh nhân vài giờ hoặc 2-7 ngày ngay sau điều trị, kết quả rõ nhất khoảng 2 đến 3 tháng sau.<br></p>', '2016-08-12 14:02:37', '2016-08-12 14:02:37'),
(20, 'Tiến trình tiêm chích như thế nào?', '<p></p><p>9-12 mũi tiêm sẽ được tiêm trực tiếp vào cơ mông sau khử trùng.</p><p></p>', '2016-08-12 14:02:51', '2016-08-12 14:02:51'),
(21, 'Các tế bào được dùng để chích là gì? Tế bào được dùng cho mọi người có giống nhau không?', '<p>Mỗi bệnh nhân điều trị liệu pháp Tế bào tươi có một chương trình tế bào được thiết kế riêng, được điều chỉnh tùy thuộc vào tình trạng sức khoẻ của khách hàng. Những người bị tổn thương cột sống sẽ được bổ sung những tế bào tủy sống, những người có vấn đề về bàng quang sẽ nhận thêm những tế bào bàng quang; những bệnh về da, ví dụ như bệnh vẩy nến, được trị liệu bằng cách tăng cường những tế bào về da và mô liên kết, … Mỗi chương trình tế bào chỉ được thiết kế sau khi bệnh nhân gặp trực tiếp bác sĩ để trao đổi và tư vấn.<br></p>', '2016-08-12 14:03:17', '2016-08-12 14:03:17'),
(22, 'Có đúng là không có kháng nguyên (phân tử kích thích sản xuất kháng thể) trong việc tiêm chích liệu pháp tế bào tươi không?', '<p>Có một khối lượng kháng nguyên nhỏ trong mỗi đợt chích để tạo ra phản ứng miễn dịch. Đây là phản ứng quan trọng nhất được quan sát sau cấy ghép bởi vì nó báo hiệu quả của điều trị và sự cấy ghép thành công.<br></p>', '2016-08-12 14:03:28', '2016-08-12 14:03:28'),
(23, 'Những chống chỉ định của Liệu pháp Tế bào tươi là gì?', '<p></p><p>Điều trị ung thư, bệnh nhân cần được chăm sóc đặc biệt hoặc có thai.</p><p></p>', '2016-08-12 14:03:40', '2016-08-12 14:03:40'),
(24, 'Những chỉ định nào cho điều trị?', '<p>Liệu pháp tế bào tươi có tác dụng điều trị trong một số bệnh lý tự miễn, dị tật thần kinh, đột quỵ, Parkinson….và một số bệnh mãn tính khác<br></p>', '2016-08-12 14:03:55', '2016-08-12 14:03:55'),
(25, 'Tại sao chúng ta cần phải dành 7 ngày để tiến hành liệu pháp? Tại sao chúng ta không có thể đi Tiêm và về nhà ngay?', '<p>Chương trình được thiết kế 7 ngày/6 đêm vì ngày đầu tiên khi đến, bạn có cơ hội để đánh giá tình trạng sức khỏe toàn diện bởi các bác sĩ. Bạn sẽ được tiêm vào ngày thứ 3, thư giãn để các liệu pháp tế bào tươi tích hợp với cơ thể sau khi tiêm cho đến ngày thứ 6, điều này có nghĩa là không nên có các hoạt động nâng cao nhiệt độ trung bình của cơ thể, nếu không thì các tế bào tươi có thể không được tích hợp thành công trong cơ thể (Quý khách được yêu cầu nghỉ ngơi hoàn toàn tại giường sau đó). Điều này cũng cho phép các bác sĩ có thời gian theo dõi bệnh nhân sau khi tiêm.<br></p>', '2016-08-12 14:04:06', '2016-08-12 14:04:06'),
(26, 'Tại sao chúng ta phải nghỉ ngơi trong Viện chăm sóc sức khỏe và không thể đi tham quan và thưởng thức những món ăn Đức bên ngoài?', '<p>Như đã đề cập ở trên, các tế bào tươi cần phải tích hợp trong cơ thể. Để điều này xảy ra, không nên có các hoạt động nâng cao nhiệt độ cơ thể, cơ bản ít nhất 1 -2 ngày sau khi Tiêm liệu pháp tế bào tươi. Mua sắm hoặc tham quan, có thể trong ngày 1-2 hoặc ngày thứ 6-7.<br></p>', '2016-08-12 14:04:19', '2016-08-12 14:04:19'),
(27, 'Những rủi ro y tế với liệu pháp này là gì?', '<p>Có thể có một số dị ứng xuất hiện trên cơ thể được giải quyết bằng cách cho thuốc chống dị ứng trước khi điều trị, có thể bị đau nhẹ khi bắt đầu (Tiêm thì có lẽ sẽ đau một chút!)<br></p>', '2016-08-12 14:04:35', '2016-08-12 14:04:35'),
(28, 'Tôi chỉ muốn trẻ hơn, làn da mượt mà hơn. Khi nào tôi có thể bắt đầu thấy sự khác biệt và nó sẽ kéo dài bao lâu?', '<p>Đối với mục đích phục hồi tuổi thanh xuân, kết quả có thể sẽ được nhìn thấy 2 -3 ngày sau khi điều trị. Da trở nên mịn và láng mượt hơn một cách rõ ràng 03 tuần sau khi điều trị và được duy trì từ 06 tháng hoặc 01 năm.<br></p>', '2016-08-12 14:04:48', '2016-08-12 14:04:48'),
(29, 'Tôi có thể loại bỏ nếp nhăn trên khuôn mặt tôi?', '<p>Với liệu pháp tế bào tươi trên khuôn mặt, chúng tôi có thể cải thiện các nếp nhăn trên khuôn mặt bằng cách kích thích sản xuất collagen, nhưng không hoàn toàn loại bỏ các nếp nhăn.<br></p>', '2016-08-12 14:05:00', '2016-08-12 14:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Customer Service'),
(3, 'Saller');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `fullname`, `email`, `password`, `role_id`, `active`, `created`, `modified`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'a66a426c31275f7a2b677e6ca6e1ba2cfcb73c59b31e1440fbbd07848933347b', 1, 1, '0000-00-00 00:00:00', '2016-08-11 13:00:54'),
(3, 'Saler', 'saler@gmail.com', 'a66a426c31275f7a2b677e6ca6e1ba2cfcb73c59b31e1440fbbd07848933347b', 3, 1, '2016-08-11 12:57:17', '2016-08-11 13:09:32'),
(4, 'Customer Service', 'customer_service@gmail.com', 'a66a426c31275f7a2b677e6ca6e1ba2cfcb73c59b31e1440fbbd07848933347b', 2, 1, '2016-08-11 13:00:12', '2016-08-11 13:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `fullname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `fullname`, `email`, `password`, `birthday`, `phone`, `passport`, `job`, `identity`, `company`, `position`, `address`, `status`, `created`, `modified`) VALUES
(1, 1, 'Asdasdsad', 'nhatlang19@gmail.com', 'a66a426c31275f7a2b677e6ca6e1ba2cfcb73c59b31e1440fbbd07848933347b', '1987-10-08', '123123', '', '0000-00-00', '', '', '', '', 1, '2016-08-13 03:57:33', '2016-08-14 08:28:05'),
(2, 3, 'Trang Mỹ Phước', 'adf@asdsd.com', 'a66a426c31275f7a2b677e6ca6e1ba2cfcb73c59b31e1440fbbd07848933347b', '1987-08-01', '1232', '12312323', 'adasfd', '123', 'fasdfsadf', 'afasdf', 'asdfasdf', 1, '2016-08-13 04:11:51', '2016-08-14 14:58:08'),
(3, 1, 'arwerewrwer', 'nhatlang191@gmail.com', 'c306cc07ccbbcfbc44c269f8891b9845295a2e713c90722444b986f486e18c66', '1987-07-01', '123123213', '', '0000-00-00', '', '', '', '', 1, '2016-08-13 05:11:10', '2016-08-14 14:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_medical_histories`
--

CREATE TABLE IF NOT EXISTS `user_medical_histories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medical_history_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_medical_histories`
--

INSERT INTO `user_medical_histories` (`id`, `user_id`, `medical_history_id`, `created`, `modified`) VALUES
(10, 1, 2, '2016-08-14 08:28:05', '2016-08-14 08:28:05'),
(17, 2, 2, '2016-08-14 14:58:08', '2016-08-14 14:58:08'),
(19, 3, 1, '2016-08-14 14:59:02', '2016-08-14 14:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_treatments`
--

CREATE TABLE IF NOT EXISTS `user_treatments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contract_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contract_sign_date` date NOT NULL,
  `contract_price` float NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir_treatment_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `treatment_result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir_treatment_result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saller_id` int(11) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Đã gửi đi điều trị ', '2016-08-12 16:56:07', '2016-08-12 17:29:01'),
(2, 'Khách hàng tiềm năng', '2016-08-12 16:56:13', '2016-08-12 17:29:10'),
(3, 'Loại khác', '2016-08-12 17:30:17', '2016-08-12 17:30:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_id` (`article_category_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_services`
--
ALTER TABLE `customer_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`topic`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_histories`
--
ALTER TABLE `medical_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `page_articles`
--
ALTER TABLE `page_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_id` (`page_id`);

--
-- Indexes for table `page_urls`
--
ALTER TABLE `page_urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_id` (`page_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `birthday` (`birthday`);

--
-- Indexes for table `user_medical_histories`
--
ALTER TABLE `user_medical_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_treatments`
--
ALTER TABLE `user_treatments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saler_id` (`saller_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_services`
--
ALTER TABLE `customer_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `medical_histories`
--
ALTER TABLE `medical_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `page_articles`
--
ALTER TABLE `page_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_urls`
--
ALTER TABLE `page_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_medical_histories`
--
ALTER TABLE `user_medical_histories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_treatments`
--
ALTER TABLE `user_treatments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
