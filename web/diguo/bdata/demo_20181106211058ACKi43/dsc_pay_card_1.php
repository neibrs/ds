<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_pay_card`;");
E_C("CREATE TABLE `dsc_pay_card` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_number` varchar(60) NOT NULL,
  `card_psd` varchar(40) NOT NULL,
  `user_id` int(20) NOT NULL,
  `used_time` varchar(40) NOT NULL,
  `status` smallint(5) unsigned DEFAULT '0',
  `c_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `card_number` (`card_number`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>