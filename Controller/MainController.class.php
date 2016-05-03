<?php
/**
* JWX后台管理控制器
*/
class MainController extends Controller
{
    // 加载显示首页模板
    public function index()
    {
        // 显示模板页面
        $this->view->display('Main/index.tpl');
    }

    // 显示模板头
    // 显示模板尾
}