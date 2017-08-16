<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/15
 * Time: 下午10:18
 */
namespace core;
class Bootstrap{
    public static function run(){
        session_start();
        self::parseUrl();
    }

    public static function parseUrl(){
        if (isset($_GET['s'])){
            $info = explode('/',$_GET['s']);
            $class = '\web\controller\\'.ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = "\web\controller\Index";
            $action = "show";
        }

        echo (new $class)->$action();
    }
}
