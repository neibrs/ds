<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_wall_msg`;");
E_C("CREATE TABLE `dsc_wechat_wall_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `wall_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '微信墙活动id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户编号',
  `content` text COMMENT '留言内容',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送时间',
  `checktime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '消息审核状态:0未审核,1审核通过',
  PRIMARY KEY (`id`),
  KEY `wechat_wall_msg_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>