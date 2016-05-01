<?php
/* Smarty version 3.1.30-dev/64, created on 2016-05-02 01:04:07
  from "/home/xjiek/www/jwx/View/Login/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/64',
  'unifunc' => 'content_57263707c61424_68942616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83df4dd440166af60461c9e62205526dd623c428' => 
    array (
      0 => '/home/xjiek/www/jwx/View/Login/index.tpl',
      1 => 1462116919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57263707c61424_68942616 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8"/>
        <title>
            JWX个人微信号框架登陆系统 ---- By:0x584A
        </title>
    <link rel="stylesheet" type="text/css" href="/Public/Css/login.css">
    </head>
    <body>
        <div class="login">
            <h1>
                JWX个人微信公众号系统 V1.0版本
            </h1>
            <form action="/index.php?c=Public&a=loginis" method="post">
                <input name="Username" type="text" placeholder="用户名" required="required" />
                <input name="Password" type="password" placeholder="密码" required="required" />
                <!-- TODO:待加验证码功能 -->
                <button type="submit" class="btn btn-primary btn-block btn-large">
                    登录
                </button>
            </form>
        </div>
        <div style="text-align:center;">
        </div>
    </body>
</html>
<?php }
}
