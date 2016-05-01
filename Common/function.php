<?php
/**
 * 公共方法库
 */

/**
 * 验证及过滤表单数据
 * @param  array  $Data 用户提交的数据
 * @param  stiring  $Type 数据过滤模式
 * @return array
 */
function is_from($Data, $Type = 'SQL')
{
    if (empty($Data)) {
        return false;
    }

    $tempArray = [];

    switch ($Type) {
        case 'XSS': // 过滤xss
            $HTMLPurifier = new HTMLPurifier;

            foreach ($Data as $k => $v) {
                $tempArray[$k] = $HTMLPurifier->purify($v);
            }
            return $tempArray;
            break;
        case 'SQL':
            foreach ($Data as $k => $v) {
                $tempArray[$k] = htmlspecialchars($v, ENT_QUOTES);
            }
            return $tempArray;
            break;
        default:
            exit('数据过滤类型错误！');
            break;
    }
}

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
