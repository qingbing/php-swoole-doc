<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */
\Swoole\Coroutine::create(function () {
    $content = \Swoole\Coroutine::readFile(__FILE__);
    $length = \Swoole\Coroutine::writeFile(__DIR__ . '/tt.txt', $content);
    var_dump($length);
});