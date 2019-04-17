<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_account_log`;");
E_C("CREATE TABLE `dsc_account_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `deposit_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `rank_points` int(10) NOT NULL DEFAULT '0',
  `pay_points` int(10) NOT NULL DEFAULT '0',
  `change_time` int(10) unsigned NOT NULL DEFAULT '0',
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  KEY `rank_points` (`rank_points`),
  KEY `pay_points` (`pay_points`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_account_log` values('1','68','0.00','0.00','0.00','2','0','1508432007',0x52454749535445525f414646494c49415445,'99');");
E_D("replace into `dsc_account_log` values('2','94','122222.00','0.00','0.00','122222','222222','1508482180',0xe38090e5b9b3e58fb0e6938de4bd9ce38091e6b58be8af95,'2');");
E_D("replace into `dsc_account_log` values('3','94','-325.00','0.00','0.00','0','0','1508482271',0xe694afe4bb98e8aea2e58d952032303137313032303232353236353131313636,'99');");
E_D("replace into `dsc_account_log` values('4','94','-145.00','0.00','0.00','0','0','1508486827',0xe694afe4bb98e8aea2e58d952032303137313032313030303939343634363633,'99');");
E_D("replace into `dsc_account_log` values('5','114','0.00','0.00','0.00','1','1','1508742381',0xe6b3a8e5868ce98081e7a7afe58886,'99');");
E_D("replace into `dsc_account_log` values('6','115','0.00','0.00','0.00','1','1','1508743161',0xe6b3a8e5868ce98081e7a7afe58886,'99');");
E_D("replace into `dsc_account_log` values('7','94','-145.00','0.00','0.00','0','0','1508743526',0xe694afe4bb98e8aea2e58d952032303137313032333233333332313436333631,'99');");
E_D("replace into `dsc_account_log` values('8','117','0.00','0.00','0.00','1','1','1509566210',0xe6b3a8e5868ce98081e7a7afe58886,'99');");
E_D("replace into `dsc_account_log` values('9','0','0.00','0.00','0.00','1','1','1509571728',0xe6b3a8e5868ce98081e7a7afe58886,'99');");
E_D("replace into `dsc_account_log` values('11','120','0.00','0.00','0.00','1','1','1514594264',0xe6b3a8e5868ce98081e7a7afe58886,'99');");
E_D("replace into `dsc_account_log` values('12','121','0.00','0.00','0.00','1','1','1526795516',0xe6b3a8e5868ce98081e7a7afe58886,'99');");

require("../../inc/footer.php");
?>