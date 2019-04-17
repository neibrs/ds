<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_discuss_circle`;");
E_C("CREATE TABLE `dsc_discuss_circle` (
  `dis_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `dis_browse_num` int(10) unsigned NOT NULL COMMENT '浏览数',
  `review_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `review_content` varchar(1000) NOT NULL,
  `like_num` int(10) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `quote_id` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned DEFAULT '0',
  `dis_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dis_title` varchar(200) NOT NULL DEFAULT '',
  `dis_text` text NOT NULL,
  `add_time` int(11) NOT NULL,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`dis_id`),
  KEY `parent_id` (`parent_id`),
  KEY `goods_id` (`goods_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`),
  KEY `dis_type` (`dis_type`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_discuss_circle` values('1','4','1','','0','0','0','0','1','0','1',0xe794b7e7949fe5a4a7e5ada6e59b9be5b9b4e4b88de794a8e6b497e99da2e5a5b6e6b497e884b8efbc8ce884b8e5b185e784b6e883bde8848fe68890e8bf99e6a0b7efbc81,0xe5a4a7e5ada6e5afb9e4ba8ee5be88e5a49ae5a5b3e7949fe69da5e8afb4e698afe4b880e5baa7e2809ce695b4e5aeb9e999a2e2809defbc8ce4bd86e698afe5afb9e4ba8ee794b7e7949fe69da5e8afb4e5b0b1e4b88de698afe8bf99e6a0b7e4ba86e38082e4b88de79fa5e98193e5a4a7e5aeb6e69c89e6b2a1e69c89e58f91e78eb0efbc8ce5a5b3e7949fe4bbace5a4a7e5ada6e4b880e6af95e4b89ae983bde587bae890bde68890e4ba86e5a5b3e7a59ee88c83e584bfefbc8ce8808ce982a3e4ba9be5889ae5bc80e5a78be79c8be79d80e8bf98e69c89e782b9e998b3e58589e38081e8bf90e58aa8e59e8be79a84e794b7e7949fe58db4e698afe8b68ae58f98e8b68ae68cabe4ba86efbc81,'1497478884',0x65636d6f62616e);");
E_D("replace into `dsc_discuss_circle` values('2','0','1','','0','1','0','0','1','0','1','',0xe5a4aae5aeb9e69893,'1497478903',0x65636d6f62616e);");
E_D("replace into `dsc_discuss_circle` values('3','1','1','','0','0','0','0','1','0','3',0xe6acb8efbc8ce4bda0e7bcbae79a84e982a3e6acbee69295e68b89e99da2e8869ce5a5bde5838fe59ca8e8bf99e9878c,0xe5a48fe5a4a9e6b2b9e885bbe885bbefbc8ce588abe8afb4e4b88ae5a686e4ba86efbc8ce6b2b9e88482e58886e6b38ce4b88de697bae79b9be4b88de5a0b5e5a19ee6af9be5ad94efbc8ce68891e4bbace5b0b1e781b0e5b8b8e5bc80e6a3aee595a60d0ae8bf99e6acbee7baa2e88cb6e69295e68b89e99da2e8869cefbc8ce7ae80e79bb4e5b0b1e698afe68891e79a84e5bf83e5a4b4e788b1efbc8ce8868fe4bd93e4b8b0e6b6a6e7bbb5e7a8a0efbc8ce6b682e4b88ae58ebbe5bfabe5b9b2e68890e8869cefbc8ce6b7b1e5b182e590b8e99984e6b2b9e88482e6b1a1e59ea2efbc8ce69295e4b88be69da5e79a84e8869ce4b8ade883bde6b885e699b0e58fafe8a781e9bb91e5a4b4e799bde5a4b40d0ae895b4e590abe7baa2e88cb6e7b2bee7b2b9efbc8ce6b6a6e882a4e6bb8be585bbe79a84e5908ce697b6e7bb86e887b4e6af9be5ad940d0ae78eb0e59ca8efbc8ce8bf98e69c89e4bb80e4b988e79086e794b1e4b88de8b681e5ae83e696ade8b4a7e5898defbc8ce68aa2e588b0e5ae83e38082,'1497478989',0x65636d6f62616e);");
E_D("replace into `dsc_discuss_circle` values('4','1','1','','1','0','0','0','1','0','3',0xe683b3e4b88de588b0e590a7efbc8ce8bf99e4ba9be7bb98e69cace7ab9fe784b6e68abce4ba86e4b8ade4ba8632303137e9ab98e88083e4bd9ce69687e9a298efbc81,0xe899bde784b6e9ab98e88083e5b7b2e6af95efbc8ce783ade6bdaee5b7b2e98080efbc8ce4bd86e698afe5afb9e4ba8ee9ab98e88083e4bd9ce69687e9a298efbc8ce5be88e5a49ae5a688e5a688e8bf98e698afe99d9ee5b8b8e585b3e5bf83e79a84efbc8ce6af95e7ab9fe5a49ae5b9b4e4bba5e5908eefbc8ce5ada9e5ad90e4b99fe4bc9ae4b880e6a0b7e8b88fe4b88ae9ab98e88083e4b98be8b7afefbc810d0ae68e90e68c87e4b880e7ae97efbc8ce7b1b3e5a688e58e9fe69da5e5b7b2e7a6bbe9ab98e88083e4b99fe69c89e58d81e5b9b4e5a49ae4ba86efbc8ce79c8be69c80e8bf91e587a0e5b9b4e587bae79a84e9ab98e88083e4bd9ce69687e9a298efbc8ce8b68ae69da5e8b68ae5a49ae79a84e4b88de698afe88083e69fa5e58699e4bd9ce79a84e5ba94e8af95e68a80e5b7a7efbc8ce8808ce698afe88083e69fa5e5ada9e5ad90e79c8be5be85e997aee9a298e79a84e8a792e5baa6e38081e58996e69e90e997aee9a298e79a84e883bde58a9befbc8ce88083e69fa5e79a84e698afe79fa5e8af86e99da2e79a84e5b9bfe5baa6e5928ce6b7b1e5baa6e38082e8808ce68daee58e86e5b9b4e79a84e9ab98e88083e4bd9ce69687e5ada6e99cb8e69da5e79c8befbc8ce4bb96e4bbace983bde4b88de698afe4b9a6e59186e5ad90efbc8ce8808ce4b894e99885e8afbbe9878fe58fafe4bba5e8afb4e698afe6838ae4b8bae5a4a9e59cb0efbc8ce78c8ee6b689e99da2e69e81e5b9bfefbc81e5b0b1e7ae97e58ebbe68e89e4bb96e4bbace9ab98e88083e78ab6e58583e79a84e8baabe4bbbdefbc8ce4bb96e4bbace79a84e6809de7bbb4e4b9a0e683afe4b99fe883bde8aea9e4bb96e4bbace7bb88e8baabe58f97e794a8efbc9ae78bace7ab8be6809de88083e883bde58a9befbc8ce7a59ee98787e9a39ee689ace79a84e887aae4bfa1efbc8ce88ba6e4b8ade4bd9ce4b990e79a84e4b990e8a782e7b2bee7a59eefbc8ce59ca8e5a58be69697e8bf87e7a88be4b8ade69c89e7a0b4e9879ce6b289e8889fe79a84e689a7e79d80efbc8ce8bf99e983bde883bde69bb4e5a5bde79a84e88083e9aa8ce4b880e4b8aae5ada9e5ad90e79a84e6af85e58a9be4b88ee58685e5bf83e380820d0ae4bba5e4b88ae8bf99e4ba9be889afe5a5bde79a84e4b9a0e683afefbc8ce983bde698afe59ca8e4bb96e4bbace5ada9e7aba5e697b6e4bba3e5b0b1e685a2e685a2e5bda2e68890efbc8c,'1497479181',0x65636d6f62616e);");
E_D("replace into `dsc_discuss_circle` values('5','1','1','','0','0','0','0','1','0','2',0xe59ca8e5aeb6e6808ee4b988e8bdbbe69dbee5819ae587bae7be8ee591b3e5b08fe9be99e899beefbc9f,0x6c7ae59083e8b4a7e4b880e69e9aefbc88e59083e8b4a7e5af86e68ea2efbc89efbc8ce5a4a7e5aeb6e79fa5e98193e59ca8e5aeb6e6808ee4b988e5819ae7be8ee591b3e5b08fe9be99e899bee59097efbc9f,'1497479331',0x65636d6f62616e);");

require("../../inc/footer.php");
?>