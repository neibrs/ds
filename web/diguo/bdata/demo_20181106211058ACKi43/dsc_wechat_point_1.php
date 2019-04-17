<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_point`;");
E_C("CREATE TABLE `dsc_wechat_point` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '积分增加记录id',
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户openid',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '增加时间',
  PRIMARY KEY (`id`),
  KEY `wechat_point_log_id_index` (`log_id`),
  KEY `wechat_point_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>