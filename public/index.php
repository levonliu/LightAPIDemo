<?php
/**
 * Created by PhpStorm.
 * User: liuwen
 * Date: 18-6-15
 * Time: 下午4:32
 */


// 自动加载
spl_autoload_register(function ($class) {
    $file = realpath(__DIR__.'/../'). '/'.str_replace("\\","/", $class). '.php';
    include $file;
});


$app = new \Framework\Application();

$apiGroup = [
    'namespace'  => 'App\Http\Controllers\Api',
    'prefix'     => 'api',
];

$app->router->group($apiGroup, function ($router) {
    require __DIR__.'/../routes/api.php';
});

$app->run();

