<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_touch_nav`;");
E_C("CREATE TABLE `dsc_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_touch_nav` values('1','','0',0xe5ba97e993bae8a197,'1','1','0',0x696e6465782e7068703f6d3d73746f7265,0x746f70,0x73746f72652e706e67);");
E_D("replace into `dsc_touch_nav` values('2','','0',0xe59381e7898ce8a197,'1','2','0',0x696e6465782e7068703f6d3d6272616e64,0x746f70,0x6272616e642e706e67);");
E_D("replace into `dsc_touch_nav` values('3','','0',0xe4bf83e99480e6b4bbe58aa8,'1','3','0',0x696e6465782e7068703f6d3d6163746976697479,0x746f70,0x61637469766974792e706e67);");
E_D("replace into `dsc_touch_nav` values('4','','0',0xe69c80e696b0e59ba2e8b4ad,'1','4','0',0x696e6465782e7068703f6d3d67726f7570627579,0x746f70,0x67726f75706275792e706e67);");
E_D("replace into `dsc_touch_nav` values('5','','0',0xe7a7afe58886e68da2e8b4ad,'1','5','0',0x696e6465782e7068703f6d3d65786368616e6765,0x746f70,0x65786368616e67652e706e67);");
E_D("replace into `dsc_touch_nav` values('6','','0',0xe5beaee7a4bee58cba,'1','6','0',0x696e6465782e7068703f6d3d636f6d6d756e697479,0x746f70,0x636f6d6d756e6974792e706e67);");
E_D("replace into `dsc_touch_nav` values('7','','0',0xe5beaee7adb9,'1','7','0',0x696e6465782e7068703f6d3d63726f77645f66756e64696e67,0x746f70,0x63726f77645f66756e64696e672e706e67);");
E_D("replace into `dsc_touch_nav` values('8','','0',0xe68b8de58d96e6b4bbe58aa8,'1','8','0',0x696e6465782e7068703f6d3d61756374696f6e,0x746f70,0x61756374696f6e2e706e67);");
E_D("replace into `dsc_touch_nav` values('9','','0',0xe8b685e580bce7a4bce58c85,'1','9','0',0x696e6465782e7068703f6d3d7061636b616765,0x746f70,0x7061636b6167652e706e67);");
E_D("replace into `dsc_touch_nav` values('10','','0',0xe4b893e9a298e6b187,'1','10','0',0x696e6465782e7068703f6d3d746f706963,0x746f70,0x746f7069632e706e67);");
E_D("replace into `dsc_touch_nav` values('11','','0',0xe68bbce59ba2,'1','11','0',0x696e6465782e7068703f6d3d7465616d,0x746f70,0x70696e7475616e2e706e67);");

require("../../inc/footer.php");
?>