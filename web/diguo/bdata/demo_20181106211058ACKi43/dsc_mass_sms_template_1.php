<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_mass_sms_template`;");
E_C("CREATE TABLE `dsc_mass_sms_template` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `temp_id` varchar(255) NOT NULL COMMENT '模板ID',
  `temp_content` varchar(255) NOT NULL COMMENT '模板内容',
  `content` varchar(255) NOT NULL COMMENT '自定义内容',
  `add_time` int(15) NOT NULL COMMENT '添加时间',
  `set_sign` varchar(255) NOT NULL COMMENT '签名',
  `signature` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `temp_id` (`temp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>