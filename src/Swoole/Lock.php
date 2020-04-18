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
    /**
     * 文件锁
     */
    const FILELOCK = 2;
    /**
     * 互斥锁
     */
    const MUTEX = 3;
    /**
     * 信号量
     */
    const SEM = 4;
    /**
     * 读写锁
     */
    const RWLOCK = 1;
    /**
     * 自旋锁
     */
    const SPINLOCK = 5;
    /**
     * 错误代码，正常为0
     *
     * @var int
     */
    public $errCode;

    /**
     * 创建锁
     *
     * @param null | int $type
     * @param null | string $filename
     */
    public function __construct($type = null, $filename = null)
    {
        return [
            'errCode' => 0,
        ];
    }

    /**
     * 魔术方法：析构函数
     */
    public function __destruct()
    {
    }

    /**
     * 上锁
     *
     * @return bool
     */
    public function lock()
    {
        return true;
    }

    // todo
    public function lockwait($timeout = null)
    {
    }

    // todo
    public function trylock()
    {
    }

    // todo
    public function lock_read()
    {
    }

    // todo
    public function trylock_read()
    {
    }

    /**
     * 释放锁
     *
     * @return bool
     */
    public function unlock()
    {
        return true;
    }

    // todo
    public function destroy()
    {
    }
}