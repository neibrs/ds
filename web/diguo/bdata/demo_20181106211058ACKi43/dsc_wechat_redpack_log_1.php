<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_redpack_log`;");
E_C("CREATE TABLE `dsc_wechat_redpack_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `market_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '关联活动id',
  `hb_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '红包类型： 0 普通红包，1裂变红包',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '微信用户公众号唯一标示',
  `hassub` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否领取：0未领取，1已领取',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '领取金额',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '领取时间',
  `mch_billno` varchar(255) NOT NULL DEFAULT '' COMMENT '商户订单号',
  `mch_id` varchar(255) NOT NULL DEFAULT '' COMMENT '微信支付商户号',
  `wxappid` varchar(255) NOT NULL DEFAULT '' COMMENT '公众账号appid',
  `bill_type` varchar(255) NOT NULL DEFAULT '' COMMENT '订单类型',
  PRIMARY KEY (`id`),
  KEY `wechat_redpack_log_wechat_id_index` (`wechat_id`),
  KEY `wechat_redpack_log_market_id_index` (`market_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>