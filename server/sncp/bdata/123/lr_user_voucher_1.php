<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_user_voucher`;");
E_C("CREATE TABLE `lr_user_voucher` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '会员优惠券领取记录',
  `uid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `vid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券id',
  `shop_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商铺ID',
  `full_money` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '满多少钱',
  `amount` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '减多少钱',
  `start_time` int(11) DEFAULT '0' COMMENT '开始时间',
  `end_time` int(11) DEFAULT '0' COMMENT '结束时间',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '领取时间',
  `status` tinyint(2) unsigned DEFAULT '1' COMMENT '使用状态 1未使用 2已使用 3已失效',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `lr_user_voucher` values('3','1','3','1','200.00','15.00','1492444800','1495123199','1492498299','1');");
E_D("replace into `lr_user_voucher` values('4','1','2','1','100.00','5.00','1492444800','1495123199','1492498311','1');");
E_D("replace into `lr_user_voucher` values('5','3','5','0','100.00','15.00','1495641600','1497110399','1495672289','1');");
E_D("replace into `lr_user_voucher` values('6','3','4','0','200.00','20.00','1495641600','1496851199','1495672291','1');");
E_D("replace into `lr_user_voucher` values('7','3','6','0','1000.00','100.00','1498579200','1523116799','1513500674','1');");

require("../../inc/footer.php");
?>