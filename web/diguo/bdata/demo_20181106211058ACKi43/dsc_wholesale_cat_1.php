<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_cat`;");
E_C("CREATE TABLE `dsc_wholesale_cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `style_icon` varchar(50) NOT NULL DEFAULT 'other',
  `cat_icon` varchar(255) NOT NULL,
  `pinyin_keyword` text NOT NULL,
  `cat_alias_name` varchar(90) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) NOT NULL DEFAULT '50',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `is_show` (`is_show`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_cat` values('1',0xe5aeb6e794a8e794b5e599a8,'','','0','','1',0x656c65,'',0x6a6961796f6e676469616e7169,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('2',0xe6898be69cbae38081e695b0e7a081e38081e9809ae4bfa1,'','','0','','1',0x6469676974616c,'',0x73686f756a697368756d61746f6e6778696e,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('3',0xe794b5e88491e38081e58a9ee585ac,'','','0','','1',0x636f6d7075746572,'',0x6469616e6e616f62616e676f6e67,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('4',0xe5aeb6e5b185e38081e5aeb6e585b7e38081e5aeb6e8a385e38081e58ea8e585b7,'','','0','','1',0x626564,'',0x6a69616a756a69616a756a69617a6875616e676368756a75,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('5',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'','','0','','1',0x636c6f74686573,'',0x6e616e7a6875616e676e767a6875616e676e65697969,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('6',0xe99e8be99db4e38081e7aeb1e58c85,'','','0','','1',0x73686f6573,'',0x7869657875657869616e6762616f,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('7',0xe9929fe8a1a8e38081e5a5a2e9a5b0e59381,'','','0','','1',0x7761746368,'',0x7a686f6e676269616f73686573686970696e,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('8',0xe4b8aae4babae58c96e5a686e38081e6b885e6b481e794a8e59381,'','','0','','1',0x6d616b657570,'',0x676572656e6875617a6875616e6771696e676a6965796f6e6770696e,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('9',0xe6af8de5a9b4e38081e78ea9e585b7e4b990e599a8,'','','0','','1',0x62616279,'',0x6d7579696e6777616e6a756c657169,'','0','50');");
E_D("replace into `dsc_wholesale_cat` values('10',0xe59bbee4b9a6e38081e99fb3e5838fe38081e794b5e5ad90e4b9a6,'','','0','','1',0x626f6f6b73,'',0x747573687579696e7869616e676469616e7a69736875,'','0','50');");

require("../../inc/footer.php");
?>