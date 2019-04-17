<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seckill_time_bucket`;");
E_C("CREATE TABLE `dsc_seckill_time_bucket` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `begin_time` time NOT NULL COMMENT '开始时间段',
  `end_time` time NOT NULL COMMENT '结束时间段',
  `title` varchar(50) NOT NULL COMMENT '秒杀时段标题',
  PRIMARY KEY (`id`),
  UNIQUE KEY `begin_time` (`begin_time`,`end_time`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seckill_time_bucket` values('1','08:00:00','10:00:00',0x383a3030);");
E_D("replace into `dsc_seckill_time_bucket` values('2','10:00:01','12:00:00',0x31303a3030);");
E_D("replace into `dsc_seckill_time_bucket` values('3','12:00:01','14:00:00',0x31323a3030);");
E_D("replace into `dsc_seckill_time_bucket` values('4','14:00:01','16:00:00',0x31343a3030);");
E_D("replace into `dsc_seckill_time_bucket` values('5','16:00:01','22:00:00',0x31363a3030);");

require("../../inc/footer.php");
?>