<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */


$domain = 'www.baidu.com';
$res = \Swoole\Coroutine::create(function ($domain) {
    $ip = \Swoole\Coroutine\System::dnsLookup($domain, 5);
    var_dump($ip);
    $ip = \Swoole\Coroutine::dnsLookup($domain, 5);
    var_dump($ip);
    $ip = \Swoole\Coroutine::gethostbyname($domain);
    var_dump($ip);
}, $domain);
var_dump('=== create back ===');
var_dump($res);