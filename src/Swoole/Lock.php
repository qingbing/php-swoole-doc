<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15

 * @Class        :   \Swoole\Lock
 * @package      :   Swoole
 */
namespace Swoole;

class Lock
{
    // todo const
    const FILELOCK = 2;
    // todo const
    const MUTEX = 3;
    // todo const
    const SEM = 4;
    // todo const
    const RWLOCK = 1;
    // todo const
    const SPINLOCK = 5;
    // todo property
    public $errCode = '???';
    // todo
    public function __construct($type = null,$filename = null){}
    // todo
    public function __destruct(){}
    // todo
    public function lock(){}
    // todo
    public function lockwait($timeout = null){}
    // todo
    public function trylock(){}
    // todo
    public function lock_read(){}
    // todo
    public function trylock_read(){}
    // todo
    public function unlock(){}
    // todo
    public function destroy(){}
}