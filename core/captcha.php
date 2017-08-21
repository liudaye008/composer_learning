<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/10
 * Time: 下午3:59
 */

namespace core;
use Gregwar\Captcha\CaptchaBuilder;

class captcha
{
    /**
     * @var dbcon
     */
    private static $instance;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            header('Content-type: image/jpeg');
            $builder = new CaptchaBuilder;
            $builder->build();
            $_SESSION['PHRASE'] = $builder->getPhrase();
            $builder->output();
            return $builder;
        }else{
            return 'error';
        }
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }
}