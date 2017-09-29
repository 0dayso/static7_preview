<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
    'install'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'data', 'view'],
        'controller' => ['Index', 'Install'],
        'view'       => ['base/base','index/index','install/setp1','install/setp2','install/setp3'],
    ],
    // 其他更多的模块定义
];