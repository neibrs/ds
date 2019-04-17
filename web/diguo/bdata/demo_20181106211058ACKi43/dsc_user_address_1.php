<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_user_address`;");
E_C("CREATE TABLE `dsc_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` int(10) NOT NULL DEFAULT '0',
  `province` int(10) NOT NULL DEFAULT '0',
  `city` int(10) NOT NULL DEFAULT '0',
  `district` int(10) NOT NULL DEFAULT '0',
  `street` int(10) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `audit` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `update_time` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_user_address` values('1','','1',0xe6a8a1e69dbfe5a082,'','1','25','321','2704','0',0xe88ab1e59bade8b7af383838e58fb7,'','',0x3135383538353838383839,'','','0','0');");
E_D("replace into `dsc_user_address` values('2','','87',0xe5bca0e4ba8ce78b97,'','1','2','52','501','0',0xe586afe7bb8de5b3b0,'','',0x3133353338333332353436,'','','0','1508439751');");
E_D("replace into `dsc_user_address` values('3','','91',0xe5b08fe5bdad,'','1','22','283','2334','0',0xe5a4a9e6a1a5e58cbae6a087e5b1b1e58d97e8b7afe5b1b1e4b89ce587a4e587b0e5b1b1e794b5e59586e4baa7e4b89ae59bad44345f3033,'','',0x3138313139383830383038,'','','0','0');");
E_D("replace into `dsc_user_address` values('4','','91',0xe5b08fe5bdad,'','1','22','283','2334','0',0xe5a4a9e6a1a5e58cbae6a087e5b1b1e58d97e8b7afe5b1b1e4b89ce587a4e587b0e5b1b1e794b5e59586e4baa7e4b89ae59bad44345f3033,'','',0x3138313139383830383038,'','','0','0');");
E_D("replace into `dsc_user_address` values('5','','96',0xe58fb6e7a2a7e58b87,'','1','4','58','567','0',0xe6b8afe5a198e8b7afe5ae8fe5beb7e697b6e4bba3e5b9bfe59cba37e6a08b34e6a5bc,'','',0x3135383539373832393830,'','','0','0');");
E_D("replace into `dsc_user_address` values('6','','107',0xe99fa9e5a594e8b791,'','1','25','321','2703','0',0xe58fb0e69fb3e8b7af,'','',0x3137373633333631323334,'','','0','0');");
E_D("replace into `dsc_user_address` values('7','','108',0xe587b6e6a188e8bf87,'','1','3','37','410','0',0x31323331333132333132333133,'','',0x3133353234313232323232,'','','0','1508453092');");
E_D("replace into `dsc_user_address` values('8','','110',0xe5be90e6989f,'','1','22','284','2346','0',0xe4baace58fa3e8b7af3238e58fb7e88b8fe5ae81e5a4a7e58ea642e5baa731383035,'','',0x3135393635353631373936,'','','0','0');");
E_D("replace into `dsc_user_address` values('9','','94',0xe4b99fe4b880e6a0b7,'','1','9','137','1060','0',0xe58f91e694be34e58f91,'','',0x3138303839383932353033,'','','0','1508482232');");
E_D("replace into `dsc_user_address` values('10','','115',0x6735346572,'','1','9','120','1054','0',0x6677657167623132,'','',0x3138303839383932353035,'','','0','1508743248');");
E_D("replace into `dsc_user_address` values('12','','118',0x71737764,'','1','2','52','502','0',0xe8a5bfe4ba8ce69797,'','',0x3135333131383537313832,'','','0','1509571834');");
E_D("replace into `dsc_user_address` values('14','','120',0x313131,'','1','3','38','418','0',0x6577,'','',0x3138383838383838383838,'','','0','1514594296');");

require("../../inc/footer.php");
?>