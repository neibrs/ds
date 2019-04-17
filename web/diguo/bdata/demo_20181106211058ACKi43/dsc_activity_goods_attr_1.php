<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_activity_goods_attr`;");
E_C("CREATE TABLE `dsc_activity_goods_attr` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `bargain_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '活动id',
  `goods_id` mediumint(8) NOT NULL COMMENT '商品id',
  `product_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '属性id',
  `target_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '砍价目标价格',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '活动类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>