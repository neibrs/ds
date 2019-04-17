<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_users_paypwd`;");
E_C("CREATE TABLE `dsc_users_paypwd` (
  `paypwd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `pay_password` varchar(32) NOT NULL DEFAULT '',
  `pay_online` tinyint(1) unsigned NOT NULL,
  `user_surplus` tinyint(1) unsigned NOT NULL,
  `user_point` tinyint(1) unsigned NOT NULL,
  `baitiao` tinyint(1) unsigned NOT NULL,
  `gift_card` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`paypwd_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>