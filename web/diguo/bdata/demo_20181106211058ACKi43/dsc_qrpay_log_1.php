<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_qrpay_log`;");
E_C("CREATE TABLE `dsc_qrpay_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pay_order_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '收款订单号',
  `pay_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收款金额',
  `qrpay_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联收款码id',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  `pay_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '支付用户id',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户openid',
  `payment_code` varchar(255) NOT NULL DEFAULT '' COMMENT '支付方式',
  `trade_no` varchar(255) NOT NULL DEFAULT '' COMMENT '支付交易号',
  `notify_data` text NOT NULL COMMENT '交易数据',
  `pay_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否支付：0未支付 1已支付 ',
  `is_settlement` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否结算：0未结算 1已结算 ',
  `pay_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '记录时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `qrpay_log_pay_order_sn_unique` (`pay_order_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>