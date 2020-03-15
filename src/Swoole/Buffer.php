<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Buffer
 * @package      :   Swoole
 */
namespace Swoole;

class Buffer
{
    // todo property
    public $capacity = '???';
    // todo property
    public $length = '???';
    // todo
    public function __construct($size = null){}
    // todo
    public function __destruct(){}
    // todo
    public function __toString(){}
    // todo
    public function substr($offset,$length = null,$remove = null){}
    // todo
    public function write($offset,$data){}
    // todo
    public function read($offset,$length){}
    // todo
    public function append($data){}
    // todo
    public function expand($size){}
    // todo
    public function recycle(){}
    // todo
    public function clear(){}
}