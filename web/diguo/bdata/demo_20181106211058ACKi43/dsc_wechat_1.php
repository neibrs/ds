<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_wechat`;");
E_C("CREATE TABLE `dsc_wechat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '公众号名称',
  `orgid` varchar(255) NOT NULL DEFAULT '' COMMENT '公众号原始ID',
  `weixin` varchar(255) NOT NULL DEFAULT '' COMMENT '微信号',
  `token` varchar(255) NOT NULL DEFAULT '' COMMENT 'Token',
  `appid` varchar(255) NOT NULL DEFAULT '' COMMENT 'AppID',
  `appsecret` varchar(255) NOT NULL DEFAULT '' COMMENT 'AppSecret',
  `encodingaeskey` varchar(255) NOT NULL DEFAULT '' COMMENT 'EncodingAESKey',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '公众号类型',
  `oauth_status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启微信登录',
  `secret_key` varchar(255) NOT NULL DEFAULT '' COMMENT '密钥',
  `oauth_redirecturi` varchar(255) NOT NULL DEFAULT '' COMMENT '回调地址',
  `oauth_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回调统计',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `default_wx` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1为平台标识，0为商家标识',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '商家ID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `wechat_ru_id_unique` (`ru_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_wechat` values('1',0x777869645f7a3174706b6338386e6e68663132e79a84e68ea5e58fa3e6b58be8af95e58fb7,0x7a3174706b6338386e6e68663132,'',0x6332383064323063303932656566323737363138363764396631383235326134,0x777864616535643539613763313633383436,0x6631343032643935313231623431666137653238646236373963643239326166,0x64646c637364637334363534393837643961736473616461,'2','0',0x3263666237663263633630646266326138303033653236353261646366333666,'','0','1493672667','0','1','1','0');");
E_D("replace into `dsc_wechat` values('2',0xe59586e5889be59586e5aeb6e6b58be8af95,0x67685f373765366139396431343732,'',0x343339663834,0x777831316237316138616664343339663834,0x6634333065333733393961663765333334663764306266353430313466313732,'','2','0',0x6565633064663062646539663532336164333261346539336139326632316538,'','0','1493749963','0','1','0','1');");
E_D("replace into `dsc_wechat` values('3',0x3132,0x3132,'',0x3132,0x3132,0x3132,0x3132,'2','0',0x6130313631303232386665393938663531356137326464373330323934643837,'','0','1508708581','0','1','0','18');");

require("../../inc/footer.php");
?>