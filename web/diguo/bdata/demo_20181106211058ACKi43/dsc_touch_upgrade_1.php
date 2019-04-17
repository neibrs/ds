<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_touch_upgrade`;");
E_C("CREATE TABLE `dsc_touch_upgrade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `upgrade` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_touch_upgrade` values('1',0x523230313730393031,'2017-09-25 09:51:34');");
E_D("replace into `dsc_touch_upgrade` values('2',0x523230313731303031,'2017-10-20 05:22:18');");

require("../../inc/footer.php");
?>