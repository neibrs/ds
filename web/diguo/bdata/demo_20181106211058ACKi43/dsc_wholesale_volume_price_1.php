<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_volume_price`;");
E_C("CREATE TABLE `dsc_wholesale_volume_price` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price_type` tinyint(1) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `volume_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `volume_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `price_type` (`price_type`) USING BTREE,
  KEY `volume_price` (`volume_price`) USING BTREE,
  KEY `volume_number` (`volume_number`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_volume_price` values('1','1','621','10','1950.00');");
E_D("replace into `dsc_wholesale_volume_price` values('2','1','621','20','1900.00');");
E_D("replace into `dsc_wholesale_volume_price` values('3','1','621','50','1800.00');");
E_D("replace into `dsc_wholesale_volume_price` values('4','1','648','20','280.00');");
E_D("replace into `dsc_wholesale_volume_price` values('5','1','648','40','260.00');");
E_D("replace into `dsc_wholesale_volume_price` values('6','1','648','60','240.00');");
E_D("replace into `dsc_wholesale_volume_price` values('7','1','805','10','400.00');");
E_D("replace into `dsc_wholesale_volume_price` values('8','1','805','20','300.00');");
E_D("replace into `dsc_wholesale_volume_price` values('9','1','805','30','200.00');");
E_D("replace into `dsc_wholesale_volume_price` values('10','1','803','20','300.00');");
E_D("replace into `dsc_wholesale_volume_price` values('11','1','803','50','250.00');");
E_D("replace into `dsc_wholesale_volume_price` values('12','1','803','100','200.00');");
E_D("replace into `dsc_wholesale_volume_price` values('13','1','812','10','500.00');");
E_D("replace into `dsc_wholesale_volume_price` values('14','1','812','20','400.00');");
E_D("replace into `dsc_wholesale_volume_price` values('15','1','812','30','300.00');");
E_D("replace into `dsc_wholesale_volume_price` values('16','1','810','100','300.00');");
E_D("replace into `dsc_wholesale_volume_price` values('17','1','810','200','200.00');");
E_D("replace into `dsc_wholesale_volume_price` values('18','1','810','300','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('19','1','862','50','200.00');");
E_D("replace into `dsc_wholesale_volume_price` values('20','1','862','100','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('21','1','625','20','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('22','1','625','50','80.00');");
E_D("replace into `dsc_wholesale_volume_price` values('23','1','629','10','150.00');");
E_D("replace into `dsc_wholesale_volume_price` values('24','1','629','20','140.00');");
E_D("replace into `dsc_wholesale_volume_price` values('25','1','629','30','130.00');");
E_D("replace into `dsc_wholesale_volume_price` values('26','1','635','10','450.00');");
E_D("replace into `dsc_wholesale_volume_price` values('27','1','635','20','420.00');");
E_D("replace into `dsc_wholesale_volume_price` values('28','1','635','30','400.00');");
E_D("replace into `dsc_wholesale_volume_price` values('29','1','780','10','200.00');");
E_D("replace into `dsc_wholesale_volume_price` values('30','1','780','30','150.00');");
E_D("replace into `dsc_wholesale_volume_price` values('31','1','780','40','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('32','1','767','20','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('33','1','767','30','80.00');");
E_D("replace into `dsc_wholesale_volume_price` values('34','1','767','50','50.00');");
E_D("replace into `dsc_wholesale_volume_price` values('35','1','768','10','500.00');");
E_D("replace into `dsc_wholesale_volume_price` values('36','1','768','30','400.00');");
E_D("replace into `dsc_wholesale_volume_price` values('37','1','768','50','300.00');");
E_D("replace into `dsc_wholesale_volume_price` values('38','1','771','10','120.00');");
E_D("replace into `dsc_wholesale_volume_price` values('39','1','771','20','100.00');");
E_D("replace into `dsc_wholesale_volume_price` values('40','1','771','30','80.00');");
E_D("replace into `dsc_wholesale_volume_price` values('41','1','772','10','150.00');");
E_D("replace into `dsc_wholesale_volume_price` values('42','1','772','20','140.00');");
E_D("replace into `dsc_wholesale_volume_price` values('43','1','772','30','100.00');");

require("../../inc/footer.php");
?>