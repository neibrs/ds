<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_qrpay_tag`;");
E_C("CREATE TABLE `dsc_qrpay_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  `tag_name` varchar(255) NOT NULL DEFAULT '' COMMENT '标签名称',
  `self_qrpay_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '相关自助收款码数量',
  `fixed_qrpay_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '相关指定金额收款码数量',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>