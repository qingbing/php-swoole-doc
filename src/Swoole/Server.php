<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Server
 * @package      :   Swoole
 */

namespace Swoole;

class Server
{
    // todo property
    public $setting = '???';
    /* @var string 服务器主机 */
    public $host = '0.0.0.0';
    /* @var int 端口号 */
    public $port = 9502;
    // todo property
    public $type = 1;
    // todo property
    public $mode = 2;
    // todo property
    public $master_pid = 0;
    // todo property
    public $manager_pid = 0;
    // todo property
    public $worker_id = -1;
    // todo property
    public $taskworker = '???';
    // todo property
    public $worker_pid = 0;
    /**
     * @var \Swoole\Connection\Iterator[]
     */
    public $connections = [];
    /**
     * @var \Swoole\Server\Port[]
     */
    public $ports = [];

    // todo
    public function __construct($host, $port = null, $mode = null, $sock_type = null)
    {
    }

    // todo
    public function __destruct()
    {
    }

    // todo
    public function listen($host, $port, $sock_type)
    {
    }

    // todo
    public function addlistener($host, $port, $sock_type)
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

    // todo
    public function set($settings)
    {
    }

    // todo
    public function start()
    {
    }

    // todo
    public function send($fd, $send_data, $server_socket = null)
    {
    }

    // todo
    public function sendto($ip, $port, $send_data, $server_socket = null)
    {
    }

    // todo
    public function sendwait($conn_fd, $send_data)
    {
    }

    // todo
    public function exists($fd)
    {
    }

    // todo
    public function exist($fd)
    {
    }

    // todo
    public function protect($fd, $is_protected = null)
    {
    }

    // todo
    public function sendfile($conn_fd, $filename, $offset = null, $length = null)
    {
    }

    // todo
    public function close($fd, $reset = null)
    {
    }

    // todo
    public function confirm($fd)
    {
    }

    // todo
    public function pause($fd)
    {
    }

    // todo
    public function resume($fd)
    {
    }

    // todo
    public function task($data, $worker_id = null, $finish_callback = null)
    {
    }

    // todo
    public function taskwait($data, $timeout = null, $worker_id = null)
    {
    }

    // todo
    public function taskWaitMulti($tasks, $timeout = null)
    {
    }

    // todo
    public function taskCo($tasks, $timeout = null)
    {
    }

    // todo
    public function finish($data)
    {
    }

    // todo
    public function reload()
    {
    }

    // todo
    public function shutdown()
    {
    }

    // todo
    public function stop($worker_id = null)
    {
    }

    // todo
    public function getLastError()
    {
    }

    // todo
    public function heartbeat($reactor_id)
    {
    }

    // todo
    public function getClientInfo($fd, $reactor_id = null)
    {
    }

    // todo
    public function getClientList($start_fd, $find_count = null)
    {
    }

    // todo
    public function connection_info($fd, $reactor_id = null)
    {
    }

    // todo
    public function connection_list($start_fd, $find_count = null)
    {
    }

    // todo
    public function sendMessage($message, $dst_worker_id)
    {
    }

    // todo
    public function addProcess($process)
    {
    }

    // todo
    public function stats()
    {
    }

    // todo
    public function bind($fd, $uid)
    {
    }

    // todo
    public function after($ms, $callback)
    {
    }

    // todo
    public function tick($ms, $callback)
    {
    }

    // todo
    public function clearTimer($timer_id)
    {
    }

    // todo
    public function defer($callback)
    {
    }
}