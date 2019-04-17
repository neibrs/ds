<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_sale_notice`;");
E_C("CREATE TABLE `dsc_sale_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `cellphone` varchar(16) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `hopeDiscount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '2',
  `send_type` tinyint(1) NOT NULL DEFAULT '0',
  `add_time` int(10) NOT NULL,
  `mark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>