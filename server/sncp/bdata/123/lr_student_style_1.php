<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_student_style`;");
E_C("CREATE TABLE `lr_student_style` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '学员风采表',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `photo` varchar(100) DEFAULT NULL COMMENT '图片',
  `author` varchar(20) DEFAULT NULL,
  `source` varchar(30) DEFAULT NULL COMMENT '来源',
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `content` text COMMENT '内容',
  `addtime` int(11) DEFAULT '0' COMMENT '添加时间',
  `del` tinyint(1) DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `lr_student_style` values('1','第1期学员风采','UploadFiles/stustyle/20170523/1495533692924817.jpg','Andy','雷米高','72','&lt;h2 align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/h2&gt;&lt;h2 align=&quot;center&quot;&gt;第1期学员风采&lt;/h2&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170523/201705231801236065.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/p&gt;','1495533693','0');");
E_D("replace into `lr_student_style` values('2','第2期学员风采','UploadFiles/stustyle/20170524/1495619154855026.jpg','Andy','雷米高','67','&lt;h2 align=&quot;center&quot;&gt;第2期学员风采&lt;/h2&gt;&lt;p align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170524/201705241745091534.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/p&gt;&lt;p align=&quot;center&quot;&gt;&lt;br /&gt;&lt;/p&gt;','1495619154','0');");
E_D("replace into `lr_student_style` values('3','第3期学员风采','UploadFiles/stustyle/20170524/1495619351424870.jpg','Andy','雷米高','75','&lt;h2 align=&quot;center&quot;&gt;第3期学员风采&lt;/h2&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p align=&quot;left&quot;&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170524/201705241749008780.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;&lt;/p&gt;','1495619351','0');");
E_D("replace into `lr_student_style` values('4','第6期学员风采','UploadFiles/stustyle/20170525/1495691588447374.jpg','Andy','雷米高','49','&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;strong&gt;第3期学员风采&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251352457412.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;strong&gt;&lt;br /&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;','1495691588','0');");
E_D("replace into `lr_student_style` values('5','第9期学员风采','UploadFiles/stustyle/20170525/1495700324168784.jpg','Andy','雷米高','76','&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251614146792.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251614255325.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251615297312.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251615407510.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616078084.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616183453.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616273434.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616367894.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616475560.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251616583862.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251617349097.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251617449800.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251617599171.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/minipetmrschool/Data/UploadFiles/Uploads/day_170525/201705251618083181.jpg&quot; alt=&quot;&quot; align=&quot;middle&quot; /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;','1495700324','0');");

require("../../inc/footer.php");
?>