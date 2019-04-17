<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_shop_information`;");
E_C("CREATE TABLE `dsc_merchants_shop_information` (
  `shop_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `shoprz_type` tinyint(3) unsigned NOT NULL,
  `subShoprz_type` tinyint(3) unsigned NOT NULL,
  `shop_expireDateStart` varchar(255) NOT NULL,
  `shop_expireDateEnd` varchar(255) NOT NULL,
  `shop_permanent` tinyint(1) unsigned NOT NULL,
  `authorizeFile` varchar(255) NOT NULL,
  `shop_hypermarketFile` varchar(255) NOT NULL,
  `shop_categoryMain` int(11) unsigned NOT NULL,
  `user_shopMain_category` text NOT NULL,
  `shoprz_brandName` varchar(150) NOT NULL,
  `shop_class_keyWords` varchar(150) NOT NULL,
  `shopNameSuffix` varchar(150) NOT NULL,
  `rz_shopName` varchar(150) NOT NULL,
  `hopeLoginName` varchar(150) NOT NULL,
  `merchants_message` varchar(255) NOT NULL,
  `allow_number` int(11) unsigned NOT NULL DEFAULT '0',
  `steps_audit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `merchants_audit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `review_goods` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `sort_order` smallint(4) unsigned NOT NULL DEFAULT '100',
  `store_score` int(10) NOT NULL DEFAULT '5',
  `is_street` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_IM` tinyint(4) unsigned NOT NULL DEFAULT '1' COMMENT '是否开启\"在线客服\"功能 0:关闭 1:启用',
  `self_run` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '自营店铺',
  `shop_close` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否关闭店铺（0：关闭，1：开启）',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shop_id`),
  KEY `user_id` (`user_id`),
  KEY `shoprz_brandName` (`shoprz_brandName`),
  KEY `shopNameSuffix` (`shopNameSuffix`),
  KEY `rz_shopName` (`rz_shopName`),
  KEY `sort_order` (`sort_order`),
  KEY `merchants_audit` (`merchants_audit`),
  KEY `is_street` (`is_street`),
  KEY `shop_close` (`shop_close`),
  KEY `self_run` (`self_run`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_shop_information` values('1','1','0','1','1',0x323031372d31322d30372031343a3230,0x323031372d31322d30372031343a3230,'0','','','858',0x3835383a313136302c313134352c313132392c313131352c31313035,0xe4b887e58d93,0xe4b887e58d93,0xe69797e888b0e5ba97,0xe4b887e58d93e69797e888b0e5ba97,0x65636d6f62616e31,'','0','1','1','1','1','5','1','1','1','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('2','2','0','2','0',0x323031372d30332d32322032313a3035,0x323031372d30332d32322032313a3035,'0','','','3',0x333a3131322c39392c37362c36342c34372c34322c33372c3333,0xe7bbbfe88194,0xe7bbbfe88194,0xe4b893e58d96e5ba97,0xe7bbbfe88194,0x65636d6f62616e32,'','1','1','1','1','2','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('3','3','0','1','0',0x323031372d30332d32342031333a3536,0x323031372d30332d32342031333a3536,'0','','','4',0x343a3135372c3134382c3134342c3134312c3133322c3135382c333035,0xe781abe5bdb1,0xe781abe5bdb1e69797e888b0e5ba97,0xe69797e888b0e5ba97,0xe781abe5bdb1e69797e888b0e5ba97,0x65636d6f62616e33,'','0','1','1','1','3','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('4','4','0','3','0',0x323031372d30332d32322032313a3332,0x323031372d30332d32322032313a3332,'0','','','5',0x353a3134332c3135392c3138382c3230352c3233332c3235352c3237312c3330332c333138,0xe585a8e58f8be5aeb6e7a781,0xe585a8e58f8be5aeb6e7a781,0xe4b893e890a5e5ba97,0xe585a8e58f8be5aeb6e7a781,0x65636d6f62616e34,'','0','1','1','1','4','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('5','5','0','0','0',0x323031372d30332d32342031343a3031,0x323031372d30332d32342031343a3031,'0','','','12',0x31323a3631352c3631362c3631372c3631392c3632302c3632312c3632322c3632332c363234,0xe4b889e58faae69dbee9bca0,'','',0xe4b889e58faae69dbee9bca0,0x65636d6f62616e35,'','0','1','1','0','5','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('6','6','0','2','0',0x323031372d30332d32342031343a3030,0x323031372d30332d32342031343a3030,'0','','','6',0x363a3334372c3436332c3534372c3633302c31343432,0xe69c8de8a385,0xe69c8de8a385,0xe4b893e58d96e5ba97,0xe99fa9e983bde8a1a3e8888d,0x65636d6f62616e36,'','0','1','1','0','8','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('8','9','0','1','1',0x323031372d30332d32342031343a3031,0x323031372d30332d32342031343a3031,'0','','','860',0x3836303a3837362c3838302c3838352c3839312c3839362c313230352c31323130,0xe7be8ee5ae9de88eb2,0xe7be8ee5ae9de88eb2e69797e888b0e5ba97,0xe69797e888b0e5ba97,0xe7be8ee5ae9de88eb2,0x65636d6f62616e38,'','0','1','1','0','6','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('9','10','0','2','0',0x323031372d30332d32342031343a3034,0x323031372d30332d32342031343a3034,'0','','','863',0x3836333a313032382c313033352c313034342c313035382c313331352c31333136,0xe69d9ce895bee696af,0xe78bace7ab8be5b888,0xe4b893e58d96e5ba97,0xe68890e4babae69797e888b0e5ba97,0x65636d6f62616e39,'','0','1','1','0','7','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('10','11','0','2','0',0x323031372d30332d32342031333a3537,0x323031372d30332d32342031333a3537,'0','','','11',0x31313a3437362c3437372c3437392c3438312c3438322c3438332c3438342c3438372c3438392c3439302c343931,0xe5a49ae7a792e5b18b,0xe5a49ae7a792e5b18b,0xe4b893e58d96e5ba97,0xe5a49ae7a792e5b18b,0x65636d6f62616e3130,'','0','1','1','1','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('12','12','0','2','0',0x323031372d30332d32332031353a3430,0x323031372d30332d32332031353a3430,'0','','','861',0x3836313a3937372c3938352c3939352c313030302c313030362c313031322c313031372c313032342c31323838,0xe5a4a7e4bc97,0xe5a4a7e4bc97,0xe4b893e58d96e5ba97,0xe5a4a7e4bc97,0x65636d6f62616e3132,'','0','1','1','0','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('13','13','0','1','1',0x323031372d30332d32342031343a3032,0x323031372d30332d32342031343a3032,'0','','','1',0x313a31352c31362c31372c31382c31392c32302c32312c32322c32352c3134322c313632,0xe5bd93e5bd93e69797e888b0e5ba97,0xe5bd93e5bd93e69797e888b0e5ba97,0xe69797e888b0e5ba97,0xe5bd93e5bd93e69797e888b0e5ba97,0x65636d6f62616e3133,'','0','1','1','1','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('14','14','0','1','1',0x323031372d30332d32342031343a3033,0x323031372d30332d32342031343a3033,'0','','','864',0x3836343a3935372c3936362c313235312c31323532,0xe591a8e5a4a7e7a68f,0xe591a8e5a4a7e7a68f,0xe69797e888b0e5ba97,0xe591a8e5a4a7e7a68f,0x65636d6f62616e3134,'','0','1','1','1','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('15','15','0','1','2',0x323031372d30332d32342031363a3333,0x323031372d30332d32342031363a3333,'0','','','8',0x383a3335332c3335352c3335372c3335392c3336302c3336322c3336342c333636,0xe4b883e58cb9e78bbc,0xe4b883e58cb9e78bbc,0xe69797e888b0e5ba97,0xe4b883e58cb9e78bbc,0x65636d6f62616e3135,'','0','1','1','1','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('16','16','0','2','0',0x323031372d30332d32342031363a3333,0x323031372d30332d32342031363a3333,'0','','','866',0x3836363a3930322c3930392c3931392c3932372c3933342c3934322c393531,0xe8bfaae58da1e4beac,0xe8bfaae58da1e4beac,0xe4b893e58d96e5ba97,0xe8bfaae58da1e4beac,0x65636d6f62616e3136,'','0','1','1','1','100','5','1','1','0','1','0');");
E_D("replace into `dsc_merchants_shop_information` values('17','18','0','2','0',0x323031372d30332d32342031363a3333,0x323031372d30332d32342031363a3333,'0','','','863',0x3836333a313032382c313033352c313034342c313035382c313331352c31333136,0x537769737365,0x537769737365,0xe4b893e58d96e5ba97,0x537769737365,0x65636d6f62616e3137,'','0','1','1','0','100','5','1','1','0','1','0');");

require("../../inc/footer.php");
?>