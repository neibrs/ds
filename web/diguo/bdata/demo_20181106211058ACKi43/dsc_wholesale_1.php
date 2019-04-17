<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale`;");
E_C("CREATE TABLE `dsc_wholesale` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL,
  `wholesale_cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `rank_ids` varchar(255) NOT NULL,
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `enabled` tinyint(3) unsigned NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  `price_model` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `goods_type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '0',
  `moq` int(10) unsigned NOT NULL DEFAULT '0',
  `is_recommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `shipping_fee` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `freight` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `goods_id` (`goods_id`) USING BTREE,
  KEY `review_status` (`review_status`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale` values('113','0','785','0',0xe6a3aee9a9ace5a4b9e5858b2032303136e586ace8a385e696b0e6acbee794b7e5a3abe9a39ee8a18ce5a4b9e5858be8b4b4e5b883e7bba3e7ab8be9a286e4bc91e997b2e5a496e5a597e99fa9e78988e6bdaee6b581,0x362c372c382c33,'0.00','1','3','','0','0','0','0','0','0','0','0','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('114','0','781','0',0xe5ae9de79fb3e89db6e79c9fe4b89de59bb4e5b7bee5a5b3e5a3abe698a5e7a78be5ada3e9ab98e6a1a3e4b89de5b7bee9878de7a385e6a191e89a95e4b89de5a4a7e696b9e5b7bee68aabe882a9e4b89de7bbb8e7a4bce59381203136e5a786e7b1b3e9878de7a385e79c9fe4b89de4b89de6bb91e7bc8ee99da23930e696b9e5b7bee7a4bce79b92e58c85e8a385,0x362c372c382c33,'0.00','1','3','','0','0','0','0','0','0','0','0','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('115','0','786','0',0xe8a3a4e5ad90e794b7e5a3abe59388e4bca6e8a3a4e698a5e5ada3e696b0e6acbe32303137e69d9fe8849ae8a3a4e4bfaee8baabe99fa9e78988e6bdaee6b581e5b08fe8849ae8a3a4e794b7e8a3a4e4bc91e997b2e8a3a420e5bcb9e58a9b,0x362c372c382c33,'0.00','1','3','','0','0','0','0','0','0','0','0','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('121','0','812','1',0x4d696465612fe7be8ee79a84204636302d32315742322845532920e794b5e783ade6b0b4e599a83630e58d874c20e794b520e582a8e6b0b4e58db3e783ade5bc8fe6b497e6bea1e6b290e6b5b420e585a8e7bd91e78886e6acbe2034e5808de5a29ee5aeb920e4b880e7baa7e883bde6958820e58f8ce7aea1e9809fe783ad,'','0.00','1','3','','1','5','1000','10','1','1','1499741703','1500029633','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('120','0','809','1',0x5349454d454e532fe8a5bfe997a8e5ad90204b4139324e563636544920e58f8ce5bc80e997a8e58f8ce997a8e5afb9e5bc80e997a8e5aeb6e794a8e58f98e9a291e697a0e99c9ce794b5e586b0e7aeb1,'','7500.00','1','3','','0','6','1000','10','1','1','1499741658','1500029587','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('119','0','803','1',0x4a6f796f756e672fe4b99de998b320592d3530433135e794b5e58e8be58a9be99485e9ab98e58e8be99485e6ada3e59381e58f8ce88386e699bae883bde9a284e7baa6354ce99381e9879ce696b0e5938120e59c9fe781b6e99381e696a720e58f8ce9878de5ae89e585a8e99481,'','0.00','1','3','','1','6','1000','20','1','1','1499655207','1500029525','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('116','0','621','1',0xe4b889e6989f433234463339364648e69bb2e99da2e698bee7a4bae599a832332e35e88bb1e5afb8e794b5e88491e698bee7a4bae599a83234e6b6b2e699b6e698bee7a4bae5b18fe5b995e8b6853232,'','0.00','1','3','','1','6','1000','10','1','1','1499654981','1531565163','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('117','0','648','1',0x4d696465612fe7be8ee79a84204d422d57465335303137544de794b5e9a5ade785b2354ce699bae883bde6ada3e59381e794b5e9a5ade99485e5aeb6e794a8332d342d362d372d38e4baba20e4b88be58d95e7ab8be5878f323020e7b2bee7a094e69fb4e781abe9a5ad20e6b6a1e8bdaee998b2e6baa2,'','0.00','1','3','','1','6','1000','20','1','1','1499741480','1500029406','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('118','0','805','1',0x446f6e6c696d2fe4b89ce88fb120444c2d4b463530305320e59296e595a1e69cbae5aeb6e794a8e585a8e58d8ae887aae58aa8e6848fe5bc8fe59586e794a8e892b8e6b1bde5bc8fe68993e5a5b6e6b3a120e4b88de99488e992a2e69cbae8baab203230e5b895e8bf9be58fa3e6b3b5e6b5a620e58f8ce6b8a9e7b3bbe7bb9f,'','0.00','1','3','','1','6','1000','10','1','1','1499655141','1531565456','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('122','0','810','1',0x486973656e73652fe6b5b7e4bfa1204c45443439454332373057203439e5908be6b6b2e699b6e5b9b3e69dbfe794b5e8a786e69cbae7bd91e7bb9c77696669e5bda9e794b53530,'','0.00','1','3','','1','6','1000','100','1','1','1499741762','1500029677','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('123','0','862','1',0xe99490e5a594e6b0b4e992bbe69cbae6898be68c81e5bc8fe992bbe5ad94e69cbae6b7b7e6b3a5e59c9fe68993e5ad94e992bbe79cbce69cbae5a4a7e58a9fe78e87e7a9bae8b083e5bc80e5ad94e4b8a4e794a8e794b5e992bb20e58a9be5a4a7e5a881e78c9b20e5b7a5e4b89ae7baa720e585a8e9939ce794b5e69cba20e5b8a6e4bf9de68aa4e7a6bbe59088,'','0.00','1','3','','1','6','1000','50','1','1','1499741810','1500029739','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('124','0','625','5',0xe7a78be5ada3e696b0e6acbee794b7e5a3abe5a597e5a4b4e58dabe8a1a3e58db0e88ab1e5a496e5a597e99fa9e78988e7ae80e7baa6e799bee690ade6bdaee6b581e794b7e7949fe4b88ae8a1a3e69c8d,'','0.00','1','3','','1','5','1000','20','1','1','1499741867','1563101782','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('125','0','629','5',0x32303137e696b0e5938120e58aa0e4b880e5b09ae59381e697a0e79795e58685e8a1a3e5a5b320e5898de689a3e697a0e992a2e59c88e89684e6acbee4baa4e58f89e7be8ee8838ce69687e883b84d333720e58e9ae69daf2be89684e69daf20e697a0e992a2e59c8820e5898de689a320e7be8ee8838c20e4b88ae89684e4b88be58e9a,'','0.00','1','3','','1','5','1000','10','1','1','1499742261','1500030191','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('126','0','635','5',0xe99fa9e983bde8a1a3e8888d32303137e99fa9e78988e5a5b3e8a385e696b0e6acbee9bb91e799bde68bbce68ea5e68f92e882a9e6a392e79083e69c8de698a5e5ada3e79fade5a496e5a597484835353937e5a6a020e69cb4e4bfa1e683a0e5908ce6acbe20e9bb91e799bde68bbce68ea520e68f92e882a9e8a29620e6a392e79083e69c8d,'','0.00','1','3','','1','5','1000','10','1','0','0','0','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('127','0','780','5',0xe794b7e5a5b3e99fa9e78988e7baafe6a389e58fafe788b1e586ace5ada3e4b8aae680a7e998b2e5b098e68385e4bea3e58fa3e7bda9e4bf9de69a96e9808fe6b094e9bb91e889b2e697b6e5b09ae6bdaee6acbee698a5203135e58583e4b880e585b132e4b8aae58fa3e7bda920e998b2e5b098e4b8aae680a7e697b6e5b09a,0x362c372c382c33,'0.00','1','3','','1','5','1000','10','1','1','1499742376','1500030286','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('128','6','767','5',0xe99fa9e983bde8a1a3e8888d32303137e99fa9e78988e5a5b3e8a385e5a48fe8a385e696b0e6acbee7baafe889b2e99582e7a9bae99cb2e885b0e79fade8a29654e681a44f5537313633e5a0af20e99fa9e78988e78988e59e8b20e697b6e5b09ae99582e7a9ba20e88892e98082e99da2e6969920e4b8aae680a7e7a9bfe690ad,'','0.00','1','1','','1','0','1000','20','1','1','1499857655','1531566455','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('129','6','768','5',0xe99fa9e983bde8a1a3e8888d32303137e99fa9e78988e5a5b3e8a385e5a48fe8a385e696b0e6acbee697b6e5b09ae4bfaee8baabe698bee798a6e59c86e9a286e69da1e7bab954e681a44f475937373131e5a88b20e698bee798a6e78988e59e8b20e88892e98082e99da2e6969920e69da1e7bab9e58583e7b4a0,'','0.00','1','3','','1','0','1000','10','1','1','1499742573','1531566504','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('130','6','769','5',0xe69cb4e4bfa1e683a0e6988ee698bee5908ce6acbee99fa9e983bde8a1a3e8888d32303137e698a5e8a385e696b0e6acbee9ab98e9a286e6af9be8a1a3e5a5b3e5a597e5a4b4e5aebde69dbee7baafe889b2e99fa9e7898820e9a286e588b8e4b88be58d95e7ab8be5878f2fe58d95e4bbb6e58c85e982ae2fe58588e68b8de58588e58f91e8b4a7efbc81,'','500.00','1','3','','0','0','1000','100','1','1','1499742671','1531566542','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('131','6','771','5',0xe99fa9e983bde8a1a3e8888de698a5e5ada3e99fa9e59bbd756c7a7a616e67e8bf9ee5b8bde58dabe8a1a3e5a5b3e5a597e5a4b4e5aebde69dbee799bee690ade5ada6e7949fe99fa9e78988e6bdae6266e9a38e20e9a286e588b8e4b88be58d95e7ab8be5878f2fe58d95e4bbb6e58c85e982ae2fe58588e68b8de58588e58f91e8b4a7efbc81,'','0.00','1','3','','1','0','1000','10','1','1','1499742700','1531566637','0.00','0','0');");
E_D("replace into `dsc_wholesale` values('132','6','772','5',0xe99fa9e983bde8a1a3e8888d32303137e698a5e8a385e696b0e6acbee5a5b3e8a385e698a5e6acbee68bbce68ea5e59687e58fade995bfe8a296e8bf9ee8a1a3e8a399e4b8ade995bfe6acbee697b6e5b09ae99fa9e7898820e9a286e588b8e7ab8be5878f2fe58d95e4bbb6e58c85e982ae2fe4b883e5a4a9e697a0e79086e794b1e98080e68da2,'','0.00','1','3','','1','0','1000','10','0','1','1499742732','1531566667','0.00','0','0');");

require("../../inc/footer.php");
?>