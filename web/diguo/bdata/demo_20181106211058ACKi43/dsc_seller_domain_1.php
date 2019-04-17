<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_domain`;");
E_C("CREATE TABLE `dsc_seller_domain` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `domain_name` varchar(60) NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_enable` tinyint(1) NOT NULL DEFAULT '0',
  `validity_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seller_domain` values('2','','1','0','0');");
E_D("replace into `dsc_seller_domain` values('3','','0','0','0');");

require("../../inc/footer.php");
?>