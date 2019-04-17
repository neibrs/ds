<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_article_cat`;");
E_C("CREATE TABLE `dsc_article_cat` (
  `cat_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL DEFAULT '',
  `cat_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`),
  KEY `cat_name` (`cat_name`)
) ENGINE=MyISAM AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_article_cat` values('1',0xe7b3bbe7bb9fe58886e7b1bb,'2','',0xe7b3bbe7bb9fe4bf9de79599e58886e7b1bb,'50','0','0');");
E_D("replace into `dsc_article_cat` values('2',0xe7bd91e5ba97e4bfa1e681af,'3','',0xe7bd91e5ba97e4bfa1e681afe58886e7b1bb,'50','0','1');");
E_D("replace into `dsc_article_cat` values('3',0xe7bd91e5ba97e5b8aee58aa9e58886e7b1bb,'4','',0xe7bd91e5ba97e5b8aee58aa9e58886e7b1bb,'50','0','1');");
E_D("replace into `dsc_article_cat` values('4',0x3347e8b584e8aeaf,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('5',0xe696b0e6898be4b88ae8b7af20,'5','','','50','0','3');");
E_D("replace into `dsc_article_cat` values('7',0xe9858de98081e4b88ee694afe4bb9820,'5','',0xe9858de98081e4b88ee694afe4bb9820,'50','0','3');");
E_D("replace into `dsc_article_cat` values('8',0xe69c8de58aa1e4bf9de8af8120,'5','','','50','0','3');");
E_D("replace into `dsc_article_cat` values('9',0xe88194e7b3bbe68891e4bbac20,'5','',0xe88194e7b3bbe68891e4bbac20,'50','0','3');");
E_D("replace into `dsc_article_cat` values('10',0xe4bc9ae59198e4b8ade5bf83,'5','','','50','0','3');");
E_D("replace into `dsc_article_cat` values('12',0xe7ab99e58685e5bfabe8aeaf,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('13',0xe59586e59f8ee585ace5918a,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('14',0xe59586e5aeb6e585a5e9a9bbe6b581e7a88be8afb4e6988e,'1','',0xe59586e5aeb6e585a5e9a9bbe8afb4e6988ee4b893e794a8,'50','0','0');");
E_D("replace into `dsc_article_cat` values('15',0xe59586e5aeb6e585a5e9a9bbe59586e5aeb6e8afb4e6988e,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('17',0x417070,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('18',0x696f73,'1','','','50','0','17');");
E_D("replace into `dsc_article_cat` values('19',0xe58f91e7a5a8e997aee9a298,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('20',0xe585ace5918a,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('21',0xe4bf83e99480,'1','','','50','0','0');");
E_D("replace into `dsc_article_cat` values('1000',0xe5beaee58886e99480,'1',0xe58886e99480,'','50','1','0');");

require("../../inc/footer.php");
?>