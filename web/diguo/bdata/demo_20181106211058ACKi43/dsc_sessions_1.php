<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_sessions`;");
E_C("CREATE TABLE `dsc_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_sessions` values(0x6163373139386262656431666165616266306432363437656562616237626132,'1541510045','0','58',0x3132372e302e302e31,'0','0','0.00','0','');");
E_D("replace into `dsc_sessions` values(0x6264616130313863636162373134346639333934343862613662343236306239,'1541509520','0','0',0x3132372e302e302e31,'0','0','1.00','0',0x613a343a7b733a373a2266726f6d5f6164223b693a303b733a373a2272656665726572223b733a363a22e69cace7ab99223b733a31303a226c6f67696e5f6661696c223b693a303b733a393a226c6173745f74696d65223b693a313534313438303732303b7d);");

require("../../inc/footer.php");
?>