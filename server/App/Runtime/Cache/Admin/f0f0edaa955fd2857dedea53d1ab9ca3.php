<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>员工之家管理系统</title>
    <meta name="keywords" content="小程序管理系统"/>
    <meta name="description" content="小程序管理系统"/>
    <link rel="shortcut icon" href="/Public/admin/static/images/favicon.ico"/>
    <link href="/Public/admin/static/css/bootstrap.min.css?v=20170915" rel="stylesheet">
    <link href="/Public/admin/static/css/common.css" rel="stylesheet">
    <script type="text/javascript">
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器！');
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/js/images/denglu.css">
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/js/images/dengstyle.css">
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/js/images/easyui.css">
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/js/images/icon.css">
    <script type="text/javascript" src="/Public/admin/static/js/images/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/admin/static/js/images/jquery.easyui.min.js"></script>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value=""/>
<div class="loader" style="display:none">
    <div class="la-ball-clip-rotate">
        <div></div>
    </div>
</div>
<div class="bg"></div>
<div id="login_box">
    <div class="limg">
        <div class="pic_box"><img src="/Public/admin/static/images/yali-logo.png" width="209" height="64"></div>
    </div>
    <form name="Form1" action="<?php echo $key;?>" method="post" id="Form1" onSubmit="return chk_form()">
        <h2>欢迎进入员工之家管理系统！</h2>
        <div class="f">
            <input placeholder="输入管理账号" id="username" name="username" type="text" maxlength="50" autocomplete="off"
                   class="easyui-validatebox validatebox-text validatebox-invalid">
            <input placeholder="输入管理密码" type="password" id="pwd" name="pwd"
                   class="easyui-validatebox validatebox-text validatebox-invalid">
            <input type="submit" id="submit" name="submit" class="submit" value="登 录">
            <h2 style="
    text-indent: 23px;
    height: 46px;
    line-height: 0px;
">ZC</h2>
        </div>
    </form>
</div>
<script>
    var username = document.getElementById("username");
    var pwd = document.getElementById("pwd");

    function chk_form() {
        if (username.value == '') {
            alert('用户名不能为空！');
            username.focus();
            return false;
        }
        if (pwd.value == '') {
            alert('密码不能为空！');
            pwd.focus();
            return false;
        }
    }
</script>
</body>
</html>