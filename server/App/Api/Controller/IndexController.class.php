<?php

namespace Api\Controller;

use Think\Controller;

class IndexController extends PublicController
{

    public function index()
    {

        $ggtop = M('guanggao')->order('sort desc,id asc')->field('id,name,photo,action')->limit(10)->select();
        foreach ($ggtop as $k => $v) {
            $ggtop[$k]['photo'] = __DATAURL__ . $v['photo'];
            $ggtop[$k]['name'] = urlencode($v['name']);
            $ggtop[$k]['action'] = $v['action'];
        }
        $zhuti = M('zhuti')->where('1=1')->field('id,name,photo,action')->limit(3)->select();
        foreach ($zhuti as $k => $v) {
            $zhuti[$k]['photo'] = __DATAURL__ . $v['photo'];
            $zhuti[$k]['action'] = $v['action'];
        }

        $brand = M('brand')->where('type=1')->field('id,name,photo,brandprice')->limit(20)->select();
        foreach ($brand as $k => $v) {
            $brand[$k]['photo'] = __DATAURL__ . $v['photo'];
            $brand[$k]['brandprice'] = $v['brandprice'];
        }

        $category = M('category')->where('tid=1')->field('id,name,bz_1')->limit(8)->select();
        foreach ($category as $k => $v) {
            $category[$k]['bz_1'] = __DATAURL__ . $v['bz_1'];
        }

        $product = M('product');
        $goodsCount = $product->count();
        $this->assign('goodsCount', $goodsCount);

        $pro_list = M('product')->where('del=0 AND pro_type=1 AND is_down=0 AND type=1')->order('sort desc,id desc')->field('id,name,intro,photo_x,price_yh,price,shiyong')->limit(8)->select();
        foreach ($pro_list as $k => $v) {
            $pro_list[$k]['photo_x'] = __DATAURL__ . $v['photo_x'];
        }

        $hotGoods = M('product')->where('del=0 AND pro_type=1 AND is_down=0 AND type=1')->order('sort desc,id desc')->field('id,name,intro,photo_x,price_yh,price,shiyong')->limit(8)->select();
        foreach ($hotGoods as $k => $v) {
            $hotGoods[$k]['photo_x'] = __DATAURL__ . $v['photo_x'];
        }

        $newGoods = M('product')->where('del=0 AND pro_type=1 AND is_down=0 AND type=1')->order('sort desc,id desc')->field('id,name,intro,photo_x,price_yh,price,shiyong')->limit(8)->select();
        foreach ($newGoods as $k => $v) {
            $newGoods[$k]['photo_x'] = __DATAURL__ . $v['photo_x'];
        }

        echo json_encode(array('ggtop' => $ggtop, 'procat' => $procat, 'prolist' => $pro_list, 'newGoods' => $newGoods, 'hotGoods' => $hotGoods, 'brand' => $brand, 'category' => $category, 'goodsCount' => $goodsCount, 'zhuti' => $zhuti));
        exit();
    }

    public function getlist()
    {
        $page = intval($_REQUEST['page']);
        $limit = intval($page * 8) - 8;

        $pro_list = M('product')->where('del=0 AND pro_type=1 AND is_down=0 AND type=1')->order('sort desc,id desc')->field('id,name,photo_x,price_yh,shiyong')->limit($limit . ',8')->select();
        foreach ($pro_list as $k => $v) {
            $pro_list[$k]['photo_x'] = __DATAURL__ . $v['photo_x'];
        }

        echo json_encode(array('prolist' => $pro_list));
        exit();
    }

    public function ceshi()
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol) - 1;

        for ($i = 0; $i < 32; $i++) {
            $str .= $strPol[rand(0, $max)];
        }

        echo $str;
    }

}