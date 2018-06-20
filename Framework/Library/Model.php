<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-15
 * Time: 下午3:14
 */
namespace Framework\Library;

class Model
{
    protected $table;

    public function getTableName()
    {
        if (! isset($this->table)) {
            $this->table = strtolower(trim(strrchr(str_replace("\\","/", get_called_class()), '/'),'/'));
        }
        return $this->table;
    }
}