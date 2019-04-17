<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_shipping_point`;");
E_C("CREATE TABLE `dsc_shipping_point` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_area_id` int(10) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `anchor` varchar(30) NOT NULL,
  `line` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shipping_area_id` (`shipping_area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_shipping_point` values('3','33',0xe585ace5b9b3e7ab99,0x616161,0x3032312d3335313230383831,0xe4b88ae6b5b7e5b882e899b9e58fa3e58cbae591a8e5aeb6e598b4e8b7af393833e58fb7203032312d3335313230383831,'',0x686f6e676b6f75,'');");
E_D("replace into `dsc_shipping_point` values('4','33',0xe4b88ae6b5b7e8b5a4e5b3b0e7ab9920,0x626262,0x3032312d353531353032353320,0xe4b88ae6b5b7e5b882e899b9e58fa3e58cbae69fb3e890a5e8b7af313235e58fb743e58cba38313330,'',0x73686966656e67,'');");
E_D("replace into `dsc_shipping_point` values('5','34',0xe4b88ae6b5b7e6b79ee58d97e7ab99,0x636363,0x3032312d363631383136353120,0xe4b88ae6b5b7e5b882e5ae9de5b1b1e58cbae6b79ee58d97e99587e6b79ee58f91e8b7af3235e5bc843439e58fb7312d32e5b182,'',0x736f6e676e616e,'');");
E_D("replace into `dsc_shipping_point` values('6','34',0xe4b88ae6b5b7e59cbae4b8ade7ab9920,0x646464,0x3032312d353531353139383120,0xe4b88ae6b5b7e5b882e5ae9de5b1b1e58cbae59cbae58c97e8b7af313338e58fb720,'',0x6368616e677a686f6e67,'');");
E_D("replace into `dsc_shipping_point` values('7','34',0xe5ae9de5b1b1e7ab9920,0x656565,0x3032312d3536353836393937,0xe4b88ae6b5b7e5b882e5ae9de5b1b1e58cbae58f8be8b08ae8b7af31353030e5bc84332d31333820,'',0x62616f7368616e,'');");
E_D("replace into `dsc_shipping_point` values('8','34',0xe7be8ee585b0e6b996e7ab9920,0x666666,0x3032312d363630313631313820,0xe4b88ae6b5b7e5b882e5ae9de5b1b1e58cbae5a496e78eafe4bba5e5a496e4b89ce5a4aae4b89ce8b7af373836e58fb720,'',0x6d65696c616e6875,'');");
E_D("replace into `dsc_shipping_point` values('9','35',0xe699aee99980e7ab99,0x676767,0x203032312d3332333032353239,0xe4b88ae6b5b7e5b882e699aee99980e58cbae6a285e5b2ade58c97e8b7af31323734e58fb7,'',0x707574756f,'');");

require("../../inc/footer.php");
?>