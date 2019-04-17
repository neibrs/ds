<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_user`;");
E_C("CREATE TABLE `dsc_wechat_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `subscribe` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '用户是否订阅该公众号标识',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '用户公众平台唯一标识',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '用户性别',
  `city` varchar(255) NOT NULL DEFAULT '' COMMENT '用户所在城市',
  `country` varchar(255) NOT NULL DEFAULT '' COMMENT '用户所在国家',
  `province` varchar(255) NOT NULL DEFAULT '' COMMENT '用户所在省份',
  `language` varchar(255) NOT NULL DEFAULT '' COMMENT '语言',
  `headimgurl` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像',
  `subscribe_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关注时间',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `privilege` varchar(255) NOT NULL DEFAULT '',
  `unionid` varchar(255) NOT NULL DEFAULT '' COMMENT '用户开放平台唯一标识',
  `groupid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户组id',
  `ect_uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'ecshop会员id',
  `bein_kefu` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否处在多客服流程',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '推荐人id',
  `from` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '粉丝来源：0 微信公众号关注 1 微信授权注册,2 微信扫码注册',
  PRIMARY KEY (`uid`),
  KEY `wechat_user_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>