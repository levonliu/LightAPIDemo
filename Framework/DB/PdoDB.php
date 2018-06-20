<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-15
 * Time: 上午10:56
 */

namespace Framework\Db;
use Framework\Contracts\Databases;

class PdoDB extends \PDO implements Databases
{
    protected $db_config;

    function __construct($db_config)
    {
        $this->db_config = $db_config;
        $this->connect();
    }

    /**
     *数据库连接
     */
    function connect(){
//        $db_config = [
//            'db_type'     => 'mysql',
//            'db_host'     => '127.0.0.1',
//            'db_schema'   => 'test',
//            'db_user'     => 'root',
//            'db_password' => 'root',
//            'db_encoding' => 'utf8',
//        ];
        $db_config = &$this->db_config;
        $dsn = $db_config['db_type'] . ":host=" . $db_config['db_host'] . ";dbname=" . $db_config['db_schema']."charset=".$db_config['db_encoding'];

        /**
         * PDO持久化连接 ATTR_PERSISTENT=>true
         */
        if (!empty($db_config['db_persistent']))
        {
            parent::__construct($dsn, $db_config['db_user'], $db_config['db_password'], array(\PDO::ATTR_PERSISTENT => true));
        }
        else
        {
            parent::__construct($dsn, $db_config['db_user'], $db_config['db_password']);
        }

        $this->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    /**
     * 关闭连接
     */
    function close(){
        return;
    }



}