<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_area_region`;");
E_C("CREATE TABLE `dsc_area_region` (
  `shipping_area_id` smallint(8) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(8) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) NOT NULL,
  PRIMARY KEY (`shipping_area_id`,`region_id`),
  KEY `region_id` (`region_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_area_region` values('1','2','0');");
E_D("replace into `dsc_area_region` values('1','3','0');");
E_D("replace into `dsc_area_region` values('1','4','0');");
E_D("replace into `dsc_area_region` values('1','5','0');");
E_D("replace into `dsc_area_region` values('1','6','0');");
E_D("replace into `dsc_area_region` values('1','7','0');");
E_D("replace into `dsc_area_region` values('1','8','0');");
E_D("replace into `dsc_area_region` values('1','9','0');");
E_D("replace into `dsc_area_region` values('1','10','0');");
E_D("replace into `dsc_area_region` values('1','11','0');");
E_D("replace into `dsc_area_region` values('1','12','0');");
E_D("replace into `dsc_area_region` values('1','13','0');");
E_D("replace into `dsc_area_region` values('1','14','0');");
E_D("replace into `dsc_area_region` values('1','15','0');");
E_D("replace into `dsc_area_region` values('1','16','0');");
E_D("replace into `dsc_area_region` values('1','17','0');");
E_D("replace into `dsc_area_region` values('1','18','0');");
E_D("replace into `dsc_area_region` values('1','19','0');");
E_D("replace into `dsc_area_region` values('1','20','0');");
E_D("replace into `dsc_area_region` values('1','21','0');");
E_D("replace into `dsc_area_region` values('1','22','0');");
E_D("replace into `dsc_area_region` values('1','23','0');");
E_D("replace into `dsc_area_region` values('1','24','0');");
E_D("replace into `dsc_area_region` values('1','25','0');");
E_D("replace into `dsc_area_region` values('1','26','0');");
E_D("replace into `dsc_area_region` values('1','27','0');");
E_D("replace into `dsc_area_region` values('1','28','0');");
E_D("replace into `dsc_area_region` values('1','29','0');");
E_D("replace into `dsc_area_region` values('1','30','0');");
E_D("replace into `dsc_area_region` values('1','31','0');");
E_D("replace into `dsc_area_region` values('1','32','0');");
E_D("replace into `dsc_area_region` values('1','33','0');");
E_D("replace into `dsc_area_region` values('1','34','0');");
E_D("replace into `dsc_area_region` values('1','35','0');");
E_D("replace into `dsc_area_region` values('2','2','0');");
E_D("replace into `dsc_area_region` values('2','3','0');");
E_D("replace into `dsc_area_region` values('2','4','0');");
E_D("replace into `dsc_area_region` values('2','5','0');");
E_D("replace into `dsc_area_region` values('2','6','0');");
E_D("replace into `dsc_area_region` values('2','7','0');");
E_D("replace into `dsc_area_region` values('2','8','0');");
E_D("replace into `dsc_area_region` values('2','9','0');");
E_D("replace into `dsc_area_region` values('2','10','0');");
E_D("replace into `dsc_area_region` values('2','11','0');");
E_D("replace into `dsc_area_region` values('2','12','0');");
E_D("replace into `dsc_area_region` values('2','13','0');");
E_D("replace into `dsc_area_region` values('2','14','0');");
E_D("replace into `dsc_area_region` values('2','15','0');");
E_D("replace into `dsc_area_region` values('2','16','0');");
E_D("replace into `dsc_area_region` values('2','17','0');");
E_D("replace into `dsc_area_region` values('2','18','0');");
E_D("replace into `dsc_area_region` values('2','19','0');");
E_D("replace into `dsc_area_region` values('2','20','0');");
E_D("replace into `dsc_area_region` values('2','21','0');");
E_D("replace into `dsc_area_region` values('2','22','0');");
E_D("replace into `dsc_area_region` values('2','23','0');");
E_D("replace into `dsc_area_region` values('2','24','0');");
E_D("replace into `dsc_area_region` values('2','25','0');");
E_D("replace into `dsc_area_region` values('2','26','0');");
E_D("replace into `dsc_area_region` values('2','27','0');");
E_D("replace into `dsc_area_region` values('2','28','0');");
E_D("replace into `dsc_area_region` values('2','29','0');");
E_D("replace into `dsc_area_region` values('2','30','0');");
E_D("replace into `dsc_area_region` values('2','31','0');");
E_D("replace into `dsc_area_region` values('2','32','0');");
E_D("replace into `dsc_area_region` values('2','33','0');");
E_D("replace into `dsc_area_region` values('2','34','0');");
E_D("replace into `dsc_area_region` values('2','35','0');");
E_D("replace into `dsc_area_region` values('43','2','0');");
E_D("replace into `dsc_area_region` values('43','3','0');");
E_D("replace into `dsc_area_region` values('43','4','0');");
E_D("replace into `dsc_area_region` values('43','5','0');");
E_D("replace into `dsc_area_region` values('43','6','0');");
E_D("replace into `dsc_area_region` values('43','7','0');");
E_D("replace into `dsc_area_region` values('43','8','0');");
E_D("replace into `dsc_area_region` values('43','9','0');");
E_D("replace into `dsc_area_region` values('43','10','0');");
E_D("replace into `dsc_area_region` values('43','11','0');");
E_D("replace into `dsc_area_region` values('43','12','0');");
E_D("replace into `dsc_area_region` values('43','13','0');");
E_D("replace into `dsc_area_region` values('43','14','0');");
E_D("replace into `dsc_area_region` values('43','15','0');");
E_D("replace into `dsc_area_region` values('43','16','0');");
E_D("replace into `dsc_area_region` values('43','17','0');");
E_D("replace into `dsc_area_region` values('43','18','0');");
E_D("replace into `dsc_area_region` values('43','19','0');");
E_D("replace into `dsc_area_region` values('43','20','0');");
E_D("replace into `dsc_area_region` values('43','21','0');");
E_D("replace into `dsc_area_region` values('43','22','0');");
E_D("replace into `dsc_area_region` values('43','23','0');");
E_D("replace into `dsc_area_region` values('43','24','0');");
E_D("replace into `dsc_area_region` values('43','25','0');");
E_D("replace into `dsc_area_region` values('43','26','0');");
E_D("replace into `dsc_area_region` values('43','27','0');");
E_D("replace into `dsc_area_region` values('43','28','0');");
E_D("replace into `dsc_area_region` values('43','29','0');");
E_D("replace into `dsc_area_region` values('43','30','0');");
E_D("replace into `dsc_area_region` values('43','31','0');");
E_D("replace into `dsc_area_region` values('43','32','0');");
E_D("replace into `dsc_area_region` values('43','33','0');");
E_D("replace into `dsc_area_region` values('43','34','0');");
E_D("replace into `dsc_area_region` values('43','35','0');");
E_D("replace into `dsc_area_region` values('44','2','0');");
E_D("replace into `dsc_area_region` values('44','3','0');");
E_D("replace into `dsc_area_region` values('44','4','0');");
E_D("replace into `dsc_area_region` values('44','5','0');");
E_D("replace into `dsc_area_region` values('44','6','0');");
E_D("replace into `dsc_area_region` values('44','7','0');");
E_D("replace into `dsc_area_region` values('44','8','0');");
E_D("replace into `dsc_area_region` values('44','9','0');");
E_D("replace into `dsc_area_region` values('44','10','0');");
E_D("replace into `dsc_area_region` values('44','11','0');");
E_D("replace into `dsc_area_region` values('44','12','0');");
E_D("replace into `dsc_area_region` values('44','13','0');");
E_D("replace into `dsc_area_region` values('44','14','0');");
E_D("replace into `dsc_area_region` values('44','15','0');");
E_D("replace into `dsc_area_region` values('44','16','0');");
E_D("replace into `dsc_area_region` values('44','17','0');");
E_D("replace into `dsc_area_region` values('44','18','0');");
E_D("replace into `dsc_area_region` values('44','19','0');");
E_D("replace into `dsc_area_region` values('44','20','0');");
E_D("replace into `dsc_area_region` values('44','21','0');");
E_D("replace into `dsc_area_region` values('44','22','0');");
E_D("replace into `dsc_area_region` values('44','23','0');");
E_D("replace into `dsc_area_region` values('44','24','0');");
E_D("replace into `dsc_area_region` values('44','25','0');");
E_D("replace into `dsc_area_region` values('44','26','0');");
E_D("replace into `dsc_area_region` values('44','27','0');");
E_D("replace into `dsc_area_region` values('44','28','0');");
E_D("replace into `dsc_area_region` values('44','29','0');");
E_D("replace into `dsc_area_region` values('44','30','0');");
E_D("replace into `dsc_area_region` values('44','31','0');");
E_D("replace into `dsc_area_region` values('44','32','0');");
E_D("replace into `dsc_area_region` values('44','33','0');");
E_D("replace into `dsc_area_region` values('44','34','0');");
E_D("replace into `dsc_area_region` values('44','35','0');");
E_D("replace into `dsc_area_region` values('45','2','0');");
E_D("replace into `dsc_area_region` values('45','3','0');");
E_D("replace into `dsc_area_region` values('45','4','0');");
E_D("replace into `dsc_area_region` values('45','5','0');");
E_D("replace into `dsc_area_region` values('45','6','0');");
E_D("replace into `dsc_area_region` values('45','7','0');");
E_D("replace into `dsc_area_region` values('45','8','0');");
E_D("replace into `dsc_area_region` values('45','9','0');");
E_D("replace into `dsc_area_region` values('45','10','0');");
E_D("replace into `dsc_area_region` values('45','11','0');");
E_D("replace into `dsc_area_region` values('45','12','0');");
E_D("replace into `dsc_area_region` values('45','13','0');");
E_D("replace into `dsc_area_region` values('45','14','0');");
E_D("replace into `dsc_area_region` values('45','15','0');");
E_D("replace into `dsc_area_region` values('45','16','0');");
E_D("replace into `dsc_area_region` values('45','17','0');");
E_D("replace into `dsc_area_region` values('45','18','0');");
E_D("replace into `dsc_area_region` values('45','19','0');");
E_D("replace into `dsc_area_region` values('45','20','0');");
E_D("replace into `dsc_area_region` values('45','21','0');");
E_D("replace into `dsc_area_region` values('45','22','0');");
E_D("replace into `dsc_area_region` values('45','23','0');");
E_D("replace into `dsc_area_region` values('45','24','0');");
E_D("replace into `dsc_area_region` values('45','25','0');");
E_D("replace into `dsc_area_region` values('45','26','0');");
E_D("replace into `dsc_area_region` values('45','27','0');");
E_D("replace into `dsc_area_region` values('45','28','0');");
E_D("replace into `dsc_area_region` values('45','29','0');");
E_D("replace into `dsc_area_region` values('45','30','0');");
E_D("replace into `dsc_area_region` values('45','31','0');");
E_D("replace into `dsc_area_region` values('45','32','0');");
E_D("replace into `dsc_area_region` values('45','33','0');");
E_D("replace into `dsc_area_region` values('45','34','0');");
E_D("replace into `dsc_area_region` values('45','35','0');");
E_D("replace into `dsc_area_region` values('46','2','0');");
E_D("replace into `dsc_area_region` values('46','3','0');");
E_D("replace into `dsc_area_region` values('46','4','0');");
E_D("replace into `dsc_area_region` values('46','5','0');");
E_D("replace into `dsc_area_region` values('46','6','0');");
E_D("replace into `dsc_area_region` values('46','7','0');");
E_D("replace into `dsc_area_region` values('46','8','0');");
E_D("replace into `dsc_area_region` values('46','9','0');");
E_D("replace into `dsc_area_region` values('46','10','0');");
E_D("replace into `dsc_area_region` values('46','11','0');");
E_D("replace into `dsc_area_region` values('46','12','0');");
E_D("replace into `dsc_area_region` values('46','13','0');");
E_D("replace into `dsc_area_region` values('46','14','0');");
E_D("replace into `dsc_area_region` values('46','15','0');");
E_D("replace into `dsc_area_region` values('46','16','0');");
E_D("replace into `dsc_area_region` values('46','17','0');");
E_D("replace into `dsc_area_region` values('46','18','0');");
E_D("replace into `dsc_area_region` values('46','19','0');");
E_D("replace into `dsc_area_region` values('46','20','0');");
E_D("replace into `dsc_area_region` values('46','21','0');");
E_D("replace into `dsc_area_region` values('46','22','0');");
E_D("replace into `dsc_area_region` values('46','23','0');");
E_D("replace into `dsc_area_region` values('46','24','0');");
E_D("replace into `dsc_area_region` values('46','25','0');");
E_D("replace into `dsc_area_region` values('46','26','0');");
E_D("replace into `dsc_area_region` values('46','27','0');");
E_D("replace into `dsc_area_region` values('46','28','0');");
E_D("replace into `dsc_area_region` values('46','29','0');");
E_D("replace into `dsc_area_region` values('46','30','0');");
E_D("replace into `dsc_area_region` values('46','31','0');");
E_D("replace into `dsc_area_region` values('46','32','0');");
E_D("replace into `dsc_area_region` values('46','33','0');");
E_D("replace into `dsc_area_region` values('46','34','0');");
E_D("replace into `dsc_area_region` values('46','35','0');");
E_D("replace into `dsc_area_region` values('47','1','1');");
E_D("replace into `dsc_area_region` values('48','1','1');");
E_D("replace into `dsc_area_region` values('49','1','2');");
E_D("replace into `dsc_area_region` values('50','1','3');");
E_D("replace into `dsc_area_region` values('51','1','4');");
E_D("replace into `dsc_area_region` values('62','1','5');");
E_D("replace into `dsc_area_region` values('52','1','6');");
E_D("replace into `dsc_area_region` values('53','1','9');");
E_D("replace into `dsc_area_region` values('54','1','10');");
E_D("replace into `dsc_area_region` values('55','1','11');");
E_D("replace into `dsc_area_region` values('56','1','12');");
E_D("replace into `dsc_area_region` values('57','1','13');");
E_D("replace into `dsc_area_region` values('58','1','14');");
E_D("replace into `dsc_area_region` values('59','1','15');");
E_D("replace into `dsc_area_region` values('60','1','16');");
E_D("replace into `dsc_area_region` values('61','1','18');");
E_D("replace into `dsc_area_region` values('64','1058','0');");
E_D("replace into `dsc_area_region` values('64','1059','0');");
E_D("replace into `dsc_area_region` values('64','1060','0');");
E_D("replace into `dsc_area_region` values('64','1067','0');");
E_D("replace into `dsc_area_region` values('64','1071','0');");

require("../../inc/footer.php");
?>