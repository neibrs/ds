<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_payment`;");
E_C("CREATE TABLE `dsc_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`),
  KEY `is_online` (`is_online`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_payment` values('9',0x616c69706179,0xe694afe4bb98e5ae9d,'0',0xe694afe4bb98e5ae9de7bd91e7ab99287777772e616c697061792e636f6d2920e698afe59bbde58685e58588e8bf9be79a84e7bd91e4b88ae694afe4bb98e5b9b3e58fb0e38082,'0',0x613a393a7b693a303b613a333a7b733a343a226e616d65223b733a31343a22616c697061795f6163636f756e74223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a313a2231223b7d693a313b613a333a7b733a343a226e616d65223b733a31303a22616c697061795f6b6579223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a313a2231223b7d693a323b613a333a7b733a343a226e616d65223b733a31343a22616c697061795f706172746e6572223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a313a2231223b7d693a333b613a333a7b733a343a226e616d65223b733a31373a22616c697061795f7061795f6d6574686f64223b733a343a2274797065223b733a363a2273656c656374223b733a353a2276616c7565223b733a303a22223b7d693a343b613a333a7b733a343a226e616d65223b733a31313a227573655f73616e64626f78223b733a343a2274797065223b733a363a2273656c656374223b733a353a2276616c7565223b733a303a22223b7d693a353b613a333a7b733a343a226e616d65223b733a363a226170705f6964223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a303a22223b7d693a363b613a333a7b733a343a226e616d65223b733a393a227369676e5f74797065223b733a343a2274797065223b733a363a2273656c656374223b733a353a2276616c7565223b733a303a22223b7d693a373b613a333a7b733a343a226e616d65223b733a31343a22616c695f7075626c69635f6b6579223b733a343a2274797065223b733a383a227465787461726561223b733a353a2276616c7565223b733a313a2231223b7d693a383b613a333a7b733a343a226e616d65223b733a31353a227273615f707269766174655f6b6579223b733a343a2274797065223b733a383a227465787461726561223b733a353a2276616c7565223b733a313a2231223b7d7d,'0','0','1');");
E_D("replace into `dsc_payment` values('10',0x62616e6b,0xe993b6e8a18ce6b187e6acbe2fe8bdace5b890,'0',0xe993b6e8a18ce5908de7a7b00d0ae694b6e6acbee4babae4bfa1e681afefbc9ae585a8e7a7b020c397c397c39720efbc9be5b890e58fb7e68896e59cb0e59d8020c397c397c39720efbc9be5bc80e688b7e8a18c20c397c397c397e380820d0ae6b3a8e6848fe4ba8be9a1b9efbc9ae58a9ee79086e794b5e6b187e697b6efbc8ce8afb7e59ca8e794b5e6b187e58d95e2809ce6b187e6acbee794a8e98094e2809de4b880e6a08fe5a484e6b3a8e6988ee682a8e79a84e8aea2e58d95e58fb7e38082,'0',0x613a303a7b7d,'1','0','0');");
E_D("replace into `dsc_payment` values('11',0x62616c616e6365,0xe4bd99e9a29de694afe4bb98,'0',0xe4bdbfe794a8e5b890e688b7e4bd99e9a29de694afe4bb98e38082e58faae69c89e4bc9ae59198e6898de883bde4bdbfe794a8efbc8ce9809ae8bf87e8aebee7bdaee4bfa1e794a8e9a29de5baa6efbc8ce58fafe4bba5e9808fe694afe38082,'0',0x613a303a7b7d,'1','0','0');");
E_D("replace into `dsc_payment` values('14',0x6368756e73656a696e726f6e67,0xe799bde69da1e694afe4bb98,'0',0x65636d6f62616ee6a8a1e69dbfe5a082e6a0b9e68daee4baace4b89ce799bde69da1e79086e5bfb5e887aae4b8bbe5bc80e58f91e694afe4bb98e696b9e5bc8fe7a88be5ba8f2ce5a682e682a8e683b3e8a681e59ca8e7bd91e7ab99e4b8ade4bdbfe794a8e799bde69da1e694afe4bb98e38081e799bde69da1e58886e69c9f2ce8afb7e58aa1e5bf85e5ae89e8a385e6ada4e696b9e6b39521,'0',0x613a303a7b7d,'0','0','1');");
E_D("replace into `dsc_payment` values('15',0x6f6e6c696e65706179,0xe59ca8e7babfe694afe4bb98,'0',0xe683b3e8a681e4bdbfe794a8e59ca8e7babfe694afe4bb98e79a84e4b880e7b3bbe58897e696b9e6b395e5a682e694afe4bb98e5ae9d2ce4bd99e9a29de694afe4bb982ce5b0b1e5bf85e9a1bbe5ae89e8a385e8afa5e68f92e4bbb62ce590a6e58899e8aea2e58d95e7bb93e7ae97e9a1b5e4b88de4bc9ae698bee7a4ba22e59ca8e7babfe694afe4bb9822e68c89e992ae,'0',0x613a303a7b7d,'1','0','0');");
E_D("replace into `dsc_payment` values('16',0x636f64,0xe8b4a7e588b0e4bb98e6acbe,'0',0xe5bc80e9809ae59f8ee5b882efbc9ae6b5b7e58d97e79c81e5848be5b79ee5b8820d0ae8b4a7e588b0e4bb98e6acbee58cbae59f9fefbc9ae5848be5b79ee5b882,'0',0x613a303a7b7d,'0','1','0');");
E_D("replace into `dsc_payment` values('17',0x7778706179,0xe5beaee4bfa1e694afe4bb98,'0',0xe5beaee4bfa1e694afe4bb98efbc8ce698afe59fbae4ba8ee5aea2e688b7e7abafe68f90e4be9be79a84e69c8de58aa1e58a9fe883bde38082e5908ce697b6e59091e59586e688b7e68f90e4be9be99480e594aee7bb8fe890a5e58886e69e90e38081e8b4a6e688b7e5928ce8b584e98791e7aea1e79086e79a84e58a9fe883bde694afe68c81e38082e794a8e688b7e9809ae8bf87e689abe68f8fe4ba8ce7bbb4e7a081e38081e5beaee4bfa1e58685e68993e5bc80e59586e59381e9a1b5e99da2e8b4ade4b9b0e7ad89e5a49ae7a78de696b9e5bc8fe8b083e8b5b7e5beaee4bfa1e694afe4bb98e6a8a1e59d97e5ae8ce68890e694afe4bb98e38082,'0',0x613a343a7b693a303b613a333a7b733a343a226e616d65223b733a31313a2277787061795f6170706964223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a303a22223b7d693a313b613a333a7b733a343a226e616d65223b733a31353a2277787061795f617070736563726574223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a303a22223b7d693a323b613a333a7b733a343a226e616d65223b733a393a2277787061795f6b6579223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a303a22223b7d693a333b613a333a7b733a343a226e616d65223b733a31313a2277787061795f6d63686964223b733a343a2274797065223b733a343a2274657874223b733a353a2276616c7565223b733a303a22223b7d7d,'0','0','1');");
E_D("replace into `dsc_payment` values('18',0x706f7374,0xe982aee5b180e6b187e6acbe,0x302e31,0xe694b6e6acbee4babae4bfa1e681afefbc9ae5a793e5908d20e69da8e586a0e6a3a0efbc9be59cb0e59d8020e6b5b7e58d97e5848be5b79ee982a3e5a4a7e9bc8ee5b09ae5b9bfe59cba4131303220efbc9be982aee7bc9635373137303020e380820d0ae6b3a8e6848fe4ba8be9a1b9efbc9a20e8afb7e59ca8e6b187e6acbee58d95e8838ce99da2e79a84e99984e8a880e4b8ade6b3a8e6988ee682a8e79a84e8aea2e58d95e58fb7efbc8ce58faae5a1abe58699e5908e36e4bd8de58db3e58fafe38082,'0',0x613a303a7b7d,'0','0','0');");

require("../../inc/footer.php");
?>