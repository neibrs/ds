<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_value_card_type`;");
E_C("CREATE TABLE `dsc_value_card_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `name` varchar(180) DEFAULT NULL COMMENT '类型名称',
  `vc_desc` varchar(255) DEFAULT NULL COMMENT '描述',
  `vc_value` decimal(10,0) NOT NULL COMMENT '面值',
  `vc_prefix` varchar(10) NOT NULL,
  `vc_dis` decimal(10,2) NOT NULL DEFAULT '1.00' COMMENT '折扣率',
  `vc_limit` tinyint(5) NOT NULL DEFAULT '1' COMMENT '限制数量',
  `use_condition` tinyint(1) NOT NULL DEFAULT '0' COMMENT '使用条件',
  `use_merchants` varchar(255) NOT NULL DEFAULT 'self' COMMENT '可使用店铺',
  `spec_goods` varchar(255) NOT NULL COMMENT '指定商品',
  `spec_cat` varchar(255) NOT NULL COMMENT '指定分类',
  `vc_indate` tinyint(3) NOT NULL COMMENT '有效期单位为自然月',
  `is_rec` tinyint(1) NOT NULL DEFAULT '0' COMMENT '可否充值',
  `add_time` int(11) NOT NULL COMMENT '储值卡类型新增时间',
  PRIMARY KEY (`id`),
  KEY `use_condition` (`use_condition`),
  KEY `is_rec` (`is_rec`),
  KEY `vc_indate` (`vc_indate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>