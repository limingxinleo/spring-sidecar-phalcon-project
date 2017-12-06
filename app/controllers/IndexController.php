<?php
// +----------------------------------------------------------------------
// | 默认控制器 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
namespace App\Controllers;

use App\Core\System;

class IndexController extends Controller
{
    /**
     * @desc
     * @author limx
     * @return bool|\Phalcon\Mvc\View
     * @Middleware('auth')
     */
    public function indexAction()
    {
        $version = System::getInstance()->version();
        return static::success([
            'version' => $version,
            'message' => 'You\'re now flying with Phalcon. Great things are about to happen!'
        ]);
    }

    /**
     * @desc   返回健康状态
     * @author limx
     */
    public function healthAction()
    {
        return $this->response->setJsonContent([
            'status' => 'UP'
        ]);
    }
}