<?php
/**
 * @Extension    :   Swoole
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   4.4.14
 * @Date         :   2020-03-15
 * @Class        :   \Swoole\Timer
 * @package      :   Swoole
 */

namespace Swoole;

class Timer
{
    // todo
    static public function set($settings)
    {
    }

    /**
     * 循环触发的定时器，类似 js 中的 setInterval
     *
     * @param int $ms 指定时间（毫秒）
     * @param callable $callback 执行的函数 function ($timer_id, $params){}, $timer_id 为定时器ID，$params 是用户参数, 回调带$params时，第三个参数必须带上
     * @param mixed $params 用户参数
     * @return int 返回定时器 ID
     */
    static public function tick($ms, $callback, $params = null)
    {
        return 1;
    }

    /**
     * 单次触发的定时器，类似 js 中的 setTimeout
     *
     * @param int $ms 指定时间（毫秒）
     * @param callable $callback 执行的函数 function ($params){}, 值得注意的是，$params 是用户参数，回调带$params时，第三个参数必须带上
     * @param mixed $params 用户参数
     * @return int 返回定时器 ID
     */
    static public function after($ms, $callback, $params = null)
    {
        return 1;
    }

    // todo
    static public function exists($timer_id)
    {
    }

    // todo
    static public function info($timer_id)
    {
    }

    // todo
    static public function stats()
    {
    }

    // todo
    static public function list()
    {
    }

    /**
     * 清除定时器
     *
     * @param int $timer_id
     */
    static public function clear($timer_id)
    {
    }

    // todo
    static public function clearAll()
    {
    }
}