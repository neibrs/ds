<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_user_taglist`;");
E_C("CREATE TABLE `dsc_wechat_user_taglist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标签id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '标签名字，UTF8编码',
  `count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标签内用户数量',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `wechat_user_taglist_wechat_id_index` (`wechat_id`),
  KEY `wechat_user_taglist_tag_id_index` (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_user_taglist` values('1','2','2',0xe6989fe6a087e7bb84,'0','0');");
E_D("replace into `dsc_wechat_user_taglist` values('2','2','100',0xe597b7e597b7,'0','0');");
E_D("replace into `dsc_wechat_user_taglist` values('3','2','102',0xe5a4a7e59586e5889be7b289e4b89d,'1','0');");
E_D("replace into `dsc_wechat_user_taglist` values('32','1','100',0xe6b58be8af95,'0','0');");
E_D("replace into `dsc_wechat_user_taglist` values('31','1','2',0xe6989fe6a087e7bb84,'0','0');");

require("../../inc/footer.php");
?>