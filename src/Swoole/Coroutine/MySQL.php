<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Coroutine\MySQL
 * @package      :   Swoole\Coroutine
 */

namespace Swoole\Coroutine;

class MySQL
{
    /**
     * 连接配置信息
     *
     * @var array
     */
    public $serverInfo;
    // todo property
    public $sock = '???';
    // todo property
    public $connected = '???';
    /**
     * 连接错误码
     *
     * @var int
     */
    public $connect_errno;
    /**
     * 连接错误消息
     *
     * @var string
     */
    public $connect_error;
    /**
     * 最近SQL影响的数据条数
     *
     * @var int
     */
    public $affected_rows;
    /**
     * 最新插入的自增ID
     *
     * @var int
     */
    public $insert_id;
    /**
     * SQL 执行错误消息
     *
     * @var string
     */
    public $error;
    /**
     * SQL 执行错误代码
     *
     * @var int
     */
    public $errno;

    // todo
    public function __construct()
    {
    }

    // todo
    public function __destruct()
    {
    }

    // todo
    public function getDefer()
    {
    }

    // todo
    public function setDefer($defer = null)
    {
    }

    /**
     * 连接数据库
     *
     * @param null|array $server_config 数据库连接配置
     *      $config = [
     *           'host' => '172.16.37.128',
     *           'user' => 'root',
     *           'password' => 'ww111111',
     *           'database' => 'hyperf-test',
     *           'charset' => 'utf8',
     *      ]
     *
     * @return bool
     */
    public function connect($server_config = null)
    {
        return true;
    }

    /**
     * 数据库查询
     *
     * @param string $sql
     * @param null | int $timeout
     * @return array
     */
    public function query($sql, $timeout = null)
    {
        return [];
    }

    // todo
    public function fetch()
    {
    }

    // todo
    public function fetchAll()
    {
    }

    // todo
    public function nextResult()
    {
    }

    // todo
    public function prepare($query, $timeout = null)
    {
    }

    // todo
    public function recv()
    {
    }

    // todo
    public function begin($timeout = null)
    {
    }

    // todo
    public function commit($timeout = null)
    {
    }

    // todo
    public function rollback($timeout = null)
    {
    }

    /**
     * 关闭SQL连接
     *
     * @return bool
     */
    public function close()
    {
        return true;
    }
}