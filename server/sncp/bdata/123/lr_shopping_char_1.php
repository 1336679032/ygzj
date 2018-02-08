<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_shopping_char`;");
E_C("CREATE TABLE `lr_shopping_char` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '购物车表',
  `pid` int(11) NOT NULL COMMENT '商品ID',
  `price` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '商品单价',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '数量',
  `buff` varchar(255) NOT NULL COMMENT '属性（序列化格式）',
  `addtime` int(10) NOT NULL COMMENT '添加时间',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `shop_id` int(11) NOT NULL DEFAULT '0' COMMENT '商家ID',
  `gid` int(11) DEFAULT '0' COMMENT '规格id',
  `type` tinyint(2) DEFAULT '2' COMMENT '0是热卖，1是团购，2是普通商品',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_shopping_char` values('51','287','4799.00','1','','1513237466','3','0','0','1');");
E_D("replace into `lr_shopping_char` values('11','289','679.00','4','','1512637501','1','0','0','1');");
E_D("replace into `lr_shopping_char` values('14','278','95.00','3','','1512638063','1','0','0','1');");
E_D("replace into `lr_shopping_char` values('50','279','299.00','2','','1513237447','3','0','0','1');");
E_D("replace into `lr_shopping_char` values('49','282','3899.00','2','','1513237415','3','0','0','1');");

require("../../inc/footer.php");
?>