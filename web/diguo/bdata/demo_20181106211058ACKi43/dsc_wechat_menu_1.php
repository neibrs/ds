<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_menu`;");
E_C("CREATE TABLE `dsc_wechat_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级ID',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '菜单标题',
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT '菜单的响应动作类型',
  `key` varchar(255) NOT NULL DEFAULT '' COMMENT '菜单KEY值，click类型必须',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '网页链接，view类型必须',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '显示状态',
  PRIMARY KEY (`id`),
  KEY `wechat_menu_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_menu` values('16','2','0',0xe68891e79a84e5beaee5ba97,0x636c69636b,0x20,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('17','2','16',0xe69c80e696b0e4b88ae69eb6,0x636c69636b,0x6e657773,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('18','2','16',0xe68e8ce69f9ce68ea8e88d90,0x636c69636b,0x62657374,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('19','2','16',0xe8bf9be585a5e5beaee5ba97,0x76696577,'',0x687474703a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d73746f726526613d73686f705f696e666f2669643d312672755f69643d31,'0','1');");
E_D("replace into `dsc_wechat_menu` values('20','2','0',0xe5b08fe6b8b8e6888f,0x636c69636b,0x23,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('21','2','20',0xe5a4a7e8bdace79b98,0x636c69636b,0x647a70,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('22','2','20',0xe7a0b8e98791e89b8b,0x636c69636b,0x7a6a64,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('23','2','0',0xe68891e79a84,0x636c69636b,0x23,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('24','2','23',0xe68891e79a84e8aea2e58d95,0x76696577,'',0x687474703a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d7573657226633d6f726465722672755f69643d31,'0','1');");
E_D("replace into `dsc_wechat_menu` values('25','2','23',0xe68891e79a84e7a7afe58886,0x76696577,'',0x687474703a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d7573657226633d6163636f756e742672755f69643d31,'0','1');");
E_D("replace into `dsc_wechat_menu` values('28','3','0',0x31313131,0x636c69636b,0x31313131,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('30','3','0',0xe7a0b8e98791e89b8b,0x636c69636b,0x7a6a64,'','0','1');");
E_D("replace into `dsc_wechat_menu` values('31','1','0',0xe88ab1e88ab1e7bd91,0x76696577,'',0x687474703a2f2f7777772e39396875612e636e2f,'0','1');");

require("../../inc/footer.php");
?>