<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_stages`;");
E_C("CREATE TABLE `dsc_stages` (
  `stages_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分期表的ID',
  `order_sn` varchar(20) NOT NULL COMMENT '订单编号',
  `stages_total` tinyint(3) unsigned NOT NULL COMMENT '总分期数',
  `stages_one_price` decimal(10,2) unsigned NOT NULL COMMENT '每期的金额',
  `yes_num` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '已还期数',
  `create_date` int(10) unsigned NOT NULL COMMENT '分期单创建时间',
  `repay_date` text NOT NULL COMMENT '还款日期',
  PRIMARY KEY (`stages_id`),
  KEY `order_sn` (`order_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>