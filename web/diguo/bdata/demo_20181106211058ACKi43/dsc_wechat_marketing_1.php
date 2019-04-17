<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_marketing`;");
E_C("CREATE TABLE `dsc_wechat_marketing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `marketing_type` varchar(255) NOT NULL DEFAULT '' COMMENT '活动类型',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '活动名称',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '扩展词',
  `command` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '活动说明',
  `starttime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT 'logo图',
  `background` varchar(255) NOT NULL DEFAULT '' COMMENT '活动背景图',
  `config` text COMMENT '配置信息',
  `support` varchar(255) NOT NULL DEFAULT '' COMMENT '赞助支持',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '活动状态: 0未开始,1进行中,2已结束',
  `qrcode` varchar(255) NOT NULL DEFAULT '' COMMENT '二维码地址',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '活动地址',
  PRIMARY KEY (`id`),
  KEY `wechat_marketing_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_marketing` values('1','1',0x77616c6c,0x6373,'',0x77616c6c3131,0x627274,'1509056501','1511734901','1509056544',0x646174612f61747461636865642f77616c6c2f353966326430613037653636662e706e67,0x646174612f61747461636865642f77616c6c2f353966326430613038353335662e6a7067,0x613a313a7b693a303b613a343a7b733a31313a227072697a655f6c6576656c223b733a393a22e4b880e7ad89e5a596223b733a31303a227072697a655f6e616d65223b733a343a2268627236223b733a31313a227072697a655f636f756e74223b733a313a2234223b733a31303a227072697a655f70726f62223b733a333a22313030223b7d7d,'','1','',0x687474703a2f2f746368303839382e636f6d2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d6d61726b65745f73686f7726747970653d77616c6c2666756e6374696f6e3d77616c6c5f757365725f7765636861742677616c6c5f69643d312672755f69643d30);");

require("../../inc/footer.php");
?>