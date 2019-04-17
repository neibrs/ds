<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_message_log`;");
E_C("CREATE TABLE `dsc_wechat_message_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `fromusername` varchar(255) NOT NULL DEFAULT '' COMMENT '发送方帐号openid',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '消息创建时间',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '微信消息内容',
  `msgtype` varchar(255) NOT NULL DEFAULT '' COMMENT '微信消息类型',
  `msgid` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '微信消息ID',
  `is_send` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '发送状态',
  PRIMARY KEY (`id`),
  KEY `wechat_message_log_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_message_log` values('1','1',0x6f6b3150647763427473634c727459557342557169385965474c3130,'1508467392',0xe4bda0e59083e9a5ade4ba86e59097,0x74657874,'6478818116231003443','1');");
E_D("replace into `dsc_wechat_message_log` values('2','1',0x6f6b31506477597464397067365874646e3239513671386f6d444d34,'1508476216',0x7369676e,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('3','1',0x6f6b3150647763596c47352d774e41464134497a647a47574c4a5138,'1508481930',0x64646378,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('4','1',0x6f6b31506477596f44742d486172756a4e4a78436e773746707a4455,'1508483343',0x6e657773,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('5','1',0x6f6b31506477596f44742d486172756a4e4a78436e773746707a4455,'1508483391',0x62657374,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('6','1',0x6f78357061777650366c75714a374f684334384a7636555536653441,'1508904563',0xe68891,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('7','1',0x6f78357061777650366c75714a374f684334384a7636555536653441,'1508904566',0xe59586e59f8e,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('8','1',0x6f78357061776e3863457832616d61344959486e33506259464f6141,'1508922770',0xe68891,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('14','1',0x6f783570617775445f50355f316844716a784e7057745a57504a4b49,'1508925278',0xe59586e59f8e,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('11','1',0x6f7835706177716a786e6d5647304241756970385139784b57476541,'1508924360',0xe59586e59f8e,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('12','1',0x6f7835706177716a786e6d5647304241756970385139784b57476541,'1508924364',0xe68891,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('15','1',0x6f783570617775445f50355f316844716a784e7057745a57504a4b49,'1508925280',0xe68891,0x6576656e74,'0','1');");
E_D("replace into `dsc_wechat_message_log` values('16','3',0x6f726c6b5174774d4c55567873736f584d6b6b44634c77746d685138,'1509103707',0xe597afe597af,0x74657874,'6481551068265093504','1');");
E_D("replace into `dsc_wechat_message_log` values('19','3',0x6f6a4a636f74316b622d615f5631474c7558335f576761476f456230,'1509614445',0x313233,0x74657874,'6483744671248929191','1');");
E_D("replace into `dsc_wechat_message_log` values('18','3',0x6f6a4a636f74316b622d615f5631474c7558335f576761476f456230,'1509614443',0xe4bda0e5a5bd,0x74657874,'6483744662658994597','1');");
E_D("replace into `dsc_wechat_message_log` values('20','3',0x6f6a4a636f74316b622d615f5631474c7558335f576761476f456230,'1509614466',0xe7a0b8e98791e89b8b,0x74657874,'6483744761443242409','1');");

require("../../inc/footer.php");
?>