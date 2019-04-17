<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_temporary_files`;");
E_C("CREATE TABLE `dsc_temporary_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL COMMENT '类型(如:goods,cat,brand)',
  `path` varchar(255) NOT NULL,
  `add_time` int(10) NOT NULL,
  `identity` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '身份(0:会员,1:管理员)',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>