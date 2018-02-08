<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_brand`;");
E_C("CREATE TABLE `lr_brand` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品品牌表',
  `name` varchar(100) NOT NULL COMMENT '品牌名称',
  `brandprice` float(8,2) NOT NULL DEFAULT '0.00' COMMENT '起始价格',
  `photo` varchar(100) DEFAULT NULL COMMENT '图片',
  `type` tinyint(2) DEFAULT '0' COMMENT '是否推荐',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `shop_id` int(11) unsigned DEFAULT '0' COMMENT '店铺id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `lr_brand` values('1','CK制造商','39.00','UploadFiles/brand/20171209/1512792820795978.jpg','1','1493177975','0');");
E_D("replace into `lr_brand` values('2','新秀丽制造商','9.90','UploadFiles/brand/20171209/1512800682102428.jpg','1','1493185503','0');");
E_D("replace into `lr_brand` values('3','MUJI制造商','12.90','UploadFiles/brand/20171209/1512794510579350.jpg','1','1493185534','0');");
E_D("replace into `lr_brand` values('4','MUJI制造商','128.00','UploadFiles/brand/20171209/1512800615838031.jpg','1','1493185716','0');");
E_D("replace into `lr_brand` values('9','','0.00',NULL,'0','1512828502','0');");

require("../../inc/footer.php");
?>