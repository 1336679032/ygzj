<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_address`;");
E_C("CREATE TABLE `lr_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `name` varchar(10) NOT NULL COMMENT '收货人',
  `tel` char(15) NOT NULL COMMENT '联系方式',
  `sheng` int(11) NOT NULL DEFAULT '0' COMMENT '省id',
  `city` int(11) NOT NULL DEFAULT '0' COMMENT '市id',
  `quyu` int(11) NOT NULL DEFAULT '0' COMMENT '区域id',
  `address` varchar(255) NOT NULL COMMENT '收货地址（不加省市区）',
  `address_xq` varchar(255) NOT NULL COMMENT '省市区+详细地址',
  `code` int(11) NOT NULL DEFAULT '0' COMMENT '邮政编号',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `is_default` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否默认地址 1默认',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='用户收货地址表'");
E_D("replace into `lr_address` values('5','小小','13455882266','1023','1125','1127','什么街道什么路什么号什么附近','浙江省 丽水市 莲都区 什么街道什么路什么号什么附近','331102','1','1');");
E_D("replace into `lr_address` values('11','2123','24124124','1','2','3','124124','北京 北京 东城区 124124','110101','3','1');");
E_D("replace into `lr_address` values('12','凡凡','多大的额','22','39','40','到底三生三世','天津 县 宁河县 到底三生三世','120221','1','0');");
E_D("replace into `lr_address` values('13','李浩','18026481150','1','2','3','00','北京 北京 东城区 00','110101','3','0');");

require("../../inc/footer.php");
?>