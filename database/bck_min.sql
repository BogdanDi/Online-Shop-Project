-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 07:37 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bck_min`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categID` int(11) NOT NULL AUTO_INCREMENT,
  `categName` varchar(60) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`categID`),
  UNIQUE KEY `categID` (`categID`,`categName`,`active`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categID`, `categName`, `active`) VALUES
(1, 'Tables', 1),
(2, 'Chairs', 1),
(4, 'Sofas', 1),
(5, 'Bedrooms', 1),
(8, 'Beds', 1),
(9, 'Dinings', 1),
(10, 'Kitchens', 1),
(11, 'Outdoor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(60) NOT NULL,
  `description` text,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL,
  `promo` tinyint(1) DEFAULT '1',
  `topsel` tinyint(11) DEFAULT '1',
  `rating` tinyint(1) DEFAULT '1',
  `active` tinyint(4) DEFAULT '1',
  `cetegId` int(11) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  KEY `cetegId` (`cetegId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `description`, `price`, `image`, `promo`, `topsel`, `rating`, `active`, `cetegId`) VALUES
(1, 'Single Bed', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. ', 250, 'images/continut/bed8.jpg', 0, 7, 1, 1, 8),
(2, 'Green Table', 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', 500, 'images/continut/table6.jpg', 0, 4, 1, 1, 1),
(3, 'Rock Sofa', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 2000, 'images/continut/chair8.jpg', 1, 6, 5, 1, 4),
(4, 'Orange Sofa', 'Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.', 500, 'images/continut/sofa6.jpg', 1, 9, 1, 1, 4),
(5, 'Modern Table', 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.', 1999, 'images/continut/table1.jpg', 1, 5, 5, 1, 1),
(6, 'Fancy Chair', 'Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.', 1780, 'images/continut/chair3.jpg', 1, 3, 4, 1, 2),
(7, 'zvgfn', 'dgm xmx vnc zdgndg  dr hfrz db', 1700, 'images/continut/living1.jpg', 1, 5, 1, 1, 9),
(8, 'Your First Bedroom', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.', 2000, 'images/continut/bed8.jpg', 1, 2, 5, 1, 5),
(9, 'Another Bedroom', 'Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', 1999, 'images/continut/bed6.jpg', 1, 4, 5, 1, 5),
(10, 'Some Kind Of Bed', 'Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ', 1200, 'images/continut/bed1.jpg', 1, 8, 5, 1, 8),
(11, 'Sofa #5', 'Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ', 750, 'images/continut/sofa5.jpg', 1, 9, 5, 1, 4),
(12, 'Sofa #4', 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.', 1000, 'images/continut/sofa4.jpg', 0, 4, 3, 1, 4),
(13, 'Wooden Chair', 'Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 1200, 'images/continut/chair1.jpg', 1, 12, 5, 1, 2),
(14, 'Outdoor', 'Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 1700, 'images/continut/outdoor_furniture3.jpg', 1, 100, 5, 1, 11),
(16, 'Tree Sofa', 'Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', 1200, ' images/continut/outdoor_furniture4.jpg', 1, 70, 5, 1, 11),
(17, 'Swimingpool Furniture', 'In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 1100, 'images/continut/outdoor_furniture2.jpg', 1, 8, 4, 1, 11),
(18, 'Garden Furniture', 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.', 1500, 'images/continut/outdoor_furniture.jpg', 1, 20, 5, 1, 11),
(19, 'Some Nice Bed', 'Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, ', 1250, 'images/continut/bed3.jpg', 1, 15, 5, 1, 8),
(20, 'Another Bed', 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 1124, 'images/continut/bed4.jpg', 1, 4, 4, 1, 8),
(21, 'Yet Another Bed', NULL, 975, 'images/continut/bed5.jpg', 1, 14, 3, 1, 8),
(22, 'Bed', 'Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.', 1435, 'images/continut/bed6.jpg', 1, 22, 5, 1, 8),
(23, 'Black Chair', 'Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.', 1875, 'images/continut/chair2.jpg', 1, 5, 4, 1, 2),
(24, 'Wooden Chair', 'Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.', 754, 'images/continut/chair4.jpg', 1, 3, 4, 1, 2),
(26, 'Stone Bench', 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.', 1875, 'images/continut/chair7.jpg', 1, 5, 5, 1, 2),
(27, 'Soft Sofa', 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. ', 850, 'images/continut/sofa7.jpg', 1, 22, 5, 1, 4),
(29, 'Another Green Table', 'Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.', 1348, 'images/continut/table5.jpg', 1, 2, 5, 1, 1),
(30, 'Another Table', 'Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.', 450, 'images/continut/table3.jpg', 1, 18, 5, 1, 1),
(31, 'Glas Table', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 370, 'images/continut/table4.jpg', 1, 9, 4, 1, 1),
(32, 'First Dining', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 140, 'images/continut/dining1.jpg', 1, 7, 5, 1, 9),
(33, 'Another dining', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 1360, 'images/continut/dining2.jpg', 1, 3, 4, 1, 9),
(34, 'Dining', 'Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 1145, 'images/continut/dining4.jpg', 1, 6, 4, 1, 9),
(36, 'Small Dining', 'Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', 1200, 'images/continut/dining5.jpg', 1, 8, 3, 1, 9),
(40, 'Test', NULL, NULL, NULL, 1, 1, 1, 1, NULL),
(42, 'Test', '', 0, 'images/continut/dining2.jpg', 1, 1, 1, 1, NULL),
(43, 'Test', '', 200, 'images/continut/sofa4.jpg', 1, 1, 1, 1, 1),
(44, 'Test2', '', 9999, 'images/continut/sofa4.jpg', 1, 1, 1, 1, 4),
(45, 'Scaunelul lui Florin', '', 9999, 'images/continut/dining2.jpg', 1, 1, 1, 1, 1),
(46, 'kfkfy', '', 200, 'images/continut/dining2.jpg', 1, 1, 1, 1, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cetegId`) REFERENCES `categories` (`categID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
