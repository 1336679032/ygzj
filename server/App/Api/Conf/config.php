<?php

header("Content-Type:text/html; charset=utf-8");
error_reporting(0);

define('SELF_ROOT', 'https://igyyevap.qcloud.la');

$urkn = SELF_ROOT . "Data/app/";
define('APP_URL', $urkn);

return array(

    'key' => 15222,
    'URL_MODEL' => 3,
    'app_name' => '你的小程序签名',
    'DB_FIELDS_CACHE' => true,
    'base' => $urkn . '62/3057c1502ae5a4d514baec129f72948c266e/',
    'TMPL_CACHE_ON' => false,
    'HTML_CACHE_ON' => false,
    'LOG_RECORD' => false,
    'LOG_TYPE' => 'File',
    'LOG_LEVEL' => 'EMERG,ALERT,CRIT,ERR',
    'LOG_EXCEPTION_RECORD' => false,
    LOAD_EXT_CONFIG => "functions",

    'TMPL_PARSE_STRING' => array(
        '__DATA__' => __ROOT__ . '/Data'
    ),
    'TMPL_ACTION_ERROR' => 'Public/error',
    'TMPL_ACTION_SUCCESS' => 'Public/success',

    'weixin' => array(
        'appid' => 'wxb4d05a86fce327fd',//微信小程序appid
        'secret' => 'a0006a4fc8f30e158baf5612e67800de', //微信小程序secret
        'mchid' => '',//小程序支付商户号
        'key' => '',//小程序支付KEY
        'notify_url' => 'https://igyyevap.qcloud.la/index.php?s=/Api/Wxpay/notify',
    ),
);
?>