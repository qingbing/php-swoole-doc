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
    // todo const
    const MSG_OOB = 1;
    // todo const
    const MSG_PEEK = 2;
    // todo const
    const MSG_DONTWAIT = 64;
    // todo const
    const MSG_WAITALL = 256;
    // todo const
    const SHUT_RDWR = 2;
    // todo const
    const SHUT_RD = 0;
    // todo const
    const SHUT_WR = 1;
    // todo property
    public $errCode = '???';
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
    // todo property
    public $setting = '???';
    // todo
    public function __construct($type,$async = null,$id = null){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function connect($host,$port = null,$timeout = null,$sock_flag = null){}
    // todo
    public function recv($size = null,$flag = null){}
    // todo
    public function send($data,$flag = null){}
    // todo
    public function sendfile($filename,$offset = null,$length = null){}
    // todo
    public function sendto($ip,$port,$data){}
    // todo
    public function shutdown($how){}
    // todo
    public function isConnected(){}
    // todo
    public function getsockname(){}
    // todo
    public function getpeername(){}
    // todo
    public function close($force = null){}
}