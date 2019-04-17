<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dsc_zc_goods`;");
E_C("CREATE TABLE `dsc_zc_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `limit` int(11) NOT NULL,
  `backer_num` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `shipping_fee` decimal(10,0) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `return_time` int(11) NOT NULL,
  `backer_list` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `dsc_zc_goods` values('1','4','3','1','3000','0',0xe4b880e5a597e8aebee5a487,0x646174612f7a635f70726f647563745f696d616765732f313436393535363630333533313835373833372e6a7067,'30',0x313838);");
E_D("replace into `dsc_zc_goods` values('2','4','100','0','7000','0',0xe4b8a4e5a597e8aebee5a487,0x646174612f7a635f70726f647563745f696d616765732f313436393535393532313936323735303232392e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('3','5','-1','0','1','0',0xe6af8fe6bba1313530e4bd8de694afe68c81e88085e68abde58f9631e4bd8de5b9b8e8bf90e794a8e688b7efbc8ce4b88de6bba1e8b6b3e697b6e4b99fe68abde58f9631e4bd8de38082e5b9b8e8bf90e794a8e688b7e5b086e4bc9ae88eb7e5be97e8aeb0e5bf86e6a389e99da0e59eab31e4b8aae38082e5b9b8e8bf90e794a8e688b7e5b086e794b1e4baace4b89ce5ae98e696b9e68abde58f96efbc8ce68abde5a596e8a784e58899e58f8ae4b8ade5a596e88085e5908de58d95e5b086e59ca8e8af9de9a298e58cbae585ace5b883e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536313839303930303337333330362e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('4','5','300','0','259','0',0xe6849fe8b0a2e682a8e79a84e694afe68c81efbc8ce5b086e4bc9ae88eb7e5be97e8aeb0e5bf86e6a389e5a49ae58a9fe883bde885b0e8838ce99da0e59eabe5928ce9858de5a597e79a84e8aeb0e5bf86e6a389e7be8ee88780e59d90e59eabe5908431e4b8aae38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536313934353833393534343936312e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('5','6','-1','0','1','0',0xe681ade5969ce682a8e4bba5e6b8a0e98193e4b893e4baabe4bbb7e88eb7e5be97efbc9ae690bae88cb6e98193e5a4a9e4bd9c2be690bae88cb6e98193e78e84e9b89fe590843230e5a5972be5b882e59cbae4bbb73538e58583e79a84e88cb6e98193e7a4bce58c853230e4bbbde38082e4baabe58f97e58886e4baabe79a84e5969ce682a6efbc8ce6849fe8b0a2e69c89e4bda0efbc8ce7949fe6b4bbe69bb4e58aa0e5a49ae5bda9e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536323137303530303032373637392e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('6','6','50','0','998','0',0xe681ade5969ce682a8e4bba5e4bc97e7adb9e9a696e58f91e4bbb7e88eb7e5be97efbc9ae690bae88cb6e98193e5a4a9e4bd9ce4b880e5a597efbc88e88cb6e79b98e4b8bae9b8a1e7bf85e69ca8efbc8ce590abe694b6e8978fe8af81e4b9a6efbc89efbc8ce4b896e7958ce982a3e4b988e5a4a7efbc8ce5b8a6e79d80e5ae83e58ebbe8bf9ce696b9efbc8ce5b09de4b880e5b09de58fa6e4b880e888ace7949fe6b4bbe79a84e6bb8be591b3e38082e5a4a9e4bd9ce9ab98e5b1b1efbc8ce5a4a7e78e8be88d92e4b98be38082e5bdbce4bd9ce79fa3efbc8ce69687e78e8be5bab7e4b98be38082e5bdbce5be82e79fa3efbc8ce5b290e69c89e5a4b7e4b98be8a18ce38082e5ad90e5ad99e4bf9de4b98be38082e5908de69bb0e5a4a9e4bd9ce38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536323231373932343334343138362e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('7','7','-1','0','50','0',0xe58fafe88eb7e5be97e99988e5af8ce681afe58fa4e6b395e6898be4bd9ce79a84e6a8aae5b1b1e8b186e88590e4b9b3e4b9bee99a86e8b4a131383067c39732e793b6efbc9b20e4b9bee99a86e8b4a1e58886e4baabe8a385393067c39731e793b6,0x646174612f7a635f70726f647563745f696d616765732f313436393536323437393238393435373034382e6a7067,'10','');");
E_D("replace into `dsc_zc_goods` values('8','7','100','0','100','0',0xe58fafe88eb7e5be97e99988e5af8ce681afe58fa4e6b395e6898be4bd9ce79a84e6a8aae5b1b1e8b186e88590e4b9b3e4b9bee99a86e8b4a131383067c39734e793b6efbc9b20e6898be58981e8bea3e6a492e985b1e58886e4baabe8a3853138306720c39732e793b6,0x646174612f7a635f70726f647563745f696d616765732f313436393536323439393932373239303634392e6a7067,'10','');");
E_D("replace into `dsc_zc_goods` values('9','8','-1','0','1','0',0xe6af8fe6bba13939e4bd8de694afe68c81e88085e68abde58f9631e4bd8de5b9b8e8bf90e794a8e688b7efbc8ce4b88de6bba1e8b6b3e697b6e4b99fe68abde58f9631e4bd8de38082e5b9b8e8bf90e794a8e688b7e5b086e4bc9ae88eb7e5be97e587a4e58688e9948ce7a192e88cb631e5a597efbc8831e7bd90e7baa2e88cb62b31e7bd90e88c97e78fa0efbc89e38082e5b9b8e8bf90e794a8e688b7e5b086e794b1e4baace4b89ce5ae98e696b9e68abde58f96efbc8ce68abde5a596e8a784e58899e58f8ae4b8ade5a596e88085e5908de58d95e5b086e59ca8e8af9de9a298e58cbae585ace5b883e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536323837343130333338323535352e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('10','8','2000','0','99','0',0xe587a4e58688e9948ce7a192e88cb631e5a597efbc8831e7bd90e7baa2e88cb62b31e7bd90e88c97e78fa0efbc89,0x646174612f7a635f70726f647563745f696d616765732f313436393536323839373437373234353537342e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('11','9','-1','0','1','0',0xe6af8fe6bba1373030e4bd8de694afe68c81e88085e68abde58f9631e4bd8de5b9b8e8bf90e794a8e688b7efbc8ce4b88de6bba1e8b6b3e697b6e4b99fe68abde58f9631e4bd8de38082e5b9b8e8bf90e794a8e688b7e5b086e4bc9ae88eb7e5be97e88fb2e6989fe699bae883bde5908ee8a786e9959ce8aeb0e5bd95e4bbaa5038e4b880e5a597e38082e5b9b8e8bf90e794a8e688b7e5b086e794b1e4baace4b89ce5ae98e696b9e68abde58f96efbc8ce68abde5a596e8a784e58899e58f8ae4b8ade5a596e88085e5908de58d95e5b086e59ca8e8af9de9a298e58cbae585ace5b883e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536383033383631353838303037302e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('12','9','500','0','699','0',0xe8b0a2e8b0a2e682a8e79a84e694afe68c81efbc81e682a8e5b086e4bba5e8b685e580bce4bc97e7adb9e79a84e4bbb7e6a0bcefbc8ce88eb7e5be97e88fb2e6989fe699bae883bde5908ee8a786e9959ce8a18ce8bda6e8aeb0e5bd95e5afbce888aae4bbaa31e5a597e38082efbc88e9858de5908ee69184e5838fe5a4b4e38082e8afb7e887aae8a18ce9858d5446e58da1efbc8cefbc89,0x646174612f7a635f70726f647563745f696d616765732f313436393536383032353132303334323636362e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('13','10','-1','0','1','0',0xe6af8fe6bba13839e4bd8de694afe68c81e88085e68abde58f9631e4bd8de5b9b8e8bf90e794a8e688b7efbc8ce4b88de6bba1e8b6b3e697b6e4b99fe68abde58f9631e4bd8de38082e5b9b8e8bf90e794a8e688b7e5b086e4bc9ae88eb7e5be976f6e72656164e699bae883bde68e92e68f92e58d87e7baa7e78988efbc8857494649e58886e68ea7efbc8931e694afe38082e5b9b8e8bf90e794a8e688b7e5b086e794b1e4baace4b89ce5ae98e696b9e68abde58f96efbc8ce68abde5a596e8a784e58899e58f8ae4b8ade5a596e88085e5908de58d95e5b086e59ca8e8af9de9a298e58cbae585ace5b883e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536383235333633323038383234322e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('14','10','2000','0','39','0',0xe694afe68c813339e58583e9999032303030e4baba20e99d9ee5b8b8e6849fe8b0a2e682a8e79a84e694afe68c81efbc81e682a8e58fafe4bba5e794a8e4bd8ee4ba8ee68890e69cace79a84e4bbb7e6a0bce88eb7e5be976f6e72656164e68e92e68f92e6a087e58786e78988efbc88325553422034e4bd8de68f92e5ad94efbc8931e694af20efbc88e6b3a8e6988eefbc9ae6ada4e6acbee4b88de694afe68c8157494649e68ea7e588b6efbc8920e99990e9a29d32303030e4baba,0x646174612f7a635f70726f647563745f696d616765732f313436393536383238303137373632393133332e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('15','11','-1','0','1','0',0xe6af8fe6bba1313238e4bd8de694afe68c81e88085e68abde58f9631e4bd8de5b9b8e8bf90e794a8e688b7efbc8ce4b88de6bba1e8b6b3e697b6e4b99fe68abde58f9631e4bd8de38082e5b9b8e8bf90e794a8e688b7e5b086e4bc9ae88eb7e5be97e9a9ace69da5e8a5bfe4ba9ae78cabe5b1b1e78e8be9809fe586bbe88289323030e5858be4b880e79b92e38082e5b9b8e8bf90e794a8e688b7e5b086e794b1e4baace4b89ce5ae98e696b9e68abde58f96efbc8ce68abde5a596e8a784e58899e58f8ae4b8ade5a596e88085e5908de58d95e5b086e59ca8e8af9de9a298e58cbae585ace5b883e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536383637333437363336333434392e6a7067,'30','');");
E_D("replace into `dsc_zc_goods` values('16','11','500','0','198','0',0xe6849fe8b0a2e682a8e79a84e694afe68c81efbc8ce59ca8e4bc97e7adb9e7bb93e69d9fe5908e20e682a8e5b086e88eb7e5be97e9a284e4bcb0e5b882e59cbae4bbb7323538e58583e79a84e9a9ace69da5e8a5bfe4ba9ae78cabe5b1b1e78e8be9809fe586bbe88289343030e5858be4b880e79b92efbc88e9a1bae4b8b0e7a9bae8bf90efbc8ce586b7e8978fe58c85e8a385efbc8920e5818fe8bf9ce59cb0e58cbae6b8afe6beb3e58fb0e58bbfe68b8defbc88e9bb91e9be99e6b19fe38081e59089e69e97e38081e79498e88283e38081e58685e89299e58fa4e38081e5ae81e5a48fe38081e99d92e6b5b7e38081e8bebde5ae81e38081e696b0e79686e38081e8a5bfe8978fe59cb0e58cbaefbc89e6849fe8b0a2e682a8e79a84e694afe68c81e38082,0x646174612f7a635f70726f647563745f696d616765732f313436393536383730333636333736323739312e6a7067,'30','');");

require("../../inc/footer.php");
?>