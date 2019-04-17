<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_oss_configure`;");
E_C("CREATE TABLE `dsc_oss_configure` (
  `id` smallint(8) NOT NULL AUTO_INCREMENT,
  `bucket` varchar(255) NOT NULL,
  `keyid` varchar(255) NOT NULL,
  `keysecret` varchar(255) NOT NULL,
  `is_cname` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `endpoint` varchar(255) NOT NULL,
  `regional` varchar(100) NOT NULL,
  `is_use` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_delimg` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `is_use` (`is_use`),
  KEY `is_delimg` (`is_delimg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>