<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_users_real`;");
E_C("CREATE TABLE `dsc_users_real` (
  `real_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` text NOT NULL,
  `real_name` varchar(60) NOT NULL DEFAULT '',
  `bank_mobile` varchar(20) NOT NULL,
  `bank_name` varchar(60) NOT NULL,
  `bank_card` varchar(255) NOT NULL DEFAULT '',
  `self_num` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL,
  `review_content` varchar(200) NOT NULL,
  `review_status` tinyint(1) NOT NULL DEFAULT '0',
  `review_time` int(11) NOT NULL,
  `user_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `front_of_id_card` varchar(60) NOT NULL COMMENT '身份证正面',
  `reverse_of_id_card` varchar(60) NOT NULL COMMENT '身份证反面',
  PRIMARY KEY (`real_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>