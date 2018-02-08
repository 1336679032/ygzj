<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_indeximg`;");
E_C("CREATE TABLE `lr_indeximg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `name` varchar(50) DEFAULT NULL COMMENT '分类产品',
  `photo` varchar(100) NOT NULL COMMENT '图片',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_indeximg` values('1','0','新闻资讯','UploadFiles/category/indeximg/20170626/1498465212860355.png','1');");
E_D("replace into `lr_indeximg` values('2','0','教学优势','UploadFiles/category/indeximg/20170626/1498465226783855.png','2');");
E_D("replace into `lr_indeximg` values('3','0','学员风采','UploadFiles/category/indeximg/20170626/1498465239176044.png','3');");
E_D("replace into `lr_indeximg` values('4','0','关于我们','UploadFiles/category/indeximg/20170626/1498465246720048.png','4');");

require("../../inc/footer.php");
?>