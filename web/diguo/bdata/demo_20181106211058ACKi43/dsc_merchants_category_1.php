<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_category`;");
E_C("CREATE TABLE `dsc_merchants_category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `sort_order` smallint(8) unsigned NOT NULL DEFAULT '0',
  `measure_unit` varchar(15) NOT NULL,
  `show_in_nav` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `grade` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `filter_attr` varchar(225) NOT NULL,
  `is_top_style` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `top_style_tpl` varchar(255) NOT NULL,
  `cat_icon` varchar(255) NOT NULL,
  `is_top_show` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `category_links` text NOT NULL,
  `category_topic` text NOT NULL,
  `pinyin_keyword` text NOT NULL,
  `cat_alias_name` varchar(90) NOT NULL,
  `template_file` varchar(50) NOT NULL,
  `add_titme` int(11) NOT NULL,
  `touch_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `user_id` (`user_id`),
  KEY `is_show` (`is_show`),
  KEY `parent_id` (`parent_id`),
  KEY `is_top_show` (`is_top_show`),
  KEY `cat_name` (`cat_name`),
  KEY `show_in_nav` (`show_in_nav`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_category` values('1',0x4c4544e781af,'0','1','1','','','50','','0','','0','','0','','','0','','',0x4c454464656e67,'','','0','');");
E_D("replace into `dsc_merchants_category` values('2',0xe794b5e590b9e9a38e,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e6368756966656e67,'','','0','');");
E_D("replace into `dsc_merchants_category` values('3',0xe794b5e7a381e78289,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e63696c75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('4',0xe794b5e9a5ade785b22d31,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e66616e31,'','','0','');");
E_D("replace into `dsc_merchants_category` values('5',0xe794b5e9a5ade785b22d32,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e66616e32,'','','0','');");
E_D("replace into `dsc_merchants_category` values('6',0xe794b5e9a38ee68987,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e66656e677368616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('7',0xe794b5e8a786e69cba,'0','1','1','','','50','','0','','0','','0','','','0','','',0x6469616e7368696a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('8',0xe58f96e69a96e599a8,'0','1','1','','','50','','0','','0','','0','','','0','','',0x71756e75616e7169,'','','0','');");
E_D("replace into `dsc_merchants_category` values('9',0xe6b0b4e9be99e5a4b4,'0','1','1','','','50','','0','','0','','0','','','0','','',0x736875696c6f6e67746f75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('10',0xe58983e9a1bbe58880,'0','1','1','','','50','','0','','0','','0','','','0','','',0x7469787564616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('11',0xe5beaee6b3a2e78289,'0','1','1','','','50','','0','','0','','0','','','0','','',0x776569626f6c75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('12',0xe6b497e8a1a3e69cba,'0','1','1','','','50','','0','','0','','0','','','0','','',0x786979696a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('13',0x6970686f6e65,'0','1','2','','','50','','0','','0','','0','','','0','','',0x6970686f6e65,'','','0','');");
E_D("replace into `dsc_merchants_category` values('14',0xe4bf9de68aa4e5a597,'0','1','2','','','50','','0','','0','','0','','','0','','',0x62616f687574616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('15',0xe58d95e58f8d,'0','1','2','','','50','','0','','0','','0','','','0','','',0x64616e66616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('16',0xe880b3e69cba,'0','1','2','','','50','','0','','0','','0','','','0','','',0x65726a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('17',0xe4b889e6989fe6898be69cba,'0','1','2','','','50','','0','','0','','0','','','0','','',0x73616e78696e6773686f756a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('18',0xe69184e5838fe69cba,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7368657869616e676a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('19',0xe695b0e68daee7babf,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7368756a757869616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('20',0xe5b08fe7b1b3e6898be69cba,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7869616f6d6973686f756a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('21',0xe699bae883bde6898be8a1a8,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7a68696e656e6773686f756269616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('22',0xe699bae883bde6898be78eaf,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7a68696e656e6773686f756875616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('23',0xe887aae68b8de69d86,'0','1','2','','','50','','0','','0','','0','','','0','','',0x7a6970616967616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('24',0x55e79b98,'0','1','3','','','50','','0','','0','','0','','','0','','',0x5570616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('25',0xe7ac94e8aeb0e69cac,'0','1','3','','','50','','0','','0','','0','','','0','','',0x62696a6962656e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('26',0xe794b5e88491e4b8bbe69cba,'0','1','3','','','50','','0','','0','','0','','','0','','',0x6469616e6e616f7a68756a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('27',0xe79b92e5ad90,'0','1','3','','','50','','0','','0','','0','','','0','','',0x68657a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('28',0xe69cbae7aeb1,'0','1','3','','','50','','0','','0','','0','','','0','','',0x6a697869616e67,'','','0','');");
E_D("replace into `dsc_merchants_category` values('29',0xe994aee79b98e9bca0e6a087,'0','1','3','','','50','','0','','0','','0','','','0','','',0x6a69616e70616e7368756269616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('30',0xe8b7afe794b1e599a8,'0','1','3','','','50','','0','','0','','0','','','0','','',0x6c75796f757169,'','','0','');");
E_D("replace into `dsc_merchants_category` values('31',0xe5b9b3e69dbfe794b5e88491,'0','1','3','','','50','','0','','0','','0','','','0','','',0x70696e6762616e6469616e6e616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('32',0xe689abe68f8fe4bbaa,'0','1','3','','','50','','0','','0','','0','','','0','','',0x73616f6d69616f7969,'','','0','');");
E_D("replace into `dsc_merchants_category` values('33',0xe58fb0e5bc8fe69cba,'0','1','3','','','50','','0','','0','','0','','','0','','',0x7461697368696a69,'','','0','');");
E_D("replace into `dsc_merchants_category` values('34',0xe9a490e585b7,'0','1','4','','','50','','0','','0','','0','','','0','','',0x63616e6a75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('35',0xe58ea8e585b7,'0','1','4','','','50','','0','','0','','0','','','0','','',0x6368756a75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('36',0xe88cb6e585b7,'0','1','4','','','50','','0','','0','','0','','','0','','',0x6368616a75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('37',0xe5ba8a,'0','1','4','','','50','','0','','0','','0','','','0','','',0x636875616e67,'','','0','');");
E_D("replace into `dsc_merchants_category` values('38',0xe5ba8ae5a4b4e69f9c,'0','1','4','','','50','','0','','0','','0','','','0','','',0x636875616e67746f75677569,'','','0','');");
E_D("replace into `dsc_merchants_category` values('39',0xe99485e585b7,'0','1','4','','','50','','0','','0','','0','','','0','','',0x67756f6a75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('40',0xe4b889e4bbb6e5a597,'0','1','4','','','50','','0','','0','','0','','','0','','',0x73616e6a69616e74616f,'','','0','');");
E_D("replace into `dsc_merchants_category` values('41',0xe6b299e58f91,'0','1','4','','','50','','0','','0','','0','','','0','','',0x7368616661,'','','0','');");
E_D("replace into `dsc_merchants_category` values('42',0xe8a1a3e69f9c,'0','1','4','','','50','','0','','0','','0','','','0','','',0x7969677569,'','','0','');");
E_D("replace into `dsc_merchants_category` values('43',0xe69e95e5a4b4,'0','1','4','','','50','','0','','0','','0','','','0','','',0x7a68656e746f75,'','','0','');");
E_D("replace into `dsc_merchants_category` values('44',0xe59cb0e696b9e789b9e4baa7,'0','1','5','','','50','','0','','0','','0','','','0','','',0x646966616e6774656368616e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('45',0xe8bf9be58fa3e99bb6e9a39f,'0','1','5','','','50','','0','','0','','0','','','0','','',0x6a696e6b6f756c696e67736869,'','','0','');");
E_D("replace into `dsc_merchants_category` values('46',0xe4bc91e997b2e9a39fe59381,'0','1','5','','','50','','0','','0','','0','','','0','','',0x7869757869616e73686970696e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('47',0xe5a5b3e8a385,'0','1','6','','','50','','0','','0','','0','','','0','','',0x6e767a6875616e67,'','','0','');");
E_D("replace into `dsc_merchants_category` values('48',0xe68890e4babae794a8e59381,'0','1','10','','','50','','0','','0','','0','','','0','','',0x6368656e6772656e796f6e6770696e,'','','0','');");
E_D("replace into `dsc_merchants_category` values('49',0xe58c96e5a686e794a8e59381,'0','1','9','','','50','','0','','0','','0','','','0','','',0x6875617a6875616e67796f6e6770696e,'','','0','');");

require("../../inc/footer.php");
?>