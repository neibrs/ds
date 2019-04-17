<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_exchange_goods`;");
E_C("CREATE TABLE `dsc_exchange_goods` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `exchange_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `market_integral` int(10) unsigned NOT NULL DEFAULT '0',
  `is_exchange` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`eid`),
  UNIQUE KEY `goods_id` (`goods_id`),
  KEY `is_hot` (`is_hot`),
  KEY `is_best` (`is_best`),
  KEY `review_status` (`review_status`),
  KEY `user_id` (`user_id`),
  KEY `is_exchange` (`is_exchange`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_exchange_goods` values('1','757','3','','0','1600','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('2','761','3','','0','1500','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('3','765','3','','0','3200','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('4','754','3','','0','1350','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('5','753','3','','0','800','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('6','750','3','','0','3000','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('7','864','3','','0','1200','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('8','868','3','','0','350','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('9','869','3','','0','2553','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('10','870','3','','0','3288','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('11','871','3','','0','250','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('12','873','3','','0','2388','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('13','861','3','','0','1999','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('14','849','3','','0','2188','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('15','848','3','','0','3521','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('16','851','3','','0','20586','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('17','853','3','','0','150000','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('18','856','3','','0','16800','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('19','858','3','','0','2600','0','1','1','1');");
E_D("replace into `dsc_exchange_goods` values('20','845','3','','0','500','0','1','1','1');");

require("../../inc/footer.php");
?>