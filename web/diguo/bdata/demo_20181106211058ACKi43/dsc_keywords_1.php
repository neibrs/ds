<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_keywords`;");
E_C("CREATE TABLE `dsc_keywords` (
  `date` date NOT NULL DEFAULT '1000-01-01',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,'','2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0x31,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0x46697665,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0x4669766520506c7573,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0x506c7573,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe58685e8a1a3,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe591a8e5a4a7e7a68f,'1');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe5a4a7e7a68f,'1');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe680a7e6849f,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe6898be69cba,'8');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe699aee99980,'6');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe8b5a0e98081,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe58fb8,'11');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe591a8,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe5a4a7e7a68f,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe6898be69cba,'3');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe788b1,'11');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe79b9f,'11');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe883b6e58e9f,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4543546f756368,0xe89b8be799bd,'2');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe8a385e4bfae,'6');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe788b1,'4');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe69785e6b8b8,'9');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe4ba91e58d97,'5');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe7b1b3e7babf,'5');");
E_D("replace into `dsc_keywords` values('2017-10-20',0x4453435f4232423243,0xe58880,'1');");
E_D("replace into `dsc_keywords` values('2017-10-21',0x4453435f4232423243,0xe58880,'1');");
E_D("replace into `dsc_keywords` values('2017-10-21',0x4453435f4232423243,0xe4ba91e58d97,'6');");
E_D("replace into `dsc_keywords` values('2017-10-21',0x4453435f4232423243,0xe7b1b3e7babf,'6');");
E_D("replace into `dsc_keywords` values('2017-10-21',0x4453435f4232423243,0xe69785e6b8b8,'13');");
E_D("replace into `dsc_keywords` values('2017-10-21',0x4453435f4232423243,0xe8a385e4bfae,'3');");
E_D("replace into `dsc_keywords` values('2017-10-22',0x4453435f4232423243,0xe6898be69cba,'9');");
E_D("replace into `dsc_keywords` values('2017-10-22',0x4453435f4232423243,0xe69785e6b8b8,'3');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe5a4a7e7a68f,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe6898be69cba,'42');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe69785e6b8b8,'5');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe4bc98e683a0,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe88f9c,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe998bfe8bfaa,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe4b889e58fb6,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe794b7e99e8b,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe9aa8ce8b4a7,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe4b893e69f9c,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe6ada3e59381,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe8b791e6ada5,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe78eb0e8b4a7,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe585a8e696b0,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe694afe68c81,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x3736313933,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x5a58373530,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x7a78373030,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x31323131,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x31323134,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x31323133,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0x4242,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe6b58be8af95,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe58880,'1');");
E_D("replace into `dsc_keywords` values('2017-10-23',0x4453435f4232423243,0xe58685e8a1a3,'1');");
E_D("replace into `dsc_keywords` values('2017-10-24',0x4453435f4232423243,0xe58685e8a1a3,'12');");
E_D("replace into `dsc_keywords` values('2017-10-24',0x4453435f4232423243,0xe5a4a7e7a68f,'1');");
E_D("replace into `dsc_keywords` values('2017-10-24',0x4453435f4232423243,0xe6898be69cba,'10');");
E_D("replace into `dsc_keywords` values('2017-10-24',0x4453435f4232423243,0x506c7573,'2');");
E_D("replace into `dsc_keywords` values('2017-10-24',0x4453435f4232423243,0x46697665,'2');");
E_D("replace into `dsc_keywords` values('2017-10-25',0x4453435f4232423243,0x506c7573,'1');");
E_D("replace into `dsc_keywords` values('2017-10-25',0x4453435f4232423243,0x46697665,'1');");
E_D("replace into `dsc_keywords` values('2017-10-25',0x4453435f4232423243,0xe58685e8a1a3,'32');");
E_D("replace into `dsc_keywords` values('2017-10-25',0x4453435f4232423243,0xe6898be69cba,'34');");
E_D("replace into `dsc_keywords` values('2017-10-26',0x4453435f4232423243,0xe6898be69cba,'172');");
E_D("replace into `dsc_keywords` values('2017-10-26',0x4453435f4232423243,0xe69785e6b8b8,'13');");
E_D("replace into `dsc_keywords` values('2017-10-26',0x4241494455,0x383353,'1');");
E_D("replace into `dsc_keywords` values('2017-10-27',0x4453435f4232423243,0xe58685c3a82e,'16');");
E_D("replace into `dsc_keywords` values('2017-10-27',0x4453435f4232423243,'','17');");
E_D("replace into `dsc_keywords` values('2017-10-27',0x4453435f4232423243,0xe8a385e4bfae,'2');");
E_D("replace into `dsc_keywords` values('2017-10-27',0x4453435f4232423243,0xe69785e6b8b8,'14');");
E_D("replace into `dsc_keywords` values('2017-10-27',0x4453435f4232423243,0xe58685,'1');");
E_D("replace into `dsc_keywords` values('2017-10-28',0x4543546f756368,0xe5bab7e4bdb3,'2');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe4ba91e58d97e7b1b3e7babf,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe4ba91e58d97,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe7b1b3e7babf,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe788b1e9a9ace4bb9532303137e696b0e6acbee794b7e99e8b,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe788b1e9a9ac,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe794b7e99e8b,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0xe696b0e6acbe,'1');");
E_D("replace into `dsc_keywords` values('2017-11-02',0x4453435f4232423243,0x32303137,'1');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4543546f756368,0x6865726d6573,'4');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4543546f756368,0xe788b1e9a9ac,'4');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4543546f756368,0x32303137,'4');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4453435f4232423243,0x4865726d6573e788b1e9a9ace4bb9532303137,'3');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4453435f4232423243,0xe788b1e9a9ac,'3');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4453435f4232423243,0x4865726d6573,'3');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4453435f4232423243,0x32303137,'3');");
E_D("replace into `dsc_keywords` values('2017-12-30',0x4543546f756368,0xe982ae,'2');");
E_D("replace into `dsc_keywords` values('2018-01-08',0x4543546f756368,0xe788b1e9a9ac,'2');");
E_D("replace into `dsc_keywords` values('2018-01-13',0x4543546f756368,0xe788b1e9a9ac,'3');");
E_D("replace into `dsc_keywords` values('2018-01-28',0x4453435f4232423243,0xe788b1e9a9ace4bb9532303137,'1');");
E_D("replace into `dsc_keywords` values('2018-01-28',0x4453435f4232423243,0xe788b1e9a9ac,'1');");
E_D("replace into `dsc_keywords` values('2018-01-28',0x4453435f4232423243,0x32303137,'1');");
E_D("replace into `dsc_keywords` values('2018-01-28',0x4543546f756368,0xe788b1e9a9ac,'2');");
E_D("replace into `dsc_keywords` values('2018-03-27',0x4453435f4232423243,0xe6898be69cba,'2');");

require("../../inc/footer.php");
?>