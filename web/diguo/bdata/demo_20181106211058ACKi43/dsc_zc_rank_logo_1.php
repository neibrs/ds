<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_zc_rank_logo`;");
E_C("CREATE TABLE `dsc_zc_rank_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `logo_intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_zc_rank_logo` values('1',0xe4bc97e7adb9e8bebee4baba,0x646174612f72616e6b5f696d6167652f313437303139363538383338303638383135382e706e67,'');");
E_D("replace into `dsc_zc_rank_logo` values('2',0xe4bc97e7adb9e78c8ee4baba,0x646174612f72616e6b5f696d6167652f313437303139363630353037363431373532312e706e67,'');");

require("../../inc/footer.php");
?>