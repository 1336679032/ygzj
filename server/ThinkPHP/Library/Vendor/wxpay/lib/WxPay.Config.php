<?php

class WxPayConfig
{
    const APPID = 'wxb4d05a86fce327fd';//微信小程序ID
    const MCHID = 'a0006a4fc8f30e158baf5612e67800de';//微信小程序支付商户号
    const KEY = '';//微信小程序支付密码
    const APPSECRET = '';//微信小程序秘钥
	const SSLCERT_PATH = '../cert/apiclient_cert.pem';
	const SSLKEY_PATH = '../cert/apiclient_key.pem';
	const CURL_PROXY_HOST = "0.0.0.0";
	const CURL_PROXY_PORT = 0;
	const REPORT_LEVENL = 1;
}
