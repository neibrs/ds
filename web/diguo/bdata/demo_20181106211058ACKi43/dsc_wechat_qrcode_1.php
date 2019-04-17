<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_qrcode`;");
E_C("CREATE TABLE `dsc_wechat_qrcode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '二维码类型，0临时，1永久',
  `expire_seconds` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '二维码有效时间',
  `scene_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '场景值ID',
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '推荐人',
  `function` varchar(255) NOT NULL DEFAULT '' COMMENT '功能',
  `ticket` varchar(255) NOT NULL DEFAULT '' COMMENT '二维码ticket',
  `qrcode_url` varchar(255) NOT NULL DEFAULT '' COMMENT '二维码路径',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `scan_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '扫描量',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `wechat_qrcode_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>