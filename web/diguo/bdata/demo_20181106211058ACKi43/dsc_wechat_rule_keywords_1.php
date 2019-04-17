<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_rule_keywords`;");
E_C("CREATE TABLE `dsc_wechat_rule_keywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `rid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '规则id',
  `rule_keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '规则关键词',
  PRIMARY KEY (`id`),
  KEY `wechat_rule_keywords_wechat_id_index` (`wechat_id`),
  KEY `wechat_rule_keywords_rid_index` (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_rule_keywords` values('1','0','3',0x313233);");
E_D("replace into `dsc_wechat_rule_keywords` values('2','2','6',0x74657374);");

require("../../inc/footer.php");
?>