<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-20
 * Time: 下午4:37
 */
namespace Framework;

use ArrayAccess;

class Container implements ArrayAccess
{
    private $app;

    public function offsetSet($offset, $value){
        $this->app[$offset] = $value;
    }

    public function offsetGet($offset){
        return $this->app[$offset];
    }

    public function offsetExists($offset){
        return isset($this->app[$offset]);
    }

    public function offsetUnset($offset){
        unset($this->app[$offset]);
    }

}