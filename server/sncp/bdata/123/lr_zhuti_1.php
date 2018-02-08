<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_zhuti`;");
E_C("CREATE TABLE `lr_zhuti` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '子页广告管理表',
  `name` varchar(20) DEFAULT NULL COMMENT '广告名称',
  `subtitle` varchar(100) DEFAULT NULL,
  `price_info` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL COMMENT '图片',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `sort` int(11) NOT NULL DEFAULT '0',
  `type` enum('product','news','partner','index') DEFAULT 'index' COMMENT '广告类型',
  `action` varchar(255) NOT NULL COMMENT '链接值',
  `position` tinyint(2) unsigned DEFAULT '1' COMMENT '广告位置 1首页轮播',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_zhuti` values('2','关爱他成长的每一个足迹','专业运动品牌同厂，毛毛虫鞋买二送一','0','UploadFiles/adv/20171209/1512798152901959.jpg','0','2','','../listdetail/listdetail?cat_id=4','1');");
E_D("replace into `lr_zhuti` values('5','一次解决5个节日送礼难题','这些就是他们想要的礼物清单','255','UploadFiles/adv/20171209/1512798252717078.jpg','0','3','','../listdetail/listdetail?cat_id=3','1');");
E_D("replace into `lr_zhuti` values('9','秒杀化学洗涤剂的纯天然皂','前段时间有朋友跟我抱怨，和婆婆住到一起才发现生活理念有太多不和。别的不提，光是洗...','299','UploadFiles/adv/20171209/1512798347570658.jpg','0','1','','../listdetail/listdetail?cat_id=2','1');");
E_D("replace into `lr_zhuti` values('10','买过的人都说它是差旅神器','许多人经历过旅途中内裤洗晾不便的烦恼，尤其与旅伴同居一室时，晾在卫生间里的内裤更...','39','UploadFiles/adv/20171209/1512798390682600.jpg','1493349922','4','','../listdetail/listdetail?cat_id=5','1');");

require("../../inc/footer.php");
?>