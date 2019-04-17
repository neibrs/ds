<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_im_service`;");
E_C("CREATE TABLE `dsc_im_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `user_name` varchar(60) NOT NULL DEFAULT '' COMMENT '管理员名称',
  `nick_name` varchar(60) NOT NULL DEFAULT '' COMMENT '昵称',
  `post_desc` varchar(60) NOT NULL DEFAULT '' COMMENT '描述',
  `login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员登录时间',
  `chat_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0-在线 1-离开  2-退出',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0为删除， 1为正常， 2为暂停',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_im_service` values('1','57',0x61646d696e,0xe5b08fe4ba8c,0xe5b9b3e58fb0e887aae890a5e5aea2e69c8de5b08fe4ba8ce38082,'0','0','1');");
E_D("replace into `dsc_im_service` values('2','42',0xe4b887e58d93,0xe5b08fe4ba8c,0xe59586e5aeb6e5aea2e69c8de5b08fe4ba8ce38082,'0','1','1');");

require("../../inc/footer.php");
?>