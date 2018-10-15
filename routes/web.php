<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    date_default_timezone_set("Asia/Shanghai");
    return '北京时间： ' . date("Y-m-d h:i:sa");
});

$router->get('/utc', function () use ($router) {
    return 'UTC: ' . date("Y-m-d h:i:sa");
});

$router->get('/24', function () use ($router) {
    date_default_timezone_set("Asia/Shanghai");
    return '北京时间(24H)： ' . date("Y-m-d H:i:s");
});
