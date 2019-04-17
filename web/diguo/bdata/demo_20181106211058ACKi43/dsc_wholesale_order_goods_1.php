<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_order_goods`;");
E_C("CREATE TABLE `dsc_wholesale_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `ru_id` int(11) unsigned NOT NULL DEFAULT '0',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `freight` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `order_id` (`order_id`) USING BTREE,
  KEY `ru_id` (`ru_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_order_goods` values('1','6','780',0xe794b7e5a5b3e99fa9e78988e7baafe6a389e58fafe788b1e586ace5ada3e4b8aae680a7e998b2e5b098e68385e4bea3e58fa3e7bda9e4bf9de69a96e9808fe6b094e9bb91e889b2e697b6e5b09ae6bdaee6acbee698a5203135e58583e4b880e585b132e4b8aae58fa3e7bda920e998b2e5b098e4b8aae680a7e697b6e5b09a,0x454353303030373830675f703337,'0','11','0.00','200.00',0xe5b0bae7a0813a4d0a,'0','0','',0x3435,'0','0.00','0','0');");

require("../../inc/footer.php");
?>