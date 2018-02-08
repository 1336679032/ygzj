<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_shangchang`;");
E_C("CREATE TABLE `lr_shangchang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT '0' COMMENT '店铺类别id',
  `name` varchar(20) NOT NULL COMMENT '店铺名称',
  `uname` varchar(10) NOT NULL COMMENT '负责人名称',
  `logo` varchar(100) DEFAULT NULL COMMENT '店铺LOGO',
  `vip_char` varchar(100) DEFAULT NULL COMMENT '店铺公告、广告图',
  `sheng` int(11) NOT NULL DEFAULT '0' COMMENT '省id',
  `city` int(11) DEFAULT '0' COMMENT '市id',
  `quyu` int(11) DEFAULT '0' COMMENT '区域id',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `address_xq` varchar(255) DEFAULT NULL COMMENT '省市区+地址',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `location_x` varchar(20) NOT NULL DEFAULT '0' COMMENT '纬度',
  `location_y` varchar(20) NOT NULL DEFAULT '0' COMMENT '经度',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `updatetime` int(11) NOT NULL DEFAULT '0' COMMENT '更新日期',
  `content` text COMMENT '店铺介绍',
  `intro` varchar(200) DEFAULT NULL COMMENT '店铺广告语',
  `grade` int(2) NOT NULL DEFAULT '10' COMMENT '评分等级1~10',
  `tel` char(15) DEFAULT NULL COMMENT '联系电话',
  `utel` char(15) DEFAULT NULL COMMENT '负责人手机',
  `status` tinyint(2) DEFAULT '1' COMMENT '显示/隐藏',
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `qq` varchar(255) DEFAULT NULL COMMENT 'qq',
  `wx_appid` varchar(32) DEFAULT NULL COMMENT 'APPID',
  `wx_mch_id` varchar(32) DEFAULT NULL COMMENT '微信支付商户号',
  `wx_key` varchar(100) DEFAULT NULL COMMENT 'API密钥',
  `wx_secret` varchar(64) DEFAULT NULL COMMENT 'AppSecret是APPID对应的接口密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_shangchang` values('9','1','北京大帝都高级旗舰店','串串香','UploadFiles/shop/logo/20170508/1494227348768908.jpg','UploadFiles/shop/20170508/1494227348490053.jpg','1','2','3','天安门广场附近王府井知道吗','北京 北京 东城区 天安门广场附近王府井知道吗','496','116.417491','39.924232','1466825048','1494227348','<p><span style=\"font-size:18px;\">北京大帝都高级旗舰店</span></p><p><span style=\"font-size:12px;\">大帝都 就是飞讯呢</span><br /></p>','大帝都 就是飞讯呢','10','13926154675','13926154675','1','0','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('35','2','CBD阿里斯门迪品牌店','牛德福','UploadFiles/shop/logo/20170508/1494229934647258.jpg','UploadFiles/shop/20170508/1494230002408295.jpg','2151','2152','2161','什么路什么街什么商业中心附近','广东省 广州市 花都区 什么路什么街什么商业中心附近','400','113.168356','23.382594','1467969795','1494230002','<span style=\"font-size:18px;\">CBD阿里斯门迪品牌店</span>','什么品牌好 什么好品牌','10','13311112334','13311112334','1','1','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('36','1','广州国际贸易进出口','nick张','UploadFiles/shop/logo/20170508/1494229710369534.jpg','UploadFiles/shop/20170508/1494230066358172.jpg','2151','2152','2157','CBD国际金融中心大楼','广东省 广州市 天河区 CBD国际金融中心大楼','100','113.327464','23.137898','1468026641','1494230066','<span style=\"font-size:18px;\">广州国际贸易进出口</span>','国际品牌 你要的这里有','10','02044556678','13928712222','1','0','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('39','2','GGN乖乖女自营产品专营店','曹先生','UploadFiles/shop/logo/20170508/1494229020632699.jpg','UploadFiles/shop/20170508/1494229020424246.png','2151','2152','2159','黄埔公园附近','广东省 广州市 黄埔区 黄埔公园附近','500','113.456676','23.104064','1468217700','1494229020','<p><span style=\"font-size:18px;\">GGN乖乖女自营产品专营店</span></p><p><span style=\"font-size:18px;\"><br /></span></p>','阿斯顿撒通过 健康不好','10','02022221145','13654547676','1','1','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('45','1','CBG藏宝阁搜索专营店','白先生','UploadFiles/shop/logo/20170508/1494227020306856.jpg','UploadFiles/shop/20170508/1494227020836280.jpg','2151','2152','2158','你看着办白云山附近','广东省 广州市 白云区 你看着办白云山附近','48','113.304324','23.186209','1472105436','1494227020','<p><span style=\"font-size:18px;\">CBG藏宝阁搜索专营店</span></p><p><span style=\"font-size:18px;\"><br /></span></p>','呵呵呵呵呵 哈哈哈哈哈','10','02084796015','13455568787','1','1','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('46','2','KKBS维护卡斯马专营店','mini先生','UploadFiles/shop/logo/20170508/1494225499674202.jpg','UploadFiles/shop/20170508/1494225499169062.jpg','2151','2207','2209','东方广场还发广播站A区喽','广东省 江门市 蓬江区 东方广场还发广播站A区喽','150','113.080682','22.592643','1473057266','1494225499','<p><span style=\"font-size:18px;\">东方广场还发广播站A区喽</span></p><p>曾经的曾经 现在的现在曾经的曾经 现在的现在曾经的曾经 现在的现在曾经的曾经 现在的现在<br /></p><p style=\"margin: 0px; padding: 0px;\"></p>','曾经的曾经 现在的现在','10','13532323545','13532323545','1','1','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('47','1','KO打卡机阿斯顿旗舰店','爱尚先生','UploadFiles/shop/logo/20170508/1494225236944805.jpg','UploadFiles/shop/20170508/1494225236615782.jpg','2151','2166','2168','步步高高对面街道cc','广东省 韶关市 武江区 步步高高对面街道cc','650','113.601555','24.826763','1473842739','1494225236','&nbsp;易岛通（海南）旅游科技有限公司是一家旅游度假、养生休闲综合服务平台，总部位于海南的省会城市海口。<br />易岛通度假项目依托海南独特的地理区位、自然环境、天然资源等优势，建设丰富而又舒适的多元化度假场所，同时将海南岛纯天然的优质产品配套推出，开创全新的吃住玩一体化服务的“自助餐式”度假新体验。易岛通度假综合服务平台将通过大数据、云技术、物联网及各种领先的移动网络信息技术，全方位打造和提供线上线下预定、购买、交流、互动、互助服务模式，并将服务推向广大社区的千家万户。<br />&nbsp;<br />老人收住类型：生活自理<br />老人入住指南：三亚，乐东，琼海，琼中，文昌，五指山，万宁，儋州<br />房型：单人间、双人间、公寓<br />床位数：20000<br />收费标准： 999（七天） 9999（63天） 59800（2460天）<br />特色服务：接送服务，活动服务，棋牌室、麻将室、舞蹈室、排练厅、音像制作室<br />医疗护理（如果您机构可以提供）：基地有医疗人员<br /><p>保险：购买人身安全保险</p><p><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141646386637.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141646512845.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141646573553.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141647068364.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648064119.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648123339.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648189118.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648265046.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648311531.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648384419.jpg\" alt=\"\" /><img src=\"http://lscy5.caeac.com.cn/app/62/3057c1502ae5a4d514baec129f72948c266e/UploadFiles/day_160914/201609141648546246.jpg\" alt=\"\" /><br /></p>','高高兴兴玩 开开心心买','10','13232454675','13232454675','1','0','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('48','2','MNMX模拟梦想直营店','小先生','UploadFiles/shop/logo/20170508/1494215970977911.jpg','UploadFiles/shop/20170508/1494215970509487.jpg','2151','2152','2157','一片汪洋大海附近地址','广东省 广州市 天河区 一片汪洋大海附近地址','650','113.344855','23.125336','1476168943','1494231948','<p><span style=\"font-family:Microsoft YaHei;font-size:18px;\">MNMX模拟梦想直营店&nbsp;</span></p><p><span style=\"font-size:12px;\">玩玩玩玩玩 买买买买买</span><br /></p>','玩玩玩玩玩 买买买买买','10','13866544322','13866544322','1','1','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('49','1','SCC部分对方官方旗舰店','Mr . xiao','UploadFiles/shop/logo/20170508/1494215671720469.jpg','UploadFiles/shop/20170508/1494215671616059.jpg','2151','2152','2160','南村','广东省 广州市 番禺区 南村','200','113.385674','23.007963','1477293664','1494215671','SCC部分对方官方旗舰店','吃吃吃吃吃 呜呜呜呜网','10','13755446677','13755446677','1','0','',NULL,NULL,NULL,NULL);");
E_D("replace into `lr_shangchang` values('50','2','ZHXZ最好选择我的店','测试先生','UploadFiles/shop/logo/20170428/1493347023276929.jpg','UploadFiles/shop/20170428/1493347024426958.png','2151','2152','2157','好的味道好的街道好的号','广东省 广州市 天河区 好的味道好的街道好的号','88','113.380159','22.998499','1493346749','1494230955','<span style=\"font-size:18px;\"><strong>ZHXZ最好选择我的店</strong></span>','给自己一个惊喜，给世界一个惊喜','10','13812423423','13412423423','1','0','34536465',NULL,NULL,NULL,NULL);");

require("../../inc/footer.php");
?>