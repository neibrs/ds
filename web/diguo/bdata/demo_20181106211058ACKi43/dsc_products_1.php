<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_products`;");
E_C("CREATE TABLE `dsc_products` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text,
  `product_sn` varchar(60) DEFAULT NULL,
  `bar_code` varchar(60) NOT NULL,
  `product_number` int(10) unsigned DEFAULT '0',
  `product_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_warn_number` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cloud_product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `inventoryid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `goods_id` (`goods_id`),
  KEY `product_sn` (`product_sn`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_products` values('1','700',0x31,0x454353303030373030675f7031,'','100','16.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('2','700',0x32,0x454353303030373030675f7032,'','100','16.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('3','700',0x33,0x454353303030373030675f7033,'','100','16.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('4','700',0x34,0x454353303030373030675f7034,'','100','16.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('5','700',0x35,0x454353303030373030675f7035,'','100','16.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('6','707',0x36,0x454353303030373037675f7036,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('7','707',0x37,0x454353303030373037675f7037,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('8','707',0x38,0x454353303030373037675f7038,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('9','711',0x39,0x454353303030373131675f7039,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('10','711',0x3130,0x454353303030373131675f703130,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('11','726',0x3131,0x454353303030373236675f703131,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('12','726',0x3132,0x454353303030373236675f703132,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('13','726',0x3133,0x454353303030373236675f703133,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('14','726',0x3134,0x454353303030373236675f703134,'','100','0.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('16','902',0x3136,0x454353303030393031675f703136,'','1000','10.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('17','902',0x3137,0x454353303030393031675f703137,'','1000','20.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('18','902',0x3138,0x454353303030393031675f703138,'','1000','30.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('39','904',0x373231,0x454353303030393034675f703339,'','100','5000.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('40','907',0x373337,0x333333333333675f703430,'','0','133.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('41','907',0x373338,0x333333333333675f703431,'','0','333.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('42','907',0x373339,0x333333333333675f703432,'','0','33.00','0.00','0.00','1','0','0','0');");
E_D("replace into `dsc_products` values('43','907',0x373430,0x333333333333675f703433,'','0','4444.00','0.00','0.00','1','0','0','0');");

require("../../inc/footer.php");
?>