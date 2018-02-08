<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_search_record`;");
E_C("CREATE TABLE `lr_search_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '搜索记录表',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '会员ID',
  `keyword` varchar(255) NOT NULL COMMENT '搜索内容',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '搜索次数',
  `addtime` int(11) DEFAULT '0' COMMENT '搜索时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `lr_search_record` values('1','1','产品','28','1494054770');");
E_D("replace into `lr_search_record` values('2','2','产品','1','1494057770');");
E_D("replace into `lr_search_record` values('3','5','模拟','6','1494054970');");
E_D("replace into `lr_search_record` values('4','3','spa产品','5','1494059970');");
E_D("replace into `lr_search_record` values('5','4','模拟','1','1494057970');");
E_D("replace into `lr_search_record` values('6','5','spa产品','1','1494064970');");
E_D("replace into `lr_search_record` values('7','6','coco','1','1494054970');");
E_D("replace into `lr_search_record` values('8','7','小孩子','2','1494054970');");
E_D("replace into `lr_search_record` values('9','8','婴儿用品','1','1494054970');");
E_D("replace into `lr_search_record` values('10','9','婴儿用品','1','1494054970');");
E_D("replace into `lr_search_record` values('11','10','汽车','1','1494054970');");
E_D("replace into `lr_search_record` values('12','9','汽车','1','1494054970');");
E_D("replace into `lr_search_record` values('13','1','饼干','1','1494054970');");
E_D("replace into `lr_search_record` values('14','12','为什么','1','1494054970');");
E_D("replace into `lr_search_record` values('15','13','好的','1','1494054970');");
E_D("replace into `lr_search_record` values('16','14','玩具','1','1494054970');");
E_D("replace into `lr_search_record` values('17','15','好玩的','1','1494054970');");
E_D("replace into `lr_search_record` values('18','1','spa产品','2','1494555638');");
E_D("replace into `lr_search_record` values('19','1','狗粮','2','1495781789');");
E_D("replace into `lr_search_record` values('20','1','小米','15','1512528551');");
E_D("replace into `lr_search_record` values('21','3','模拟','3','1512638062');");
E_D("replace into `lr_search_record` values('22','3','产品','2','1512638068');");
E_D("replace into `lr_search_record` values('23','3','好玩的','3','1512638142');");
E_D("replace into `lr_search_record` values('24','3','汽车','1','1512638362');");
E_D("replace into `lr_search_record` values('25','3','婴儿用品','1','1512712064');");
E_D("replace into `lr_search_record` values('26','3','小孩子','1','1512712111');");
E_D("replace into `lr_search_record` values('27','3','小米','4','1512712360');");

require("../../inc/footer.php");
?>