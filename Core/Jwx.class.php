<?php
if (!defined('TOKEN')) {
    exit;
}

/**
* 核心类文件
*/
class Jwx
{
    /**
     * 项目初始化
     */
    public static function run()
    {
        // TODO
    }

    /**
     * 定义编码格式
     */
    private static function setHeader(){
        header('Content-type:text/html;charset=utf-8');
    }

    /**
     * 定义常量目录
     */
    private static function setConst(){
        // 设置路径常量
        define('ROOT_DIR', str_repeat('\\', '/',realpath(dirname(__FILE__).'/../')));
        // 定义核心目录
        define('CONFIG_DIR', ROOT_DIR,'/Config');
        define('COMMON_DIR', ROOT_DIR,'/Common');
        define('MODEL_DIR', ROOT_DIR,'/Model');
        define('CONTROLLER_DIR', ROOT_DIR,'/Controller');
        define('VIEW_DIR', ROOT_DIR,'/View');
        define('LIBRARY_DIR',ROOT_DIR,'/Library');
        define('LOG_DIR',ROOT_DIR,'/Log');
        define('PUBLIC_DIR', '/Public');
    }

    /**
     * 设置错误信息
     */
    private static function setError(){
        if (DEBUG) {
            // 开发模式
            ini_set('display_errors','On');
            error_reporting(E_ALL);
        }else{
            // 生成模式
            ini_set('display_errors', 'Off');
            error_reporting(0);
        }
    }

    /**
     * 设置session信息
     */
    private static function setSession(){
        session_start();
    }

    /**
     * 配置文件信息
     */
    private static function setConfig(){
        $GLOBALS['config'] = include CONFIG_DIR.'/config.php';
    }

    private static function LoadCore($class){
        if (is_ifle(CONFIG_DIR)) {
            # code...
        }
    }

}