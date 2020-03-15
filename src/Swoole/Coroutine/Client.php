<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Client
 * @package      :   Swoole\Coroutine
 */
namespace Swoole\Coroutine;

class Client
{
    // todo const
    const MSG_OOB = 1;
    // todo const
    const MSG_PEEK = 2;
    // todo const
    const MSG_DONTWAIT = 64;
    // todo const
    const MSG_WAITALL = 256;
    // todo property
    public $errCode = '???';
    // todo property
    public $errMsg = '???';
    // todo property
    public $fd = '???';
    // todo property
    public $type = '???';
    // todo property
    public $setting = '???';
    // todo property
    public $connected = '???';
    // todo
    public function __construct($type){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function connect($host,$port = null,$timeout = null,$sock_flag = null){}
    // todo
    public function recv($timeout = null){}
    // todo
    public function peek($length = null){}
    // todo
    public function send($data){}
    // todo
    public function sendfile($filename,$offset = null,$length = null){}
    // todo
    public function sendto($address,$port,$data){}
    // todo
    public function recvfrom($length,$address,$port = null){}
    // todo
    public function isConnected(){}
    // todo
    public function getsockname(){}
    // todo
    public function getpeername(){}
    // todo
    public function close(){}
    // todo
    public function exportSocket(){}
}