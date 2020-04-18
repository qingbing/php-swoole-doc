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
    // todo property
    public $connections = '???';
    /**
     * 监听主机
     *
     * @var string
     */
    public $host = '???';
    /**
     * 端口号
     *
     * @var int
     */
    public $port = 44573;
    // todo property
    public $type = '???';
    // todo property
    /**
     * describe
     *
     * @var string
     */
    public $mode = '???';
    // todo property
    public $ports = '???';
    // todo property
    public $master_pid = '???';
    // todo property
    public $manager_pid = '???';
    // todo property
    public $worker_id = '???';
    // todo property
    public $taskworker = '???';
    // todo property
    public $worker_pid = '???';

    /**
     * 创建一个异步Server对象,监听端口失败会抛出异常，可以使用try/catch捕获异常
     *     底层有保护机制，一个PHP程序内只能创建启动一个Server实例
     *     如果要实现多个Server实例的管理，父进程必须使用exec，不得使用fork
     * @param string $host ,指定监听的ip地址
     *     IPv4使用 "127.0.0.1" 表示监听本机，"0.0.0.0" 表示监听所有地址
     *     IPv6使用"::1"表示监听本机，"::" (相当于"0:0:0:0:0:0:0:0") 表示监听所有地址
     * @param int $port 默认：44573
     *     如果 $sock_type 为"UnixSocket Stream/Dgram"，此参数将被忽略
     *     监听小于1024端口需要root权限
     *     如果此端口被占用server->start时会失败
     * @param $mode
     *     SWOOLE_PROCESS : 多进程模式（默认）
     *     SWOOLE_BASE : 基本模式
     * @param int $sock_type ,指定Socket的类型，默认 SWOOLE_SOCK_TCP
     *     TCP、UDP、TCP6、UDP6、UnixSocket Stream/Dgram
     */
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

    /**
     * 定义时间处理
     *
     * @param string $event_name
     *      tcp
     *          connect     :      建立连接时触发
     *          receive     :      接受到数据时触发
     *          close       :      关闭连接时触发
     *      udp
     *          packet      : 数据接收事件
     *      http
     *          request     : 请求事件
     *      websocket
     *          open        : 连接打开事件
     *          close       : 连接关闭事件
     *          message     : 消息处理事件
     *      tcp-async
     *          connect     :      建立连接时触发
     *          close       :      关闭连接时触发
     *          receive     : 投递异步任务
     *          task        : 投递异步任务
     *          finish      : 处理异步任务
     * @param mixed $callback
     *      tcp
     *          connect     : (\Swoole\Server $serv : 服务器信息, int $fd : 客户端ID, int $from_id)
     *          receive     : (\Swoole\Server $serv : 服务器信息, int $fd : 客户端ID, int $from_id, string $data : 接收到的数据)
     *          close       : (\Swoole\Server $serv : 服务器信息, int $fd : 客户端ID, int $from_id)
     *      udp
     *          packet      : (\Swoole\Server $serv : 服务器信息, string $data : 接收到的数据, array $clientInfo : 客户端信息)
     *                          $clientInfo : server_socket(服务器socket),server_port(服务器端口), address(IP地址)， port（端口号）,
     *      http
     *          request     : (\Swoole\Http\Request $request : 请求信息, \Swoole\Http\Response $response : 返回信息)
     *      websocket
     *          open        : (Swoole\WebSocket\Server $serv : 服务器信息, Swoole\Http\Request $request : 请求)
     *          close       : (Swoole\WebSocket\Server $serv : 服务器信息, int $fd ： 客户端唯一ID)
     *          message     : (Swoole\WebSocket\Server $serv : 服务器信息, Swoole\WebSocket\Frame $frame ： 客户端信息)
     *      tcp-async
     *          connect     : 同tcp
     *          close       : 同tcp
     *          receive     : 同tcp
     *          task        : (\Swoole\Server $serv : 服务器信息, int $task_id : 任务执行的task_id, int $from_id, $data : 接收到的数据, 由task函数传递)
     *          finish      : (\Swoole\Server $serv : 服务器信息, int $task_id : 任务执行的task_id, $data : 接收到的数据, 由finish函数传递)
     *
     * @return bool 是否注册成功
     */
    public function on($event_name, $callback)
    {
        return true;
    }

    // todo
    public function getCallback($event_name)
    {
    }

    /**
     * 设置服务器选项参数
     *
     * @param array $settings
     * @return bool 是否设置成功
     */
    public function set($settings)
    {
        return true;
    }

    /**
     * 启动服务器
     */
    public function start()
    {
        return true;
    }

    /**
     * tcp 服务器发送数据给客户端
     *
     * @param int $fd
     * @param string $send_data
     * @param null $server_socket
     * @return bool 是否发送成功
     */
    public function send($fd, $send_data, $server_socket = null)
    {
        return true;
    }

    /**
     * udp 消息推送客户端
     *
     * @param string $ip IP地址
     * @param int $port 端口号
     * @param string $send_data 发送的数据
     * @param null $server_socket socket 引擎
     * @return bool 是否发送成功
     */
    public function sendto($ip, $port, $send_data, $server_socket = null)
    {
        return true;
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

    /**
     * 投递任务
     *
     * @param mixed $data 投递的数据
     * @param null | int $worker_id 投递的进程id
     * @param callback $finish_callback 处理函数
     * @return int
     */
    public function task($data, $worker_id = null, $finish_callback = null)
    {
        return 1;
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

    /**
     *
     * @param mixed $data
     * @return bool 是否处理成功
     */
    public function finish($data)
    {
        return true;
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