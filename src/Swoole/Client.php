<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Client
 * @package      :   Swoole
 */

namespace Swoole;

class Client
{
    /**
     * 读取带外数据
     */
    const MSG_OOB = 1;
    /**
     * 读取数据不会修改指针，因此下一次调用仍然会从上一次的位置起返回数据
     */
    const MSG_PEEK = 2;
    /**
     * 非阻塞接收数据，无论是否有数据都会立即返回
     */
    const MSG_DONTWAIT = 64;
    /**
     * 阻塞等待直到收到指定长度的数据后返回
     */
    const MSG_WAITALL = 256;
    // todo const
    const SHUT_RDWR = 2;
    // todo const
    const SHUT_RD = 0;
    // todo const
    const SHUT_WR = 1;
    // todo property
    /**
     * 错误代码
     *
     * @var int
     */
    public $errCode;
    // todo property
    public $sock = '???';
    // todo property
    public $reuse = '???';
    // todo property
    public $reuseCount = '???';
    // todo property
    public $type = '???';
    // todo property
    public $id = '???';
    /**
     * 客户端配置
     *
     * @var array
     */
    public $setting;

    /**
     * 魔术方法：构造函数，创建客户端
     *
     * @param int $type
     * @param int | null $async
     * @param int | null $id
     */
    public function __construct($type, $async = null, $id = null)
    {
    }

    /**
     * 魔术方法：析构函数
     */
    public function __destruct()
    {
    }

    // todo
    public function set($settings)
    {
    }

    /**
     * 连接服务器
     *
     * @param string $host
     * @param int | null $port
     * @param int | null $timeout
     * @param int | null $sock_flag
     * @return bool 是否连接成功
     */
    public function connect($host, $port = null, $timeout = null, $sock_flag = null)
    {
        return true;
    }

    /**
     * 接收 tcp 客户端发送的消息
     *
     * @param int | null $size
     * @param int | null $flag
     * @return string
     */
    public function recv($size = null, $flag = null)
    {
        return '';
    }

    /**
     * 向服务器发送数据
     *
     * @param string $data
     * @param int | null $flag
     * @return int 发送数据的长度
     */
    public function send($data, $flag = null)
    {
        return 1;
    }

    // todo
    public function sendfile($filename, $offset = null, $length = null)
    {
    }

    // todo
    public function sendto($ip, $port, $data)
    {
    }

    // todo
    public function shutdown($how)
    {
    }

    // todo
    public function isConnected()
    {
    }

    // todo
    public function getsockname()
    {
    }

    // todo
    public function getpeername()
    {
    }

    /**
     * 关闭客户端连接
     *
     * @param null | bool $force
     * @return bool
     */
    public function close($force = null)
    {
        return true;
    }
}