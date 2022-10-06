-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.26 - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table app_dev.system_menus
CREATE TABLE IF NOT EXISTS `system_menus` (
  `MenuID` int(11) NOT NULL AUTO_INCREMENT,
  `MenuParentID` int(11) DEFAULT NULL,
  `MenuTitle` varchar(50) DEFAULT NULL,
  `URL` varchar(50) DEFAULT NULL,
  `MenuUniqueCode` varchar(150) DEFAULT NULL,
  `FilePath` varchar(100) DEFAULT NULL,
  `DisplayMenu` tinyint(1) DEFAULT NULL,
  `MenuIcon` varchar(100) DEFAULT NULL,
  `ListOrder` int(11) DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `CreatedTime` datetime DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `LastUpdatedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`MenuID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table app_dev.system_menus: ~60 rows (approximately)
INSERT INTO `system_menus` (`MenuID`, `MenuParentID`, `MenuTitle`, `URL`, `MenuUniqueCode`, `FilePath`, `DisplayMenu`, `MenuIcon`, `ListOrder`, `Active`, `CreatedBy`, `CreatedTime`, `LastUpdatedBy`, `LastUpdatedTime`) VALUES
	(1, 0, 'Dashboard', 'https://obajatour.com/admin/', 'dashboard', NULL, NULL, 'fa fa-dashboard', 0, 1, 90, '2018-10-12 01:21:03', 90, '2019-05-29 16:44:57'),
	(3, 0, 'Master', '#', 'master', NULL, NULL, 'fa fa-circle-o', 2, 1, 90, '2018-10-12 01:21:03', 90, '2018-10-12 01:21:03'),
	(4, 0, 'Tour Reservation', '#', 'tourreservation', NULL, NULL, 'fa fa-circle-o', 3, 1, 90, '2018-10-12 01:21:03', 90, '2018-10-12 01:21:03'),
	(5, 0, 'Flight Reservation', '#', 'flightreservation', NULL, NULL, 'fa fa-circle-o', 4, 1, 90, '2018-10-12 01:21:03', 90, '2018-10-12 01:21:03'),
	(6, 0, 'Members', '#', 'members', NULL, NULL, 'fa fa-circle-o', 5, 1, 90, '2018-10-12 01:21:03', 90, '2018-10-12 01:21:03'),
	(7, 0, 'Images', 'images/imgbackend', 'images', NULL, NULL, 'fa fa-circle-o text-red', 7, 1, 90, '2018-10-12 01:21:03', 90, '2018-10-12 21:24:49'),
	(8, 3, 'Home Slider', 'admin/home_slider', 'home_slider', NULL, NULL, 'fa fa-circle-o', 8, 1, 90, '2018-10-12 00:00:00', 90, '2018-10-12 00:00:00'),
	(9, 3, 'Heading text', 'admin/heading_text', 'heading_text', NULL, NULL, 'fa fa-circle-o', 9, 1, 90, '2018-10-13 00:00:00', 90, '2018-10-13 00:00:00'),
	(10, 3, 'Hot Deals', 'admin/hot_deal', 'hot_deal', NULL, NULL, 'fa fa-circle-o', 10, 1, 90, '2018-10-14 00:00:00', 90, '2018-10-14 00:00:00'),
	(11, 3, 'Tour', 'admin/tour', 'tour', NULL, NULL, 'fa fa-circle-o', 11, 1, 90, '2018-10-15 00:00:00', 90, '2018-10-15 00:00:00'),
	(12, 3, 'Tour Category', 'admin/tour_category', 'tour_category', NULL, NULL, 'fa fa-circle-o', 12, 1, 90, '2018-10-16 00:00:00', 90, '2018-10-16 00:00:00'),
	(13, 3, 'Tour Countries', 'admin/tour_countries', 'tour_countries', NULL, NULL, 'fa fa-circle-o', 13, 1, 90, '2018-10-17 00:00:00', 90, '2018-10-17 00:00:00'),
	(14, 3, 'News', 'admin/article', 'article', NULL, NULL, 'fa fa-circle-o', 14, 1, 90, '2018-10-12 00:00:00', 90, '2018-10-12 00:00:00'),
	(15, 3, 'Pages', 'admin/pages', 'pages', NULL, NULL, 'fa fa-circle-o', 15, 1, 90, '2018-10-13 00:00:00', 90, '2018-10-13 00:00:00'),
	(16, 4, 'Data Tour Booking', 'admin/tour_booking', 'tour_booking', NULL, NULL, 'fa fa-circle-o', 17, 1, 90, '2018-10-12 00:00:00', 90, '2019-03-19 14:38:54'),
	(17, 4, 'Data Booking List', 'admin/tour_booking?act=list_booking', 'list_booking', NULL, NULL, 'fa fa-circle-o', 18, 1, 90, '2018-10-13 00:00:00', 90, '2019-03-19 14:38:00'),
	(18, 4, 'Add Booking', 'admin/tour_booking?act=add', 'add', NULL, NULL, 'fa fa-circle-o', 16, 1, 90, '2018-10-14 00:00:00', 90, '2018-10-14 00:00:00'),
	(19, 5, 'Reservation List', 'admin/flight_reservation_list', 'flight_reservation_list', NULL, NULL, 'fa fa-circle-o', 19, 1, 90, '2018-10-12 00:00:00', 90, '2018-10-12 00:00:00'),
	(20, 6, 'Member', 'admin/users?members=true', 'user_1', NULL, NULL, 'fa fa-circle-o', 20, 1, 90, '2018-10-12 00:00:00', 90, '2018-10-12 00:00:00'),
	(21, 6, 'Users', 'admin/users', 'user_1', NULL, NULL, 'fa fa-circle-o', 21, 1, 90, '2018-10-12 00:00:00', 90, '2018-10-12 00:00:00'),
	(22, 6, 'User Groups', 'admin/user_groups', 'user_2', NULL, NULL, 'fa fa-circle-o', 22, 1, 90, '2018-10-13 00:00:00', 90, '2018-10-13 00:00:00'),
	(23, 6, 'User Group Menus', 'admin/user_group_menus', 'user_3', NULL, NULL, 'fa fa-circle-o', 23, 1, 90, '2018-10-14 00:00:00', 90, '2018-10-14 00:00:00'),
	(24, 6, 'User Types', 'admin/user_types', 'user_4', NULL, NULL, 'fa fa-circle-o', 24, 1, 90, '2018-10-15 00:00:00', 90, '2018-10-15 00:00:00'),
	(25, 6, 'System Menus', 'admin/system_menus', 'user_5', NULL, NULL, 'fa fa-circle-o', 25, 1, 90, '2018-10-16 00:00:00', 90, '2018-10-16 00:00:00'),
	(26, 3, 'Tour Regional', 'admin/tour_regional', 'tour_regional', NULL, NULL, 'fa fa-circle-o', 26, 1, 90, '2018-11-07 22:02:15', 90, '2018-11-07 22:02:15'),
	(27, 3, 'Vouchers', 'admin/vouchers', 'vouchers', NULL, NULL, 'fa fa-circle-o', 28, 1, NULL, NULL, 90, '2022-07-26 01:55:57'),
	(28, 3, 'VISA', 'admin/tour_visa', 'tour_visa', NULL, NULL, 'fa fa-circle-o', 29, 1, 90, '2019-03-18 05:51:15', 90, '2022-07-26 01:56:24'),
	(29, 4, 'Export Data Booking', 'admin/tour_booking?act=add	', 'export_data_booking', NULL, NULL, 'fa fa-circle', 19, 1, 90, '2019-04-22 05:38:00', 90, '2019-04-22 05:38:27'),
	(30, 0, 'Export Data', '#', 'export_data', NULL, NULL, 'fa fa-circle-o', 3, 1, 90, '2019-05-08 12:43:18', 90, '2019-05-29 16:41:17'),
	(31, 30, 'Passport List', 'admin/tour_export_passport', 'tour_export_passport', NULL, NULL, 'fa fa-circle-o', 4, 1, 90, '2019-05-08 12:43:30', 90, '2022-08-06 23:18:59'),
	(32, 30, 'Data Booking Tour', 'admin/tour_export_data', 'admin_tour_export_data', NULL, NULL, 'fa fa-circle-o', 3, 1, 90, '2019-05-08 12:44:47', 90, '2019-05-08 12:44:47'),
	(34, 30, 'Rooming List', 'admin/tour_export_rooming_list', 'admin_tour_export_rooming_list', NULL, NULL, 'fa fa-circle-o', 1, 1, 90, '2019-05-08 12:45:14', 90, '2019-05-08 12:45:14'),
	(35, 3, 'Tour City', 'admin/world_cities', 'tour_city', NULL, NULL, 'fa fa-circle-o', 7, 1, 90, '2019-05-16 09:27:20', 90, '2019-05-16 09:27:20'),
	(36, 1, 'blank', '#', 'blank', NULL, NULL, 'fa fa-circle-o', 1, 1, 90, '2019-05-29 16:46:22', 90, '2019-05-29 16:46:22'),
	(37, 3, 'VISA PRICE', 'admin/tour_price_visa', 'tour_price_visa', NULL, NULL, 'fa fa-circle-o', 30, 1, 90, '2019-06-21 00:33:21', 90, '2022-07-26 01:56:48'),
	(38, 30, 'Data Tour Status', 'admin/tour_export_status', 'admin/tour_export_status', NULL, NULL, 'fa fa-circle-o', 5, 1, 90, '2019-07-09 11:22:58', 90, '2019-07-09 11:22:58'),
	(39, 5, 'Export Flight Booking', 'admin/flight_export_booking', 'admin_flight_export_booking', NULL, NULL, 'fa fa-circle-o', 6, 1, 90, '2019-07-28 19:45:14', 90, '2019-08-26 09:47:10'),
	(40, 45, 'Master Visa', 'admin/d_jenis_visa', 'jenis_visa', NULL, NULL, 'fa fa-circle-o', 30, 1, 90, '2019-08-30 08:01:28', 90, '2019-08-30 08:01:28'),
	(41, 45, 'Master Harga Visa', 'admin/d_harga_visa', 'harga_visa', NULL, NULL, 'fa fa-circle-o', 31, 1, 90, '2019-08-30 08:02:11', 90, '2019-08-30 08:02:11'),
	(42, 45, 'Master Paspor', 'admin/d_paspor', 'jenis_paspor', NULL, NULL, 'fa fa-circle-o', 32, 1, 90, '2019-08-30 08:02:59', 90, '2019-08-30 08:07:52'),
	(43, 45, 'Master Harga Paspor', 'admin/d_harga_paspor', 'harga_paspor', NULL, NULL, 'fa fa-circle-o', 33, 1, 90, '2019-08-30 08:03:39', 90, '2019-08-30 08:07:31'),
	(44, 0, 'Subscribers', 'admin/viewSubcribers', 'subscribers', NULL, NULL, 'fa fa-circle-o', 36, 1, 90, '2019-08-30 22:08:10', 90, '2019-08-30 22:08:10'),
	(45, 0, 'Master Visa & Paspor', '#', 'mastervisa&paspor', NULL, NULL, 'fa fa-circle-o', 6, 0, 90, '2018-10-12 01:21:03', NULL, NULL),
	(46, 0, 'Visa Passport', '#', 'visa_passport', NULL, NULL, 'fa fa-circle-o', 8, 1, 90, '2020-01-03 11:41:58', 90, '2020-01-03 11:45:09'),
	(47, 46, 'Master Regional Visa', 'admin_tour/visa_regional', 'master_regional_visa', NULL, NULL, 'fa fa-circle-o', 1, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(48, 46, 'Master Country Visa', 'admin_tour/visa_country', 'master_country_visa', NULL, NULL, 'fa fa-circle-o', 2, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(49, 46, 'Master Country Category', 'admin_tour/visa_category', 'master_country_category', NULL, NULL, 'fa fa-circle-o', 3, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(50, 46, 'Country Visa Free', 'admin_tour/visa_country_free', 'country_visa_free', NULL, NULL, 'fa fa-circle-o', 4, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(51, 46, 'Country Visa Arrival', 'admin_tour/visa_country_arrival', 'country_visa_arrival', NULL, NULL, 'fa fa-circle-o', 5, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(52, 46, 'Visa Cant Process', 'admin_tour/visa_cant_process', 'visa_cant_process', NULL, NULL, 'fa fa-circle-o', 6, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(53, 46, 'Passport Requirement', 'admin_tour/passport_requirement', 'passport_requirement', NULL, NULL, 'fa fa-circle-o', 7, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(54, 46, 'Passport Address', 'admin_tour/passport_address_imigration', 'passport_address', NULL, NULL, 'fa fa-circle-o', 8, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(55, 46, 'Passport Sponsorship', 'admin_tour/passport_sponsorship_letter', 'passport_sponsorship', NULL, NULL, 'fa fa-circle-o', 9, 1, 90, '2020-01-03 11:46:55', 90, '2020-01-03 11:47:01'),
	(56, 4, 'Data Tour Booking Domestik', 'admin/tour_booking?act=domestik', 'tour_booking_domestik', NULL, NULL, 'fa fa-circle-o', 1, 1, 90, '2020-09-29 16:30:02', 90, '2020-09-29 16:30:02'),
	(57, 0, 'Hotel Reservation', '#', 'hotel_reservation', NULL, NULL, 'fa fa-circle-o', 4, 1, 90, '2020-11-16 16:34:57', 90, '2020-11-16 16:36:04'),
	(58, 57, 'List Booking', 'admin/hotel_deal_booking', 'hotel_deal_booking', NULL, NULL, 'fa fa-circle-o', 2, 1, 90, '2020-11-16 16:35:17', 90, '2020-11-16 16:37:16'),
	(59, 57, 'Data Hotel', 'admin/hotel_deal', 'hotel_deal', NULL, NULL, 'fa fa-circle-o', 1, 1, 90, '2020-11-16 16:36:37', 90, '2020-11-16 16:37:07'),
	(60, 4, 'Tour Reservation Room', 'admin/tour_reservation_room', 'tour_reservation_room', NULL, NULL, 'fa fa-gear', 10, 1, 90, '2022-07-22 16:17:31', 90, '2022-07-22 16:17:31'),
	(61, 3, 'Tour Room Type', 'admin/tour_room_type', 'tour_room_type', NULL, NULL, 'fa fa-gear', 27, 1, 90, '2022-07-26 01:58:13', 90, '2022-07-26 01:58:13'),
	(62, 3, 'Membership Point Conversion', 'admin/membership_point_conversion', 'membership_point_conversion', NULL, NULL, 'fa fa-circle-o', 31, 1, 90, '2022-10-06 03:28:02', 90, '2022-10-06 03:28:02');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
