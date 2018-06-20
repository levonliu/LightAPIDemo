<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-20
 * Time: 下午4:56
 */

namespace Framework;
use Closure;

class Router
{
    private $prefix;
    private $namespace;

    public function get($uri, $action)
    {
        $this->addRoute('GET', $uri, $action);

        return $this;
    }

    public function post($uri, $action)
    {
        $this->addRoute('POST', $uri, $action);

        return $this;
    }

    public function group($rules,Closure $callback)
    {
        if (isset($rules['prefix']) && is_string($rules['prefix'])) {
            $this->prefix = $rules['prefix'];
        }

        if (isset($rules['namespace']) && is_string($rules['namespace'])) {
            $this->namespace = $rules['namespace'];
        }

        call_user_func($callback, $this);
    }
    
    public function addRoute($method, $uri, $action)
    {
        if(!is_null($this->namespace)){
            $uri = trim($this->namespace, '/').'/'.trim($uri, '/');
        }
        if(!is_null($this->prefix)){
            $uri = trim($this->prefix, '/').'/'.trim($uri, '/');
        }
    }
}