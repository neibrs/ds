<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_im_configure`;");
E_C("CREATE TABLE `dsc_im_configure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ser_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '客服ID',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1-快捷回复  2-接入回复  3-离开设置',
  `content` text NOT NULL COMMENT '回复内容',
  `is_on` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>