-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 10:36 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chakura`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(6) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userSubject` varchar(50) NOT NULL,
  `userMessage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `fullname`, `phoneNumber`, `email`, `userSubject`, `userMessage`) VALUES
(1, 'Natalie Ngina Ndetei', 753996033, 'talndetei567@gmail.com', 'Inquiry', 'I wanted to inquire about the firecracker chicken. Does it have honey?');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(6) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `secondname` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `secondname`, `email`, `userName`, `userPassword`, `userType`) VALUES
(3, 'Natalie', 'Ndetei', 'talndetei567@gmail.com', 'natndetei', 'bounce', 'Admin'),
(5, 'Aron', 'Cheru', 'aroncherz@gmail.com', 'cheruz', 'natalie', 'Admin'),
(6, 'Trevs', 'Muthoks', 'trevmuth@gmail.com', 'trevs', 'rolling', 'User'),
(7, 'Joan', 'Chege', 'jchege@gmail.com', 'chegz', 'cheche', 'User'),
(11, 'Joseph', 'waweru', 'jchege@gmail.com', 'waweruz', 'hil', 'User'),
(12, 'Katana', 'Makamata', 'kamaka@gmail.com', 'kmaks', 'jimo', 'User'),
(13, 'Paul', 'Ndetei', 'pndetei@yahoo.com', 'JP', 'jill', 'User'),
(14, 'Kavulani', 'Maureen', 'maukav@gmail.com', 'mau', 'mau', 'User'),
(15, 'Kanyau', 'Simon', 'kanysimo@gmail.com', 'simo', 'jas', 'User'),
(16, 'Nigel', 'Njongoro', 'nignjo@gmail.com', 'njongs', 'hila', 'User'),
(17, 'She', 'Her', 'she@gmail.com', 'she', 'her', 'User'),
(18, 'leila', 'jane', 'leila@gmail.com', 'leiljane', 'hut', 'Customer'),
(19, 'Charlie', 'Fayaz', 'charlie@gmail.com', 'fayaz', 'Happy', 'Customer'),
(20, 'Mulembe', 'Efem', 'mulem@gmail.com', 'mulembez', 'foreal', 'Admin'),
(24, 'client', 'client', 'client@gmail.com', 'client', 'client1', 'User'),
(27, 'client1', 'client1', 'client1@gmail.com', 'client1', 'client', 'User'),
(28, 'client2', 'client2', 'client2@gmail.com', 'client2', 'customer', 'User'),
(29, 'admin1', 'admin1', 'admin1@gmail.com', 'admin1', 'admin', 'Admin'),
(30, 'Xerxes', 'Flynn', 'jogopux@mailinator.com', 'paneboci', '12345', ''),
(31, 'Byron', 'Cross', 'rehes@mailinator.com', 'jiperyh', 'Jamie', ''),
(32, 'Raymond', 'Humphrey', 'weredux@mailinator.com', 'pijaw', '12345', ''),
(33, 'Karen', 'Nyamae', 'knyamae@gmail.com', 'knyamae', 'Godisable1', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(40) NOT NULL,
  `food_price` float DEFAULT NULL,
  `food_image` varchar(100) DEFAULT NULL,
  `food_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`food_id`, `food_name`, `food_price`, `food_image`, `food_description`) VALUES
(1, 'Beef Burger', 500, 'images/beefburger.jpeg', 'Toppings:Pickles, Tomatoes,Cheese,Onions.'),
(2, 'Mushroom Burger', 850, 'images/mushroom burger.jpg', 'Toppings:Mushroom, Cheese, Tomatoes, Corriander.'),
(3, 'Chicken Burger', 400, 'images/ChickenBurgers.jpg', 'Toppings:Chicken, Tomatoes, Cheese, Lettuce.'),
(4, 'Veggie Burger', 550, 'images/veggieburger.jpg', 'Toppings:Lettuce, Potatoes, pepper, carrots.'),
(5, 'Chicken Nuggets', 300, 'images/ChickenNuggets.jpg', ' Spices:breadcrumbs, herbs, salt.'),
(6, 'Chicken Meatballs', 400, 'images/chickenmeatballs.jpg', 'Spices:Barbeque sauce, salt, coriander.'),
(7, 'BBQ Steak Pizza', 700, 'images/Barbecue-Steak-Pizza.jpg', 'Toppings:Marinated bbq steak,Tomatoes.'),
(8, 'Fries', 100, 'images/fries1.jpg', 'Crispy and fresh.'),
(9, 'Creamy Herb Chicken', 700, 'images/Creamy-Herb-Chicken.jpg', 'Ingredients: Sour cream, herbs,soysauce.'),
(10, 'Firecracker Chicken', 500, 'images/firecracker.jpg', 'Ingredients: ginger, honey, chilli flakes'),
(11, 'salad', 350, 'images/coleslaw.jpeg', 'Toppings: Olives, mayonnaise'),
(12, 'chicken', 901, 'images/chicken.jpg', 'Toppings: pepper, macon, bacon,chicken'),
(13, 'Onion Rings', 200, 'images/onionrings.jpg', 'Crispy and juicy'),
(14, 'tea', 50, 'images/coffee.jpg', 'Tea bags maha'),
(15, 'tea', 50, 'images/tea.jpg', 'Tea bags'),
(16, 'Chicken Tikka Pizza', 1500, 'images/chicken-tikka-pizza.jpg', 'Toppings:pineapples, bacon'),
(17, 'Pork burger', 700, 'images/porkburger.jpg', 'Toppings: pork, lettuce'),
(18, 'Teriyaki Chicken', 950, 'images/teriyakiChicken.jpg', 'spicy, hot'),
(19, 'SODE', 50, 'images/soda.jpg', 'Deliciously');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `customer_id` int(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_of_purchase` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `food_id`, `customer_id`, `quantity`, `price`, `date_of_purchase`) VALUES
(1, 1, 6, 20, 10000, '2021-09-03'),
(2, 2, 6, 3, 2400, '2021-09-03'),
(3, 8, 6, 5, 500, '2021-09-03'),
(4, 14, 24, 2, 100, '2021-09-05'),
(5, 15, 24, 2, 100, '2021-09-05'),
(6, 17, 27, 2, 1400, '2021-09-05'),
(7, 18, 27, 2, 1900, '2021-09-05'),
(8, 16, 28, 2, 3000, '2021-09-05'),
(9, 18, 28, 2, 1900, '2021-09-05'),
(10, 1, 32, 2, 1000, '2022-06-08'),
(11, 2, 32, 2, 1700, '2022-06-08'),
(12, 2, 33, 1, 850, '2022-10-19'),
(13, 4, 33, 5, 2750, '2022-10-19'),
(14, 19, 33, 1, 50, '2022-10-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `email` (`email`),
  ADD KEY `userName` (`userName`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `food_id` FOREIGN KEY (`food_id`) REFERENCES `menu` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
