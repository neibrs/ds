<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_kdniao_customer_account`;");
E_C("CREATE TABLE `dsc_kdniao_customer_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipper_code` varchar(10) NOT NULL,
  `station_code` varchar(30) NOT NULL,
  `station_name` varchar(30) NOT NULL,
  `apply_id` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `province_name` varchar(20) NOT NULL,
  `province_code` varchar(20) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `city_code` varchar(20) NOT NULL,
  `exp_area_name` varchar(20) NOT NULL,
  `exp_area_code` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dsc_province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `dsc_city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `dsc_district` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>