<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

function doProgress(\Swoole\Process $process)
{
    var_dump("PID : " . $process->pid);
    sleep(5);
}

/**
 * 创建进程
 */
$process = new \Swoole\Process('doProgress');

$pid = $process->start();
var_dump("===== 1 =====");
var_dump($pid);

$process = new \Swoole\Process('doProgress');
$pid = $process->start();
var_dump("===== 1 =====");
var_dump($pid);


// 等待结束，可以不等待，但建议等待
$status = \Swoole\Process::wait();
var_dump('===== wait back =====');
var_export($status);
