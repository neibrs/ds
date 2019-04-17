<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_cart`;");
E_C("CREATE TABLE `dsc_cart` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `session_id` varchar(255) DEFAULT NULL,
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` varchar(255) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rec_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_gift` int(10) unsigned NOT NULL DEFAULT '0',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `can_handsel` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `model_attr` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` text NOT NULL,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `shopping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `warehouse_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_id` int(10) unsigned NOT NULL DEFAULT '0',
  `area_city` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) NOT NULL,
  `stages_qishu` varchar(4) NOT NULL DEFAULT '-1',
  `store_id` int(10) unsigned NOT NULL DEFAULT '0',
  `freight` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `store_mobile` varchar(20) NOT NULL,
  `take_time` datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
  `is_checked` tinyint(1) NOT NULL DEFAULT '1' COMMENT '选中状态，0未选中，1选中',
  `commission_rate` varchar(10) NOT NULL DEFAULT '0',
  `is_invalid` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '购物车商品是否无效',
  `act_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `session_id` (`session_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `product_id` (`product_id`),
  KEY `is_real` (`is_real`),
  KEY `parent_id` (`parent_id`),
  KEY `is_shipping` (`is_shipping`),
  KEY `ru_id` (`ru_id`),
  KEY `store_id` (`store_id`),
  KEY `freight` (`freight`),
  KEY `tid` (`tid`),
  KEY `is_checked` (`is_checked`),
  KEY `warehouse_id` (`warehouse_id`),
  KEY `area_id` (`area_id`),
  KEY `is_gift` (`is_gift`),
  KEY `rec_type` (`rec_type`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_cart` values('2','1','','785',0x454353303030373835,'0','',0xe6a3aee9a9ace5a4b9e5858b2032303136e586ace8a385e696b0e6acbee794b7e5a3abe9a39ee8a18ce5a4b9e5858be8b4b4e5b883e7bba3e7ab8be9a286e4bc91e997b2e5a496e5a597e99fa9e78988e6bdaee6b581,'239.88','199.90','1','','1','','0','0','0','0','0','0','','0','0.00','2','16','0','1502054083',0x2d31,'0','0','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('3','1','','708',0x454353303030373038,'0','',0xe5b08fe7b1b3e6898be78eaf32e8939de78999e699bae883bde794b7e5a5b3e68385e4bea3e8bf90e58aa8e8aea1e6ada5e599a8e79da1e79ca0e5bf83e78e87e6a380e6b58be599a8e6898be8a1a8e694afe68c81494f5320e7b2bee58786e5bf83e78e87e79b91e6b58b20e8b685e995bfe7bbade888aa20e8a7a6e691b8e6938de4bd9c,'178.79','149.00','2','','1','','0','0','0','0','0','0','','2','0.00','2','16','0','1502054607',0x2d31,'0','0','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('4','72','','843',0x454353303030383433,'0','',0x536f6e792fe7b4a2e5b0bc204b444c2d34385736353044203438e88bb1e5afb8e6b6b2e699b6e9ab98e6b8852077696669e7bd91e7bb9c20e5b9b3e69dbfe794b5e8a78620e6ada3e59381e4bf9de8af8120e4b889e69c9fe5858de681af20e592a8e8afa2e69c89e7a4bc20e594aee5908ee4b88ae997a8,'4198.80','3499.00','1','','1','','0','0','0','0','0','0','','0','0.00','2','23','0','1508432161',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('6','77','','787',0x454353303030373837,'','',0x594f484fe69c89e8b4a7e6bdaee7898c4c414c2fe695b0e5ad97e8b4b4e5b883e8bf9ee5b8bde5a597e5a4b4e58dabe8a1a3e794b7e5a5b3e9809ae794a820e590b4e4baa6e587a1e4bab2e79d80e5908ce6acbe20e698a5e5a48fe78495e696b0e5ada3efbc8c332e3231e697a530303a3030e5bc80e5a78be68aa2e8b4ad,'190.79','356.00','1','','1',0x7365636b696c6c31,'0','7','0','0','0','0','','0','0.00','0','0','0','0',0x2d31,'0','0','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('8','87','','813',0x454353303030383133,'0','',0xe5b08fe5908920e5ae9de5ae9de584bfe7aba5e5aeb6e794a8e5b08fe59e8be585a8e887aae58aa8e5a9b4e584bfe8bfb7e4bda0e6bb9ae7ad92e6b497e8a1a3e69cbae9ab98e6b8a9e785aee6b497e69d80e88f8c20e69d80e88f8ce5ae89e585a8204444e58f98e9a291e794b5e69cba20e79da1e79ca0e7baa7e99d99e99fb3,'2518.79','2099.00','1','','1','','0','0','0','0','0','0','','0','0.00','2','23','0','1508439460',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('11','3','','897',0x454353303030383937,'0','',0xe8b0b7e7bbbfe5869ce5938120e69c89e69cbae5a4a7e7b1b3e7a8bbe88ab1e9a69932e58fb7e696b0e7b1b33130e696a4e4b89ce58c97e5a4a7e7b1b3e9bb91e9be99e6b19f356b67e58c85e982ae20e69c89e69cbae5a4a7e7b1b320e7a8bbe88ab1e9a699e69c89e69cba20e4b88de6bba1e6848fe58c85e98080,'72.00','60.00','1','','1','','0','0','0','0','0','0','','0','0.00','2','19','0','1508440778',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('12','91','','812',0x454353303030383132,'0','',0x4d696465612fe7be8ee79a84204636302d32315742322845532920e794b5e783ade6b0b4e599a83630e58d874c20e794b520e582a8e6b0b4e58db3e783ade5bc8fe6b497e6bea1e6b290e6b5b420e585a8e7bd91e78886e6acbe2034e5808de5a29ee5aeb920e4b880e7baa7e883bde6958820e58f8ce7aea1e9809fe783ad,'1438.80','1199.00','1','','1','','0','0','0','0','0','0','','0','0.00','1','15','0','1508441478',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('13','92','','784',0x454353303030373834,'','',0x484c412fe6b5b7e6be9ce4b98be5aeb6e6929ee889b2e995bfe8a29654e681a4e698a5e5ada3e783ade58d96e59c86e9a286e4bfaee8baabe68bbce68ea554e681a4e794b720e7ae80e7baa6e59c86e9a28620e5beaee5bcb9e4bfaee8baab20e6929ee889b2e68bbce68ea520e8a7a6e6849fe69f94e8bdaf,'117.60','204.00','1','','1',0x7365636b696c6c3134,'0','6','0','0','0','0','','0','0.00','2','19','0','0',0x2d31,'0','0','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('14','92','','719',0x454353303030373139,'0','',0x444959e58fb0e5bc8fe794b5e88491e695b4e69cba4937e59b9be6a0b8e585ade6a0b8e78bace698bee59bbae68081e7bb84e8a385e6b8b8e6888fe794b5e88491e4b8bbe69cba3234e5afb8e698bee7a4bae599a820e98081e799bee58583e7a4bce5938120e58685e5ad98e5858de8b4b9e58d87e7baa720e98081e698bee7a4bae599a8,'1665.60','1388.00','1','','1','','0','0','0','0','0','0','','3','0.00','2','19','0','1508442730',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('15','92','','717',0x454353303030373137,'0','',0x566f796f2056426f6f6b205633e5a594e885bee7898831332e33e88bb1e5afb8e8b685e89684e59bbae6808157696e3130e5b9b3e69dbfe794b5e88491e4ba8ce59088e4b880e7ac94e8aeb0e69cac20e98081e7a4bce58c8520e88bb1e789b9e5b094e5a594e885bee88aaf31323847e59bbae68081e7a1ace79b98,'2518.79','2099.00','1','','1','','0','0','0','0','0','0','','3','0.00','2','19','0','1508442804',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('17','96','','775',0x454353303030373735,'0','',0xe99fa9e983bde8a1a3e8888d32303137e99fa9e78988e5a5b3e8a385e698a5e8a385e696b0e6acbee69da1e7bab9e698bee798a6e799bee690ade5aebde69dbe76e9a286e4b883e58886e8a296e8a1ace8a1abe6bdae20e9a286e588b8e7ab8be5878f2fe58d95e4bbb6e58c85e982ae2fe4b883e5a4a9e697a0e79086e794b1e98080e68da2,'93.60','78.00','1','','1','','0','0','0','0','0','0','','6','0.00','2','19','0','1508446334',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('23','107','','854',0x454353303030383534,'','',0x5b4f544f5d45562d3031e68c89e691a9e6a485e5aeb6e794a8e585a8e8baabe885b0e983a8e99da0e59eabe5a49ae58a9fe883bde585a8e887aae58aa8e5a4aae7a9bae888b1e6b299e58f91e6a485e88081e4baba20e6ada3e59381e4bf9de99a9c20e5b08fe5b7a7e5ae9ee794a820e7be8ee88780e5a191e5bda220e4b88be696b9e5a597e9a490,'5998.80','343.00','1','','1',0x7365636b696c6c3531,'0','7','0','0','0','0','','0','0.00','0','0','0','0',0x2d31,'0','0','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('24','107','','854',0x454353303030383534,'0','',0x5b4f544f5d45562d3031e68c89e691a9e6a485e5aeb6e794a8e585a8e8baabe885b0e983a8e99da0e59eabe5a49ae58a9fe883bde585a8e887aae58aa8e5a4aae7a9bae888b1e6b299e58f91e6a485e88081e4baba20e6ada3e59381e4bf9de99a9c20e5b08fe5b7a7e5ae9ee794a820e7be8ee88780e5a191e5bda220e4b88be696b9e5a597e9a490,'5998.80','4999.00','1','','1','','0','0','0','0','0','0','','0','0.00','2','19','0','1508453190',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('28','110','','865',0x454353303030383635,'0','',0xe7be8ee789b9e696afe982a6e5a881e995bfe8a29654e681a4e794b7e5a3ab32303137e698a5e8a385e696b0e6acbee697b6e5b09ae58db0e88ab1e799bee690ad323035303634e59586e59cbae5908ce6acbe2031e58583e7a792313030e58583e4bc98e683a0e588b8e4b8a8e99990e9878fe68aa2e4b8a8e7ab8be58db3e68aa2e8b4ad,'106.80','89.00','1','','1','','0','0','0','0','0','0','','0','0.00','2','19','0','1508454571',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('30','108','','697',0x454353303030363937,'0','',0x47616c616e7a2fe6a0bce585b0e4bb9520473830463233434e334c2d433228523029e6ada3e59381e5beaee6b3a2e7828932334c20e699bae883bde58589e6b3a2e78289e5aeb6e794a82038303077e9809fe783ad3233e58d87e5aeb9e9878f31e7baa7e883bde69588e699bae883bde9a284e7baa6,'718.80','20.00','1','','1','','0','6','0','0','0','0','','1','0.00','1','6','0','1508455438',0x2d31,'0','1','0','0.00','','1000-01-01 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('31','108','','697',0x454353303030363937,'0','',0x47616c616e7a2fe6a0bce585b0e4bb9520473830463233434e334c2d433228523029e6ada3e59381e5beaee6b3a2e7828932334c20e699bae883bde58589e6b3a2e78289e5aeb6e794a82038303077e9809fe783ad3233e58d87e5aeb9e9878f31e7baa7e883bde69588e699bae883bde9a284e7baa6,'718.80','599.00','1','','1','','0','0','0','0','0','0','','1','0.00','2','16','0','1508455533',0x2d31,'0','1','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");
E_D("replace into `dsc_cart` values('39','118','','902',0x454353303030393031,0x3138,'',0xe998bfe8bfaae8bebee696afe794b7e99e8b5a58373530e4b889e58fb6e88d897a78373030e8b791e6ada5e99e8b5320373631393320424220313231312031323133203132313420e38093e38093e38093e4b893e69f9ce6ada3e5938120e694afe68c81e9aa8ce8b4a720e585a8e696b0e78eb0e8b4a7e38093e38093e38093,'604.80','509.00','1',0xe9a29ce889b23ae9bb84e9bb91e889b2200a,'1','','0','0','0','0','0','0',0x3138,'0','0.00','2','19','0','1509571759',0x2d31,'0','2','0','0.00','','0000-00-00 00:00:00','1','0','0','0');");

require("../../inc/footer.php");
?>