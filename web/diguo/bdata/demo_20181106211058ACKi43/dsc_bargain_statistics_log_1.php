<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_bargain_statistics_log`;");
E_C("CREATE TABLE `dsc_bargain_statistics_log` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '创建砍价记录id',
  `bargain_id` mediumint(8) NOT NULL COMMENT '活动id',
  `goods_attr_id` varchar(20) NOT NULL DEFAULT '0' COMMENT '属性id',
  `user_id` mediumint(8) NOT NULL COMMENT '会员id',
  `final_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '砍后最终购买价',
  `add_time` int(10) DEFAULT '0' COMMENT '添加时间',
  `count_num` int(10) DEFAULT '0' COMMENT '参与人次',
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '状态（1成功）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>