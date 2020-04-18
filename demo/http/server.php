<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/*
 * 测试：浏览器直接访问 172/16.37.128:9501
 */
$host = '172/16.37.128';
$port = 9501;

/**
 * 创建服务器
 */
$serv = new \Swoole\Http\Server($host, $port);

/*
 * 注册事件
 */
//
$serv->on('request', function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
    /*
     * $request : 请求信息， get post等
     * $response ： 返回信息
     */
    // 设置返回header信息
    $status = $response->header("Content-Type", 'text/html; charset=utf-8');
    var_dump('======= header back =====');
    var_dump($status);
    // 发送信息
    $status = $response->end("hello world" . rand(0, 1000));
    var_dump('======= send back =====');
    var_dump($status);
});

/**
 * 启动服务器
 */
$status = $serv->start();
