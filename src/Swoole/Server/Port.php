<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Server\Port
 * @package      :   Swoole\Server
 */
namespace Swoole\Server;

class Port
{
    // todo property
    public $host = '???';
    // todo property
    public $port = '???';
    // todo property
    public $type = '???';
    // todo property
    public $sock = '???';
    // todo property
    public $setting = '???';
    // todo property
    public $connections = '???';
    // todo
    public function __destruct(){}
    // todo
    public function set($settings){}
    // todo
    public function on($event_name,$callback){}
    // todo
    public function getCallback($event_name){}
}