<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_bill_goods`;");
E_C("CREATE TABLE `dsc_seller_bill_goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rec_id` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `proportion` varchar(20) NOT NULL DEFAULT '',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `dis_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商品单品满减优惠金额',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `drp_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `commission_rate` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `rec_id` (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seller_bill_goods` values('1','6','6','912','0','0','200.00','0.00','1','','0.00','0');");
E_D("replace into `dsc_seller_bill_goods` values('2','7','7','912','0','0','140.00','0.00','1','','0.00','0');");

require("../../inc/footer.php");
?>