<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_drp_log`;");
E_C("CREATE TABLE `dsc_drp_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '订单号',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `user_name` varchar(255) NOT NULL DEFAULT '' COMMENT '姓名',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金',
  `point` int(10) unsigned NOT NULL DEFAULT '0',
  `drp_level` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '分销商等级',
  `is_separate` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否分销',
  `separate_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '分销类型',
  PRIMARY KEY (`log_id`),
  KEY `drp_log_order_id_index` (`order_id`),
  KEY `drp_log_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>