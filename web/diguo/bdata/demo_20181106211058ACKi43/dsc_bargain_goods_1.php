<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_bargain_goods`;");
E_C("CREATE TABLE `dsc_bargain_goods` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `bargain_name` varchar(255) NOT NULL DEFAULT '' COMMENT '砍价活动标题',
  `goods_id` mediumint(8) NOT NULL COMMENT '商品id',
  `start_time` int(10) DEFAULT '0' COMMENT '活动开始时间',
  `end_time` int(10) DEFAULT '0' COMMENT '活动结束时间',
  `add_time` int(10) DEFAULT '0' COMMENT '添加时间',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '活动原价',
  `min_price` int(10) DEFAULT '0' COMMENT '价格区间（最小值）',
  `max_price` int(10) DEFAULT '0' COMMENT '价格区间（最大值）',
  `target_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '砍价目标价格',
  `total_num` int(10) DEFAULT '0' COMMENT '参与人数',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否热销',
  `is_audit` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0未审核，1未通过，2已审核',
  `isnot_aduit_reason` varchar(255) NOT NULL DEFAULT '' COMMENT '审核未通过原因',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '活动状态（0进行中、1关闭）',
  `is_delete` tinyint(10) NOT NULL DEFAULT '0' COMMENT '活动删除状态（1删除）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>