<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_shop_brand`;");
E_C("CREATE TABLE `dsc_merchants_shop_brand` (
  `bid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `bank_name_letter` varchar(150) NOT NULL,
  `brandName` varchar(180) NOT NULL,
  `brandFirstChar` char(60) NOT NULL,
  `brandLogo` varchar(255) NOT NULL,
  `brandType` tinyint(1) unsigned NOT NULL,
  `brand_operateType` tinyint(1) unsigned NOT NULL,
  `brandEndTime` varchar(255) NOT NULL,
  `brandEndTime_permanent` tinyint(1) unsigned NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `brand_desc` text NOT NULL,
  `sort_order` varchar(255) NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `major_business` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `audit_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` varchar(120) NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `user_id` (`user_id`),
  KEY `is_show` (`is_show`),
  KEY `audit_status` (`audit_status`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_shop_brand` values('1','1',0x77616e7a68756f,0xe4b887e58d93,0x77,0x646174612f73657074735f496d6167652f313439303134343731313134333033373035362e6a7067,'1','1','0','1',0x687474703a2f2f,'',0x3530,'0','0','1','1',0x31343930313434373131);");
E_D("replace into `dsc_merchants_shop_brand` values('2','2',0x6c766c69616e,0xe7bbbfe88194,0x6c,0x646174612f73657074735f496d6167652f313439303135333830303730393531353939342e6a7067,'1','1','0','1',0x687474703a2f2f,'',0x3530,'0','0','1','1',0x31343930313533383030);");
E_D("replace into `dsc_merchants_shop_brand` values('3','3',0x68756f79696e67,0xe781abe5bdb1,0x68,0x646174612f73657074735f496d6167652f313439303135383639333732323730353838372e6a7067,'1','1','0','1',0x687474703a2f2f,'',0x3530,'0','0','1','1',0x31343930313538363933);");
E_D("replace into `dsc_merchants_shop_brand` values('4','4',0x51594a53,0xe585a8e58f8be5aeb6e7a781,0x51,0x646174612f73657074735f496d6167652f313439303136303638343234373931343731392e6a7067,'1','1','0','1',0x687474703a2f2f,'',0x3530,'0','0','1','1',0x31343930313630363834);");
E_D("replace into `dsc_merchants_shop_brand` values('6','5',0x535a5353,0xe4b889e58faae69dbee9bca0,'',0x646174612f73657074735f496d6167652f313439303136343636313836363330303231362e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('7','6',0x465a,0xe99fa9e983bde8a1a3e8888d,'',0x646174612f73657074735f496d6167652f313439303136383638303330303931303434382e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('8','9',0x4d424c,0xe7be8ee5ae9de88eb2,'',0x646174612f73657074735f496d6167652f313439303232333035383635323434323538382e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('9','10',0x444c53,0xe69d9ce895bee696af,'','','0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('10','11',0x444d57,0xe5a49ae7a792e5b18b,'',0x646174612f73657074735f496d6167652f313439303232353233383630363134393130322e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('11','12',0x445a,0xe5a4a7e4bc97,'',0x646174612f73657074735f496d6167652f313439303232353837383030313631333037302e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('12','13',0x4444,0xe5bd93e5bd93e69797e888b0e5ba97,'',0x646174612f73657074735f496d6167652f313439303232363239323231333830363531372e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'1','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('13','14',0x5a4446,0xe591a8e5a4a7e7a68f,'',0x646174612f73657074735f496d6167652f313439303232363535383139323337333835362e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'0','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('14','15',0x51504c,0xe4b883e58cb9e78bbc,'',0x646174612f73657074735f496d6167652f313439303232363838303833363235303036372e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'1','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('15','16',0x444b4e,0xe8bfaae58da1e4beac,'',0x646174612f73657074735f496d6167652f313439303232383139393637393834383838342e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'1','0','0','1','');");
E_D("replace into `dsc_merchants_shop_brand` values('16','18',0x537769737365,0x537769737365,'',0x646174612f73657074735f496d6167652f313439303232383537333831313937323831392e6a7067,'0','0','','0',0x687474703a2f2f,'',0x3530,'1','0','0','0','');");
E_D("replace into `dsc_merchants_shop_brand` values('17','20',0x63616e6779616e,0xe88b8de9a29c,0x63,0x646174612f73657074735f496d6167652f313439303537333336353434313238383630342e6a7067,'1','1','0','1','','',0x3530,'0','0','1','0',0x31343930353733333635);");

require("../../inc/footer.php");
?>