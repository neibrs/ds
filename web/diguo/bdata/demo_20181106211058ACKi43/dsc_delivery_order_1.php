<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_delivery_order`;");
E_C("CREATE TABLE `dsc_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` int(10) unsigned DEFAULT '0',
  `province` int(10) unsigned DEFAULT '0',
  `city` int(10) unsigned DEFAULT '0',
  `district` int(10) unsigned DEFAULT '0',
  `street` int(10) unsigned NOT NULL DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  `is_zc_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`),
  KEY `delivery_sn` (`delivery_sn`),
  KEY `order_sn` (`order_sn`),
  KEY `shipping_id` (`shipping_id`),
  KEY `suppliers_id` (`suppliers_id`),
  KEY `agency_id` (`agency_id`),
  KEY `status` (`status`),
  KEY `country` (`country`),
  KEY `province` (`province`),
  KEY `city` (`city`),
  KEY `district` (`district`),
  KEY `street` (`street`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_delivery_order` values('1',0x3230313731303230323235313235333333,0x32303137313032303232353632353735363238,'6',0x32343532343533353433,'1508482271','2',0xe59c86e9809ae9809fe98092,'94',0x6373,0xe4b99fe4b880e6a0b7,0xe58f91e694be34e58f91,'1','9','137','1060','0','','','','',0x3138303839383932353033,'','',0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'0.00','5.00','1508482306','0','0','0','0');");
E_D("replace into `dsc_delivery_order` values('2',0x3230313731303231303030373635303430,0x32303137313032313030303939343634363633,'7','','1508486827','2',0xe59c86e9809ae9809fe98092,'94',0x6373,0xe4b99fe4b880e6a0b7,0xe58f91e694be34e58f91,'1','9','137','1060','0','','','','',0x3138303839383932353033,'','',0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'0.00','5.00','1508486855','0','0','0','0');");
E_D("replace into `dsc_delivery_order` values('3',0x3230313731303233323332363233303730,0x32303137313032333233333332313436333631,'9','','1508743526','2',0xe59c86e9809ae9809fe98092,'94',0x6373,0xe4b99fe4b880e6a0b7,0xe58f91e694be34e58f91,'1','9','137','1060','0','','','','',0x3138303839383932353033,'','',0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'0.00','5.00','1508743580','0','0','0','0');");
E_D("replace into `dsc_delivery_order` values('4',0x3230313731323330313633393331303938,0x32303137313233303136343639363831393230,'14',0x33323435353433,'1514594303','9',0xe794b3e9809ae5bfabe98092,'120',0x61646d696e,0x313131,0x6577,'1','3','38','418','0','','','','',0x3138383838383838383838,'','',0xe7ad89e5be85e68980e69c89e59586e59381e5a487e9bd90e5908ee5868de58f91,'0.00','0.00','1514594346','0','0','0','0');");

require("../../inc/footer.php");
?>