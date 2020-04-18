<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/**
 * 该页面在 swoole 4.4.14上测试没效果
 */

Swoole\Process::signal(SIGALRM, function () {
    static $i = 0;
    echo "#{$i}\talarm\n";
    $i++;
    if ($i > 20) {
        Swoole\Process::alarm(-1);
    }
});

//100ms
Swoole\Process::alarm(100 * 1000);