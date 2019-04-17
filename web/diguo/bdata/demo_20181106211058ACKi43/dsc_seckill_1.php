<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seckill`;");
E_C("CREATE TABLE `dsc_seckill` (
  `sec_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '秒杀活动自增ID',
  `ru_id` int(10) unsigned NOT NULL COMMENT '商家ID',
  `acti_title` varchar(50) NOT NULL COMMENT '秒杀活动标题',
  `begin_time` int(11) NOT NULL,
  `is_putaway` tinyint(1) NOT NULL DEFAULT '1' COMMENT '上下架',
  `acti_time` int(11) NOT NULL COMMENT '秒杀活动日期',
  `add_time` int(11) NOT NULL COMMENT '秒杀活动添加时间',
  `review_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '审核状态',
  PRIMARY KEY (`sec_id`),
  KEY `ru_id` (`ru_id`),
  KEY `review_status` (`review_status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seckill` values('1','0',0xe698a5e5ada3e69c8de8a385e5a4a7e7a792e69d80e6b4bbe58aa8,'0','1','1617782400','1490848696','3');");
E_D("replace into `dsc_seckill` values('2','0',0xe698a5e5ada3e5aeb6e794b5e5aeb6e585b7e796afe78b82e7a792e69d80,'0','1','1618473600','1490899357','3');");

require("../../inc/footer.php");
?>