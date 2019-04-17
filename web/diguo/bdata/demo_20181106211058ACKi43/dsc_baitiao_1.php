<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_baitiao`;");
E_C("CREATE TABLE `dsc_baitiao` (
  `baitiao_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '白条金额',
  `repay_term` varchar(50) NOT NULL COMMENT '还款期限',
  `over_repay_trem` int(10) NOT NULL DEFAULT '0' COMMENT '超过还款期限的天数',
  `add_time` varchar(50) NOT NULL,
  PRIMARY KEY (`baitiao_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>