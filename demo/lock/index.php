<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/**
 * 文件锁
 * 读写锁
 * 信号量
 * 互斥锁
 * 自旋锁
 *
 * lock() ： 锁
 * unlock() ： 解锁
 */

// 创建锁(互斥锁)
$lock = new \Swoole\Lock(SWOOLE_MUTEX);

$lock->lock(); // 开始锁定 主进程

var_dump(111);
if (pcntl_fork() > 0) {
    sleep(1);
    $lock->unlock();
    var_dump(333);
} else {
    var_dump(222);
//    var_dump("子进程等待锁");
    $lock->lock();
    var_dump(666);
//    var_dump("子进程 获取锁");
    $lock->unlock();
    var_dump(777);
    exit('子进程退出' . "\n");
}
var_dump(444);
//var_dump("主进程释放锁");
unset($lock);
var_dump(555);
sleep(1);
//var_dump("子进程释放锁");
