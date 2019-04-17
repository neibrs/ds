<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_custom_message`;");
E_C("CREATE TABLE `dsc_wechat_custom_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'wechat_user表用户uid',
  `msg` varchar(255) NOT NULL DEFAULT '' COMMENT '信息内容',
  `send_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送时间',
  `is_wechat_admin` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否管理员回复: 0否,1是',
  PRIMARY KEY (`id`),
  KEY `wechat_custom_message_wechat_id_index` (`wechat_id`),
  KEY `wechat_custom_message_uid_index` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_custom_message` values('1','1','25',0xe4bda0e59083e9a5ade4ba86e59097,'1508438593','0');");
E_D("replace into `dsc_wechat_custom_message` values('2','1','35',0xe69caae590afe794a8e7adbee588b0e98081e7a7afe58886,'1508447417','1');");
E_D("replace into `dsc_wechat_custom_message` values('3','1','35',0x7369676e,'1508447417','0');");
E_D("replace into `dsc_wechat_custom_message` values('4','1','44',0xe69a82e697a0e8aea2e58d95e4bfa1e681af,'1508453130','1');");
E_D("replace into `dsc_wechat_custom_message` values('5','1','44',0x64646378,'1508453131','0');");
E_D("replace into `dsc_wechat_custom_message` values('6','1','46',0xe59bbee69687e6b688e681af,'1508454547','1');");
E_D("replace into `dsc_wechat_custom_message` values('7','1','46',0x6e657773,'1508454547','0');");
E_D("replace into `dsc_wechat_custom_message` values('8','1','46',0xe59bbee69687e6b688e681af,'1508454592','1');");
E_D("replace into `dsc_wechat_custom_message` values('9','1','46',0x62657374,'1508454592','0');");
E_D("replace into `dsc_wechat_custom_message` values('10','1','12',0xe68891,'1508875763','0');");
E_D("replace into `dsc_wechat_custom_message` values('11','1','12',0xe59586e59f8e,'1508875765','0');");
E_D("replace into `dsc_wechat_custom_message` values('12','1','42',0xe68891,'1508893969','0');");

require("../../inc/footer.php");
?>