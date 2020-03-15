<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Table\Row
 * @package      :   Swoole\Table
 */
namespace Swoole\Table;

class Row implements \ArrayAccess
{
    // todo property
    public $key = '???';
    // todo property
    public $value = '???';
    // todo
    public function offsetExists($offset){}
    // todo
    public function offsetGet($offset){}
    // todo
    public function offsetSet($offset,$value){}
    // todo
    public function offsetUnset($offset){}
    // todo
    public function __destruct(){}
}