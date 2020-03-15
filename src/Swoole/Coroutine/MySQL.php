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
    // todo property
    public $serverInfo = '???';
    // todo property
    public $sock = '???';
    // todo property
    public $connected = '???';
    // todo property
    public $connect_errno = '???';
    // todo property
    public $connect_error = '???';
    // todo property
    public $affected_rows = '???';
    // todo property
    public $insert_id = '???';
    // todo property
    public $error = '???';
    // todo property
    public $errno = '???';
    // todo
    public function __construct(){}
    // todo
    public function __destruct(){}
    // todo
    public function getDefer(){}
    // todo
    public function setDefer($defer = null){}
    // todo
    public function connect($server_config = null){}
    // todo
    public function query($sql,$timeout = null){}
    // todo
    public function fetch(){}
    // todo
    public function fetchAll(){}
    // todo
    public function nextResult(){}
    // todo
    public function prepare($query,$timeout = null){}
    // todo
    public function recv(){}
    // todo
    public function begin($timeout = null){}
    // todo
    public function commit($timeout = null){}
    // todo
    public function rollback($timeout = null){}
    // todo
    public function close(){}
}