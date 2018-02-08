<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_order_product`;");
E_C("CREATE TABLE `lr_order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单商品信息表',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `pay_sn` varchar(20) DEFAULT NULL COMMENT '支付单号',
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '订单id',
  `name` varchar(50) NOT NULL COMMENT '产品名称',
  `price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `photo_x` varchar(100) DEFAULT NULL COMMENT '商品图',
  `pro_buff` varchar(255) DEFAULT NULL COMMENT '产品属性',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '购买数量',
  `pro_guige` varchar(50) DEFAULT NULL COMMENT '规格id和规格名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_order_product` values('1','2','242542563653','1','发表差别v','20.00','UploadFiles/product/20170428/1493342431423135.jpg',NULL,'1493342432','1',NULL);");
E_D("replace into `lr_order_product` values('2','277',NULL,'2','抢购产品设置测试这里是标题','0.10','UploadFiles/product/20170506/1494037725840566.jpg',NULL,'1494212943','1',NULL);");
E_D("replace into `lr_order_product` values('3','272',NULL,'3','不是开心果 胜似开心果','2.00','UploadFiles/product/20170508/1494231242827074.jpg','','1494408303','6','');");
E_D("replace into `lr_order_product` values('4','274',NULL,'3','给自己一个惊喜，给世界一个惊喜','15.00','UploadFiles/product/20170428/1493342431423135.jpg','','1494408303','1','');");
E_D("replace into `lr_order_product` values('5','269',NULL,'3','国外进口 还是熟悉的饼干味','12.50','UploadFiles/product/20170508/1494231776498205.jpg','','1494408303','7','');");
E_D("replace into `lr_order_product` values('6','264',NULL,'4','过去，平淡无奇；而未来，却多姿多彩','9.00','UploadFiles/product/20170508/1494234169630484.jpg','','1495710472','1','');");
E_D("replace into `lr_order_product` values('7','269',NULL,'5','雷米高狗粮成犬 澳宝 德牧边牧苏牧阿拉斯加哈士奇20kg 金毛狗粮','235.00','UploadFiles/product/20170526/1495777671397934.jpg','','1495782164','2','');");
E_D("replace into `lr_order_product` values('8','279',NULL,'6','350根全棉贡缎暖绒素色四件套','299.00','UploadFiles/product/20171205/1512449568530883.jpg','','1512473043','6','');");
E_D("replace into `lr_order_product` values('9','281',NULL,'6','秋棉暖绒双面印花磨毛四件套','269.00','UploadFiles/product/20171205/1512449821874739.jpg','','1512473043','3','');");
E_D("replace into `lr_order_product` values('10','281',NULL,'7','秋棉暖绒双面印花磨毛四件套','269.00','UploadFiles/product/20171205/1512449821874739.jpg','','1512528243','2','');");
E_D("replace into `lr_order_product` values('11','279',NULL,'7','350根全棉贡缎暖绒素色四件套','299.00','UploadFiles/product/20171205/1512449568530883.jpg','','1512528243','1','');");
E_D("replace into `lr_order_product` values('12','269',NULL,'8','雷米高狗粮成犬 澳宝 德牧边牧苏牧阿拉斯加哈士奇20kg 金毛狗粮','235.00','UploadFiles/product/20170526/1495777671397934.jpg','','1512624785','1','');");
E_D("replace into `lr_order_product` values('13','289',NULL,'9','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512625747','1','');");
E_D("replace into `lr_order_product` values('14','286',NULL,'10','24寸 纯PC“铝框”（非全铝）拉杆箱','1999.00','UploadFiles/product/20170630/1498823755863174.jpg','','1512625884','1','');");
E_D("replace into `lr_order_product` values('15','288',NULL,'11','升级款双宫茧桑蚕丝被 子母被','64.00','UploadFiles/product/20170630/1498823998129871.jpg','','1512626162','1','');");
E_D("replace into `lr_order_product` values('16','288',NULL,'12','升级款双宫茧桑蚕丝被 子母被','64.00','UploadFiles/product/20170630/1498823998129871.jpg','','1512626797','1','');");
E_D("replace into `lr_order_product` values('17','289',NULL,'13','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512629449','1','');");
E_D("replace into `lr_order_product` values('18','289',NULL,'14','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512630880','1','');");
E_D("replace into `lr_order_product` values('19','289',NULL,'15','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512632089','1','');");
E_D("replace into `lr_order_product` values('20','289',NULL,'16','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512632167','1','');");
E_D("replace into `lr_order_product` values('21','288',NULL,'17','升级款双宫茧桑蚕丝被 子母被','64.00','UploadFiles/product/20170630/1498823998129871.jpg','','1512638508','1','');");
E_D("replace into `lr_order_product` values('22','284',NULL,'18','100年传世珐琅锅 全家系列','1299.00','UploadFiles/product/20170630/1498823358368715.jpg','','1512648442','1','');");
E_D("replace into `lr_order_product` values('23','289',NULL,'19','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512704768','1','');");
E_D("replace into `lr_order_product` values('24','281',NULL,'19','秋棉暖绒双面印花磨毛四件套','269.00','UploadFiles/product/20171205/1512449821874739.jpg','','1512704768','1','');");
E_D("replace into `lr_order_product` values('25','283',NULL,'19','德国制造 镁离子净水壶（含滤芯）','499.00','UploadFiles/product/20170630/1498823086228577.jpg','','1512704768','1','');");
E_D("replace into `lr_order_product` values('26','287',NULL,'20','日式绒里男/女家居拖鞋\nMUJI制造商，舒棉绒内里','4799.00','UploadFiles/product/20170630/1498823891591969.jpg','','1512731714','1','');");
E_D("replace into `lr_order_product` values('27','289',NULL,'21','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512829439','1','');");
E_D("replace into `lr_order_product` values('28','289',NULL,'22','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512829472','1','');");
E_D("replace into `lr_order_product` values('29','279',NULL,'23','350根全棉贡缎暖绒素色四件套','299.00','UploadFiles/product/20171205/1512449568530883.jpg','','1512829552','2','');");
E_D("replace into `lr_order_product` values('30','284',NULL,'23','100年传世珐琅锅 全家系列','1299.00','UploadFiles/product/20170630/1498823358368715.jpg','','1512829552','2','');");
E_D("replace into `lr_order_product` values('31','289',NULL,'24','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512829605','1','');");
E_D("replace into `lr_order_product` values('32','288',NULL,'25','升级款双宫茧桑蚕丝被 子母被','64.00','UploadFiles/product/20170630/1498823998129871.jpg','','1512893482','1','');");
E_D("replace into `lr_order_product` values('33','289',NULL,'26','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1512957586','2','');");
E_D("replace into `lr_order_product` values('34','283',NULL,'27','德国制造 镁离子净水壶（含滤芯）','499.00','UploadFiles/product/20170630/1498823086228577.jpg','','1512958219','3','');");
E_D("replace into `lr_order_product` values('35','289',NULL,'28','升级款柔软保暖羽绒被','679.00','UploadFiles/product/20171206/1512538190240722.png','','1513500720','1','');");

require("../../inc/footer.php");
?>