<?php
/**
 * Created by PhpStorm.
 * User: scapital-0508
 * Date: 17/8/15
 * Time: 下午10:33
 */

namespace core;


class View
{

    protected $file;

    protected $vars = [];

    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }

    public function with($name,$value){
        $this->vars[$name]=$value;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;

        return '';
    }
}