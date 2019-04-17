<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_goods_report_title`;");
E_C("CREATE TABLE `dsc_goods_report_title` (
  `title_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title_name` varchar(60) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`title_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_goods_report_title` values('1','1',0xe69eaae694afe5bcb9e88daf,'1');");
E_D("replace into `dsc_goods_report_title` values('2','1',0xe7aea1e588b6e58880e585b7e38081e5bc93e5bca9e7b1bbe38081e585b6e4bb96e6ada6e599a8e7ad89,'1');");
E_D("replace into `dsc_goods_report_title` values('3','1',0xe8b58ce58d9ae794a8e585b7e7b1bb,'1');");
E_D("replace into `dsc_goods_report_title` values('4','1',0xe6af92e59381e58f8ae590b8e6af92e5b7a5e585b7,'1');");
E_D("replace into `dsc_goods_report_title` values('5','2',0xe889b2e5b7aee5a4a7efbc8ce8b4a8e9878fe5b7aee38082,'1');");
E_D("replace into `dsc_goods_report_title` values('6','2',0xe68f8fe8bfb0e4b88ee5ae9ee789a9e4b8a5e9878de4b88de7aca6,'1');");

require("../../inc/footer.php");
?>