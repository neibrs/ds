<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_return_extend`;");
E_C("CREATE TABLE `dsc_order_return_extend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ret_id` int(10) unsigned NOT NULL,
  `return_number` mediumint(5) unsigned NOT NULL,
  `aftersn` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ret_id` (`ret_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>