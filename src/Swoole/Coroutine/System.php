<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Coroutine\System
 * @package      :   Swoole\Coroutine
 */

namespace Swoole\Coroutine;

class System
{
    /**
     * 将域名解析为IP，基于同步的线程池模拟实现。底层自动进行协程调度
     *
     * @param string $domain_name
     * @param null | int $family 默认为 AF_INET 表示返回IPv4地址，使用 AF_INET6 时返回IPv6地址
     * @param null | int $timeout
     * @return string
     */
    static public function gethostbyname($domain_name, $family = null, $timeout = null)
    {
        return '';
    }

    /**
     * 返回解析的域名IP地址
     *
     * @param string $domain_name
     * @param null | int $timeout
     * @return string
     */
    static public function dnsLookup($domain_name, $timeout = null)
    {
        return '';
    }

    // todo
    static public function exec($command, $get_error_stream = null)
    {
    }

    // todo
    static public function sleep($seconds)
    {
    }

    // todo
    static public function fread($handle, $length = null)
    {
    }

    // todo
    static public function fwrite($handle, $string, $length = null)
    {
    }

    // todo
    static public function fgets($handle)
    {
    }

    // todo
    static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null)
    {
    }

    // todo
    static public function readFile($filename)
    {
    }

    // todo
    static public function writeFile($filename, $data, $flags = null)
    {
    }

    // todo
    static public function statvfs($path)
    {
    }
}