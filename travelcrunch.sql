-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 07:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelcrunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` mediumtext NOT NULL,
  `add1` mediumtext NOT NULL,
  `add2` mediumtext NOT NULL,
  `telno` mediumtext NOT NULL,
  `phoneno` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `add1`, `add2`, `telno`, `phoneno`) VALUES
(1, 'careers@travleu.com', 'Manhatta Hall Veerpolder 7 2361 Empor ', 'Ltd 1258, Melbourne, Australia', '+51 900 321 4568', '+501 860 3210');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `parent` int(10) NOT NULL,
  `name` mediumtext NOT NULL,
  `tagline` text NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `banner` longtext NOT NULL,
  `about1` longtext NOT NULL,
  `about1_image` longtext NOT NULL,
  `about2` longtext DEFAULT NULL,
  `about2_image` longtext DEFAULT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `parent`, `name`, `tagline`, `featured`, `banner`, `about1`, `about1_image`, `about2`, `about2_image`, `isdeleted`) VALUES
(12, 10, 'India', 'The place of dreams', 1, 'india.jpg', 'Wonderfully different, there is nothing quite like a tour of India. Travel a lot? No matter how much you\'ve done or how many countries you\'ve visited, when you first arrive in India it will hit you like a gale force wind; a hurricane of sounds, smells, and colour where nothing is as it seems.', 'indiatour.jpg', 'Travelling to India reveals a country that is both mesmerizing, exotic, exciting, and mystical but at times frustrating, confusing, and chaotic. Relax, stay calm, be patient, and smile and India will open up herself to you in all her splendid glory.', 'Gateway-of-India-in-Mumbai.jpg', 0),
(13, 11, 'ARGENTINA', 'Cowboy boots and dancing shoes', 1, 'ag.jpg', 'It has become cliché to say that Argentina is as much European as it is Latin; yet to arrive in Buenos Aires and discover this is actually true still surprises. With the Patagonian Andes as its glacial backbone, Argentina is a land of extreme wilderness, while its vast pampas are still home to roaming gauchos – the original South American cowboys.', 'ag1.jpg', 'Had enough of the wild? The birthplace of the tango and the world\'s fifth-largest wine producer has enough high culture to satisfy the most discerning palate, plus a nightlife that\'ll keep you up early into the morning.', 'ag2.jpg', 0),
(14, 10, 'Vietnam', 'Where the only constant is change', 1, 'Vt.jpg', 'Successively occupied by China, Russia, France, Japan, and the United States, Vietnam has had its share of foreign interference. But today, the Vietnamese are focused on rocketing into the future. In this new era of confident self-determination the atmosphere is one of palpable optimism. Fortunately for travellers, Vietnam\'s traditional charms have not yet been eclipsed.', 'vt1.jpg', 'Although noisy motorbikes continue to replace bicycles at an alarming rate, the former Communist stronghold of Hanoi has maintained its narrow-laned charm, while the melting limestone pinnacles of Halong Bay are as otherworldly as ever. From the ancient neighbourhoods of Hoi An to the vast Mekong Delta, the country offers an astonishing variety of scenery. Whether your fascination is wartime relics or beaches and rice paddies, see Vietnam now, because every year it seems to reinvent itself.', 'vt2.jpg', 0),
(15, 10, 'Japan', 'The past is the future', 1, 'j1.jpg', 'Nowhere on the planet do the modern and the ancient coexist more harmoniously than in Japan. Kimono-clad ladies chatter on futuristic phones while blurring by on the fastest trains in the world; thousand-year-old Zen temples are dwarfed by seas of skyscrapers; and neon signs are reflected in flooded rice paddies studded with green.', 'j21.jpg', 'Here, the future and past are like roommates in a Tokyo-sized apartment, sharing a space that seems too small for either but which miraculously accommodates both in a harmony that could only be Japanese. Endlessly fascinating and fascinatingly foreign, enigmatic Japan is a culture irresistible to Westerners, one that hits you like a sumo wrestler at full tilt.', 'j3.jpg', 0),
(16, 10, 'Sri Lanka', 'Buddha and the beach', 1, 'sl3.jpg', 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous.', 'sl11.jpg', 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous.', 'sl22.jpg', 0),
(17, 11, 'Brazil', 'Life at full speed', 1, 'b.jpg', 'Sensuality, dancing, and partying: it seems the Brazilians have made a science of all that is fun in life. The world champions of hedonism were no doubt aided by a lush land and steamy climate, but still there is something different about Brazilians.', 'b1.jpg', 'For one, they are the most diverse country in Latin America, not to mention the continent\'s only former Portuguese colony. One of the largest countries in the world, Brazil certainly has plenty to see – the Amazon and Iguassu Falls spring immediately to mind – but more than anything it\'s the Brazilian passion for life, epitomized by Rio\'s Carnival celebrations, that will make you fall in love and want to return again.', 'b2.jpg', 0),
(18, 12, 'Iceland', 'A little slice of Valhalla, right here on Earth', 1, 'ice.jpg', 'Small on the map and enormous in person, Iceland barely feels like Earth at all. Isolated in the frigid North Atlantic and forged through centuries of volcanic upheaval and tectonic shifting, Iceland is staggering to look at and otherworldly to explore. ', 'ice1.jpg', 'The outdoors provide all the action you need: towering mountain peaks scratch the sky, massive glaciers scrape the earth, sprawling icefields stretch beyond the horizon, and gorgeous fjords dazzle the eye. And when you\'ve had enough, head inside in weirdly wonderful Reykjavík and discover how the people lucky enough to live here full-time live.', 'ice2.jpg', 0),
(19, 12, 'Italy ', 'Your own personal Renaissance', 1, 'itly.jpg', 'Italians love to surround themselves with beauty, and it shows. A more fitting country could not have been designed by Michelangelo himself: from medieval hilltop towns to sun-drenched Mediterranean islands, Italy is sublime. Icons are so numerous it\'s difficult to choose. Some are entire cities: Venice, Florence, and Rome are works of art in themselves, and Italy has played host to arguably the greatest collection of art, architecture, and artists the world has ever seen.', 'Italy1.jpg', 'Home to more UNESCO World Heritage sites than any other country, Italy is nothing if not cultured; an education was once considered incomplete until one spent time in Italy. Today, this tradition continues, as visitors from around the world come to surround themselves with beauty and immerse themselves in la dolce vita. Viva Italia!', 'itly2.jpg', 0),
(20, 13, 'South Africa', '“Siyakwemukela!”', 1, 'sa.jpg', 'An entire continent’s worth of greatness concentrated into a single gorgeous package, South Africa practically bowls visitors over with its abundance of natural splendour, exotic wildlife, cosmopolitan flair, and friendly faces. ', 'sa1.jpg', 'There are hundreds of reasons to come to South Africa – savannah safaris, the vineyards of Stellenbosch, dazzling Cape Town, and the stunning Garden Route, to name but a few – and once you’ve gotten yourself here, you’ll discover millions more.', 'sa2.jpg', 0),
(21, 13, 'Tanzania', 'Safari, so good!', 1, 'tz.jpg', 'One of the most popular tourist destinations in Africa, Tanzania is well-established as one of the best wildlife-viewing destinations in the world. Safaris follow the trail of giant herds of antelope or wildebeest across the Serengeti, while lions lounge in the shade waiting for their next meal to trot by.', 'tz1.jpg', 'On the horizon looms the conical silhouette of Kilimanjaro, beckoning the strong of lung and leg, and just off the coast the beaches and Arabian-infused culture of Zanzibar offer travelers a very different Africa.', 'tz2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `destinations_parents`
--

CREATE TABLE `destinations_parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations_parents`
--

INSERT INTO `destinations_parents` (`id`, `name`, `bannerimg`, `featured`, `isdeleted`) VALUES
(10, 'Asia Tours', 'asiatour1.jpg', 1, 0),
(11, 'South America', 'sa.jpg', 1, 0),
(12, 'Europe', 'e.jpg', 1, 0),
(13, 'Africa', 'a.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `destid`, `question`, `answer`, `isdeleted`) VALUES
(14, 12, 'The best ways to pay for services in India ?', '10% of the service price', 0),
(15, 12, 'Electricity and power supplies in India ?', 'Type C , Type D , Type E', 0),
(16, 13, 'Tour Style ?', 'Standard', 0),
(17, 13, 'Standard Tip ?', '12% of order', 0);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `instagram` longtext NOT NULL,
  `twitter` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `about`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Travelling explores the life of any human, we will help you to achieve that - Travel Crunch', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `destid` int(11) NOT NULL,
  `img` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `destid`, `img`, `isdeleted`) VALUES
(15, 12, 'gal.jpg', 0),
(16, 12, 'gal1.jpg', 0),
(17, 12, 'gal2.jpg', 0),
(18, 12, 'gal3.jpg', 0),
(19, 12, 'gal4.jpg', 0),
(20, 12, 'gal5.jpg', 0),
(21, 12, 'gal6.jpg', 0),
(25, 13, 'ag3.jpg', 0),
(26, 13, 'ag4.jpg', 0),
(27, 13, 'ag5.jpg', 0),
(34, 14, 'vt13.jpg', 0),
(35, 14, 'vt14.jpg', 0),
(36, 14, 'vt15.jpg', 0),
(40, 15, 'j13.jpg', 0),
(41, 15, 'j14.jpg', 0),
(42, 15, 'j15.jpg', 0),
(48, 16, 'sl15.jpg', 0),
(49, 16, 'sl16.jpg', 0),
(50, 16, 'sl17.jpg', 0),
(54, 17, 'b13.jpg', 0),
(55, 17, 'b14.jpg', 0),
(56, 17, 'b15.jpg', 0),
(57, 18, 'ice1.jpg', 0),
(58, 18, 'ice11.jpg', 0),
(59, 18, 'ice12.jpg', 0),
(60, 19, 'Italy1.jpg', 0),
(61, 19, 'Italy11.jpg', 0),
(62, 19, 'Italy12.jpg', 0),
(63, 20, 'sa1.jpg', 0),
(64, 20, 'sa11.jpg', 0),
(65, 20, 'sa12.jpg', 0),
(66, 21, 'tz.jpg', 0),
(67, 21, 'tz1.jpg', 0),
(68, 21, 'tz2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `descr` longtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id`, `tid`, `title`, `descr`, `isdeleted`) VALUES
(5, 5, 'Day 1 Delhi', '<p>Arrive at any time. Arrival transfer is included through the G Adventures-supported Women With Wheels project.</p>', 0),
(6, 5, 'Day 2 Delhi/Jaipur', '<p>Visit Delhis impressive India Gate and Connaught Place before traveling\r\n to Jaipur, commonly called the Pink City for its unique architecture.\r\n Get to know this colourful city on an orientation walk, then opt to \r\nwatch a classic Bollywood film.</p>', 0),
(7, 6, 'Day 1 Buenos Aires', '<p><span style=color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;>Arrive at any time.</span><br></p>', 0),
(8, 6, 'Day 2 Buenos Aires/Mendoza', '<div class=summary style=margin-top: 0.5em; color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;><p style=margin-right: 0px; margin-bottom: 14px; margin-left: 0px; line-height: 1.75em; max-width: 40em;>Board a flight bound for the wine region of Argentina and explore the laid-back city of Mendoza.</p></div><div class=details style=color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;><p style=margin-right: 0px; margin-bottom: 14px; margin-left: 0px; line-height: 1.75em; max-width: 40em;>The impressive snow-capped Aconcagua looms in the background of this laid-back city, drawing adventure seekers and wine enthusiasts alike. Famed worldwide for the high quality wine produced in this region, Mendoza makes the perfect base to discover wine country. Enjoy the slow pace of this desert town with large parks, charming plazas, and lively evenings where locals mill about outside the many cafés, bars and restaurants on offer on Avenida Arístides.</p></div>', 0),
(9, 7, 'Day 1 Hanoi', '<p>There are no planned activities today until an evening welcome meeting. After the meeting, opt for dinner out with the group.</p>', 0),
(10, 7, 'Day 2 Hanoi/Ha Long', '<div class=summary><p>Enjoy a Ha Long Bay cruise on a junk boat with visits to a cave and an island lookout. Savour a seafood lunch and dinner.</p></div><p>Drive\r\n to Bai Chay harbour, the jumping off point for Ha Long Bay. Thousands \r\nof islands with intricate cave systems rise dramatically from the \r\nwaters. Sail past limestone karst mountains in the junk boat and stop to\r\n visit some of the islands and caves.</p>In the evening, devour a seafood dinner, then opt to enjoy a drink on deck under the stars.', 0),
(11, 8, 'Day 1 Kyoto', '<div class=summary><p>Arrive at any time and welcome to Japans imperial city and spiritual heart.</p><p>For\r\n your first night out, immerse yourself in the evening serenity of Kyoto\r\n with your fellow travellers and CEO. Head to Kiyamachi—a kilometer \r\nstretch of popular nightlife running alongside the Kamo River—to marvel \r\nat street musicians and experience the cabarets. Find a spot to get to \r\nknow your new friends and cheers to new adventures!</p></div>We highly recommend booking pre-accommodation to fully experience this metropolis', 0),
(12, 8, 'Day 2 Kyoto/Hiroshima', '<h6><span class=day-number></span><span style=font-weight: normal;>Board a bullet train and travel to Hiroshima, known for its tragic \r\nhistory, powerful survival, and so much more. Opt to visit the Peace \r\nPark and Museum, Shukkei-en traditional Japanese garden, or Hiroshima \r\nCastle.</span></h6><h3><span class=location></span></h3>', 0),
(13, 9, 'Day 1 Negombo', '<p>Arrive at any time</p>', 0),
(14, 9, 'Day 2 Negombo/Kandy', '<p>Drive to Kandy, visiting a spice plantation en route. Enjoy lunch at G \r\nAdventures-supported Sthree Craft Shop and Café. Later, explore Temple \r\nof the Tooth.</p>', 0),
(15, 10, 'Day 1 Buenos Aires', '<p>Arrive at any time. Soak in the energy of the bustling and trendy Paris\r\n of the Americas before mingling with your fellow travellers, and get \r\nexcited for the adventures to come with a few drinks at the hostel.</p>', 0),
(16, 10, 'Day 2 Buenos Aires', '<div class=summary><p>Discover why this city is known as the Paris of\r\n the Americas.  From the hidden patios of trendy Palermo to bohemian \r\nvibes in San Telmo, it is impossible not to fall in love with Buenos \r\nAires. </p><p>Don’t miss out! Today is your last chance to experience a \r\nguided tour of the city and to immerse yourself in the passion of the \r\ntango.</p></div>', 0),
(17, 11, 'Day 1 Reykjavík  ', '<p>Arrive at any time.<br></p>', 0),
(18, 11, 'Day 2 Reykjavík/Álftröð', '<p>Travel from Reykjavík to explore a lava cave in the Bláfjöll Mountains. \r\nIn the afternoon stop at an Icelandic horse farm before returning to \r\nÁlftröð. In the evening, head out near the guesthouse in search for \r\nNorthern Lights.</p>', 0),
(19, 12, 'Day 1 Rome ', '<p>Arrive at any time.<br></p>', 0),
(20, 12, 'Day 2 Rome/Chianciano Terme', '<p>Enjoy a local Italian breakfast before an orientation walk around Rome. \r\nTransfer by train your hotel in the charming hilltop town of Chianciano \r\nTerme. Enjoy a local wine tasting in the evening. </p>', 0),
(21, 13, 'Day 1 Johannesburg', '<p>Tonight, get to know your group on your first night out together in \r\nJohannesburg. After your welcome meeting at the hotel choose to enjoy an\r\n Amarula cocktail at the bar or go to Emperors Palace with a wide array \r\nof restaurants and bars to choose from. Sit back, relax, eat some grub, \r\nsip a cocktail, and get to know your fellow travel buddies as the \r\nadventure begins.</p>', 0),
(22, 13, 'Day 2 Johannesburg/Serowe', '<p>Get ready to check another country off those travel lists as you and the\r\n group pass across the border into Botswana. We’re not going to lie \r\ntoday will be a lot of driving, but use this opportunity to talk with \r\nyour group, swap stories, and watch as the landscape changes around you \r\nfrom the desolate scenery of central-eastern Botswana to the wild bush \r\nwithin the Khama Rhino Sanctuary. The group will stop here for the night\r\n to set up camp, enjoy each others company around a fire, and fall \r\npeacefully asleep beneath the stars.</p>', 0),
(23, 14, 'Day 1 Cape Town', '<p>Tonight, get to know your group on your first night out together in Cape\r\n Town. After a brief welcome meeting or dinner out together head to the \r\nclubs on Long Street to explore the vibrant nightlife. Put those dancing\r\n shoes on and get to know your fellow travel buddies as the adventure \r\nbegins.</p>', 0),
(24, 14, 'Day 2 Cape Town/Cederberg', '<div class=summary><p>Hit the road in style in the Lando and view the \r\nstunning Western Cape scenery as the group travels to the G \r\nAdventures-supported !Khwa ttu San Culture and Education Centre. Here \r\nyou will learn about the history and culture of the ancient Sans people \r\nand be able to directly help this centre preserve that heritage. </p><p>In\r\n the afternoon the group will arrive at your first campsite where you \r\ncan enjoy free time to sip on some local wine, kick a footy around with \r\nthe local kids, or simply chill out by the campsite’s swimming pool \r\noverlooking the vineyards.</p></div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_seo`
--

CREATE TABLE `main_seo` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `tags` longtext NOT NULL,
  `meta_tag` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_seo`
--

INSERT INTO `main_seo` (`id`, `page`, `tags`, `meta_tag`) VALUES
(1, 1, 'Home page', 'Home page'),
(2, 2, 'Destinations page', 'Destinations Page'),
(3, 3, 'Travel Style Page', 'Travel Style Page'),
(4, 4, 'Travel Deals Page', 'Travel Deals Page'),
(5, 5, 'Contact Us Page', 'Contact Us Page');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `name`) VALUES
(1, 'Home'),
(2, 'Destinations'),
(3, 'Travel Styles'),
(4, 'Travel Deal'),
(5, 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `overview`
--

CREATE TABLE `overview` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `oleft` longtext NOT NULL,
  `oright` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overview`
--

INSERT INTO `overview` (`id`, `destid`, `oleft`, `oright`, `isdeleted`) VALUES
(12, 12, 'Wonderfully different, there is nothing quite like a tour of India. Travel a lot? No matter how much you\'ve done or how many countries you\'ve visited, when you first arrive in India it will hit you like a gale force wind; a hurricane of sounds, smells, and colour where nothing is as it seems.', 'Travelling to India reveals a country that is both mesmerizing, exotic, exciting, and mystical but at times frustrating, confusing, and chaotic. Relax, stay calm, be patient, and smile and India will open up herself to you in all her splendid glory.', 0),
(13, 13, 'It has become cliché to say that Argentina is as much European as it is Latin; yet to arrive in Buenos Aires and discover this is actually true still surprises. With the Patagonian Andes as its glacial backbone, Argentina is a land of extreme wilderness, while its vast pampas are still home to roaming gauchos – the original South American cowboys.', 'Had enough of the wild? The birthplace of the tango and the world\'s fifth-largest wine producer has enough high culture to satisfy the most discerning palate, plus a nightlife that\'ll keep you up early into the morning.', 0),
(14, 14, 'Successively occupied by China, Russia, France, Japan, and the United States, Vietnam has had its share of foreign interference. But today, the Vietnamese are focused on rocketing into the future. In this new era of confident self-determination the atmosphere is one of palpable optimism. Fortunately for travellers, Vietnam\'s traditional charms have not yet been eclipsed.', 'Although noisy motorbikes continue to replace bicycles at an alarming rate, the former Communist stronghold of Hanoi has maintained its narrow-laned charm, while the melting limestone pinnacles of Halong Bay are as otherworldly as ever. From the ancient neighbourhoods of Hoi An to the vast Mekong Delta, the country offers an astonishing variety of scenery. Whether your fascination is wartime relics or beaches and rice paddies, see Vietnam now, because every year it seems to reinvent itself.', 0),
(15, 15, 'Now\'s the time to explore Japan on your terms with this tour that\'s affordable for young travellers. Transport yourself to somewhere truly otherworldly on this quick, affordable six-day tour through some of Japan\'s most dynamic and diverse cities.', 'Immerse yourself in the serenely traditional culture of Kyoto before learning about Hiroshima’s fascinating, and fraught, history. Wrap up your adventure in Osaka, a city over-flowing with delicious cuisine and stellar nightlife. Your time in Japan might be short, but we make sure not a single minute will be wasted. ', 0),
(16, 12, 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous.', 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous.', 0),
(17, 16, 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous. ', 'Sri Lanka (formerly Ceylon) is a tropical island, with landscapes ranging from sandy beaches to lush forests to cool hill towns dotted with tea plantations that, in quieter times, made Sri Lanka famous. ', 0),
(18, 17, 'Sensuality, dancing, and partying: it seems the Brazilians have made a science of all that is fun in life. The world champions of hedonism were no doubt aided by a lush land and steamy climate, but still there is something different about Brazilians. ', 'For one, they are the most diverse country in Latin America, not to mention the continent\'s only former Portuguese colony. One of the largest countries in the world, Brazil certainly has plenty to see – the Amazon and Iguassu Falls spring immediately to mind – but more than anything it\'s the Brazilian passion for life, epitomized by Rio\'s Carnival celebrations, that will make you fall in love and want to return again. ', 0),
(19, 18, 'Small on the map and enormous in person, Iceland barely feels like Earth at all. Isolated in the frigid North Atlantic and forged through centuries of volcanic upheaval and tectonic shifting, Iceland is staggering to look at and otherworldly to explore. ', 'The outdoors provide all the action you need: towering mountain peaks scratch the sky, massive glaciers scrape the earth, sprawling icefields stretch beyond the horizon, and gorgeous fjords dazzle the eye. And when you\'ve had enough, head inside in weirdly wonderful Reykjavík and discover how the people lucky enough to live here full-time live. ', 0),
(20, 19, 'Italians love to surround themselves with beauty, and it shows. A more fitting country could not have been designed by Michelangelo himself: from medieval hilltop towns to sun-drenched Mediterranean islands, Italy is sublime. Icons are so numerous it\'s difficult to choose. Some are entire cities: Venice, Florence, and Rome are works of art in themselves, and Italy has played host to arguably the greatest collection of art, architecture, and artists the world has ever seen.', 'Home to more UNESCO World Heritage sites than any other country, Italy is nothing if not cultured; an education was once considered incomplete until one spent time in Italy. Today, this tradition continues, as visitors from around the world come to surround themselves with beauty and immerse themselves in la dolce vita. Viva Italia!', 0),
(21, 20, 'An entire continent’s worth of greatness concentrated into a single gorgeous package, South Africa practically bowls visitors over with its abundance of natural splendour, exotic wildlife, cosmopolitan flair, and friendly faces.', 'There are hundreds of reasons to come to South Africa – savannah safaris, the vineyards of Stellenbosch, dazzling Cape Town, and the stunning Garden Route, to name but a few – and once you’ve gotten yourself here, you’ll discover millions more.', 0),
(22, 21, 'One of the most popular tourist destinations in Africa, Tanzania is well-established as one of the best wildlife-viewing destinations in the world. Safaris follow the trail of giant herds of antelope or wildebeest across the Serengeti, while lions lounge in the shade waiting for their next meal to trot by. ', 'On the horizon looms the conical silhouette of Kilimanjaro, beckoning the strong of lung and leg, and just off the coast the beaches and Arabian-infused culture of Zanzibar offer travelers a very different Africa. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `title1` text NOT NULL,
  `desc1` longtext NOT NULL,
  `title2` text NOT NULL,
  `desc2` longtext NOT NULL,
  `list1` text NOT NULL,
  `item1` longtext NOT NULL,
  `list2` text NOT NULL,
  `item2` longtext NOT NULL,
  `list3` text NOT NULL,
  `item3` longtext NOT NULL,
  `list4` text NOT NULL,
  `item4` longtext NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id`, `destid`, `title1`, `desc1`, `title2`, `desc2`, `list1`, `item1`, `list2`, `item2`, `list3`, `item3`, `list4`, `item4`, `isdeleted`) VALUES
(8, 12, 'Packing for India', 'We suggest that you pack as lightly as possible as you are expected to carry your own luggage. As a rule we try not to have to walk more than 15-20 minutes with your bag which is why we recommend keeping the weight of your bags between 10-15kg/22-30lb. Suitcases are not recommended for G Adventures trips! Most travellers carry a backpack or rolling bag of small to medium size (no XXL ones please!) as they need to fit under the beds when travelling on sleeper trains. You will also need a day pack/bag to carry water, cameras and other electronics like ipods and mobile phones. If your trip involves overnights in home stays, villages or camping then you usually have the opportunity to rent sleeping bags if need be instead of bringing them with you.', 'Electricity and power supplies in India', 'In India the power plugs and sockets are of type C, D and M. The standard voltage is 230 V and the standard frequency is 50 Hz. You can use your electric appliances in India, if the standard voltage in your country is in between 220 - 240 V (as is in the UK, Europe, Australia and most of Asia and Africa). Manufacturers take these small deviations into account. If the standard voltage in your country is in the range of 100 V - 127 V (as is in the US, Canada and most South American countries), you need a voltage converter in India. You can also consider a combined power plug adapter/voltage converter.', 'Cold weather', '[Long-sleeved shirts or sweater,Scarf,Warm gloves,Warm hat,Warm layers]', 'Warm weather', '[Sandals/flip-flops,Shorts/skirts,Sun hat/bandana,Swimwear]', 'Conservative Dress', '[Modest clothing that covers knees and shoulders,Shawl or scarf]', 'Documents', '[Flight info,Insurance info,Passport,Required visas or vaccination certificates,Vouchers and pre-departure information]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seotag`
--

CREATE TABLE `seotag` (
  `id` int(11) NOT NULL,
  `destid` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `isdeleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `logo` mediumtext NOT NULL,
  `title1` mediumtext NOT NULL,
  `tagline1` mediumtext NOT NULL,
  `slide1` mediumtext NOT NULL,
  `slide2` mediumtext NOT NULL,
  `slide3` mediumtext NOT NULL,
  `ftitle1` mediumtext NOT NULL,
  `ftitle2` mediumtext NOT NULL,
  `ftitle3` mediumtext NOT NULL,
  `feature1` longtext NOT NULL,
  `feature2` longtext NOT NULL,
  `feature3` longtext NOT NULL,
  `homedivimg` mediumtext NOT NULL,
  `homedivtext` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `title1`, `tagline1`, `slide1`, `slide2`, `slide3`, `ftitle1`, `ftitle2`, `ftitle3`, `feature1`, `feature2`, `feature3`, `homedivimg`, `homedivtext`) VALUES
(1, 'WhatsApp_Image_2020-04-16_at_11_03_33.jpeg', 'Experience the Wonderrr', 'People don’t take trips, trips take People', 'image.png', 'WhatsApp_Image_2020-04-16_at_11_03_33.jpeg', 'WhatsApp_Image_2020-04-27_at_18_33_252.jpeg', 'Luxury Hotels', 'Tourist Guide', 'Flights Tickets', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...', 'placeholder-01.png', 'Travel teaches us that we’re stronger when we come together. And that’s \r\nnever been more true. We can’t wait to share our big, beautiful world \r\nwith you again.<br>Our world deserves more you..');

-- --------------------------------------------------------

--
-- Table structure for table `tourfaq`
--

CREATE TABLE `tourfaq` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourfaq`
--

INSERT INTO `tourfaq` (`id`, `tid`, `question`, `answer`, `isdeleted`) VALUES
(3, 5, 'Travel Style ? ', 'Travel Style: Classic', 0),
(4, 5, 'Service Level', 'Service Level: Standard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tourgallery`
--

CREATE TABLE `tourgallery` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `img` mediumtext NOT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourgallery`
--

INSERT INTO `tourgallery` (`id`, `tid`, `img`, `isdeleted`) VALUES
(4, 5, 'tour.jpg', 0),
(5, 5, 'tour1.jpg', 0),
(6, 5, 'tour2.jpg', 0),
(7, 5, 'tour3.jpg', 0),
(8, 5, 'tour4.jpg', 0),
(9, 9, 'sl18.jpg', 0),
(10, 9, 'sl19.jpg', 0),
(11, 9, 'sl110.jpg', 0),
(12, 9, 'sl111.jpg', 0),
(13, 10, 'b16.jpg', 0),
(14, 10, 'b17.jpg', 0),
(15, 10, 'b18.jpg', 0),
(16, 10, 'b19.jpg', 0),
(17, 11, 'ice13.jpg', 0),
(18, 11, 'ice14.jpg', 0),
(19, 11, 'ice15.jpg', 0),
(20, 11, 'ice16.jpg', 0),
(21, 12, 'Italy13.jpg', 0),
(22, 12, 'Italy14.jpg', 0),
(23, 12, 'Italy15.jpg', 0),
(24, 12, 'Italy16.jpg', 0),
(25, 13, 'sa13.jpg', 0),
(26, 13, 'sa14.jpg', 0),
(27, 13, 'sa15.jpg', 0),
(28, 13, 'sa16.jpg', 0),
(29, 14, 'tz11.jpg', 0),
(30, 14, 'tz12.jpg', 0),
(31, 14, 'tz13.jpg', 0),
(32, 14, 'tz14.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `tfrom` mediumtext NOT NULL,
  `tto` mediumtext NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `days` mediumtext NOT NULL,
  `price` mediumtext NOT NULL,
  `overview` longtext DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `did`, `title`, `tfrom`, `tto`, `bannerimg`, `days`, `price`, `overview`, `details`, `isdeleted`) VALUES
(5, 12, 'Delhi to Kathmandu', 'Delhi', 'Kathmandu', 'Gateway-of-India-in-Mumbai.jpg', '15', '1359', 'If you’re looking to experience the diversity of India and Nepal, this \r\n15-day trip contrasts the colourful culture of India with the pristine \r\nserenity of Nepal\'s Himalayan mountains. From the ghats that line the \r\nbanks of the Ganges in Varanasi to a 4x4 safari in Chitwan National \r\nPark, our expert CEOs will take you through a region of unsurpassed \r\nnatural beauty and spirituality before revealing to you the rugged \r\nHimalayan landscape of Nepal’s magical capital, Kathmandu.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>If you’re looking to experience the diversity of India and Nepal,\r\n this 15-day trip contrasts the colourful culture of India with the \r\npristine serenity of Nepals Himalayan mountains. From the ghats that \r\nline the banks of the Ganges in Varanasi to a 4x4 safari in Chitwan \r\nNational Park, our expert CEOs will take you through a region of \r\nunsurpassed natural beauty and spirituality before revealing to you the \r\nrugged Himalayan landscape of Nepal’s magical capital, Kathmandu.</p>\r\n\r\n    <ul><li>Explore the vibrant streets of Agra</li><li>Uncover bustling Delhi and beautiful Jaipur</li><li>Enjoy a sunset cruise on the River Ganges</li><li>Travel by 4x4 on a safari in Chitwan National Park</li><li>Experience Nepals mountain views</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            15 days</dt><dt><span class=muted>Start/Finish City:</span> Delhi to Kathmandu</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 2 - Light</dt><dd>Light walking and hiking suitable for most fitness levels. Nothing too challenging.</dd><dt><span class=muted>Travel Style:</span> Classic</dt><dd>All of the highlights, culture, access, and I-can’t-believe-we-did-that moments, all at a great price.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 15, avg 12</dd></dl>\r\n</div>', 0),
(6, 13, 'ARGENTINA & CHILE MULTISPORT', 'ARGENTINA', 'CHILE MULTISPORT', 'agtour.jpg', '20', '1500', '<span style=color: rgb(76, 79, 86); font-family: montserrat_regular, sans-serif; font-size: 14px;>Looking for some restorative downtime kicking back in the Southern Cone? Then this 20-day active adventure is absolutely NOT FOR YOU! Imagine almost three weeks packed with every activity you can think of and then some! Trek through perfectly picturesque Patagonia, wake up early for whitewater rafting, hike through crisp mountain landscapes on Torres del Paines renowned W Trek, and bike, raft, and smile to your hearts content. Your adrenaline reserves will be tapped by the end of it all.</span>', '<h3 style=margin-top: 0px; margin-bottom: 14px; font-family: montserrat_regular, sans-serif; line-height: 1em; color: rgb(76, 79, 86); text-rendering: optimizelegibility; font-size: 1.5em;>Introduction</h3><p style=margin-right: 0px; margin-bottom: 14px; margin-left: 0px; line-height: 1.4em; color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;>Looking for some restorative downtime kicking back in the Southern Cone? Then this 20-day active adventure is absolutely NOT FOR YOU! Imagine almost three weeks packed with every activity you can think of and then some! Trek through perfectly picturesque Patagonia, wake up early for whitewater rafting, hike through crisp mountain landscapes on Torres del Paines renowned W Trek, and bike, raft, and smile to your hearts content. Your adrenaline reserves will be tapped by the end of it all.</p><ul style=padding: 0px; margin-right: 0px; margin-bottom: 14px; margin-left: 25px; list-style-position: outside; list-style-image: url(&quot;https://media.gadventures.com/media-server/static/gadventures/css/images/chevron-standard.png?eb240de56755&quot;); color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;><li style=line-height: 1.75em; margin-bottom: 1em;>Enjoy a wine tasting as you cycle through Mendoza’s wineries</li><li style=line-height: 1.75em; margin-bottom: 1em;>Take a thrilling whitewater rafting ride</li><li style=line-height: 1.75em; margin-bottom: 1em;>Marvel at Mt Fitz Roy and Perito Moreno Glacier</li><li style=line-height: 1.75em; margin-bottom: 1em;>Hike the famous W Trek</li><li style=line-height: 1.75em; margin-bottom: 1em;>Let loose in bustling Buenos Aires</li></ul><dl style=margin-bottom: 28px; color: rgb(76, 79, 86); font-family: &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 14px;><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Duration:</span>&nbsp;20 days</dt><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Start/Finish City:</span>&nbsp;Buenos Aires to Buenos Aires</dt><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Service Level:</span>&nbsp;Standard</dt><dd style=line-height: 28px; margin-left: 14px; margin-bottom: 1em;>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Physical Grading:</span>&nbsp;4 - Demanding</dt><dd style=line-height: 28px; margin-left: 14px; margin-bottom: 1em;>Some high-altitude hikes or more strenuous activities, but accessible to most healthy travellers.</dd><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Travel Style:</span>&nbsp;Active</dt><dd style=line-height: 28px; margin-left: 14px; margin-bottom: 1em;>Hiking, trekking, biking, rafting, and kayaking adventures all over the world, made for outdoor types.</dd><dt style=line-height: 28px; font-size: 1.1em; margin-bottom: 0.5em;><span class=muted style=color: rgb(153, 153, 153);>Trip Type:</span>&nbsp;Small Group</dt><dd style=line-height: 28px; margin-left: 14px; margin-bottom: 1em;>Small group experience; Max 16, avg 12</dd></dl>', 0),
(7, 14, 'Essential Vietnam & Cambodia', 'Essential Vietnam ', 'Cambodia', 'vt4.jpg', '17', '1742', 'A wide-ranging adventure showcasing the region’s natural wonders and \r\nfascinating cultures, this 17-day trip offers a combination of guided \r\nexcursions and free time to explore beaches, ruins, urban culture, and \r\nawe-inspiring landscapes. Cruise the Mekong for a day and overnight on a\r\n traditional sailing junk boat in Halong Bay. Witness the heights of \r\nCambodias past at Angkor Wat, and contemplate its lows by walking the \r\ninfamous Killing Fields. Although many activities are included, there is\r\n still plenty of time to explore on your own and create the ultimate \r\nadventure.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>A wide-ranging adventure showcasing the region’s natural wonders \r\nand fascinating cultures, this 17-day trip offers a combination of \r\nguided excursions and free time to explore beaches, ruins, urban \r\nculture, and awe-inspiring landscapes. Cruise the Mekong for a day and \r\novernight on a traditional sailing junk boat in Halong Bay. Witness the \r\nheights of Cambodias past at Angkor Wat, and contemplate its lows by \r\nwalking the infamous Killing Fields. Although many activities are \r\nincluded, there is still plenty of time to explore on your own and \r\ncreate the ultimate adventure.</p>\r\n\r\n    <ul><li>Sail on a junk boat through Halong Bay</li><li>Sip iced coffee in Ho Chi Minh City</li><li>Float through the Mekong Delta</li><li>Enjoy sunrise over breathtaking Angkor Wat</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            17 days</dt><dt><span class=muted>Start/Finish City:</span> Hanoi to Bangkok</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 2 - Light</dt><dd>Light walking and hiking suitable for most fitness levels. Nothing too challenging.</dd><dt><span class=muted>Travel Style:</span> Classic</dt><dd>All of the highlights, culture, access, and I-can’t-believe-we-did-that moments, all at a great price.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; 2019 departures: Max 15, Avg 12; 2020 departures: Max 16, Avg 12.</dd></dl>\r\n</div>', 0),
(8, 15, 'Japan : Castles & Cuisine', 'Castles', 'Cuisine', 'j4.jpg', '6', '1087', 'Nows the time to explore Japan on your terms with this tour thats \r\naffordable for young travellers. Transport yourself to somewhere truly \r\notherworldly on this quick, affordable six-day tour through some of \r\nJapans most dynamic and diverse cities. Immerse yourself in the \r\nserenely traditional culture of Kyoto before learning about Hiroshima’s \r\nfascinating, and fraught, history. Wrap up your adventure in Osaka, a \r\ncity over-flowing with delicious cuisine and stellar nightlife. Your \r\ntime in Japan might be short, but we make sure not a single minute will \r\nbe wasted.', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>Nows the time to explore Japan on your terms with this tour \r\nthats affordable for young travellers. Transport yourself to somewhere \r\ntruly otherworldly on this quick, affordable six-day tour through some \r\nof Japans most dynamic and diverse cities. Immerse yourself in the \r\nserenely traditional culture of Kyoto before learning about Hiroshima’s \r\nfascinating, and fraught, history. Wrap up your adventure in Osaka, a \r\ncity over-flowing with delicious cuisine and stellar nightlife. Your \r\ntime in Japan might be short, but we make sure not a single minute will \r\nbe wasted.</p>\r\n\r\n    \r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            6 days</dt><dt><span class=muted>Start/Finish City:</span> Kyoto to Osaka</dt><dt><span class=muted>Service Level:</span> Basic</dt><dd>Simple and clean hotels and hostels; affordable public and private transport; lots of optional activities.</dd><dt><span class=muted>Physical Grading:</span> 2 - Light</dt><dd>Light walking and hiking suitable for most fitness levels. Nothing too challenging.</dd><dt><span class=muted>Travel Style:</span> 18-to-Thirtysomethings</dt><dd>Fast, fresh, and fun adventures that never slow down, made for young, budget-minded travellers.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 16, avg 14.</dd></dl>\r\n</div>', 0),
(9, 16, 'Sri Lanka Land & Sea', 'Land', 'Sea', 'sl3.jpg', '14', '2379', 'We can’t blame you if you want to experience everything Sri Lanka has to\r\n offer – the history, the beaches, the flavours, are all equally \r\ntempting. On this 14-day tour, search for wildlife on a safari, visit \r\nthe historic city of Galle, and taste for yourself the exotic flavours \r\nat a spice plantation. Then, head over to the southern coast (with \r\nwhales and dolphins as your travel buddies) for some well-earned time \r\nwith snorkelling, surfing, and a beach barbecue.  \r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>We can’t blame you if you want to experience everything Sri Lanka\r\n has to offer – the history, the beaches, the flavours, are all equally \r\ntempting. On this 14-day tour, search for wildlife on a safari, visit \r\nthe historic city of Galle, and taste for yourself the exotic flavours \r\nat a spice plantation. Then, head over to the southern coast (with \r\nwhales and dolphins as your travel buddies) for some well-earned time \r\nwith snorkelling, surfing, and a beach barbecue.  </p>\r\n\r\n    <ul><li>Visit a spice plantation to interact with Ayurveda students</li><li>Tour a tea plantation and chat with a local expert</li><li>Spot Sri Lankan elephants on a reserve safari</li><li>Explore Galle and the historic fort</li><li>Sail along the southern coast</li><li>Enjoy time on beautiful beaches</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            14 days</dt><dt><span class=muted>Start/Finish City:</span> Negombo to Mirissa</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 3 - Average</dt><dd>Some tours may include light hiking, biking, rafting, or kayaking in addition to walking.</dd><dt><span class=muted>Travel Style:</span> Classic</dt><dd>All of the highlights, culture, access, and I-can’t-believe-we-did-that moments, all at a great price.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 15 (land), 12 (boat)</dd></dl>\r\n</div>', 0),
(10, 17, 'Buenos Aires to Rio de Janeiro: Falls & Footy', 'Buenos Aires ', 'Rio de Janeiro', 'b4.jpg', '17', '2379', 'Get your South American rush with other young travellers unafraid to \r\nembrace the new. Youll kick off the adventure in sophisticated Buenos \r\nAires before getting back to nature on day hikes at a working Uruguayan \r\nranch. Marvel at Iguassu Falls, then hop on a flight to São Paulo on \r\nyour way to the Brazilian coast — no gruelling bus ride means more time \r\non the beach. Well wrap up in the party in Rio, where youre free to \r\nembrace the carnival atmosphere from our centrally-located Copacabana \r\nhostel.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>Get your South American rush with other young travellers unafraid\r\n to embrace the new. Youll kick off the adventure in sophisticated \r\nBuenos Aires before getting back to nature on day hikes at a working \r\nUruguayan ranch. Marvel at Iguassu Falls, then hop on a flight to São \r\nPaulo on your way to the Brazilian coast — no gruelling bus ride means \r\nmore time on the beach. Well wrap up in the party in Rio, where youre \r\nfree to embrace the carnival atmosphere from our centrally-located \r\nCopacabana hostel.</p>\r\n\r\n    <ul><li>Sample the cuisine and culture of Buenos Aires</li><li>Discover Uruguays rural beauty at a working ranch</li><li>Marvel at Iguassu Falls</li><li>Skip the overnight bus and gain time (and comfort!) with a flight to São Paulo</li><li>Sip caipirinhas on the beach</li><li>Revel in the energy of Rio de Janeiro </li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            17 days</dt><dt><span class=muted>Start/Finish City:</span> Buenos Aires to Rio de Janeiro</dt><dt><span class=muted>Service Level:</span> Basic</dt><dd>Simple and clean hotels and hostels; affordable public and private transport; lots of optional activities.</dd><dt><span class=muted>Physical Grading:</span> 3 - Average</dt><dd>Some tours may include light hiking, biking, rafting, or kayaking in addition to walking.</dd><dt><span class=muted>Travel Style:</span> 18-to-Thirtysomethings</dt><dd>Fast, fresh, and fun adventures that never slow down, made for young, budget-minded travellers.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 18, avg 14.</dd></dl>\r\n</div>', 0),
(11, 18, 'Iceland Northern Lights & Golden Circle', 'Reykjavík ', 'Reykjavík ', 'ice4.jpg', '5', '1317', 'Icelands otherworldly aura seems to heighten at the winter months, when \r\nviewing of the Northern Lights is at its peak and the contrast between \r\nthe cool, crisp air and its steaming geothermic hot springs heightens. \r\nCouple that with hiking through Þingvellir National Park, visiting horse\r\n farms, exploring lava caves, and chasing waterfalls, and youve got \r\nyourself a spectacular winter adventure like no other.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>Icelands otherworldly aura seems to heighten at the winter \r\nmonths, when viewing of the Northern Lights is at its peak and the \r\ncontrast between the cool, crisp air and its steaming geothermic hot \r\nsprings heightens. Couple that with hiking through Þingvellir National \r\nPark, visiting horse farms, exploring lava caves, and chasing \r\nwaterfalls, and youve got yourself a spectacular winter adventure like \r\nno other.</p>\r\n\r\n    <ul><li>Explore Icelands glaciers and waterfalls</li><li>Keep your eyes peeled for dazzling displays of the Northern Lights</li><li>Explore the famous Golden Circle and visit an Icelandic horse farm </li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            5 days</dt><dt><span class=muted>Start/Finish City:</span> Reykjavík to Reykjavík</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 3 - Average</dt><dd>Some tours may include light hiking, biking, rafting, or kayaking in addition to walking.</dd><dt><span class=muted>Travel Style:</span> Classic</dt><dd>All of the highlights, culture, access, and I-can’t-believe-we-did-that moments, all at a great price.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 16, avg 12</dd></dl>\r\n</div>', 0),
(12, 19, 'Cycling in Tuscany', 'Rome ', 'Chianciano Terme', 'itly4.jpg', '7', '1359', '<section class=row-fluid id=trip-nav-row>What better way to experience the beauty of Tuscany \r\nthan from the seat of a bike? A mixture of on- and off-road biking \r\nawaits on a ride through some of the most gorgeous, yet challenging \r\ncountryside you’ll find anywhere. Explore beautiful hill towns, stunning\r\n lakes, and have the option to soak in thermal hot springs. When you are\r\n not riding, take in the view of the rolling Tuscan hills from your \r\nhotel rooftop and relax with a glass of wine.\r\n                </section>', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>What better way to experience the beauty of Tuscany than from the\r\n seat of a bike? A mixture of on- and off-road biking awaits on a ride \r\nthrough some of the most gorgeous, yet challenging countryside you’ll \r\nfind anywhere. Explore beautiful hill towns, stunning lakes, and have \r\nthe option to soak in thermal hot springs. When you are not riding, take\r\n in the view of the rolling Tuscan hills from your hotel rooftop and \r\nrelax with a glass of wine.</p>\r\n\r\n    <ul><li>Cycle through Tuscan countryside and stone-walled hill towns</li><li>Visit quaint Pienza and medieval Montepulciano</li><li>Learn traditional recipes and eat delicious Tuscan cuisine </li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            7 days</dt><dt><span class=muted>Start/Finish City:</span> Rome to Chianciano Terme</dt><dt><span class=muted>Service Level:</span> Standard</dt><dd>Comfortable tourist-class accommodations with character; mix of public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 4 - Demanding</dt><dd>Some high-altitude hikes or more strenuous activities, but accessible to most healthy travellers.</dd><dt><span class=muted>Travel Style:</span> Active</dt><dd>Hiking, trekking, biking, rafting, and kayaking adventures all over the world, made for outdoor types.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 12, Avg 8</dd></dl>\r\n</div>', 0),
(13, 20, 'Johannesburg to Nairobi Overland: Waterfalls & Beaches', 'Johannesburg ', 'Nairobi Overland', 'sa4.jpg', '27', '3654', 'Nows the time to explore Africa on your terms with this tour thats \r\naffordable for young travellers. Tuck into a meaty month of adventure as\r\n you embark on an epic overland journey from Johannesburg to Nairobi, \r\ncrossing the stunning wilderness of seven countries in between. Track \r\nAfrica’s big five on safari drives in the Serengeti and Ngorongoro and\r\n head to the Okavango Delta for a wildlife walk and mokoro canoe \r\nexcursion. Inhale the mists of Victoria Falls and the fragrant air of \r\nspice plantations in Zanzibar. Youll make your discoveries from a \r\nrugged Lando, ready to take on any adventure. Hop in for a ride you \r\nwont want to hop off.', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>Nows the time to explore Africa on your terms with this tour \r\nthats affordable for young travellers. Tuck into a meaty month of \r\nadventure as you embark on an epic overland journey from Johannesburg to\r\n Nairobi, crossing the stunning wilderness of seven countries in \r\nbetween. Track Africa’s big five on safari drives in the Serengeti and\r\n Ngorongoro and head to the Okavango Delta for a wildlife walk and \r\nmokoro canoe excursion. Inhale the mists of Victoria Falls and the \r\nfragrant air of spice plantations in Zanzibar. Youll make your \r\ndiscoveries from a rugged Lando, ready to take on any adventure. Hop in \r\nfor a ride you wont want to hop off.</p>\r\n\r\n    <ul><li>Marvel at Victoria Falls</li><li>Experience wildlife safari drives in Serengeti National Park and the Ngorongoro Crater</li><li>Spend three glorious days on exotic Zanzibar</li><li>Camp overnight in the Okavango Delta</li><li>Spot rhinos at the Khama Rhino Sanctuary</li><li>Sleep beneath baobab trees</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            27 days</dt><dt><span class=muted>Start/Finish City:</span> Johannesburg to Nairobi</dt><dt><span class=muted>Service Level:</span> Camping</dt><dd>Camping most nights with some hotel/hostel stays to start and throughout; affordable public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 3 - Average</dt><dd>Some tours may include light hiking, biking, rafting, or kayaking in addition to walking.</dd><dt><span class=muted>Travel Style:</span> 18-to-Thirtysomethings</dt><dd>Fast, fresh, and fun adventures that never slow down, made for young, budget-minded travellers.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 22, avg 18.</dd></dl>\r\n</div>', 0),
(14, 21, 'Cape Town to the Serengeti: Deserts & Wilderness', 'Cape Town', 'Nairobi', 'tz3.jpg', '40', '4929', 'Nows the time to explore Africa on your terms with this tour thats \r\naffordable for young travellers. Keen to check off eight countries as \r\nbeen there and journey across nearly half of the African continent? \r\nWell, give us 40 days and well take you on this epic overland \r\nadventure. Marvel at the worlds highest sand dunes, float through the \r\nOkavango in a dugout mokoro canoe, and meet the San Bushmen in the \r\nblazing Kalahari Desert. Youll soak up vibrant colours, culture, and \r\nscenery from the southern tip of Africa up to Kenya. Take the road less \r\ntravelled and come away with jaw-dropping photos and a deeper \r\nunderstanding of this incredible corner of the globe.\r\n                ', '<div id=introduction class=section>\r\n\r\n    <h3>Introduction</h3>\r\n    <p>Nows the time to explore Africa on your terms with this tour \r\nthats affordable for young travellers. Keen to check off eight \r\ncountries as been there and journey across nearly half of the African \r\ncontinent? Well, give us 40 days and well take you on this epic \r\noverland adventure. Marvel at the worlds highest sand dunes, float \r\nthrough the Okavango in a dugout mokoro canoe, and meet the San \r\nBushmen in the blazing Kalahari Desert. Youll soak up vibrant colours, \r\nculture, and scenery from the southern tip of Africa up to Kenya. Take \r\nthe road less travelled and come away with jaw-dropping photos and a \r\ndeeper understanding of this incredible corner of the globe.</p>\r\n\r\n    <ul><li>See the big five from 4x4 safari vehicles</li><li>Experience cosmopolitan Cape Town</li><li>Explore spice plantations and the immense Fish River Canyon</li><li>Cruise through the Okavango Delta in traditional canoes</li><li>View the mighty Victoria Falls</li><li>Relax on the shores of Lake Malawi</li><li>Witness breathtaking dunes in the Namib Desert</li><li>Spot wildlife on a boat cruise down the Chobe River</li></ul>\r\n\r\n    <dl><dt><span class=muted>Duration:</span>\r\n            40 days</dt><dt><span class=muted>Start/Finish City:</span> Cape Town to Nairobi</dt><dt><span class=muted>Service Level:</span> Camping</dt><dd>Camping most nights with some hotel/hostel stays to start and throughout; affordable public and private transport.</dd><dt><span class=muted>Physical Grading:</span> 3 - Average</dt><dd>Some tours may include light hiking, biking, rafting, or kayaking in addition to walking.</dd><dt><span class=muted>Travel Style:</span> 18-to-Thirtysomethings</dt><dd>Fast, fresh, and fun adventures that never slow down, made for young, budget-minded travellers.</dd><dt><span class=muted>Trip Type:</span> Small Group</dt><dd>Small group experience; Max 22, avg 20.</dd></dl>\r\n</div>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `traveldeal`
--

CREATE TABLE `traveldeal` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 2,
  `offer` varchar(200) NOT NULL,
  `deal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traveldeal`
--

INSERT INTO `traveldeal` (`id`, `did`, `featured`, `offer`, `deal`) VALUES
(3, 12, 1, '25', '25% of on all Asia Tours');

-- --------------------------------------------------------

--
-- Table structure for table `travelstyle`
--

CREATE TABLE `travelstyle` (
  `id` int(11) NOT NULL,
  `pid` mediumtext NOT NULL,
  `name` mediumtext NOT NULL,
  `bannerimg` mediumtext NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelstyle`
--

INSERT INTO `travelstyle` (`id`, `pid`, `name`, `bannerimg`, `featured`, `isdeleted`) VALUES
(8, '[10]', 'Classic Tours', 'classictour.jpg', 1, 0),
(9, '[10,11]', 'Wellness travel and tours', 'wt.jpg', 1, 0),
(10, '[10,11,12]', 'Local Living', 'll.jpg', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_destination_fk` (`parent`);

--
-- Indexes for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_destination_fk` (`destid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_dest_fk` (`destid`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_seo`
--
ALTER TABLE `main_seo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_fk` (`page`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotag`
--
ALTER TABLE `seotag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sea_destination_fk` (`destid`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourfaq`
--
ALTER TABLE `tourfaq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourgallery`
--
ALTER TABLE `tourgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traveldeal`
--
ALTER TABLE `traveldeal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelstyle`
--
ALTER TABLE `travelstyle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `destinations_parents`
--
ALTER TABLE `destinations_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `main_seo`
--
ALTER TABLE `main_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `overview`
--
ALTER TABLE `overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seotag`
--
ALTER TABLE `seotag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourfaq`
--
ALTER TABLE `tourfaq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tourgallery`
--
ALTER TABLE `tourgallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `traveldeal`
--
ALTER TABLE `traveldeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travelstyle`
--
ALTER TABLE `travelstyle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `parent_destination_fk` FOREIGN KEY (`parent`) REFERENCES `destinations_parents` (`id`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_destination_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_dest_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);

--
-- Constraints for table `main_seo`
--
ALTER TABLE `main_seo`
  ADD CONSTRAINT `page_fk` FOREIGN KEY (`page`) REFERENCES `navbar` (`id`);

--
-- Constraints for table `seotag`
--
ALTER TABLE `seotag`
  ADD CONSTRAINT `sea_destination_fk` FOREIGN KEY (`destid`) REFERENCES `destination` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
