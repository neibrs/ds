<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_comment`;");
E_C("CREATE TABLE `dsc_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `comment_server` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `comment_delivery` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(11) unsigned NOT NULL,
  `single_id` int(10) unsigned DEFAULT '0',
  `order_id` int(10) unsigned DEFAULT '0',
  `rec_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_tag` varchar(500) DEFAULT NULL,
  `useful` int(10) DEFAULT '0',
  `useful_user` text NOT NULL,
  `use_ip` varchar(15) DEFAULT NULL,
  `dis_id` int(10) unsigned DEFAULT '0',
  `like_num` int(10) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `dis_browse_num` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '浏览数',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`),
  KEY `ru_id` (`ru_id`),
  KEY `status` (`status`),
  KEY `comment_type` (`comment_type`),
  KEY `user_id` (`user_id`),
  KEY `single_id` (`single_id`),
  KEY `order_id` (`order_id`),
  KEY `rec_id` (`rec_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>