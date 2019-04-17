<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_products_area`;");
E_C("CREATE TABLE `dsc_products_area` (
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
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `city_id` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '10',
  PRIMARY KEY (`product_id`),
  KEY `goods_id` (`goods_id`),
  KEY `product_sn` (`product_sn`),
  KEY `admin_id` (`admin_id`),
  KEY `area_id` (`area_id`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>