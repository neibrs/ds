<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_purchase_goods`;");
E_C("CREATE TABLE `dsc_wholesale_purchase_goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purchase_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `goods_number` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_img` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  PRIMARY KEY (`goods_id`),
  KEY `purchase_id` (`purchase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_purchase_goods` values('1','1','5',0xe696b0e6acbee9b8a1e5bf83e9a286e7baafe889b256e9a286e5ad97e6af8de58780e78988e794b7e5bc8fe79fade8a29674e681a4e7baafe6a389e58d8ae8a296e5bcb9e58a9be4bfaee8baabe4bd93e681a4e689b9e58f91,'100','100.00',0x613a313a7b693a303b733a33373a22646174612f70757263686173652f313439393734333038363735303131333536322e6a7067223b7d,'');");
E_D("replace into `dsc_wholesale_purchase_goods` values('2','2','5',0xe5b7b4e5b895e9b9bfe9ab98e59381e8b4a8e7bfbbe9a286e7baafe6a389e8b59be8bda6706f6c6fe8a1ab20e585a8e6a389e9a9ace6a087e794b774e681a4e4b880e4bbb6e4bba3e58f9132323430,'100','150.00',0x613a313a7b693a303b733a33373a22646174612f70757263686173652f313439393734333230363630363230303835382e6a7067223b7d,'');");
E_D("replace into `dsc_wholesale_purchase_goods` values('3','3','5',0xe5a496e8b4b8e6aca7e7be8e3344e58db0e88ab1e794b7e5bc8fe79fade8a29674e681a4e9809fe58d96e9809a65626179e78886e6acbee794b7e8a38520e5ae9ae588b654e681a4e689b9e58f91,'100','200.00',0x613a313a7b693a303b733a33373a22646174612f70757263686173652f313439393734333237363639333835313035372e6a7067223b7d,'');");

require("../../inc/footer.php");
?>