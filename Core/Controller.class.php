<?php
/**
 * 核心控制器
 */
class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
        // 设置模板目录
        $this->view->setTemplateDir(VIEW_DIR . '/');
    }

    // 成功跳转方法ssuccess
    public function success($url, $msg, $time = 1)
    {
        include_once VIEW_DIR . '/redirect.html';
        exit;
    }
    // 失败跳转方法
    public function error($url, $msg, $time = 3)
    {
        include_once VIEW_DIR . '/redirect.html';
        exit;
    }
}
