<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_bargain_statistics`;");
E_C("CREATE TABLE `dsc_bargain_statistics` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '砍价记录id',
  `bs_id` mediumint(8) NOT NULL COMMENT '创建活动id',
  `user_id` mediumint(8) NOT NULL COMMENT '会员id',
  `subtract_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '砍掉商品价格',
  `add_time` int(10) DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>