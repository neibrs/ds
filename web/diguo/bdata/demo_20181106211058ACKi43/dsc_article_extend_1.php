<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_article_extend`;");
E_C("CREATE TABLE `dsc_article_extend` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` mediumint(8) unsigned NOT NULL,
  `click` int(10) unsigned NOT NULL DEFAULT '0',
  `likenum` int(10) unsigned NOT NULL DEFAULT '0',
  `hatenum` int(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_article_extend` values('1','66','1','0','0');");
E_D("replace into `dsc_article_extend` values('2','62','1','0','0');");
E_D("replace into `dsc_article_extend` values('3','58','1','0','0');");

require("../../inc/footer.php");
?>