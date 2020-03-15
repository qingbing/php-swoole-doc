<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Event
 * @package      :   Swoole
 */
namespace Swoole;

class Event
{
    // todo
    static public function add($fd,$read_callback,$write_callback = null,$events = null){}
    // todo
    static public function del($fd){}
    // todo
    static public function set($fd,$read_callback = null,$write_callback = null,$events = null){}
    // todo
    static public function isset($fd,$events = null){}
    // todo
    static public function dispatch(){}
    // todo
    static public function defer($callback){}
    // todo
    static public function cycle($callback,$before = null){}
    // todo
    static public function write($fd,$data){}
    // todo
    static public function wait(){}
    // todo
    static public function rshutdown(){}
    // todo
    static public function exit(){}
}