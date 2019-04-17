<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_change_log`;");
E_C("CREATE TABLE `dsc_goods_change_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增日志ID',
  `goods_id` mediumint(8) NOT NULL COMMENT '商品ID',
  `shop_price` decimal(10,2) NOT NULL COMMENT '本店价',
  `shipping_fee` decimal(10,2) NOT NULL COMMENT '运费',
  `promote_price` decimal(10,2) NOT NULL COMMENT '促销价',
  `member_price` varchar(255) NOT NULL COMMENT '会员价',
  `volume_price` varchar(255) NOT NULL COMMENT '阶梯价',
  `give_integral` int(11) NOT NULL COMMENT '赠送消费积分',
  `rank_integral` int(11) NOT NULL COMMENT '赠送等级积分',
  `goods_weight` decimal(10,3) NOT NULL COMMENT '商品重量',
  `is_on_sale` tinyint(1) NOT NULL COMMENT '上下架',
  `user_id` int(11) NOT NULL COMMENT '操作者ID',
  `handle_time` int(11) NOT NULL COMMENT '操作时间',
  `old_record` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '原纪录',
  PRIMARY KEY (`log_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_change_log` values('1','698','3299.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','42','1508438525','1');");
E_D("replace into `dsc_goods_change_log` values('2','698','3299.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','42','1508438525','0');");
E_D("replace into `dsc_goods_change_log` values('3','693','4099.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1508451618','1');");
E_D("replace into `dsc_goods_change_log` values('4','693','4099.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1508451618','0');");
E_D("replace into `dsc_goods_change_log` values('5','693','4099.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1508451642','1');");
E_D("replace into `dsc_goods_change_log` values('6','693','4099.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1508451642','0');");
E_D("replace into `dsc_goods_change_log` values('7','903','798.00','0.00','11.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1508452589','1');");
E_D("replace into `dsc_goods_change_log` values('8','903','798.00','0.00','11.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1508452589','0');");
E_D("replace into `dsc_goods_change_log` values('9','673','3500.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1508455349','1');");
E_D("replace into `dsc_goods_change_log` values('10','673','3500.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1508455349','0');");
E_D("replace into `dsc_goods_change_log` values('11','697','599.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1508455481','1');");
E_D("replace into `dsc_goods_change_log` values('12','697','599.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1508455481','0');");
E_D("replace into `dsc_goods_change_log` values('13','912','200.00','0.00','0.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','56','1508715833','1');");
E_D("replace into `dsc_goods_change_log` values('14','912','200.00','0.00','0.00',0x4e3b,0x4e3b,'0','0','0.000','1','56','1508715833','0');");
E_D("replace into `dsc_goods_change_log` values('15','903','798.00','0.00','11.00',0x613a303a7b7d,0x613a303a7b7d,'0','0','0.000','1','57','1509087518','1');");
E_D("replace into `dsc_goods_change_log` values('16','903','798.00','0.00','11.00',0x4e3b,0x4e3b,'0','0','0.000','1','57','1509087518','0');");

require("../../inc/footer.php");
?>