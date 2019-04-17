<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat_media`;");
E_C("CREATE TABLE `dsc_wechat_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wechat_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '公众号id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '图文消息标题',
  `command` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `author` varchar(255) NOT NULL DEFAULT '' COMMENT '作者',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否显示封面，1为显示，0为不显示',
  `digest` varchar(255) NOT NULL DEFAULT '' COMMENT '图文消息的描述',
  `content` text COMMENT '图文消息页面的内容，支持HTML标签',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '点击图文消息跳转链接',
  `file` varchar(255) NOT NULL DEFAULT '' COMMENT '图片链接',
  `size` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '媒体文件上传后，获取时的唯一标识',
  `file_name` varchar(255) NOT NULL DEFAULT '' COMMENT '媒体文件上传时间戳',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `edit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '编辑时间',
  `type` varchar(255) DEFAULT '',
  `article_id` varchar(255) DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `wechat_media_wechat_id_index` (`wechat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat_media` values('1','1',0xe588aee588aee58da1,0x67676b,0x4543544f554348205445414d,'1','',0xe588aee588aee58da1e68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d67676b,0x7075626c69632f6173736574732f7765636861742f67676b2f696d616765732f67676b2e706e67,'36866',0x67676b2e706e67,'','1493704916','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('2','1',0xe7a0b8e98791e89b8b,0x7a6a64,0x4543544f554348205445414d,'1','',0xe7a0b8e98791e89b8be68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d7a6a64,0x7075626c69632f6173736574732f7765636861742f7a6a642f696d616765732f7a6a642e706e67,'36866',0x7a6a642e706e67,'','1493704993','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('3','1',0xe5a4a7e8bdace79b98,0x647a70,0x4543544f554348205445414d,'1','',0xe5a4a7e8bdace79b98e68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d647a70,0x7075626c69632f6173736574732f7765636861742f647a702f696d616765732f647a702e706e67,'36866',0x647a702e706e67,'','1493705068','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('4','2',0xe5a4a7e8bdace79b98,0x647a70,0x4543544f554348205445414d,'1','',0xe5a4a7e8bdace79b98e68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d647a702672755f69643d31,0x7075626c69632f6173736574732f7765636861742f647a702f696d616765732f647a702e706e67,'36866',0x647a702e706e67,'','1500513350','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('5','2',0xe588aee588aee58da1,0x67676b,0x4543544f554348205445414d,'1','',0xe588aee588aee58da1e68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d67676b2672755f69643d31,0x7075626c69632f6173736574732f7765636861742f67676b2f696d616765732f67676b2e706e67,'36866',0x67676b2e706e67,'','1500513463','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('6','2',0xe7a0b8e98791e89b8b,0x7a6a64,0x4543544f554348205445414d,'1','',0xe7a0b8e98791e89b8be68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x68747470733a2f2f64656d6f2e6473636d616c6c2e636e2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d7a6a642672755f69643d31,0x7075626c69632f6173736574732f7765636861742f7a6a642f696d616765732f7a6a642e706e67,'36866',0x7a6a642e706e67,'','1500513495','0',0x6e657773,'','0');");
E_D("replace into `dsc_wechat_media` values('7','3',0xe7a0b8e98791e89b8b,0x7a6a64,0x4543544f554348205445414d,'1','',0xe7a0b8e98791e89b8be68abde5a596e6b4bbe58aa8efbc8ce4b8bae682a8e58786e5a487e4ba86e4bc97e5a49ae5a4a7e7a4bcefbc8ce6aca2e8bf8ee58f82e4b88ee38082,0x687474703a2f2f746368303839382e636f6d2f6d6f62696c652f696e6465782e7068703f6d3d77656368617426613d706c7567696e5f73686f77266e616d653d7a6a642672755f69643d3138,0x7075626c69632f6173736574732f7765636861742f7a6a642f696d616765732f7a6a642e706e67,'36866',0x7a6a642e706e67,'','1509103822','0',0x6e657773,'','0');");

require("../../inc/footer.php");
?>