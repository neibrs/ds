<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_source_ip`;");
E_C("CREATE TABLE `dsc_source_ip` (
  `ipid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `storeid` int(10) NOT NULL,
  `ipdata` varchar(16) NOT NULL COMMENT '访问者的IP',
  `iptime` varchar(30) NOT NULL COMMENT '访问时间',
  PRIMARY KEY (`ipid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_source_ip` values('1','6',0x352e3138392e3138332e3731,0x31353038383531373738);");

require("../../inc/footer.php");
?>