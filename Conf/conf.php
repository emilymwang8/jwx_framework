<?php
/**
 * 基础设置文件
 */

$Conf = array(
    'mysql' => array(
    // 数据库地址
    'host'   => '127.0.0.1',
    // 数据库名称
    'db'     => 'jwx',
    // 数据库用户名
    'user' => 'root',
    // 数据库密码
    'paw' => 'root',
    ),

    // 微信的明文TOKEN
    'WX_TOKEN' => 'weixin',

    // 使用的文件编辑器默认使用百度富文本
    'EDITOR'       => 'ueditor',
    // XSS过滤库
    'XSS_PURIFIER' => 'htmlpurifier',
    // 模板引擎
    'TPL_DIR'      => 'smarty',
    // 模板文件后缀名
    'VIEW_EXTENSION'     => '.tpl',
);
