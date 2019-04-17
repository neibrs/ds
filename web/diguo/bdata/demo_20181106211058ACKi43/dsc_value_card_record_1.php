<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_value_card_record`;");
E_C("CREATE TABLE `dsc_value_card_record` (
  `rid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `vc_id` int(10) NOT NULL COMMENT '储值卡ID',
  `order_id` int(10) NOT NULL COMMENT '订单ID',
  `use_val` decimal(10,2) NOT NULL COMMENT '使用金额',
  `add_val` int(10) NOT NULL COMMENT '充值金额',
  `record_time` int(11) NOT NULL COMMENT '记录时间',
  PRIMARY KEY (`rid`),
  KEY `vc_id` (`vc_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>