<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/**
 * 该页面在 swoole 4.4.14上测试没效果
 */
// 触发函数
$status = \Swoole\Process::signal(SIGALRM, function () {
    var_dump("==== 1 ====");
});
var_dump("==== signal back ====");
var_dump($status);


// 定时信号
$status = \Swoole\Process::alarm(1000);

var_dump("==== alarm back ====");
var_dump($status);

