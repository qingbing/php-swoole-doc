<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Process
 * @package      :   Swoole
 */
namespace Swoole;

class Process
{
    // todo const
    const IPC_NOWAIT = 256;
    // todo const
    const PIPE_MASTER = 1;
    // todo const
    const PIPE_WORKER = 2;
    // todo const
    const PIPE_READ = 3;
    // todo const
    const PIPE_WRITE = 4;
    // todo property
    public $pipe = '???';
    // todo property
    public $msgQueueId = '???';
    // todo property
    public $msgQueueKey = '???';
    // todo property
    public $pid = '???';
    // todo property
    public $id = '???';
    // todo
    static public function wait($blocking = null){}
    // todo
    static public function signal($signal_no,$callback){}
    // todo
    static public function alarm($usec,$type = null){}
    // todo
    static public function kill($pid,$signal_no = null){}
    // todo
    static public function daemon($nochdir = null,$noclose = null,$pipes = null){}
    // todo
    static public function setaffinity($cpu_settings){}
    // todo
    public function __construct($callback,$redirect_stdin_and_stdout = null,$pipe_type = null,$enable_coroutine = null){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function setTimeout($seconds){}
    // todo
    public function setBlocking($blocking){}
    // todo
    public function useQueue($key = null,$mode = null,$capacity = null){}
    // todo
    public function statQueue(){}
    // todo
    public function freeQueue(){}
    // todo
    public function start(){}
    // todo
    public function write($data){}
    // todo
    public function close(){}
    // todo
    public function read($size = null){}
    // todo
    public function push($data){}
    // todo
    public function pop($size = null){}
    // todo
    public function exit($exit_code = null){}
    // todo
    public function exec($exec_file,$args){}
    // todo
    public function exportSocket(){}
    // todo
    public function name($process_name){}
}