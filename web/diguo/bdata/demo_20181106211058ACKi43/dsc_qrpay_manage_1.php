<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_qrpay_manage`;");
E_C("CREATE TABLE `dsc_qrpay_manage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qrpay_name` varchar(255) NOT NULL DEFAULT '' COMMENT '收款码名称',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '收款码类型(0自助、1 指定)',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收款码金额',
  `discount_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联优惠类型id',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联标签id',
  `qrpay_status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '收款状况',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  `qrpay_code` varchar(255) NOT NULL DEFAULT '' COMMENT '二维码链接',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_qrpay_manage` values('1',0xe887aae58aa9e694b6e6acbee7a081,'0','0.00','0','0','0','0',0x646174612f61747461636865642f71727061792f71727061795f303151382e706e67,'1505253902');");
E_D("replace into `dsc_qrpay_manage` values('2',0xe68c87e5ae9ae98791e9a29de694b6e6acbee7a081,'1','10.24','0','0','0','0',0x646174612f61747461636865642f71727061792f71727061795f303251382e706e67,'1505253931');");

require("../../inc/footer.php");
?>