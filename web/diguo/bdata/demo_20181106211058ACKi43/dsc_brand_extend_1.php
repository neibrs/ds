<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_brand_extend`;");
E_C("CREATE TABLE `dsc_brand_extend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL COMMENT '品牌id',
  `is_recommend` tinyint(1) NOT NULL DEFAULT '0' COMMENT ' 是否推荐0否1是',
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`),
  KEY `is_recommend` (`is_recommend`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_brand_extend` values('1','209','1');");
E_D("replace into `dsc_brand_extend` values('2','204','1');");
E_D("replace into `dsc_brand_extend` values('3','203','1');");
E_D("replace into `dsc_brand_extend` values('4','200','1');");
E_D("replace into `dsc_brand_extend` values('5','195','1');");
E_D("replace into `dsc_brand_extend` values('6','71','1');");
E_D("replace into `dsc_brand_extend` values('7','72','1');");
E_D("replace into `dsc_brand_extend` values('8','73','1');");
E_D("replace into `dsc_brand_extend` values('9','74','1');");
E_D("replace into `dsc_brand_extend` values('10','75','1');");
E_D("replace into `dsc_brand_extend` values('11','76','1');");
E_D("replace into `dsc_brand_extend` values('12','77','1');");
E_D("replace into `dsc_brand_extend` values('13','78','1');");
E_D("replace into `dsc_brand_extend` values('14','79','1');");
E_D("replace into `dsc_brand_extend` values('15','80','1');");
E_D("replace into `dsc_brand_extend` values('16','81','1');");
E_D("replace into `dsc_brand_extend` values('17','82','1');");
E_D("replace into `dsc_brand_extend` values('18','83','1');");
E_D("replace into `dsc_brand_extend` values('19','84','1');");
E_D("replace into `dsc_brand_extend` values('20','85','1');");
E_D("replace into `dsc_brand_extend` values('21','86','1');");
E_D("replace into `dsc_brand_extend` values('22','87','1');");
E_D("replace into `dsc_brand_extend` values('23','88','1');");
E_D("replace into `dsc_brand_extend` values('24','210','1');");
E_D("replace into `dsc_brand_extend` values('25','192','1');");
E_D("replace into `dsc_brand_extend` values('26','160','1');");
E_D("replace into `dsc_brand_extend` values('27','154','1');");
E_D("replace into `dsc_brand_extend` values('28','149','1');");
E_D("replace into `dsc_brand_extend` values('29','210','0');");
E_D("replace into `dsc_brand_extend` values('30','194','1');");
E_D("replace into `dsc_brand_extend` values('31','190','1');");
E_D("replace into `dsc_brand_extend` values('32','189','1');");
E_D("replace into `dsc_brand_extend` values('33','188','1');");
E_D("replace into `dsc_brand_extend` values('34','186','1');");
E_D("replace into `dsc_brand_extend` values('35','180','1');");
E_D("replace into `dsc_brand_extend` values('36','178','1');");
E_D("replace into `dsc_brand_extend` values('37','176','1');");
E_D("replace into `dsc_brand_extend` values('38','167','1');");
E_D("replace into `dsc_brand_extend` values('39','150','1');");
E_D("replace into `dsc_brand_extend` values('40','151','1');");
E_D("replace into `dsc_brand_extend` values('41','152','1');");
E_D("replace into `dsc_brand_extend` values('42','153','1');");
E_D("replace into `dsc_brand_extend` values('43','155','1');");
E_D("replace into `dsc_brand_extend` values('44','156','1');");
E_D("replace into `dsc_brand_extend` values('45','158','0');");
E_D("replace into `dsc_brand_extend` values('46','157','1');");
E_D("replace into `dsc_brand_extend` values('47','159','1');");
E_D("replace into `dsc_brand_extend` values('48','163','1');");
E_D("replace into `dsc_brand_extend` values('49','164','1');");
E_D("replace into `dsc_brand_extend` values('50','166','1');");
E_D("replace into `dsc_brand_extend` values('51','131','1');");
E_D("replace into `dsc_brand_extend` values('52','132','1');");
E_D("replace into `dsc_brand_extend` values('53','134','1');");
E_D("replace into `dsc_brand_extend` values('54','136','1');");
E_D("replace into `dsc_brand_extend` values('55','137','1');");
E_D("replace into `dsc_brand_extend` values('56','138','1');");
E_D("replace into `dsc_brand_extend` values('57','139','1');");
E_D("replace into `dsc_brand_extend` values('58','140','1');");
E_D("replace into `dsc_brand_extend` values('59','141','1');");
E_D("replace into `dsc_brand_extend` values('60','142','1');");
E_D("replace into `dsc_brand_extend` values('61','143','1');");
E_D("replace into `dsc_brand_extend` values('62','144','1');");
E_D("replace into `dsc_brand_extend` values('63','145','1');");
E_D("replace into `dsc_brand_extend` values('64','147','1');");
E_D("replace into `dsc_brand_extend` values('65','148','1');");
E_D("replace into `dsc_brand_extend` values('66','110','1');");
E_D("replace into `dsc_brand_extend` values('67','111','1');");
E_D("replace into `dsc_brand_extend` values('68','112','1');");
E_D("replace into `dsc_brand_extend` values('69','113','1');");
E_D("replace into `dsc_brand_extend` values('70','114','1');");
E_D("replace into `dsc_brand_extend` values('71','115','1');");
E_D("replace into `dsc_brand_extend` values('72','116','1');");
E_D("replace into `dsc_brand_extend` values('73','117','1');");
E_D("replace into `dsc_brand_extend` values('74','118','1');");
E_D("replace into `dsc_brand_extend` values('75','122','1');");
E_D("replace into `dsc_brand_extend` values('76','124','1');");
E_D("replace into `dsc_brand_extend` values('77','125','1');");
E_D("replace into `dsc_brand_extend` values('78','126','1');");
E_D("replace into `dsc_brand_extend` values('79','129','1');");
E_D("replace into `dsc_brand_extend` values('80','130','1');");
E_D("replace into `dsc_brand_extend` values('81','95','1');");
E_D("replace into `dsc_brand_extend` values('82','96','1');");
E_D("replace into `dsc_brand_extend` values('83','97','1');");
E_D("replace into `dsc_brand_extend` values('84','98','1');");
E_D("replace into `dsc_brand_extend` values('85','99','1');");
E_D("replace into `dsc_brand_extend` values('86','100','1');");
E_D("replace into `dsc_brand_extend` values('87','101','1');");
E_D("replace into `dsc_brand_extend` values('88','102','0');");
E_D("replace into `dsc_brand_extend` values('89','103','1');");
E_D("replace into `dsc_brand_extend` values('90','104','1');");
E_D("replace into `dsc_brand_extend` values('91','105','1');");
E_D("replace into `dsc_brand_extend` values('92','106','1');");
E_D("replace into `dsc_brand_extend` values('93','107','1');");
E_D("replace into `dsc_brand_extend` values('94','108','1');");
E_D("replace into `dsc_brand_extend` values('95','109','1');");
E_D("replace into `dsc_brand_extend` values('96','89','1');");
E_D("replace into `dsc_brand_extend` values('97','90','1');");
E_D("replace into `dsc_brand_extend` values('98','91','1');");
E_D("replace into `dsc_brand_extend` values('99','92','0');");
E_D("replace into `dsc_brand_extend` values('100','93','1');");
E_D("replace into `dsc_brand_extend` values('101','94','1');");
E_D("replace into `dsc_brand_extend` values('102','211','0');");
E_D("replace into `dsc_brand_extend` values('103','210','1');");
E_D("replace into `dsc_brand_extend` values('104','211','0');");
E_D("replace into `dsc_brand_extend` values('105','212','0');");

require("../../inc/footer.php");
?>