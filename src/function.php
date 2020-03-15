<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Extension    :   Swoole
 * Version      :   4.4.14
 * Date         :   2020-03-15
 */
/**
 * 获取 swoole 扩展的版本号
 * @return string
 */
function swoole_version()
{
    return '';
}

/**
 * 获取本机 CPU 核数
 * @return int
 */
function swoole_cpu_num()
{
    return 1;
}

/**
 * 获取最近一次 Swoole 底层的错误码
 * @return int
 */
function swoole_last_error()
{
    return 1;
}

// todo function
function swoole_async_dns_lookup_coro($domain_name, $timeout = null)
{
}

// todo function
function swoole_async_set($settings)
{
}

// todo function
function swoole_coroutine_create($func, $params = null)
{
}

// todo function
function swoole_coroutine_defer($callback)
{
}

// todo function
function swoole_client_select($read_array, $write_array, $error_array, $timeout = null)
{
}

// todo function
function swoole_select($read_array, $write_array, $error_array, $timeout = null)
{
}

// todo function
function swoole_set_process_name($process_name)
{
}

// todo function
function swoole_get_local_ip()
{
}

// todo function
function swoole_get_local_mac()
{
}

// todo function
function swoole_strerror($errno, $error_type = null)
{
}

// todo function
function swoole_errno()
{
}

// todo function
function swoole_hashcode($data, $type = null)
{
}

// todo function
function swoole_get_mime_type($filename)
{
}

// todo function
function swoole_clear_dns_cache()
{
}

// todo function
function swoole_internal_call_user_shutdown_begin()
{
}

// todo method
function swoole_event_add($fd, $read_callback, $write_callback = null, $events = null)
{
}

// todo method
function swoole_event_del($fd)
{
}

// todo method
function swoole_event_set($fd, $read_callback = null, $write_callback = null, $events = null)
{
}

// todo method
function swoole_event_isset($fd, $events = null)
{
}

// todo method
function swoole_event_dispatch()
{
}

// todo method
function swoole_event_defer($callback)
{
}

// todo method
function swoole_event_cycle($callback, $before = null)
{
}

// todo method
function swoole_event_write($fd, $data)
{
}

// todo method
function swoole_event_wait()
{
}

// todo method
function swoole_event_exit()
{
}

// todo method
function swoole_timer_set($settings)
{
}

// todo method
function swoole_timer_after($ms, $callback)
{
}

// todo method
function swoole_timer_tick($ms, $callback)
{
}

// todo method
function swoole_timer_exists($timer_id)
{
}

// todo method
function swoole_timer_info($timer_id)
{
}

// todo method
function swoole_timer_stats()
{
}

// todo method
function swoole_timer_list()
{
}

// todo method
function swoole_timer_clear($timer_id)
{
}

// todo method
function swoole_timer_clear_all()
{
}

