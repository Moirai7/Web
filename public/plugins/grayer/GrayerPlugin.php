<?php
// +----------------------------------------------------------------------
// | Grayer [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\grayer;
use cmf\lib\Plugin;

class GrayerPlugin extends Plugin
{

    public $info = [
        'name'        => 'Grayer',//Demo插件英文名，改成你的插件英文就行了
        'title'       => '整站变灰',
        'description' => '整站变灰',
        'status'      => 1,
        'author'      => 'Tangchao',
        'version'     => '1.0',
        'demo_url'    => 'http://www.songzhenjiang.cn',
        'author_url'  => 'http://www.songzhenjiang.cn',
    ];

    public $hasAdmin = 0;

    public function install()
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    public function footerStart($param)
    {
        echo $this->fetch('widget');
    }

}