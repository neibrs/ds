<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_floor_content`;");
E_C("CREATE TABLE `dsc_floor_content` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(50) NOT NULL COMMENT '关联模版表filename',
  `region` varchar(100) NOT NULL COMMENT '关联模版表region',
  `id` int(11) NOT NULL COMMENT '关联模版表id',
  `id_name` varchar(100) NOT NULL COMMENT 'id对应的内容名称',
  `brand_id` int(11) NOT NULL COMMENT '品牌id',
  `brand_name` varchar(100) NOT NULL COMMENT '品牌名称',
  `theme` varchar(100) NOT NULL COMMENT '当前选择的模板',
  PRIMARY KEY (`fb_id`),
  KEY `brand_id` (`brand_id`),
  KEY `theme` (`theme`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_floor_content` values('1',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'93',0xe5908ce5ba86e5928ce5a082,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('2',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'71',0x657370726974,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('3',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'72',0x454c4c4520484f4d45,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('4',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'76',0xe98791e588a9e69da5,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('5',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'79',0x6a757374796c65,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('6',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'82',0xe69d8ee5ae81,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('7',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'85',0xe5969ce7919e,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('8',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'86',0xe5bab7e6af94e789b9,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('9',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'89',0xe581a5e5ae89e5969c,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('10',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'6',0xe794b7e8a385e38081e5a5b3e8a385e38081e58685e8a1a3,'91',0xe98791e5a5a5e58a9b,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('13',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'92',0xe4b880e59381e78e89,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('14',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'115',0xe8a5bfe997a8e5ad90,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('15',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'116',0xe4bc8ae88eb1e5858be696af,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('16',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'124',0xe4babfe581a5,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('17',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'130',0x54502d4c494e4c,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('18',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'131',0x5a4950504f,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('21',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'139',0xe9a39ee7a791,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('23',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'85',0xe5969ce7919e,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('25',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'178',0xe69687e8bda9e7bd91,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('27',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'8',0xe99e8be99db4e38081e7aeb1e58c85e38081e9929fe8a1a8e38081e5a5a2e4be88e59381,'93',0xe5908ce5ba86e5928ce5a082,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('28',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'97',0xe696afe4bcafe4b881,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('29',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'132',0xe998bfe78e9be5b0bc,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('31',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'136',0xe58d9ae697b6e59fbae98791,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('32',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'137',0xe8bebee588a9e59bad,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('33',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'141',0xe99299e5b094e5a587,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('34',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'142',0xe593a5e5bc9f,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('35',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'144',0xe6b5b7e9a39ee4b89d,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('36',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'150',0xe58d8ee5b89d,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('37',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'151',0xe5a7ace88aae,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('38',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'12',0xe9a39fe59381e38081e98592e7b1bbe38081e7949fe9b29ce38081e789b9e4baa7,'90',0xe58c97e5a4a7e88d92,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('40',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'88',0xe585bbe7949fe5a082,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('41',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'92',0xe4b880e59381e78e89,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('42',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'124',0xe4babfe581a5,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('43',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'131',0x5a4950504f,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('45',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'154',0xe58ca1e5a881,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('46',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'160',0xe7be8ee79a84,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('47',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'163',0xe9ad85e6978f,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('48',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'108',0xe88bb9e69e9c,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('49',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'109',0xe8afbae59fbae4ba9a,0x65636d6f62616e5f64736332303137);");
E_D("replace into `dsc_floor_content` values('50',0x696e646578,0xe9a696e9a1b5e6a5bce5b182,'858',0xe5aeb6e794a8e794b5e599a8,'110',0xe69dbee4b88be794b5e599a8,0x65636d6f62616e5f64736332303137);");

require("../../inc/footer.php");
?>