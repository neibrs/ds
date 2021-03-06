<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_region_warehouse`;");
E_C("CREATE TABLE `dsc_region_warehouse` (
  `region_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `regionId` int(11) unsigned NOT NULL,
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_name` varchar(120) NOT NULL DEFAULT '',
  `region_code` varchar(255) NOT NULL DEFAULT '',
  `region_type` tinyint(1) NOT NULL DEFAULT '2',
  `agency_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`region_id`),
  KEY `parent_id` (`parent_id`),
  KEY `region_type` (`region_type`),
  KEY `agency_id` (`agency_id`),
  KEY `regionId` (`regionId`),
  KEY `region_code` (`region_code`)
) ENGINE=MyISAM AUTO_INCREMENT=805 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_region_warehouse` values('1','0','0',0xe58c97e4baace4bb93e5ba93,'','0','0');");
E_D("replace into `dsc_region_warehouse` values('2','0','0',0xe4b88ae6b5b7e4bb93e5ba93,'','0','0');");
E_D("replace into `dsc_region_warehouse` values('3','0','0',0xe5b9bfe5b79ee4bb93e5ba93,'','0','0');");
E_D("replace into `dsc_region_warehouse` values('4','2','1',0xe58c97e4baac,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('5','5','1',0xe79498e88283,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('6','10','1',0xe6b2b3e58c97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('7','11','1',0xe6b2b3e58d97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('8','12','1',0xe9bb91e9be99e6b19f,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('11','15','1',0xe59089e69e97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('12','18','1',0xe8bebde5ae81,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('13','19','1',0xe58685e89299e58fa4,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('14','20','1',0xe5ae81e5a48f,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('15','22','1',0xe5b1b1e4b89c,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('16','3','2',0xe5ae89e5bebd,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('17','17','2',0xe6b19fe8a5bf,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('18','16','2',0xe6b19fe88b8f,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('19','25','2',0xe4b88ae6b5b7,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('20','26','2',0xe59b9be5b79d,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('21','24','2',0xe99995e8a5bf,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('22','23','2',0xe5b1b1e8a5bf,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('23','32','2',0xe9878de5ba86,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('24','31','2',0xe6b599e6b19f,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('25','27','1',0xe5a4a9e6b4a5,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('27','13','2',0xe6b996e58c97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('28','14','2',0xe6b996e58d97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('29','4','3',0xe7a68fe5bbba,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('30','6','3',0xe5b9bfe4b89c,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('31','7','3',0xe5b9bfe8a5bf,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('32','8','3',0xe8b4b5e5b79e,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('33','9','3',0xe6b5b7e58d97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('34','28','3',0xe8a5bfe8978f,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('35','29','3',0xe696b0e79686,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('36','30','3',0xe4ba91e58d97,'','1','0');");
E_D("replace into `dsc_region_warehouse` values('403','52','4',0xe58c97e4baac,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('404','149','7',0xe98391e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('405','150','7',0xe6b49be998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('406','151','7',0xe5bc80e5b081,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('407','152','7',0xe5ae89e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('408','153','7',0xe9b9a4e5a381,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('409','154','7',0xe6b58ee6ba90,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('410','155','7',0xe784a6e4bd9c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('411','156','7',0xe58d97e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('412','157','7',0xe5b9b3e9a1b6e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('413','158','7',0xe4b889e997a8e5b3a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('414','159','7',0xe59586e4b898,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('415','160','7',0xe696b0e4b9a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('416','161','7',0xe4bfa1e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('417','162','7',0xe8aeb8e6988c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('418','163','7',0xe591a8e58fa3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('419','164','7',0xe9a9bbe9a9ace5ba97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('420','165','7',0xe6bcafe6b2b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('421','166','7',0xe6bfaee998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('422','244','12',0xe6b288e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('423','245','12',0xe5a4a7e8bf9e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('424','246','12',0xe99e8de5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('425','247','12',0xe69cace6baaa,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('426','248','12',0xe69c9de998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('427','249','12',0xe4b8b9e4b89c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('428','250','12',0xe68a9ae9a1ba,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('429','251','12',0xe9989ce696b0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('430','252','12',0xe891abe88aa6e5b29b,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('431','253','12',0xe994a6e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('432','254','12',0xe8bebde998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('433','255','12',0xe79b98e994a6,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('434','256','12',0xe99381e5b2ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('435','257','12',0xe890a5e58fa3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('436','283','15',0xe6b58ee58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('437','284','15',0xe99d92e5b29b,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('438','285','15',0xe6bba8e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('439','286','15',0xe5beb7e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('440','287','15',0xe4b89ce890a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('441','288','15',0xe88f8fe6b3bd,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('442','289','15',0xe6b58ee5ae81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('443','290','15',0xe88eb1e88a9c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('444','291','15',0xe8818ae59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('445','292','15',0xe4b8b4e6b282,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('446','293','15',0xe697a5e785a7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('447','294','15',0xe6b3b0e5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('448','295','15',0xe5a881e6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('449','296','15',0xe6bd8de59d8a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('450','297','15',0xe7839fe58fb0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('451','298','15',0xe69ea3e5ba84,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('452','299','15',0xe6b784e58d9a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('453','62','5',0xe585b0e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('454','63','5',0xe799bde993b6,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('455','64','5',0xe5ae9ae8a5bf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('456','65','5',0xe79498e58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('457','66','5',0xe59889e5b3aae585b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('458','67','5',0xe98791e6988c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('459','68','5',0xe98592e6b389,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('460','69','5',0xe4b8b4e5a48f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('461','70','5',0xe99987e58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('462','71','5',0xe5b9b3e58789,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('463','72','5',0xe5ba86e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('464','73','5',0xe5a4a9e6b0b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('465','74','5',0xe6ada6e5a881,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('466','75','5',0xe5bca0e68e96,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('467','167','8',0xe59388e5b094e6bba8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('468','168','8',0xe5a4a7e5ba86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('469','169','8',0xe5a4a7e585b4e5ae89e5b2ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('470','170','8',0xe9b9a4e5b297,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('471','171','8',0xe9bb91e6b2b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('472','172','8',0xe9b8a1e8a5bf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('473','173','8',0xe4bdb3e69ca8e696af,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('474','174','8',0xe789a1e4b8b9e6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('475','175','8',0xe4b883e58fb0e6b2b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('476','176','8',0xe9bd90e9bd90e59388e5b094,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('477','177','8',0xe58f8ce9b8ade5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('478','178','8',0xe7bba5e58c96,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('479','179','8',0xe4bc8ae698a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('480','258','13',0xe591bce5928ce6b5a9e789b9,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('481','259','13',0xe998bfe68b89e59684e79b9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('482','260','13',0xe5b7b4e5bda6e6b796e5b094e79b9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('483','261','13',0xe58c85e5a4b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('484','262','13',0xe8b5a4e5b3b0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('485','263','13',0xe98482e5b094e5a49ae696af,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('486','264','13',0xe591bce4bca6e8b49de5b094,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('487','265','13',0xe9809ae8bebd,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('488','266','13',0xe4b98ce6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('489','267','13',0xe4b98ce585b0e5af9fe5b883e5b882,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('490','268','13',0xe994a1e69e97e983ade58b92e79b9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('491','269','13',0xe585b4e5ae89e79b9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('492','343','25',0xe5a4a9e6b4a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('493','138','6',0xe79fb3e5aeb6e5ba84,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('494','139','6',0xe4bf9de5ae9a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('495','140','6',0xe6b2a7e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('496','141','6',0xe689bfe5beb7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('497','142','6',0xe982afe983b8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('498','143','6',0xe8a1a1e6b0b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('499','144','6',0xe5bb8ae59d8a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('500','145','6',0xe7a7a6e79a87e5b29b,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('501','146','6',0xe59490e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('502','147','6',0xe982a2e58fb0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('503','148','6',0xe5bca0e5aeb6e58fa3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('504','211','11',0xe995bfe698a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('505','212','11',0xe59089e69e97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('506','213','11',0xe799bde59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('507','214','11',0xe799bde5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('508','215','11',0xe8bebde6ba90,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('509','216','11',0xe59b9be5b9b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('510','217','11',0xe69dbee58e9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('511','218','11',0xe9809ae58c96,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('512','219','11',0xe5bbb6e8beb9,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('513','270','14',0xe993b6e5b79d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('514','271','14',0xe59bbae58e9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('515','272','14',0xe79fb3e598b4e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('516','273','14',0xe590b4e5bfa0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('517','274','14',0xe4b8ade58dab,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('526','36','16',0xe5ae89e5ba86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('527','37','16',0xe89a8ce59fa0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('528','38','16',0xe5b7a2e6b996,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('529','39','16',0xe6b1a0e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('530','40','16',0xe6bb81e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('531','41','16',0xe9989ce998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('532','42','16',0xe6b7aee58c97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('533','43','16',0xe6b7aee58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('534','44','16',0xe9bb84e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('535','45','16',0xe585ade5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('536','46','16',0xe9a9ace99e8de5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('537','47','16',0xe5aebfe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('538','48','16',0xe9939ce999b5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('539','49','16',0xe88a9ce6b996,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('540','50','16',0xe5aea3e59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('541','51','16',0xe4bab3e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('542','3401','16',0xe59088e882a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('543','321','19',0xe4b88ae6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('544','300','22',0xe5a4aae58e9f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('545','301','22',0xe995bfe6b2bb,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('546','302','22',0xe5a4a7e5908c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('547','303','22',0xe6998be59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('548','304','22',0xe6998be4b8ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('549','305','22',0xe4b8b4e6b1be,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('550','306','22',0xe59095e6a281,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('551','307','22',0xe69c94e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('552','308','22',0xe5bfbbe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('553','309','22',0xe998b3e6b389,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('554','310','22',0xe8bf90e59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('555','180','27',0xe6ada6e6b189,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('556','181','27',0xe4bb99e6a183,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('557','182','27',0xe98482e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('558','183','27',0xe9bb84e58688,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('559','184','27',0xe9bb84e79fb3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('560','185','27',0xe88d86e997a8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('561','186','27',0xe88d86e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('562','187','27',0xe6bd9ce6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('563','188','27',0xe7a59ee5869ce69eb6e69e97e58cba,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('564','189','27',0xe58d81e5a0b0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('565','190','27',0xe99a8fe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('566','191','27',0xe5a4a9e997a8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('567','192','27',0xe592b8e5ae81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('568','193','27',0xe8a584e6a88a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('569','194','27',0xe5ad9de6849f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('570','195','27',0xe5ae9ce6988c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('571','196','27',0xe681a9e696bd,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('572','233','17',0xe58d97e6988c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('573','234','17',0xe68a9ae5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('574','235','17',0xe8b5a3e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('575','236','17',0xe59089e5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('576','237','17',0xe699afe5beb7e99587,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('577','238','17',0xe4b99de6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('578','239','17',0xe8908de4b9a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('579','240','17',0xe4b88ae9a5b6,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('580','241','17',0xe696b0e4bd99,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('581','242','17',0xe5ae9ce698a5,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('582','243','17',0xe9b9b0e6bdad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('583','322','20',0xe68890e983bd,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('584','323','20',0xe7bbb5e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('585','324','20',0xe998bfe59d9d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('586','325','20',0xe5b7b4e4b8ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('587','326','20',0xe8bebee5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('588','327','20',0xe5beb7e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('589','328','20',0xe79498e5ad9c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('590','329','20',0xe5b9bfe5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('591','330','20',0xe5b9bfe58583,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('592','331','20',0xe4b990e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('593','332','20',0xe58789e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('594','333','20',0xe79c89e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('595','334','20',0xe58d97e58585,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('596','335','20',0xe58685e6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('597','336','20',0xe69480e69e9de88ab1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('598','337','20',0xe98182e5ae81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('599','338','20',0xe99b85e5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('600','339','20',0xe5ae9ce5aebe,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('601','340','20',0xe8b584e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('602','341','20',0xe887aae8b4a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('603','342','20',0xe6b3b8e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('604','394','23',0xe9878de5ba86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('605','197','28',0xe995bfe6b299,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('606','198','28',0xe5bca0e5aeb6e7958c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('607','199','28',0xe5b8b8e5beb7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('608','200','28',0xe983b4e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('609','201','28',0xe8a1a1e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('610','202','28',0xe68080e58c96,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('611','203','28',0xe5a884e5ba95,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('612','204','28',0xe982b5e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('613','205','28',0xe6b998e6bdad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('614','206','28',0xe6b998e8a5bf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('615','207','28',0xe79b8ae998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('616','208','28',0xe6b0b8e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('617','209','28',0xe5b2b3e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('618','210','28',0xe6a0aae6b4b2,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('619','220','18',0xe58d97e4baac,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('620','221','18',0xe88b8fe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('621','222','18',0xe697a0e994a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('622','223','18',0xe5b8b8e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('623','224','18',0xe6b7aee5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('624','225','18',0xe8bf9ee4ba91e6b8af,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('625','226','18',0xe58d97e9809a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('626','227','18',0xe5aebfe8bf81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('627','228','18',0xe6b3b0e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('628','229','18',0xe5be90e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('629','230','18',0xe79b90e59f8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('630','231','18',0xe689ace5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('631','232','18',0xe99587e6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('632','311','21',0xe8a5bfe5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('633','312','21',0xe5ae89e5bab7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('634','313','21',0xe5ae9de9b8a1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('635','314','21',0xe6b189e4b8ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('636','315','21',0xe59586e6b49b,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('637','316','21',0xe9939ce5b79d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('638','317','21',0xe6b8ade58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('639','318','21',0xe592b8e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('640','319','21',0xe5bbb6e5ae89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('641','320','21',0xe6a686e69e97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('642','383','24',0xe69dade5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('643','384','24',0xe6b996e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('644','385','24',0xe59889e585b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('645','386','24',0xe98791e58d8e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('646','387','24',0xe4b8bde6b0b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('647','388','24',0xe5ae81e6b3a2,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('648','389','24',0xe7bb8de585b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('649','390','24',0xe58fb0e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('650','391','24',0xe6b8a9e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('651','392','24',0xe8889fe5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('652','393','24',0xe8a1a2e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('653','53','29',0xe7a68fe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('654','54','29',0xe9be99e5b2a9,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('655','55','29',0xe58d97e5b9b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('656','56','29',0xe5ae81e5beb7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('657','57','29',0xe88e86e794b0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('658','58','29',0xe6b389e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('659','59','29',0xe4b889e6988e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('660','60','29',0xe58ea6e997a8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('661','61','29',0xe6bcb3e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('662','111','32',0xe8b4b5e998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('663','112','32',0xe5ae89e9a1ba,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('664','113','32',0xe6af95e88a82,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('665','114','32',0xe585ade79b98e6b0b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('666','115','32',0xe9bb94e4b89ce58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('667','116','32',0xe9bb94e58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('668','117','32',0xe9bb94e8a5bfe58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('669','118','32',0xe9939ce4bb81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('670','119','32',0xe981b5e4b989,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('671','351','35',0xe4b98ce9b281e69ca8e9bd90,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('672','352','35',0xe998bfe5858be88b8f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('673','353','35',0xe998bfe68b89e5b094,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('674','354','35',0xe5b7b4e99fb3e983ade6a59e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('675','355','35',0xe58d9ae5b094e5a194e68b89,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('676','356','35',0xe6988ce59089,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('677','357','35',0xe59388e5af86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('678','358','35',0xe5928ce794b0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('679','359','35',0xe59680e4bb80,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('680','360','35',0xe5858be68b89e78e9be4be9d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('681','361','35',0xe5858be5ad9ce58b92e88b8f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('682','362','35',0xe79fb3e6b2b3e5ad90,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('683','363','35',0xe59bbee69ca8e88892e5858b,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('684','364','35',0xe59090e9b281e795aa,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('685','365','35',0xe4ba94e5aeb6e6b8a0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('686','366','35',0xe4bc8ae78a81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('688','76','30',0xe5b9bfe5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('689','77','30',0xe6b7b1e59cb3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('690','78','30',0xe6bdaee5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('691','79','30',0xe4b89ce88e9e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('692','80','30',0xe4bd9be5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('693','81','30',0xe6b2b3e6ba90,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('694','82','30',0xe683a0e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('695','83','30',0xe6b19fe997a8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('696','84','30',0xe68fade998b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('697','85','30',0xe88c82e5908d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('698','86','30',0xe6a285e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('699','87','30',0xe6b885e8bf9c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('700','88','30',0xe6b195e5a4b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('701','89','30',0xe6b195e5b0be,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('702','90','30',0xe99fb6e585b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('703','91','30',0xe998b3e6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('704','92','30',0xe4ba91e6b5ae,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('705','93','30',0xe6b99be6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('706','94','30',0xe88287e5ba86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('707','95','30',0xe4b8ade5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('708','96','30',0xe78fa0e6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('709','120','33',0xe6b5b7e58fa3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('710','121','33',0xe4b889e4ba9a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('711','122','33',0xe799bde6b299,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('712','123','33',0xe4bf9de4baad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('713','124','33',0xe6988ce6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('714','125','33',0xe6be84e8bf88e58ebf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('715','126','33',0xe5ae9ae5ae89e58ebf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('716','127','33',0xe4b89ce696b9,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('717','128','33',0xe4b990e4b89c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('718','129','33',0xe4b8b4e9ab98e58ebf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('719','130','33',0xe999b5e6b0b4,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('720','131','33',0xe790bce6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('721','132','33',0xe790bce4b8ad,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('722','133','33',0xe5b1afe6988ce58ebf,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('724','135','33',0xe69687e6988c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('725','136','33',0xe4ba94e68c87e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('726','137','33',0xe5848be5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('727','367','36',0xe69886e6988e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('728','368','36',0xe68092e6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('729','369','36',0xe699aee6b4b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('730','370','36',0xe4b8bde6b19f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('731','371','36',0xe4bf9de5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('732','372','36',0xe6a59ae99b84,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('733','373','36',0xe5a4a7e79086,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('734','374','36',0xe5beb7e5ae8f,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('735','375','36',0xe8bfaae5ba86,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('736','376','36',0xe7baa2e6b2b3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('737','377','36',0xe4b8b4e6b2a7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('738','378','36',0xe69bb2e99d96,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('739','379','36',0xe69687e5b1b1,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('740','380','36',0xe8a5bfe58f8ce78988e7bab3,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('741','381','36',0xe78e89e6baaa,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('742','382','36',0xe698ade9809a,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('744','97','31',0xe58d97e5ae81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('745','98','31',0xe6a182e69e97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('746','99','31',0xe799bee889b2,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('747','100','31',0xe58c97e6b5b7,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('748','101','31',0xe5b487e5b7a6,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('749','102','31',0xe998b2e59f8ee6b8af,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('750','103','31',0xe8b4b5e6b8af,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('751','104','31',0xe6b2b3e6b1a0,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('752','105','31',0xe8b4bae5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('753','106','31',0xe69da5e5aebe,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('754','107','31',0xe69fb3e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('755','108','31',0xe992a6e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('756','109','31',0xe6a2a7e5b79e,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('757','110','31',0xe78e89e69e97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('758','344','34',0xe68b89e890a8,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('759','345','34',0xe998bfe9878c,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('760','346','34',0xe6988ce983bd,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('761','347','34',0xe69e97e88a9d,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('762','348','34',0xe982a3e69bb2,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('763','349','34',0xe697a5e59680e58899,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('764','350','34',0xe5b1b1e58d97,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('785','134','33',0xe4b887e5ae81,'','2','0');");
E_D("replace into `dsc_region_warehouse` values('790','692','688',0xe4bb8ee58c96e5b882,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('791','694','688',0xe4b89ce5b1b1e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('792','695','688',0xe799bde4ba91e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('793','696','688',0xe6b5b7e78fa0e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('794','697','688',0xe88d94e6b9bee58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('795','698','688',0xe8b68ae7a780e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('796','699','688',0xe9bb84e59f94e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('797','700','688',0xe795aae7a6bae58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('798','701','688',0xe88ab1e983bde58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('799','702','688',0xe5a29ee59f8ee58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('800','703','688',0xe4bb8ee58c96e58cba,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('801','704','688',0xe5b882e9838a,'','3','0');");
E_D("replace into `dsc_region_warehouse` values('804','21','1',0xe99d92e6b5b7,'','1','0');");

require("../../inc/footer.php");
?>