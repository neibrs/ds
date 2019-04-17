<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_redpack_advertice`;");
E_C("CREATE TABLE `dsc_wechat_redpack_advertice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `market_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联活动id',
  `icon` varchar(255) NOT NULL DEFAULT '' COMMENT '商家图标',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '广告内容',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '广告链接',
  PRIMARY KEY (`id`),
  KEY `wechat_redpack_advertice_wechat_id_index` (`wechat_id`),
  KEY `wechat_redpack_advertice_market_id_index` (`market_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>