<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_kdniao_eorder_config`;");
E_C("CREATE TABLE `dsc_kdniao_eorder_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shipper_code` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_pwd` varchar(50) NOT NULL,
  `month_code` varchar(50) NOT NULL,
  `send_site` varchar(50) NOT NULL,
  `pay_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `template_size` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>