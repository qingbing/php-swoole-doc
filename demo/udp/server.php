<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */
/*
 * 关键点在 Server 的 sock_type 上 SWOOLE_SOCK_UDP
 * UDP 支持 packet 事件，数据接收到触发
 *
 * 测试命令： echo "hello" |  nc -4u 172.16.37.128 9501
 */

$host = '172/16.37.128';
$port = 9501;
$mode = SWOOLE_PROCESS;
$sock_type = SWOOLE_SOCK_UDP;

/**
 * 创建服务器
 */
$serv = new \Swoole\Server($host, $port, $mode, $sock_type);

/*
 * 注册事件
 */
// 接收数据事件
$serv->on('packet', function (\Swoole\Server $serv, string $data, array $client) {
    $status = $serv->sendto($client['address'], $client['port'], "你发送的数据是 : {$data}");

    var_dump('====status====');
    var_dump($status);

    var_dump($client);
    var_dump($data);
});

/**
 * 启动服务器
 */
$status = $serv->start();