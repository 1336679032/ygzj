<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_guige`;");
E_C("CREATE TABLE `lr_guige` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '规格id',
  `pid` int(11) NOT NULL COMMENT '产品id',
  `attr_id` int(11) DEFAULT '0' COMMENT '产品属性id',
  `name` varchar(50) NOT NULL COMMENT '规格名称',
  `price` decimal(9,2) DEFAULT '0.00' COMMENT '规格价格',
  `stock` int(11) unsigned NOT NULL COMMENT '库存',
  `img` varchar(100) DEFAULT NULL COMMENT '属性图片',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_guige` values('1','270','3','类型1','1.00','4','UploadFiles/attribute/20170426/1493200933326487.jpg','1493200341');");
E_D("replace into `lr_guige` values('2','270','3','类型2','2.00','4',NULL,'1493200341');");
E_D("replace into `lr_guige` values('3','270','4','口味1','3.00','4',NULL,'1493200341');");
E_D("replace into `lr_guige` values('4','270','4','口味2','4.00','4',NULL,'1493200341');");
E_D("replace into `lr_guige` values('5','270','6','规格1','0.20','4','UploadFiles/attribute/20170426/1493200949147573.jpg','1493200341');");
E_D("replace into `lr_guige` values('6','270','6','规格2','0.20','4',NULL,'1493200341');");
E_D("replace into `lr_guige` values('7','270','6','规格3','0.20','4',NULL,'1493200341');");
E_D("replace into `lr_guige` values('8','271','1','大一号','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('9','271','1','小一号','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('10','271','1','中号','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('11','271','1','小号','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('12','271','1','超大号','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('13','271','2','红色','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('14','271','2','灰色','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('15','271','2','蓝色','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('16','271','3','迷你型','0.20','2',NULL,'1493201823');");
E_D("replace into `lr_guige` values('17','271','3','儿童型','0.20','2',NULL,'1493201823');");

require("../../inc/footer.php");
?>