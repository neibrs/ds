<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_searchengine`;");
E_C("CREATE TABLE `dsc_searchengine` (
  `date` date NOT NULL DEFAULT '1000-01-01',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_searchengine` values('2017-10-20',0x474f4f474c45,'371');");
E_D("replace into `dsc_searchengine` values('2017-10-20',0x534f474f55,'55');");
E_D("replace into `dsc_searchengine` values('2017-10-21',0x474f4f474c45,'356');");
E_D("replace into `dsc_searchengine` values('2017-10-22',0x474f4f474c45,'532');");
E_D("replace into `dsc_searchengine` values('2017-10-23',0x474f4f474c45,'430');");
E_D("replace into `dsc_searchengine` values('2017-10-24',0x474f4f474c45,'378');");
E_D("replace into `dsc_searchengine` values('2017-10-25',0x474f4f474c45,'322');");
E_D("replace into `dsc_searchengine` values('2017-10-26',0x474f4f474c45,'160');");
E_D("replace into `dsc_searchengine` values('2017-10-27',0x474f4f474c45,'330');");
E_D("replace into `dsc_searchengine` values('2017-12-18',0x474f4f474c45,'1');");

require("../../inc/footer.php");
?>