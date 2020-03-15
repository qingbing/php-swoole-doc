<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Socket
 * @package      :   Swoole\Coroutine
 */
namespace Swoole\Coroutine;

class Socket
{
    // todo property
    public $fd = '???';
    // todo property
    public $errCode = '???';
    // todo property
    public $errMsg = '???';
    // todo
    public function __construct($domain,$type,$protocol = null){}
    // todo
    public function bind($address,$port = null){}
    // todo
    public function listen($backlog = null){}
    // todo
    public function accept($timeout = null){}
    // todo
    public function connect($host,$port = null,$timeout = null){}
    // todo
    public function recv($length = null,$timeout = null){}
    // todo
    public function recvPacket($timeout = null){}
    // todo
    public function send($data,$timeout = null){}
    // todo
    public function sendFile($filename,$offset = null,$length = null){}
    // todo
    public function recvAll($length = null,$timeout = null){}
    // todo
    public function sendAll($data,$timeout = null){}
    // todo
    public function recvfrom($peername,$timeout = null){}
    // todo
    public function sendto($addr,$port,$data){}
    // todo
    public function getOption($level,$opt_name){}
    // todo
    public function setProtocol($settings){}
    // todo
    public function setOption($level,$opt_name,$opt_value){}
    // todo
    public function shutdown($how = null){}
    // todo
    public function cancel($event = null){}
    // todo
    public function close(){}
    // todo
    public function getpeername(){}
    // todo
    public function getsockname(){}
}