<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_user_tag`;");
E_C("CREATE TABLE `dsc_wechat_user_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '标签id',
  `openid` varchar(255) NOT NULL DEFAULT '' COMMENT '用户openid',
  PRIMARY KEY (`id`),
  KEY `wechat_user_tag_wechat_id_index` (`wechat_id`),
  KEY `wechat_user_tag_tag_id_index` (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_user_tag` values('73','1','2',0x6f78357061776842453254436d6b37577644654d6f38743239673751);");
E_D("replace into `dsc_wechat_user_tag` values('58','1','2',0x6f78357061776b772d786f755a613176616a344237476f6e484d5251);");
E_D("replace into `dsc_wechat_user_tag` values('60','1','2',0x6f78357061777650366c75714a374f684334384a7636555536653441);");
E_D("replace into `dsc_wechat_user_tag` values('65','1','2',0x6f78357061776b795476425773646a756e4a426e6c4b68477073374d);");
E_D("replace into `dsc_wechat_user_tag` values('61','1','2',0x6f783570617773346d534d4d4f517a3251727a55656b3251596c4a6f);");
E_D("replace into `dsc_wechat_user_tag` values('64','1','2',0x6f7835706177716a786e6d5647304241756970385139784b57476541);");
E_D("replace into `dsc_wechat_user_tag` values('62','1','2',0x6f7835706177764e4c6958744447664c4a444b76556466597a623867);");
E_D("replace into `dsc_wechat_user_tag` values('71','1','2',0x6f78357061776d4a353450746a394e636162504643334f6664543149);");
E_D("replace into `dsc_wechat_user_tag` values('72','1','2',0x6f78357061776e3863457832616d61344959486e33506259464f6141);");
E_D("replace into `dsc_wechat_user_tag` values('59','1','2',0x6f783570617775445f50355f316844716a784e7057745a57504a4b49);");
E_D("replace into `dsc_wechat_user_tag` values('63','1','2',0x6f78357061776e584534524162415f7130577536346d475941493130);");
E_D("replace into `dsc_wechat_user_tag` values('67','1','2',0x6f7835706177694b64793342377a5470553156614578336237395449);");
E_D("replace into `dsc_wechat_user_tag` values('66','1','2',0x6f78357061776b7473655159757a43444a6c6271756a516867796941);");

require("../../inc/footer.php");
?>