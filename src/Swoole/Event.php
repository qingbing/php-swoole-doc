<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Event
 * @package      :   Swoole
 */

namespace Swoole;

class Event
{
    /**
     * 将一个 socket 加入到底层的 reactor 事件监听中。此函数可以用在 Server 或 Client 模式下
     *
     * @param mixed $sock 支持以下类型
     *      文件描述符
     *      stream 资源
     *      sockets 资源 sockets 扩展中 scoket_create 创建的资源，需要在编译时加入 ./configure --enable-sockets
     *      object
     * @param callable $read_callback 可读事件回调函数
     * @param null $write_callback 为可写事件回调函数【此参数可以是字符串函数名、对象 + 方法、类静态方法或匿名函数，当此 socket 可读或者可写时回调指定的函数。】
     * @param int $flags 事件类型的掩码【可选择关闭 / 开启可读可写事件，如 SWOOLE_EVENT_READ、SWOOLE_EVENT_WRITE 或者 SWOOLE_EVENT_READ|SWOOLE_EVENT_WRITE】
     * @return int
     */
    static public function add($sock, $read_callback, $write_callback = null, $flags = null)
    {
        return 1;
    }

    /**
     * 关闭event句柄
     *
     * @param mixed $fd 需要关闭的句柄
     * @return bool
     */
    static public function del($fd)
    {
        return true;
    }

    // todo
    static public function set($fd, $read_callback = null, $write_callback = null, $events = null)
    {
    }

    // todo
    static public function isset($fd, $events = null)
    {
    }

    // todo
    static public function dispatch()
    {
    }

    // todo
    static public function defer($callback)
    {
    }

    // todo
    static public function cycle($callback, $before = null)
    {
    }

    // todo
    static public function write($fd, $data)
    {
    }

    // todo
    static public function wait()
    {
    }

    // todo
    static public function rshutdown()
    {
    }

    // todo
    static public function exit()
    {
    }
}