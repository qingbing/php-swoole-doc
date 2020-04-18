<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

/**
 * TCP 客户端
 * SWOOLE_SOCK_TCP
 *
 * 测试
 *      开始服务器 ： php server.php
 *      执行客户端 ： php client.php
 */

$host = '172.16.37.128';
$port = 9501;

/**
 * 创建客户端
 */
$client = new \Swoole\Client(SWOOLE_SOCK_TCP);

// 连接服务器
$status = $client->connect('172.16.37.128', 9501) or die('连接失败');
var_dump('====== connect back ======');
var_dump($status);

// 向服务器发送数据
$num = $client->send('hello  world') or die('数据发送失败');
var_dump('====== send back ======');
var_dump($num);

// 从服务器结束收据
$data = $client->recv();

if (!$data) {
    die("接收数据失败");
}
var_dump("接收到的数据 ： {$data}");

/**
 * 关闭客户端
 */
$status = $client->close();
var_dump('====== close back ======');
var_dump($status);

