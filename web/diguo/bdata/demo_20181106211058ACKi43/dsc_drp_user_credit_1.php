<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_drp_user_credit`;");
E_C("CREATE TABLE `dsc_drp_user_credit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `credit_name` varchar(255) NOT NULL DEFAULT '' COMMENT '等级名称',
  `min_money` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '金额下限',
  `max_money` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '金额上限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_drp_user_credit` values('1',0xe9939ce7898c,'0','5000');");
E_D("replace into `dsc_drp_user_credit` values('2',0xe993b6e7898c,'5001','10000');");
E_D("replace into `dsc_drp_user_credit` values('3',0xe98791e7898c,'10001','100000');");

require("../../inc/footer.php");
?>