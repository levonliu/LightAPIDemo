<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-20
 * Time: 下午4:04
 */

namespace Framework;

class Application
{
    private $app;

    public $router;

    public function __construct()
    {
        $this->app    = new Container();
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->addRoute();
    }

}