<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_presale_cat`;");
E_C("CREATE TABLE `dsc_presale_cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `measure_unit` varchar(15) NOT NULL,
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
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
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) NOT NULL DEFAULT '50',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`),
  KEY `is_show` (`is_show`),
  KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_presale_cat` values('17',0xe4bc98e683a0e588b8,'','','','0','','0','0','','0','','','0','','','','','','0','8');");
E_D("replace into `dsc_presale_cat` values('18',0xe699bae883bde5b096e8b4a7,'','','','0','','0','0','','0','','','0','','','','','','17','50');");
E_D("replace into `dsc_presale_cat` values('20',0xe6898be69cbae9809ae8aeaf,'','','','0','','0','0','','0','','','0','','','','','','0','1');");
E_D("replace into `dsc_presale_cat` values('21',0xe5aeb6e794b5e695b0e7a081,'','','','0','','0','0','','0','','','0','','','','','','0','2');");
E_D("replace into `dsc_presale_cat` values('27',0xe6a5bce79b98e5bc80e79b98,'','','','0','','0','0','','0','','','0','','','','','','0','5');");
E_D("replace into `dsc_presale_cat` values('23',0xe5aeb6e5b185e5aeb6e8a385,'','','','0','','0','0','','0','','','0','','','','','','0','6');");
E_D("replace into `dsc_presale_cat` values('24',0xe9a39fe59381e7949fe9b29c,'','','','0','','0','0','','0','','','0','','','','','','0','7');");
E_D("replace into `dsc_presale_cat` values('26',0xe6b1bde8bda6e4b893e59cba,'','','','0','','0','0','','0','','','0','','','','','','0','3');");

require("../../inc/footer.php");
?>