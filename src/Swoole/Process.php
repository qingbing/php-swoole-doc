<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Process
 * @package      :   Swoole
 */

namespace Swoole;

class Process
{
    // todo const
    const IPC_NOWAIT = 256;
    // todo const
    const PIPE_MASTER = 1;
    // todo const
    const PIPE_WORKER = 2;
    // todo const
    const PIPE_READ = 3;
    // todo const
    const PIPE_WRITE = 4;
    // todo property
    public $pipe = '???';
    // todo property
    public $msgQueueId = '???';
    // todo property
    public $msgQueueKey = '???';
    // todo property
    /**
     * 子进程的 PID
     *
     * @var int
     */
    public $pid;
    /**
     * 进程 ID
     *
     * @var int
     */
    public $id;

    /**
     * 等待进程执行
     *
     * @param null $blocking
     * @return array
     */
    static public function wait($blocking = null)
    {
        return [
            'pid' => 6106, // 最后一个执行的进程ID
            'code' => 0,
            'signal' => 0,
        ];
    }

    /**
     * 设置异步信号监听
     *
     * @param int $signal_no
     * @param callable $callback
     * @return bool
     */
    static public function signal($signal_no, $callback)
    {
        return true;
    }

    /**
     * 设置微秒级别的定时器，定时器会触发信号，需要与 Process::signal 或 pcntl_signal 配合使用
     *
     * @param int $usec 微秒
     * @param null $type
     * @return bool
     */
    static public function alarm($usec, $type = null)
    {
        return true;
    }

    // todo
    static public function kill($pid, $signal_no = null)
    {
    }

    // todo
    static public function daemon($nochdir = null, $noclose = null, $pipes = null)
    {
    }

    // todo
    static public function setaffinity($cpu_settings)
    {
    }

    // todo

    /**
     * Process constructor.
     * @param mixed $callback 子进程创建成功后执行的函数
     * @param bool $redirect_stdin_and_stdout 重定向子进程的标准输入和输出, 默认 false
     *      启用次选项后，在进程内echo将不会打印到屏幕上，而是写入管道，读取键盘输入将变成从管道中读取，默认为阻塞读取
     * @param int | null $pipe_type 管道类型 [0,1,2]
     *      启用 $redirect_stdin_stdout 后，此选项将忽略用户参数，强制为 1
     * @param null | bool $enable_coroutine 是否在callback中开启协程
     */
    public function __construct($callback, $redirect_stdin_and_stdout = null, $pipe_type = null, $enable_coroutine = null)
    {
    }

    // todo
    public function __destruct()
    {
    }

    // todo
    public function set($settings)
    {
    }

    // todo
    public function setTimeout($seconds)
    {
    }

    // todo
    public function setBlocking($blocking)
    {
    }

    /**
     * 在父进程和子进程之间创建消息队列
     *
     * @param null | int $key
     * @param null | int $mode
     * @param null $capacity
     * @return bool
     */
    public function useQueue($key = null, $mode = null, $capacity = null)
    {
        return true;
    }

    // todo
    public function statQueue()
    {
    }

    // todo
    public function freeQueue()
    {
    }

    /**
     * 执行 fork 系统调用，启动子进程
     *
     * @return int | false 成功返回子进程的 PID, 失败返回 false
     */
    public function start()
    {
        return 1;
    }

    /**
     * 写入管道
     *
     * @param string $data
     * @return int 写入内容的长度
     */
    public function write($data)
    {
        return 1;
    }

    /**
     * 关闭进程
     */
    public function close()
    {
        return true;
    }

    // todo
    public function read($size = null)
    {
    }

    /**
     * 向进程对立中压入数据
     *
     * @param mixed $data
     * @return bool
     */
    public function push($data)
    {
        return true;
    }

    /**
     * 从进程队列中获取数据
     *
     * @param int $size 获取数据最大的长度，默认最大8192
     * @return string
     */
    public function pop($size = null)
    {
        return '';
    }

    /**
     * 退出进程
     *
     * @param null | int $exit_code
     */
    public function exit($exit_code = null)
    {
    }

    // todo

    /**
     * 执行一个外部程序，此函数是 exec 系统调用的封装
     *
     * @param string $exec_file
     * @param array $args
     */
    public function exec($exec_file, $args)
    {
    }

    // todo
    public function exportSocket()
    {
    }

    /**
     * 修改进程名称
     *
     * @param string $process_name
     * @return bool
     */
    public function name($process_name)
    {
        return true;
    }
}