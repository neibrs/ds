<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_touch_ad`;");
E_C("CREATE TABLE `dsc_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `link_color` varchar(60) NOT NULL,
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `public_ruid` int(11) unsigned NOT NULL DEFAULT '0',
  `ad_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_touch_ad` values('1','256','0',0x31,'','',0x696e6465785f62312e706e67,'1452412800','1629481600','','','','0','1','0','0','0','0','0','');");
E_D("replace into `dsc_touch_ad` values('2','257','0',0x32323233,'','',0x696e6465785f62616e6e65725f322e706e67,'1452412800','1629481600','','','','0','1','0','0','0','0','0','');");
E_D("replace into `dsc_touch_ad` values('3','258','0',0x3333333331,'','',0x696e6465785f62616e6e65725f332e706e67,'1452412800','1629481600','','','','0','1','0','0','0','0','0','');");
E_D("replace into `dsc_touch_ad` values('4','1000','0',0xe7949fe9b29c2d62616e6e6572303031,'','',0x313438313637323334393235353135343238332e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('5','1000','0',0xe7949fe9b29c2d62616e6e6572303032,'','',0x313438313637323435313835393239363637352e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('6','1001','0',0xe7949fe9b29c2d6c656674,'','',0x313438313637323534353630323436373830342e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('7','1002','0',0xe7949fe9b29c2d7269676874303031,'','',0x313438313637323631393238343631373433382e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('8','1002','0',0xe7949fe9b29c2d7269676874303032,'','',0x313438313637323735383638353837373433352e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('9','1003','0',0xe7949fe9b29c2d626f74746f6d,'','',0x313438313637393031373736313237323336312e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('10','1004','0',0xe69c8de8a3852d62616e6e6572,'','',0x313438313834343236313639353436303732362e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('11','1005','0',0xe69c8de8a3852d6c656674,'','',0x313438313834343231313139343738353235362e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('12','1006','0',0xe69c8de8a3852d72696768743031,'','',0x313438313834343039373631363138333036382e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('13','1006','0',0xe69c8de8a3852d72696768743032,'','',0x313438313834343132343339373431343034302e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('14','1007','0',0xe69c8de8a3852d626f74746f6d,'','',0x313438313834343030373534373537353937332e6a7067,'1481585927','1577229853','','','','0','1','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('15','0','0',0xe5a4a9e9998de7baa2e58c85,0x696e6465782e7068703f6d3d676f6f64732669643d363236,'',0x313530323036323935363632353730393330332e6a7067,'1500573613','1629481600','','','','0','0','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('16','259','0',0xe9a696e9a1b5e7baa2e58c85e5b9bfe5918a,0x696e6465782e7068703f6d3d626f6e7573,'',0x313530383337353931303434383234393635362e706e67,'1508374020','1606696948','','','','0','0','0','0','0','0','0','0');");
E_D("replace into `dsc_touch_ad` values('17','1020','0',0xe7a08de4bbb7e9a696e9a1b562616e6e65722d3031,'','',0x313530393636333737393738373832393134362e6a7067,'1508708579','1574372579','','','','0','1','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>