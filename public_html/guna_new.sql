-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 09:14 AM
-- Server version: 5.5.41-37.0-log
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gunathco_guna`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_blocks`
--

DROP TABLE IF EXISTS `gallery_blocks`;
CREATE TABLE IF NOT EXISTS `gallery_blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `gallery_blocks_page_id_foreign` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `gallery_blocks`
--

INSERT INTO `gallery_blocks` (`id`, `page_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 2, 'Oil Seeds', '<p><strong>Sesame Seed</strong><br><br><span style="font-family: Univers, sans-serif; line-height: 150%; text-align: justify;">The company is engaged in exporting three types of sesame, each with peculiar traits and specific market name as indicated below:</span></p><p><span style="font-family: Univers, sans-serif; line-height: 150%; text-align: justify;">Sesame seeds are tiny, flat ovalseeds with a nutty taste and a delicate, almost invisible crunch. They come ina host of different colors, depending upon the variety, including white,yellow, black and red. Sesame seeds are highly valued for their high content ofsesame oil, oil that is very resistant to rancidity</span><br></p><p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in"><span style="font-size: 14pt;" univers","sans-serif";color:#0070c0"=""><span style="font-weight: bold;">HUMERA –GONDER SESAMESEEDS<o:p></o:p></span></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">Ethiopian Origin natural whitishsesame seeds<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Purity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">99%<b><o:p></o:p></b></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">Humera type<b><o:p></o:p></b></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Cleaning&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">Machine cleaned<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Oil content&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">50% minimum<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">FFA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">1.5%maximum<o:p></o:p></span></p><p style="margin: 6pt 0in 0.0001pt 0.5in; text-indent: -0.25in; line-height: 130%;"><!--[if !supportLists]--><span style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings"><span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';"></span></span><span style="font-family:" univers","sans-serif""="">&nbsp;&nbsp; Free from any water damage<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:.5in;text-indent:-.25in;line-height:130%;mso-list:l0 level1 lfo1;tab-stops:list .5in"><!--[if !supportLists]--><span style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings"><span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';"> </span></span><!--[endif]--><span style="font-family:" univers","sans-serif""="">&nbsp;&nbsp; Free from infestation and alive weevils<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:.5in;text-indent:-.25in;line-height:130%;mso-list:l0 level1 lfo1;tab-stops:list .5in"><!--[if !supportLists]--><span style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings"><span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';"> </span></span><!--[endif]--><span style="font-family:" univers","sans-serif""="">&nbsp;&nbsp; Ofsound merchantable quality &amp; natural smell and test,<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:.5in;text-indent:-.25in;line-height:130%;mso-list:l0 level1 lfo1;tab-stops:list .5in"><!--[if !supportLists]--><span style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings"><span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';"> </span></span><!--[endif]--><span style="font-family:" univers","sans-serif""="">&nbsp; Fit for human consumption<o:p></o:p></span></p><p class="MsoNormal" style="margin-left:.5in;text-indent:-.25in;line-height:130%;mso-list:l0 level1 lfo1;tab-stops:list .5in"><!--[if !supportLists]--><span style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:Wingdings"><span style="font-stretch: normal; font-size: 7pt; line-height: normal; font-family: ''Times New Roman'';"></span></span><span style="font-family:" univers","sans-serif""="">&nbsp; Cultivated with no application of chemicals<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><span style="font-family:" univers","sans-serif""=""><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" style="margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in"><b><span style="font-size:14.0pt;font-family:" univers","sans-serif";color:#0070c0"="">WOLLEGA SESAME SEEDS<o:p></o:p></span></b></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Product&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">Ethiopian Origin natural whitishsesame seeds<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Purity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">98.5%<b><o:p></o:p></b></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Cleaning&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">Machine cleaned<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">Oil content&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">52% minimum<o:p></o:p></span></p><p class="MsoNormal" style="line-height:130%"><b><span style="font-family:" univers","sans-serif""="">FFA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-family:" univers","sans-serif""="">1.5%maximum<o:p></o:p></span></p><p><img src="/img/oil.jpg"></p>', '0000-00-00 00:00:00', '2015-01-27 18:48:31'),
(9, 2, 'Natural Gum', '<p style="line-height: 22.8571434020996px;">This product can be defined as a polymeric material (generally carbohydrates). Gum Arabic and Gum Olibanum, widely produced in Ethiopia have a wide range of industrial uses in the production of beverages, pharmaceuticals, candies, chewing gums, confectionery, dairy products , gelatins, nut products, puddings and canned vegetables.</p><h5 style="font-family: ''Open Sans Condensed'', sans-serif; color: rgb(51, 51, 51);"><span style="font-weight: 700;">Gum Olibanum</span></h5><p style="line-height: 22.8571434020996px;">Is the hardened, resinous substance exuded from trees of certain Boswell and Commiphora species. It is applied for domestic consumption in religious rituals and in traditional coffee ceremonies to produce aromatic smoke, as well as for export purposes. It is also used for traditional medicine consumption. The Gums and resins can also be distilled to yield volatile oils, which have their own characteristic of balsamic aroma, used in producing a sweet smell.</p><img src="http://guna.local/uploads/gumolibanum.jpg" style="width: 300px;"><h5 style="font-family: ''Open Sans Condensed'', sans-serif; color: rgb(51, 51, 51);"><span style="font-weight: 700;">Gum Arabic</span></h5><p style="line-height: 22.8571434020996px;">Gum Arabic is the oldest and best known of all natural gums. It is used as thickening, stabilizing, emulsifying and suspending agent in food and drink industrial, in addition to this , it is utilized as a tablet binding agent, cream and lotions – suspending and emulsifying agents in pharmaceuticals, as film forming and sizing agent in printing and textile industries, it is also used in ceramics, paints inks textiles and adhesives.</p><img src="http://guna.local/uploads/gumarabic.jpg" style="width: 300px;">', '2014-11-03 11:40:45', '2014-11-04 03:51:26'),
(10, 2, 'Pulses', '<p><span style="line-height: 22.8571434020996px;">The major varieties of pulses grown in Ethiopia are Horse Beans, Chickpeas, Haricot beans, and others.</span><br></p><h5 style="font-family: ''Open Sans Condensed'', sans-serif; color: rgb(51, 51, 51);"><span style="font-weight: 700;">Haricot Bean</span></h5><p style="line-height: 22.8571434020996px;">It is one of the most important grain legumes grown in the low lands of Ethiopia, particularly in the rift valley. Several varieties of them are consumed in Ethiopia, usually mixed with other cereals.</p><img src="http://guna.local/uploads/haricotbean.jpg" style="width: 300px;"><h5 style="font-family: ''Open Sans Condensed'', sans-serif; color: rgb(51, 51, 51);"><span style="font-weight: 700;">Red Kidney Bean</span></h5><p style="line-height: 22.8571434020996px;">Is boiled, fried, or used in the form of soup. It is also crushed into powder or milled to make stews.</p><img src="http://guna.local/uploads/redharicotbean.jpg" style="width: 300px;">', '2014-11-04 03:38:37', '2014-11-04 03:51:16'),
(11, 2, 'Niger Seed', '<p><span style="line-height: 22.8571434020996px;">This seed is an East African origin, extensively grown and ranked as a leading oil crop in production and area coverage in the oil seed category of Ethiopia. Containing 36% and above oil, it is endowed with natural flavor, pleasant aroma and nutty taste. This internationally traded seed is used for extraction of cooking oil and preparation of food products.</span></p><img src="http://guna.local/uploads/nigerseed.png" style="width: 300px;">', '2014-11-04 03:39:00', '2014-11-04 03:40:52'),
(12, 2, 'Coffee', '<p><span style="line-height: 22.8571434020996px;">Coffee is the most important traded commodity, lying second to petroleum in importance in the world market. Ethiopia is the primary center of origin and genetic diversity of the coffee Arabica mainly, producing washed, semi washed and unwashed coffee beans, famous in the world market for being overwhelmingly organic, their flavor, good body quality and diversity of taste. Guna exports both washed and sundried coffee with the under mentioned grades, as per the standards set forth by the Ethiopian commodity exchange.</span></p><img src="http://guna.local/uploads/coffeebean.jpg" style="width: 300px;">', '2014-11-04 03:40:27', '2014-11-04 03:40:40'),
(13, 2, 'Test Block', '<p>Gallery</p>', '2014-11-04 03:47:02', '2014-11-04 03:47:02'),
(14, 2, 'Another Block', '<p>Something</p>', '2014-11-04 03:47:14', '2014-11-04 03:47:14'),
(15, 2, 'Coffee', '<p><br></p>', '2014-11-04 03:48:06', '2015-01-26 19:26:38'),
(16, 4, 'Reinforcement Bar', '<p><span style="line-height: 22.8571434020996px;">Guna imports &amp; distributes prime quality, newly produced, hot, rolled and deformed steel bar ranging from 8 mm – 32 mm. Its quality is ASTM A615 Grade 60 deformed steel bar in straight length of 12 meters (+/- 100 mm) &amp; plain bars according to DIN 17100 ST 37.2 for 6mm in coils.</span></p><img src="http://guna.local/uploads/redbar.jpg" style="width: 300px;">', '2014-11-04 04:15:03', '2014-11-04 04:15:03'),
(17, 4, 'Timber', '<p><span style="line-height: 22.8571434020996px;">Guna imports Austrian Grade 0-111 quality with different thickness &amp; width; its length is usually 4 meters, widely used in the construction industry. It is air dry anti stain treated (impregnated). Moreover, it is free from rot, broken pieces and brown wormy or worm whole pieces.</span></p><img src="http://guna.local/uploads/timber.jpg" style="width: 300px;">', '2014-11-04 04:15:43', '2014-11-04 04:15:43'),
(18, 4, 'Bitumen', '<p><span style="line-height: 22.8571434020996px;">Guna imports and distributes the highest standard of bitumen with a new steel drum package. Moreover, it supplies 100 % pure road construction bitumen of various grades, to mention some 40/50, 60/70, 85/100, 120/150, 180/200 among others.</span><br></p><p><img src="http://guna.local/uploads/bitumen.jpg" style="line-height: 1.42857143; width: 300px;"><br></p>', '2014-11-04 04:16:24', '2014-11-04 04:16:24'),
(19, 4, 'RoadSun Tyre', '<p><span style="line-height: 22.8571434020996px;">The Company imports and distributes excellent quality and popular in the world with a wide range of tyres. It is high wear resistance and low heat generation; extended road mileage, excellent traction performance and steer ability; fuel economy and superior high- speed performance.</span></p><img src="http://guna.local/uploads/roadtyre.jpg" style="width: 300px;">', '2014-11-04 04:16:53', '2014-11-04 04:17:08'),
(20, 4, 'Cash Register Machine', '<p><span style="line-height: 22.8571434020996px;">Guna offers superior quality Cash Register Scale to Tigray region at highly affordable prices. This Cash Register Scales are appreciated by large number of clients for their high quality.</span></p><img src="http://guna.local/uploads/cashregister.jpg" style="width: 300px;">', '2014-11-04 04:17:35', '2014-11-04 04:17:35'),
(21, 4, 'Chemicals', '<p><span style="line-height: 22.8571434020996px;">The company imports and distributes different type of textile chemicals for government and non government organization.</span><br></p><img src="http://guna.local/uploads/chemicals.jpg" style="width: 300px;">', '2014-11-04 04:17:59', '2014-11-04 04:17:59'),
(22, 5, 'Sheba Shoe', '<p><span style="line-height: 22.8571434020996px;">Guna supplies different models of genuine leather men’s and women’s shoes best known for their quality and comfort.</span></p><img src="http://guna.local/uploads/shoe.jpg" style="width: 250px;">', '2014-11-04 04:21:16', '2014-11-04 05:02:30'),
(23, 5, 'Almeda''s Textile Plc.', '<p><span style="line-height: 22.8571434020996px;">Guna supplies quality and cotton made Home textiles, Health care items, Work wears (overcoat, jacket and trouser), Different kind of knit wear (t-shirt, polo, and single), Shirt &amp; Trouser, woven fabrics and others.</span><img src="http://guna.local/uploads/shirt.jpg" style="line-height: 1.42857143; width: 300px;"></p>', '2014-11-04 04:22:10', '2015-01-26 19:42:17'),
(24, 5, 'Maichew Particle Board', '<p><span style="line-height: 22.8571434020996px;">Guna supplies high quality raw and laminated particleboard products required for household &amp; office furniture and construction industries. The laminating papers are well known for being water proof, heat resistant, smooth surface, glossy texture and shiny colors.</span></p><img src="http://guna.local/uploads/particleboard.jpg" style="width: 300px;">', '2014-11-04 04:23:23', '2014-11-04 04:23:23'),
(25, 6, 'Messebo Building Materials Production PLC', '<p><img src="http://guna.local/uploads/messebo.jpg" style="line-height: 1.42857143; width: 90px; float: left;" class="img-thumbnail"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;This PLC produces the highest quality of Cement (PPC and OPC) according to European and US standards.</span><br></p>', '2014-11-04 04:40:41', '2014-11-04 04:41:57'),
(26, 6, 'Sur Construction PLC', '<p><img src="http://guna.local/uploads/sur.jpg" style="line-height: 1.42857143; width: 75px; float: left;" class="img-thumbnail"></p><p><span style="line-height: 22.8571434020996px;">&nbsp; This PLC produces the highest quality of Cement (PPC and OPC) according to European and US standards.</span><br></p>', '2014-11-04 04:42:43', '2014-11-04 04:47:55'),
(27, 6, 'Almeda Textile PLC', '<p><img src="http://guna.local/uploads/altex.jpg" style="line-height: 1.42857143; width: 133px; float: left;" class="img-thumbnail"></p><p><span style="line-height: 22.8571434020996px;">This PLC is the biggest textile manufacturing company in Ethiopia. It has 100million Birr sales volume. The company is ISO 9001: 2000, KEA and QSAE certified.</span><br></p>', '2014-11-04 04:49:09', '2014-11-04 04:49:22'),
(28, 6, 'Mesfin Industrial Engineering', '<p style="text-align: justify;"><img src="http://guna.local/uploads/mie.jpg" style="line-height: 1.42857143; width: 96px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;This company is engaged in the fabrication of metal and steel products, machinery for the construction, agricultural, mining, energy and transport sectors for domestic and export markets.</span><br></p>', '2014-11-04 04:50:35', '2014-11-04 04:50:35'),
(29, 6, 'Trans Ethiopia PLC', '<p><img src="http://guna.local/uploads/trans.jpg" style="line-height: 1.42857143; width: 100px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;Trans Ethiopia is trucking and Transit Service Company established to provide dry and liquid cargo transportation services and freight forwarding and shipping services. It is also involved in other business activities such as importing and distribution of tyres, selling fuel, and much more.</span><br></p>', '2014-11-04 04:51:33', '2014-11-04 04:51:33'),
(30, 6, 'Addis Pharmaceutical Factory PLC', '<p><img src="http://guna.local/uploads/apf.jpg" style="line-height: 1.42857143; width: 87px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;This factory produces safe, effective and quality drugs and has an annual production capacity of 1.2 billion tablets, 19 billion ampoules, 10 million vials, 500,000 capsules, 4 million ointment tubes and 9.6 million bottles of syrup.</span><br></p>', '2014-11-04 04:52:18', '2014-11-04 04:52:18'),
(31, 6, 'Ezana Mining Development PLC', '<p><img src="http://guna.local/uploads/ezana.jpg" style="line-height: 1.42857143; width: 77px; float: left;">&nbsp; <span style="line-height: 22.8571434020996px;">It is well equipped with the state-of-the-art geophysical, chemical laboratories as well as drill hole testing equipment. Besides, it provides consultancy and development services in Geophysics, hydrogeology and mineral exploration.</span></p>', '2014-11-04 04:53:01', '2014-11-04 04:53:01'),
(32, 6, 'Sheba Leather Industry PLC', '<p><img src="http://guna.local/uploads/sheba.jpg" style="line-height: 1.42857143; width: 78px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;This is one of the leading tanneries existing in Ethiopia in its product mix, capacity, organizational setup and machinery. The tannery produces semi-finished and finished leather products.</span><br></p>', '2014-11-04 04:53:37', '2014-11-04 04:53:37'),
(33, 6, 'Saba Dimensional Stones PLC', '<p><img src="http://guna.local/uploads/saba.jpg" style="line-height: 1.42857143; width: 78px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;SDS PLC is mainly engaged extracting process and trading various dimensional stone products to the domestic and international markets</span><br></p>', '2014-11-04 04:54:17', '2014-11-04 04:54:17'),
(34, 6, 'Hiwot Agricultural Mechanization', '<p><img src="http://guna.local/uploads/hiwot.jpg" style="line-height: 1.42857143; width: 85px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;HAM PLC is engaged in the production of food and industrial crops using mechanized farming system.</span><br></p>', '2014-11-04 04:54:54', '2014-11-04 04:54:54'),
(35, 6, 'Bruh Tesfa Irrigation and Water Technology PLC', '<p><img src="http://guna.local/uploads/bruhtesfa.jpg" style="line-height: 1.42857143; width: 90px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;It is one of the competent companies in the modern irrigation technology and water supply systems, by offering the best quality products at competitive price in Ethiopia.</span><br></p>', '2014-11-04 04:55:33', '2014-11-04 04:55:33'),
(36, 6, 'Maichew Particle Board Factory PLC', '<p><img src="http://guna.local/uploads/maichew.jpg" style="line-height: 1.42857143; width: 100px; float: left;"></p><p><span style="line-height: 22.8571434020996px;">&nbsp;It is one of the competent firms in the production and supply of quality wood products, while keeping the environment safe and ensuring sustainable use of natural resources in the country.</span><br></p>', '2014-11-04 04:56:14', '2014-11-04 04:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `list_blocks`
--

DROP TABLE IF EXISTS `list_blocks`;
CREATE TABLE IF NOT EXISTS `list_blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `list_blocks_page_id_foreign` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `list_blocks`
--

INSERT INTO `list_blocks` (`id`, `page_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 1, 'Establishement', '<p class="MsoNormal"><span style="line-height: 107%; color: black;  background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial; background-color: rgb(247, 247, 247);">Guna Trading House plc is one of the founding members of the\ncorporate entity of Endowment Fund For the Rehabilitation of Tigray [EFFORT]\nthe company is established according to the Ethiopian Commercial code of 510ff\nin 1992 G.C.It is legally registered as “GUNA TRADING HOUSE PLC” and its trade\nmark is legally protected in the Ethiopian Patent Authority, certificate no.\n4653, Guna is established with a paid up capital USD 10 million and with an\nannual sales turnover of USD 100 million and it is mainly engaged in improt and\nexport business activity. The company has about 410 well qualified and\nexperienced employees. The Head Quarter is located in Addis Ababa, behind the\nJackros Residential units, Bole sub-city, kebele 14/15.</span></p>', '2014-10-31 16:55:24', '2015-01-26 18:36:18'),
(3, 1, 'Vision', '<p></p><p></p><p></p><p>To be one of the East Africa''s Premier distribution company in consumable, non-consumable products and services by 2020.</p><p><br></p><p></p><p></p>', '2014-11-03 03:33:47', '2015-01-27 14:19:47'),
(4, 1, 'Mission', '<p><br></p><p>We will be a trusted distributional hub committed to provide value to our customers and stakeholders, by delivering Quality products, reasonable price while contributing price stabilization with a sense of corporate responsibility.</p><p class="MsoNormal" style="margin-left:1.0in;text-indent:-1.0in"><br></p><p><br></p>', '2014-11-03 06:05:48', '2015-01-27 14:22:07'),
(5, 1, ' Values', '<ul><li>Employees are indispensable assets</li><li>Quality service provision to customers and stakeholders</li><li>socially responsible</li><li>Learning Organization</li><li>Team work</li><li>Business Ethics&nbsp;</li><li>Passion</li><li>Continual improvement</li></ul>', '2014-11-03 06:07:29', '2015-01-26 20:26:58'),
(6, 7, 'To buy construction materials', '<span style="line-height: 22.8571434020996px;">Guna Trading House PLC is a private limited company established according to the Ethiopian Commercial Code 510ff in 1992 G.C. The Company is legally registered as “GUNA TRADING HOUSE PRIVATE LIMITED COMPANY” and its trade mark is protected in the Ethiopian Patent Authority, certificate no. 4653 with paid up capital of USD 10 million and with an average annual turnover of USD 100 million. The Company has about 300 qualified and experienced permanent employees. Its head quarter is located in Addis Ababa Gerji, behind the Jackros Residential Units, Bole Sub City, kebele 14/15.</span>', '2014-11-05 10:04:24', '2014-11-05 10:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_31_073110_create_users_table', 1),
('2014_10_31_080602_create_pages_table', 2),
('2014_10_31_081458_create_table_list_blocks', 3),
('2014_11_03_094745_create_gallery_blocks_table', 4),
('2014_11_05_133557_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('list','gallery') COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `type`, `route`, `created_at`, `updated_at`, `description`) VALUES
(1, 'About Guna Trading House PLC', 'list', 'about', '2014-10-31 15:35:06', '2014-11-03 03:36:05', NULL),
(2, 'Export Products', 'gallery', 'export', '2014-11-03 07:42:58', '2014-11-03 07:42:58', NULL),
(4, 'Import Products', 'gallery', 'import', '2014-11-04 04:12:07', '2014-11-04 10:57:50', NULL),
(5, 'Local Products', 'gallery', 'local', '2014-11-04 04:20:15', '2014-11-04 11:01:09', '<p>Guna distributes locally made products by its sister companies in different parts of Ethiopia, such as knitted and woven garment, woven fabric, shoes, particle boards and others.</p>'),
(6, 'Corporate Companies', 'gallery', 'corporate', '2014-11-04 04:39:38', '2014-11-04 04:39:38', 'Under the umbrella of Endowment Fund for the Rehabilitation of Tigray (EFFORT) investment center, there are many sister companies engaged in various business activities, out of which Guna Trading House PCL is one. The major sister companies and their corresponding business lines are stipulated as follows'),
(7, 'Tender', 'list', 'tender', '2014-11-05 08:11:05', '2014-11-05 08:11:05', NULL),
(8, 'Latest News', 'list', '/latestnews', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Latest News in Guna Trading PLC'),
(10, 'Press Release', 'list', '', '2015-01-29 23:05:30', '2015-01-29 23:05:30', 'This page contains press releases inside our company.'),
(11, 'Blog', 'list', '', '2015-01-29 23:10:42', '2015-01-29 23:10:42', ''),
(12, 'Events', 'list', '', '2015-01-29 23:11:58', '2015-01-29 23:11:58', ''),
(13, 'Brochure', 'list', '', '2015-01-29 23:14:20', '2015-01-29 23:14:20', ''),
(14, 'News Letter', 'list', '', '2015-01-29 23:14:41', '2015-01-29 23:14:41', ''),
(15, 'Briefs', 'list', '', '2015-01-29 23:16:11', '2015-01-29 23:16:11', ''),
(16, 'Articles', 'list', '', '2015-01-29 23:16:24', '2015-01-29 23:16:24', ''),
(17, 'Current Price', 'list', '', '2015-01-29 23:43:08', '2015-01-29 23:43:08', ''),
(18, 'Reference Market', 'list', '', '2015-01-29 23:43:31', '2015-01-29 23:43:31', ''),
(19, 'Market Info', 'list', '', '2015-01-29 23:43:45', '2015-01-29 23:43:45', ''),
(20, 'How Guna Works', 'list', '', '2015-01-29 23:44:25', '2015-01-29 23:44:25', ''),
(21, 'Laws and Rules', 'list', '', '2015-01-29 23:46:18', '2015-01-29 23:46:18', ''),
(22, 'Board of Directors', 'list', '', '2015-01-29 23:46:29', '2015-01-29 23:46:29', ''),
(23, 'Agency', 'list', '', '2015-01-29 23:46:39', '2015-01-29 23:46:39', ''),
(24, 'Organizational Structure', 'list', '', '2015-01-29 23:49:51', '2015-01-29 23:49:51', ''),
(25, 'Commission Agent', 'list', '', '2015-02-02 13:40:30', '2015-02-02 13:40:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('admin','blogger') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'tirhasg@gunath.com', '$2y$10$TotyndMvS31qOn9d2pkYROxUbFK1sQI/EAWCL5MGL0v1nAyVB0tBq', 'mHXh2WZB9A9BpHdydJtxtZiHefoCRw7RMc6XHVFMCz4Peet7ONJGSOSDaIQv', 'admin', '2014-10-31 04:56:51', '2015-01-27 18:49:26');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery_blocks`
--
ALTER TABLE `gallery_blocks`
  ADD CONSTRAINT `gallery_blocks_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

--
-- Constraints for table `list_blocks`
--
ALTER TABLE `list_blocks`
  ADD CONSTRAINT `list_blocks_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
