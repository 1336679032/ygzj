<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_attribute`;");
E_C("CREATE TABLE `lr_attribute` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '属性名称',
  `attr_name` varchar(20) NOT NULL,
  `sort` int(3) NOT NULL COMMENT '排序',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `lr_attribute` values('1','尺寸','2','1482025941');");
E_D("replace into `lr_attribute` values('2','颜色','3','1482025959');");
E_D("replace into `lr_attribute` values('3','类型','1','1482025973');");
E_D("replace into `lr_attribute` values('4','口味','5','1482027915');");
E_D("replace into `lr_attribute` values('5','尺码','6','1482027960');");
E_D("replace into `lr_attribute` values('6','规格','4','1482028066');");
E_D("replace into `lr_attribute` values('7','机型','0','1482046174');");
E_D("replace into `lr_attribute` values('9','品牌','0','1482046443');");
E_D("replace into `lr_attribute` values('10','样式','0','1482046603');");
E_D("replace into `lr_attribute` values('12','大小','0','1482052706');");

require("../../inc/footer.php");
?>