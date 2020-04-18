<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Extension    :   Swoole
 * Version      :   4.4.14
 * Date         :   2020-03-15
 */
/**
 * 当前Swoole的版本号，字符串类型
 */
defined('SWOOLE_VERSION') or define('SWOOLE_VERSION', '4.4.14');

/**
 * swoole_server构造函数参数
 */
// 使用Base模式，业务代码在Reactor进程中执行
defined('SWOOLE_BASE') or define('SWOOLE_BASE', 1);

// 多进程进程模式，业务代码在Worker进程中执行
defined('SWOOLE_PROCESS') or define('SWOOLE_PROCESS', 2);

/**
 * swoole_client构造函数参数
 */
// 创建tcp socket
defined('SWOOLE_SOCK_TCP') or define('SWOOLE_SOCK_TCP', 1);

// 创建tcp ipv6 socket
defined('SWOOLE_SOCK_TCP6') or define('SWOOLE_SOCK_TCP6', 3);

// 创建udp socket
defined('SWOOLE_SOCK_UDP') or define('SWOOLE_SOCK_UDP', 2);

// 创建udp ipv6 socket
defined('SWOOLE_SOCK_UDP6') or define('SWOOLE_SOCK_UDP6', 4);

// 在php-fpm / apache中创建长连接
defined('SWOOLE_KEEP') or define('SWOOLE_KEEP', 4096);

// 同步客户端
defined('SWOOLE_SOCK_SYNC') or define('SWOOLE_SOCK_SYNC', false);

// 异步客户端
defined('SWOOLE_SOCK_ASYNC') or define('SWOOLE_SOCK_ASYNC', 1);

/**
 * swoole_lock构造函数参数
 */
// 创建文件锁
defined('SWOOLE_FILELOCK') or define('SWOOLE_FILELOCK', 2);

// 创建互斥锁
defined('SWOOLE_MUTEX') or define('SWOOLE_MUTEX', 3);

// 创建信号量
defined('SWOOLE_SEM') or define('SWOOLE_SEM', 4);

// 创建读写锁
defined('SWOOLE_RWLOCK') or define('SWOOLE_RWLOCK', 1);

// 创建自旋锁
defined('SWOOLE_SPINLOCK') or define('SWOOLE_SPINLOCK', 5);
/**
 * Swoole 版本id
 */
defined('SWOOLE_VERSION_ID') or define('SWOOLE_VERSION_ID', 40414);

// todo get meaning
defined('SWOOLE_MAJOR_VERSION') or define('SWOOLE_MAJOR_VERSION', 4);

// todo get meaning
defined('SWOOLE_MINOR_VERSION') or define('SWOOLE_MINOR_VERSION', 4);

// todo get meaning
defined('SWOOLE_RELEASE_VERSION') or define('SWOOLE_RELEASE_VERSION', 14);

// todo get meaning
defined('SWOOLE_EXTRA_VERSION') or define('SWOOLE_EXTRA_VERSION', '');

// todo get meaning
defined('SWOOLE_DEBUG') or define('SWOOLE_DEBUG', false);

// todo get meaning
defined('SWOOLE_HAVE_COMPRESSION') or define('SWOOLE_HAVE_COMPRESSION', 1);

// todo get meaning
defined('SWOOLE_HAVE_ZLIB') or define('SWOOLE_HAVE_ZLIB', 1);

// todo get meaning
defined('SWOOLE_USE_SHORTNAME') or define('SWOOLE_USE_SHORTNAME', 1);

// todo get meaning
defined('SWOOLE_IPC_UNSOCK') or define('SWOOLE_IPC_UNSOCK', 1);

// todo get meaning
defined('SWOOLE_IPC_MSGQUEUE') or define('SWOOLE_IPC_MSGQUEUE', 2);

// todo get meaning
defined('SWOOLE_IPC_PREEMPTIVE') or define('SWOOLE_IPC_PREEMPTIVE', 3);

// todo get meaning
defined('SWOOLE_SOCK_UNIX_DGRAM') or define('SWOOLE_SOCK_UNIX_DGRAM', 6);

// todo get meaning
defined('SWOOLE_SOCK_UNIX_STREAM') or define('SWOOLE_SOCK_UNIX_STREAM', 5);

// todo get meaning
defined('SWOOLE_TCP') or define('SWOOLE_TCP', 1);

// todo get meaning
defined('SWOOLE_TCP6') or define('SWOOLE_TCP6', 3);

// todo get meaning
defined('SWOOLE_UDP') or define('SWOOLE_UDP', 2);

// todo get meaning
defined('SWOOLE_UDP6') or define('SWOOLE_UDP6', 4);

// todo get meaning
defined('SWOOLE_UNIX_DGRAM') or define('SWOOLE_UNIX_DGRAM', 6);

// todo get meaning
defined('SWOOLE_UNIX_STREAM') or define('SWOOLE_UNIX_STREAM', 5);


// todo get meaning
defined('SWOOLE_SYNC') or define('SWOOLE_SYNC', 2048);

// todo get meaning
defined('SWOOLE_ASYNC') or define('SWOOLE_ASYNC', 1024);

// todo get meaning
/**
 *
 */
defined('SWOOLE_EVENT_READ') or define('SWOOLE_EVENT_READ', 512);

// todo get meaning
defined('SWOOLE_EVENT_WRITE') or define('SWOOLE_EVENT_WRITE', 1024);

// todo get meaning
defined('SWOOLE_STRERROR_SYSTEM') or define('SWOOLE_STRERROR_SYSTEM', 0);

// todo get meaning
defined('SWOOLE_STRERROR_GAI') or define('SWOOLE_STRERROR_GAI', 1);

// todo get meaning
defined('SWOOLE_STRERROR_DNS') or define('SWOOLE_STRERROR_DNS', 2);

// todo get meaning
defined('SWOOLE_STRERROR_SWOOLE') or define('SWOOLE_STRERROR_SWOOLE', 9);

// todo get meaning
defined('SWOOLE_ERROR_MALLOC_FAIL') or define('SWOOLE_ERROR_MALLOC_FAIL', 501);

// todo get meaning
defined('SWOOLE_ERROR_SYSTEM_CALL_FAIL') or define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);

// todo get meaning
defined('SWOOLE_ERROR_PHP_FATAL_ERROR') or define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);

// todo get meaning
defined('SWOOLE_ERROR_NAME_TOO_LONG') or define('SWOOLE_ERROR_NAME_TOO_LONG', 504);

// todo get meaning
defined('SWOOLE_ERROR_INVALID_PARAMS') or define('SWOOLE_ERROR_INVALID_PARAMS', 505);

// todo get meaning
defined('SWOOLE_ERROR_QUEUE_FULL') or define('SWOOLE_ERROR_QUEUE_FULL', 506);

// todo get meaning
defined('SWOOLE_ERROR_OPERATION_NOT_SUPPORT') or define('SWOOLE_ERROR_OPERATION_NOT_SUPPORT', 507);

// todo get meaning
defined('SWOOLE_ERROR_PROTOCOL_ERROR') or define('SWOOLE_ERROR_PROTOCOL_ERROR', 508);

// todo get meaning
defined('SWOOLE_ERROR_FILE_NOT_EXIST') or define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);

// todo get meaning
defined('SWOOLE_ERROR_FILE_TOO_LARGE') or define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);

// todo get meaning
defined('SWOOLE_ERROR_FILE_EMPTY') or define('SWOOLE_ERROR_FILE_EMPTY', 702);

// todo get meaning
defined('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST') or define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 703);

// todo get meaning
defined('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED') or define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 704);

// todo get meaning
defined('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT') or define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT', 705);

// todo get meaning
defined('SWOOLE_ERROR_BAD_IPV6_ADDRESS') or define('SWOOLE_ERROR_BAD_IPV6_ADDRESS', 706);

// todo get meaning
defined('SWOOLE_ERROR_UNREGISTERED_SIGNAL') or define('SWOOLE_ERROR_UNREGISTERED_SIGNAL', 707);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER') or define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT') or define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_CLOSING') or define('SWOOLE_ERROR_SESSION_CLOSING', 1003);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_CLOSED') or define('SWOOLE_ERROR_SESSION_CLOSED', 1004);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_NOT_EXIST') or define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_INVALID_ID') or define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);

// todo get meaning
defined('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA') or define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);

// todo get meaning
defined('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW') or define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1008);

// todo get meaning
defined('SWOOLE_ERROR_OUTPUT_SEND_YIELD') or define('SWOOLE_ERROR_OUTPUT_SEND_YIELD', 1009);

// todo get meaning
defined('SWOOLE_ERROR_SSL_NOT_READY') or define('SWOOLE_ERROR_SSL_NOT_READY', 1010);

// todo get meaning
defined('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE') or define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1011);

// todo get meaning
defined('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE') or define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1012);

// todo get meaning
defined('SWOOLE_ERROR_SSL_VEFIRY_FAILED') or define('SWOOLE_ERROR_SSL_VEFIRY_FAILED', 1013);

// todo get meaning
defined('SWOOLE_ERROR_SSL_BAD_CLIENT') or define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1014);

// todo get meaning
defined('SWOOLE_ERROR_SSL_BAD_PROTOCOL') or define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1015);

// todo get meaning
defined('SWOOLE_ERROR_SSL_RESET') or define('SWOOLE_ERROR_SSL_RESET', 1016);

// todo get meaning
defined('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE') or define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);

// todo get meaning
defined('SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND') or define('SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND', 1202);

// todo get meaning
defined('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE') or define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1203);

// todo get meaning
defined('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG') or define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);

// todo get meaning
defined('SWOOLE_ERROR_TASK_DISPATCH_FAIL') or define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);

// todo get meaning
defined('SWOOLE_ERROR_TASK_TIMEOUT') or define('SWOOLE_ERROR_TASK_TIMEOUT', 2003);

// todo get meaning
defined('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG') or define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);

// todo get meaning
defined('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER') or define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);

// todo get meaning
defined('SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND') or define('SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND', 3003);

// todo get meaning
defined('SWOOLE_ERROR_AIO_BAD_REQUEST') or define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);

// todo get meaning
defined('SWOOLE_ERROR_AIO_CANCELED') or define('SWOOLE_ERROR_AIO_CANCELED', 4002);

// todo get meaning
defined('SWOOLE_ERROR_AIO_TIMEOUT') or define('SWOOLE_ERROR_AIO_TIMEOUT', 4003);

// todo get meaning
defined('SWOOLE_ERROR_CLIENT_NO_CONNECTION') or define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);

// todo get meaning
defined('SWOOLE_ERROR_SOCKET_CLOSED') or define('SWOOLE_ERROR_SOCKET_CLOSED', 5002);

// todo get meaning
defined('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION') or define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);

// todo get meaning
defined('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD') or define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);

// todo get meaning
defined('SWOOLE_ERROR_SOCKS5_AUTH_FAILED') or define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);

// todo get meaning
defined('SWOOLE_ERROR_SOCKS5_SERVER_ERROR') or define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);

// todo get meaning
defined('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR') or define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 8001);

// todo get meaning
defined('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL') or define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 8002);

// todo get meaning
defined('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT') or define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);

// todo get meaning
defined('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE') or define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);

// todo get meaning
defined('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED') or define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);

// todo get meaning
defined('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED') or define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT') or define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET') or define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_WORKER_TERMINATED') or define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT') or define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT') or define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL') or define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER') or define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_ONLY_START_ONE') or define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_SEND_IN_MASTER') or define('SWOOLE_ERROR_SERVER_SEND_IN_MASTER', 9009);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_INVALID_REQUEST') or define('SWOOLE_ERROR_SERVER_INVALID_REQUEST', 9010);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_CONNECT_FAIL') or define('SWOOLE_ERROR_SERVER_CONNECT_FAIL', 9011);

// todo get meaning
defined('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT') or define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9012);

// todo get meaning
defined('SWOOLE_ERROR_CO_OUT_OF_COROUTINE') or define('SWOOLE_ERROR_CO_OUT_OF_COROUTINE', 10001);

// todo get meaning
defined('SWOOLE_ERROR_CO_HAS_BEEN_BOUND') or define('SWOOLE_ERROR_CO_HAS_BEEN_BOUND', 10002);

// todo get meaning
defined('SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED') or define('SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED', 10003);

// todo get meaning
defined('SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK') or define('SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK', 10004);

// todo get meaning
defined('SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED') or define('SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED', 10005);

// todo get meaning
defined('SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING') or define('SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING', 10006);

// todo get meaning
defined('SWOOLE_ERROR_CO_YIELD_FAILED') or define('SWOOLE_ERROR_CO_YIELD_FAILED', 10007);

// todo get meaning
defined('SWOOLE_ERROR_CO_GETCONTEXT_FAILED') or define('SWOOLE_ERROR_CO_GETCONTEXT_FAILED', 10008);

// todo get meaning
defined('SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED') or define('SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED', 10009);

// todo get meaning
defined('SWOOLE_ERROR_CO_MAKECONTEXT_FAILED') or define('SWOOLE_ERROR_CO_MAKECONTEXT_FAILED', 10010);

// todo get meaning
defined('SWOOLE_ERROR_CO_IOCPINIT_FAILED') or define('SWOOLE_ERROR_CO_IOCPINIT_FAILED', 10011);

// todo get meaning
defined('SWOOLE_ERROR_CO_PROTECT_STACK_FAILED') or define('SWOOLE_ERROR_CO_PROTECT_STACK_FAILED', 10012);

// todo get meaning
defined('SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR') or define('SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR', 10013);

// todo get meaning
defined('SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD') or define('SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD', 10014);

// todo get meaning
defined('SWOOLE_TRACE_SERVER') or define('SWOOLE_TRACE_SERVER', 2);

// todo get meaning
defined('SWOOLE_TRACE_CLIENT') or define('SWOOLE_TRACE_CLIENT', 4);

// todo get meaning
defined('SWOOLE_TRACE_BUFFER') or define('SWOOLE_TRACE_BUFFER', 8);

// todo get meaning
defined('SWOOLE_TRACE_CONN') or define('SWOOLE_TRACE_CONN', 16);

// todo get meaning
defined('SWOOLE_TRACE_EVENT') or define('SWOOLE_TRACE_EVENT', 32);

// todo get meaning
defined('SWOOLE_TRACE_WORKER') or define('SWOOLE_TRACE_WORKER', 64);

// todo get meaning
defined('SWOOLE_TRACE_REACTOR') or define('SWOOLE_TRACE_REACTOR', 256);

// todo get meaning
defined('SWOOLE_TRACE_PHP') or define('SWOOLE_TRACE_PHP', 512);

// todo get meaning
defined('SWOOLE_TRACE_HTTP') or define('SWOOLE_TRACE_HTTP', 1024);

// todo get meaning
defined('SWOOLE_TRACE_HTTP2') or define('SWOOLE_TRACE_HTTP2', 2048);

// todo get meaning
defined('SWOOLE_TRACE_EOF_PROTOCOL') or define('SWOOLE_TRACE_EOF_PROTOCOL', 4096);

// todo get meaning
defined('SWOOLE_TRACE_LENGTH_PROTOCOL') or define('SWOOLE_TRACE_LENGTH_PROTOCOL', 8192);

// todo get meaning
defined('SWOOLE_TRACE_CLOSE') or define('SWOOLE_TRACE_CLOSE', 16384);

// todo get meaning
defined('SWOOLE_TRACE_REDIS_CLIENT') or define('SWOOLE_TRACE_REDIS_CLIENT', 65536);

// todo get meaning
defined('SWOOLE_TRACE_MYSQL_CLIENT') or define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);

// todo get meaning
defined('SWOOLE_TRACE_HTTP_CLIENT') or define('SWOOLE_TRACE_HTTP_CLIENT', 262144);

// todo get meaning
defined('SWOOLE_TRACE_AIO') or define('SWOOLE_TRACE_AIO', 524288);

// todo get meaning
defined('SWOOLE_TRACE_SSL') or define('SWOOLE_TRACE_SSL', 1048576);

// todo get meaning
defined('SWOOLE_TRACE_NORMAL') or define('SWOOLE_TRACE_NORMAL', 2097152);

// todo get meaning
defined('SWOOLE_TRACE_CHANNEL') or define('SWOOLE_TRACE_CHANNEL', 4194304);

// todo get meaning
defined('SWOOLE_TRACE_TIMER') or define('SWOOLE_TRACE_TIMER', 8388608);

// todo get meaning
defined('SWOOLE_TRACE_SOCKET') or define('SWOOLE_TRACE_SOCKET', 16777216);

// todo get meaning
defined('SWOOLE_TRACE_COROUTINE') or define('SWOOLE_TRACE_COROUTINE', 33554432);

// todo get meaning
defined('SWOOLE_TRACE_CONTEXT') or define('SWOOLE_TRACE_CONTEXT', 67108864);

// todo get meaning
defined('SWOOLE_TRACE_CO_HTTP_SERVER') or define('SWOOLE_TRACE_CO_HTTP_SERVER', 134217728);

// todo get meaning
defined('SWOOLE_TRACE_ALL') or define('SWOOLE_TRACE_ALL', 4294967295);

// todo get meaning
defined('SWOOLE_LOG_DEBUG') or define('SWOOLE_LOG_DEBUG', 0);

// todo get meaning
defined('SWOOLE_LOG_TRACE') or define('SWOOLE_LOG_TRACE', 1);

// todo get meaning
defined('SWOOLE_LOG_INFO') or define('SWOOLE_LOG_INFO', 2);

// todo get meaning
defined('SWOOLE_LOG_NOTICE') or define('SWOOLE_LOG_NOTICE', 3);

// todo get meaning
defined('SWOOLE_LOG_WARNING') or define('SWOOLE_LOG_WARNING', 4);

// todo get meaning
defined('SWOOLE_LOG_ERROR') or define('SWOOLE_LOG_ERROR', 5);

// todo get meaning
defined('SWOOLE_LOG_NONE') or define('SWOOLE_LOG_NONE', 6);

// todo get meaning
defined('SWOOLE_IPC_NONE') or define('SWOOLE_IPC_NONE', 0);

// todo get meaning
defined('SWOOLE_IPC_UNIXSOCK') or define('SWOOLE_IPC_UNIXSOCK', 1);

// todo get meaning
defined('SWOOLE_IPC_SOCKET') or define('SWOOLE_IPC_SOCKET', 3);

// todo get meaning
defined('SWOOLE_TIMER_MIN_MS') or define('SWOOLE_TIMER_MIN_MS', 1);

// todo get meaning
defined('SWOOLE_TIMER_MIN_SEC') or define('SWOOLE_TIMER_MIN_SEC', 0.001);

// todo get meaning
defined('SWOOLE_TIMER_MAX_MS') or define('SWOOLE_TIMER_MAX_MS', 9223372036854775807);

// todo get meaning
defined('SWOOLE_TIMER_MAX_SEC') or define('SWOOLE_TIMER_MAX_SEC', 9.2233720368548E+15);

// todo get meaning
defined('SWOOLE_DEFAULT_MAX_CORO_NUM') or define('SWOOLE_DEFAULT_MAX_CORO_NUM', 100000);

// todo get meaning
defined('SWOOLE_CORO_MAX_NUM_LIMIT') or define('SWOOLE_CORO_MAX_NUM_LIMIT', 9223372036854775807);

// todo get meaning
defined('SWOOLE_CORO_INIT') or define('SWOOLE_CORO_INIT', 0);

// todo get meaning
defined('SWOOLE_CORO_WAITING') or define('SWOOLE_CORO_WAITING', 1);

// todo get meaning
defined('SWOOLE_CORO_RUNNING') or define('SWOOLE_CORO_RUNNING', 2);

// todo get meaning
defined('SWOOLE_CORO_END') or define('SWOOLE_CORO_END', 3);

// todo get meaning
defined('SWOOLE_EXIT_IN_COROUTINE') or define('SWOOLE_EXIT_IN_COROUTINE', 2);

// todo get meaning
defined('SWOOLE_EXIT_IN_SERVER') or define('SWOOLE_EXIT_IN_SERVER', 4);

// todo get meaning
defined('SWOOLE_CHANNEL_OK') or define('SWOOLE_CHANNEL_OK', 0);

// todo get meaning
defined('SWOOLE_CHANNEL_TIMEOUT') or define('SWOOLE_CHANNEL_TIMEOUT', -1);

// todo get meaning
defined('SWOOLE_CHANNEL_CLOSED') or define('SWOOLE_CHANNEL_CLOSED', -2);

// todo get meaning
defined('SWOOLE_HOOK_TCP') or define('SWOOLE_HOOK_TCP', 2);

// todo get meaning
defined('SWOOLE_HOOK_UDP') or define('SWOOLE_HOOK_UDP', 4);

// todo get meaning
defined('SWOOLE_HOOK_UNIX') or define('SWOOLE_HOOK_UNIX', 8);

// todo get meaning
defined('SWOOLE_HOOK_UDG') or define('SWOOLE_HOOK_UDG', 16);

// todo get meaning
defined('SWOOLE_HOOK_SSL') or define('SWOOLE_HOOK_SSL', 32);

// todo get meaning
defined('SWOOLE_HOOK_TLS') or define('SWOOLE_HOOK_TLS', 64);

// todo get meaning
defined('SWOOLE_HOOK_STREAM_FUNCTION') or define('SWOOLE_HOOK_STREAM_FUNCTION', 128);

// todo get meaning
defined('SWOOLE_HOOK_STREAM_SELECT') or define('SWOOLE_HOOK_STREAM_SELECT', 128);

// todo get meaning
defined('SWOOLE_HOOK_FILE') or define('SWOOLE_HOOK_FILE', 256);

// todo get meaning
defined('SWOOLE_HOOK_SLEEP') or define('SWOOLE_HOOK_SLEEP', 512);

// todo get meaning
defined('SWOOLE_HOOK_PROC') or define('SWOOLE_HOOK_PROC', 1024);

// todo get meaning
defined('SWOOLE_HOOK_CURL') or define('SWOOLE_HOOK_CURL', 268435456);

// todo get meaning
defined('SWOOLE_HOOK_BLOCKING_FUNCTION') or define('SWOOLE_HOOK_BLOCKING_FUNCTION', 1073741824);

// todo get meaning
defined('SWOOLE_HOOK_ALL') or define('SWOOLE_HOOK_ALL', 1879048191);

// todo get meaning
defined('SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED') or define('SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED', -1);

// todo get meaning
defined('SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT') or define('SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT', -2);

// todo get meaning
defined('SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET') or define('SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET', -3);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_UNKNOWN_ERROR') or define('SWOOLE_MYSQLND_CR_UNKNOWN_ERROR', 2000);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_CONNECTION_ERROR') or define('SWOOLE_MYSQLND_CR_CONNECTION_ERROR', 2002);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_SERVER_GONE_ERROR') or define('SWOOLE_MYSQLND_CR_SERVER_GONE_ERROR', 2006);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_OUT_OF_MEMORY') or define('SWOOLE_MYSQLND_CR_OUT_OF_MEMORY', 2008);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_SERVER_LOST') or define('SWOOLE_MYSQLND_CR_SERVER_LOST', 2013);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_COMMANDS_OUT_OF_SYNC') or define('SWOOLE_MYSQLND_CR_COMMANDS_OUT_OF_SYNC', 2014);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_CANT_FIND_CHARSET') or define('SWOOLE_MYSQLND_CR_CANT_FIND_CHARSET', 2019);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_MALFORMED_PACKET') or define('SWOOLE_MYSQLND_CR_MALFORMED_PACKET', 2027);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_NOT_IMPLEMENTED') or define('SWOOLE_MYSQLND_CR_NOT_IMPLEMENTED', 2054);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_NO_PREPARE_STMT') or define('SWOOLE_MYSQLND_CR_NO_PREPARE_STMT', 2030);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_PARAMS_NOT_BOUND') or define('SWOOLE_MYSQLND_CR_PARAMS_NOT_BOUND', 2031);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_INVALID_PARAMETER_NO') or define('SWOOLE_MYSQLND_CR_INVALID_PARAMETER_NO', 2034);

// todo get meaning
defined('SWOOLE_MYSQLND_CR_INVALID_BUFFER_USE') or define('SWOOLE_MYSQLND_CR_INVALID_BUFFER_USE', 2035);

// todo get meaning
defined('SWOOLE_REDIS_MODE_MULTI') or define('SWOOLE_REDIS_MODE_MULTI', 0);

// todo get meaning
defined('SWOOLE_REDIS_MODE_PIPELINE') or define('SWOOLE_REDIS_MODE_PIPELINE', 1);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_NOT_FOUND') or define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_STRING') or define('SWOOLE_REDIS_TYPE_STRING', 1);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_SET') or define('SWOOLE_REDIS_TYPE_SET', 2);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_LIST') or define('SWOOLE_REDIS_TYPE_LIST', 3);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_ZSET') or define('SWOOLE_REDIS_TYPE_ZSET', 4);

// todo get meaning
defined('SWOOLE_REDIS_TYPE_HASH') or define('SWOOLE_REDIS_TYPE_HASH', 5);

// todo get meaning
defined('SWOOLE_REDIS_ERR_IO') or define('SWOOLE_REDIS_ERR_IO', 1);

// todo get meaning
defined('SWOOLE_REDIS_ERR_OTHER') or define('SWOOLE_REDIS_ERR_OTHER', 2);

// todo get meaning
defined('SWOOLE_REDIS_ERR_EOF') or define('SWOOLE_REDIS_ERR_EOF', 3);

// todo get meaning
defined('SWOOLE_REDIS_ERR_PROTOCOL') or define('SWOOLE_REDIS_ERR_PROTOCOL', 4);

// todo get meaning
defined('SWOOLE_REDIS_ERR_OOM') or define('SWOOLE_REDIS_ERR_OOM', 5);

// todo get meaning
defined('SWOOLE_REDIS_ERR_CLOSED') or define('SWOOLE_REDIS_ERR_CLOSED', 6);

// todo get meaning
defined('SWOOLE_REDIS_ERR_NOAUTH') or define('SWOOLE_REDIS_ERR_NOAUTH', 7);

// todo get meaning
defined('SWOOLE_REDIS_ERR_ALLOC') or define('SWOOLE_REDIS_ERR_ALLOC', 8);

// todo get meaning
defined('SWOOLE_DISPATCH_RESULT_DISCARD_PACKET') or define('SWOOLE_DISPATCH_RESULT_DISCARD_PACKET', -1);

// todo get meaning
defined('SWOOLE_DISPATCH_RESULT_CLOSE_CONNECTION') or define('SWOOLE_DISPATCH_RESULT_CLOSE_CONNECTION', -2);

// todo get meaning
defined('SWOOLE_DISPATCH_RESULT_USERFUNC_FALLBACK') or define('SWOOLE_DISPATCH_RESULT_USERFUNC_FALLBACK', -3);

// todo get meaning
defined('SWOOLE_TASK_TMPFILE') or define('SWOOLE_TASK_TMPFILE', 1);

// todo get meaning
defined('SWOOLE_TASK_SERIALIZE') or define('SWOOLE_TASK_SERIALIZE', 2);

// todo get meaning
defined('SWOOLE_TASK_NONBLOCK') or define('SWOOLE_TASK_NONBLOCK', 4);

// todo get meaning
defined('SWOOLE_TASK_CALLBACK') or define('SWOOLE_TASK_CALLBACK', 8);

// todo get meaning
defined('SWOOLE_TASK_WAITALL') or define('SWOOLE_TASK_WAITALL', 16);

// todo get meaning
defined('SWOOLE_TASK_COROUTINE') or define('SWOOLE_TASK_COROUTINE', 32);

// todo get meaning
defined('SWOOLE_TASK_PEEK') or define('SWOOLE_TASK_PEEK', 64);

// todo get meaning
defined('SWOOLE_TASK_NOREPLY') or define('SWOOLE_TASK_NOREPLY', 128);

// websocket 连接进入等待握手
defined('SWOOLE_WEBSOCKET_STATUS_CONNECTION') or define('SWOOLE_WEBSOCKET_STATUS_CONNECTION', 1);

// websocket 正在握手
defined('SWOOLE_WEBSOCKET_STATUS_HANDSHAKE') or define('SWOOLE_WEBSOCKET_STATUS_HANDSHAKE', 2);

// websocket 连接状态
defined('SWOOLE_WEBSOCKET_STATUS_ACTIVE') or define('SWOOLE_WEBSOCKET_STATUS_ACTIVE', 3);

// websocket 连接关闭
defined('SWOOLE_WEBSOCKET_STATUS_CLOSING') or define('SWOOLE_WEBSOCKET_STATUS_CLOSING', 4);

// todo get meaning
defined('SWOOLE_WEBSOCKET_OPCODE_CONTINUATION') or define('SWOOLE_WEBSOCKET_OPCODE_CONTINUATION', 0);

// websocket UTF-8 文本字符数据
defined('SWOOLE_WEBSOCKET_OPCODE_TEXT') or define('SWOOLE_WEBSOCKET_OPCODE_TEXT', 1);

//  websocket 二进制数据
defined('SWOOLE_WEBSOCKET_OPCODE_BINARY') or define('SWOOLE_WEBSOCKET_OPCODE_BINARY', 2);

// todo get meaning
defined('SWOOLE_WEBSOCKET_OPCODE_CLOSE') or define('SWOOLE_WEBSOCKET_OPCODE_CLOSE', 8);

// websocket ping 类型数据
defined('SWOOLE_WEBSOCKET_OPCODE_PING') or define('SWOOLE_WEBSOCKET_OPCODE_PING', 9);

// todo get meaning
defined('SWOOLE_WEBSOCKET_OPCODE_PONG') or define('SWOOLE_WEBSOCKET_OPCODE_PONG', 10);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_FIN') or define('SWOOLE_WEBSOCKET_FLAG_FIN', 1);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_RSV1') or define('SWOOLE_WEBSOCKET_FLAG_RSV1', 4);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_RSV2') or define('SWOOLE_WEBSOCKET_FLAG_RSV2', 8);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_RSV3') or define('SWOOLE_WEBSOCKET_FLAG_RSV3', 16);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_MASK') or define('SWOOLE_WEBSOCKET_FLAG_MASK', 32);

// todo get meaning
defined('SWOOLE_WEBSOCKET_FLAG_COMPRESS') or define('SWOOLE_WEBSOCKET_FLAG_COMPRESS', 2);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_NORMAL') or define('SWOOLE_WEBSOCKET_CLOSE_NORMAL', 1000);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY') or define('SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY', 1001);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR', 1003);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR', 1005);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_ABNORMAL') or define('SWOOLE_WEBSOCKET_CLOSE_ABNORMAL', 1006);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR', 1008);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG') or define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING') or define('SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR') or define('SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR', 1011);

// todo get meaning
defined('SWOOLE_WEBSOCKET_CLOSE_TLS') or define('SWOOLE_WEBSOCKET_CLOSE_TLS', 1015);