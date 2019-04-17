<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_store_user`;");
E_C("CREATE TABLE `dsc_store_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `store_id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `stores_user` varchar(60) NOT NULL,
  `stores_pwd` varchar(32) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `store_action` text NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) NOT NULL,
  `store_user_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`),
  KEY `store_id` (`store_id`),
  KEY `parent_id` (`parent_id`),
  KEY `ec_salt` (`ec_salt`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_store_user` values('1','0','1','0',0x746573745f7368616e676861697074,0x6165323536363435363965626364313131336161626566306664313762643064,0x3135383538353839393838,0x73746f72654065636d6f62616e2e636f6d,0x616c6c,'1497470496',0x34383432,'');");

require("../../inc/footer.php");
?>