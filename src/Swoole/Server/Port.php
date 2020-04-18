<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Server\Port
 * @package      :   Swoole\Server
 */

namespace Swoole\Server;

class Port
{
    /* @var string 服务器主机 */
    public $host = '0.0.0.0';
    /* @var int 端口号 */
    public $port = 9502;
    // todo property
    public $type = 1;
    // todo property
    public $sock = 3;
    // todo property
    public $setting = '???';
    /**
     * @var \Swoole\Connection\Iterator[]
     */
    public $connections = [];

    // todo
    public function __destruct()
    {
    }

    // todo
    public function set($settings)
    {
    }

    // todo
    public function on($event_name, $callback)
    {
    }

    // todo
    public function getCallback($event_name)
    {
    }
}