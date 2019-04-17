<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_admin_user`;");
E_C("CREATE TABLE `dsc_admin_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ru_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rs_id` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` int(10) unsigned NOT NULL,
  `suppliers_id` int(10) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  `major_brand` smallint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user_img` varchar(255) NOT NULL,
  `recently_cat` varchar(255) NOT NULL COMMENT '管理员最近使用分类',
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`),
  KEY `ru_id` (`ru_id`),
  KEY `rs_id` (`rs_id`),
  KEY `role_id` (`role_id`),
  KEY `ec_salt` (`ec_salt`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_admin_user` values('56',0x71776d61726b,'0','18','0','',0x6633663964376162306562643363616162656364316637396131383639666233,0x34363831,'0','1508405377',0x3132372e302e302e31,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c636f6d6d656e745f656469745f64656c6574652c646973637573735f636972636c652c67616c6c6572795f616c62756d2c636f6d6d697373696f6e5f73657474696e672c616c6c6f745f707269762c6c6f67735f6d616e6167652c6c6f67735f64726f702c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c70726976696c6567655f73656c6c65722c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f7072696e745f73657474696e672c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c6261636b5f766965772c6f726465725f6261636b5f6170706c792c6f726465725f7072696e742c6f726465725f646574656374696f6e2c6f726465725f6f735f72656d6f76652c65786368616e67652c636f6d706c61696e742c746f7069635f6d616e6167652c736e617463685f6d616e6167652c626f6e75735f6d616e6167652c676966745f6d616e6167652c61645f6d616e6167652c61756374696f6e2c67726f75705f62792c6661766f757261626c652c77686f6c655f73616c652c7061636b6167655f6d616e6167652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c636f75706f6e735f6d616e6167652c7465616d5f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6170706c792c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c746f7563685f64617368626f6172642c676f6f64735f7073692c73746f726167655f7075742c73746f726167655f6f75742c6f66666c696e655f73746f72652c7765636861745f61646d696e2c6d6173735f6d6573736167652c6175746f5f7265706c792c6d656e752c66616e732c6d656469612c7172636f64652c657874656e642c6d61726b65742c77686f6c655f73616c652c77686f6c6573616c655f6f726465722c676f6f64735f6c69625f6c6973742c676f6f64735f6c69625f636174,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('55',0xe8bfaae58da1e4beac,'0','16','0','',0x3062366562396435323463636661646430613437373733656431373537323535,0x36333735,'0','1490552586',0x3131362e3233312e3135392e3731,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e67,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('54',0xe4b883e58cb9e78bbc,'0','15','0','',0x6166386561316430326261303938376532313734306666653566363432313038,0x36323031,'0','1490552654',0x3131362e3233312e3135392e3731,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e67,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('53',0xe591a8e5a4a7e7a68f,'0','14','0','',0x3338343531383734633331373937323137336530386162666262336264633738,0x31363132,'0','1490226618',0x3131362e3233312e33312e313735,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('52',0xe5bd93e5bd93e69797e888b0e5ba97,'0','13','0','',0x6237653034663438346236303231653732633134383061666465306665306337,0x34393438,'0','1490552745',0x3131362e3233312e3135392e3731,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('51',0xe5a4a7e4bc97,'0','12','0','',0x3936306164646132643439633131346661656264326231386461363034376336,0x31323635,'0','1490226029',0x3131362e3233312e33312e313735,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('50',0xe5a49ae7a792e5b18b,'0','11','0','',0x3236666238383235336439653835626539373061383833636135636564653133,0x37373335,'0','1490552480',0x3131362e3233312e3135392e3731,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('49',0xe69d9ce4b8bde5908ee58fb0,'0','10','0','',0x3835303935636131663832353339663764333439353165346431613034663063,0x36353734,'0','1490314399',0x3130312e38312e37302e313632,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('47',0xe99fa9e983bde8a1a3e8888d,'0','6','0','',0x3631323234616663646538383830333739633230623137656638633739386464,0x33383131,'0','1490919619',0x3130312e38312e3235322e3135,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('46',0xe4b889e58faae69dbee9bca0,'0','5','0','',0x6237643733346666346363643534656435396330653531656232383438373338,0x39313931,'0','1490314151',0x3130312e38312e37302e313632,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('48',0xe7be8ee5ae9de88eb2,'0','9','0','',0x3436663865356336323738663862396433323032386139643165383133636633,0x39373333,'0','1490918823',0x3130312e38312e3235322e3135,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('45',0xe585a8e58f8be5aeb6e7a781,'0','4','0','',0x6335666662636263653639393737376166383064623866656338643965306439,0x37363638,'0','1490313784',0x3130312e38312e37302e313632,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('44',0xe781abe5bdb1,'0','3','0','',0x6135313563313964353337623964663434393765353361313133613862633937,0x39393934,'0','1490313614',0x3130312e38312e37302e313632,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('43',0xe7bbbfe88194,'0','2','0','',0x6237643733346666346363643534656435396330653531656232383438373338,0x39313931,'0','1490915879',0x3130312e38312e3235322e3135,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c646973637573735f636972636c652c67616c6c6572795f616c62756d2c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c626f6e75735f6d616e6167652c6661766f757261626c652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c6f66666c696e655f73746f7265,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('42',0x6d61726b7a686f75,'0','1','0','',0x3863663938383538616534393865316566393331313937333932356262366232,0x31393538,'0','1508054441',0x3132372e302e302e31,0x676f6f64735f6d616e6167652c72656d6f76655f6261636b2c6361745f6d616e6167652c6361745f64726f702c617474725f6d616e6167652c636f6d6d656e745f707269762c676f6f64735f747970652c676f6f64735f6175746f2c76697275616c636172642c676f6f64735f6578706f72742c676f6f64735f62617463682c6d65726368616e74735f6272616e642c636f6d6d656e745f656469745f64656c6574652c646973637573735f636972636c652c67616c6c6572795f616c62756d2c636f6d6d697373696f6e5f73657474696e672c616c6c6f745f707269762c6c6f67735f6d616e6167652c6c6f67735f64726f702c73656c6c65725f6d616e6167652c73656c6c65725f616c6c6f742c73656c6c65725f64726f702c70726976696c6567655f73656c6c65722c736869705f6d616e6167652c73686970617265615f6d616e6167652c77617265686f7573655f6d616e6167652c6f726465725f7072696e745f73657474696e672c6f726465725f6f735f656469742c6f726465725f70735f656469742c6f726465725f73735f656469742c6f726465725f656469742c6f726465725f766965772c6f726465725f766965775f66696e69736865642c72657061795f6d616e6167652c626f6f6b696e672c73616c655f6f726465725f73746174732c64656c69766572795f766965772c6261636b5f766965772c6f726465725f6261636b5f6170706c792c6f726465725f7072696e742c6f726465725f646574656374696f6e2c6f726465725f6f735f72656d6f76652c65786368616e67652c636f6d706c61696e742c746f7069635f6d616e6167652c736e617463685f6d616e6167652c626f6e75735f6d616e6167652c676966745f6d616e6167652c61645f6d616e6167652c61756374696f6e2c67726f75705f62792c6661766f757261626c652c77686f6c655f73616c652c7061636b6167655f6d616e6167652c65786368616e67655f676f6f64732c70726573616c652c676966745f676172645f6d616e6167652c74616b655f6d616e6167652c636f75706f6e735f6d616e6167652c7465616d5f6d616e6167652c6d65726368616e74735f636f6d6d697373696f6e2c73656c6c65725f6170706c792c73656c6c65725f6163636f756e742c73656c6c65725f73746f72655f696e666f726d612c73656c6c65725f73746f72655f6f746865722c31305f76697375616c5f65646974696e672c746f7563685f64617368626f6172642c676f6f64735f7073692c73746f726167655f7075742c73746f726167655f6f75742c6f66666c696e655f73746f72652c7765636861745f61646d696e2c6d6173735f6d6573736167652c6175746f5f7265706c792c6d656e752c66616e732c6d656469612c7172636f64652c657874656e642c6d61726b65742c77686f6c655f73616c652c77686f6c6573616c655f6f726465722c676f6f64735f6c69625f6c6973742c676f6f64735f6c69625f636174,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,'0','0','','');");
E_D("replace into `dsc_admin_user` values('58',0x61646d696e,'0','0','0',0x61646d696e4071712e6f6d,0x3930356465663838353137313464373633653236333730656137636361613435,0x38303938,'1499815619','1541478248',0x3132372e302e302e31,0x616c6c,0xe59586e59381e58897e8a1a87c676f6f64732e7068703f6163743d6c6973742ce8aea2e58d95e58897e8a1a87c6f726465722e7068703f6163743d6c6973742ce794a8e688b7e8af84e8aeba7c636f6d6d656e745f6d616e6167652e7068703f6163743d6c6973742ce4bc9ae59198e58897e8a1a87c75736572732e7068703f6163743d6c6973742ce59586e5ba97e8aebee7bdae7c73686f705f636f6e6669672e7068703f6163743d6c6973745f65646974,'','0','0',NULL,NULL,'0','','');");

require("../../inc/footer.php");
?>