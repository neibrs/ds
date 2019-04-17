<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_mass_history`;");
E_C("CREATE TABLE `dsc_wechat_mass_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `media_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '素材id',
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT '发送内容类型',
  `status` varchar(255) NOT NULL DEFAULT '' COMMENT '发送状态，对应微信通通知状态',
  `send_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送时间',
  `msg_id` varchar(255) NOT NULL DEFAULT '' COMMENT '微信端返回的消息ID',
  `totalcount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'group_id下粉丝数或者openid_list中的粉丝数',
  `filtercount` int(10) unsigned NOT NULL DEFAULT '0',
  `sentcount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送成功的粉丝数',
  `errorcount` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送失败的粉丝数',
  PRIMARY KEY (`id`),
  KEY `wechat_mass_history_wechat_id_index` (`wechat_id`),
  KEY `wechat_mass_history_media_id_index` (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>