<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_package_goods`;");
E_C("CREATE TABLE `dsc_package_goods` (
  `package_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_number` int(10) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `dsc_package_goods` values('37','785','0','3','41');");
E_D("replace into `dsc_package_goods` values('37','787','0','3','41');");
E_D("replace into `dsc_package_goods` values('37','788','0','3','41');");
E_D("replace into `dsc_package_goods` values('38','616','0','1','41');");
E_D("replace into `dsc_package_goods` values('38','617','0','1','41');");
E_D("replace into `dsc_package_goods` values('38','618','0','1','41');");
E_D("replace into `dsc_package_goods` values('38','620','0','1','41');");
E_D("replace into `dsc_package_goods` values('38','622','0','1','41');");

require("../../inc/footer.php");
?>