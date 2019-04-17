<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_shopslide`;");
E_C("CREATE TABLE `dsc_seller_shopslide` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `ru_id` int(11) NOT NULL DEFAULT '0' COMMENT '入驻商家id',
  `img_url` varchar(100) NOT NULL COMMENT '图片地址',
  `img_link` varchar(100) NOT NULL COMMENT '图片超链接',
  `img_desc` varchar(50) NOT NULL COMMENT '图片描述',
  `img_order` smallint(6) NOT NULL DEFAULT '0' COMMENT '排序',
  `slide_type` varchar(50) NOT NULL DEFAULT 'roll' COMMENT '图片变换方式''roll'',''shade'',默认是''roll''',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  `seller_theme` varchar(20) NOT NULL,
  `install_img` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>