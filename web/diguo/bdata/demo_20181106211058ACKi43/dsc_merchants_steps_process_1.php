<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_merchants_steps_process`;");
E_C("CREATE TABLE `dsc_merchants_steps_process` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `process_steps` tinyint(1) unsigned NOT NULL,
  `process_title` varchar(255) NOT NULL,
  `process_article` int(11) unsigned NOT NULL,
  `steps_sort` int(11) unsigned NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `fields_next` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_merchants_steps_process` values('1','2',0xe88194e7b3bbe696b9e5bc8f313131,'0','1','1',0xe4b88be4b880e6ada5efbc8ce5ae8ce59684e585ace58fb8e4bfa1e681af);");
E_D("replace into `dsc_merchants_steps_process` values('2','2',0xe585ace58fb8e4bfa1e681afe68f90e4baa4,'0','2','1',0xe4b88be4b880e6ada5efbc8ce5ae8ce59684e7a88ee58aa1e58f8ae993b6e8a18ce4bfa1e681af);");
E_D("replace into `dsc_merchants_steps_process` values('7','1',0xe7adbee7bdb2e59ca8e7babfe58d8fe8aeae,'53','1','1',0xe5908ce6848fe4bba5e4b88ae58d8fe8aeaeefbc8ce4b88be4b880e6ada5);");
E_D("replace into `dsc_merchants_steps_process` values('4','3',0xe5ba97e993bae59fbae69cace4bfa1e681af,'0','1','1',0xe4b88be4b880e6ada5efbc8ce5ae8ce59684e7b1bbe79baee58f8ae8b584e8b4a8);");
E_D("replace into `dsc_merchants_steps_process` values('5','3',0xe5ba97e993bae7b1bbe59e8be58f8ae7b1bbe79baee4bfa1e681af,'0','2','1',0xe4b88be4b880e6ada5efbc8ce6b7bbe58aa0e59381e7898c);");
E_D("replace into `dsc_merchants_steps_process` values('6','3',0xe6b7bbe58aa0e59381e7898c,'0','3','1',0xe4b88be4b880e6ada5efbc8ce5ba97e993bae591bde5908d);");
E_D("replace into `dsc_merchants_steps_process` values('8','2',0xe585ace58fb8e8af81e4bbb6e4bfa1e681afe68f90e4baa4,'0','3','1',0xe4b88be4b880e6ada5efbc8ce5ae8ce59684e5ba97e993bae4bfa1e681af);");
E_D("replace into `dsc_merchants_steps_process` values('9','3',0xe5ba97e993bae591bde5908d,'0','5','1',0xe4b88be4b880e6ada5efbc8ce7a1aee8aea4e59ca8e7babfe69c8de58aa1e58d8fe8aeae);");
E_D("replace into `dsc_merchants_steps_process` values('10','3',0xe696b0e5a29ee59381e7898c,'0','4','1','');");

require("../../inc/footer.php");
?>