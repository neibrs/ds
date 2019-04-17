<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_im_dialog`;");
E_C("CREATE TABLE `dsc_im_dialog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '客户ID',
  `services_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '客服ID',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
  `store_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  `start_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '结束时间',
  `origin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1-PC 2-phone',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-未结束  2-已结束',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>