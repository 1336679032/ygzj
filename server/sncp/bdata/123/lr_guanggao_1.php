<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_guanggao`;");
E_C("CREATE TABLE `lr_guanggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子页广告管理表',
  `name` varchar(20) DEFAULT NULL COMMENT '广告名称',
  `photo` varchar(100) DEFAULT NULL COMMENT '图片',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `sort` int(11) NOT NULL DEFAULT '0',
  `type` enum('product','news','partner','index') DEFAULT 'index' COMMENT '广告类型',
  `action` varchar(255) NOT NULL COMMENT '链接值',
  `position` tinyint(2) unsigned DEFAULT '1' COMMENT '广告位置 1首页轮播',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_guanggao` values('2','滚动广告图2','UploadFiles/adv/20171209/1512788869792446.jpg','0','2','','../product/detail?productId=278','1');");
E_D("replace into `lr_guanggao` values('5','首页轮播','UploadFiles/adv/20171209/1512788879465731.jpg','0','3','','../product/detail?productId=287','1');");
E_D("replace into `lr_guanggao` values('9','首页轮播','UploadFiles/adv/20171205/1512446440738800.jpg','0','1','product','../product/detail?productId=283','1');");
E_D("replace into `lr_guanggao` values('10','首页轮播','UploadFiles/adv/20171209/1512788855571611.jpg','1493349922','4','','../product/detail?productId=288','1');");

require("../../inc/footer.php");
?>