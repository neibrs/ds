<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_return`;");
E_C("CREATE TABLE `dsc_order_return` (
  `ret_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '退换货id',
  `return_sn` varchar(20) NOT NULL,
  `goods_id` int(13) NOT NULL COMMENT '商品唯一id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `rec_id` int(10) NOT NULL COMMENT '订单商品唯一id',
  `order_id` int(10) NOT NULL COMMENT '所属订单号',
  `order_sn` varchar(20) NOT NULL,
  `credentials` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `maintain` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `back` tinyint(1) NOT NULL DEFAULT '0' COMMENT '退货标识',
  `goods_attr` text NOT NULL COMMENT '退货颜色属性',
  `exchange` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '换货标识',
  `return_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_val` text NOT NULL COMMENT '换货属性',
  `cause_id` int(10) NOT NULL COMMENT '退换货原因',
  `apply_time` int(10) NOT NULL DEFAULT '0' COMMENT '退换货申请时间',
  `return_time` int(10) NOT NULL DEFAULT '0' COMMENT '退换货时间',
  `should_return` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `actual_return` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `return_shipping_fee` decimal(10,2) unsigned NOT NULL,
  `return_brief` varchar(2000) NOT NULL,
  `remark` varchar(2000) NOT NULL COMMENT '备注',
  `country` int(10) NOT NULL COMMENT '国家',
  `province` int(10) NOT NULL COMMENT '省份',
  `city` int(10) NOT NULL COMMENT '城市',
  `district` int(10) NOT NULL COMMENT '区',
  `street` int(10) unsigned NOT NULL DEFAULT '0',
  `addressee` varchar(30) NOT NULL COMMENT '收件人',
  `phone` char(22) NOT NULL COMMENT '联系电话',
  `address` varchar(100) NOT NULL COMMENT '详细地址',
  `zipcode` int(6) DEFAULT NULL COMMENT '邮编',
  `is_check` tinyint(3) NOT NULL COMMENT '是否审核0：未审核1：已审核',
  `return_status` tinyint(3) NOT NULL COMMENT '退换货状态',
  `refound_status` tinyint(3) NOT NULL COMMENT '退款状态',
  `back_shipping_name` varchar(30) NOT NULL COMMENT '退回快递名称',
  `back_other_shipping` varchar(30) NOT NULL COMMENT '其他快递名称',
  `back_invoice_no` varchar(50) NOT NULL COMMENT '退回快递单号',
  `out_shipping_name` varchar(30) NOT NULL COMMENT '换出快递名称',
  `out_invoice_no` varchar(50) NOT NULL COMMENT '换出快递单号',
  `agree_apply` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `chargeoff_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `activation_number` tinyint(3) NOT NULL DEFAULT '0',
  `refund_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ret_id`),
  KEY `order_id` (`order_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `rec_id` (`rec_id`),
  KEY `order_sn` (`order_sn`),
  KEY `return_sn` (`return_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>