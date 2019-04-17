<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `dsc_seckill_goods_remind`;");
E_C("CREATE TABLE `dsc_seckill_goods_remind` (
  `r_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '??????ID',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '??ID',
  `sec_goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '????ID',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '????',
  PRIMARY KEY (`r_id`),
  KEY `user_id` (`user_id`),
  KEY `sec_goods_id` (`sec_goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='?????????'");

require("../../inc/footer.php");
?>