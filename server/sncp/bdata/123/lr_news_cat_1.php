<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_news_cat`;");
E_C("CREATE TABLE `lr_news_cat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '新闻分类表',
  `name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `lr_news_cat` values('1','行业资讯','1494582033');");
E_D("replace into `lr_news_cat` values('4','宠物百科','1494839440');");
E_D("replace into `lr_news_cat` values('3','最新动态','1494839412');");
E_D("replace into `lr_news_cat` values('5','开班信息','1494839454');");
E_D("replace into `lr_news_cat` values('6','开店秘籍','1495531391');");

require("../../inc/footer.php");
?>