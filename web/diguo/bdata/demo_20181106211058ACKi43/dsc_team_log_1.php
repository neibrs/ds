<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_team_log`;");
E_C("CREATE TABLE `dsc_team_log` (
  `team_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '拼团商品id',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开团时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '拼团状态（1成功，2失败）',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `t_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '拼团活动id',
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_team_log` values('1','903','1513049094','0','1','2');");

require("../../inc/footer.php");
?>