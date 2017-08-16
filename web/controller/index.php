<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/15
 * Time: 下午10:05
 */
namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;
use Workerman\MySQL\Connection;

class Index{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show(){
        return $this->view->make('index')->with('hi','朋友');
    }

    public function login(){
        return $this->view->make('login');
    }

    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['PHRASE'] = $builder->getPhrase();
        $builder->output();
    }

    public function mysql(){
        $db = new Connection('127.0.0.1', '3306', 'root', '123', 'blog');
        $result = $db->query("SELECT * FROM `pages`");
        var_dump($result);
    }
}