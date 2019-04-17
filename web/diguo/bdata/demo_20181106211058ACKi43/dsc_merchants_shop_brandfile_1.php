<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_shop_brandfile`;");
E_C("CREATE TABLE `dsc_merchants_shop_brandfile` (
  `b_fid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bid` int(11) unsigned NOT NULL,
  `qualificationNameInput` varchar(255) NOT NULL,
  `qualificationImg` varchar(255) NOT NULL,
  `expiredDateInput` varchar(255) NOT NULL,
  `expiredDate_permanent` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`b_fid`),
  KEY `bid` (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_shop_brandfile` values('3','2',0xe6a8a1e69dbfe588b6e4bd9c,0x646174612f73657074735f496d6167652f313430353031393336343137363134303036302e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('4','2',0xe6898be69cba415050,0x646174612f73657074735f496d6167652f313430353031393336343131373339383336332e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('5','2',0xe68f92e4bbb6e5bc80e58f91,0x646174612f73657074735f496d6167652f313430353031393336343733343732323339382e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('6','2',0xe5beaee59586e59f8e,0x646174612f73657074735f496d6167652f313430353031393336343037313139333834322e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('11','4',0xe890a5e4b89ae689a7e785a7,0x646174612f73657074735f496d6167652f313430373434323437363831353039373131322e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('12','4',0xe7a88ee58aa1e799bbe8aeb0,0x646174612f73657074735f496d6167652f313430373434323437363132323436333031312e6a7067,0x31373233373532373830,'0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('13','4',0xe4baa7e59381e8af81e4b9a6,0x646174612f73657074735f496d6167652f313430373434323437363732343639313936302e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('16','23',0x32343332343131316161616161,0x646174612f73657074735f496d6167652f313434303034373634363335383531383733372e6a7067,'','0');");
E_D("replace into `dsc_merchants_shop_brandfile` values('17','24',0x313131,0x646174612f73657074735f496d6167652f313434303034373935373533303633383738362e6a7067,'','1');");
E_D("replace into `dsc_merchants_shop_brandfile` values('18','25',0x31313131,0x646174612f73657074735f496d6167652f313434303034383032323131333033313932312e6a7067,'','1');");
E_D("replace into `dsc_merchants_shop_brandfile` values('19','75',0xe5999ce595a6e595a6e595a6e595a6,0x646174612f73657074735f496d6167652f313435303133303739313232353638393337332e6a7067,'','1');");

require("../../inc/footer.php");
?>