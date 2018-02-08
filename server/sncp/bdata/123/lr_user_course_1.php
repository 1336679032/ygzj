<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_user_course`;");
E_C("CREATE TABLE `lr_user_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程报名表',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '会员ID',
  `course_id` int(11) NOT NULL DEFAULT '0' COMMENT '课程ID',
  `truename` varchar(20) DEFAULT NULL COMMENT '姓名',
  `sex` tinyint(2) DEFAULT '1' COMMENT '性别',
  `age` int(4) DEFAULT '0' COMMENT '年龄',
  `qq` varchar(20) DEFAULT NULL COMMENT 'QQ',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  `weixin` varchar(30) DEFAULT NULL COMMENT '微信号',
  `tel` varchar(15) DEFAULT NULL COMMENT '联系方式',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `state` tinyint(1) DEFAULT '1' COMMENT '状态：1报名中 2报名成功 3待定 4待定',
  `addtime` int(11) DEFAULT '0' COMMENT '报名时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `lr_user_course` values('1','1','3','小花','2','18','354353','dfgdsg@126.com','weixinhao','2147483647','水电费给对方返回SDR官方认识人多','没有备注','2','1495613076');");

require("../../inc/footer.php");
?>