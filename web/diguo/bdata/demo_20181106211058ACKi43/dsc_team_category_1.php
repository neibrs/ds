<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_team_category`;");
E_C("CREATE TABLE `dsc_team_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '频道名称',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '频道描述',
  `tc_img` varchar(255) NOT NULL DEFAULT '' COMMENT '频道图标',
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '显示0否 1显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_team_category` values('1',0xe7949fe9b29c,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('2',0xe69c8de8a385,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('3',0xe7be8ee5a686,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('4',0xe6af8de5a9b4,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('5',0xe695b0e7a081,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('6',0xe794b5e599a8,'0','','','0','1');");
E_D("replace into `dsc_team_category` values('7',0xe6b0b4e69e9c,'1','',0x646174612f7465616d5f696d672f313437373030333637303236323134363337342e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('8',0xe6b5b7e9b29c,'1','',0x646174612f7465616d5f696d672f313437373030333732333535383434303938362e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('9',0xe894ace88f9c,'1','',0x646174612f7465616d5f696d672f313437373030333733373534333039333733302e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('10',0xe88289e7b1bb,'1','',0x646174612f7465616d5f696d672f313437373030333736353535343138363634382e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('11',0xe58d8ae8baabe8a399,'2','',0x646174612f7465616d5f696d672f313437363233383937363634343437383138332e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('12',0xe5b08fe8a1ab,'2','',0x646174612f7465616d5f696d672f313437363233383831383039343238303435332e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('13',0xe8a3a4e5ad90,'2','',0x646174612f7465616d5f696d672f313437363233383834373636393836373939362e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('14',0xe5a597e8a385,'2','',0x646174612f7465616d5f696d672f313437363233383837323937353735303032302e6a7067,'0','1');");
E_D("replace into `dsc_team_category` values('15',0xe5a4a9e784b6e99da2e8869c,'3','','','0','1');");
E_D("replace into `dsc_team_category` values('16',0xe59487e5bda9e58fa3e7baa2,'3','','','0','1');");
E_D("replace into `dsc_team_category` values('17',0xe4bf9de6b9bfe99da2e4b9b3,'3','','','0','1');");
E_D("replace into `dsc_team_category` values('18',0xe697b6e5b09ae9a699e6b0b4,'3','','','0','1');");
E_D("replace into `dsc_team_category` values('19',0xe5a9b4e584bfe8b5b7e5b185,'4','','','0','1');");
E_D("replace into `dsc_team_category` values('20',0xe5a688e592aae68aa4e79086,'4','','','0','1');");
E_D("replace into `dsc_team_category` values('21',0xe5a9b4e584bfe6b497e68aa4,'4','','','0','1');");
E_D("replace into `dsc_team_category` values('22',0xe699bae58a9be5bc80e58f91,'4','','','0','1');");
E_D("replace into `dsc_team_category` values('23',0xe695b0e7a081e79bb8e69cba,'5','','','0','1');");
E_D("replace into `dsc_team_category` values('24',0xe794b5e88491e9858de4bbb6,'5','','','0','1');");
E_D("replace into `dsc_team_category` values('25',0xe699bae883bde8aebee5a487,'5','','','0','1');");
E_D("replace into `dsc_team_category` values('26',0xe699bae883bde9858de4bbb6,'5','','','0','1');");
E_D("replace into `dsc_team_category` values('27',0xe58ea8e688bfe794b5e599a8,'6','','','0','1');");
E_D("replace into `dsc_team_category` values('28',0xe7949fe6b4bbe794b5e599a8,'6','','','0','1');");
E_D("replace into `dsc_team_category` values('29',0xe4b8aae4babae68aa4e79086,'6','','','0','1');");
E_D("replace into `dsc_team_category` values('30',0xe5bdb1e99fb3e794b5e599a8,'6','','','0','1');");

require("../../inc/footer.php");
?>