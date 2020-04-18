<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/*
 * 1、启动服务器： php server_async.php
 * 2、连接服务器并测试： telnet 172.16.37.128 9501
 *
 * set 函数设置服务器异步
 * task() : 任务投递函数
 * finish() : 异步完成之后，用该函数返回一些信息
 */
$host = '172/16.37.128';
$port = 9501;

/**
 * 创建服务器
 */
$serv = new \Swoole\Server($host, $port);

// 设置异步 进程数量，指定服务器异步
$status = $serv->set([
    'task_worker_num' => 4,
]);
var_dump('===== set status ======');
var_dump($status);

/*
 * 注册事件
 */
// 建立连接
$status = $serv->on('connect', function (\Swoole\Server $serv, int $fd, int $from_id) {
    var_dump('====== 建立连接 ======');
    $serv->send($fd, '连接成功');
});

// 关闭连接
$serv->on('close', function (\Swoole\Server $serv, int $fd, int $from_id) {
    var_dump('====== 关闭连接 ======');
});

// 接受数据
$serv->on('receive', function (\Swoole\Server $serv, int $fd, int $from_id, string $data) {
    var_dump('====== 接受数据 ======');
    // 回应消息
    $serv->send($fd, '你发送到的数据是：' . $data);

    // 数据处理任务投递
    $task_id = $serv->task([
        'type' => 'task',
        'data' => $data,
    ]);
    var_dump('接收的数据 : ' . $data);
    var_dump('投递 task_id : ' . $task_id);
});

// 处理异步任务
$serv->on('task', function (\Swoole\Server $serv, int $task_id, int $from_id, $data) {
    var_dump('执行 task_id : ' . $task_id);
    $status = $serv->finish([
        'type' => 'finish',
        'data' => $data,
    ]);
    var_dump('===== finish status ======');
    var_dump($status);
});

// 处理结果
$serv->on('finish', function (\Swoole\Server $serv, int $task_id, $data) {
    var_dump('结果 task_id : ' . $task_id);
    var_dump($data);
});

/**
 * 启动服务器
 */
$status = $serv->start();