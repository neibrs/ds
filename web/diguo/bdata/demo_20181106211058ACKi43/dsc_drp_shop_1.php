<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_drp_shop`;");
E_C("CREATE TABLE `dsc_drp_shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员id',
  `shop_name` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺名称',
  `real_name` varchar(255) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '手机号',
  `qq` varchar(255) NOT NULL DEFAULT '' COMMENT 'qq',
  `shop_img` varchar(255) NOT NULL DEFAULT '' COMMENT '店铺背景图',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `isbuy` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否购买成为分销商',
  `audit` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺审核,0未审核,1已审核',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '店铺状态',
  `shop_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '获得佣金',
  `shop_points` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '获得积分',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '2' COMMENT '分销商品类型：0全部，1分类，2商品',
  `credit_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分销商等级id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `drp_shop_user_id_unique` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>