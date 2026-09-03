-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: msme_registrar
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(200) NOT NULL,
  `page_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_meta_keywords` varchar(500) NOT NULL,
  `head_inc` varchar(10000) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `selected_product` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry`
--

LOCK TABLES `enquiry` WRITE;
/*!40000 ALTER TABLE `enquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `enquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msme_form`
--

DROP TABLE IF EXISTS `msme_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msme_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(300) NOT NULL,
  `authId` varchar(500) NOT NULL,
  `udyam_number` varchar(100) NOT NULL,
  `reference_id` varchar(100) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contacted_person` varchar(100) NOT NULL,
  `contacted_person_number` varchar(100) NOT NULL,
  `opt_selected` varchar(100) NOT NULL,
  `business_address` varchar(200) NOT NULL,
  `plant_state` varchar(100) NOT NULL,
  `plant_district` varchar(100) NOT NULL,
  `plant_pincode` varchar(100) NOT NULL,
  `office_address` varchar(200) NOT NULL,
  `office_state` varchar(100) NOT NULL,
  `office_district` varchar(100) NOT NULL,
  `office_pincode` varchar(100) NOT NULL,
  `annual_turnover` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `social_category` varchar(30) NOT NULL,
  `physically_handicapped` varchar(30) NOT NULL,
  `aadhaar_number` varchar(30) NOT NULL,
  `uam_number` varchar(100) NOT NULL,
  `gstin_number` varchar(100) NOT NULL,
  `pan_card_number` varchar(30) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_account_number` varchar(30) NOT NULL,
  `ifsc_code` varchar(30) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `date_of_commencement_of_business` varchar(30) NOT NULL,
  `type_of_organisation` varchar(30) NOT NULL,
  `main_business_activity_of_enterprise` varchar(30) NOT NULL,
  `additional_details_about_business` varchar(200) NOT NULL,
  `persons_employed_female` varchar(100) NOT NULL,
  `persons_employed_male` varchar(100) NOT NULL,
  `persons_employed_other` varchar(100) NOT NULL,
  `persons_employed_total` varchar(100) NOT NULL,
  `number_of_employees` varchar(30) NOT NULL,
  `investment_in_plant_and_machinery` varchar(30) NOT NULL,
  `upload_aadhaar_card_front` varchar(200) NOT NULL,
  `upload_aadhaar_card_back` varchar(200) NOT NULL,
  `upload_pan_card_front` varchar(200) NOT NULL,
  `updated_details` varchar(100) NOT NULL,
  `nature_of_business_activity` varchar(100) NOT NULL,
  `product_service_name` varchar(100) NOT NULL,
  `product_service_description` varchar(100) NOT NULL,
  `annual_production_capacity` varchar(100) NOT NULL,
  `production_measurement_unit` varchar(100) NOT NULL,
  `enquiry_message` varchar(100) NOT NULL,
  `total_amount` varchar(30) NOT NULL,
  `form_page_url` varchar(500) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `terms_of_service` varchar(30) NOT NULL,
  `cancel_reason` varchar(100) NOT NULL,
  `form_created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msme_form`
--

LOCK TABLES `msme_form` WRITE;
/*!40000 ALTER TABLE `msme_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `msme_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_lists`
--

DROP TABLE IF EXISTS `product_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_lists`
--

LOCK TABLES `product_lists` WRITE;
/*!40000 ALTER TABLE `product_lists` DISABLE KEYS */;
INSERT INTO `product_lists` VALUES (1,'msme_registration',20),(2,'udyam_online',20),(3,'re_registration_for_proprietor',20),(4,'udyam_online_for_partnership_firm',20),(5,'re_udyam_online_for_partnership_firm',20),(6,'udyam_online_for_private_limited',20),(7,'re_registration_for_private_limited',20),(8,'udyam_online_for_public_limited',20),(9,'re_registration_for_public_limited',20),(10,'udyam_online_for_others',20),(11,'re_registration_for_others',20),(12,'udyam_registration',20),(13,'re_registration',20),(14,'print_udyam_application',20),(15,'forgot_udyam_registration',20),(16,'trace_certificate',20),(17,'update_certificate',20),(18,'update_udyam_certificate',20),(19,'print_udyam_registration',20),(20,'trace_udyam_registration',20),(21,'update_msme_registration_online_application',20),(22,'print_udyog_aadhaar_certificate',20),(23,'trace_udyog_aadhaar_certificate',20),(24,'udyam_cancellation',20),(26,'udyam_online_for_proprietor',20);
/*!40000 ALTER TABLE `product_lists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-07 13:30:53

ALTER TABLE `blogs` ADD `image_alt` VARCHAR(30) NULL DEFAULT NULL AFTER `image`, ADD `schema` TEXT NULL DEFAULT NULL AFTER `image_alt`;


-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msme_registrat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cid`
--

CREATE TABLE `cid` (
  `id` int(11) NOT NULL,
  `cid` int(100) NOT NULL,
  `uid` int(10) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `form_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cid`
--
ALTER TABLE `cid`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cid`
--
ALTER TABLE `cid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

