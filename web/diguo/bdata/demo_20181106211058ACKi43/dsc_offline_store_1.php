<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_offline_store`;");
E_C("CREATE TABLE `dsc_offline_store` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) NOT NULL DEFAULT '0',
  `stores_user` varchar(60) NOT NULL,
  `stores_pwd` varchar(32) NOT NULL,
  `stores_name` varchar(60) NOT NULL,
  `country` int(10) NOT NULL DEFAULT '0',
  `province` int(10) NOT NULL DEFAULT '0',
  `city` int(10) NOT NULL DEFAULT '0',
  `district` int(10) NOT NULL DEFAULT '0',
  `street` int(10) unsigned NOT NULL DEFAULT '0',
  `stores_address` varchar(255) NOT NULL,
  `stores_tel` varchar(60) NOT NULL,
  `stores_opening_hours` varchar(255) NOT NULL,
  `stores_traffic_line` varchar(255) NOT NULL,
  `stores_img` varchar(255) NOT NULL,
  `is_confirm` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(11) NOT NULL,
  `ec_salt` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ru_id` (`ru_id`),
  KEY `stores_user` (`stores_user`),
  KEY `ec_salt` (`ec_salt`),
  KEY `is_confirm` (`is_confirm`),
  KEY `country` (`country`),
  KEY `province` (`province`),
  KEY `city` (`city`),
  KEY `district` (`district`),
  KEY `street` (`street`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_offline_store` values('1','0','','',0xe699aee9998032e58fb7,'1','25','321','2709','0',0xe88ab1e59bade8b7af383838e58fb7,0x3135383538353839393838,0x383a3030202d2032303a3030,'',0x646174612f6f66666c696e655f73746f72652f313439373437303439363036323136313331342e66772e706e67,'1','1497470496','');");

require("../../inc/footer.php");
?>