<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/*
 * 1、启动服务器： php server.php
 * 2、连接服务器并测试： telnet 172.16.37.128 9501
 */
$host = '172/16.37.128';
$port = 9501;

/**
 * 创建服务器
 */
$serv = new \Swoole\Server($host, $port);

/*
 * 注册事件
 */
// 建立连接
$status = $serv->on('connect', function (\Swoole\Server $serv, int $fd, int $from_id) {
    var_dump('====== 建立连接 ======');
    $status = $serv->send($fd, '连接成功');
//    var_dump('====status====');
//    var_dump($status);
});
//var_dump('====status====');
//var_dump($status);

// 接受数据
$serv->on('receive', function (\Swoole\Server $serv, int $fd, int $from_id, string $data) {
    var_dump('====== 接受数据 ======');
    var_dump($fd, $from_id, $data);
    // 回应消息
    $serv->send($fd, '你发送到的数据是：' . $data);
});

// 关闭连接
$serv->on('close', function (\Swoole\Server $serv, int $fd, int $from_id) {
    var_dump('====== 关闭连接 ======');
//    var_dump($fd, $from_id);
});

/**
 * 启动服务器
 */
$status = $serv->start();
var_dump('==== 以下打印不了 ====');
var_dump($status);

