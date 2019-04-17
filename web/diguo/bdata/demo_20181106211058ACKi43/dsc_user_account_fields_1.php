<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_user_account_fields`;");
E_C("CREATE TABLE `dsc_user_account_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联用户id',
  `account_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联ecs_user_account表id',
  `bank_number` varchar(255) NOT NULL COMMENT '银行账号',
  `real_name` varchar(50) NOT NULL COMMENT '真是姓名',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>