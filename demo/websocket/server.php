<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */
/*
 * 测试：访问msg.html页面
 */

$host = '172/16.37.128';
$port = 9501;

/**
 * 创建服务器
 */
$serv = new \Swoole\WebSocket\Server($host, $port);


/*
 * 注册事件
 */
// 建立连接
$serv->on('open', function (Swoole\WebSocket\Server $serv, Swoole\Http\Request $request) {
    var_dump("Welcome connect");

    $status = $serv->push($request->fd, "Welcome connect");
    var_dump('===== push back =====');
    var_dump($status);
});

// 连接关闭
$serv->on('close', function (Swoole\WebSocket\Server $serv, int $fd) {
    echo "\n\n";
    $serv->push($fd, "Welcome back");
});

// 接收消息
$serv->on('message', function (Swoole\WebSocket\Server $serv, Swoole\WebSocket\Frame $frame) {
    echo "\n\n";
    $serv->push($frame->fd, "send : " . $frame->data);
});


/**
 * 启动服务器
 */
$status = $serv->start();
