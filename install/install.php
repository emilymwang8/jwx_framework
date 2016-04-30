<?php
/**
 * 初始化安装
 */

include '/Common/function.php';

// Library/smarty/templates 是否具有可写权限
if (chmod('/Library/smarty/templates', 0777)) {
    echo "templates无写入权限";
}

//


