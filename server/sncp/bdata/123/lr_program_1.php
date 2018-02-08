<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_program`;");
E_C("CREATE TABLE `lr_program` (
  `id` int(11) unsigned NOT NULL COMMENT '小程序配置表',
  `xcxid` varchar(50) DEFAULT NULL COMMENT '小程序ID',
  `key` varchar(50) DEFAULT NULL COMMENT '小程序key',
  `wxid` varchar(50) DEFAULT NULL COMMENT '公众号ID',
  `mch` varchar(50) DEFAULT NULL COMMENT '小程序支付商户号',
  `seckey` varchar(50) DEFAULT NULL,
  `title` varchar(20) NOT NULL COMMENT '小程序名称',
  `name` varchar(20) NOT NULL COMMENT '负责人',
  `describe` varchar(200) DEFAULT NULL COMMENT '简单描述',
  `logo` varchar(100) DEFAULT NULL COMMENT 'logo',
  `copyright` varchar(100) DEFAULT NULL COMMENT '版权信息',
  `service_wx` varchar(50) DEFAULT NULL COMMENT '平台客服微信号',
  `tel` varchar(20) DEFAULT NULL COMMENT '平台客服电话',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  `uptime` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `lr_program` values('1','123123','1412412','412412412432423','4234211 v12 142r ','','网易严选小程序PHP版本','王菲菲124124124','网易严选小程序PHP版本','UploadFiles/logo/1512482349664245.jpg','Copyright © 2016 网易严选小程序PHP版本','123123','123123','123123123@qq.com','1512548460');");

require("../../inc/footer.php");
?>