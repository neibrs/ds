<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_link_brand`;");
E_C("CREATE TABLE `dsc_link_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bid` smallint(8) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bid` (`bid`),
  KEY `brand_id` (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_link_brand` values('1','1','114');");
E_D("replace into `dsc_link_brand` values('2','2','154');");
E_D("replace into `dsc_link_brand` values('3','3','192');");
E_D("replace into `dsc_link_brand` values('4','4','160');");
E_D("replace into `dsc_link_brand` values('5','6','155');");
E_D("replace into `dsc_link_brand` values('6','7','132');");
E_D("replace into `dsc_link_brand` values('7','8','81');");
E_D("replace into `dsc_link_brand` values('8','9','92');");
E_D("replace into `dsc_link_brand` values('9','10','86');");
E_D("replace into `dsc_link_brand` values('10','11','99');");
E_D("replace into `dsc_link_brand` values('11','12','82');");
E_D("replace into `dsc_link_brand` values('12','13','163');");
E_D("replace into `dsc_link_brand` values('13','14','166');");
E_D("replace into `dsc_link_brand` values('14','15','104');");
E_D("replace into `dsc_link_brand` values('15','16','88');");

require("../../inc/footer.php");
?>