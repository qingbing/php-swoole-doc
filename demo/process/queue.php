<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/**
 * 进程队列通信
 */
$workers = [];
$worker_num = 2;

for ($i = 0; $i < $worker_num; $i++) {
    // 创建单进程
    $process = new \Swoole\Process('doProgress', false, false);
    //
    $status = $process->useQueue(); // 开启队列，类似于全局函数
    var_dump('=====  useQueue back =====');
    var_dump($status);
    // 启动进程并获取进程ID
    $pid = $process->start();
    // 存入进程数组
    $workers[$pid] = $process;
}

// 进程执行函数
function doProgress(\Swoole\Process $process)
{
    $data = $process->pop(); // 默认最大获取8092
    var_dump("从主进程获取数据 ： {$data}");
    sleep(4);
    $process->exit(0);
    var_dump('=====  这里的代码不再执行 =====');
}

// 主进程向子进程添加数据
foreach ($workers as $pid => $process) {
    $status = $process->push("Hello 子进程 ： {$process->pid}");
    var_dump('=====  push back =====');
    var_dump($status);
}


// 等待进程结束，回收资源
for ($i = 0; $i < $worker_num; $i++) {
    // 等待执行完成
    $ret = \Swoole\Process::wait();
    var_dump("==== RET ====");
    var_dump($ret);

    $pid = $ret[$pid];
    unset($workers[$pid]);
    var_dump("子进程退出 {$pid}");
}
