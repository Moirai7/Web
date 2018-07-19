<?php
// +----------------------------------------------------------------------
// | TcSwitchTheme [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 Tangchao All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tangchao <79300975@qq.com>
// +----------------------------------------------------------------------
namespace plugins\tc_switch_theme;
use cmf\lib\Plugin;

class TcSwitchThemePlugin extends Plugin
{
    public $info = [
        'name'        => 'TcSwitchTheme',
        'title'       => '手机端模板控制',
        'description' => '手机端模板控制',
        'status'      => 1,
        'author'      => 'Tangchao',
        'version'     => '1.0',
        'demo_url'    => 'http://www.songzhenjiang.cn',
        'author_url'  => 'http://www.songzhenjiang.cn'
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

    public function switchTheme($param)
    {
    
    $config = $this->getConfig();
    $regex = '/android|adr|iphone|ipad|windows\sphone|kindle|gt\-p|gt\-n|rim\stablet|opera|meego/i';
    $mobile = false;
    if (GetVars('alwaystheme', 'COOKIE') == 'mobile') {
        $mobile = true;
    }
    if (preg_match($regex, GetVars('HTTP_USER_AGENT', 'SERVER'))) {
        $mobile = true;
    }
    if (GetVars('alwaystheme', 'COOKIE') == 'pc') {
        $mobile = false;
    }


    
    if ($mobile) {
        $cmfDefaultTheme = $config['wapthems'];
    }else{
        $cmfDefaultTheme = config('cmf_default_theme');
    }
        return $cmfDefaultTheme;
    }
}

function GetVars($name, $type = 'REQUEST') {
    $array = &$GLOBALS[strtoupper("_$type")];
    if (isset($array[$name])) {
        return $array[$name];
    } else {
        return null;
    }}