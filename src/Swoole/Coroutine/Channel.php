<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Channel
 * @package      :   Swoole\Coroutine
 */
namespace Swoole\Coroutine;

class Channel
{
    // todo property
    public $capacity = '???';
    // todo property
    public $errCode = '???';
    // todo
    public function __construct($size = null){}
    // todo
    public function push($data,$timeout = null){}
    // todo
    public function pop($timeout = null){}
    // todo
    public function isEmpty(){}
    // todo
    public function isFull(){}
    // todo
    public function close(){}
    // todo
    public function stats(){}
    // todo
    public function length(){}
}