<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_bill_order`;");
E_C("CREATE TABLE `dsc_seller_bill_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bill_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `seller_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(255) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `return_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `return_shippingfee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `tax` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `integral_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `coupons` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `discount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `value_card` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `drp_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `confirm_take_time` int(10) unsigned NOT NULL DEFAULT '0',
  `chargeoff_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id` (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `seller_id` (`seller_id`),
  KEY `user_id` (`user_id`),
  KEY `bill_id` (`bill_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `chargeoff_status` (`chargeoff_status`),
  KEY `confirm_take_time` (`confirm_take_time`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seller_bill_order` values('1','1958','94','18','6',0x32303137313032303232353632353735363238,'5','2','2','0.00','0.00','0.00','200.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','205.00','0.00','1508482347','1');");
E_D("replace into `dsc_seller_bill_order` values('2','0','94','18','7',0x32303137313032313030303939343634363633,'5','2','2','0.00','0.00','0.00','140.00','0.00','5.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','145.00','0.00','1508486873','0');");

require("../../inc/footer.php");
?>