<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_user`;");
E_C("CREATE TABLE `lr_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表：包括后台管理员、商家会员和普通会员',
  `name` varchar(20) NOT NULL COMMENT '登陆账号',
  `uname` varchar(10) DEFAULT NULL COMMENT '昵称',
  `pwd` varchar(50) NOT NULL COMMENT 'MD5密码',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `jifen` float(11,0) DEFAULT '0' COMMENT '积分',
  `photo` varchar(255) DEFAULT NULL COMMENT '头像',
  `tel` char(15) DEFAULT NULL COMMENT '手机',
  `qq_id` varchar(20) NOT NULL DEFAULT '0' COMMENT 'qq',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `sex` tinyint(2) NOT NULL DEFAULT '0' COMMENT '性别',
  `del` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `openid` varchar(50) NOT NULL COMMENT '授权ID',
  `source` varchar(10) NOT NULL COMMENT '第三方平台(微信，QQ)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_user` values('1','aa','aa','aa','0','0',NULL,NULL,'0',NULL,'0','1','','');");
E_D("replace into `lr_user` values('2','小伙伴','小伙伴','','1494210088','0','http://wx.qlogo.cn/mmopen/vi_32/6Dq9DIIcGyQiaEA4JicN48rEQ1bwm33s2cGkzHlSLkUOPwktluYXmf84fiaILKMUCb5SSvOHmxxenE4MlelQhibBqg/0',NULL,'0',NULL,'1','0','oQukL0fa013osRbWSdIPaUt88JZE','wx');");
E_D("replace into `lr_user` values('3','小伙伴','小伙伴','','1495264753','0','http://wx.qlogo.cn/mmhead/icXtjp9jsR5RylwDhXjxFtIL70hvKaibowUZYFsD9shibBiaQyqvD1zRng/132',NULL,'0',NULL,'1','0','undefined','wx');");

require("../../inc/footer.php");
?>