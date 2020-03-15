<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Http\Server
 * @package      :   Swoole\Coroutine\Http
 */
namespace Swoole\Coroutine\Http;

final class Server
{
    // todo property
    public $fd = '???';
    // todo property
    public $host = '???';
    // todo property
    public $port = '???';
    // todo property
    public $ssl = '???';
    // todo property
    public $settings = '???';
    // todo property
    public $errCode = '???';
    // todo property
    public $errMsg = '???';
    // todo
    public function __construct($host,$port = null,$ssl = null,$reuse_port = null){}
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function handle($pattern,$callback){}
    // todo
    public function onAccept(){}
    // todo
    public function start(){}
    // todo
    public function shutdown(){}
}