<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_products`;");
E_C("CREATE TABLE `dsc_wholesale_products` (
  `product_id` int(10) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_attr` varchar(50) DEFAULT NULL,
  `product_sn` varchar(60) DEFAULT NULL,
  `product_number` smallint(5) unsigned DEFAULT '0',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `product_sn` (`product_sn`) USING BTREE,
  KEY `admin_id` (`admin_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_products` values('1','621',0x34,0x454353303030363231675f7031,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('2','621',0x35,0x454353303030363231675f7032,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('3','621',0x36,0x454353303030363231675f7033,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('4','648',0x3132,0x454353303030363438675f7034,'100','0');");
E_D("replace into `dsc_wholesale_products` values('5','648',0x3133,0x454353303030363438675f7035,'100','0');");
E_D("replace into `dsc_wholesale_products` values('6','648',0x3134,0x454353303030363438675f7036,'100','0');");
E_D("replace into `dsc_wholesale_products` values('7','805',0x3135,0x454353303030383035675f7037,'100','0');");
E_D("replace into `dsc_wholesale_products` values('8','805',0x3136,0x454353303030383035675f7038,'100','0');");
E_D("replace into `dsc_wholesale_products` values('9','805',0x3137,0x454353303030383035675f7039,'100','0');");
E_D("replace into `dsc_wholesale_products` values('10','803',0x3138,0x454353303030383033675f703130,'100','0');");
E_D("replace into `dsc_wholesale_products` values('11','803',0x3139,0x454353303030383033675f703131,'100','0');");
E_D("replace into `dsc_wholesale_products` values('12','803',0x3230,0x454353303030383033675f703132,'100','0');");
E_D("replace into `dsc_wholesale_products` values('13','809',0x3231,0x454353303030383039675f703133,'100','0');");
E_D("replace into `dsc_wholesale_products` values('14','809',0x3232,0x454353303030383039675f703134,'100','0');");
E_D("replace into `dsc_wholesale_products` values('15','809',0x3233,0x454353303030383039675f703135,'100','0');");
E_D("replace into `dsc_wholesale_products` values('16','812',0x3234,0x454353303030383132675f703136,'100','0');");
E_D("replace into `dsc_wholesale_products` values('17','812',0x3235,0x454353303030383132675f703137,'100','0');");
E_D("replace into `dsc_wholesale_products` values('18','812',0x3236,0x454353303030383132675f703138,'100','0');");
E_D("replace into `dsc_wholesale_products` values('19','812',0x3237,0x454353303030383132675f703139,'100','0');");
E_D("replace into `dsc_wholesale_products` values('20','810',0x3238,0x454353303030383130675f703230,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('21','810',0x3239,0x454353303030383130675f703231,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('22','810',0x3330,0x454353303030383130675f703232,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('23','862',0x3331,0x454353303030383632675f703233,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('24','862',0x3332,0x454353303030383632675f703234,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('25','862',0x3333,0x454353303030383632675f703235,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('26','625',0x3334,0x454353303030363235675f703236,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('27','625',0x3335,0x454353303030363235675f703237,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('28','625',0x3336,0x454353303030363235675f703238,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('29','625',0x3337,0x454353303030363235675f703239,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('30','629',0x3338,0x454353303030363239675f703330,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('31','629',0x3339,0x454353303030363239675f703331,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('32','629',0x3430,0x454353303030363239675f703332,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('33','629',0x3431,0x454353303030363239675f703333,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('34','635',0x3432,0x454353303030363335675f703334,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('35','635',0x3433,0x454353303030363335675f703335,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('36','635',0x3434,0x454353303030363335675f703336,'10000','0');");
E_D("replace into `dsc_wholesale_products` values('37','780',0x3435,0x454353303030373830675f703337,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('38','780',0x3436,0x454353303030373830675f703338,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('39','780',0x3437,0x454353303030373830675f703339,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('40','780',0x3438,0x454353303030373830675f703430,'1000','0');");
E_D("replace into `dsc_wholesale_products` values('41','780',0x3439,0x454353303030373830675f703431,'1000','0');");

require("../../inc/footer.php");
?>