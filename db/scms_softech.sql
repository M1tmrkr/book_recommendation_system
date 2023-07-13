-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 12:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scms_softech`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_documents`
--

CREATE TABLE `account_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `account_parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_general_information`
--

CREATE TABLE `account_general_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `unique_id` varchar(255) NOT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `citizen_issue_district` varchar(255) DEFAULT NULL,
  `citizen_issue_date` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `grand_father_name` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `applicant_permanent_state` varchar(255) DEFAULT NULL,
  `applicant_permanent_district` varchar(255) DEFAULT NULL,
  `applicant_permanent_palika` varchar(255) DEFAULT NULL,
  `applicant_permanent_ward` varchar(255) DEFAULT NULL,
  `applicant_temporary_state` varchar(255) DEFAULT NULL,
  `applicant_temporary_district` varchar(255) DEFAULT NULL,
  `applicant_temporary_palika` varchar(255) DEFAULT NULL,
  `applicant_temporary_ward` varchar(255) DEFAULT NULL,
  `desire_person_name` varchar(255) DEFAULT NULL,
  `desire_person_address` varchar(255) DEFAULT NULL,
  `desire_person_phone` varchar(255) DEFAULT NULL,
  `desire_person_relation` varchar(255) DEFAULT NULL,
  `desire_person_age` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_address` varchar(255) DEFAULT NULL,
  `guardian_phone` varchar(255) DEFAULT NULL,
  `guardian_relation` varchar(255) DEFAULT NULL,
  `guardian_age` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_openings`
--

CREATE TABLE `account_openings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_documents`
--

CREATE TABLE `application_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `application_parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_family_details`
--

CREATE TABLE `application_family_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `application_parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `custom_family_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_finance_details`
--

CREATE TABLE `application_finance_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `application_parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `office_info` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_general_information`
--

CREATE TABLE `application_general_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `loan_type` bigint(20) UNSIGNED DEFAULT NULL,
  `loan_duration` bigint(20) UNSIGNED DEFAULT NULL,
  `unique_id` varchar(255) NOT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `grandfather_name` varchar(255) DEFAULT NULL,
  `father_in_low_name` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_occupation_name` varchar(255) DEFAULT NULL,
  `applicant_permanent_state` varchar(255) DEFAULT NULL,
  `applicant_permanent_district` varchar(255) DEFAULT NULL,
  `applicant_permanent_palika` varchar(255) DEFAULT NULL,
  `applicant_permanent_ward` varchar(255) DEFAULT NULL,
  `applicant_temporary_state` varchar(255) DEFAULT NULL,
  `applicant_temporary_district` varchar(255) DEFAULT NULL,
  `applicant_temporary_palika` varchar(255) DEFAULT NULL,
  `applicant_temporary_ward` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `fiscal_year` varchar(255) DEFAULT NULL,
  `citizen_no` varchar(255) DEFAULT NULL,
  `citizen_issue_district` varchar(255) DEFAULT NULL,
  `citizen_issue_date` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `office_info` varchar(255) DEFAULT NULL,
  `start_date_np` varchar(255) DEFAULT NULL,
  `start_date_en` varchar(255) DEFAULT NULL,
  `end_date_np` varchar(255) DEFAULT NULL,
  `end_date_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application_lands`
--

CREATE TABLE `application_lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `application_parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `grandfather_name` varchar(255) DEFAULT NULL,
  `father_in_low_name` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_occupation_name` varchar(255) DEFAULT NULL,
  `spouse_contact_number` varchar(255) DEFAULT NULL,
  `permanent_state` varchar(255) DEFAULT NULL,
  `permanent_district` varchar(255) DEFAULT NULL,
  `permanent_palika` varchar(255) DEFAULT NULL,
  `permanent_ward` varchar(255) DEFAULT NULL,
  `temporary_state` varchar(255) DEFAULT NULL,
  `temporary_district` varchar(255) DEFAULT NULL,
  `temporary_palika` varchar(255) DEFAULT NULL,
  `temporary_ward` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `citizen_no` varchar(255) DEFAULT NULL,
  `citizen_issue_district` varchar(255) DEFAULT NULL,
  `citizen_issue_date` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `url`, `image`, `order`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SOFTECH Foundation Pvt. Ltd.', NULL, '/upload_file/banner/1670868623_1280691239_madhesh-pradesh-lok-sewa-techpana_tq4G4tFJri.jpg', 2, 1, '2023-03-29 01:09:46', '2022-12-12 06:08:05', '2023-03-29 01:09:46'),
(2, 'http://127.0.0.1:8000/', 'http://127.0.0.1:8000/', '/upload_file/banner/1670868643_1087994913_hands-820272_960_720.jpg', 3, 1, NULL, '2022-12-12 12:23:16', '2023-01-26 02:30:21'),
(3, 'Softech', NULL, '/upload_file/banner/1674718439_1971900145_Softech.PNG', 1, 1, NULL, '2023-01-26 01:49:03', '2023-01-26 01:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `post_unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `thumbs` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `visit_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `post_unique_id`, `slug`, `thumbs`, `description`, `tags`, `meta_keyword`, `status`, `visit_no`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'What is Local SEO in Nepal? How it Can Help Local Businesses in Nepal', '2_6397660d8192b', 'what-is-local-seo-in-nepal-how-it-can-help-local-businesses-in-nepal', '/upload_file/blog/1670866445_1583432557_1.PNG', '<p style=\"text-align:justify\">To increase your online buyer or client base, local SEO enables your page to show up in relevant local search results. Local SEO makes your site more visible to those who live nearby, and it should be your top concern if your venture relies on the local community.</p>\r\n\r\n<p style=\"text-align:justify\">If you operate a shoe shop in Birgunj, you might wish to appear in searches coming from that city. Local SEO can help you rank for local searches, such as when someone from Birgunj searches for &ldquo;shoe store near me&rdquo; or &ldquo;shoe store in Birgunj.&rdquo;</p>\r\n\r\n<p style=\"text-align:justify\">More specifically, local SEO makes your site more visible to those who live nearby. In this blog, we shall examine the fundamental idea underlying local SEO and its value, ranking factors, and prospects in Nepal.</p>', NULL, NULL, 1, 5, NULL, '2022-12-12 11:49:05', '2023-01-21 08:14:11'),
(4, 1, 'विश्वकपमा अनलाइन बेटिङ गर्ने २ जना पक्राउ, अन्य कोही संलग्न भए सूचना', '2_6397680bd2da9', 'vashavakapama-analina-btana-garana-jana-pakarau-anaya-kaha-salgana-bhae-sacana', '/upload_file/blog/1670866955_761626335_1xbet-online-betting_wjJ5gKgxD9.jpg', '<p dir=\"ltr\" style=\"text-align:justify\">काठमाडौं । अनलाइन सट्टेबाजी गरेको आरोपमा दुई जना पक्राउ परेका छन् । पक्राउ पर्नेमा काठमाडौं नरदेवी बस्ने राजस्थान भारतका ३२ वर्षीय पवनकुमार शर्मा र काठमाडौं बुढानीलकण्ठ बस्ने पाल्पा जिल्ला रैनादेवी छहरा घर भएका २७ वर्षीय रुद्रप्रसार पोखरेल रहेका छन् ।</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">टेकपानासँग कुरा गर्दै काठमाडौं उपत्यका अपराध अनुसन्धान कार्यालयका प्रवक्ता एवं सूचना अधिकारी प्रहरी उपरीक्षक कृष्णप्रसाद कोइरालाले पोखरेललाई शनिबार र शर्मालाई आइतबार पक्राउ गरिएको जानकारी दिए ।</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"https://adalytics.prixacdn.net/media/albums/250-x-250_1_1_73dYirhFVa.gif\" style=\"height:undefined; width:100%\" /></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">&quot;लुकिछिपी अनलाइन सट्टेबाजी भइरहेको सूचना आएपछि काठमाडौं उपत्यका अपराध अनुसन्धान कार्यालयबाट खटिएको विशेष प्रहरी टोलीले आवश्यक निगरानी थालेको थियो । सोही आधारमा शनिबार र आइतबार ती दुई व्यक्तिलाई पक्राउ गरिएको हो,&quot; उनले भने ।</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">उनीहरूले विभिन्न खेलहरूमा मोबाइल एप तथा वेबसाइट प्रयोग गरी सट्टेबाजी गर्ने गरेको प्रहरीले जनाएको छ । त्यस किसिमको गतिविधिमा संलग्न रहेको अवस्थामा फेला पारी उनीहरूलाई नियन्त्रणमा लिइएको प्रवक्ता कोइरालाले बताए ।</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"https://adalytics.prixacdn.net/media/photos/websurfer-desktop-730x90-anim_2.gif\" style=\"height:undefined; width:100%\" /></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">उनका अनुसार पक्राउ परेका दुवै जनामाथि मुलुकी अपराध संहिताको दफा १२५ को उपदफा ४ बमोजिम सट्टेबाजी गर्न नहुने कसुर अन्तर्गत थप अनुसन्धान तथा कारबाहीका लागि जिल्ला प्रहरी परिसर काठमाडौं पठाइएको छ ।</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">&quot;हाल विश्वकप लगायतका विभिन्न खेलहरू भइरहेकाले अनलाइन सट्टेबाजी गर्नेहरू धेरै छन्,&quot; उनले भने, &quot;यदि कसैले सट्टेबाजी भइरहेको सूचना दिनुभयो भने हामी अनुसन्धान अघि बढाउँछौँ ।&quot;</p>', NULL, NULL, 1, 10, NULL, '2022-12-12 11:57:35', '2023-02-20 23:54:49'),
(5, 2, 'अस्ट्रेलियामा ५ वर्षको उमेरदेखि नै साइबर सुरक्षाको अध्ययन', '2_639768711a30a', 'asataralyama-varashhaka-umarathakha-na-saibra-sarakashhaka-athhayayana', '/upload_file/blog/1670867057_2143359377_Cyber-security-for-children-techpana_hnv0TwR86K.jpg', '<p style=\"text-align:justify\">काठमाडौं । आजका बालबालिका प्रविधिसँग धेरै नजिक छन् । तर, उनीहरुलाई साइबर स्पेसमा हुनसक्ने खतराको विषयमा जानकारी छैन ।</p>\r\n\r\n<p style=\"text-align:justify\">उनीहरुले सानैदेखि आईफोन, आईप्याड, एन्ड्रोइड फोन ठूलो हो भन्ने बुझेका छन् । भने, युट्युव, इन्स्टाग्राम, टिकटकजस्ता एप जीवनको महत्वपूर्ण हिस्सा जस्तै ठानिरहेका छन् ।</p>\r\n\r\n<p style=\"text-align:justify\">तर, उनीहरुलाई यस्ता एपको असुरक्षा, डेटा प्राइभेसी र अनधिकृत रुपमा आएका ईमेल खोल्दा ठूलो असर पार्छ भन्ने कुरा सिकाइएको छैन ।</p>\r\n\r\n<p style=\"text-align:justify\">यो विषयमा लामो समयदेखि चर्चा हुँदै आएको छ । साइबर सुरक्षाको विषयलाई शैक्षिक पाठ्यक्रममै राख्नुपर्छ भन्ने बहस पनि हुने गरेकाे छ ।</p>\r\n\r\n<p style=\"text-align:justify\">यसैबीच अस्ट्रेलियाले भने यसलाई कार्यान्वयनमा ल्याउने भएको छ । अस्ट्रेलियाले ५ वर्षभन्दा माथिका विद्यार्थीले पढ्ने पाठ्यक्रममा साइबर सुरक्षालाई समावेश गर्ने भएको छ ।</p>\r\n\r\n<p style=\"text-align:justify\">योसँगै अष्ट्रेलिया तल्लो तहदेखि नै साइबर सुरक्षाको विषय अध्ययापन गराउने पहिलो देश बन्ने छ ।</p>\r\n\r\n<p style=\"text-align:justify\">अस्ट्रेलियामा हाल राष्ट्रिय पाठ्यक्रम परिमार्जनको क्रममा छ । परिमार्जनको क्रममा पाँच वर्षदेखि १६ वर्षसम्मका बालबालिकाले पढ्न पाठ्यक्रममा साइबर सुरक्षालाई समावेश गरिने छ ।</p>\r\n\r\n<p style=\"text-align:justify\">उमेरअनुसार पाठ्यक्रमलाई विस्तार गर्दै लगिने जनाइएको छ, जसमा अनलाइन सेफ्टी, डेटा प्राइभेसी र त्यस्ता घटनाको निवेदन दिने तरिकासमेत समावेश गरिने छ ।</p>', NULL, NULL, 1, 9, NULL, '2022-12-12 11:59:17', '2023-02-01 21:30:21'),
(6, 3, 'नागरिक एप र क्युरा हेल्थलाई अन्तर्राष्ट्रिय अवार्ड', '2_639768e110fe4', 'nagaraka-epa-ra-kayara-halthalii-anatararashhataraya-avarada', '/upload_file/blog/1670867169_147622692_nagarik-app-awarded-techpana_5vpeWH3K4X.jpg', '<p dir=\"ltr\" style=\"text-align:justify\">काठमाडौं । सरकारी स्वामित्वको नागरिक एपले वर्ल्ड समिट अवार्ड (डब्लूएसए) २०२२ हात पार्न सफल भएको छ । विश्वभरबाट छनोटमा परेका ३५० बढि सहभागीहरू मध्ये नागरिक एपले&nbsp;&#39;गभर्मेन्ट एन्ड सिटिजन इन्गेजमेन्ट&#39; विधातर्फको अवार्ड जित्न सफल भएको हो । नागरिक एपको सेवा, सुविधा र त्यसको प्रभावकारिताको आधारमा उक्त अवार्ड प्रदान गरिएको हो ।&nbsp;</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">त्यस्तै निजी क्षेत्रतर्फ भने नेपालबाटै&nbsp;&#39;हेल्थ एण्ड वेलबिइङ&#39;&nbsp;विधातर्फ भने क्युरा हेल्थले डब्लूएसए २०२२ अवार्ड जितेको छ । यस वर्ष डब्लुएसए अवार्डका लागि ७९ देशबाट ३५० बढि सहभागीहरू छानिएका&nbsp;थिए । नेपालबाट भने नागरिक एप, क्युरा हेल्थ र वेद छनोटमा परेको थियो । अवार्ड विजेताले आगामी मार्च १ देखि ३ गतेसम्म मेक्सिकोमा&nbsp;आयोजना हुने डब्लुएसए ग्लोबल कंग्रेसमा आफ्नो सेवाको बारेमा प्रस्तुती दिन पाउनेछन् । उत्कृष्ट प्रस्तुती&nbsp;गर्ने सहभागीले डब्लुएसए २०२३ ग्लोबल च्याम्पियनका लागि पनि प्रतिस्पर्धा गर्ने मौका पाउनेछन् ।&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"https://adalytics.prixacdn.net/media/albums/250-x-250_1_1_73dYirhFVa.gif\" style=\"height:undefined; width:100%\" /></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">नागरिक एप नेपाली सरकारी सेवा मोबाइल एप्लिकेसनबाट उपलब्ध गराउने उद्देश्यले तयार पारिएको सरकारी एप हो । यसैगरी क्युरा हेल्थ स्वास्थ्य सेवालाई डिजिटलाइज गर्ने उद्देश्यले तयार पारिएको मोबाइल एप हो ।</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">यो अवार्ड जितेसँगै आफूलाई थप जिम्मेवार बनाएको नागरिक एपका कम्प्युटर इन्जिनियर प्रविन&nbsp;चौहान बताउँछन् । &quot;सबै सरकारी सेवा एउटै एपबाट उपलब्ध गराउने लक्ष्यका साथ तयार पारिएको एप डब्लुएसए अवार्ड विजेता हुँदा उत्साहित छौँ,&quot; उनले भने, &quot;यसले हामीलाई थप जिम्मेवार बनाएको छ भने आगामी दिनमा अन्य सेवा विस्तार गर्दै लग्ने कुरामा प्रोत्साहन गरेको छ ।&quot;</p>\r\n\r\n<p style=\"text-align:justify\"><img src=\"https://adalytics.prixacdn.net/media/photos/websurfer-desktop-730x90-anim_2.gif\" style=\"height:undefined; width:100%\" /></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">त्यस्तै क्युरा हेल्थका संस्थापक तथा सीईओ आयुष भगतले यो अवार्डले कम्पनीको सेवालाई थप विस्तार गर्न सहयोग गर्नुका साथै स्तरीय सेवा दिन प्रोत्साहन गरेको बताए ।&nbsp;</p>', NULL, NULL, 1, 6, NULL, '2022-12-12 12:01:09', '2023-01-24 00:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `title`, `unique_id`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'News', '2079121137251900', 'news', 'news', 1, '2022-12-12 05:52:25', '2022-12-12 05:52:25'),
(2, 'Event', '2079121738375169', 'event', 'Event', 1, '2022-12-12 11:53:37', '2022-12-12 11:53:37'),
(3, 'Technology', '2079121738535517', 'technology', 'Technology', 1, '2022-12-12 11:53:53', '2022-12-12 11:53:53'),
(5, 'Connor James', '2079060628447846', 'connor-james', 'Laborum sed ipsum d', 1, '2023-04-06 00:43:44', '2023-04-06 00:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `apply_before` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `job_id`, `title`, `time`, `number`, `category`, `level`, `experience`, `salary`, `apply_before`, `status`, `created_at`, `updated_at`) VALUES
(1, '207912189976', 'Senior Software Engineer- PHP', 'Full Time', '2', 'Software Development', 'Senior Level', '2 Year', 'Negotiable', '2079-08-27', 1, '2022-12-12 12:55:23', '2022-12-12 12:55:23'),
(2, '207912185809', 'Associate PHP Developer', 'Full Time', '2', 'Frontend Developer', 'Mid Level', '2 Year', 'Negotiable', '2079-08-29', 1, '2022-12-12 12:56:22', '2022-12-12 12:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `cash_deposits`
--

CREATE TABLE `cash_deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `account_holder_name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `amount_words` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Desktop Application', 'desktop-application', 1, '2022-12-12 11:38:58', '2022-12-12 11:38:58'),
(3, 'Web Application', 'web-application', 1, '2022-12-12 11:39:14', '2022-12-12 11:39:14'),
(4, 'Android Application', 'android-application', 1, '2022-12-12 11:39:59', '2022-12-12 11:39:59'),
(5, 'Digital Marketing', 'digital-marketing', 1, '2022-12-12 11:40:20', '2022-12-12 11:40:20'),
(6, 'Graphic Design', 'graphic-design', 1, '2022-12-12 11:40:39', '2022-12-12 11:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `url`, `image`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ministry of Education, Science and Technology, Nepal', 'https://moest.gov.np/', '/upload_file/client/1670846903_1659671454_Ministry-of-Education-Science-and-Technology-Singhdurbar-Kathmandu-Nepal.png', NULL, 1, NULL, '2022-12-12 06:23:25', '2022-12-12 06:23:25'),
(2, 'Education Development and Coordination Unit, Kathmandu', NULL, '/upload_file/client/1670870147_83980777_शिक्षा-विकास-तथा-समन्वय-इकाइ-काठमाडौं-.png', NULL, 1, NULL, '2022-12-12 12:03:07', '2022-12-12 12:50:47'),
(3, 'Province Financial Comptroller Office', 'http://pfco.karnali.gov.np/', '/upload_file/client/1670867333_38576241_PROVINCE-FINANCIAL-COMPTROLLER-OFFICE.png', NULL, 1, NULL, '2022-12-12 12:03:55', '2022-12-12 12:03:55'),
(4, 'TRIBHUVAN UNIVERSITY Central Administrative Building', 'http://www.tribhuvan-university.edu.np/', '/upload_file/client/1670867399_345784387_Tribhuvan-University-of-Nepal.png', NULL, 1, NULL, '2022-12-12 12:05:02', '2022-12-12 12:05:02'),
(5, 'Education Review Office', 'https://ero.gov.np/', '/upload_file/client/1670867482_131058184_Education-Review-Office-Nepal.png', NULL, 1, NULL, '2022-12-12 12:06:23', '2022-12-12 12:06:23'),
(6, 'Lumbini Development Trust Sacred Garden Lumbini, Nepal.', 'https://lumbinidevtrust.gov.np/en', '/upload_file/client/1670867534_502231584_Lumbini-Development-Trust-Birthplace-of-Buddha-Historical-Place-of-Nepal-The-World-Heritage-SiteLumbini-Development-Trust.png', NULL, 1, NULL, '2022-12-12 12:07:17', '2022-12-12 12:07:17'),
(7, 'Central Bureau of Statistics', 'https://agricensusnepal.gov.np/', '/upload_file/client/1670870115_582291699_राष्ट्रिय-कृषिगणना-२०७८.png', NULL, 1, NULL, '2022-12-12 12:08:21', '2022-12-12 12:50:23'),
(8, 'Office of the Chief Attorney, Nepal  Madhes Pradesh, Janakpurdham, Nepal', 'http://oca.madhesh.gov.np/', '/upload_file/client/1670867699_1233293293_मुख्यन्यायधिवक्ताको-कार्यालय.png', NULL, 1, '2022-12-12 12:52:09', '2022-12-12 12:10:01', '2022-12-12 12:52:09'),
(9, 'Office of the Chief Attorney, Nepal Madhes Pradesh, Janakpurdham, Nepal', 'http://oca.madhesh.gov.np/', '/upload_file/client/1670870317_1193943664_oca.PNG', NULL, 1, NULL, '2022-12-12 12:52:41', '2022-12-12 12:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `district_en` varchar(255) DEFAULT NULL,
  `district_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `district_en`, `district_np`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bhojpur', NULL, NULL, NULL),
(2, 1, 'Dhankuta', NULL, NULL, NULL),
(3, 1, 'Ilam', NULL, NULL, NULL),
(4, 1, 'Jhapa', NULL, NULL, NULL),
(5, 1, 'Morang', NULL, NULL, NULL),
(6, 1, 'Khotang', NULL, NULL, NULL),
(7, 1, 'Okhaldhunga', NULL, NULL, NULL),
(8, 1, 'Panchthar', NULL, NULL, NULL),
(9, 1, 'Sankhuwasabha', NULL, NULL, NULL),
(10, 1, 'Solukhumbu', NULL, NULL, NULL),
(11, 1, 'Sunsari', NULL, NULL, NULL),
(12, 1, 'Taplejung', NULL, NULL, NULL),
(13, 1, 'Tehrathum', NULL, NULL, NULL),
(14, 1, 'Udayapur', NULL, NULL, NULL),
(15, 2, 'Bara', NULL, NULL, NULL),
(16, 2, 'Dhanusa', NULL, NULL, NULL),
(17, 2, 'Mahottari', NULL, NULL, NULL),
(18, 2, 'Parsa', NULL, NULL, NULL),
(19, 2, 'Rautahat', NULL, NULL, NULL),
(20, 2, 'Saptari', NULL, NULL, NULL),
(21, 2, 'Sarlahi', NULL, NULL, NULL),
(22, 2, 'Siraha', NULL, NULL, NULL),
(23, 3, 'Bhaktapur', NULL, NULL, NULL),
(24, 3, 'Chitwan', NULL, NULL, NULL),
(25, 3, 'Dhading', NULL, NULL, NULL),
(26, 3, 'Dolakha', NULL, NULL, NULL),
(27, 3, 'Kavrepalanchok', NULL, NULL, NULL),
(28, 3, 'Kathmandu', NULL, NULL, NULL),
(29, 3, 'Lalitpur', NULL, NULL, NULL),
(30, 3, 'Makwanpur', NULL, NULL, NULL),
(31, 3, 'Nuwakot', NULL, NULL, NULL),
(32, 3, 'Ramechhap', NULL, NULL, NULL),
(33, 3, 'Rasuwa', NULL, NULL, NULL),
(34, 3, 'Sindhuli', NULL, NULL, NULL),
(35, 3, 'Sindhupalchowk', NULL, NULL, NULL),
(36, 4, 'Baglung', NULL, NULL, NULL),
(37, 4, 'Gorkha', NULL, NULL, NULL),
(38, 4, 'Kaski', NULL, NULL, NULL),
(39, 4, 'Lamjung', NULL, NULL, NULL),
(40, 4, 'Manang', NULL, NULL, NULL),
(41, 4, 'Mustang', NULL, NULL, NULL),
(42, 4, 'Myagdi', NULL, NULL, NULL),
(43, 4, 'Nawalparasi', NULL, NULL, NULL),
(44, 4, 'Parbat', NULL, NULL, NULL),
(45, 4, 'Syangja', NULL, NULL, NULL),
(46, 4, 'Tanahun', NULL, NULL, NULL),
(47, 5, 'Arghakhanchi', NULL, NULL, NULL),
(48, 5, 'Banke', NULL, NULL, NULL),
(49, 5, 'Bardiya', NULL, NULL, NULL),
(50, 5, 'Dang', NULL, NULL, NULL),
(51, 5, 'Gulmi', NULL, NULL, NULL),
(52, 5, 'Kapilvastu', NULL, NULL, NULL),
(53, 5, 'Nawalparasi (West)', NULL, NULL, NULL),
(54, 5, 'Palpa', NULL, NULL, NULL),
(55, 5, 'Pyuthan', NULL, NULL, NULL),
(56, 5, 'Rolpa', NULL, NULL, NULL),
(57, 5, 'Rukum (East)', NULL, NULL, NULL),
(58, 5, 'Rupandehi', NULL, NULL, NULL),
(59, 6, 'Dailekh', NULL, NULL, NULL),
(60, 6, 'Dolpa', NULL, NULL, NULL),
(61, 6, 'Humla', NULL, NULL, NULL),
(62, 6, 'Jajarkot', NULL, NULL, NULL),
(63, 6, 'Jumla', NULL, NULL, NULL),
(64, 6, 'Kalikot', NULL, NULL, NULL),
(65, 6, 'Mugu', NULL, NULL, NULL),
(66, 6, 'Rukum (West)', NULL, NULL, NULL),
(67, 6, 'Salyan', NULL, NULL, NULL),
(68, 6, 'Surkhet', NULL, NULL, NULL),
(69, 7, 'Acham', NULL, NULL, NULL),
(70, 7, 'Baitadi', NULL, NULL, NULL),
(71, 7, 'Bajhan', NULL, NULL, NULL),
(72, 7, 'Bajura', NULL, NULL, NULL),
(73, 7, 'Dadeldhura', NULL, NULL, NULL),
(74, 7, 'Darcula', NULL, NULL, NULL),
(75, 7, 'Doti', NULL, NULL, NULL),
(76, 7, 'Kailali', NULL, NULL, NULL),
(77, 7, 'Kanchanpur', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_unique_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `download_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `post_unique_id`, `title`, `file`, `size`, `type`, `order`, `download_count`, `created_at`, `updated_at`) VALUES
(1, '2_639712450ffbb', 'SEE परीक्षाको प्रमाणपत्रहरुमा नाम थर जन्ममिति र हिज्जे संशोधन सम्बन्धी शिक्षा विकास निर्देशनालय बागमती प्रदेशको सूचना ।', '/upload_file/product/file/1670844997_769550522_1664087401_1538467291_1653986270_573046712_MEP Final- Approved Kamalbajar.pdf', NULL, NULL, NULL, 0, '2022-12-12 05:51:37', '2022-12-12 05:51:37'),
(2, '2_639712984da69', 'test', '/upload_file/blog/file/1670845080_664656495_Top-IT-Courses-in-Nepal-for-the-Curent-IT-Market.webp', NULL, NULL, NULL, 0, '2022-12-12 05:53:00', '2022-12-12 05:53:00'),
(3, '2_639712984da69', 'SEE परीक्षाको प्रमाणपत्रहरुमा नाम थर जन्ममिति र हिज्जे संशोधन सम्बन्धी शिक्षा विकास निर्देशनालय बागमती प्रदेशको सूचना ।', '/upload_file/blog/file/1670845688_1588495053_1664087401_1538467291_1653986270_573046712_MEP Final- Approved Kamalbajar.pdf', NULL, NULL, NULL, 0, '2022-12-12 06:03:08', '2022-12-12 06:03:08'),
(4, '2_6397608d1d21e', 'काठमाडौं जिल्लाका स्थानीय तहका शिक्षा प्रमुखहरुको विवरण २०७६', '/upload_file/product/file/1670865037_1607869019_IMG_20221212_173825.jpg', NULL, NULL, NULL, 0, '2022-12-12 11:25:37', '2022-12-12 11:25:37'),
(5, '2_639761215696b', 'SEE परीक्षाको प्रमाणपत्रहरुमा नाम थर जन्ममिति र हिज्जे संशोधन सम्बन्धी शिक्षा विकास निर्देशनालय बागमती प्रदेशको सूचना ।', '/upload_file/product/file/1670865185_621268429_Top-IT-Courses-in-Nepal-for-the-Curent-IT-Market.webp', NULL, NULL, NULL, 0, '2022-12-12 11:28:05', '2022-12-12 11:28:05'),
(6, '2_6397614d8d473', 'सांगठनिक स्वरूप', '/upload_file/product/file/1670865229_377521473_Basic-Computer-Knowledge-Assists-for-a-Good-Career.webp', NULL, NULL, NULL, 0, '2022-12-12 11:28:49', '2022-12-12 11:28:49'),
(7, '2_6397615f6b75c', 'सांगठनिक स्वरूप', '/upload_file/product/file/1670865247_460817591_Basic-Computer-Knowledge-Assists-for-a-Good-Career.webp', NULL, NULL, NULL, 0, '2022-12-12 11:29:07', '2022-12-12 11:29:07'),
(8, '2_63976188bc2f4', 'Aliquam id ipsa la', '/upload_file/product/file/1670865288_1898651369_IMG_20221212_173825.jpg', NULL, NULL, NULL, 0, '2022-12-12 11:29:48', '2022-12-12 11:29:48'),
(9, '2_639764bc02b7d', 'जिन्सी व्यवस्थापन सफ्टवेयर', '/upload_file/product/file/1670866108_665744180_Capture.PNG', NULL, NULL, NULL, 0, '2022-12-12 11:43:28', '2022-12-12 11:43:28'),
(10, '2_6397660d8192b', 'What is Local SEO in Nepal? How it Can Help Local Businesses in Nepal', '/upload_file/blog/file/1670866445_1274304340_IMG_20221212_173825.jpg', NULL, NULL, NULL, 0, '2022-12-12 11:49:05', '2022-12-12 11:49:05'),
(11, '2_63976ba42dadc', 'Paperless Document Management [PDS]', '/upload_file/product/file/1670867877_441828685_1664087401_1538467291_1653986270_573046712_MEP Final- Approved Kamalbajar.pdf', NULL, NULL, NULL, 0, '2022-12-12 12:12:57', '2022-12-12 12:12:57'),
(12, '2_63976cc889567', 'Customer relationship management (CRM)', '/upload_file/product/file/1670868168_1848960017_dcms.PNG', NULL, NULL, NULL, 0, '2022-12-12 12:17:48', '2022-12-12 12:17:48'),
(13, '2_6397660d8192b', 'SEE परीक्षाको प्रमाणपत्रहरुमा नाम थर जन्ममिति र हिज्जे संशोधन सम्बन्धी शिक्षा विकास निर्देशनालय बागमती प्रदेशको सूचना ।', '/upload_file/blog/file/1672314111_1637033428_319361806_599979088799083_66019385015168713_n.jpg', NULL, NULL, NULL, 0, '2022-12-29 05:56:51', '2022-12-29 05:56:51'),
(14, '2_63d0bf9898508', 'revenue feature', '/upload_file/product/file/1674624920_130024485_2.png', NULL, NULL, NULL, 0, '2023-01-24 23:50:20', '2023-01-24 23:50:20'),
(15, '2_63d0e2fdaef04', 'Legal Brochure', '/upload_file/product/file/1674728298_354202463_legal_brochure_2.png', NULL, NULL, NULL, 0, '2023-01-26 04:33:18', '2023-01-26 04:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `fiscal_years`
--

CREATE TABLE `fiscal_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_information`
--

CREATE TABLE `general_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `mid_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_durations`
--

CREATE TABLE `loan_durations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_duration` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_12_061015_create_loan_durations_table', 1),
(7, '2022_05_23_180044_create_loan_types_table', 1),
(8, '2022_06_01_064221_create_general_information_table', 1),
(9, '2022_06_02_110352_create_permission_tables', 1),
(10, '2022_06_06_071255_create_application_general_information_table', 1),
(11, '2022_06_07_050245_create_application_lands_table', 1),
(12, '2022_06_07_050825_create_application_family_details_table', 1),
(13, '2022_06_07_051039_create_application_finance_details_table', 1),
(14, '2022_06_07_052932_create_application_documents_table', 1),
(15, '2022_08_10_111341_create_provinces_table', 1),
(16, '2022_08_10_113258_create_districts_table', 1),
(17, '2022_08_11_072916_create_palikas_table', 1),
(18, '2022_08_14_100250_create_fiscal_years_table', 1),
(19, '2022_08_16_051100_create_settings_table', 1),
(20, '2022_08_16_074137_create_account_openings_table', 1),
(21, '2022_08_16_094827_create_account_general_information_table', 1),
(22, '2022_08_16_095136_create_account_documents_table', 1),
(23, '2022_08_23_095426_create_account_types_table', 1),
(24, '2022_09_05_102611_create_cash_deposits_table', 1),
(25, '2022_09_08_111850_create_notifications_table', 1),
(26, '2022_10_30_121906_create_categories_table', 1),
(27, '2022_10_31_115047_create_products_table', 1),
(28, '2022_11_02_115645_create_blog_categories_table', 1),
(29, '2022_11_04_070942_create_blogs_table', 1),
(30, '2022_11_17_054358_create_banners_table', 1),
(31, '2022_11_18_072951_create_popups_table', 1),
(32, '2022_12_05_105826_create_files_table', 1),
(33, '2022_12_07_064401_create_clients_table', 1),
(34, '2022_12_07_110616_create_careers_table', 1),
(35, '2022_12_12_163217_create_internships_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palikas`
--

CREATE TABLE `palikas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `palika_en` varchar(255) DEFAULT NULL,
  `palika_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `palikas`
--

INSERT INTO `palikas` (`id`, `district_id`, `palika_en`, `palika_np`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bhojpur Municipality', 'भोजपुर नगरपालिका', NULL, NULL),
(2, 1, 'Shadanand Municipality', 'षडानन्द नगरपालिका', NULL, NULL),
(3, 1, 'Tyamke Maiyum', 'ट्याम्केमैयुम गाउँपालिका', NULL, NULL),
(4, 1, 'Arun Rural Municipality', 'अरुण गाउँपालिका', NULL, NULL),
(5, 1, 'Pauwadungma Rural Municipality', 'पौवादुङमा गाउँपालिका', NULL, NULL),
(6, 1, 'Salpasilichho Rural Municipality', 'साल्पासिलिछो गाउँपालिका', NULL, NULL),
(7, 1, 'Hatuwagadhi Rural Municipality', 'हतुवागढी गाउँपालिका', NULL, NULL),
(8, 1, 'Ramprasad Rai Rural Municipality', 'रामप्रसाद राई गाउँपालिका', NULL, NULL),
(9, 2, 'Paakhribas Municipality', 'पाख्रिबास नगरपालिका', NULL, NULL),
(10, 2, 'Dhankuta Municipality', 'धनकुटा नगरपालिका', NULL, NULL),
(11, 2, 'Mahalaxmi Municipality', 'महालक्ष्मी नगरपालिका', NULL, NULL),
(12, 2, 'Sangurigadhi Rural Municipality', 'सागुरीगढी गाउँपालिका', NULL, NULL),
(13, 2, 'Sahidbhumi Rural Municipality', 'सहीदभूमि गाउँपालिका', NULL, NULL),
(14, 2, 'Chhathar Jorpati Rural Municipality', 'छथर जोरपाटी गाउँपालिका', NULL, NULL),
(15, 2, 'Chaubise Rural Municipality', 'चौविसे गाउँपालिका', NULL, NULL),
(16, 3, 'Iilam Municipality', 'ईलाम नगरपालिका', NULL, NULL),
(17, 3, 'Deumaai Municipality', 'देउमाई नगरपालिका', NULL, NULL),
(18, 3, 'Maai Municipality', 'माई नगरपालिका', NULL, NULL),
(19, 3, 'Suryodaya Municipality', 'सूर्योदय नगरपालिका', NULL, NULL),
(20, 3, 'Phakphokthum Rural Municipality', 'फाकफोकथुम गाउँपालिका', NULL, NULL),
(21, 3, 'Mai Jogmai Rural Municipality', 'माईजोगमाई गाउँपालिका', NULL, NULL),
(22, 3, 'Chulachuli Rural Municipality', 'चुलाचुली गाउँपालिका', NULL, NULL),
(23, 3, 'Rong Rural Municipality', 'रोङ गाउँपालिका', NULL, NULL),
(24, 3, 'Mangsebung Rural Municipality', 'माङसेबुङ गाउँपालिका', NULL, NULL),
(25, 3, 'Sandakpur Rural Municipality', 'सन्दकपुर गाउँपालिका', NULL, NULL),
(26, 4, 'Mechinagar Municipality', 'मेचीनगर नगरपालिका', NULL, NULL),
(27, 4, 'Damak Municipality', 'दमक नगरपालिका', NULL, NULL),
(28, 4, 'Kankai Municipality', 'कन्काई नगरपालिका', NULL, NULL),
(29, 4, 'Bhadrapur Municipality', 'भद्रपुर नगरपालिका', NULL, NULL),
(30, 4, 'Arjundhara Municipality', 'अर्जुनधारा नगरपालिका', NULL, NULL),
(31, 4, 'Shivasatakshi Municipality', 'शिवसताक्षी नगरपालिका', NULL, NULL),
(32, 4, 'Gauraadaha Municipality', 'गौरादह नगरपालिका', NULL, NULL),
(33, 4, 'Birtamod Municipality', 'विर्तामोड नगरपालिका', NULL, NULL),
(34, 4, 'Kamal Rural Municipality', 'कमल गाउँपालिका', NULL, NULL),
(35, 4, 'Buddha Shanti Rural Municipality', 'बुद्धशान्ति गाउँपालिका', NULL, NULL),
(36, 4, 'Kachankawal Rural Municipality', 'कचनकवल गाउँपालिका', NULL, NULL),
(37, 4, 'Jhapa Rural Municipality', 'झापा गाउँपालिका', NULL, NULL),
(38, 4, 'Barhadashi Rural Municipality', 'बाह्रदशी गाउँपालिका', NULL, NULL),
(39, 4, 'Gaurigunj Rural Municipality', 'गौरीगंज गाउँपालिका', NULL, NULL),
(40, 4, 'Haldibari Rural Municipality', 'हल्दीवारी गाउँपालिका', NULL, NULL),
(41, 5, 'Biratnagar Sub-Metropolitan', 'विराटनगर उपमहानगरपालिका', NULL, NULL),
(42, 5, 'Belbari Municipality', 'बेलबारी नगरपालिका', NULL, NULL),
(43, 5, 'Letang Municipality', 'लेटांग नगरपालिका', NULL, NULL),
(44, 5, 'Pathari Sanischari Municipality', 'पथरी शनिश्चरे नगरपालिका', NULL, NULL),
(45, 5, 'Rangeli Municipality', 'रंगेली नगरपालिका', NULL, NULL),
(46, 5, 'Ratuwamaai Municipality', 'रतुवामाई नगरपालिका', NULL, NULL),
(47, 5, 'Sunwarsi Municipality', 'सुनवर्षी नगरपालिका', NULL, NULL),
(48, 5, 'Urlabari Municipality', 'उर्लाबारी नगरपालिका', NULL, NULL),
(49, 5, 'Sundarharaicha Municipality', 'सुन्दरहरैचा नगरपालिका', NULL, NULL),
(50, 5, 'Jahada Rural Municipality', 'जहदा गाउँपालिका', NULL, NULL),
(51, 5, 'Budi Ganga Rural Municipality', 'बुढीगंगा गाउँपालिका', NULL, NULL),
(52, 5, 'Katahari Rural Municipality', 'कटहरी गाउँपालिका', NULL, NULL),
(53, 5, 'Dhanpalthan Rural Municipality', 'धनपालथान गाउँपालिका', NULL, NULL),
(54, 5, 'Kanepokhari Rural Municipality', 'कानेपोखरी गाउँपालिका', NULL, NULL),
(55, 5, 'Gramthan Rural Municipality', 'ग्रामथान गाउँपालिका', NULL, NULL),
(56, 5, 'Kerabari Rural Municipality', 'केरावारी गाउँपालिका', NULL, NULL),
(57, 5, 'Miklajung Rural Municipality', 'मिक्लाजुङ गाउँपालिका', NULL, NULL),
(58, 6, 'Halesituwanchung Municipality', 'हलेसीतुवांचुंग नगरपालिका', NULL, NULL),
(59, 6, 'Rupakot Majhuwagadhi Municipality', 'रुपाकोट मझुवागढ़ी नगरपालिका', NULL, NULL),
(60, 6, 'Khotehang Rural Municipality', 'खोटेहाङ गाउँपालिका', NULL, NULL),
(61, 6, 'Diprung Rural Municipality', 'दिप्रुङ गाउँपालिका', NULL, NULL),
(62, 6, 'Aiselukharka Rural Municipality', 'ऐसेलुखर्क गाउँपालिका', NULL, NULL),
(63, 6, 'Jantedhunga Rural Municipality', 'जन्तेढुंगा गाउँपालिका', NULL, NULL),
(64, 6, 'Kepilasgadhi Rural Municipality', 'केपिलासगढी गाउँपालिका', NULL, NULL),
(65, 6, 'Barahpokhari Rural Municipality', 'बराहपोखरी गाउँपालिका', NULL, NULL),
(66, 6, 'Lamidanda Rural Municipality', 'लामीडाँडा गाउँपालिका', NULL, NULL),
(67, 6, 'Sakela Rural Municipality', 'साकेला गाउँपालिका', NULL, NULL),
(68, 7, 'Siddhicharan Municipality', 'सिद्दिचरण नगरपालिका', NULL, NULL),
(69, 7, 'Manebhanjyang Rural Municipality', 'मानेभञ्ज्याङ गाउँपालिका', NULL, NULL),
(70, 7, 'Champadevi Rural Municipality', 'चम्पादेवी गाउँपालिका', NULL, NULL),
(71, 7, 'Sunkoshi Rural Municipality', 'सुनकोशी गाउँपालिका', NULL, NULL),
(72, 7, 'Molung Rural Municipality', 'मोलुङ गाउँपालिका', NULL, NULL),
(73, 7, 'Chisankhugadhi Rural Municipality', 'चिसंखुगढी गाउँपालिका', NULL, NULL),
(74, 7, 'Khiji Demba Rural Municipality', 'खिजिदेम्बा गाउँपालिका', NULL, NULL),
(75, 7, 'Likhu Rural Municipality', 'लिखु गाउँपालिका', NULL, NULL),
(76, 8, 'Fidim Municipality', 'फिदिम नगरपालिका', NULL, NULL),
(77, 8, 'Miklajung Rural Municipality', 'मिक्लाजुङ गाउँपालिका', NULL, NULL),
(78, 8, 'Phalgunanda Rural Municipality', 'फाल्गुनन्द गाउँपालिका', NULL, NULL),
(79, 8, 'Hilihang Rural Municipality', 'हिलिहाङ गाउँपालिका', NULL, NULL),
(80, 8, 'Phalelung Rural Municipality', 'फालेलुङ गाउँपालिका', NULL, NULL),
(81, 8, 'Yangwarak Rural Municipality', 'याङवरक गाउँपालिका', NULL, NULL),
(82, 8, 'Kummayak Rural Municipality', 'कुम्मायक गाउँपालिका', NULL, NULL),
(83, 8, 'Tumbewa Rural Municipality', 'तुम्बेवा गाउँपालिका', NULL, NULL),
(84, 9, 'Chainpur Municipality', 'चैनपुर नगरपालिका', NULL, NULL),
(85, 9, 'Khandwari Municipality', 'धर्मदेवी नगरपालिका', NULL, NULL),
(86, 9, 'Dharmadevi Municipality', 'खांदवारी नगरपालिका', NULL, NULL),
(87, 9, 'Maadi Municipality', 'मादी नगरपालिका', NULL, NULL),
(88, 9, 'Panchkhapan Municipality', 'पाँचखपन नगरपालिका', NULL, NULL),
(89, 9, 'Makalu Rural Municipality', 'मकालु गाउँपालिका', NULL, NULL),
(90, 9, 'Silichong Rural Municipality', 'सिलीचोङ गाउँपालिका', NULL, NULL),
(91, 9, 'Sabhapokhari Rural Municipality', 'सभापोखरी गाउँपालिका', NULL, NULL),
(92, 9, 'Chichila Rural Municipality', 'चिचिला गाउँपालिका', NULL, NULL),
(93, 9, 'Bhot Khola Rural Municipality', 'भोटखोला गाउँपालिका', NULL, NULL),
(94, 10, 'Solukhumbu', 'सोलुदुधकुण्ड नगरपालिका', NULL, NULL),
(95, 10, 'Dudhakaushika Rural Municipality', 'दुधकौशिका गाउँपालिका', NULL, NULL),
(96, 10, 'Necha Salyan Rural Municipality', 'नेचासल्यान गाउँपालिका', NULL, NULL),
(97, 10, 'Dudhkoshi Rural Municipality', 'दुधकोशी गाउँपालिका', NULL, NULL),
(98, 10, 'Maha Kulung Rural Municipality', 'महाकुलुङ गाउँपालिका', NULL, NULL),
(99, 10, 'Sotang Rural Municipality', 'सोताङ गाउँपालिका', NULL, NULL),
(100, 10, 'Khumbu Pasang Lhamu Rural Municipality', 'खुम्बु पासाङल्हमु गाउँपालिका', NULL, NULL),
(101, 10, 'Likhu Pike Rural Municipality', 'लिखुपिके गाउँपालिका', NULL, NULL),
(102, 11, 'Sunsari', '', NULL, NULL),
(103, 12, 'Taplejung', '', NULL, NULL),
(104, 1, 'Tehrathum', '', NULL, NULL),
(105, 13, 'Udayapur', '', NULL, NULL),
(106, 14, 'Bara', '', NULL, NULL),
(107, 15, 'Dhanusa', '', NULL, NULL),
(108, 16, 'Mahottari', '', NULL, NULL),
(109, 17, 'Parsa', '', NULL, NULL),
(110, 18, 'Rautahat', '', NULL, NULL),
(111, 19, 'Saptari', '', NULL, NULL),
(112, 20, 'Sarlahi', '', NULL, NULL),
(113, 21, 'Siraha', '', NULL, NULL),
(114, 22, 'Bhaktapur', '', NULL, NULL),
(115, 23, 'Chitwan', '', NULL, NULL),
(116, 24, 'Dhading', '', NULL, NULL),
(117, 25, 'Dolakha', '', NULL, NULL),
(118, 26, 'Kavrepalanchok', '', NULL, NULL),
(119, 27, 'Kathmandu', '', NULL, NULL),
(120, 28, 'Lalitpur', '', NULL, NULL),
(121, 29, 'Makwanpur', '', NULL, NULL),
(122, 30, 'Nuwakot', '', NULL, NULL),
(123, 31, 'Ramechhap', '', NULL, NULL),
(124, 32, 'Rasuwa', '', NULL, NULL),
(125, 33, 'Sindhuli', '', NULL, NULL),
(126, 34, 'Sindhupalchowk', '', NULL, NULL),
(127, 35, 'Baglung', '', NULL, NULL),
(128, 36, 'Gorkha', '', NULL, NULL),
(129, 37, 'Kaski', '', NULL, NULL),
(130, 38, 'Lamjung', '', NULL, NULL),
(131, 39, 'Manang', '', NULL, NULL),
(132, 40, 'Mustang', '', NULL, NULL),
(133, 41, 'Myagdi', '', NULL, NULL),
(134, 42, 'Nawalparasi', '', NULL, NULL),
(135, 43, 'Parbat', '', NULL, NULL),
(136, 44, 'Syangja', '', NULL, NULL),
(137, 45, 'Tanahun', '', NULL, NULL),
(138, 46, 'Arghakhanchi', '', NULL, NULL),
(139, 47, 'Banke', '', NULL, NULL),
(140, 48, 'Bardiya', '', NULL, NULL),
(141, 49, 'Dang', NULL, NULL, NULL),
(142, 50, 'Gulmi', '', NULL, NULL),
(143, 51, 'Kapilvastu', '', NULL, NULL),
(144, 52, 'Nawalparasi (West)', '', NULL, NULL),
(145, 53, 'Palpa', '', NULL, NULL),
(146, 54, 'Pyuthan', '', NULL, NULL),
(147, 5, 'Rolpa', '', NULL, NULL),
(148, 56, 'Rukum (East)', '', NULL, NULL),
(149, 57, 'Rupandehi', '', NULL, NULL),
(150, 58, 'Dailekh', '', NULL, NULL),
(151, 59, 'Dolpa', '', NULL, NULL),
(152, 60, 'Humla', '', NULL, NULL),
(153, 61, 'Jajarkot', '', NULL, NULL),
(154, 62, 'Jumla', '', NULL, NULL),
(155, 63, 'Kalikot', '', NULL, NULL),
(156, 64, 'Mugu', '', NULL, NULL),
(157, 65, 'Rukum (West)', '', NULL, NULL),
(158, 67, 'Salyan', '', NULL, NULL),
(159, 68, 'Surkhet', '', NULL, NULL),
(160, 69, 'Acham', '', NULL, NULL),
(161, 70, 'Baitadi', '', NULL, NULL),
(162, 71, 'Bajhan', '', NULL, NULL),
(163, 72, 'Bajura', '', NULL, NULL),
(164, 73, 'Dadeldhura', '', NULL, NULL),
(165, 74, 'Darcula', '', NULL, NULL),
(166, 75, 'Doti', '', NULL, NULL),
(167, 76, 'Kailali', '', NULL, NULL),
(168, 77, 'Kanchanpur', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(2, 'role-create', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(3, 'role-edit', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(4, 'role-delete', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(5, 'product-list', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(6, 'product-create', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(7, 'product-edit', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54'),
(8, 'product-delete', 'web', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `post_unique_id` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `thumbs` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `visit_no` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `post_unique_id`, `slug`, `thumbs`, `description`, `tags`, `meta_keyword`, `status`, `visit_no`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 3, 'जिन्सी व्यवस्थापन सफ्टवेयर', '2_639764bc02b7d', 'janasa-vayavasathapana-safatavayara', '/upload_file/product/1670866584_1686860378_Capture.PNG', '<p style=\"text-align:justify\">कार्यलाई कम्प्यूटराइज प्रविधिमा संचालन गर्न आवश्यक क्ष्लखभलतयचथ ःबलबनझभलत (जिन्सी &nbsp;सफ्टवेयर)सफटवेयर यस संस्थाले विकास गरेको छ । सो सफ्टवेयरको &nbsp;माध्यमवाट जिन्सी शाखा गर्ने सम्पुर्ण कार्यहरु कम्युटरकै माध्यम बाट गर्न सकिने (माग फारम, खरिद आदेश, दाखिला, खप्ने सामान, नखप्ने सामान, मिन्हा फाराम, निरिक्षण फाराम को विवरणहरु राख्न, हेर्न तथा वुझ्न सहयोग पुग्ने छ।</p>\r\n\r\n<p style=\"text-align:justify\"><strong>जिन्सी ब्यवस्थापन सफ्टवेयरवाट &nbsp;प्राप्त हुने &nbsp;प्रतिवेदनहरु र विशेषताहरु</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp; &nbsp;सामानको बिवरणहरु राख्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;खप्ने तथा खर्च भएर जाने सामानहरुको बिवरण राख्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;माग फाराम भर्न मिल्ने र प्रीन्ट गर्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;खरिद आदेशको बिवरण राख्न मिल्ने र उक्त आदेश प्रीन्ट गर्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;दाखिला बिवरणहरु राख्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;हस्तान्तरण फाराम भर्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;जिन्सी निरीक्षण फाराम भर्न मिल्ने ।<br />\r\n&nbsp;&nbsp; &nbsp;सवारी लकबुक राख्न मिल्ने&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;जिन्सी लिलामी सम्वन्धी विवरण राख्न मिल्ने ।&nbsp;<br />\r\n&nbsp;&nbsp; &nbsp;आन्तरीक अडर फारम&nbsp;</p>', NULL, NULL, 1, 5, '2022-12-12 12:16:23', '2022-12-12 11:43:28', '2022-12-12 12:16:23'),
(7, 6, 'Est vero esse aliqua', '2_639766adb850a', 'est-vero-esse-aliqua', '/upload_file/product/1670866605_941880313_1669012915_1180707290_286324145_1089374201691689_5037261627870140447_n.jpg', NULL, 'Et eveniet pariatur', 'Id laboriosam venia', 1, 0, '2022-12-12 11:51:58', '2022-12-12 11:51:46', '2022-12-12 11:51:58'),
(8, 3, 'Paperless Document Management [PDS]', '2_63976ba42dadc', 'paperless-document-management-pds', '/upload_file/product/1674625291_1596034483_PDS1(new).png', '<p style=\"text-align:justify\">उपरोक्त सम्वन्धमा सफ्टेक फाउन्डेसन प्रा.लि. सूचना तथा संचार प्रविधिको क्षेत्रमा कार्यरत संस्था हो । यस संस्थाले विषेसतः ःष्अचयकयात ऋयचउयचबतष्यल, क्ष्द्यः, ल्भ्त्क्ग्क्ष्त्भ्, ऋक्ष्क्ऋइ जस्ता अन्तराष्ट्रिय क्षेत्रमा ख्याति प्रप्त संस्थाहरु संग सहकार्य गर्दै ति संस्थाहरुका सेवा तथा उत्तपादन नेपाली बजार सम्म पुरयाउदै आएको छ साथै स्थानीय स्तरमा पनि सरकारी तथा गैर सरकारी निकायहरुसंग समन्वयन गरी सूचना तथा संचार प्रविधि संग सम्वन्धित विभिन्न प्रयोगकर्ता मैत्री, नेपाल सरकारका ऐन कानून, अनूसुची अनुसार नै सफ्टवेयरहरु विकास गर्ने कार्य गर्दै आएको छ । वढ्दो कामको चाप र एकै चोटी धैरै एचयवभअतक हरुमा कार्य भईरहँदा एचयवभअतक हरुलाई प्रत्यक्षरुपमा ःयलष्तयच र भ्खबगिबतभ गर्न आउने &nbsp;समस्याहरु त श्रीमानलाई अवगत नै छ ।</p>\r\n\r\n<p style=\"text-align:justify\">यस शन्दर्भमा भ्भिअतचयलष्अ माध्यमवाट एचयवभअत हरुलाई ःयलष्तयच र भ्खबगिबतभ लागि आवस्यक एचयवभअत ःबलबनझभलत सफ्टवेयर यस संस्थाले विकास गरेको छ । सो सफ्टवेयरको माध्यमवाट विद्युतीय प्रणालि बाट एचयवभअत हरुलाई ःयलष्तयच र भ्खबगिबतभ गर्न सकिन्छ ।&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">तसर्थ तहांलाई यो सफ्टवेयरको प्रयोगले पारदर्शी, छिटो छरितो र समय सापेक्ष ढंगवाट कार्य गर्न प्रविधिको माध्यमवाट सहयोग पुग्ने र कार्यालयको &nbsp;कामकाजमा निकै राम्रो प्रभाव समेत पर्ने साथै नेपाल सरकारको &nbsp;भ्(न्यखभचलबलअभ सम्वन्धी नितीलाई पनि टेवा पुग्ने हुदा प्रयोगको लागि सुझाव साथ आवस्यक लागत यसै साथ संलग्न गरी पेश गरेको छु । &nbsp;&nbsp;</p>', NULL, NULL, 1, 9, NULL, '2022-12-12 12:12:57', '2023-01-31 01:33:25'),
(9, 3, 'Softech Content management System SCMS', '2_63976c5ae4759', 'softech-content-management-system-scms', '/upload_file/product/1670868058_1261645087_scms.PNG', '<p>Softech Content management System SCMS</p>', NULL, NULL, 1, 3, NULL, '2022-12-12 12:15:59', '2023-01-21 08:14:44'),
(10, 3, 'Customer relationship management (CRM)', '2_63976cc889567', 'customer-relationship-management-crm', '/upload_file/product/1670868168_848447994_dcms.PNG', '<p><strong>Customer relationship management</strong>&nbsp;(CRM) is a technology for managing all your company&#39;s relationships and interactions with customers and potential customers. The goal is simple: Improve business relationships. A CRM system helps companies stay connected to customers, streamline processes, and improve profitability.</p>', NULL, NULL, 1, 5, NULL, '2022-12-12 12:17:48', '2023-01-31 01:33:20'),
(11, 3, 'Dynamic Content management System DCMS', '2_63976d362a1a1', 'dynamic-content-management-system-dcms', '/upload_file/product/1670868278_1901958913_dcms new.PNG', '<p style=\"text-align:justify\">CMS stands for&nbsp;<strong>content management system</strong>. CMS is computer software or an application that uses a database to manage all content, and it can be used when developing a website. A CMS can therefore be used to update content and/or your website structure.</p>\r\n\r\n<p style=\"text-align:justify\">CMS stands for&nbsp;<strong>content management system</strong>. CMS is computer software or an application that uses a database to manage all content, and it can be used when developing a website. A CMS can therefore be used to update content and/or your website structure.</p>', NULL, NULL, 1, 9, NULL, '2022-12-12 12:19:38', '2023-01-31 01:33:16'),
(12, 3, 'Revenue Management System', '2_63d0bf9898508', 'revenue-management-system', '/upload_file/product/1674729430_961604601_Revenue (1).png', '<p>Revenue Management System is the centralized software useful for collecting revenues and incomes from different tax payers. It provides accuracy transparency, in the process of collecting tax.</p>', NULL, NULL, 1, 8, NULL, '2023-01-24 23:50:20', '2023-01-31 01:34:46'),
(13, 3, 'Apangata ani Jesthanagrik Parichaya Patra', '2_63d0c95932370', 'apangata-ani-jesthanagrik-parichaya-patra', '/upload_file/product/1674627417_740489511_apangata1.png', '<p>विभिन्न किसिमका अपाङ्गता भएका व्यक्तिहरुको तथा ज्येष्ठ नागरिकको लग/जानकारी राख्न मिल्ने, जुनमा अपाङ्ग व्यक्तिका विवरण जस्तै ठेगाना, नाम, उमेर, अपाङ्गता देखिने फोटो इत्यादि देखिने छ। ज्येष्ठ नागरिक व्यक्ति तथा अपाङ्ग व्यक्ति सम्बन्धी विवरण नदोहोरिने कम्प्युटरले व्यक्तिको जानकारी uniqueness अद्वितीय छुट्टाउने।</p>\r\n\r\n<p>नगरपालिकाले सजिलै अपाङ्ग व्यक्ति तथा ज्येष्ठ नागरिक सम्बन्धी जानकारी प्राप्त गर्न सक्ने जुन नगरपालिकालाई अपाङ्ग व्यक्तिले पाउने तथा पाइरहेको सुबिधा थाहा पाउन मद्दत हुन्छ।</p>', NULL, NULL, 1, 2, NULL, '2023-01-25 00:31:57', '2023-01-31 01:33:10'),
(14, 3, 'Enterprise Resource Planning [ERP]', '2_63d0d0251fe97', 'enterprise-resource-planning-erp', '/upload_file/product/1674629157_154370815_erp_brochure_1 copy(new).png', '<p>ERP software is developed for the automation of Local government, a complete responsive system. This software implemented on can be both Local computers and a Cloud server. Using a Cloud server we can use software from</p>\r\n\r\n<p>This system mainly consists of four different software where users can find individual login for all the systems. The client can apply for Sifarish, online and can pay the Custom Service [सेवा दस्तुर] through Khalti [Mobile Banking].</p>', NULL, NULL, 1, 1, NULL, '2023-01-25 01:00:57', '2023-01-31 01:33:05'),
(15, 3, 'Financial Management Information System[FIMS]', '2_63d0e05b97ccd', 'financial-management-information-systemfims', '/upload_file/product/1674633307_1833111966_FMIS1.png', '<p>सरकारी कार्यालयहरुको आर्थिक प्रशासन शाखामा दैनिक गरिने कार्यहरु केन्द्रीयस्तर, बिनियोजन राजश्व, धरौटी, कार्यसंचालन कोष, तलबी विवरण जस्ता कार्यहरु Financial Management Information System (FMIS) को माध्यमबाट छिटो छरितो तथा पारदर्शी तथा आधुनिक वैज्ञानिक तरिकाले र कम्प्यूटर के माध्यमबाट सम्पादन गर्ने तथा आवश्यक प्रतिवेदनहरु तुरुन्त प्राप्त गर्न सक्नु नै यसको प्रमुख उद्देश्य रहेको छ ।</p>', NULL, NULL, 1, 2, NULL, '2023-01-25 02:10:07', '2023-01-31 01:33:02'),
(16, 3, 'G-bargha', '2_63d0e15fba744', 'g-bargha', '/upload_file/product/1674633567_1219858472_G-bargha1.png', '<p>कुनै पनि व्यवसाय सुरु गर्नु अघि उद्यमीहरूले आफ्नो कम्पनी दर्ता गर्न पर्ने हुन्छ। उद्यमीहरूले आफ्नो व्यवसायको आवश्यकता र प्रकृति हेरी कुन प्रकारमा आफ्नो व्यवसाय दर्ता गर्ने निर्णय गर्नु पर्ने हुन्छ। नेपालमा स्वामित्वको आधारमा तीन प्रकारका व्यवसायहरू छन्, ती हुन्ः एकल स्वामित्व, साझेदारी व्यवसाय र कम्पनी (पब्लिक कम्पनी र प्राइभेटकम्पनी)। यस्तो व्यवसाय दर्ता गर्न चाहने व्यवसायीले सम्बन्धित मा | तोकिएको कानुनी ढाँचामा आवेदनसहित निर्धारित शुल्क बुझाउनु पर्छ ।</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 1, 1, NULL, '2023-01-25 02:14:31', '2023-01-31 01:32:57'),
(17, 3, 'Legal Case Management System', '2_63d0e2fdaef04', 'legal-case-management-system', '/upload_file/product/1674727207_785505523_legal_brochure1 copy.jpg', '<p><span style=\"font-size:16px\"><strong>नगरपालिका तथा गाउँपालिका दर्ता हुन आउने सम्पूर्ण विवाद तथा उजुरीहरुलाई यस सफ्टवेर को माध्यमबाट व्यवस्थापन गर्न सकिन्छ।</strong></span></p>\r\n\r\n<p><strong><span style=\"font-size:14px\">हाम्रा विशेषताहरुः</span></strong></p>\r\n\r\n<ul>\r\n	<li>गाउँपालिका/ नगरपालिकामा आउने विभिन्न उजूदीहरुलाई व्यवस्थापन गर्ने सकिने ।</li>\r\n	<li>उजुरी/विवाद दर्ता गर्न मिल्ने ।</li>\r\n	<li>अजुरी दर्ता गरेपक्ष्यात सम्पूर्ण अनुसूचीहरू स्वत बन्ने ।</li>\r\n	<li>उजुरी/विवादहरूको दर्ता तथा चलानी गर्न सकिने ।</li>\r\n	<li>विवाद/उजुरी दर्ता गरिसकेपछि सम्पूर्ण सूचना (जस्तै : अर्को तारिख आदेश) आदि निकाल्न मिल्ने ।</li>\r\n	<li>गाउँपालिका/ नगरपालिका र वडाहरुबाट मिला पत्र गर्न मिल्ने ।</li>\r\n	<li>पुनराबेदनको सम्पूर्ण विवरण राखन मिल्ने ।</li>\r\n</ul>', NULL, NULL, 1, 13, NULL, '2023-01-25 02:21:21', '2023-02-05 06:11:01'),
(18, 3, 'Payroll Management System', '2_63d11098d6288', 'payroll-management-system', '/upload_file/product/1674645656_459620633_payrole1.png', '<p>एक आर्थिक वर्षको वजेटको उपशीर्षक रसो बजेटको उपशीर्षकको रकमलाई अर्को आर्थिक वर्षको उपशीर्षक र स्रोतमा</p>\r\n\r\n<p>परिणत गर्न सकिन्छ ।</p>', NULL, NULL, 1, 1, NULL, '2023-01-25 05:35:58', '2023-01-29 01:45:33'),
(19, 3, 'Personal Information System [PIS]', '2_63d1112b571e8', 'personal-information-system-pis', '/upload_file/product/1674645803_1385757512_PIS.png', '<p>Pis एक डाटाबेस सफ्टवयर हो जसले निजामती कर्मचारीको सबै जनसांख्यिकीय र सेवा प्रोफाइलहरू कायम र व्यवस्थापन गर्दछ।</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 1, 1, NULL, '2023-01-25 05:38:23', '2023-01-29 01:45:21'),
(20, 3, 'Planning Management System', '2_63d111ff09794', 'planning-management-system', '/upload_file/product/1674646015_882050019_Planning.png', '<p>परियोजना व्यवस्थापन सफ्टवेरसँग योजना व्यवस्थित र संसाधन उपकरणहरु व्यवस्थापन र संसाधन, बजेट अनुमानहरु विकास गर्न सक्ने क्षमता छ। यो सफ्टवेरले प्रयोगकर्ताहरुलाई लागत नियन्त्रण र बजेटिङ, गुणस्तर व्यवस्थापन र कागजात व्यवस्थापन गर्न सहयोग गर्दछ।</p>', NULL, NULL, 1, 6, NULL, '2023-01-25 05:41:55', '2023-02-20 04:15:55'),
(21, 3, 'Sifarish Management System', '2_63d112ea4fa33', 'sifarish-management-system', '/upload_file/product/1674646250_1150673857_Sifarish1.png', '<p>Sifarish software is developed for the automation of Local Government which is a completely responsive system. This software can be implemented on both Local computers and a Cloud server. Using a Cloud server we can use software from anywhere.</p>\r\n\r\n<p>This system consists of software where users can find individual login for all the systems. The client can apply for Sifarish, online and can pay the Custom Service (सेवा दस्तुर through Khalty Mobile Banking).</p>', NULL, NULL, 1, 14, NULL, '2023-01-25 05:45:50', '2023-04-17 06:19:46'),
(22, 3, 'Online Attendance System', '2_63d24b43338e8', 'online-attendance-system', '/upload_file/product/1674726211_346951805_Untitled design.png', '<h5>कर्मचारीहरुको आएको समय, ढिलो-छिटो आएको समय, तथा दैनिक / साप्ताहिक / मासिक र वार्षिक विवरणहरुलाई प्राप्त गर्न सकिने</h5>', NULL, NULL, 1, 18, NULL, '2023-01-26 03:58:31', '2023-04-19 05:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_en` varchar(255) DEFAULT NULL,
  `province_np` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_en`, `province_np`, `created_at`, `updated_at`) VALUES
(1, 'Province No. 1', NULL, NULL, NULL),
(2, 'Province No. 2', NULL, NULL, NULL),
(3, 'Bagmati Pradesh', NULL, NULL, NULL),
(4, 'Gandaki Pradesh', NULL, NULL, NULL),
(5, 'Province No. 5', NULL, NULL, NULL),
(6, 'Karnali Pradesh', NULL, NULL, NULL),
(7, 'Sudurpashchim Pradesh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-12-12 05:49:54', '2022-12-12 05:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_mobile` varchar(255) DEFAULT NULL,
  `site_first_address` varchar(255) DEFAULT NULL,
  `site_second_address` varchar(255) DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `site_url` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `social_profile_fb` varchar(255) DEFAULT NULL,
  `social_profile_twitter` varchar(255) DEFAULT NULL,
  `social_profile_insta` varchar(255) DEFAULT NULL,
  `social_profile_youtube` varchar(255) DEFAULT NULL,
  `social_profile_linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_email`, `site_phone`, `site_mobile`, `site_first_address`, `site_second_address`, `site_description`, `map`, `site_url`, `logo`, `social_profile_fb`, `social_profile_twitter`, `social_profile_insta`, `social_profile_youtube`, `social_profile_linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Softech Content Management System (SCMS)', 'root@admin.com', '9742867915', '9814618803', 'Kathmandu', 'Mid Baneshor KTM', 'Softech Content Management System', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2100.5573977025133!2d85.33579712972954!3d27.695592355120898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a77520a339%3A0x4df14616bdef4f1c!2z4KS44KSr4KWN4KSf4KSf4KWH4KSVIOCkq-CkvuCkieCkqOCljeCkoeClh-CkuOCkqCDgpKrgpY3gpLDgpL4uIOCksuCkvy4!5e0!3m2!1sne!2snp!4v1670845236031!5m2!1sne!2snp\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'http://127.0.0.1:8000/', 'upload_file/setting/1670845259_1939414166_1536148958_384808185_logo.png', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-12 05:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` enum('superadmin','admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `avatar`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '9814618803', NULL, '2022-12-12 05:49:54', '$2y$10$wzJdazkRcARLhDqKjnpHCe4cJxaBZqV8knjN9xNFgf.G/hYP060T.', NULL, NULL, NULL, 'superadmin', 'active', NULL, '2022-12-12 05:49:54', NULL),
(2, 'Admin', 'admin@gmail.com', '9814618803', NULL, '2022-12-12 05:49:54', '$2y$10$3mqQhbFFT2fEjQOkkREJD.C3RhaaOCCpM5zjfzhPN.YXNgQmGaJ6e', NULL, NULL, NULL, 'admin', 'active', 'ph0BjVbR2DjRs2KjXkDRE2ZzPDdwOXVWIEbM64NgcHwTwLPwr3IWzjMzOSzU', '2022-12-12 05:49:54', NULL),
(3, 'User', 'user@gmail.com', '9814618803', NULL, '2022-12-12 05:49:54', '$2y$10$Ea5PSAfUF7EfmUbengOZFO/5EGoMuwFZe0yjKDs1Pv/EVM.aAZ3qi', NULL, NULL, NULL, 'user', 'active', NULL, '2022-12-12 05:49:54', NULL),
(4, 'trc chaudhary', 'trc@gmail.com', NULL, NULL, NULL, '$2y$10$Z7EECCMTRc0wImnLNZYAW.IeZRDX9peB3LcCMCkga1VYGTPVUIQxS', NULL, NULL, NULL, 'admin', 'active', NULL, '2022-12-12 05:49:54', '2022-12-12 05:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_documents`
--
ALTER TABLE `account_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_documents_account_parent_id_foreign` (`account_parent_id`);

--
-- Indexes for table `account_general_information`
--
ALTER TABLE `account_general_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_general_information_user_id_foreign` (`user_id`);

--
-- Indexes for table `account_openings`
--
ALTER TABLE `account_openings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_documents`
--
ALTER TABLE `application_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_documents_application_parent_id_foreign` (`application_parent_id`);

--
-- Indexes for table `application_family_details`
--
ALTER TABLE `application_family_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_family_details_application_parent_id_foreign` (`application_parent_id`);

--
-- Indexes for table `application_finance_details`
--
ALTER TABLE `application_finance_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_finance_details_application_parent_id_foreign` (`application_parent_id`);

--
-- Indexes for table `application_general_information`
--
ALTER TABLE `application_general_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_general_information_user_id_foreign` (`user_id`),
  ADD KEY `application_general_information_loan_type_foreign` (`loan_type`),
  ADD KEY `application_general_information_loan_duration_foreign` (`loan_duration`);

--
-- Indexes for table `application_lands`
--
ALTER TABLE `application_lands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_lands_application_parent_id_foreign` (`application_parent_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_deposits`
--
ALTER TABLE `cash_deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_information`
--
ALTER TABLE `general_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_durations`
--
ALTER TABLE `loan_durations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `palikas`
--
ALTER TABLE `palikas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `palikas_district_id_foreign` (`district_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_documents`
--
ALTER TABLE `account_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_general_information`
--
ALTER TABLE `account_general_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_openings`
--
ALTER TABLE `account_openings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_documents`
--
ALTER TABLE `application_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_family_details`
--
ALTER TABLE `application_family_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_finance_details`
--
ALTER TABLE `application_finance_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_general_information`
--
ALTER TABLE `application_general_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_lands`
--
ALTER TABLE `application_lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cash_deposits`
--
ALTER TABLE `cash_deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fiscal_years`
--
ALTER TABLE `fiscal_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_information`
--
ALTER TABLE `general_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_durations`
--
ALTER TABLE `loan_durations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `palikas`
--
ALTER TABLE `palikas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_documents`
--
ALTER TABLE `account_documents`
  ADD CONSTRAINT `account_documents_account_parent_id_foreign` FOREIGN KEY (`account_parent_id`) REFERENCES `account_general_information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `account_general_information`
--
ALTER TABLE `account_general_information`
  ADD CONSTRAINT `account_general_information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application_documents`
--
ALTER TABLE `application_documents`
  ADD CONSTRAINT `application_documents_application_parent_id_foreign` FOREIGN KEY (`application_parent_id`) REFERENCES `application_general_information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application_family_details`
--
ALTER TABLE `application_family_details`
  ADD CONSTRAINT `application_family_details_application_parent_id_foreign` FOREIGN KEY (`application_parent_id`) REFERENCES `application_general_information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application_finance_details`
--
ALTER TABLE `application_finance_details`
  ADD CONSTRAINT `application_finance_details_application_parent_id_foreign` FOREIGN KEY (`application_parent_id`) REFERENCES `application_general_information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application_general_information`
--
ALTER TABLE `application_general_information`
  ADD CONSTRAINT `application_general_information_loan_duration_foreign` FOREIGN KEY (`loan_duration`) REFERENCES `loan_durations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_general_information_loan_type_foreign` FOREIGN KEY (`loan_type`) REFERENCES `loan_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_general_information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `application_lands`
--
ALTER TABLE `application_lands`
  ADD CONSTRAINT `application_lands_application_parent_id_foreign` FOREIGN KEY (`application_parent_id`) REFERENCES `application_general_information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `palikas`
--
ALTER TABLE `palikas`
  ADD CONSTRAINT `palikas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
