<?php

namespace Api\Controller;

use Think\Controller;

class ZhutiController extends PublicController
{
    //***************************
    //  首页数据接口
    //***************************
    public function index()
    {

        $topiclist = M('zhuti')->where('1=1')->field('id,name,photo,action,subtitle,price_info')->limit(100)->select();
        foreach ($topiclist as $k => $v) {
            $topiclist[$k]['photo'] = __DATAURL__ . $v['photo'];
            $topiclist[$k]['action'] = $v['action'];
            $topiclist[$k]['name'] = $v['name'];
            $topiclist[$k]['subtitle'] = $v['subtitle'];
            $topiclist[$k]['price_info'] = $v['price_info'];
        }
        echo json_encode(array('topiclist' => $topiclist));
        exit();
    }

}


?>