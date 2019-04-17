<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_coupons_user`;");
E_C("CREATE TABLE `dsc_coupons_user` (
  `uc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `cou_id` int(11) DEFAULT NULL,
  `cou_money` decimal(10,0) unsigned NOT NULL DEFAULT '0',
  `is_use` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `uc_sn` char(12) NOT NULL DEFAULT '0',
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_use_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uc_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `cou_id` (`cou_id`),
  KEY `is_use` (`is_use`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_coupons_user` values('1','9','1','0','0',0x313439303232323730353238,'0','0');");
E_D("replace into `dsc_coupons_user` values('2','10','1','0','0',0x313439303232323731383539,'0','0');");
E_D("replace into `dsc_coupons_user` values('3','11','1','0','0',0x313439303232323733313333,'0','0');");
E_D("replace into `dsc_coupons_user` values('4','12','1','0','0',0x313439303232323734373634,'0','0');");
E_D("replace into `dsc_coupons_user` values('5','13','1','0','0',0x313439303232323736323539,'0','0');");
E_D("replace into `dsc_coupons_user` values('6','14','1','0','0',0x313439303232323737363637,'0','0');");
E_D("replace into `dsc_coupons_user` values('7','15','1','0','0',0x313439303232323739323234,'0','0');");
E_D("replace into `dsc_coupons_user` values('8','16','1','0','0',0x313439303232323830343431,'0','0');");
E_D("replace into `dsc_coupons_user` values('9','19','1','0','0',0x313439303233303730393231,'0','0');");
E_D("replace into `dsc_coupons_user` values('10','20','9','0','1',0x313439303233313731393435,'0','0');");
E_D("replace into `dsc_coupons_user` values('11','21','1','0','0',0x313439303233313734333730,'0','0');");
E_D("replace into `dsc_coupons_user` values('12','22','1','0','0',0x313439303233313734343535,'0','0');");
E_D("replace into `dsc_coupons_user` values('13','23','1','0','0',0x313439303238393832323831,'0','0');");
E_D("replace into `dsc_coupons_user` values('14','23','9','0','0',0x313439303238393834363631,'0','0');");
E_D("replace into `dsc_coupons_user` values('15','24','1','0','0',0x313439303330333036323833,'0','0');");
E_D("replace into `dsc_coupons_user` values('16','17','3','0','0',0x313439303330343830373639,'0','0');");
E_D("replace into `dsc_coupons_user` values('17','25','1','0','0',0x313439303330353534393334,'0','0');");
E_D("replace into `dsc_coupons_user` values('18','20','7','0','0',0x313439303535343032333131,'0','0');");
E_D("replace into `dsc_coupons_user` values('19','20','3','0','0',0x313439303535343033393132,'0','0');");
E_D("replace into `dsc_coupons_user` values('20','20','4','0','0',0x313439303535363438343636,'0','0');");
E_D("replace into `dsc_coupons_user` values('21','20','8','0','0',0x313439303536323839333731,'0','0');");
E_D("replace into `dsc_coupons_user` values('22','20','10','0','0',0x313439303536343638393538,'0','0');");
E_D("replace into `dsc_coupons_user` values('23','26','1','0','0',0x313439303536383839343735,'0','0');");
E_D("replace into `dsc_coupons_user` values('24','19','9','0','0',0x313439303538333037393535,'0','0');");
E_D("replace into `dsc_coupons_user` values('25','19','7','0','0',0x313439303538333038353738,'0','0');");
E_D("replace into `dsc_coupons_user` values('26','19','8','0','0',0x313439303538333130343435,'0','0');");
E_D("replace into `dsc_coupons_user` values('27','27','1','0','0',0x313439303633353339363137,'0','0');");
E_D("replace into `dsc_coupons_user` values('28','29','1','0','0',0x313439303839393431313738,'0','0');");
E_D("replace into `dsc_coupons_user` values('29','31','1','0','0',0x313439313332383032393535,'0','0');");
E_D("replace into `dsc_coupons_user` values('30','60','1','0','0',0x313530383432333831313633,'0','0');");
E_D("replace into `dsc_coupons_user` values('31','61','1','0','0',0x313530383432373431323230,'0','0');");
E_D("replace into `dsc_coupons_user` values('32','62','1','0','0',0x313530383432393032343535,'0','0');");
E_D("replace into `dsc_coupons_user` values('33','63','1','0','0',0x313530383432393230363436,'0','0');");
E_D("replace into `dsc_coupons_user` values('34','64','1','0','0',0x313530383433303136363232,'0','0');");
E_D("replace into `dsc_coupons_user` values('35','65','1','0','0',0x313530383433303338383338,'0','0');");
E_D("replace into `dsc_coupons_user` values('36','66','1','0','0',0x313530383433313635383737,'0','0');");
E_D("replace into `dsc_coupons_user` values('37','67','1','0','0',0x313530383433313838303130,'0','0');");
E_D("replace into `dsc_coupons_user` values('38','68','1','0','0',0x313530383433313838373936,'0','0');");
E_D("replace into `dsc_coupons_user` values('39','69','1','0','0',0x313530383433313936343632,'0','0');");
E_D("replace into `dsc_coupons_user` values('40','70','1','0','0',0x313530383433313937343839,'0','0');");
E_D("replace into `dsc_coupons_user` values('41','71','1','0','0',0x313530383433323030373439,'0','0');");
E_D("replace into `dsc_coupons_user` values('42','72','1','0','0',0x313530383433323130363731,'0','0');");
E_D("replace into `dsc_coupons_user` values('43','73','1','0','0',0x313530383433323436323730,'0','0');");
E_D("replace into `dsc_coupons_user` values('44','74','1','0','0',0x313530383433333033353436,'0','0');");
E_D("replace into `dsc_coupons_user` values('45','75','1','0','0',0x313530383433333735323931,'0','0');");
E_D("replace into `dsc_coupons_user` values('46','76','1','0','0',0x313530383433333934303335,'0','0');");
E_D("replace into `dsc_coupons_user` values('47','77','1','0','0',0x313530383433343938343735,'0','0');");
E_D("replace into `dsc_coupons_user` values('48','78','1','0','0',0x313530383433353030373934,'0','0');");
E_D("replace into `dsc_coupons_user` values('49','79','1','0','0',0x313530383433353433363534,'0','0');");
E_D("replace into `dsc_coupons_user` values('50','80','1','0','0',0x313530383433363630353736,'0','0');");
E_D("replace into `dsc_coupons_user` values('51','81','1','0','0',0x313530383433373231333238,'0','0');");
E_D("replace into `dsc_coupons_user` values('52','82','1','0','0',0x313530383433373536323636,'0','0');");
E_D("replace into `dsc_coupons_user` values('53','83','1','0','0',0x313530383433373630343336,'0','0');");
E_D("replace into `dsc_coupons_user` values('54','84','1','0','0',0x313530383433383232393132,'0','0');");
E_D("replace into `dsc_coupons_user` values('55','85','1','0','0',0x313530383433383332343331,'0','0');");
E_D("replace into `dsc_coupons_user` values('56','86','1','0','0',0x313530383433383932383538,'0','0');");
E_D("replace into `dsc_coupons_user` values('57','87','1','0','0',0x313530383433393033343834,'0','0');");
E_D("replace into `dsc_coupons_user` values('58','87','6','0','0',0x313530383433393239393330,'0','0');");
E_D("replace into `dsc_coupons_user` values('59','88','1','0','0',0x313530383433393330383837,'0','0');");
E_D("replace into `dsc_coupons_user` values('60','89','1','0','0',0x313530383434313037363737,'0','0');");
E_D("replace into `dsc_coupons_user` values('61','90','1','0','0',0x313530383434313332343431,'0','0');");
E_D("replace into `dsc_coupons_user` values('62','91','1','0','0',0x313530383434313433373331,'0','0');");
E_D("replace into `dsc_coupons_user` values('63','92','1','0','0',0x313530383434323230343137,'0','0');");
E_D("replace into `dsc_coupons_user` values('64','93','1','0','0',0x313530383434323232383439,'0','0');");
E_D("replace into `dsc_coupons_user` values('65','94','1','0','0',0x313530383434333238393934,'0','0');");
E_D("replace into `dsc_coupons_user` values('66','95','1','0','0',0x313530383434363136363835,'0','0');");
E_D("replace into `dsc_coupons_user` values('67','96','1','0','0',0x313530383434363236383439,'0','0');");
E_D("replace into `dsc_coupons_user` values('68','97','1','0','0',0x313530383434363436383330,'0','0');");
E_D("replace into `dsc_coupons_user` values('69','98','1','0','0',0x313530383434373230353539,'0','0');");
E_D("replace into `dsc_coupons_user` values('70','99','1','0','0',0x313530383434373639383438,'0','0');");
E_D("replace into `dsc_coupons_user` values('71','100','1','0','0',0x313530383434383931373835,'0','0');");
E_D("replace into `dsc_coupons_user` values('72','101','1','0','0',0x313530383434393331353630,'0','0');");
E_D("replace into `dsc_coupons_user` values('73','102','1','0','0',0x313530383434393338353632,'0','0');");
E_D("replace into `dsc_coupons_user` values('74','103','1','0','0',0x313530383434393733323537,'0','0');");
E_D("replace into `dsc_coupons_user` values('75','104','1','0','0',0x313530383435303933383533,'0','0');");
E_D("replace into `dsc_coupons_user` values('76','105','1','0','0',0x313530383435313136323338,'0','0');");
E_D("replace into `dsc_coupons_user` values('77','106','1','0','0',0x313530383435313635353739,'0','0');");
E_D("replace into `dsc_coupons_user` values('78','107','1','0','0',0x313530383435323931393236,'0','0');");
E_D("replace into `dsc_coupons_user` values('79','108','1','0','0',0x313530383435333034323934,'0','0');");
E_D("replace into `dsc_coupons_user` values('80','109','1','0','0',0x313530383435343134363937,'0','0');");
E_D("replace into `dsc_coupons_user` values('81','110','1','0','0',0x313530383435343234393539,'0','0');");
E_D("replace into `dsc_coupons_user` values('82','111','1','0','0',0x313530383435353334343231,'0','0');");
E_D("replace into `dsc_coupons_user` values('83','112','1','0','0',0x313530383435353430383131,'0','0');");
E_D("replace into `dsc_coupons_user` values('84','113','1','0','0',0x313530383436333232313437,'0','0');");
E_D("replace into `dsc_coupons_user` values('85','114','1','0','0',0x313530383734323338313433,'0','0');");
E_D("replace into `dsc_coupons_user` values('86','115','1','0','0',0x313530383734333136313832,'0','0');");
E_D("replace into `dsc_coupons_user` values('87','116','1','0','0',0x313530393038373430313534,'0','0');");
E_D("replace into `dsc_coupons_user` values('88','117','1','0','0',0x313530393536363231303931,'0','0');");
E_D("replace into `dsc_coupons_user` values('89','119','1','0','0',0x313531333034383935353234,'0','0');");
E_D("replace into `dsc_coupons_user` values('90','120','1','0','0',0x313531343539343236343436,'0','0');");
E_D("replace into `dsc_coupons_user` values('91','121','1','100','0',0x313532363739353531363433,'0','0');");

require("../../inc/footer.php");
?>