<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_intelligent_weight`;");
E_C("CREATE TABLE `dsc_intelligent_weight` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品购买数量',
  `return_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品退换货数量',
  `user_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '购买此商品的会员数量',
  `goods_comment_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '对商品评价数量',
  `merchants_comment_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '对商家评价数量',
  `user_attention_number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员关注此商品数量',
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_intelligent_weight` values('1','903','1','0','2','0','0','0');");

require("../../inc/footer.php");
?>