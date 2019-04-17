<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_action`;");
E_C("CREATE TABLE `dsc_order_action` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`),
  KEY `action_user` (`action_user`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_order_action` values('6','2',0x61646d696e,'3','0','0','0',0xe38090e38091e6898be5b7a5e6b7bbe58aa0e8aea2e58d95,'1508451486');");
E_D("replace into `dsc_order_action` values('7','6',0x6373,'1','3','2','0','','1508482299');");
E_D("replace into `dsc_order_action` values('8','6',0x6373,'5','5','2','0',0xe38090e59586e59381e8b4a7e58fb7efbc9a454353303030393132efbc8ce58f91e8b4a7efbc9a31e4bbb6e380913c62722f3e,'1508482306');");
E_D("replace into `dsc_order_action` values('9','6',0x6373,'1','1','2','1','','1508482333');");
E_D("replace into `dsc_order_action` values('10','6',0xe4b9b0e5aeb6,'5','2','2','0','','1508482347');");
E_D("replace into `dsc_order_action` values('11','7',0x6373,'1','3','2','0','','1508486851');");
E_D("replace into `dsc_order_action` values('12','7',0x6373,'5','5','2','0',0xe38090e59586e59381e8b4a7e58fb7efbc9a454353303030393132efbc8ce58f91e8b4a7efbc9a31e4bbb6e380913c62722f3e,'1508486855');");
E_D("replace into `dsc_order_action` values('13','7',0x6373,'1','1','2','1','','1508486863');");
E_D("replace into `dsc_order_action` values('14','7',0xe4b9b0e5aeb6,'5','2','2','0','','1508486873');");
E_D("replace into `dsc_order_action` values('15','9',0x6373,'1','3','2','0','','1508743575');");
E_D("replace into `dsc_order_action` values('16','9',0x6373,'5','5','2','0',0xe38090e59586e59381e8b4a7e58fb7efbc9a454353303030393132efbc8ce58f91e8b4a7efbc9a31e4bbb6e380913c62722f3e,'1508743580');");
E_D("replace into `dsc_order_action` values('17','9',0x6373,'1','1','2','1',0x6864726874,'1508743593');");
E_D("replace into `dsc_order_action` values('18','14',0x61646d696e,'1','0','0','0','','1514594327');");
E_D("replace into `dsc_order_action` values('19','14',0x61646d696e,'1','0','2','0',0x31,'1514594337');");
E_D("replace into `dsc_order_action` values('20','14',0x61646d696e,'5','5','2','0','','1514594346');");
E_D("replace into `dsc_order_action` values('21','14',0x61646d696e,'1','1','2','1','','1514594346');");
E_D("replace into `dsc_order_action` values('22','14',0xe4b9b0e5aeb6,'5','2','2','0','','1514594379');");

require("../../inc/footer.php");
?>