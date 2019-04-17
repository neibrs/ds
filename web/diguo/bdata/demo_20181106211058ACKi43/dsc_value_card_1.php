<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_value_card`;");
E_C("CREATE TABLE `dsc_value_card` (
  `vid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `tid` int(10) NOT NULL COMMENT '储值卡类型ID',
  `value_card_sn` varchar(30) NOT NULL COMMENT '储值卡账号',
  `value_card_password` varchar(20) NOT NULL COMMENT '储值卡密码',
  `user_id` int(10) NOT NULL COMMENT '绑定用户ID',
  `vc_value` int(10) NOT NULL,
  `card_money` decimal(10,2) unsigned NOT NULL COMMENT '卡内余额',
  `bind_time` int(11) NOT NULL COMMENT '绑定时间',
  `end_time` int(11) NOT NULL COMMENT '截止日期',
  PRIMARY KEY (`vid`),
  UNIQUE KEY `value_card_sn` (`value_card_sn`),
  KEY `tid` (`tid`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>