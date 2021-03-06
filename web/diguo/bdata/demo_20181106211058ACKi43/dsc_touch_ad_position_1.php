<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_touch_ad_position`;");
E_C("CREATE TABLE `dsc_touch_ad_position` (
  `position_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `position_name` varchar(60) NOT NULL DEFAULT '',
  `ad_width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ad_height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `position_desc` varchar(255) NOT NULL DEFAULT '',
  `position_style` text NOT NULL,
  `is_public` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(160) NOT NULL,
  `tc_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '频道id',
  `tc_type` varchar(255) NOT NULL DEFAULT '' COMMENT '广告类型',
  `ad_type` varchar(20) NOT NULL,
  PRIMARY KEY (`position_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1022 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_touch_ad_position` values('256','0',0xe6898be69cbae7abafe9a696e9a1b542616e6e6572e5b9bfe5918ae4bd8d,'360','168','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'0','','');");
E_D("replace into `dsc_touch_ad_position` values('257','0',0xe6898be69cbae5b9bfe5918ae4bd8d31,'360','168','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'0','','');");
E_D("replace into `dsc_touch_ad_position` values('258','0',0xe6898be69cbae5b9bfe5918ae4bd8d32,'360','168','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'0','','');");
E_D("replace into `dsc_touch_ad_position` values('1000','0',0xe7949fe9b29c2d62616e6e6572,'360','168','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x62616e6e6572,'');");
E_D("replace into `dsc_touch_ad_position` values('1001','0',0xe7949fe9b29c2d6c656674,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x6c656674,'');");
E_D("replace into `dsc_touch_ad_position` values('1002','0',0xe7949fe9b29c2d7269676874,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x7269676874,'');");
E_D("replace into `dsc_touch_ad_position` values('1003','0',0xe7949fe9b29c2d626f74746f6d,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x626f74746f6d,'');");
E_D("replace into `dsc_touch_ad_position` values('1004','0',0xe69c8de8a3852d62616e6e6572,'360','168','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x62616e6e6572,'');");
E_D("replace into `dsc_touch_ad_position` values('1005','0',0xe69c8de8a3852d6c656674,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x6c656674,'');");
E_D("replace into `dsc_touch_ad_position` values('1006','0',0xe69c8de8a3852d7269676874,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x7269676874,'');");
E_D("replace into `dsc_touch_ad_position` values('1007','0',0xe69c8de8a3852d626f74746f6d,'360','168','',0x7b666f72656163682024616473206173202461647d7b2461647d7b2f666f72656163687d,'0',0x65636d6f62616e5f647363,'1',0x626f74746f6d,'');");
E_D("replace into `dsc_touch_ad_position` values('1008','0',0xe9a696e9a1b5e7baa2e58c85e5b9bfe5918a,'360','180','',0x7b666f726561636820206173207d0a3c64697620636c6173733d227377697065722d736c696465223e3c2f6469763e0a7b2f666f72656163687d,'1',0x65636d6f62616e5f64736332303137,'0','','');");
E_D("replace into `dsc_touch_ad_position` values('1020','0',0xe7a08de4bbb7e9a696e9a1b562616e6e6572,'360','180','',0x7b666f72656163682024616473206173202461647d3c64697620636c6173733d227377697065722d736c696465223e7b2461647d3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f64736332303137,'0','','');");
E_D("replace into `dsc_touch_ad_position` values('1021','0',0xe7a792e69d802d62616e6e6572e5b9bfe5918ae4bd8d,'360','168','',0x7b666f726561636820206173207d3c64697620636c6173733d227377697065722d736c696465223e3c2f6469763e7b2f666f72656163687d,'0',0x65636d6f62616e5f64736332303137,'0',0x62616e6e6572,0x7365636b696c6c);");

require("../../inc/footer.php");
?>