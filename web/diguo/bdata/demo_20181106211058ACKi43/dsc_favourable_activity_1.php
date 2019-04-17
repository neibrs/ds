<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_favourable_activity`;");
E_C("CREATE TABLE `dsc_favourable_activity` (
  `act_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `user_rank` varchar(255) NOT NULL,
  `act_range` tinyint(3) unsigned NOT NULL,
  `act_range_ext` varchar(255) NOT NULL,
  `min_amount` decimal(10,2) unsigned NOT NULL,
  `max_amount` decimal(10,2) unsigned NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `act_type_ext` decimal(10,2) unsigned NOT NULL,
  `activity_thumb` varchar(255) NOT NULL,
  `gift` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `user_id` int(11) unsigned NOT NULL,
  `rs_id` int(10) NOT NULL COMMENT '卖场ID',
  `userFav_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `userFav_type_ext` varchar(255) NOT NULL COMMENT '使用类型扩展',
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  `user_range_ext` varchar(255) NOT NULL DEFAULT '',
  `is_user_brand` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`),
  KEY `user_id` (`user_id`),
  KEY `review_status` (`review_status`),
  KEY `start_time` (`start_time`),
  KEY `end_time` (`end_time`),
  KEY `act_type` (`act_type`),
  KEY `rs_id` (`rs_id`),
  KEY `userFav_type` (`userFav_type`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_favourable_activity` values('52',0xe6b58be8af9531,'1508818729','1509077929',0x302c332c362c372c382c39,'3',0x363937,'1000.00','3000.00','0','1.00',0x646174612f61637469766974795f7468756d622f313530383733323530373638393435373836332e706e67,0x613a313a7b693a303b613a333a7b733a323a226964223b733a333a22363938223b733a343a226e616d65223b733a37333a2248616965722fe6b5b7e5b0942045473130303134423339475531203130e585ace696a46b67e699bae883bde58f98e9a291e6bb9ae7ad92e585a8e887aae58aa8e6b497e8a1a3e69cba223b733a353a227072696365223b733a333a22383030223b7d7d,'50','1','0','0','','3','','','0');");
E_D("replace into `dsc_favourable_activity` values('51',0xe6b58be8af95,'1508818639','1509077839',0x302c332c362c372c382c39,'3',0x363938,'100.00','300.00','1','80.00',0x646174612f61637469766974795f7468756d622f313530383733323332353038393638363938302e6a7067,0x613a303a7b7d,'50','1','0','0','','3','','','0');");
E_D("replace into `dsc_favourable_activity` values('53',0xe6b58be8af9533,'1508818910','1509078110',0x302c332c362c372c382c39,'0','','800.00','4000.00','2','80.00',0x646174612f61637469766974795f7468756d622f313530383733323537373537373335373237352e706e67,0x613a303a7b7d,'50','1','0','0','','3','','','0');");
E_D("replace into `dsc_favourable_activity` values('54',0xe6b58be8af9535,'1508818988','1543551788',0x302c332c362c372c38,'3',0x3639302c3639352c3639362c3639372c363938,'300.00','6000.00','1','300.00',0x646174612f61637469766974795f7468756d622f313530383733323634313936373838353236322e6a7067,0x613a303a7b7d,'50','1','0','0','','3','','','0');");

require("../../inc/footer.php");
?>