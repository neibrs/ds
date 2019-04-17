<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_alidayu_configure`;");
E_C("CREATE TABLE `dsc_alidayu_configure` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `temp_id` varchar(255) NOT NULL,
  `temp_content` varchar(255) NOT NULL,
  `add_time` int(15) NOT NULL,
  `set_sign` varchar(255) NOT NULL,
  `send_time` varchar(255) NOT NULL,
  `signature` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `temp_id` (`temp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>