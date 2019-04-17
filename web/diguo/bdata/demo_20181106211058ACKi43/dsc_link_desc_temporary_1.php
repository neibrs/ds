<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_link_desc_temporary`;");
E_C("CREATE TABLE `dsc_link_desc_temporary` (
  `goods_id` text NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>