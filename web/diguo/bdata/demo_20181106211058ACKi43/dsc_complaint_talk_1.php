<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_complaint_talk`;");
E_C("CREATE TABLE `dsc_complaint_talk` (
  `talk_id` int(10) NOT NULL AUTO_INCREMENT,
  `complaint_id` int(10) unsigned NOT NULL,
  `talk_member_id` int(10) unsigned NOT NULL,
  `talk_member_name` varchar(30) NOT NULL,
  `talk_member_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `talk_content` varchar(255) NOT NULL,
  `talk_state` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  `talk_time` int(10) NOT NULL DEFAULT '0',
  `view_state` varchar(60) NOT NULL,
  PRIMARY KEY (`talk_id`),
  KEY `complaint_id` (`complaint_id`),
  KEY `talk_member_id` (`talk_member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>