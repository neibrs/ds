<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wxapp_config`;");
E_C("CREATE TABLE `dsc_wxapp_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_appname` varchar(255) NOT NULL DEFAULT '' COMMENT '小程序名称',
  `wx_appid` varchar(255) NOT NULL DEFAULT '' COMMENT '小程序AppID',
  `wx_appsecret` varchar(255) NOT NULL DEFAULT '' COMMENT '小程序AppSecret',
  `wx_mch_id` varchar(255) NOT NULL DEFAULT '' COMMENT '商户号',
  `wx_mch_key` varchar(255) NOT NULL DEFAULT '' COMMENT '支付密钥',
  `token_secret` varchar(255) NOT NULL DEFAULT '' COMMENT 'Token授权加密key',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态：0 关闭 1 开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>