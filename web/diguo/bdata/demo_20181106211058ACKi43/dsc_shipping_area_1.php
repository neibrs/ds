<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_shipping_area`;");
E_C("CREATE TABLE `dsc_shipping_area` (
  `shipping_area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_area_name` varchar(150) NOT NULL DEFAULT '',
  `shipping_id` int(10) unsigned NOT NULL DEFAULT '0',
  `configure` text NOT NULL,
  `ru_id` int(10) NOT NULL,
  PRIMARY KEY (`shipping_area_id`),
  KEY `shipping_id` (`shipping_id`),
  KEY `ru_id` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_shipping_area` values('1',0xe9a1bae4b8b0,'16',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223135223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a303a22223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('2',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223132223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('43',0xe585a8e59bbd,'15',0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22352e39223b7d693a313b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a323b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a303a22223b7d693a333b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a323a223232223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('44',0xe585a8e59bbd,'11',0x613a323a7b693a303b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a313b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a303a22223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('45',0xe585a8e59bbd,'19',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a313a2236223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2231223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('46',0xe585a8e59bbd,'14',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223133223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22312e36223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'0');");
E_D("replace into `dsc_shipping_area` values('47',0xe585a8e59bbd,'15',0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a323b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a303a22223b7d693a333b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a323a223331223b7d7d,'1');");
E_D("replace into `dsc_shipping_area` values('48',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22362e34223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22322e31223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'1');");
E_D("replace into `dsc_shipping_area` values('49',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223135223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2235223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a303a22223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'2');");
E_D("replace into `dsc_shipping_area` values('50',0xe585a8e59bbd,'19',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22372e33223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2235223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'3');");
E_D("replace into `dsc_shipping_area` values('51',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223131223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22302e35223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223230303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'4');");
E_D("replace into `dsc_shipping_area` values('52',0xe585a8e59bbd,'16',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22392e31223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'6');");
E_D("replace into `dsc_shipping_area` values('53',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223132223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22322e33223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'9');");
E_D("replace into `dsc_shipping_area` values('54',0xe585a8e59bbd,'2',0x613a363a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22362e31223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2235223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d693a353b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a323a223232223b7d7d,'10');");
E_D("replace into `dsc_shipping_area` values('55',0xe585a8e59bbd,'16',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223134223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'11');");
E_D("replace into `dsc_shipping_area` values('56',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22342e33223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22312e35223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'12');");
E_D("replace into `dsc_shipping_area` values('57',0xe585a8e59bbd,'16',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223133223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'13');");
E_D("replace into `dsc_shipping_area` values('58',0xe585a8e59bbd,'2',0x613a363a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22342e36223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22312e33223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d693a353b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a323a223136223b7d7d,'14');");
E_D("replace into `dsc_shipping_area` values('59',0xe585a8e59bbd,'9',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223135223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223134223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2233223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'15');");
E_D("replace into `dsc_shipping_area` values('60',0xe585a8e59bbd,'16',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223230223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a323a223135223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2232223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'16');");
E_D("replace into `dsc_shipping_area` values('61',0xe585a8e59bbd,'2',0x613a363a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a313a2235223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a313a2235223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d693a353b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a323a223139223b7d7d,'18');");
E_D("replace into `dsc_shipping_area` values('62',0xe585a8e59bbd,'19',0x613a353a7b693a303b613a323a7b733a343a226e616d65223b733a383a226974656d5f666565223b733a353a2276616c7565223b733a323a223130223b7d693a313b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a333a22362e35223b7d693a323b613a323a7b733a343a226e616d65223b733a383a22737465705f666565223b733a353a2276616c7565223b733a333a22322e33223b7d693a333b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a353a223130303030223b7d693a343b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a393a2262795f776569676874223b7d7d,'5');");
E_D("replace into `dsc_shipping_area` values('64',0xe5908ce59f8ee4b893e98081,'20',0x613a343a7b693a303b613a323a7b733a343a226e616d65223b733a383a22626173655f666565223b733a353a2276616c7565223b733a313a2233223b7d693a313b613a323a7b733a343a226e616d65223b733a31303a22667265655f6d6f6e6579223b733a353a2276616c7565223b733a303a22223b7d693a323b613a323a7b733a343a226e616d65223b733a31363a226665655f636f6d707574655f6d6f6465223b733a353a2276616c7565223b733a303a22223b7d693a333b613a323a7b733a343a226e616d65223b733a373a227061795f666565223b733a353a2276616c7565223b733a313a2231223b7d7d,'0');");

require("../../inc/footer.php");
?>