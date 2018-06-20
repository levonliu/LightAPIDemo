<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-15
 * Time: 上午10:53
 */
namespace Framework\Contracts;

interface Databases
{
    function connect();

    function close();
}