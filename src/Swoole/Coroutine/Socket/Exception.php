<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Coroutine\Socket\Exception
 * @package      :   Swoole\Coroutine\Socket
 */
namespace Swoole\Coroutine\Socket;

class Exception extends \Swoole\Exception implements \Throwable
{
    // todo
    public function __construct($message = null,$code = null,$previous = null){}
    // todo
    public function __wakeup(){}
    // todo
    final public function getCode(){}
    // todo
    final public function getLine(){}
    // todo
    final public function getPrevious(){}
    // todo
    public function __toString(){}
}