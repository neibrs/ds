<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_brand`;");
E_C("CREATE TABLE `dsc_brand` (
  `brand_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_letter` varchar(60) NOT NULL,
  `brand_first_char` char(1) NOT NULL,
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `index_img` varchar(80) NOT NULL,
  `brand_bg` varchar(80) NOT NULL,
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `audit_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` varchar(120) NOT NULL,
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`),
  KEY `audit_status` (`audit_status`),
  KEY `brand_name` (`brand_name`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_brand` values('71',0x657370726974,0x657370726974,0x45,0x313439303037313937343937303334393538342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('72',0x454c4c4520484f4d45,0x454c4c4520484f4d45,0x45,0x313439303037323331333839353935373634382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('73',0xe5a5b9e4bb962f74617461,0xe5a5b9e4bb962f74617461,0x54,0x313439303037323332393138333936363139352e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('74',0xe6a2a6e789b9e5a887,0xe6a2a6e789b9e5a887,0x4d,0x313439303037323334343334303439323735382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('75',0xe4bd90e4b8b9e5a5b4,0xe4bd90e4b8b9e5a5b4,0x5a,0x313439303037323335383438373433393230332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('76',0xe98791e588a9e69da5,0xe98791e588a9e69da5,0x4a,0x313439303037323337333237383336373331352e6a7067,0x313439303231393232333531373634383130332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('77',0xe998bfe8bfaae8bebee696af,0xe998bfe8bfaae8bebee696af,0x41,0x313439303037323338343632373637393036392e6a7067,0x313439303231393031363633343934363035332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('78',0xe78cabe4baba,0xe78cabe4baba,0x4d,0x313439303037323339393534323539353832382e6a7067,0x313439303231393133343238343434343934382e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('79',0x6a757374796c65,0x6a757374796c65,0x4a,0x313439303037323637373439353036313538342e6a7067,0x313439303034383034363338343139353737382e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('80',0x44696f72,0x44696f72,0x44,0x313439303037323431373735353833303137362e6a7067,0x313439303034373933373736353033333230372e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('81',0xe5ae9de5a7bf,0x504f525453,0x42,0x313439303037323638353030323237303734322e6a7067,0x313439303034373835373034343631303838362e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('82',0xe69d8ee5ae81,0x4c694e696e67,0x4c,0x313439303037323639343639353630303037382e6a7067,0x313439303034373735313138323139383931372e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('83',0xe799bde585b0e6b08f,0xe799bde585b0e6b08f,0x42,0x313439303037323732383339343039373237382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('84',0xe5908ce4bb81e5a082,0x545254,0x54,0x313439303037323734363635313933353937392e6a7067,0x313439303034373636393336383334333633382e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('85',0xe5969ce7919e,0x58495249,0x58,0x313439303037323735363033323137353230342e6a7067,0x313439303034373434313338383030393436372e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('86',0xe5bab7e6af94e789b9,0x435054,0x4b,0x313439303037323736353630343132313438312e6a7067,0x313439303034373331393131333336303139332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('87',0xe6b1a4e887a3e5808de581a5,0x54616e674368656e,0x54,0x313439303037323737373739303337343035342e6a7067,0x313439303033353935363536393139383934332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('88',0xe585bbe7949fe5a082,0x595354,0x59,0x313439303037323738373232333435333631372e6a7067,0x313439303034373131393435313737393135312e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('89',0xe581a5e5ae89e5969c,0x474e43,0x4a,0x313439303037323830343434323633373638352e6a7067,0x313439303034373034373532333832383134322e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('90',0xe58c97e5a4a7e88d92,0x62656964616875616e67,0x42,0x313439303037323831333732393137353330362e6a7067,0x313439303034363839333932333939353537382e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('91',0xe98791e5a5a5e58a9b,0x6b696e676f6c79,0x4a,0x313439303037323832333130363533323134342e6a7067,0x313439303034363739383739313239303839352e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('92',0xe4b880e59381e78e89,0x796970696e677975,0x59,0x313439303037323833353137363131303731382e6a7067,0x313439303034363637333230343439343831352e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('93',0xe5908ce5ba86e5928ce5a082,0x544f4e4751494e47484554414e47,0x54,0x313439303037323835303330363031393131352e6a7067,0x313439303033353734343333323031333738312e6a7067,'','',0x687474703a2f2f,'2','1','0','1','');");
E_D("replace into `dsc_brand` values('94',0xe4b990e58a9b,0x4f7374656f666f726d,0x4c,0x313439303037323836303532323032333639322e6a7067,0x313439303034363331313532363537363337312e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('95',0x42482028e5bf85e889bee5a58729,0x4248,0x42,0x313439303037323837303533373138313134322e6a7067,0x313439303034363230343733393233393933342e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('96',0xe98791e58fb2e5af86e696af,0x4b494e47534d495448,0x4a,0x313439303037323837393232323730313839352e6a7067,0x313439303034363036353033313537393634392e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('97',0xe696afe4bcafe4b881,0x5350414c44494e47,0x53,0x313439303037323838393039303032353036392e6a7067,0x313439303034353439313439373832363732302e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('98',0xe79aaee5b094e7919ce4bcbd,0x70696572796f6761,0x50,0x313439303037323839383334353335383632352e6a7067,0x313439303034353237363538383334323439332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('99',0xe781abe69eab,0x666972652d6d61706c65,0x48,0x313439303037323930383737323637323738382e6a7067,0x313439303034343738303038303030383034382e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('100',0xe4b994e5b1b1,0x526f6a6f,0x51,0x313439303037323931383333393835333536392e6a7067,0x313439303034343438303133313232373931352e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('101',0xe79aaee5858be69c8b,0x5069636f426f6e67,0x50,0x313439303037323933313231383633353637342e6a7067,0x313439303034343335373434303633353638352e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('102',0xe6aca7e4ba9ae9a9ac,0x4f59414d41,0x4f,0x313439303037323934313532363333353132362e6a7067,0x313439303034343038363738333036353939332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('103',0x4d6173656e74656b,0x4d6173656e74656b,0x4d,0x313439303037323935303538303835313330392e6a7067,0x313439303034333832363132323635343634352e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('104',0xe4baa8e6b3b0e5b094e5858b,0x48542e4152434f,0x48,0x313439303037323936303730303638343836332e6a7067,0x313439303033383931303635383639323534392e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('105',0xe78e9be5858be5aeb6e7baba,0x4d434f4245414d,0x4d,0x313439303037323937313631303234313732362e6a7067,0x313439303033383239363839393735393534302e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('106',0xe5bc80e699aee789b9,0xe5bc80e699aee789b9,0x4b,0x313439303037323938313330353836383832332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('107',0xe4b889e6989f,0xe4b889e6989f,0x53,0x313439303037323939333430393032383139332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('108',0xe88bb9e69e9c,0xe88bb9e69e9c,0x50,0x313439303037333030393633383635323035392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('109',0xe8afbae59fbae4ba9a,0xe8afbae59fbae4ba9a,0x4e,0x313439303037343035363936343134373533332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('110',0xe69dbee4b88be794b5e599a8,0xe69dbee4b88be794b5e599a8,0x53,0x313439303037343034333936333535323731352e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('111',0xe691a9e68998e7bd97e68b89,0xe691a9e68998e7bd97e68b89,0x4d,0x313439303037333034313531393830303239392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('112',0xe6b5b7e4bfa1,0xe6b5b7e4bfa1,0x48,0x313439303037333035353837373433353330382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('113',0x4c47,0x4c47,0x4c,0x313439303037343033303332383934393538372e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('114',0xe6b5b7e5b094,0xe6b5b7e5b094,0x48,0x313439303037343032313837313439313630342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('115',0xe8a5bfe997a8e5ad90,0xe8a5bfe997a8e5ad90,0x58,0x313439303037343030363636303130373934312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('116',0xe4bc8ae88eb1e5858be696af,0xe4bc8ae88eb1e5858be696af,0x59,0x313439303037333130393532393831373836392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('117',0xe998bfe5b094e58da1e789b9,0xe998bfe5b094e58da1e789b9,0x41,0x313439303037333132333533333034373736392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('118',0x485443,0x485443,0x48,0x313439303037333939333339333831373832322e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('122',0x4669766520506c7573,0x4669766520506c7573,0x46,0x313439303037333938323534373731303439382e6a7067,0x313439303033363131363731363131363936332e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('124',0xe4babfe581a5,0x59694a69616e,0x59,0x313439303037333937313633373138373439362e6a7067,0x313439303033363234353434313835323537312e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('125',0xe58d8ee4b8ba,0x485541574549,0x48,0x313439303037333936303136363033353336332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('126',0xe688b4e5b094,0x44454c4c,0x44,0x313439303037333934333931383237343536312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('129',0x4e494e452057455354,0x4e494e452057455354,0x4e,0x313439303037333933303433353438303238332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('130',0x54502d4c494e4c,0x54502d4c494e4c,0x54,0x313439303037343138303734353637363134302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('131',0x5a4950504f,0x5a4950504f,0x5a,0x313439303037333931393731313030333130312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('132',0xe998bfe78e9be5b0bc,0xe998bfe78e9be5b0bc,0x41,0x313439303037333930303833383239363336342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('134',0xe5b8aee5ae9de98082,0xe5b8aee5ae9de98082,0x42,0x313439303037353130383732323537363337352e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('136',0xe58d9ae697b6e59fbae98791,0x42534a4a,0x42,0x313439303232373531373639353734363039372e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('137',0xe8bebee588a9e59bad,0xe8bebee588a9e59bad,0x44,0x313439303037333733313832323136303637322e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('138',0xe8bfaae5a3abe5b0bc,0xe8bfaae5a3abe5b0bc,0x44,0x313439303037333731373737363530343737332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('139',0xe9a39ee7a791,0xe9a39ee7a791,0x46,0x313439303037333730353735353238303939342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('140',0xe9a39ee588a9e6b5a6,0xe9a39ee588a9e6b5a6,0x46,0x313439303037333639323737343436363731302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('141',0xe99299e5b094e5a587,0xe99299e5b094e5a587,0x47,0x313439303037343939303131303136343837372e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('142',0xe593a5e5bc9f,0xe593a5e5bc9f,0x47,0x313439303037333637353737383230353630382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('143',0xe5b7a5e993b6e7919ee4bfa1,0xe5b7a5e993b6e7919ee4bfa1,0x47,0x313439303037333636313333353230373834312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('144',0xe6b5b7e9a39ee4b89d,0xe6b5b7e9a39ee4b89d,0x48,0x313439303037333634383335363636333139362e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('145',0xe6b5b7e5af8ce9809ae59fbae98791,0xe6b5b7e5af8ce9809ae59fbae98791,0x48,0x313439303232373630333531333333323931312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('147',0xe59088e7949fe58583,0xe59088e7949fe58583,0x48,0x313439303037333631363135343936363138392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('148',0xe5ae8fe59fba,0xe5ae8fe59fba,0x48,0x313439303037333630333130383638373335302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('149',0xe9b8bfe6989fe5b094e5858b,0xe9b8bfe6989fe5b094e5858b,0x48,0x313439303037333539313533353030353731342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('150',0xe58d8ee5b89d,0xe58d8ee5b89d,0x48,0x313439303037333537373638333135393032312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('151',0xe5a7ace88aae,0xe5a7ace88aae,0x4a,0x313439303037333536313031383733343037382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('152',0xe69db0e5858be790bce696af,0x4a41434b264a4f4e4553,0x4a,0x313439303232383130303133383537393738372e6a7067,0x313439303033363336393832373631313837322e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('153',0xe5bab7e681a9e8b49d,0xe5bab7e681a9e8b49d,0x4b,0x313439303037333533393434303436323736302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('154',0xe58ca1e5a881,0xe58ca1e5a881,0x4b,0x313439303037333532393838313434383738302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('155',0xe585b0e894bb,0xe585b0e894bb,0x4c,0x313439303037333531383730333633393037302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('156',0xe78bbce788aa,0x4a61636b20576f6c66736b696e,0x4c,0x313439303037333435343637383631343138362e6a7067,0x313439303033363535343731333736323939342e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('157',0xe69d8ee58cbbe7949f,0xe69d8ee58cbbe7949f,0x4c,0x313439303232373738343131393935323338372e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('158',0xe7ab8be982a6,0x4c42,0x4c,0x313439303232373938363733323731323731312e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('159',0xe9baa6e696afe5a881e5b094,0x4d535745,0x4d,0x313439303232383037353538303039313131332e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('160',0xe7be8ee79a84,0xe7be8ee79a84,0x4d,0x313439303037343930313839323337323231362e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('163',0xe9ad85e6978f,0xe9ad85e6978f,0x5a,0x313439303037333335393631313334333538362e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('164',0xe88090e5858b,0xe88090e5858b,0x4e,0x313439303037333333383335373639373630342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('166',0xe4b883e58cb9e78bbc,0xe4b883e58cb9e78bbc,0x51,0x313439303037333332343032323436303134392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('167',0xe58d83e8b6a3e4bc9a,0x717168,0x51,0x313439303232383138393638373130313132302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('176',0xe98094e7899b,0xe98094e7899b,0x54,0x313439303037353038303132363934303630322e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('178',0xe69687e8bda9e7bd91,0xe69687e8bda9e7bd91,0x57,0x313439303037333235333734393035373037362e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('180',0xe5b08fe7b1b3,0x6d69,0x58,0x313439303037333234303834353034393332302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('186',0xe696b0e799bee4bca6,0x4e42,0x58,0x313439303037343330383737333737383639372e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('188',0xe688b4e5b0942de4b896e7baaae7ac94e8aeb0e69cac,0x5348494a492d44454c4c,0x44,0x313439303137313936363232313038303235342e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('189',0xe4bdb3e6b2aae695b0e7a0812de58d8ee4b8ba,0x4a494148555348554d41,0x4a,0x313439303137313938313535363030353338302e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('190',0xe781abe6989f,0x68756f78696e67,0x48,0x313439303137313630363035343930393833322e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('192',0xe7a3a8e99381e59bbee4b9a6,0x6d6f746965,0x4d,0x313439303232383236323035303536373433382e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('194',0xe4b990e8a786,0x4c657476,0x4c,0x313439303034343738313530353138333330332e6a7067,0x313439303033373434373335333835383734342e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('195',0xe4bdb3e883bd,0x43616e6f6e,0x4a,0x313439303037353338353233393539343930392e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('200',0xe6b5b7e8b4bce78e8b,0x4f6e65205069656365,0x48,0x313439303037343434373230393731323735322e6a7067,0x313439303033373933393134333339313935302e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('203',0xe98791e9be99e9b1bc,0x4a696e6c6f6e677975,0x4a,0x313439303232383333323533333533353037322e6a7067,'','','',0x687474703a2f2f,'50','1','0','1','');");
E_D("replace into `dsc_brand` values('204',0xe98791e5a3abe9a1bf,0x4b696e6773746f6e,0x4a,0x313439303033393238363037353635343439302e6a7067,0x313439303033353439353833333331353832352e6a7067,'','',0x687474703a2f2f,'1','1','0','1','');");
E_D("replace into `dsc_brand` values('209',0xe4bdb3e883bde5bdb1e5838f,0x43616e6f6e,0x4a,0x313439303037353337383930323438363235342e6a7067,0x313439303033383036383336333833303933392e6a7067,'','',0x687474703a2f2f,'50','1','0','1','');");

require("../../inc/footer.php");
?>