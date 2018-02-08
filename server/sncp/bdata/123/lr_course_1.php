<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_course`;");
E_C("CREATE TABLE `lr_course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '培训课程表',
  `title` varchar(200) NOT NULL COMMENT '课程名称',
  `price` decimal(9,2) DEFAULT '0.00' COMMENT '价格',
  `photo` varchar(100) DEFAULT NULL COMMENT '图片',
  `intro` varchar(255) DEFAULT NULL COMMENT '简介摘要',
  `opentime` int(11) NOT NULL DEFAULT '0' COMMENT '开课时间',
  `class_hour` varchar(20) NOT NULL COMMENT '课时',
  `people` varchar(200) DEFAULT NULL COMMENT '针对人群',
  `teach_goals` varchar(200) DEFAULT NULL COMMENT '教学目的',
  `content` text COMMENT '课程介绍',
  `num` int(11) DEFAULT '0' COMMENT '报名人数',
  `addtime` int(11) DEFAULT '0' COMMENT '添加时间',
  `del` tinyint(2) DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `lr_course` values('1','宠物美容班A级班','35000.00','UploadFiles/course/20170523/1495528544321330.jpg','巩固B级课程，并且加强深度与广度。顶级赛犬的护理、修剪美容、牵犬、训犬、繁殖以及怎样参加各种犬赛并获得成绩的贴心指导','0','3个月','爱犬人士，想深入学习宠物美容以及创业的人士','培养有能力胜任 宠物店美容师工作的高级人才','&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170523/201705231635306069.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170523/201705231635401378.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;&lt;/p&gt;','0','1495528544','0');");
E_D("replace into `lr_course` values('2','宠物美容师C级标准班','6600.00','UploadFiles/course/20170523/1495529318884886.jpg','','0','4周','爱犬人士、有意创业人群','培养有能力胜任宠物美容师的人才','&lt;p align=&quot;center&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:2.5;&quot;&gt;课程内容：&lt;/span&gt; &lt;/p&gt;&lt;span style=&quot;font-size:18px;line-height:2.5;&quot;&gt;&lt;/span&gt; &lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 宠物美容概论&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 宠物美容工具的使用和护理（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 常见宠物犬的日常美容护理：（实操）&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 包括宠物犬的指甲修剪、脚底毛的修剪、耳朵卫生清理、腹底毛的修剪、肛门腺的清理、洗澡沐浴、毛发梳理拉直&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 贵宾犬的美容造型与修剪：标准造型修剪（实操）&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 贵宾犬的美容造型与修剪：宠物可爱造型修剪（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 比熊犬的美容造型与修剪（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 大型犬美容方法及注意事项（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 雪纳瑞犬的美容造型与修剪（实操）&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&lt;/span&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 博美犬的美容造型与修剪（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 宠物专用SPA的原理与实操（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 全自动吹毛机的操作方法与实操（实操）&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 宠物时尚创意染色与造型（实操）&lt;/span&gt; &lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 弱点加强与训练（实操）&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 犬只日常行为与训练&lt;/span&gt;&lt;br /&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 宠物店的经营与管理&lt;/span&gt;&lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;span style=&quot;font-size:18px;line-height:3;&quot;&gt;&lt;br /&gt;&lt;/span&gt; &lt;/p&gt;','0','1495529318','0');");
E_D("replace into `lr_course` values('3','宠物美容师C级精修班','11800.00','UploadFiles/course/20170523/1495529403812839.jpg','','0','8周','爱犬人士、及有意创业人士','培养优秀的宠物美容师的人才','&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170523/201705231649546783.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;','1','1495529403','0');");
E_D("replace into `lr_course` values('4','宠物美容师B级班','15800.00','UploadFiles/course/20170523/1495529783214952.jpg','贵宾犬的赛级美容，比熊的赛级美容，大型犬的赛级美容，赛级的专业管理与训练，牵犬、包毛护毛等示范教学。着重线条及速度，为以后考取A级证书做准备','0','2个月','有C级宠物美容师证的爱犬人士','培养有能力获取宠物美容师B级，有志于宠物行业发展的人才','&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170523/201705231656169025.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;','0','1495529783','0');");
E_D("replace into `lr_course` values('6','宠物美容师C+B班','21800.00','UploadFiles/course/20170525/1495684752521993.jpg','工具的使用和护理，宠物美容的洗狗、拉毛、吹毛、宠物医疗与护理常识，贵宾犬的美容；比熊的美容；雪纳瑞的美容，专业赛级犬美容知识。C级线条加强，赛级贵宾PUPPY装修翦,长毛犬护理包毛，赛级犬的牵引，犬赛赛制讲解','1496016000','3个月','爱犬人士，想充实宠物美容工作以及创业的人士','培养有能力成为资深美容师的人才','&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251159003230.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;','0','1495684752','0');");
E_D("replace into `lr_course` values('7','宠物日系造型班','5800.00','UploadFiles/course/20170525/1495684939875551.jpg','当前最流行宠物造型修剪，及学员要求要学习的更多造型','1496019600','2周','有一定宠物美容基础，想要进修学习','培养有一定美容基础功底美容师，对宠物造型变化的多样性，独立完成宠物主人对各种造型的修剪要求，给每一只宠物都有它专属造型','&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251202062629.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251202131145.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;','0','1495684940','0');");

require("../../inc/footer.php");
?>