<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_wall_user`;");
E_C("CREATE TABLE `dsc_wechat_wall_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `wall_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '微信墙活动id',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别:1男,2女,0保密',
  `headimg` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '用户审核状态:0未审核,1审核通过',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `checktime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户openid',
  `wechatname` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户昵称',
  `headimgurl` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户头像',
  PRIMARY KEY (`id`),
  KEY `wechat_wall_user_wechat_id_index` (`wechat_id`),
  KEY `wechat_wall_user_wall_id_index` (`wall_id`),
  KEY `wechat_wall_user_openid_index` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>