-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: mysql1005.mochahost.com
-- Generation Time: Jul 18, 2019 at 05:04 AM
-- Server version: 5.6.39
-- PHP Version: 7.2.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aungko_wlk`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `detail`, `photo`, `created_at`, `updated_at`) VALUES
(36, 'tttttttttt', 'rtertreetrt', '5d1986401eb2d_0862e6e1-64e4-440b-abe0-24639d07703c_12.jpg', '2019-06-30 21:20:46', '2019-06-30 21:34:16'),
(37, 'Robert Duncan', 'tgrtfghfghfhfghf', '5d198328d5081_20.jpg', '2019-06-30 21:20:57', '2019-06-30 21:21:04'),
(38, 'bbbbbbbb', 'bbbbbbbbbbbbbb', '5d198678cabf9_0012.jpg', '2019-06-30 21:35:12', '2019-06-30 21:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `detail`, `photo`, `created_at`, `updated_at`) VALUES
(23, 'Mobile Application Services', 'Described by Kenneth Rexroth as “one of the most accomplished, one of the most influential” of the postwar American poets, Robert Duncan was an important part of both the Black Mountain school of poetry, led by Charles Olson, and the San Francisco Renaissance, whose other members included poets Jack Spicer and Robin Blaser. A distinctive voice in American poetry, Duncan’s idiosyncratic poetics drew on myth, occultism, religion—including the theosophical tradition in which he was raised—and innovative writing practices such as projective verse and composition by field. During his lifetime, critics such as M.L. Rosenthal heralded him as “the most intellectual of our poets from the point of view of the effect upon him of a wide, critically intelligent reading.” Duncan’s work drew on a wide range of references, including Homer, Dante, and the work of modernist poets such as H.D. His many books of poetry include Heavenly City Earthly City (1947), The Opening of the Field (1960), Roots and Branches (1964), A Book of Resemblances (1966), Bending the Bow (1968), and, after a 15-year publishing hiatus, the influential volumes Ground Work I: Before the War (1984) and Ground Work II: In the Dark (1987). His Selected Poems (1993) was published posthumously, as was his volume of collected writings, and personal tribute to the work of H.D., The H.D. Book (2011). A decades-long project that distills much of Duncan’s thinking on poetry, modernism, and the role of the occult in the imagination, The Nation’s critic Ange Mlinko described The H.D. Book as a “palimpsest.” Mlinko noted the importance of book for being “not only revisited and restarted many times over the years, but incorporating different sources from different points in time… Duncan’s roving eye for patterns consistently saw relationships between the new science of his day and the ancient wisdom of the poets.”', '5d2db93076b36_c2.jpg', '2019-06-15 23:44:33', '2019-07-16 15:46:56'),
(24, 'PLC Control Services', 'Described by Kenneth Rexroth as “one of the most accomplished, one of the most influential” of the postwar American poets, Robert Duncan was an important part of both the Black Mountain school of poetry, led by Charles Olson, and the San Francisco Renaissance, whose other members included poets Jack Spicer and Robin Blaser. A distinctive voice in American poetry, Duncan’s idiosyncratic poetics drew on myth, occultism, religion—including the theosophical tradition in which he was raised—and innovative writing practices such as projective verse and composition by field. During his lifetime, critics such as M.L. Rosenthal heralded him as “the most intellectual of our poets from the point of view of the effect upon him of a wide, critically intelligent reading.” Duncan’s work drew on a wide range of references, including Homer, Dante, and the work of modernist poets such as H.D. His many books of poetry include Heavenly City Earthly City (1947), The Opening of the Field (1960), Roots and Branches (1964), A Book of Resemblances (1966), Bending the Bow (1968), and, after a 15-year publishing hiatus, the influential volumes Ground Work I: Before the War (1984) and Ground Work II: In the Dark (1987). His Selected Poems (1993) was published posthumously, as was his volume of collected writings, and personal tribute to the work of H.D., The H.D. Book (2011). A decades-long project that distills much of Duncan’s thinking on poetry, modernism, and the role of the occult in the imagination, The Nation’s critic Ange Mlinko described The H.D. Book as a “palimpsest.” Mlinko noted the importance of book for being “not only revisited and restarted many times over the years, but incorporating different sources from different points in time… Duncan’s roving eye for patterns consistently saw relationships between the new science of his day and the ancient wisdom of the poets.”', '5d0f1075dfeec_009.jpg', '2019-06-17 07:12:52', '2019-06-22 23:09:01'),
(25, 'web development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation&nbsp; cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5d0885d3408ce_42.jpg', '2019-06-17 22:19:42', '2019-07-08 20:50:50'),
(26, 'News', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi u..hfghfghfghfghfghfhfgh', '5d0885c9b35c2_9eba88e5-7911-461a-9e8c-c7545dadb207_5.jpg', '2019-06-17 22:38:37', '2019-07-09 09:41:25'),
(33, 'Kotlin', '<p style="text-align: justify;"><span style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&nbsp; cupidatat non&nbsp;</span><span style="font-size: 1rem; text-align: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&nbsp; cupidatat non&nbsp;</span><br></p>', '5d24bbe8a910d_021.jpg', '2019-07-08 20:58:43', '2019-07-09 09:41:07'),
(35, 'WLK foundation', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation&nbsp; cupidatat non proident, sunt in culpa qui officia deserunt mollit anim<br></p>', '5d2db90f62e73_FB_IMG_1561173868536.jpg', '2019-07-08 21:52:25', '2019-07-16 15:46:23'),
(39, 'dfdfd', '<p>လန်ဒန်မြို့၌ ကျင်းပ နေသော ဝင်ဘယ်ဒန်တင်းနစ်ပြိုင် ပွဲတွင် နိုင်ခြေအဆင့် (၇) ဆီမိုနာ ဟာလက်က တရုတ်မှ ဇန်ဂူအီကို ၇-၆ (၇-၄)၊ ၆-၁ ဖြင့် အနိုင်ရရှိ ပြီး ၂၀၁၄ နောက်ပိုင်း ပထမဆုံး အကြိမ် ဝင်ဘယ်ဒန်ဆီမီးဖိုင်နယ် သို့ ပြန်လည်တက်ရောက်ခဲ့သည်။ အမျိုးသမီးဘက်ခြမ်းတွင် ကျန်ရှိသူနိုင်ခြေအဆင့်အမြင့်ဆုံး ကမ္ဘာ့နံပါတ် (၁) ဟောင်းသည် ပထမပွဲငယ်၌ ၄-၁ ဖြင့်ရှုံးနေရာမှ အနိုင်ရရှိပြီး ၈၆ မိနစ်အတွင်း အ နိုင်ရရှိသည်။ ဟာလက် (၂၇) နှစ်သည် ဆီမီးဖိုင်နယ်တွင် နိုင်ခြေအဆင့် (၈) ယူကရိန်းမှ ဆဗစ်တိုလီနာနှင့် တွေ့ဆုံမည်ဖြစ်သည်။<br></p>', '1562836174_5d09b697b0fac_20.jpg', '2019-07-11 02:39:34', '2019-07-11 02:40:18'),
(41, 'WLK foundation', '<p><br></p><p>တိုင်းနှင့်ပြည်နယ်လေး ခုတွင် ကလေးမီးဖွားပြီးမိခင်သေ ဆုံးမှုနှုန်းစိုးရိမ်ဖွယ်မြင့်မားနေ ကြောင်း မြန်မာနိုင်ငံဆိုင်ရာ ကုလသမဂ္ဂဌာနေညှိနှိုင်းရေးမှူး နှင့် လူသားချင်းစာနာထောက် ထားမှုဆိုင်ရာညှိနှိုင်းရေးမှူး မစ္စ တာခနုသ်အာစဘီက ထုတ်ဖော် ပြောကြားသည်။ ဇူလိုင် ၁၁ ရက်က နေပြည် တော်တွင် ပြုလုပ်သည့်ကမ္ဘာ့လူ ဦးရေနေ့ အခမ်းအနားမိန့်ခွန်း၌ ကလေးမွေးဖွားပြီး မိခင်သေဆုံး မှုနှုန်းမြင့်မားသည့် တိုင်းနှင့် ပြည်နယ်အချို့ကို ပြောကြားရာ တွင် ချင်းပြည်နယ်၊ ဧရာဝတီ တိုင်း၊ မကွေးတိုင်းနှင့် ပဲခူးတိုင်း တို့ကို မစ္စတာခနုသ်အာစဘီက ဥပမာပေးပြောကြားသည်။</p>', '1562945119_contact.jpg', '2019-07-12 08:55:19', '2019-07-13 03:27:23'),
(42, 'သတင်းအချက်အလက်လုံခြုံရေး', '<p><br></p><p>သတင်းအချက်အလက် လုံခြုံရေးနှင့် ဆိုက်ဘာလုံခြုံရေး အကူအညီပေးရန် မြန်မာနိုင်ငံ ကွန်ပျူတာအသင်းချုပ် လက်အောက်၌ မြန်မာ့သတင်းအချက်အလက်လုံခြုံရေးအသင်း (MISA-Myanmar InformationSecurity Association) ကို ဇူလိုင် ၉ ရက်တွင် ဖွဲ့စည်းခဲ့သည်။ MISA ကို ရင်းနှီးမြှုပ်နှံမှုနှင့် ကုမ္ပဏီများ ညွှန်ကြားမှုဦးစီးဌာန (DICA) လက်အောက်တွင် မှတ်ပုံ တင်၍ ဖွဲ့စည်းခြင်းဖြစ်သည်။ ‘‘မြန်မာနိုင်ငံမှာရှိတဲ့ အိုင် စီတီနယ်ပယ်မှာ ဆိုက်ဘာနဲ့ ဒစ်ဂျစ်တယ်ကဏ္ဍက အရေးကြီးလာ တယ်။ ဒီအခန်းကဏ္ဍမှာ အင်ဖော်မေးရှင်းလုံခြုံရေးက အရေးကြီးတဲ့ အခန်းကဏ္ဍက ပါဝင်ရမှာဖြစ်တဲ့အတွက် အသင်းအဖွဲ့ ဖွဲ့စည်းရခြင်းဖြစ်ပါတယ်</p>', '5d2bfcae6e415_1563073785_pexels-photo-895825.jpeg', '2019-07-12 09:45:49', '2019-07-14 21:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `photo`, `link`, `created_at`, `updated_at`) VALUES
(16, '5d09b0897afa0_0017.jpg', 'https://www.foreliink.com/', '2019-06-18 21:18:25', '2019-06-18 21:18:25'),
(17, '5d09b6a915251_0103.jpg', 'https://www.netscriper.com/', '2019-06-18 21:42:22', '2019-06-18 21:44:33'),
(18, '5d09b697b0fac_20.jpg', 'https://www.facebook.com', '2019-06-18 21:44:15', '2019-06-18 21:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `message`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(14, 'Power Phoenix Myanmar', 'Mingalar Par', 'dfdgdfgg', '09543345876', 'moonlay@gmail.com', '2019-07-05 02:34:28', '2019-07-05 02:34:28'),
(15, 'Moon Lay', 'Mingalar Par', '4tetrreryrtyrty', '09543345876', 'moon123@gmail.com', '2019-07-05 04:52:58', '2019-07-05 04:52:58'),
(16, 'aung thu', 'Hello World', 'dfdgdfdsfsfsdfdsfs', '09543345876', 'aungthu@gmail.com', '2019-07-11 21:58:37', '2019-07-11 21:58:37'),
(17, 'aung thu', 'Hello World', 'dfdgdfdsfsfsdfdsfs', '09543345876', 'aungthu@gmail.com', '2019-07-11 22:01:08', '2019-07-11 22:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE IF NOT EXISTS `donates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `name`, `email`, `country`, `amount`, `comment`, `created_at`, `updated_at`) VALUES
(14, 'Moe Sandar', 'moon@gmail.com', 'France', '50.00', 'efrwferewrwewrwer', '2019-07-17 09:36:46', '2019-07-17 09:36:46'),
(15, 'moon moon', 'moon123@gmail.com', 'Barbados', '50.00', NULL, '2019-07-17 09:43:07', '2019-07-17 09:43:07'),
(16, 'SayarThu Yein Soe', 'thuyein@gmail.com', 'Albania', '100', NULL, '2019-07-17 09:43:52', '2019-07-17 09:43:52'),
(17, 'thazinphyo', 'thazinphyo95924@gmail.com', 'South Africa', '50.00', 'hello', '2019-07-17 13:40:52', '2019-07-17 13:40:52'),
(18, 'mama', 'one@gmail.com', 'Barbados', '50', NULL, '2019-07-17 13:41:26', '2019-07-17 13:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_06_11_034923_create_blogs_table', 1),
(7, '2019_06_12_042701_create_services_table', 2),
(8, '2019_06_12_065200_create_contacts_table', 3),
(9, '2019_06_12_074545_create_teams_table', 4),
(10, '2019_06_12_143010_create_offices_table', 5),
(12, '2019_06_12_143147_create_clients_table', 6),
(13, '2019_06_23_021946_create_donates_table', 7),
(14, '2019_06_29_015903_create_abouts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `photo`, `about`, `phone`, `email`, `address`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'wlk.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam aliquam voluptates commodi, quas earum id doloribus cupiditate molestiae reiciendis numquam pariatur iste ad esse rerum odio optio error veniam aLorem ipsum dolor sit, amet consectetur adipisicing elit. Nam aliquam voluptates commodi, quas earum id doloribus cupiditate molestiae reiciendis numquam pariatur iste ad esse rerum odio optio error veniam Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam aliquam voluptates commodi, quas earum id doloribus cupiditate molestiae reiciendis numquam pariatur iste ad esse', '09 455 500 014/09-455 500 014(viber)/09-776 089 484(wave money)', 'wlkfoundation@gmail.com', 'No 237, KantKorMyaing (2) Street, 23 Quarter, Thuwana, Thingangyun Township Yangon', 'We seek a world of hope, tolerance and social justice, where poverty has been overcome and all people live with dignity and security.', 'Our foundation works around the globe to save lives, defeat poverty and achieve social justice.', '2019-06-11 17:30:00', '2019-07-12 23:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'design.jpg', 'Web Design & Development Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 07:57:49', '2019-06-17 07:57:49'),
(2, '5847e99bcef1014c0b5e4827.png', 'Arduion Controller Services', 'Great design is not created in a vacuum. Our designers dive deep to immerse themselves in your industry and your brand aesthetic. Our collaborative process involves you and your team every step of the way, ensuring that your new site is something that truly represents you and your business while also pushing you to the next level..', '2019-06-17 08:00:24', '2019-06-17 08:00:24'),
(3, 'kisspng-robotics.jpg', 'Robotic Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:03:00', '2019-06-17 08:03:00'),
(4, 'Mobile-App.png', 'Enterprise Resources Planning & Mobile Application', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:03:46', '2019-06-18 09:33:33'),
(5, '5d090d0df07a8_plc.png', 'PLC Control Services', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.', '2019-06-17 08:04:58', '2019-06-18 09:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `photo`, `position`, `detail`, `created_at`, `updated_at`) VALUES
(5, 'SayarThu Yein Soe', '5d09b2e51f0a3_003.jpg', 'Team Leader', 'edfsfsdfdsfdsfsdfsdfsdfsdfsdf', '2019-06-18 21:28:01', '2019-06-18 21:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'moonlay@gmail.com', NULL, '$2y$10$x7AqToXz0pRAGLwcUuwvku53OjzBQ1Vvx13IjZ4AAVPXLB9PRnSlO', NULL, '2019-06-18 21:57:12', '2019-06-18 21:57:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
