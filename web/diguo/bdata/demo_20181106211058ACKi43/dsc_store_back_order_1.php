<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `dsc_store_back_order`;");
E_C("CREATE TABLE `dsc_store_back_order` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `store_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

require("../../inc/footer.php");
?>