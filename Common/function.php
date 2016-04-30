<?php
/**
 * 公共方法库
 */

/**
 * 创建文件夹
 * @param  string $dir   路径
 * @param  int $chmod 权限
 * @return bool
 */
function createDir($dir, $chmod = 0766)
{
    if (is_dir($dir)) {
        mkdir($dir, $chmod, true);
        return true;
    } else {
        return false;
    }
}

/**
 * 常用返回XML结构体
 * @param  string $msgType 消息类型
 * @return string         xml结构体
 */
function returnWxXml($msgType)
{
    switch ($msgType) {
        case 'text':
            $textTpl = "<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%d</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        <FuncFlag>0</FuncFlag>
                        </xml>";
            return $textTpl;
            break;
        default:
            # code...
            break;
    }
}
