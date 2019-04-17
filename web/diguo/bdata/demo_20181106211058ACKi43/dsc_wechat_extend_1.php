<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_extend`;");
E_C("CREATE TABLE `dsc_wechat_extend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '功能名称',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `command` varchar(255) NOT NULL DEFAULT '' COMMENT '扩展词',
  `config` text COMMENT '配置信息',
  `type` varchar(255) NOT NULL DEFAULT '' COMMENT '类型',
  `enable` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否安装，1为已安装，0未安装',
  `author` varchar(255) NOT NULL DEFAULT '' COMMENT '作者',
  `website` varchar(255) NOT NULL DEFAULT '' COMMENT '网址',
  PRIMARY KEY (`id`),
  KEY `wechat_extend_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_extend` values('1','1',0xe7b2bee59381,0x62657374,0x62657374,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('2','1',0xe8aea2e58d95e69fa5e8afa2,0x646463782ce8aea2e58d95e69fa5e8afa2,0x64646378,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('3','1',0xe588aee588aee58da1,0xe588aee588aee58da12c67676b,0x67676b,0x613a31353a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30352d3032223b733a373a22656e6474696d65223b733a31303a22323031372d30362d3032223b733a393a227072697a655f6e756d223b733a313a2233223b733a31313a227072697a655f6c6576656c223b613a343a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b693a333b733a393a22e9bc93e58ab1e5a596223b7d733a31303a227072697a655f6e616d65223b613a343a7b693a303b733a373a224d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b693a333b733a31323a22e998b3e58589e699aee785a7223b7d733a31313a227072697a655f636f756e74223b613a343a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a353a223939393939223b7d733a31303a227072697a655f70726f62223b613a343a7b693a303b733a313a2231223b693a313b733a313a2231223b693a323b733a313a2231223b693a333b733a323a223937223b7d733a31313a226465736372697074696f6e223b733a37353a22e69cace6aca1e6b4bbe58aa8e79a84e5a596e59381e4b8bae6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e6a8a1e69dbfe5a082e68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2231223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('4','1',0xe7a7afe58886e69fa5e8afa2,0x6a6663782ce7a7afe58886e69fa5e8afa2,0x6a666378,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('5','1',0xe6af8fe697a5e7adbee588b0,0x7369676e2ce7adbee588b0,0x7369676e,0x613a333a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31363a2272616e6b5f706f696e745f76616c7565223b733a303a22223b733a31353a227061795f706f696e745f76616c7565223b733a303a22223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('6','1',0xe7a0b8e98791e89b8b,0xe7a0b8e98791e89b8b2c7a6a64,0x7a6a64,0x613a31343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a227072697a655f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30352d3032223b733a373a22656e6474696d65223b733a31303a22323031372d30362d3032223b733a31313a227072697a655f6c6576656c223b613a343a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b693a333b733a393a22e9bc93e58ab1e5a596223b7d733a31303a227072697a655f6e616d65223b613a343a7b693a303b733a373a224d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b693a333b733a31323a22e998b3e58589e699aee785a7223b7d733a31313a227072697a655f636f756e74223b613a343a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a343a2239393939223b7d733a31303a227072697a655f70726f62223b613a343a7b693a303b733a313a2231223b693a313b733a313a2231223b693a323b733a313a2231223b693a333b733a323a223937223b7d733a31313a226465736372697074696f6e223b733a37353a22e69cace6aca1e6b4bbe58aa8e79a84e5a596e59381e4b8bae6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e6a8a1e69dbfe5a082e68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2232223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('7','1',0xe585b3e6b3a8e98081e7baa2e58c85,0x626f6e75732ce585b3e6b3a8e98081e7baa2e58c85,0x626f6e7573,0x613a363a7b733a31323a22626f6e75735f737461747573223b733a313a2230223b733a353a22626f6e7573223b733a313a2230223b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('8','1',0xe5a4a7e8bdace79b98,0xe5a4a7e8bdace79b982c647a70,0x647a70,0x613a31353a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30352d3032223b733a373a22656e6474696d65223b733a31303a22323031372d30362d3032223b733a393a227072697a655f6e756d223b733a313a2233223b733a31313a227072697a655f6c6576656c223b613a343a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b693a333b733a393a22e9bc93e58ab1e5a596223b7d733a31303a227072697a655f6e616d65223b613a343a7b693a303b733a373a224d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b693a333b733a31323a22e998b3e58589e699aee785a7223b7d733a31313a227072697a655f636f756e74223b613a343a7b693a303b733a313a2231223b693a313b733a313a2232223b693a323b733a313a2233223b693a333b733a343a2239393939223b7d733a31303a227072697a655f70726f62223b613a343a7b693a303b733a313a2231223b693a313b733a313a2231223b693a323b733a313a2231223b693a333b733a323a223937223b7d733a31313a226465736372697074696f6e223b733a37353a22e69cace6aca1e6b4bbe58aa8e79a84e5a596e59381e4b8bae6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e6a8a1e69dbfe5a082e68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2233223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('9','1',0xe783ade58d96e59586e59381,0x686f74,0x686f74,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('10','1',0xe696b0e59381,0x6e657773,0x6e657773,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('11','1',0xe789a9e6b581e69fa5e8afa2,0x776c63782ce789a9e6b581e69fa5e8afa2,0x776c6378,0x613a343a7b733a31323a22706f696e745f737461747573223b733a313a2230223b733a31313a22706f696e745f76616c7565223b733a303a22223b733a393a22706f696e745f6e756d223b733a303a22223b733a31343a22706f696e745f696e74657276616c223b733a353a223836343030223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('12','2',0xe7b2bee59381,0x62657374,0x62657374,0x733a303a22223b,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('13','2',0xe5a4a7e8bdace79b98,0xe5a4a7e8bdace79b982c647a70,0x647a70,0x613a31313a7b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30372d3230223b733a373a22656e6474696d65223b733a31303a22323031382d30382d3331223b733a393a227072697a655f6e756d223b733a323a223130223b733a31313a227072697a655f6c6576656c223b613a333a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b7d733a31303a227072697a655f6e616d65223b613a333a7b693a303b733a373a226d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b7d733a31313a227072697a655f636f756e74223b613a333a7b693a303b733a313a2231223b693a313b733a323a223130223b693a323b733a333a22313030223b7d733a31303a227072697a655f70726f62223b613a333a7b693a303b733a303a22223b693a313b733a303a22223b693a323b733a303a22223b7d733a31313a226465736372697074696f6e223b733a35343a22e6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e59586e5889be7bd91e7bb9ce68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2234223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('14','2',0xe696b0e59381,0x6e657773,0x6e657773,0x733a303a22223b,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('15','2',0xe588aee588aee58da1,0xe588aee588aee58da12c67676b,0x67676b,0x613a31313a7b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30372d3230223b733a373a22656e6474696d65223b733a31303a22323031382d30382d3331223b733a393a227072697a655f6e756d223b733a323a223130223b733a31313a227072697a655f6c6576656c223b613a333a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b7d733a31303a227072697a655f6e616d65223b613a333a7b693a303b733a373a226d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b7d733a31313a227072697a655f636f756e74223b613a333a7b693a303b733a313a2231223b693a313b733a323a223130223b693a323b733a333a22313030223b7d733a31303a227072697a655f70726f62223b613a333a7b693a303b733a303a22223b693a313b733a303a22223b693a323b733a303a22223b7d733a31313a226465736372697074696f6e223b733a35343a22e6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e59586e5889be7bd91e7bb9ce68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2235223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('16','2',0xe7a0b8e98791e89b8b,0xe7a0b8e98791e89b8b2c7a6a64,0x7a6a64,0x613a31313a7b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d30372d3230223b733a373a22656e6474696d65223b733a31303a22323031382d30382d3031223b733a393a227072697a655f6e756d223b733a323a223130223b733a31313a227072697a655f6c6576656c223b613a333a7b693a303b733a393a22e4b880e7ad89e5a596223b693a313b733a393a22e4ba8ce7ad89e5a596223b693a323b733a393a22e4b889e7ad89e5a596223b7d733a31303a227072697a655f6e616d65223b613a333a7b693a303b733a373a226d6163626f6f6b223b693a313b733a363a226950686f6e65223b693a323b733a343a2269506164223b7d733a31313a227072697a655f636f756e74223b613a333a7b693a303b733a313a2231223b693a313b733a323a223130223b693a323b733a333a22313030223b7d733a31303a227072697a655f70726f62223b613a333a7b693a303b733a303a22223b693a313b733a303a22223b693a323b733a303a22223b7d733a31313a226465736372697074696f6e223b733a35343a22e6b58be8af95e695b0e68daeefbc8ce69c80e7bb88e8a7a3e9878ae69d83e5bd92e59586e5889be7bd91e7bb9ce68980e69c89e38082223b733a383a226d656469615f6964223b733a313a2236223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('17','2',0xe783ade58d96e59586e59381,0x686f74,0x686f74,0x733a303a22223b,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");
E_D("replace into `dsc_wechat_extend` values('18','3',0xe7a0b8e98791e89b8b,0xe7a0b8e98791e89b8b2c7a6a64,0x7a6a64,0x613a373a7b733a31303a2270656f706c655f6e756d223b733a313a2230223b733a393a22737461727474696d65223b733a31303a22323031372d31302d3237223b733a373a22656e6474696d65223b733a31303a22323031372d31312d3237223b733a393a227072697a655f6e756d223b733a303a22223b733a31313a226465736372697074696f6e223b733a303a22223b733a383a226d656469615f6964223b733a313a2237223b733a373a226861736c697374223b733a313a2231223b7d,0x66756e6374696f6e,'1',0x4543546f756368205465616d,0x687474703a2f2f7777772e6563746f7563682e636e);");

require("../../inc/footer.php");
?>