<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_shopbg`;");
E_C("CREATE TABLE `dsc_seller_shopbg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgimg` varchar(500) NOT NULL COMMENT '背景图片',
  `bgrepeat` varchar(50) NOT NULL DEFAULT 'no-repeat' COMMENT '背景图片重复',
  `bgcolor` varchar(20) NOT NULL COMMENT '背景颜色',
  `show_img` tinyint(1) NOT NULL DEFAULT '0' COMMENT '默认显示背景图片',
  `is_custom` int(1) NOT NULL DEFAULT '0' COMMENT '是否自定义背景，默认为否',
  `ru_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商家id',
  `seller_theme` varchar(50) NOT NULL COMMENT '模板',
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>