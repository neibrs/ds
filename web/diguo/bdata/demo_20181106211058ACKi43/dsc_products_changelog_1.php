<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_products_changelog`;");
E_C("CREATE TABLE `dsc_products_changelog` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) NOT NULL,
  `product_sn` varchar(60) NOT NULL,
  `bar_code` varchar(60) NOT NULL,
  `product_number` int(10) unsigned NOT NULL DEFAULT '0',
  `product_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `product_warn_number` int(10) unsigned NOT NULL DEFAULT '0',
  `warehouse_id` int(11) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `city_id` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `goods_id` (`goods_id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `area_id` (`area_id`),
  KEY `admin_id` (`admin_id`),
  KEY `city_id` (`city_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>