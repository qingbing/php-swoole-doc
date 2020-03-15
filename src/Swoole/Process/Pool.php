<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Process\Pool
 * @package      :   Swoole\Process
 */
namespace Swoole\Process;

class Pool
{
    // todo property
    public $master_pid = '???';
    // todo property
    public $workers = '???';
    // todo
    public function __construct($worker_num,$ipc_type = null,$msgqueue_key = null,$enable_coroutine = null){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function on($event_name,$callback){}
    // todo
    public function getProcess($worker_id = null){}
    // todo
    public function listen($host,$port = null,$backlog = null){}
    // todo
    public function write($data){}
    // todo
    public function start(){}
    // todo
    public function shutdown(){}
}