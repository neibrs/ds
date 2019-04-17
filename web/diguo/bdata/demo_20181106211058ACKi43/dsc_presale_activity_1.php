<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_presale_activity`;");
E_C("CREATE TABLE `dsc_presale_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `deposit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `pay_start_time` int(10) unsigned NOT NULL,
  `pay_end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(1) unsigned NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  `pre_num` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `review_status` (`review_status`),
  KEY `goods_id` (`goods_id`),
  KEY `goods_name` (`goods_name`),
  KEY `user_id` (`user_id`),
  KEY `cat_id` (`cat_id`),
  KEY `start_time` (`start_time`),
  KEY `end_time` (`end_time`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_presale_activity` values('2',0xe4baace5a4a9e58d8ee79b9b693520373530302f475458313035305469e78bace698bee58fb0e5bc8fe69cbae7bb84e8a385e69cba444959e695b4e69cbae6b8b8e6888fe794b5e88491e4b8bbe69cba20e783ade994803235e4b887e58fb020e8b791e588863137e4b88720e58d8737e4bba3435055,'21','0','623',0xe4baace5a4a9e58d8ee79b9b693520373530302f475458313035305469e78bace698bee58fb0e5bc8fe69cbae7bb84e8a385e69cba444959e695b4e69cbae6b8b8e6888fe794b5e88491e4b8bbe69cba20e783ade994803235e4b887e58fb020e8b791e588863137e4b88720e58d8737e4bba3435055,'','1000.00','1490918157','1619732816','1500503400','1522362600','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('7',0xe4b880e58fb6e5ad90e6999ae5ae89e79da1e79ca0e99da2e8869ce8a1a5e6b0b4e4bf9de6b9bfe6b7b1e5b182e6b885e6b481e5858de6b497e586bbe8869ce4b893e69f9ce6ada3e59381e5a5b3e58c96e5a686e5938120e8afbae4b8bde69e9ce586bbe8869c20e8a1a5e6b0b4e4bf9de6b9bf,'23','0','641',0xe4b880e58fb6e5ad90e6999ae5ae89e79da1e79ca0e99da2e8869ce8a1a5e6b0b4e4bf9de6b9bfe6b7b1e5b182e6b885e6b481e5858de6b497e586bbe8869ce4b893e69f9ce6ada3e59381e5a5b3e58c96e5a686e5938120e8afbae4b8bde69e9ce586bbe8869c20e8a1a5e6b0b4e4bf9de6b9bf,'','5.00','1490222020','1619732816','1500849229','1520029982','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('8',0xe4b880e58fb6e5ad90e58ebbe8a792e8b4a8e58ebbe6adbbe79aaee8868fe595abe596b1e99da2e983a8e6b8a9e5928ce7a59be9bb91e5a4b4e585a8e8baabe6b8a9e5928ce8a1a5e6b0b4e5879de883b6e7a3a8e7a082e8868f20e696b0e9b29ce68aa4e882a420e6a48de789a9e68aa4e882a420e58ebbe999a4e8a792e8b4a820e58589e6bb91e69f94e5aba9,'23','0','643',0xe4b880e58fb6e5ad90e58ebbe8a792e8b4a8e58ebbe6adbbe79aaee8868fe595abe596b1e99da2e983a8e6b8a9e5928ce7a59be9bb91e5a4b4e585a8e8baabe6b8a9e5928ce8a1a5e6b0b4e5879de883b6e7a3a8e7a082e8868f20e696b0e9b29ce68aa4e882a420e6a48de789a9e68aa4e882a420e58ebbe999a4e8a792e8b4a820e58589e6bb91e69f94e5aba9,'','20.00','1490222052','1619732816','1506206062','1522362817','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('10',0x47616c616e7a2fe6a0bce585b0e4bb9520473830463233434e334c4e2d513628574f2920e5aeb6e794a8e5beaee6b3a2e7828920e58589e6b3a2e7828920e783a4e7aeb1e4b880e4bd9320e6898be69cbae8bf9ce7a88be6938de68ea720e4b880e7baa7e883bde6958820e4bd8ee887b3353939,'21','0','654',0x47616c616e7a2fe6a0bce585b0e4bb9520473830463233434e334c4e2d513628574f2920e5aeb6e794a8e5beaee6b3a2e7828920e58589e6b3a2e7828920e783a4e7aeb1e4b880e4bd9320e6898be69cbae8bf9ce7a88be6938de68ea720e4b880e7baa7e883bde6958820e4bd8ee887b3353939,'','60.00','1490222115','1619732816','1503527722','1520894080','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('11',0xe6ad8ce6a2b520e5ba8ae5a4b4e69f9c20e59cb0e4b8ade6b5b7e7be8ee5bc8fe4b9a1e69d91e8939de889b2e794b0e59bade5ba8ae8beb9e69f9c20e582a8e789a9e58da7e5aea4e5aeb6e585b720e59381e8b4a8e4bf9de99a9c20e794a8e69699e78eafe4bf9d20e8b4a8e4bf9d35e5b9b42d2de4b88de58d95e58d96,'23','0','658',0xe6ad8ce6a2b520e5ba8ae5a4b4e69f9c20e59cb0e4b8ade6b5b7e7be8ee5bc8fe4b9a1e69d91e8939de889b2e794b0e59bade5ba8ae8beb9e69f9c20e582a8e789a9e58da7e5aea4e5aeb6e585b720e59381e8b4a8e4bf9de99a9c20e794a8e69699e78eafe4bf9d20e8b4a8e4bf9d35e5b9b42d2de4b88de58d95e58d96,'','25.00','1490222180','1619732816','1503527792','1527028596','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('12',0xe789b9e5a4a7e58fb7e58aa0e58e9ae5a191e69699e694b6e7bab3e7aeb1e695b4e79086e7aeb1e69c89e79b96e694b6e7bab3e79b92e8a1a3e69c8de8a2abe5ad90e7bdaee789a9e591a8e8bdace582a8e789a9e7aeb1e5ad90,'23','0','662',0xe789b9e5a4a7e58fb7e58aa0e58e9ae5a191e69699e694b6e7bab3e7aeb1e695b4e79086e7aeb1e69c89e79b96e694b6e7bab3e79b92e8a1a3e69c8de8a2abe5ad90e7bdaee789a9e591a8e8bdace582a8e789a9e7aeb1e5ad90,'','15.00','1490135851','1619732816','1503527820','1518561360','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('14',0xe5beaee8bdafefbc884d6963726f736f6674efbc89537572666163652050726f3420e4ba8ce59088e4b880e5b9b3e69dbfe794b5e884912031322e33e88bb1e5afb8efbc88496e74656c206935203447e58685e5ad982031323847e5ad98e582a820e8a7a6e68ea7e7ac9420efbc89204352352d3030303038,'21','0','894',0xe5beaee8bdafefbc884d6963726f736f6674efbc89537572666163652050726f3420e4ba8ce59088e4b880e5b9b3e69dbfe794b5e884912031322e33e88bb1e5afb8efbc88496e74656c206935203447e58685e5ad982031323847e5ad98e582a820e8a7a6e68ea7e7ac9420efbc89204352352d3030303038,'','500.00','1490229493','1619732816','1503535054','1527122305','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('17',0x313131,'21','0','808',0x416d6f692fe5a48fe696b0204456442d363138e5aeb6e794a8445644e692ade694bee69cba455644e5bdb1e7a29fe69cbae9ab98e6b885564344e69cba4344e8bfb7e4bda0e692ade694bee599a820e696b0e4b880e4bba3e9ab98e6b885e68aa4e79cbce5aeb6e5baade584bfe7aba5445644e5bdb1e7a29fe69cba,'','50.00','1491003583','1619732816','1493595584','1495064383','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('18',0xe6b58be8af95e6b4bbe58aa831,'0','9','893',0x4d617962656c6c696e652fe7be8ee5ae9de88eb2e5a5bde6b094e889b2e6b0b4e6b6a6e59487e983a8e5a597e8a38520e6bb8be6b6a6e4bf9de6b9bfe68c81e4b985e698bee889b2e59487e99cb2e59487e8868f,'','80.00','1491005820','1619732816','1498436220','1507249020','0','3','','0');");
E_D("replace into `dsc_presale_activity` values('19',0xe6b58be8af95e6b4bbe58aa832,'23','6','776',0xe99fa9e983bde8a1a3e8888d32303137e698a5e5ada3e696b0e6acbee4b88de58aa0e7bb92e89684e6acbee7a0b4e6b49ee5a496e7a9bfe68993e5ba95e8a3a4e5a5b3e4b99de58886e8a3a4e99fa9e78988e5a48fe5ada320e9a286e588b8e4b88be58d95e7ab8be5878f2fe58d95e4bbb6e58c85e982ae2fe58588e68b8de58588e58f91e8b4a7efbc81,'','50.00','1490860800','1619732816','1491265200','1499300400','0','3','','0');");

require("../../inc/footer.php");
?>