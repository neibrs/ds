<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_pay_card_type`;");
E_C("CREATE TABLE `dsc_pay_card_type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(40) NOT NULL,
  `type_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `type_prefix` varchar(10) NOT NULL,
  `use_end_date` varchar(60) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>