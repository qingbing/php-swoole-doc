<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Coroutine
 * @package      :   Swoole
 */

namespace Swoole;

use Swoole\Coroutine\Context;

class Coroutine
{
    /**
     * 创建一个新的协程，并立即执行
     *
     * @param callable $func 必须为callable，系统能创建的协程总数量受限于server->max_coroutine设置
     *      callable($params) 由 create 第二个参数传入
     * @param mixed $params 用户自定义参数
     *
     * @return int|false 创建失败返回false, 创建成功返回协程的ID
     */
    static public function create($func, $params = null)
    {
        return 1;
    }

    // todo
    static public function defer($callback)
    {
    }

    // todo
    static public function set($options)
    {
    }

    /**
     * 判断指定协程是否存在
     *
     * @param int $cid
     *
     * @return bool
     * @since v4.3.0+
     */
    static public function exists($cid)
    {
        return true;
    }

    // todo
    static public function yield()
    {
    }

    // todo
    static public function suspend()
    {
    }

    // todo
    static public function resume($cid)
    {
    }

    // todo
    static public function stats()
    {
    }

    /**
     * getuid() 的别名
     *
     * @return int
     */
    static public function getCid()
    {
        return 1;
    }

    /**
     * 获取当前协程的唯一 ID
     *
     * @return int
     */
    static public function getuid()
    {
        return 1;
    }

    /**
     * 获取协程的父协程ID
     *      0作为未来保留的主协程id, 目前不会作为返回值
     *      非嵌套协程调用getPcid将返回-1 (从非协程空间创建的)
     *      在非协程内调用getPcid将返回-1 (非协程没有父协程, 指向自己)
     *
     * @param int|null $cid
     *
     * @return int
     * @since v4.3.0+
     */
    static public function getPcid($cid = null)
    {
        return 1;
    }

    /**
     * 获取协程上下文
     *
     * @param null|int $cid
     *
     * @return \Swoole\Coroutine\Context
     */
    static public function getContext($cid = null)
    {
        return new Context();
    }

    // todo
    static public function getBackTrace($cid = null, $options = null, $limit = null)
    {
    }

    // todo
    static public function list()
    {
    }

    // todo
    static public function listCoroutines()
    {
    }

    // todo
    static public function enableScheduler()
    {
    }

    // todo
    static public function disableScheduler()
    {
    }

    /**
     * 将域名解析为IP
     *
     * @param string $domain_name
     * @param null | int $family 默认为 AF_INET 表示返回IPv4地址，使用 AF_INET6 时返回IPv6地址
     * @param null | int $timeout
     * @return string
     */
    static public function gethostbyname($domain_name, $family = AF_INET, $timeout = null)
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
    static public function fgets($handle)
    {
    }

    // todo
    static public function fwrite($handle, $string, $length = null)
    {
    }

    /**
     * 协程中读取文件
     *
     * @param string $filename
     * @return string
     */
    static public function readFile($filename)
    {
        return '';
    }

    /**
     * 协程中写入文件
     *
     * @param string $filename
     * @param string $data
     * @param null | int $flags $flags为写入的选项，默认会清空当前文件内容，可以使用FILE_APPEND表示追加到文件末尾
     * @return int
     */
    static public function writeFile($filename, $data, $flags = null)
    {
        return 1;
    }

    // todo
    static public function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null)
    {
    }

    // todo
    static public function statvfs($path)
    {
    }
}