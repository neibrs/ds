<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_inventory_logs`;");
E_C("CREATE TABLE `dsc_goods_inventory_logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goods_id` int(10) NOT NULL DEFAULT '0',
  `order_id` int(10) NOT NULL DEFAULT '0',
  `use_storage` tinyint(1) NOT NULL DEFAULT '0',
  `admin_id` int(10) NOT NULL DEFAULT '0',
  `number` varchar(160) NOT NULL,
  `model_inventory` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `model_attr` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `warehouse_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `suppliers_id` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) NOT NULL,
  `batch_number` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `goods_id` (`goods_id`),
  KEY `order_id` (`order_id`),
  KEY `admin_id` (`admin_id`),
  KEY `model_inventory` (`model_inventory`),
  KEY `product_id` (`product_id`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `area_id` (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_inventory_logs` values('2','0','0','13','57',0x2b20313030,'0','0','0','1','0','0','1508436695','','');");
E_D("replace into `dsc_goods_inventory_logs` values('3','0','0','13','57',0x2b203133,'0','0','0','2','0','0','1508436711','','');");
E_D("replace into `dsc_goods_inventory_logs` values('4','0','0','13','57',0x2b2031,'0','0','0','3','0','0','1508436738','','');");
E_D("replace into `dsc_goods_inventory_logs` values('5','0','0','13','57',0x2b2031,'0','0','0','1','0','0','1508436881','','');");
E_D("replace into `dsc_goods_inventory_logs` values('6','904','0','7','57',0x2b2031303030,'0','0','0','0','0','0','1508439106','','');");
E_D("replace into `dsc_goods_inventory_logs` values('7','904','0','9','57',0x2b20313030,'0','0','39','0','0','0','1508439106','','');");
E_D("replace into `dsc_goods_inventory_logs` values('8','0','0','13','57',0x2b2030,'0','0','0','0','5','0','1508441380','','');");
E_D("replace into `dsc_goods_inventory_logs` values('9','905','0','7','56',0x2b2031303030,'0','0','0','0','0','0','1508443864','','');");
E_D("replace into `dsc_goods_inventory_logs` values('10','906','0','7','56',0x2b2031303030,'0','0','0','0','0','0','1508443901','','');");
E_D("replace into `dsc_goods_inventory_logs` values('11','907','0','7','57',0x2b2031303030,'0','0','0','0','0','0','1508445520','','');");
E_D("replace into `dsc_goods_inventory_logs` values('12','907','0','9','57',0x2b2030,'0','0','40','0','0','0','1508445520','','');");
E_D("replace into `dsc_goods_inventory_logs` values('13','907','0','9','57',0x2b2030,'0','0','41','0','0','0','1508445520','','');");
E_D("replace into `dsc_goods_inventory_logs` values('14','907','0','9','57',0x2b2030,'0','0','42','0','0','0','1508445520','','');");
E_D("replace into `dsc_goods_inventory_logs` values('15','907','0','9','57',0x2b2030,'0','0','43','0','0','0','1508445520','','');");
E_D("replace into `dsc_goods_inventory_logs` values('16','0','0','13','57',0x2b2031,'0','0','0','1','0','0','1508452720','','');");
E_D("replace into `dsc_goods_inventory_logs` values('17','908','0','7','57',0x2b2031303030,'1','1','0','0','0','0','1508452794','','');");
E_D("replace into `dsc_goods_inventory_logs` values('18','0','0','13','57',0x2b2030,'0','0','0','0','5','0','1508452939','','');");
E_D("replace into `dsc_goods_inventory_logs` values('19','909','0','7','57',0x2b2031303030,'2','2','0','0','0','0','1508453008','','');");
E_D("replace into `dsc_goods_inventory_logs` values('20','673','3','0','0',0x2d31,'0','0','0','1','6','0','1508455359','','');");
E_D("replace into `dsc_goods_inventory_logs` values('21','910','0','7','56',0x2b2031303030,'0','0','0','0','0','0','1508458783','','');");
E_D("replace into `dsc_goods_inventory_logs` values('22','911','0','7','56',0x2b2031303030,'0','0','0','0','0','0','1508458783','','');");
E_D("replace into `dsc_goods_inventory_logs` values('23','912','0','7','56',0x2b2031303030,'0','0','0','0','0','0','1508458817','','');");
E_D("replace into `dsc_goods_inventory_logs` values('24','625','4','1','0',0x2d31,'0','0','0','0','0','0','1508482271','','');");
E_D("replace into `dsc_goods_inventory_logs` values('25','912','4','1','0',0x2d31,'0','0','0','3','33','0','1508482271','','');");
E_D("replace into `dsc_goods_inventory_logs` values('26','912','7','1','0',0x2d31,'0','0','0','3','33','0','1508486827','','');");
E_D("replace into `dsc_goods_inventory_logs` values('27','913','0','7','54',0x2b2031303030,'0','0','0','0','0','0','1508723070','','');");
E_D("replace into `dsc_goods_inventory_logs` values('28','914','0','7','54',0x2b2031303030,'0','0','0','0','0','0','1508723121','','');");
E_D("replace into `dsc_goods_inventory_logs` values('29','912','9','0','0',0x2d2031,'0','0','0','3','33','0','1508743593','','');");
E_D("replace into `dsc_goods_inventory_logs` values('30','903','14','0','57',0x2d2031,'0','0','0','2','19','0','1514594346','','');");

require("../../inc/footer.php");
?>