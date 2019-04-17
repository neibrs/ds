<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_prize`;");
E_C("CREATE TABLE `dsc_wechat_prize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户openid',
  `prize_name` varchar(255) NOT NULL DEFAULT '' COMMENT '奖品名称',
  `issue_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '发放状态，0未发放，1发放',
  `winner` varchar(255) NOT NULL DEFAULT '' COMMENT '信息',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '中奖时间',
  `prize_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否中奖，0未中奖，1中奖',
  `activity_type` varchar(255) NOT NULL DEFAULT '' COMMENT '活动类型',
  `market_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联活动ID',
  PRIMARY KEY (`id`),
  KEY `wechat_prize_wechat_id_index` (`wechat_id`),
  KEY `wechat_prize_market_id_index` (`market_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>