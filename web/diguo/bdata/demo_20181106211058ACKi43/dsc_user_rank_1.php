<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_user_rank`;");
E_C("CREATE TABLE `dsc_user_rank` (
  `rank_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(30) NOT NULL DEFAULT '',
  `min_points` int(10) unsigned NOT NULL DEFAULT '0',
  `max_points` int(10) unsigned NOT NULL DEFAULT '0',
  `discount` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_price` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `special_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_user_rank` values('3',0xe4bba3e99480e794a8e688b7,'1000000','1000000000','60','1','1');");
E_D("replace into `dsc_user_rank` values('6',0xe9939ce7898c,'0','10000','100','1','0');");
E_D("replace into `dsc_user_rank` values('7',0xe993b6e7898c,'10001','100000','85','1','0');");
E_D("replace into `dsc_user_rank` values('8',0xe98791e7898c,'100001','10000000','70','1','0');");

require("../../inc/footer.php");
?>