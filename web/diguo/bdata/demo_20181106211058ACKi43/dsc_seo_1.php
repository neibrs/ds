<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_seo`;");
E_C("CREATE TABLE `dsc_seo` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `keywords` varchar(255) NOT NULL COMMENT '关键词',
  `description` text NOT NULL COMMENT '描述',
  `type` varchar(20) NOT NULL COMMENT '类型',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='SEO信息存放表'");
E_D("replace into `dsc_seo` values('1',0x5745425343e5ae98e7bd91e58e9fe7949fe8a7a3e5af86,0x5745425343e5ae98e7bd91e58e9fe7949fe8a7a3e5af86,0x5745425343e5ae98e7bd91e58e9fe7949fe8a7a3e5af86,0x696e646578);");
E_D("replace into `dsc_seo` values('2',0xe59ba2e8b4ad,0xe59ba2e8b4ad,0xe59ba2e8b4ad,0x67726f7570);");
E_D("replace into `dsc_seo` values('3',0xe59ba2e8b4ade8afa6e68385,0xe59ba2e8b4ade8afa6e68385,0xe59ba2e8b4ade8afa6e68385,0x67726f75705f636f6e74656e74);");
E_D("replace into `dsc_seo` values('5',0xe7a7afe58886e59586e59f8e,0xe7a7afe58886e59586e59f8e,0xe7a7afe58886e59586e59f8e,0x6368616e6765);");
E_D("replace into `dsc_seo` values('6',0xe7a7afe58886e4b8ade5bf83e59586e59381e58685e5aeb9,0xe7a7afe58886e4b8ade5bf83e59586e59381e58685e5aeb9,0xe7a7afe58886e4b8ade5bf83e59586e59381e58685e5aeb9,0x6368616e67655f636f6e74656e74);");
E_D("replace into `dsc_seo` values('7',0xe69687e7aba0e58886e7b1bbe58897e8a1a8,0xe69687e7aba0e58886e7b1bbe58897e8a1a8,0xe69687e7aba0e58886e7b1bbe58897e8a1a8,0x61727469636c65);");
E_D("replace into `dsc_seo` values('8',0xe69687e7aba0e58685e5aeb9,0xe69687e7aba0e58685e5aeb9,0xe69687e7aba0e58685e5aeb9,0x61727469636c655f636f6e74656e74);");
E_D("replace into `dsc_seo` values('9',0xe5ba97e993bae8a197,0xe5ba97e993bae8a197,0xe5ba97e993bae8a197,0x73686f70);");
E_D("replace into `dsc_seo` values('10',0x20e59586e59381,0x20e59586e59381,0x20e59586e59381,0x676f6f6473);");
E_D("replace into `dsc_seo` values('12',0xe59381e7898c,0xe59381e7898c,0xe59381e7898c,0x6272616e645f6c697374);");
E_D("replace into `dsc_seo` values('13',0xe59381e7898ce59586e59381e58897e8a1a8,0xe59381e7898ce59586e59381e58897e8a1a8,0xe59381e7898ce59586e59381e58897e8a1a8,0x6272616e64);");

require("../../inc/footer.php");
?>