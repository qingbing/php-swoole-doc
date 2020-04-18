<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

$fd = stream_socket_client('tcp://www.phpcorner.net:80', $errno, $errstr, 30);
fwrite($fd, 'GET / HTTP/1.0\r\nHost: www.phpcorner.net\r\n\r\n');
\Swoole\Event::add($fd, function ($fd) {
    $response = fread($fd, 8192);
    var_dump($response);
    $status = \Swoole\Event::del($fd);
    var_dump('=== del back ===');
    var_dump($status);
    fclose($fd);
});
var_dump('=== first exec ===');