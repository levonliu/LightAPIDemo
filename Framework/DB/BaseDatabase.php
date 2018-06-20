<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-15
 * Time: 下午2:07
 */

namespace Framework\Db;


class BaseDatabase
{
    public $_db;

    function __construct($db_config){
        $this->_db = new PdoDB($db_config);
    }

}