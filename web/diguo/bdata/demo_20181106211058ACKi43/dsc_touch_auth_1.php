<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_touch_auth`;");
E_C("CREATE TABLE `dsc_touch_auth` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `auth_config` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `status` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_touch_auth` values('2',0x613a323a7b693a303b613a333a7b733a343a226e616d65223b733a363a226170705f6964223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a393a22313031343138323334223b7d693a313b613a333a7b733a343a226e616d65223b733a373a226170705f6b6579223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a33323a223261376232363634633336396464373532636261373737666532656531383930223b7d7d,0x7171,'10','1');");

require("../../inc/footer.php");
?>