<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_category`;");
E_C("CREATE TABLE `lr_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `tid` int(11) NOT NULL DEFAULT '0' COMMENT '父级分类id',
  `name` varchar(50) NOT NULL COMMENT '栏目名称',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `concent` varchar(255) DEFAULT NULL COMMENT '栏目简介',
  `bz_1` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `bz_2` varchar(255) DEFAULT NULL COMMENT '备注字段',
  `bz_3` varchar(100) DEFAULT NULL COMMENT '图标',
  `bz_4` tinyint(2) NOT NULL DEFAULT '0' COMMENT '备用字段',
  `bz_5` varchar(100) DEFAULT NULL COMMENT '推荐略缩图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_category` values('1','0','产品分类（系统分类，不要删除）','0','0','','',NULL,'','0',NULL);");
E_D("replace into `lr_category` values('2','1','居家','1','1493188517','回家，放松身心','UploadFiles/category/20171209/1512789291797788.png','https://swzl.yjyjt.cc/Data/UploadFiles/category/20171209/1512801162442595.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('3','1','餐厨','2','1493188587','好吃，高颜值美食','UploadFiles/category/20171209/1512789393886401.png','https://swzl.yjyjt.cc/Data/UploadFiles/category/20171209/1512801365116751.jpg',NULL,'0',NULL);");
E_D("replace into `lr_category` values('4','1','配件','3','1493188655','配角，亦是主角','UploadFiles/category/20171209/1512789581199288.png','https://swzl.yjyjt.cc/Data/UploadFiles/category/20171209/1512801451720496.jpg',NULL,'0',NULL);");
E_D("replace into `lr_category` values('5','4','路由器','1','1493188735','路由器','UploadFiles/category/20171205/1498817235977098.jpg','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('12','1','服装','5','1495694783','贴身的，要亲肤','UploadFiles/category/20171209/1512789676607126.png','https://swzl.yjyjt.cc/Data/UploadFiles/category/20171209/1512801484541090.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('8','2','红米','1','1494211044','红米','UploadFiles/category/20170630/1498816164528404.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('9','3','电脑','1','1494211080','电脑','UploadFiles/category/20170630/1498816738489391.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('13','12','耳机','1','1495694905','耳机','UploadFiles/category/20170630/1498817567512643.jpg','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('19','12','手环','0','1498818093','手环','UploadFiles/category/20170630/1498818092623976.jpg','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('15','2','小米','2','1495694950','小米','UploadFiles/category/20170630/1498816223479651.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('16','4','净化器','2','1495698002','净化器','UploadFiles/category/20170630/1498817327332325.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('17','3','鼠标','2','1495698212','鼠标','UploadFiles/category/20170630/1498816813257929.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");
E_D("replace into `lr_category` values('18','2','平板','90','1498640233','平板','UploadFiles/category/20170630/1498816577371393.png','https://www.yjyjt.cc/Data/UploadFiles/category/20171205/1512455428587838.png',NULL,'0',NULL);");

require("../../inc/footer.php");
?>