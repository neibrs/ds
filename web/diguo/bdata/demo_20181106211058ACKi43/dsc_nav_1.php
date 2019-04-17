<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_nav`;");
E_C("CREATE TABLE `dsc_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` int(10) unsigned DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`),
  KEY `cid` (`cid`),
  KEY `vieworder` (`vieworder`),
  KEY `opennew` (`opennew`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_nav` values('7','','0',0xe5858de8b4a3e69da1e6acbe,'1','5','0',0x61727469636c652e7068703f69643d31,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('8','','0',0xe99a90e7a781e4bf9de68aa4,'1','2','0',0x61727469636c652e7068703f69643d32,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('9','','0',0xe592a8e8afa2e783ade782b9,'0','3','0',0x61727469636c652e7068703f69643d33,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('10','','0',0xe88194e7b3bbe68891e4bbac,'1','4','0',0x61727469636c652e7068703f69643d34,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('11','','0',0xe585ace58fb8e7ae80e4bb8b,'1','6','0',0x61727469636c652e7068703f69643d35,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('12','','0',0xe689b9e58f91e696b9e6a188,'0','7','0',0x77686f6c6573616c652e706870,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('14','','0',0xe9858de98081e696b9e5bc8f,'0','8','0',0x6d79736869702e706870,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('29','','0',0xe68891e79a84e8aea2e58d95,'1','1','0',0x757365722e7068703f6163743d6f726465725f6c697374,0x746f70);");
E_D("replace into `dsc_nav` values('30','','0',0xe68891e79a84e694b6e8978f,'1','3','0',0x757365722e7068703f6163743d636f6c6c656374696f6e5f6c697374,0x746f70);");
E_D("replace into `dsc_nav` values('31','','0',0xe5aea2e688b7e69c8de58aa1,'1','4','0',0x757365722e7068703f6163743d6d6573736167655f6c697374,0x746f70);");
E_D("replace into `dsc_nav` values('33','','0',0xe9a696e9a1b5,'1','1','0',0x696e6465782e706870,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('34','','0',0xe59381e7898ce4b893e58cba,'1','50','0',0x6272616e642e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('35','','0',0xe59586e5aeb6e585a5e9a9bb,'1','9','1',0x6d65726368616e74732e706870,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('38','','0',0xe8819ae58892e7ae97,'1','50','0',0x67726f75705f6275792e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('40','','0',0xe68891e79a84e6b58fe8a788,'1','2','0',0x686973746f72795f6c6973742e706870,0x746f70);");
E_D("replace into `dsc_nav` values('43','','0',0xe9a284e594ae,'1','9','0',0x70726573616c652e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('45','','0',0xe4bc98e683a0e6b4bbe58aa8,'1','8','0',0x61637469766974792e706870,0x746f70);");
E_D("replace into `dsc_nav` values('46','','0',0xe585b1e5889be59586e59381,'1','6','0',0x63726f776466756e64696e672e706870,0x746f70);");
E_D("replace into `dsc_nav` values('49','','0',0xe5ba97e993bae8a197,'1','8','0',0x73746f72655f7374726565742e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('50','','0',0xe68b8de58d96e6b4bbe58aa8,'1','5','0',0x61756374696f6e2e706870,0x746f70);");
E_D("replace into `dsc_nav` values('51','','0',0xe7a7afe58886e59586e59f8e,'1','50','0',0x65786368616e67652e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('52','','0',0xe8b685e580bce7a4bce58c85,'1','10','0',0x7061636b6167652e706870,0x746f70);");
E_D("replace into `dsc_nav` values('53','','0',0xe6848fe8a781e58f8de9a688,'1','10','0',0x6d6573736167652e706870,0x626f74746f6d);");
E_D("replace into `dsc_nav` values('54','','0',0xe689b9e58f91e5b882e59cba,'1','9','0',0x77686f6c6573616c652e706870,0x746f70);");
E_D("replace into `dsc_nav` values('57',0x63,'858',0xe5a4a7e5aeb6e794b5,'1','50','0',0x63617465676f72792e7068703f69643d383538,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('59','','0',0x434d53e9a291e98193,'1','15','0',0x6e6577732e706870,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('61',0x63,'12',0xe9a39fe59381e789b9e4baa7,'1','2','1',0x63617465676f72792e7068703f69643d3132,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('62',0x63,'6',0xe69c8de8a385e59f8e,'1','50','0',0x63617465676f72792e7068703f69643d36,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('64','','0',0xe4bc98e683a0e588b8,'1','11','0',0x636f75706f6e732e7068703f6163743d636f75706f6e735f696e646578,0x746f70);");
E_D("replace into `dsc_nav` values('67',0x63,'8',0xe99e8be99db4e7aeb1e58c85,'1','50','0',0x63617465676f72792e7068703f69643d38,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('68','','0',0xe7a4bce59381e58da1,'1','12','0',0x676966745f676172642e706870,0x746f70);");
E_D("replace into `dsc_nav` values('69','','0',0xe5a4bae5ae9de5a587e585b5,'1','1','0',0x736e617463682e706870,'');");
E_D("replace into `dsc_nav` values('70','','0',0xe59ba2e8b4ade59586e59381,'1','13','0',0x67726f75705f6275792e706870,0x746f70);");
E_D("replace into `dsc_nav` values('71',0x63,'861',0xe6b1bde8bda6e4b98be5aeb6,'0','7','0',0x63617465676f72792e7068703f69643d383631,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('72',0x63,'867',0xe69785e6b8b8e4b893e58cba,'0','5','0',0x63617465676f72792e7068703f69643d383637,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('73',0x63,'1476',0xe688bfe5b18be7a79fe594ae,'0','6','0',0x63617465676f72792e7068703f69643d31343736,0x6d6964646c65);");
E_D("replace into `dsc_nav` values('74',0x63,'1477',0xe9a5aee9a39fe5a8b1e4b990,'0','1','0',0x63617465676f72792e7068703f69643d31343737,0x6d6964646c65);");

require("../../inc/footer.php");
?>