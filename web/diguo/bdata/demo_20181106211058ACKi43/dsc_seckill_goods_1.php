<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seckill_goods`;");
E_C("CREATE TABLE `dsc_seckill_goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sec_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tb_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '秒杀时段ID',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sec_price` decimal(10,2) NOT NULL,
  `sec_num` smallint(5) NOT NULL,
  `sec_limit` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sec_id` (`sec_id`),
  KEY `tb_id` (`tb_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_seckill_goods` values('1','1','1','787','356.00','100','2');");
E_D("replace into `dsc_seckill_goods` values('2','1','1','788','356.00','100','2');");
E_D("replace into `dsc_seckill_goods` values('3','1','1','785','356.00','100','2');");
E_D("replace into `dsc_seckill_goods` values('4','1','1','784','356.00','100','2');");
E_D("replace into `dsc_seckill_goods` values('5','1','1','779','356.00','100','2');");
E_D("replace into `dsc_seckill_goods` values('6','1','5','630','145.00','322','3');");
E_D("replace into `dsc_seckill_goods` values('7','1','5','633','145.00','322','3');");
E_D("replace into `dsc_seckill_goods` values('8','1','5','634','145.00','322','3');");
E_D("replace into `dsc_seckill_goods` values('9','1','5','635','145.00','322','3');");
E_D("replace into `dsc_seckill_goods` values('10','1','5','796','145.00','322','3');");
E_D("replace into `dsc_seckill_goods` values('11','1','2','787','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('12','1','2','788','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('13','1','2','785','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('14','1','2','784','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('15','1','2','786','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('16','1','2','789','204.00','465','3');");
E_D("replace into `dsc_seckill_goods` values('17','1','3','779','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('18','1','3','781','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('19','1','3','780','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('20','1','3','777','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('21','1','3','783','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('22','1','3','782','461.00','794','2');");
E_D("replace into `dsc_seckill_goods` values('30','1','4','868','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('31','1','4','869','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('32','1','4','870','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('33','1','4','871','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('34','1','4','872','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('35','1','4','873','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('36','1','4','874','541.00','654','5');");
E_D("replace into `dsc_seckill_goods` values('37','2','1','659','564.00','213','2');");
E_D("replace into `dsc_seckill_goods` values('39','2','1','656','1641.00','562','2');");
E_D("replace into `dsc_seckill_goods` values('40','2','2','621','2546.00','3423','5');");
E_D("replace into `dsc_seckill_goods` values('41','2','2','650','2646.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('42','2','2','651','1646.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('43','2','2','810','3646.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('44','2','3','820','321.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('45','2','3','823','223.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('46','2','3','844','623.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('47','2','3','845','123.00','3423','3');");
E_D("replace into `dsc_seckill_goods` values('48','2','1','661','1423.00','234','4');");
E_D("replace into `dsc_seckill_goods` values('49','2','1','662','1423.00','234','4');");
E_D("replace into `dsc_seckill_goods` values('50','2','1','665','2423.00','234','4');");
E_D("replace into `dsc_seckill_goods` values('51','2','4','854','343.00','2423','23');");
E_D("replace into `dsc_seckill_goods` values('52','2','4','853','1343.00','2423','23');");
E_D("replace into `dsc_seckill_goods` values('53','2','4','852','3413.00','2423','23');");
E_D("replace into `dsc_seckill_goods` values('54','2','5','828','334.00','423','4');");
E_D("replace into `dsc_seckill_goods` values('55','2','5','829','534.00','423','4');");
E_D("replace into `dsc_seckill_goods` values('56','2','5','830','834.00','423','4');");
E_D("replace into `dsc_seckill_goods` values('57','2','5','851','2133.00','423','4');");
E_D("replace into `dsc_seckill_goods` values('58','2','5','658','2312.00','423','5');");

require("../../inc/footer.php");
?>