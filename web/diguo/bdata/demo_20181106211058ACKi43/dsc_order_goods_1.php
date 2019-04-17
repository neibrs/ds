<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_goods`;");
E_C("CREATE TABLE `dsc_order_goods` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `cart_recid` text NOT NULL,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` int(10) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_gift` int(10) unsigned NOT NULL DEFAULT '0',
  `model_attr` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` text NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shopping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `warehouse_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_city` int(10) unsigned NOT NULL DEFAULT '0',
  `is_single` tinyint(1) DEFAULT '0',
  `freight` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `drp_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '分销佣金百分比',
  `is_distribution` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '订单商品是否参与分销',
  `commission_rate` varchar(10) NOT NULL DEFAULT '0',
  `stages_qishu` mediumint(5) NOT NULL DEFAULT '-1' COMMENT '用户选择的当前商品的分期期数 -1:不分期',
  `product_sn` varchar(60) DEFAULT NULL COMMENT '商品规格货号',
  `is_reality` int(1) DEFAULT '-1' COMMENT '正品保证',
  `is_return` int(1) DEFAULT '-1' COMMENT '包退服务',
  `is_fast` int(1) DEFAULT '-1' COMMENT '闪速配送',
  PRIMARY KEY (`rec_id`),
  KEY `goods_id` (`goods_id`),
  KEY `order_id` (`order_id`),
  KEY `ru_id` (`ru_id`),
  KEY `freight` (`freight`),
  KEY `tid` (`tid`),
  KEY `stages_qishu` (`stages_qishu`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `is_real` (`is_real`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `area_id` (`area_id`),
  KEY `is_gift` (`is_gift`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_order_goods` values('2','3','0','','673',0x53616d73756e672fe4b889e6989f2047616c6178792043392050726f20534d2d433930303020362b363447e585a8e98791e5b19ee8b685e89684e6898be69cba203132e69c9fe5858de681af20e98081e8939de78999e99fb3e7aeb1e7ad89e5a49ae7a78de5a597e9a490e5a5bde7a4bc,0x454353303030363733,'0','1','4200.00','3500.00','','0','1','','0','0','0','','0','0.00','1','6','0','0','2','1','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('3','4','0','','625',0xe7a78be5ada3e696b0e6acbee794b7e5a3abe5a597e5a4b4e58dabe8a1a3e58db0e88ab1e5a496e5a597e99fa9e78988e7ae80e7baa6e799bee690ade6bdaee6b581e794b7e7949fe4b88ae8a1a3e69c8d,0x454353303030363235,'0','1','144.00','120.00','','0','1','','0','0','0','','0','0.00','0','0','0','0','2','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('4','4','0','','912',0xe58880,0x454353303030393132,'0','1','240.00','200.00','','0','1','','0','0','0','','18','0.00','3','33','0','0','0','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('5','5','0','','625',0xe7a78be5ada3e696b0e6acbee794b7e5a3abe5a597e5a4b4e58dabe8a1a3e58db0e88ab1e5a496e5a597e99fa9e78988e7ae80e7baa6e799bee690ade6bdaee6b581e794b7e7949fe4b88ae8a1a3e69c8d,0x454353303030363235,'0','1','144.00','120.00','','0','1','','0','0','0','','0','0.00','0','0','0','0','2','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('6','6','0','','912',0xe58880,0x454353303030393132,'0','1','240.00','200.00','','1','1','','0','0','0','','18','0.00','3','33','0','0','0','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('7','7','0','','912',0xe58880,0x454353303030393132,'0','1','240.00','140.00','','1','1','','0','0','0','','18','0.00','3','33','0','0','0','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('8','8','0','','902',0xe998bfe8bfaae8bebee696afe794b7e99e8b5a58373530e4b889e58fb6e88d897a78373030e8b791e6ada5e99e8b5320373631393320424220313231312031323133203132313420e38093e38093e38093e4b893e69f9ce6ada3e5938120e694afe68c81e9aa8ce8b4a720e585a8e696b0e78eb0e8b4a7e38093e38093e38093,0x454353303030393031,'18','1','604.80','509.00',0xe9a29ce889b23ae9bb84e9bb91e889b2200a,'0','1','','0','0','0',0x3138,'0','0.00','3','33','0','0','2','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('9','9','0','','912',0xe58880,0x454353303030393132,'0','1','240.00','140.00','','1','1','','0','0','0','','18','0.00','3','33','0','0','0','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");
E_D("replace into `dsc_order_goods` values('14','14','120',0x3432,'903',0xe6ada3e59381e79bb4e982ae4865726d6573e788b1e9a9ace4bb9532303137e696b0e6acbee794b7e99e8b20e697b6e5b09ae79c9fe79aaee4bc91e997b2e99e8b483137313332355a4830322037343935,0x454353303030393033,'0','1','957.59','798.00','','1','1','','0','0','0','','0','0.00','2','19','0','0','1','0','0.00','0.00','0','0','-1',NULL,'-1','-1','-1');");

require("../../inc/footer.php");
?>