<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_order`;");
E_C("CREATE TABLE `lr_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `order_sn` varchar(20) NOT NULL COMMENT '订单编号',
  `pay_sn` varchar(20) DEFAULT NULL COMMENT '支付单号',
  `shop_id` int(11) NOT NULL DEFAULT '0' COMMENT '商家ID',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `price` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `amount` decimal(9,2) DEFAULT '0.00' COMMENT '优惠后价格',
  `addtime` int(10) NOT NULL DEFAULT '0' COMMENT '购买时间',
  `del` tinyint(2) NOT NULL DEFAULT '0' COMMENT '删除状态',
  `type` enum('weixin','alipay','cash') DEFAULT 'weixin' COMMENT '支付方式',
  `price_h` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '真实支付金额',
  `status` tinyint(2) NOT NULL DEFAULT '10' COMMENT '订单状态{0,已取消10未付款20代发货30待收货40待评价50交易完成51交易关闭',
  `vid` int(11) DEFAULT '0' COMMENT '优惠券ID',
  `receiver` varchar(15) NOT NULL COMMENT '收货人',
  `tel` char(15) NOT NULL COMMENT '联系方式',
  `address_xq` varchar(50) NOT NULL COMMENT '地址详情',
  `code` int(11) NOT NULL COMMENT '邮编',
  `post` int(11) DEFAULT NULL COMMENT '快递ID',
  `remark` varchar(255) DEFAULT NULL COMMENT '买家留言',
  `post_remark` varchar(255) NOT NULL COMMENT '邮费信息',
  `product_num` int(11) NOT NULL DEFAULT '1' COMMENT '商品数量',
  `trade_no` varchar(50) DEFAULT NULL COMMENT '微信交易单号',
  `kuaidi_name` varchar(10) DEFAULT NULL COMMENT '快递名称',
  `kuaidi_num` varchar(20) DEFAULT NULL COMMENT '运单号',
  `back` enum('1','2','0') DEFAULT '0' COMMENT '标识客户是否有发起退款1申请退款 2已退款',
  `back_remark` varchar(255) DEFAULT NULL COMMENT '退款原因',
  `back_addtime` int(11) DEFAULT '0' COMMENT '申请退款时间',
  `order_type` tinyint(2) DEFAULT '1' COMMENT '订单类型 1普通订单 2抢购订单',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_order` values('1','2527542452','242542563653','1','1','20.00','20.00','1493342432','1','weixin','0.00','20','0','eer','13454565656','问问投入法国恢复大飞哥','0',NULL,NULL,'','1',NULL,NULL,NULL,'2','朔方南街','1493344432','1');");
E_D("replace into `lr_order` values('2','2017050810256495',NULL,'0','1','0.10','0.10','1494212943','0','weixin','0.00','20','0','小程序','13422334455','吉林省 白山市 江源区 胜多负少的想法地方小高层上大学非常棒','220605','0','aaaa','','1',NULL,'顺丰快递','43214321423','0',NULL,'0','1');");
E_D("replace into `lr_order` values('3','2017051010257975',NULL,'39','1','114.50','0.00','1494408303','0','weixin','0.00','10','2','传承','13699887744','吉林省 通化市 二道江区 阿虎地方可能卡萨丁你','220503','0','测试','','14',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('4','2017052556525397',NULL,'48','1','9.00','9.00','1495710472','0','weixin','0.00','10','0','传承','13699887744','吉林省 通化市 二道江区 阿虎地方可能卡萨丁你','220503','0','哈哈','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('5','2017052652101575',NULL,'0','1','470.00','470.00','1495782164','0','weixin','0.00','10','0','小小','13455882266','浙江省 丽水市 莲都区 什么街道什么路什么号什么附近','331102','0','235','','2',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('6','2017120551574853',NULL,'0','1','2601.00','2601.00','1512473043','0','weixin','0.00','10','0','小小','13455882266','浙江省 丽水市 莲都区 什么街道什么路什么号什么附近','331102','0','','','9',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('7','2017120651565154',NULL,'0','1','837.00','837.00','1512528243','0','weixin','0.00','10','0','小小','13455882266','浙江省 丽水市 莲都区 什么街道什么路什么号什么附近','331102','0','','','3',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('8','2017120749995157',NULL,'0','3','235.00','235.00','1512624785','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('9','2017120751541011',NULL,'0','3','679.00','679.00','1512625747','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('10','2017120799485553',NULL,'0','3','1999.00','1999.00','1512625884','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('11','2017120750531009',NULL,'0','3','64.00','64.00','1512626162','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('12','2017120710057989',NULL,'0','3','64.00','64.00','1512626797','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('13','2017120757101575',NULL,'0','3','679.00','679.00','1512629449','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('14','2017120748535248',NULL,'0','3','679.00','679.00','1512630880','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('15','2017120757515098',NULL,'0','3','679.00','679.00','1512632089','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('16','2017120755565456',NULL,'0','3','679.00','679.00','1512632167','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('17','2017120799521011',NULL,'0','3','64.00','64.00','1512638508','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('18','2017120797979752',NULL,'0','3','1299.00','1299.00','1512648442','0','weixin','0.00','0','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('19','2017120848509910',NULL,'0','3','1447.00','1447.00','1512704768','0','weixin','0.00','0','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','3',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('20','2017120850100971',NULL,'0','3','4799.00','4799.00','1512731714','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('21','2017120910248102',NULL,'0','3','679.00','679.00','1512829439','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('22','2017120948511009',NULL,'0','3','679.00','679.00','1512829472','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('23','2017120948499849',NULL,'0','3','3196.00','3196.00','1512829552','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','4',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('24','2017120953102485',NULL,'0','3','679.00','679.00','1512829605','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('25','2017121097994848',NULL,'0','3','64.00','64.00','1512893482','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('26','2017121150525752',NULL,'0','3','1358.00','1358.00','1512957586','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','2',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('27','2017121198101995',NULL,'0','3','1497.00','1497.00','1512958219','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','3',NULL,NULL,NULL,'0',NULL,'0','1');");
E_D("replace into `lr_order` values('28','2017121748519857',NULL,'0','3','679.00','679.00','1513500720','0','weixin','0.00','10','0','2123','24124124','北京 北京 东城区 124124','110101','0','','','1',NULL,NULL,NULL,'0',NULL,'0','1');");

require("../../inc/footer.php");
?>