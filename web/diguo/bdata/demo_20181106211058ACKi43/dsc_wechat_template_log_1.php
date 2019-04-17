<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_template_log`;");
E_C("CREATE TABLE `dsc_wechat_template_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `msgid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '微信消息ID',
  `code` varchar(255) NOT NULL DEFAULT '' COMMENT '模板消息标识',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户openid',
  `data` text COMMENT '消息数据',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '消息链接地址',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `wechat_template_log_wechat_id_index` (`wechat_id`),
  KEY `wechat_template_log_openid_index` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>