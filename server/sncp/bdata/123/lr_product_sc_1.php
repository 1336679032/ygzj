<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `lr_product_sc`;");
E_C("CREATE TABLE `lr_product_sc` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品收藏表',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '商品ID',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `status` tinyint(2) DEFAULT '1' COMMENT '状态 1正常 0删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `lr_product_sc` values('6','285','1','1');");
E_D("replace into `lr_product_sc` values('7','289','1','1');");
E_D("replace into `lr_product_sc` values('10','284','3','1');");
E_D("replace into `lr_product_sc` values('11','288','3','1');");
E_D("replace into `lr_product_sc` values('16','283','3','1');");

require("../../inc/footer.php");
?>