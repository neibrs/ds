<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_goods_attr`;");
E_C("CREATE TABLE `dsc_wholesale_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `attr_id` int(10) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `color_value` text NOT NULL,
  `attr_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `attr_sort` int(10) unsigned NOT NULL,
  `attr_img_flie` varchar(255) NOT NULL,
  `attr_gallery_flie` varchar(255) NOT NULL,
  `attr_img_site` varchar(255) NOT NULL,
  `attr_checked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang_flag` int(2) DEFAULT '0',
  `attr_img` varchar(255) DEFAULT NULL,
  `attr_thumb` varchar(255) DEFAULT NULL,
  `img_flag` int(2) DEFAULT '0',
  `attr_pid` varchar(60) DEFAULT NULL,
  `admin_id` smallint(8) unsigned NOT NULL,
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `attr_id` (`attr_id`) USING BTREE,
  KEY `admin_id` (`admin_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_goods_attr` values('9','786','5',0x584c,'','0.00','9','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('8','786','5',0x58,'','0.00','8','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('7','786','5',0x4d,'','0.00','7','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('4','621','7',0xe799bde7baa2e889b2,'','0.00','4','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('5','621','7',0xe6b5b7e5869be8939d,'','0.00','5','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('6','621','7',0xe9bb84e9bb91e889b2,'','0.00','6','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('10','786','5',0x32584c,'','0.00','10','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('11','786','5',0x33584c,'','0.00','11','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('12','648','7',0xe799bde7baa2e889b2,'','0.00','12','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('13','648','7',0xe6b5b7e5869be8939d,'','0.00','13','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('14','648','7',0xe9bb84e9bb91e889b2,'','0.00','14','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('15','805','7',0xe799bde7baa2e889b2,'','0.00','15','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('16','805','7',0xe6b5b7e5869be8939d,'','0.00','16','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('17','805','7',0xe9bb84e9bb91e889b2,'','0.00','17','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('18','803','7',0xe799bde7baa2e889b2,'','0.00','18','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('19','803','7',0xe6b5b7e5869be8939d,'','0.00','19','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('20','803','7',0xe9bb84e9bb91e889b2,'','0.00','20','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('21','809','7',0xe799bde7baa2e889b2,'','0.00','21','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('22','809','7',0xe6b5b7e5869be8939d,'','0.00','22','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('23','809','7',0xe9bb84e9bb91e889b2,'','0.00','23','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('24','812','5',0x4d,'','0.00','24','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('25','812','5',0x58,'','0.00','25','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('26','812','5',0x584c,'','0.00','26','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('27','812','5',0x32584c,'','0.00','27','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('28','810','7',0xe799bde7baa2e889b2,'','0.00','28','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('29','810','7',0xe6b5b7e5869be8939d,'','0.00','29','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('30','810','7',0xe9bb84e9bb91e889b2,'','0.00','30','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('31','862','7',0xe799bde7baa2e889b2,'','0.00','31','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('32','862','7',0xe6b5b7e5869be8939d,'','0.00','32','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('33','862','7',0xe9bb84e9bb91e889b2,'','0.00','33','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('34','625','5',0x4d,'','0.00','34','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('35','625','5',0x58,'','0.00','35','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('36','625','5',0x584c,'','0.00','36','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('37','625','5',0x32584c,'','0.00','37','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('38','629','5',0x4d,'','0.00','38','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('39','629','5',0x58,'','0.00','39','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('40','629','5',0x584c,'','0.00','40','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('41','629','5',0x32584c,'','0.00','41','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('42','635','5',0x4d,'','0.00','42','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('43','635','5',0x58,'','0.00','43','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('44','635','5',0x584c,'','0.00','44','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('45','780','5',0x4d,'','0.00','45','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('46','780','5',0x58,'','0.00','46','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('47','780','5',0x584c,'','0.00','47','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('48','780','5',0x32584c,'','0.00','48','','','','0','0',NULL,NULL,'0',NULL,'57');");
E_D("replace into `dsc_wholesale_goods_attr` values('49','780','5',0x33584c,'','0.00','49','','','','0','0',NULL,NULL,'0',NULL,'57');");

require("../../inc/footer.php");
?>