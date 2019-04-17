<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seller_shopwindow`;");
E_C("CREATE TABLE `dsc_seller_shopwindow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `win_type` smallint(1) NOT NULL COMMENT '橱窗类型0商品列表，1自定义内容',
  `win_goods_type` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `win_order` smallint(6) NOT NULL COMMENT '橱窗排序',
  `win_goods` text COMMENT '橱窗商品',
  `win_name` varchar(50) NOT NULL COMMENT '橱窗名称',
  `win_color` char(10) NOT NULL COMMENT '橱窗色调',
  `win_img` varchar(100) NOT NULL COMMENT '橱窗广告图片，暂时无用',
  `win_img_link` varchar(100) NOT NULL COMMENT '广告图片链接，暂时无用',
  `ru_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商id',
  `is_show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  `win_custom` text NOT NULL COMMENT '店铺自定义橱窗内容',
  `seller_theme` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>