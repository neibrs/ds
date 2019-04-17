<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_order_invoice`;");
E_C("CREATE TABLE `dsc_order_invoice` (
  `invoice_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `inv_payee` varchar(100) NOT NULL,
  `tax_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`invoice_id`),
  KEY `user_id` (`user_id`),
  KEY `tax_id` (`tax_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_order_invoice` values('1','118',0xe79a84,0x3233);");

require("../../inc/footer.php");
?>