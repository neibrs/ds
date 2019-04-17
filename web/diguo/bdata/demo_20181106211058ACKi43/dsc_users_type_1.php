<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_users_type`;");
E_C("CREATE TABLE `dsc_users_type` (
  `user_id` int(10) unsigned NOT NULL,
  `enterprise_personal` tinyint(1) unsigned NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `companyaddress` varchar(255) NOT NULL,
  `industry` int(10) unsigned NOT NULL,
  `surname` varchar(150) NOT NULL,
  `givenname` varchar(150) NOT NULL,
  `agreement` tinyint(1) unsigned NOT NULL,
  `country` int(10) NOT NULL DEFAULT '0',
  `province` int(10) NOT NULL DEFAULT '0',
  `city` int(10) NOT NULL DEFAULT '0',
  `district` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `country` (`country`),
  KEY `province` (`province`),
  KEY `city` (`city`),
  KEY `district` (`district`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>