<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Timer\Iterator
 * @package      :   Swoole\Timer
 */
namespace Swoole\Timer;

class Iterator extends \ArrayIterator implements \Countable, \Serializable, \SeekableIterator, \ArrayAccess, \Traversable, \Iterator
{
    // todo const
    const STD_PROP_LIST = 1;
    // todo const
    const ARRAY_AS_PROPS = 2;
    // todo
    public function __construct($input = null,$flags = null,$iterator_class = null){}
    // todo
    public function offsetExists($index){}
    // todo
    public function offsetGet($index){}
    // todo
    public function offsetSet($index,$newval){}
    // todo
    public function offsetUnset($index){}
    // todo
    public function append($value){}
    // todo
    public function getArrayCopy(){}
    // todo
    public function count(){}
    // todo
    public function getFlags(){}
    // todo
    public function setFlags($flags){}
    // todo
    public function asort(){}
    // todo
    public function ksort(){}
    // todo
    public function uasort($cmp_function){}
    // todo
    public function uksort($cmp_function){}
    // todo
    public function natsort(){}
    // todo
    public function natcasesort(){}
    // todo
    public function unserialize($serialized){}
    // todo
    public function serialize(){}
    // todo
    public function rewind(){}
    // todo
    public function current(){}
    // todo
    public function key(){}
    // todo
    public function next(){}
    // todo
    public function valid(){}
    // todo
    public function seek($position){}
}