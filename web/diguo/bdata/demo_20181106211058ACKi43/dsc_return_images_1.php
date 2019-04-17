<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_return_images`;");
E_C("CREATE TABLE `dsc_return_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rg_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rec_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  `add_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rec_id` (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `rg_id` (`rg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>