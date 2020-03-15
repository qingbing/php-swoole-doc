<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Table
 * @package      :   Swoole
 */
namespace Swoole;

class Table implements \Iterator, \Traversable, \ArrayAccess, \Countable
{
    // todo const
    const TYPE_INT = 1;
    // todo const
    const TYPE_STRING = 7;
    // todo const
    const TYPE_FLOAT = 6;
    // todo
    public function __construct($table_size,$conflict_proportion = null){}
    // todo
    public function column($name,$type,$size = null){}
    // todo
    public function create(){}
    // todo
    public function destroy(){}
    // todo
    public function set($key,$value){}
    // todo
    public function get($key,$field = null){}
    // todo
    public function count(){}
    // todo
    public function del($key){}
    // todo
    public function exists($key){}
    // todo
    public function exist($key){}
    // todo
    public function incr($key,$column,$incrby = null){}
    // todo
    public function decr($key,$column,$decrby = null){}
    // todo
    public function getMemorySize(){}
    // todo
    public function offsetExists($offset){}
    // todo
    public function offsetGet($offset){}
    // todo
    public function offsetSet($offset,$value){}
    // todo
    public function offsetUnset($offset){}
    // todo
    public function rewind(){}
    // todo
    public function next(){}
    // todo
    public function current(){}
    // todo
    public function key(){}
    // todo
    public function valid(){}
}