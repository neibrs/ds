<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wholesale_purchase`;");
E_C("CREATE TABLE `dsc_wholesale_purchase` (
  `purchase_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `contact_name` varchar(50) NOT NULL,
  `contact_gender` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `contact_phone` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `supplier_company_name` varchar(50) NOT NULL,
  `supplier_contact_phone` varchar(50) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `need_invoice` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `invoice_tax_rate` varchar(50) NOT NULL,
  `consignee_region` smallint(5) unsigned NOT NULL DEFAULT '0',
  `consignee_address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` text NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wholesale_purchase` values('1','18','0',0xe794b7e5bc8fe79fade8a29674e681a4e7baafe6a389e58d8ae8a296e5bcb9e58a9be4bfaee8baabe4bd93e681a4e689b9e58f91,'0',0xe5bca0e4b889,'1',0x313233343536373839,0x323133324071712e636f6d,'','','1499743143','1502380800','0','','36',0xe6b58be8af95e59cb0e59d80,'','1','');");
E_D("replace into `dsc_wholesale_purchase` values('2','18','0',0xe689b9e58f91e98787e8b4ad20e5b7b4e5b895e9b9bfe9ab98e59381e8b4a8e7bfbbe9a286e7baafe6a389e8b59be8bda6706f6c6fe8a1ab,'0',0xe69d8ee59b9b,'1',0x3133323133313334363436,0x313233334071712e636f6d,'','','1499743237','1531238400','0','','321',0xe699aee99980e58cbae4b8ade4b889e58c97e8b7af,'','1','');");
E_D("replace into `dsc_wholesale_purchase` values('3','18','0',0xe5ae9ae588b654e681a4e689b9e58f9120e794b7e5bc8fe79fade8a29674e681a4e9809fe58d96e9809a65626179e78886e6acbee794b7e8a385,'0',0xe78e8be4ba94,'1',0x313332313336343136,0x313233314071712e636f6d,'','','1499743305','1531238400','0','','52',0xe69c9de998b3e58cbae995bfe6b19fe58d97e8b7af,'','1','');");

require("../../inc/footer.php");
?>