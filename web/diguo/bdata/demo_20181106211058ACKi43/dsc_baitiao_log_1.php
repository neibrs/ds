<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_baitiao_log`;");
E_C("CREATE TABLE `dsc_baitiao_log` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `baitiao_id` int(10) NOT NULL COMMENT '白条id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `use_date` varchar(50) NOT NULL COMMENT '记账日期',
  `repay_date` text NOT NULL COMMENT '还款日期',
  `order_id` int(10) NOT NULL COMMENT '订单id',
  `repayed_date` varchar(50) NOT NULL DEFAULT '' COMMENT '完成支付日期',
  `is_repay` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否还款',
  `is_stages` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否为白条分期商品 1:分期 0:不分期',
  `stages_total` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '当前订单的分期总期数',
  `stages_one_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '每期金额',
  `yes_num` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '已还期数',
  `is_refund` tinyint(3) unsigned DEFAULT '0' COMMENT '该白条记录对应的订单是否退款了. 1:退款 0:正常;',
  `pay_num` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `pay_num` (`pay_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>