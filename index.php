<?php
/**
 * 基于MVC开发的单文件入口
 */



define('version', '1.0');

// 判断安装文件是否存在
if (is_file('./install/install.php')) {
    header('Location:/install/install.php');
}




