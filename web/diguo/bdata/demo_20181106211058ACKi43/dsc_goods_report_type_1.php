<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_report_type`;");
E_C("CREATE TABLE `dsc_goods_report_type` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL,
  `type_desc` text NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_report_type` values('1',0xe587bae594aee7a681e594aee59381,0xe99480e594aee59586e59f8ee7a681e6ada2e5928ce99990e588b6e4baa4e69893e8a784e58899e4b88be68980e8a784e5ae9ae79a84e68980e69c89e59586e59381e38082,'0');");
E_D("replace into `dsc_goods_report_type` values('2',0xe4baa7e59381e8b4a8e9878fe997aee9a298,0xe4baa7e59381e8b4a8e9878fe5b7aeefbc8ce4b88ee68f8fe8bfb0e4b8a5e9878de4b88de79bb8e7aca6e38082,'0');");
E_D("replace into `dsc_goods_report_type` values('3',0xe587bae594aee7a681e594aee59381,0xe99480e594aee59586e59f8ee7a681e6ada2e5928ce99990e588b6e4baa4e69893e8a784e58899e4b88be68980e8a784e5ae9ae79a84e68980e69c89e59586e59381e38082,'1');");
E_D("replace into `dsc_goods_report_type` values('4',0xe4baa7e59381e8b4a8e9878fe997aee9a298,0xe4baa7e59381e8b4a8e9878fe5b7aeefbc8ce4b88ee68f8fe8bfb0e4b8a5e9878de4b88de79bb8e7aca6e38082,'1');");

require("../../inc/footer.php");
?>