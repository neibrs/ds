<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_team_goods`;");
E_C("CREATE TABLE `dsc_team_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '拼团商品id',
  `team_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '拼团商品价格',
  `team_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '几人团',
  `validity_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开团有效期(小时)',
  `limit_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '已参团人数(添加虚拟数量)',
  `astrict_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '限购数量',
  `tc_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '频道id',
  `is_audit` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0未审核，1未通过，2通过',
  `is_team` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '显示0否 1显示',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `team_desc` varchar(255) NOT NULL DEFAULT '' COMMENT '拼团介绍',
  `isnot_aduit_reason` varchar(255) NOT NULL DEFAULT '' COMMENT '审核未通过理由',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_team_goods` values('1','697','20.00','2','12','0','2','27','2','1','0','','');");
E_D("replace into `dsc_team_goods` values('2','903','12.00','2','24','0','2','1','2','1','0','','');");

require("../../inc/footer.php");
?>