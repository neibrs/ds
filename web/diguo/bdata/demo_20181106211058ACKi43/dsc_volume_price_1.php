<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_volume_price`;");
E_C("CREATE TABLE `dsc_volume_price` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price_type` tinyint(1) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `volume_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `volume_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `price_type` (`price_type`),
  KEY `volume_price` (`volume_price`),
  KEY `volume_number` (`volume_number`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_volume_price` values('1','1','907','11','6.00');");
E_D("replace into `dsc_volume_price` values('2','1','907','12','5.00');");
E_D("replace into `dsc_volume_price` values('3','1','907','14','4.00');");

require("../../inc/footer.php");
?>