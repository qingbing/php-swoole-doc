<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */


$workers = [];
$worker_num = 3;

for ($i = 0; $i < $worker_num; $i++) {
    // 创建单进程
    $process = new \Swoole\Process('doProgress');
    // 启动进程并获取进程ID
    $pid = $process->start();
    // 存入进程数组
    $workers[$pid] = $process;
}

// 进程执行函数
function doProgress(\Swoole\Process $process)
{
    var_dump("写入信息 ： {$process->pid}");
    // 子进程写入信息到 pipe
    $status = $process->write("PID : {$process->pid}");
//    var_dump('=====  write back =====');
//    var_dump($status);
}

// 添加进程事件，向每一个子进程添加需要执行的动作
foreach ($workers as $process) {
    // 添加事件
    $status = \Swoole\Event::add($process->pipe, function ($pipe) use ($process) {
        // 读取 pipe 数据
        var_dump("接收到数据 ： {$process->read()}； PID : {$process->pid}");
    });
    var_dump('=====  add back =====');
    var_dump($status);
}

