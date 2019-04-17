<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_reply`;");
E_C("CREATE TABLE `dsc_wechat_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT '自动回复类型',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '回复内容',
  `media_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '素材id',
  `rule_name` varchar(255) NOT NULL DEFAULT '' COMMENT '规则名称',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `reply_type` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词回复内容的类型',
  PRIMARY KEY (`id`),
  KEY `wechat_reply_wechat_id_index` (`wechat_id`),
  KEY `wechat_reply_media_id_index` (`media_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_reply` values('1','1',0x737562736372696265,0xe68891e59ca8e8bf99e9878ce681ade58099e5a49ae697b6e4ba86e38082,'0','','0','');");
E_D("replace into `dsc_wechat_reply` values('2','1',0x6d7367,0xe682a8e683b3e8a1a8e8bebee4bb80e4b988e591a2efbc9f,'0','','0','');");
E_D("replace into `dsc_wechat_reply` values('3','1',0x6b6579776f726473,0x31323320e585b3e994aee8af8de887aae58aa8e59b9ee5a48de38082,'0',0x313233,'1493675519',0x74657874);");
E_D("replace into `dsc_wechat_reply` values('4','2',0x737562736372696265,0xe6aca2e8bf8ee682a8e79a84e585b3e6b3a8efbc8ce8bf99e698afe4b880e69da1e6b58be8af95e4bfa1e681afe38082,'0','','0','');");
E_D("replace into `dsc_wechat_reply` values('5','2',0x6d7367,0xe8bf99e698afe4b880e69da1e6b58be8af95e79a84e887aae58aa8e59b9ee5a48de4bfa1e681afe38082,'0','','0','');");
E_D("replace into `dsc_wechat_reply` values('6','2',0x6b6579776f726473,0xe8bf99e698afe8be93e585a52671756f743b746573742671756f743be585b3e994aee8af8de4b98be5908ee8bf94e59b9ee79a84e4bfa1e681afe38082,'0',0x74657374,'1500484209',0x74657874);");
E_D("replace into `dsc_wechat_reply` values('7','3',0x6d7367,0x6464646464646464,'0','','0','');");

require("../../inc/footer.php");
?>