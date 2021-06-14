-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2021 at 02:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `post_index` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `brand_logo` varchar(500) NOT NULL,
  `brand_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_logo`, `brand_description`) VALUES
(1, 'Apple', 'https://img2.freepng.ru/20180610/lcz/kisspng-apple-electric-car-project-logo-lucky-draw-5b1d7bcc5f6f21.7698511615286588923909.jpg', 'Apple Inc. designs, manufactures and markets mobile communication and media devices, personal computers and portable digital music players. The Company sells a range of related software, services, accessories, networking solutions, and third-party digital content and applications.'),
(2, 'Samsung', 'https://yerevanmobile.am/wp-content/uploads/2015/02/samsung-logo.jpeg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'),
(3, 'Nike', 'https://hellograds.com/wp-content/uploads/2020/02/Vis-ID-Nike-Swoosh.jpg', 'NIKE, named for the Greek goddess of victory, is a shoe and apparel company. It designs, develops, and sells a variety of products to help in playing basketball and soccer (football), as well as in running, men\'s and women\'s training, and other action sports.'),
(4, 'Canon', 'https://www.vhv.rs/dpng/d/385-3856267_canon-logo-canon-hd-png-download.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. '),
(5, 'Adidas', 'http://intectica.com/wp-content/uploads/2019/07/Adidas_Logo_Stack__93206.1337144792.380.380.jpg', 'Adidas, in full Adidas AG, German manufacturer of athletic shoes and apparel and sporting goods. In the early 21st century it was the largest sportswear manufacturer in Europe and the second largest (after Nike) in the world.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_cost` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `parent`) VALUES
(1, 'Electronics', 0),
(2, 'Clothes for Men', 0),
(3, 'Clothes for Women', 0),
(4, 'Books', 0),
(5, 'Sport', 0),
(6, 'Smartphones', 1),
(7, 'Laptops', 1),
(8, 'Cameras', 1),
(9, 'T-shirts for Men', 2),
(10, 'Pants for Men', 2),
(11, 'T-shirts for Women', 3),
(12, 'Earphones', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, '201673', 'Dias', 'Berlibek', 'berlibekddd@gmail.com', '+7 (776) 532-16-97', 'qwerty'),
(2, 'qwertyss', 'Dias', 'Berlibek', '201673@astanait.edu.kz', '+7 (777) 760-14-59', 'qwertyu'),
(4, '2016738', 'Dias', 'Berlibek', 'berlibekdd@gmail.com', '+7 (777) 760-14-58', 'qwerty'),
(5, '2016737', 'Dias', 'Berlibek', 'berlibekd@gmail.com', '+7 (777) 760-14-51', '123456'),
(6, '20167322', 'Dias', 'Berlibek', 'berlibekdias@gmail.com', '+7 (777) 760-14-45', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `description` text,
  `product_price` int(11) DEFAULT NULL,
  `image1` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `product_price`, `image1`, `image2`, `image3`, `brand_id`, `parent`) VALUES
(1, 'Apple iPhone 11 64GB Black', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 364990, 'https://object.pscloud.io/cms/cms/Photo/img_0_77_2121_0.jpg', NULL, NULL, 1, 6),
(2, 'Samsung Galaxy S10Lite 128GB White', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 169990, 'https://www.technodom.kz/media/catalog/product/4/6/46f2d85d6d69aaa4ab29b5b0684ca444f65fb25c_215406_2oug.jpg', NULL, NULL, 2, 6),
(3, 'Apple iPhone 12 mini 128GB Purple', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 456890, 'https://object.pscloud.io/cms/cms/Photo/img_0_77_2976_0_1.jpg', NULL, NULL, 1, 6),
(4, 'Nike Airman DJ Men\'s T-shirt', 'There is not a single person who does not know the Nike company, named after the ancient Greek goddess of victory, Nike. The company was founded in 1964 by student Phil Knight, a middle distance runner on the University of Oregon team, and his coach, Bill Bowerman. The original name of Blue Ribbon Sports was not changed to its current name until 1978, and the famous Swoosh brand logo was designed by Portland University design student Carolyn Davidson in 1971, for which she received a $ 35 royalty.\r\n\r\nModel wears a T-shirt size M\r\nModel\'s height - 188 cm', 7990, 'https://img.brandshop.ru/cache/products/c/cw0413-010-0_552x552.jpg', NULL, NULL, 3, 9),
(5, 'Nike Sportswear Men\'s T-Shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 6990, 'https://assets.atmos-tokyo.com/items/L/ck2227-011-1.jpg', NULL, NULL, 3, 9),
(6, 'Nike Men\'s pants', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 11890, 'https://www.lifestylesports.com/dw/image/v2/BCDN_PRD/on/demandware.static/-/Sites-LSS_eCommerce_Master/default/dwed496935/images/72191113xlarge.jpg?sw=530', NULL, NULL, 3, 10),
(7, 'Apple MacBook Air Retina M1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 565990, 'https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/b/e/be6848b8b09081f2f3929dde089c5338e8b582a7_230865_1.jpg', NULL, NULL, 1, 7),
(8, 'CANON PowerShot SX530 HS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 120000, 'https://i1.foxtrot.com.ua/product/MediumImages/6219464_0.jpg', NULL, NULL, 4, 8),
(9, 'Apple MacBook Pro 13 2020 Space Grey', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 870990, 'https://object.pscloud.io/cms/cms/Photo/img_0_62_1837_2.jpg', NULL, NULL, 1, 7),
(10, 'Nike SB YD Striped T-Shirt', 'Nike T-Shirt', 12000, 'https://cdn.shopify.com/s/files/1/1202/6102/products/nike-sb-yd-striped-t-shirt-black-cargo-khaki-1.jpg?v=1608723257', NULL, NULL, 3, 9),
(11, 'Adidas Originals SST Track Pants Black', 'Enhance your street wear looks with the adidias Originals SST Track Pants. Featuring a slim fit, ribbed cuffs and classic 3 stripes down the legs.', 21000, 'https://cdn.zando.co.za/p/244249-5610-942442-3-zoom.jpg', NULL, NULL, 5, 10),
(12, 'Adidas CALIFORNIA TEE T-Shirt', NULL, 7000, 'https://i.pinimg.com/originals/26/5b/02/265b0245757d5023f9bb014a2bb0ad86.jpg', NULL, NULL, 5, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`brand_id`),
  ADD KEY `parent` (`parent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`parent`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
