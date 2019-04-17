<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_coupons`;");
E_C("CREATE TABLE `dsc_coupons` (
  `cou_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cou_name` varchar(128) NOT NULL DEFAULT '',
  `cou_total` int(11) NOT NULL DEFAULT '0',
  `cou_man` decimal(10,0) unsigned NOT NULL DEFAULT '0',
  `cou_money` decimal(10,0) unsigned NOT NULL DEFAULT '0',
  `cou_user_num` int(11) unsigned NOT NULL DEFAULT '1',
  `cou_goods` varchar(255) NOT NULL DEFAULT '0',
  `spec_cat` text NOT NULL,
  `cou_start_time` int(10) unsigned NOT NULL DEFAULT '0',
  `cou_end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `cou_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `cou_get_man` decimal(10,0) NOT NULL DEFAULT '0',
  `cou_ok_user` varchar(255) NOT NULL DEFAULT '0',
  `cou_ok_goods` varchar(255) NOT NULL DEFAULT '0',
  `cou_ok_cat` text NOT NULL,
  `cou_intro` text NOT NULL,
  `cou_add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cou_order` int(11) unsigned NOT NULL DEFAULT '0',
  `cou_title` varchar(255) NOT NULL DEFAULT '',
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  PRIMARY KEY (`cou_id`),
  KEY `cou_type` (`cou_type`),
  KEY `review_status` (`review_status`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_coupons` values('1',0xe6b3a8e5868ce7ab8be58db3e8b5a0313030e58583e4bc98e683a0e588b8,'200','2000','100','1','','','1488268800','1619732816','1','0',0x362c392c31302c372c382c33,'0','','','1490220618','0','0',0xe6b3a8e5868ce7ab8be58db3e8b5a0313030e58583e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('2',0xe8b4ade6bba133303030e58583e7ab8be58db3e8b5a0313030e58583e4bc98e683a0e588b8,'100','3000','100','1','','','1488268800','1619732816','2','3000',0x362c372c382c33,'0','','','1490220681','0','0',0xe8b4ade6bba133303030e58583e7ab8be58db3e8b5a0313030e58583e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('3',0xe8b4ade6bba132303030e58583e8b5a0e585a8e59cbae4bc98e683a0e588b8,'300','2000','100','1','','','1488268800','1619732816','3','0',0x362c372c382c33,'0','','','1490220770','0','0',0xe8b4ade6bba132303030e58583e8b5a0e585a8e59cbae4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('4',0xe8b4ade6bba135303030e58583e8b5a0e585a8e59cbae4bc98e683a0e588b8,'10','5000','200','1',0x3632322c3737372c3738312c373838,'','1488268800','1619732816','3','0',0x362c372c382c33,'0','','','1490220826','0','0',0xe8b4ade6bba135303030e58583e8b5a0e585a8e59cbae4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('5',0xe8b4ade6bba131303030e58583e7ab8be58db3e8b5a03130e58583e4bc98e683a0e588b8,'30','1000','10','1','',0x33,'1488268800','1619732816','2','1000',0x362c372c38,'0','','','1490220887','0','0',0xe8b4ade6bba131303030e58583e7ab8be58db3e8b5a03130e58583e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('6',0xe6b3a8e5868ce68890e4b8bae4bc9ae59198e8b5a0e4bc98e683a0e588b8,'60','1000','35','1','','','1488268800','1619732816','4','0',0x362c372c382c33,'0','','','1490564597','0','0',0xe6b3a8e5868ce68890e4b8bae4bc9ae59198e8b5a0e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('7',0xe8b4ade6bba13130303030e7ab8be58db3353030e4bc98e683a0e588b8,'10','10000','500','1','',0x383634,'1488268800','1619732816','3','0',0x362c372c382c33,'0','','','1490221059','0','0',0xe8b4ade6bba13130303030e7ab8be58db3353030e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('8',0xe8b4ade6bba13230303030e7ab8be58db3383838e4bc98e683a0e588b8,'10','10000','888','1','','','1488268800','1619732816','3','0',0x362c372c382c33,'0','','','1490221110','0','0',0xe8b4ade6bba13230303030e7ab8be58db3383838e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('9',0xe8b4ade6bba13530303030e7ab8be58db335383838e4bc98e683a0e588b8,'5','50000','5888','1','','','1488268800','1619732816','3','0',0x362c372c382c33,'0','','','1490221154','0','0',0xe8b4ade6bba13530303030e7ab8be58db335383838e4bc98e683a0e588b8,'3','');");
E_D("replace into `dsc_coupons` values('10',0xe8bf99e4b8aae698afe6b58be8af95e79a84e4bc98e683a0e588b8,'100','10','500','1','','','1490564675','1619732816','3','0',0x362c372c382c33,'0','','','1490564675','0','0',0xe58faae698afe6b58be8af95efbc8ce4b88de8a681e79c8be595a6,'3','');");

require("../../inc/footer.php");
?>