<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_im_message`;");
E_C("CREATE TABLE `dsc_im_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '客服对应 im_customer id  客户对应 用户表ID',
  `to_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '客服对应 im_customer id  客户对应 用户表ID',
  `dialog_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会话记录',
  `message` text NOT NULL COMMENT '聊天内容',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会话记录',
  `user_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '消息属于  1-客服 2-用户',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0为已读  1为未读',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>