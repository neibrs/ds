<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_zc_category`;");
E_C("CREATE TABLE `dsc_zc_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL,
  `measure_unit` varchar(15) NOT NULL,
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `grade` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `filter_attr` varchar(225) NOT NULL,
  `is_top_style` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `top_style_tpl` varchar(255) NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `is_top_show` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `category_links` text NOT NULL,
  `category_topic` text NOT NULL,
  `pinyin_keyword` text NOT NULL,
  `cat_alias_name` varchar(90) NOT NULL,
  `template_file` varchar(50) NOT NULL,
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_zc_category` values('5',0xe69caae69da5e7a791e68a80,'','','0','','0','','0','','','0','','','','','','','0','1','1');");
E_D("replace into `dsc_zc_category` values('6',0xe695b0e7a081e5ae9de8b49d,'','','0','','0','','0','','','0','','','','','','','5','50','1');");
E_D("replace into `dsc_zc_category` values('7',0xe5b185e5aeb6e7a59ee599a8,'','','0','','0','','0','','','0','','','','','','','5','50','1');");
E_D("replace into `dsc_zc_category` values('8',0xe581a5e5bab7e587bae8a18c,'','','0','','0','','0','','','0','','','','','','','0','2','1');");
E_D("replace into `dsc_zc_category` values('9',0xe78eafe79083e5908de789a9,'','','0','','0','','0','','','0','','','','','','','8','50','1');");
E_D("replace into `dsc_zc_category` values('10',0xe69785e8a18ce8bebee4baba,'','','0','','0','','0','','','0','','','','','','','8','50','1');");
E_D("replace into `dsc_zc_category` values('12',0xe7be8ee9a39fe7949fe6b4bb,'','','0','','0','','0','','','0','','','','','','','0','3','1');");
E_D("replace into `dsc_zc_category` values('13',0xe7949fe6b4bbe7be8ee5ada6,'','','0','','0','','0','','','0','','','','','','','0','4','1');");
E_D("replace into `dsc_zc_category` values('14',0xe58e9fe5889be8aebee8aea1,'','','0','','0','','0','','','0','','','','','','','13','1','1');");
E_D("replace into `dsc_zc_category` values('15',0xe889afe59381e5aeb6e5b185,'','','0','','0','','0','','','0','','','','','','','13','2','1');");
E_D("replace into `dsc_zc_category` values('16',0xe59cb0e6a087e7be8ee9a39f,'','','0','','0','','0','','','0','','','','','','','12','1','1');");
E_D("replace into `dsc_zc_category` values('17',0xe88cb6e8a880e98592e8afad,'','','0','','0','','0','','','0','','','','','','','12','50','1');");

require("../../inc/footer.php");
?>