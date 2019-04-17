<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_lib_cat`;");
E_C("CREATE TABLE `dsc_goods_lib_cat` (
  `cat_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '自增ID号',
  `parent_id` mediumint(8) NOT NULL COMMENT '父类ID号',
  `cat_name` varchar(50) NOT NULL COMMENT '商品库商品分类名称',
  `is_show` tinyint(1) NOT NULL COMMENT '是否显示',
  `sort_order` tinyint(3) NOT NULL COMMENT '排序',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>