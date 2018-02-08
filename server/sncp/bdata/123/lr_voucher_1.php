<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_voucher`;");
E_C("CREATE TABLE `lr_voucher` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '店铺优惠券表',
  `shop_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '店铺ID',
  `title` varchar(100) DEFAULT NULL COMMENT '优惠券名称',
  `full_money` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '满多少钱',
  `amount` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '减多少钱',
  `start_time` int(11) NOT NULL DEFAULT '0' COMMENT '开始时间',
  `end_time` int(11) NOT NULL DEFAULT '0' COMMENT '结束时间',
  `point` int(11) DEFAULT '0' COMMENT '所需积分',
  `count` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '发行数量',
  `receive_num` int(11) unsigned DEFAULT '0' COMMENT '领取数量',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '优惠券类型',
  `del` tinyint(1) unsigned DEFAULT '0' COMMENT '删除状态',
  `proid` text COMMENT '产品ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `lr_voucher` values('1','0','新人优惠券','100.00','8.00','1491062400','1523116799','100','15','0','1491126577','1','0','288,287');");
E_D("replace into `lr_voucher` values('2','1','新人优惠券','100.00','5.00','1492444800','1523116799','0','10','0','1492482339','1','0','all');");
E_D("replace into `lr_voucher` values('3','1','端午到，优惠券也到了','200.00','15.00','1492444800','1523116799','0','10','0','1492482366','1','0','all');");
E_D("replace into `lr_voucher` values('4','0','端午到，优惠券也到了','200.00','20.00','1495641600','1523116799','0','20','0','1495672098','1','0','all');");
E_D("replace into `lr_voucher` values('5','0','端午优惠多, 先到就先得','100.00','15.00','1495641600','1523116799','0','20','0','1495672249','1','0','all');");
E_D("replace into `lr_voucher` values('6','0','手机优惠券','1000.00','100.00','1498579200','1523116799','0','1','1','1498642295','1','0','all');");

require("../../inc/footer.php");
?>