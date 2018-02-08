<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_product_dp`;");
E_C("CREATE TABLE `lr_product_dp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品评论表',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '会员id',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `order_id` int(11) DEFAULT '0' COMMENT '评论订单id',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '评分数',
  `concent` varchar(255) DEFAULT NULL,
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '评论时间',
  `audit` tinyint(2) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `reply_status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '回复状态',
  `reply_content` text COMMENT '回复内容',
  `reply_time` int(11) NOT NULL DEFAULT '0' COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_product_dp` values('1','16','157','0','10','非常好','1470212647','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('2','16','159','0','10','口感非常好，野生即食很方便','1470223379','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('3','41','259','0','10','功能强大，好评！','1477715118','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('4','41','168','0','10','居家养老好帮手，高科技产品，很好用！','1477715176','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('5','42','155','0','10','好评','1479596161','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('6','42','168','0','10','好评','1479596179','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('7','42','162','0','10','不错','1479596208','0','0',NULL,'0');");
E_D("replace into `lr_product_dp` values('10','5','273','109','8','东西非常不错，给力！','1482907790','0','0',NULL,'0');");

require("../../inc/footer.php");
?>