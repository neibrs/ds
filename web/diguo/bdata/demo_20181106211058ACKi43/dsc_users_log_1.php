<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_users_log`;");
E_C("CREATE TABLE `dsc_users_log` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `change_time` int(10) NOT NULL DEFAULT '0',
  `change_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL,
  `change_city` varchar(255) NOT NULL,
  `logon_service` varchar(60) NOT NULL DEFAULT 'pc',
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_users_log` values('1','77','57','1508436272','8',0x3130312e32332e3233392e3136,0xe6b2b3e58c97e79c81e982afe983b8e5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('2','77','0','1508436311','1',0x3130312e32332e3233392e3136,0xe6b2b3e58c97e79c81e982afe983b8e5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('3','77','0','1508436400','1',0x3130312e32332e3233392e3136,0xe6b2b3e58c97e79c81e982afe983b8e5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('4','3','0','1508440703','1',0x3130332e3231342e38342e323433,0xe4ba9ae5a4aae59cb0e58cba2020,0x7063);");
E_D("replace into `dsc_users_log` values('5','92','0','1508442336','3',0x34322e3233342e35322e3837,0xe6b2b3e58d97e79c81e784a6e4bd9ce5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('6','108','57','1508454385','8',0x3130312e32332e3233392e3136,0xe6b2b3e58c97e79c81e982afe983b8e5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('7','108','0','1508454393','1',0x3130312e32332e3233392e3136,0xe6b2b3e58c97e79c81e982afe983b8e5b88220e88194e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('8','94','0','1508482130','1',0x3131322e36362e32312e313531,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('9','94','0','1508486793','1',0x3131322e36362e32312e313531,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('10','94','0','1508742302','1',0x3131322e36362e32392e323033,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('11','114','57','1508742574','6',0x3131322e36362e32392e323033,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('12','94','0','1508743505','1',0x3131322e36362e32392e323033,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('13','94','0','1509085909','1',0x3131322e36362e32392e323133,0xe6b5b7e58d97e79c81e6b5b7e58fa3e5b88220e794b5e4bfa1,0x7063);");
E_D("replace into `dsc_users_log` values('14','18','57','1509559700','8',0x3130332e38352e3134342e313136,0xe4ba9ae5a4aae59cb0e58cba2020,0x7063);");
E_D("replace into `dsc_users_log` values('15','18','0','1509559730','1',0x3130332e38352e3134342e313136,0xe4ba9ae5a4aae59cb0e58cba2020,0x7063);");
E_D("replace into `dsc_users_log` values('16','118','0','1509571744','1',0x3132342e3230352e3230382e323036,0xe58c97e4baace5b88220e794b5e4bfa1e9809a,0x7063);");
E_D("replace into `dsc_users_log` values('17','18','0','1509595660','1',0x3130332e38352e3134342e313136,0xe4ba9ae5a4aae59cb0e58cba2020,0x7063);");
E_D("replace into `dsc_users_log` values('18','16','0','1515380783','1',0x302e302e302e30,'',0x7063);");
E_D("replace into `dsc_users_log` values('19','119','57','1515785017','8',0x302e302e302e30,'',0x7063);");
E_D("replace into `dsc_users_log` values('20','120','57','1515785065','8',0x302e302e302e30,'',0x7063);");
E_D("replace into `dsc_users_log` values('21','94','0','1521253272','1',0x3132372e302e302e31,0xe69cace69cbae59cb0e59d802020,0x7063);");
E_D("replace into `dsc_users_log` values('22','94','0','1521253274','1',0x3132372e302e302e31,0xe69cace69cbae59cb0e59d802020,0x7063);");
E_D("replace into `dsc_users_log` values('23','94','0','1521256199','1',0x3132372e302e302e31,0xe69cace69cbae59cb0e59d802020,0x7063);");
E_D("replace into `dsc_users_log` values('24','94','0','1521256201','1',0x3132372e302e302e31,0xe69cace69cbae59cb0e59d802020,0x7063);");

require("../../inc/footer.php");
?>