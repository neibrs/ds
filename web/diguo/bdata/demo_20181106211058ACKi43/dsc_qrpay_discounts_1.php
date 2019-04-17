<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_qrpay_discounts`;");
E_C("CREATE TABLE `dsc_qrpay_discounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  `min_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '满金额',
  `discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠金额',
  `max_discount_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '最高优惠金额',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '优惠状态(0 关闭，1 开启)',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>