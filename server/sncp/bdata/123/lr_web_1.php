<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_web`;");
E_C("CREATE TABLE `lr_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '单网页信息表：关于我们、客服中心等',
  `pid` int(11) DEFAULT '0',
  `uname` varchar(255) DEFAULT NULL COMMENT '名称1',
  `ename` varchar(255) DEFAULT NULL COMMENT '名称2',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `concent` mediumtext COMMENT '内容介绍',
  `addtime` int(11) DEFAULT '0' COMMENT '发表时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_web` values('1','0','关于我们','','0','<p><span style=\"font-family:宋体;font-size: 14px; line-height: 24px; text-indent: 30px;\"></span></p><span style=\"font-family:宋体;\"><span style=\"font-size:16px;\"></span></span><p><span style=\"font-family:宋体;line-height: 24px;\"><span style=\"font-size:16px;\"><img src=\"/Data/UploadFiles/Uploads/day_170525/201705251102322478.jpg\" alt=\"\" /><br /></span></span></p><p><span style=\"font-family:宋体;line-height: 24px;\"><span style=\"font-size:16px;\"><span><span style=\"font-size:14px;\">&nbsp;&nbsp;&nbsp; 雷米高宠物美容师学校成立于2012年初，由雷米高动物营养保健科技有限公司联合广州市技师学院（国家级公办示范职业技术学院），以校企合作的形式开设的宠物美容师培训学校，校企联办，企业化独立运营。<br />学校由台湾教师级领衔国内外A级师资团队教学，是一所具有海陆两岸专业宠物美容教学理念与技术于一体的学校，成立5年多来，累计培养C级美容师超2000人，B级、A级美容师超两百人。<br />学校定位为专业的宠物美容师技能培训和创业培训，参考国际标准，重点发展C级精修特色班（2个月及以上），让学员学习加实习，毕业就能完全胜任宠物美容师岗位及具备创业能力。<br />&nbsp; &nbsp; 学校拥有超过1000只模特犬的专业犬舍，保证学员天天有真狗实训，学美容就是学手艺，真狗实训，成就一流手艺。<br />&nbsp; &nbsp; 学校是华南地区最具影响力的学校，也是全国为数不多的千人大校。学员100%推荐就业，永久技术支持，提供专业的创业指导平台，并让学生有机会免费加盟哈宠联邦宠物连锁机构。<br />&nbsp; &nbsp; 多年来，雷米高一直致力打造宠物行业全产业链事业，旨在服务更多可爱宠物，并帮助更多宠物行业从业者成功创业。雷米高公司，是全国首家进行宠物全产业链打造的公司，五大系列产品的研发、生产与销售（犬猫粮、宠物药品、保健品、护理品、零食）；纯种犬繁育；宠物美容师培训教育；宠物医疗服务；宠物店连锁经营。<br />&nbsp; &nbsp; 雷米高学校的愿景是成为宠物美容师学校中的清华北大，以“提升职业技能、创业实现梦想”为基本理念，来雷米高学习美容，就是与宠物行业结缘，与雷米高结缘，共同长期在整个宠物行业中成为合作伙伴，资源整合，共享宠物行业高速发展的红利，共同服务于我们的家庭新成员--猫猫狗狗，让每一个宠物享有最尊荣的关爱，待宠如亲！</span></span><br /></span></span></p><p style=\"text-indent: 30px;\"><span style=\"font-family:宋体;\"><span style=\"font-size: 14px;\">&nbsp;</span></span></p>','1495681384');");
E_D("replace into `lr_web` values('2','0','教学优势','','0','<p><img src=\"/Data/UploadFiles/Uploads/day_170525/201705251100326234.jpg\" alt=\"\" /></p><p><img src=\"/Data/UploadFiles/Uploads/day_170525/201705251100497245.jpg\" alt=\"\" /></p><p><span style=\"font-size:18px;line-height:2;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 雷米高宠物美容师学校成立于2012年，由雷米高公司出资，联合广州市技师学院（国家级示范职业技术学院），以校企合作的形式开设的宠物美容师培训学校，校企联办，实现企业化运营，由台湾教师团队领衔教学，是一所具有海陆两岸专业宠物美容教学于一体的学校。成立近5年来，培养C级美容师近2000人，并有上百个B级、A级美容师毕业，是华南最具影响力的学校，也是全国为数不多的千人大校。</span></p><p><br /></p>','1495681305');");

require("../../inc/footer.php");
?>