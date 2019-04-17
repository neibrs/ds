<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_share_count`;");
E_C("CREATE TABLE `dsc_wechat_share_count` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '用户公众平台唯一标识',
  `share_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '分享类型 如分享到朋友圈 默认0',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '分享链接',
  `share_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分享时间',
  PRIMARY KEY (`id`),
  KEY `wechat_share_count_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_share_count` values('1','1',0x6f6b31506477664f62354d34746f6153414c5f64392d384877313745,'2',0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f,'1508431685');");
E_D("replace into `dsc_wechat_share_count` values('2','1',0x6f6b315064775859664f395346717367526a6d775936354372726755,'2',0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d676f6f64732669643d36333526753d3731,'1508432058');");

require("../../inc/footer.php");
?>